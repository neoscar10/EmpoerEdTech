<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\upcoming_project;
class AddUpcomingProjects extends Component
{
    use WithFileUploads;

    public $title, $description, $image, $key_points = [];

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|max:10200', // Max 2MB image
        'key_points' => 'nullable|array',
        'key_points.*' => 'string|max:255'
    ];

    public function addKeyPoint()
    {
        $this->key_points[] = '';
    }

    public function removeKeyPoint($index)
    {
        unset($this->key_points[$index]);
        $this->key_points = array_values($this->key_points);
    }

    public function save()
    {
        $this->validate();

        $imagePath = $this->image ? $this->image->store('projects', 'public') : null;

        upcoming_project::create([
            'title' => $this->title,
            'description' => $this->description,
            'image' => $imagePath,
            'key_points' => array_values(array_filter($this->key_points))
        ]);

        session()->flash('success', 'Project added successfully!');
        return redirect()->route('upcoming-projects'); // Change route as needed
    }

    public function render()
    {
        return view('livewire.admin.add-upcoming-projects')->layout('layouts.admin');
    }
}
