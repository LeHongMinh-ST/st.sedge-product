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

    public $provinceId;
    public $districtId;
    public $wardId;
    public $districts = [];
    public $wards = [];

    public function render()
    {
        //        $provinces = Province::query()->get();
        return view('livewire.client.component.checkout-info');
    }

    public function mount()
    {
        $cartCount = CartModel::instance()->count();

        if ($cartCount <= 0) {
            return redirect()->route('todo.cart');
        }
        //        $this->districts = District::query()->where('provinceId', $this->province_id)->get();
        //        $this->wards = Ward::query()->where('districtId', $this->district_id)->get();
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
        ];
    }

    public function message()
    {
        return [
            'fullname.required' => 'Họ và tên không được để trống',
            'phone_number.required' => 'Số điện thoại không được để trống',
            'phone_number.regex' => 'Số điện thoại không đúng định dạng',
            'address.required' => 'Địa chỉ không được để trống',
        ];
    }

    public function checkout(Request $request): void
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
        $order->status = OrderStatus::Pending;
        $order->code = $this->generateUniqueCode();
        $order->order_date = now()->setTimezone('Asia/Ho_Chi_Minh');
        $order->total = (int)str_replace(',', '', CartModel::instance()->subtotal());
        $order->save();

        $order->products()->attach($dataProduct);
        CartModel::instance()->destroy();

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
