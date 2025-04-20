<?php

namespace App\Livewire\Admin;

use App\Models\ProgramParticipant;
use Livewire\Component;

class ParticipantsList extends Component
{
    public function render()
    {
        $participants = ProgramParticipant::latest()->paginate(10);
        return view('livewire.admin.participants-list', [
            'participants' => $participants
        ])->layout('layouts.admin');
    }
}
