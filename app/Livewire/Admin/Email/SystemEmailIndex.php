<?php

declare(strict_types=1);

namespace App\Livewire\Admin\Email;

use App\Models\SystemEmail;
use Livewire\Component;

class SystemEmailIndex extends Component
{
    public $gmailId;
    public $search;

    protected $listeners = [
        'confirmDelete' => 'confirmDelete',
    ];

    public function render()
    {
        $gmails = SystemEmail::query()
            ->search($this->search)
            ->paginate(5);
        return view('livewire.admin.email.system-email-index')->with([
            'gmails' => $gmails
        ]);
    }

    public function openDeleteModel($id): void
    {
        $this->gmailId = $id;
        $this->dispatch('openDeleteModel');
    }

    public function confirmDelete(): void
    {
        SystemEmail::destroy($this->gmailId);
    }
}
