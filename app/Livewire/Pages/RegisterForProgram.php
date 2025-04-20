<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\ProgramParticipant;
use Illuminate\Support\Facades\Validator;

class RegisterForProgram extends Component
{
    public $name, $phone, $email;

    public $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|email|unique:program_participants,email',
        'phone' => 'string|max:255|required',
    ];

    public function submit(){
        $this->validate();

        ProgramParticipant::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            
        ]);

        session()->flash('success', 'Registration for this upcoming event successful');
        $this->reset();

        $this->dispatch('redirect-home'); // dispatch event to trigger redirect
    }
    public function render()
    {
        return view('livewire.pages.register-for-program');
    }
}
