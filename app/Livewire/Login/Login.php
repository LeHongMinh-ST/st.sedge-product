<?php

declare(strict_types=1);

namespace App\Livewire\Login;

use App\Mail\ForgotPassword;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class Login extends Component
{
    protected $listeners = [
        'checkEmail' => 'checkEmail',
    ];

    public function render()
    {
        return view('livewire.login.login');
    }

    public function openForgotPassword(): void
    {
        $this->dispatch('openForgotPassword');
    }

    public function checkEmail($email): void
    {
        if (User::where('email', $email)->exists()) {
            $user = User::where('email', $email)->first();
            $token = Str::random(64);

            DB::table('password_reset')->insert([
                'email' => $email,
                'token' => $token,
                'created_at' => Carbon::now(),
            ]);
            Mail::to($email)->send(new ForgotPassword($user, $token));
        } else {
            $this->dispatch('checkEmailError');
        }
    }
}
