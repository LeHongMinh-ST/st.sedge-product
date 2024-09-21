<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Email;

use App\Models\SystemEmail;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SystemEmailEdit extends Component
{
    public $id;

    #[Validate(as: 'địa chỉ gmail đăng kí')]
    public $mailUsername;

    #[Validate(as: 'mật khẩu gmail ứng dụng')]
    public $mailPassword;

    #[Validate(as: 'tên địa chỉ gmail gửi')]
    public $mailFromName;

    public function render()
    {
        return view('livewire.admin.email.system-email-edit');
    }

    public function update()
    {
        $this->validate();

        $systemEmail = SystemEmail::query()->find($this->id);
        $systemEmail->update([
            'mail_username' => $this->mailUsername,
            'mail_password' => $this->mailPassword,
            'mail_from_address' => $this->mailUsername,
            'mail_from_name' => $this->mailFromName,
        ]);

        session()->flash('success', 'Cập nhật email hệ thống thành công');

        return redirect()->route('admin.system-email.index');
    }

    public function mount(): void
    {
        $systemEmail = SystemEmail::query()->find($this->id);
        $this->mailUsername = $systemEmail->mail_username;
        $this->mailPassword = $systemEmail->mail_password;
        $this->mailFromName = $systemEmail->mail_from_name;
    }

    public function rules()
    {
        return [
            'mailUsername' => 'required|email',
            'mailPassword' => 'required',
            'mailFromName' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'mailUsername.required' => 'Địa chỉ gmail đăng kí không được để trống',
            'mailUsername.email' => 'Địa chỉ gmail đăng kí không đúng định dạng',
            'mailPassword.required' => 'Mật khẩu gmail ứng dụng không được để trống',
            'mailFromName.required' => 'Tên địa chỉ gmail gửi không được để trống',
        ];
    }
}
