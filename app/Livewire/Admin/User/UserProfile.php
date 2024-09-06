<?php

declare(strict_types=1);

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class UserProfile extends Component
{
    public $id;

    public function mount($id): void
    {
        $this->id = $id;
    }

    public function render()
    {
        $user = User::find($this->id);
        return view('livewire.admin.user.user-profile')->with('user', $user);
    }
}
