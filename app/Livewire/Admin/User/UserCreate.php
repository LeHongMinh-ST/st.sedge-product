<?php

declare(strict_types=1);

namespace App\Livewire\Admin\User;

use App\Enums\Role;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UserCreate extends Component
{
    #[Validate(as: 'họ và tên')]
    public $fullname;

    #[Validate(as: 'email')]
    public $email;

    #[Validate(as: 'số điện thoại')]
    public $phone_number;

    #[Validate(as: 'mật khẩu')]
    public $password;
    public function render()
    {
        return view('livewire.admin.user.user-create');
    }

    public function store()
    {
        $this->validate();

        User::create([
            'fullname' => $this->fullname,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'password' => bcrypt($this->password),
            'role' => Role::Admin,
        ]);

        session()->flash('success', 'Thêm mới người dùng thành công');

        return redirect()->route('admin.users.index');
    }

    protected function rules()
    {
        return [
            'fullname' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone_number' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match("/^[0-9]{10}$/", $value)) {
                        return $fail('Số điện thoại chưa đúng định dạng ');
                    }
                }
            ],
            'password' => 'required',
        ];
    }

    protected function messages()
    {
        return [
            'fullname.required' => 'Họ và tên không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'phone_number.required' => 'Số điện thoại không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
        ];
    }
}
