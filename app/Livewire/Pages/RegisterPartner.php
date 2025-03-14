<?php

namespace App\Livewire\Pages;
use App\Models\Partner;

use Livewire\Component;

class RegisterPartner extends Component
{
    public $name, $type, $email, $phone, $website, $address, $description;

    protected $rules = [
        'name' => 'required|string|max:255',
        'type' => 'required|in:individual,organization',
        'email' => 'required|email|unique:partners,email',
        'phone' => 'nullable|string|max:20',
        'website' => 'nullable|url',
        'address' => 'nullable|string',
        'description' => 'nullable|string',
    ];

    public function submit()
    {
        $this->validate();

        Partner::create([
            'name' => $this->name,
            'type' => $this->type,
            'email' => $this->email,
            'phone' => $this->phone,
            'website' => $this->website,
            'address' => $this->address,
            'description' => $this->description,
        ]);

        session()->flash('success', 'Thank you for partnering with us! We will get in touch shortly');

        // Reset form fields
        $this->reset(['name', 'type', 'email', 'phone', 'website', 'address', 'description']);
    }
    public function render()
    {
        return view('livewire.pages.register-partner');
    }
}
