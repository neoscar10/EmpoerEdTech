<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Volunteer;

class VolunteerForm extends Component
{
    public $name, $email, $phone, $message;

    protected $rules = [
        'name' => 'required|string|min:3',
        'email' => 'required|email|unique:volunteers,email',
        'phone' => 'nullable|string',
        'message' => 'required|string|min:10',
    ];

    public function submit()
    {
        $this->validate();

        Volunteer::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);

        
        session()->flash('success', 'Thank you for volunteering! We will reach out soon.');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.pages.volunteer-form');
    }
}
