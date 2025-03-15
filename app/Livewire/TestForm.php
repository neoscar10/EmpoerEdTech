<?php

namespace App\Livewire;

use Livewire\Component;

class TestForm extends Component
{
    public $name;

    public function submit()
    {
        dd('Form submitted: ' . $this->name);
    }

    public function render()
    {
        return view('livewire.test-form');
    }
}

