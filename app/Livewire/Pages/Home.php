<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Project;

class Home extends Component
{
    public function render()
    {
        $projects = Project::all();
        return view('livewire.pages.home', compact('projects'));
    }
}
