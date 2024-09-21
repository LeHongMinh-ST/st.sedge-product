<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Email;

use App\Models\SystemEmail;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SystemEmailCreate extends Component
{
    #[Validate(as: 'địa chỉ gmail đăng kí')]
    public $mailUsername;

    #[Validate(as: 'mật khẩu gmail ứng dụng')]
    public $mailPassword;

    #[Validate(as: 'tên địa chỉ gmail gửi')]
    public $mailFromName;

    public function render()
    {
        return view('livewire.admin.email.system-email-create');
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

    public function store()
    {
        $this->validate();

        SystemEmail::create([
            'mail_username' => $this->mailUsername,
            'mail_password' => $this->mailPassword,
            'mail_from_address' => $this->mailUsername,
            'mail_from_name' => $this->mailFromName,
        ]);

        session()->flash('success', 'Thêm mới email thành công');
        return redirect()->route('admin.system-email.index');
    }
}
