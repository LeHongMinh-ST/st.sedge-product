<?php

declare(strict_types=1);

namespace App\Livewire\Client\Component;

use App\Enums\OrderStatus;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart as CartModel;
use Illuminate\Http\Request;
use Kjmtrue\VietnamZone\Models\District;
use Kjmtrue\VietnamZone\Models\Province;
use Kjmtrue\VietnamZone\Models\Ward;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CheckoutInfo extends Component
{
    #[Validate(as: 'họ và tên')]
    public $fullname;

    #[Validate(as: 'email')]
    public string $email = '';

    #[Validate(as: 'số điện thoại')]
    public string $phone_number = '';

    #[Validate(as: 'địa chỉ')]
    public $address;

    #[Validate(as: 'ghi chú')]
    public $note;

    #[Validate(as: 'tỉnh/thành phố')]
    public $provinceId;

    #[Validate(as: 'quận/huyện')]
    public $districtId;

    #[Validate(as: 'phường/xã')]
    public $wardId;
    public $districts = [];
    public $wards = [];

    public function render()
    {
        $provinces = Province::query()->get();
        return view('livewire.client.component.checkout-info')->with([
            'provinces' => $provinces
        ]);
    }

    public function mount()
    {
        $cartCount = CartModel::instance()->count();

        if ($cartCount <= 0) {
            return redirect()->route('todo.cart');
        }
    }

    public function updatedProvinceId($value): void
    {
        $this->provinceId = $value;
        $this->districtId = null;
        $this->wardId = null;
        $this->districts = District::query()->where('province_id', $this->provinceId)->get();
    }

    public function updatedDistrictId($value): void
    {
        $this->districtId = $value;
        $this->wardId = null;
        $this->wards = Ward::query()->where('district_id', $this->districtId)->get();
    }

    public function rules(): array
    {
        return [
            'fullname' => 'required',
            'phone_number' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
            'address' => 'required',
            'provinceId' => 'required|not_in:0',
            'districtId' => 'required|not_in:0',
            'wardId' => 'required|not_in:0',
        ];
    }

    public function message()
    {
        return [
            'fullname.required' => 'Họ và tên không được để trống',
            'phone_number.required' => 'Số điện thoại không được để trống',
            'phone_number.regex' => 'Số điện thoại không đúng định dạng',
            'address.required' => 'Địa chỉ cụ thể không được để trống',
            'provinceId.not_in' => 'Tỉnh/Thành phố không được để trống',
            'districtId.not_in' => 'Quận/Huyện không được để trống',
            'wardId.not_in' => 'Phường/Xã không được để trống',
        ];
    }

    public function checkout(Request $request)
    {
        $this->validate();
        $cart = CartModel::instance()->content();
        $dataProduct = [];

        foreach ($cart as $item) {
            $dataProduct[$item->id] = [
                'quantity' => $item->qty,
                'price' => $item->price,
                'thumbnail' => $item->options->thumbnail,
                'total' => $item->qty * $item->price
            ];
        }

        $order = new Order();
        $order->fullname = $this->fullname;
        $order->email = $this->email;
        $order->phone_number = $this->phone_number;
        $order->address = $this->address;
        $order->note = $this->note;
        $order->province_id = $this->provinceId;
        $order->district_id = $this->districtId;
        $order->ward_id = $this->wardId;
        $order->status = OrderStatus::Pending;
        $order->code = $this->generateUniqueCode();
        $order->order_date = now()->setTimezone('Asia/Ho_Chi_Minh');
        $order->total = (int)str_replace(',', '', CartModel::instance()->subtotal());
        $order->save();

        $order->products()->attach($dataProduct);
        CartModel::instance()->destroy();
        $this->dispatch('post-created');

        return redirect()->route('todo.checkout.success', ['id' => $order->id]);

    }

    public function generateUniqueCode(): string
    {
        $text = 'ABCDEFGHILKMNOPQRSTUVWXYZ';
        $code = mb_substr(str_shuffle($text), 0, 10) . rand(10000, 99999);

        if (Order::query()->where('code', $code)->exists()) {
            return $this->generateUniqueCode();
        }

        return $code;
    }
}
