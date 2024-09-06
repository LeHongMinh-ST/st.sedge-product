<?php

declare(strict_types=1);

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public $userId;
    public $search;

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];

    public function render()
    {
        $users = User::query()
            ->search($this->search)
            ->paginate(10);

        return view('livewire.admin.user.user-index', [
            'users' => $users
        ]);
    }

    public function openDeleteModel($id): void
    {
        $this->userId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function confirmDelete(): void
    {
        User::destroy($this->userId);
    }

    public function checkAdmin(): void
    {
        $this->dispatch('check');
    }
}
