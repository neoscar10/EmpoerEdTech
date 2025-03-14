<?php

namespace App\Livewire\Admin;
use App\Models\Donation;

use Livewire\Component;

class Donations extends Component
{
    public $donors;

    public function mount()
    {
        $this->donors = Donation::latest()->get();
    }
    public function render()
    {
        return view('livewire.admin.donations')->layout('layouts.admin', ['title' => 'Donors']);
    }
}
