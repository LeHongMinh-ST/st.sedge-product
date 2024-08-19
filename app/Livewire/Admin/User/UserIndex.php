<?php

declare(strict_types=1);

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public $userId;

    protected $listeners = [
        'comfirmDelete' => 'comfirmDelete'
    ];

    public function render()
    {
        $users = User::query()->paginate(10);

        return view('livewire.admin.user.user-index', [
            'users' => $users
        ]);
    }

    public function openDeleteModel($id): void
    {
        $this->userId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function comfirmDelete(): void
    {
        User::destroy($this->userId);
    }
}
