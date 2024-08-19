<?php

declare(strict_types=1);

namespace App\Livewire\Login;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ResetPassword extends Component
{
    #[Validate(as: 'mật khẩu')]
    public $password;

    #[Validate(as: 'xác nhận mật khẩu')]
    public $confirmPassword;

    public $user;

    protected $listeners = [
        'openLogin' => 'openLogin'
    ];

    public function render()
    {
        return view('livewire.login.reset-password');
    }

    public function mount($user): void
    {
        $this->user = $user;
    }

    public function rules()
    {
        return [
            'password' => 'required',
            'confirmPassword' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Mật khẩu không được để trống',
            'confirmPassword.required' => 'Xác nhận mật khẩu không được để trống',
            'confirmPassword.same' => 'Xác nhận mật khẩu không khớp',
        ];
    }

    public function resetPassword(): void
    {
        $this->validate();

        User::where('id', $this->user->id)->update([
            'password' => bcrypt($this->password)
        ]);

        $this->dispatch('resetPasswordSuccess');
    }

    public function openLogin()
    {
        return redirect()->route('login');
    }
}
