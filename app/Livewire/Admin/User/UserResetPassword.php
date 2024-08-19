<?php

declare(strict_types=1);

namespace App\Livewire\Admin\User;

use App\Models\User;
use Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UserResetPassword extends Component
{
    #[Validate(as: 'Mật khẩu cũ')]
    public $oldPassword;

    #[Validate(as: 'Mật khẩu mới')]
    public $newPassword;

    #[Validate(as: 'Xác nhận mật khẩu')]
    public $confirmPassword;

    public $id;
    public $password;
    public function render()
    {
        return view('livewire.admin.user.user-reset-password');
    }

    public function mount(): void
    {
        $this->id = request()->id;
        $this->password = User::where('id', $this->id)->first()->password;
    }

    public function rules()
    {
        return [
            'oldPassword' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!Hash::check($value, $this->password)) {
                        return $fail('Mật khẩu cũ không đúng');
                    }
                }
            ],
            'newPassword' => 'required',
            'confirmPassword' => 'required|same:newPassword',
        ];
    }

    public function messages()
    {
        return [
            'oldPassword.required' => 'Mật khẩu cũ không được để trống',
            'newPassword.required' => 'Mật khẩu mới không được để trống',
            'confirmPassword.required' => 'Xác nhận mật khẩu không được để trống',
            'confirmPassword.same' => 'Xác nhận mật khẩu không khớp',
        ];
    }

    public function resetPassword()
    {
        $this->validate();
        User::where('id', $this->id)->update([
            'password' => bcrypt($this->newPassword),
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Đổi mật khẩu thành công');
    }
}
