<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Volunteer;
use App\Models\Donation;
use App\Models\Partner;
use App\Models\Project;

class Dashboard extends Component
{
    public $totalUsers, $totalVolunteers, $totalDonations, $totalProjects, $totalPartners;

    public function mount()
    {
        $this->totalUsers = User::count();
        $this->totalVolunteers = Volunteer::count();
        $this->totalDonations = Donation::sum('amount'); // Assuming 'amount' column exists
        $this->totalProjects = Project::count();
        $this->totalPartners = Partner::count();
    }
    public function render()
    {
        return view('livewire.admin.dashboard')->layout('layouts.admin', ['title' => 'Admin Dashboard']);
    }
}
