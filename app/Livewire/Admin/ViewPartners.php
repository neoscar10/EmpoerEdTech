<?php

namespace App\Livewire\Admin;
use App\Models\Partner;

use Livewire\Component;

class ViewPartners extends Component
{
    public function render()
    {
        return view('livewire.admin.view-partners', ['partners' => Partner::paginate(20)])->layout('layouts.admin');
    }
}
