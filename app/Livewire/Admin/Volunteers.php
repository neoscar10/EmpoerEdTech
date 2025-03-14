<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Volunteer;


class Volunteers extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $volunteers = Volunteer::where('name', 'like', '%' . $this->search . '%')
        ->orWhere('email', 'like', '%' . $this->search . '%')
        ->orderBy('created_at', 'desc')
        ->paginate(20);


        return view('livewire.admin.volunteers', compact('volunteers'))->layout('layouts.admin', ['title' => 'Manage Volunteers']);
    }
}
