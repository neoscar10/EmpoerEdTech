<?php

namespace App\Livewire\Pages;

use App\Models\upcoming_project;
use Livewire\Component;
use App\Models\Project;

class Home extends Component
{
    public function render()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();

        $upcoming_projects = upcoming_project::orderBy('created_at', 'desc')->get();
        return view('livewire.pages.home', compact('projects', 'upcoming_projects'));
    }
}
