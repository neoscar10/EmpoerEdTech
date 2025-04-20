<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\upcoming_project;
use Illuminate\Support\Facades\Storage;

class UpcomingProjects extends Component
{
    use WithFileUploads;

    public $title, $description, $editId, $newImage, $oldImage, $deleteId;

    // Function to open delete confirmation modal
    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $this->dispatch('show-delete-modal');
    }

    // Function to delete project
    public function deleteProject()
    {
        $project = upcoming_project::find($this->deleteId);
        if ($project) {
            Storage::delete('public/' . $project->image); // Delete old image
            $project->delete();
        }

        $this->dispatch('close-modal', ['id' => 'deleteProjectModal']);
    }

    // Function to open edit modal and populate fields
    public function editProject($id)
    {
        $project = upcoming_project::find($id);
        if ($project) {
            $this->editId = $project->id;
            $this->title = $project->title;
            $this->description = $project->description;
            $this->oldImage = $project->image; // Store old image path
            $this->newImage = null;

            $this->dispatch('show-edit-modal');
        }
    }

    // Function to update project details
    public function updateProject()
{
    $project = upcoming_project::find($this->editId);

    if ($project) {
        $project->update([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        if ($this->newImage) {
            Storage::delete('public/' . $project->image);
            $path = $this->newImage->store('projects', 'public');
            $project->update(['image' => $path]);
        }

        // Close the modal
        $this->dispatch('close-modal', ['id' => 'editProjectModal']);

        // Reset form fields AFTER modal closes
        $this->reset(['title', 'description', 'newImage', 'oldImage', 'editId']);

        // Dispatch a browser event to ensure Bootstrap fully hides the modal
        $this->dispatch('force-modal-hide');
    }
}


    public function render()
    {
        return view('livewire.admin.upcoming-projects', [
            'projects' => upcoming_project::all(),
        ])->layout('layouts.admin');
    }
}
