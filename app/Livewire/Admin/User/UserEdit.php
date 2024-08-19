<?php

declare(strict_types=1);

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UserEdit extends Component
{
    #[Validate(as: 'họ và tên')]
    public $fullname;

    #[Validate(as: 'email')]
    public $email;

    #[Validate(as: 'số điện thoại')]
    public $phone_number;

    public $id;

    public function rules()
    {
        return [
            'fullname' => 'required',
            'email' => 'required|email',
            'phone_number' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Họ và tên không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'phone_number.required' => 'Số điện thoại không được để trống',
        ];
    }

    public function render()
    {
        return view('livewire.admin.user.user-edit');
    }

    public function mount(): void
    {
        $this->id = request()->id;
        $user = User::query()->find($this->id);
        $this->fullname = $user->fullname;
        $this->email = $user->email;
        $this->phone_number = $user->phone_number;
    }

    public function update()
    {
        $this->validate();

        User::where('id', $this->id)->update([
            'fullname' => $this->fullname,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Cập nhật thông tin người dùng thành công');
    }
}
