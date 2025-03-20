<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Admin\AddProject;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Donations;
use App\Livewire\Admin\Projects;
use App\Livewire\Admin\ViewPartners;
use App\Livewire\Admin\Volunteers;
use App\Livewire\Pages\About;
use App\Livewire\Pages\DigitalEmpowerment;
use App\Livewire\Pages\Donation;
use App\Livewire\Pages\EnvironmentalSustainability;
use App\Livewire\Pages\EssentialSupport;
use App\Livewire\Pages\Gallery;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\RegisterPartner;
use App\Livewire\Pages\SuccessPage;
use App\Livewire\Pages\VolunteerForm;
use Illuminate\Support\Facades\Route;


use App\Livewire\TestForm;
Route::get('/test-form', TestForm::class);



Route::middleware('web')->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/about', About::class)->name('about');
    Route::get('gallery', Gallery::class)->name('gallery');
    Route::get('/donation', Donation::class)->name('donation');
    Route::get('/partner', RegisterPartner::class)->name('partner');
    Route::get('volunteer', VolunteerForm::class)->name('volunteer');
    Route::get('/digitalEmpowerment', DigitalEmpowerment::class)->name('digitalEmpoerment');
    Route::get('/environmentalSustainability', EnvironmentalSustainability::class)->name('environmentalSustainability');
    Route::get('/essentialSupport', EssentialSupport::class)->name('essentialSupport');
});


//Stripe
Route::get('/donation/success', SuccessPage::class)->name('donation.success');
Route::get('/donation/cancel', Donation::class)->name('donation.cancel');



// Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/volunteers', Volunteers::class)->name('volunteers');
    Route::get('/donations', Donations::class)->name('donations');
    Route::get('/projects', Projects::class)->name('projects');
    Route::get('/add-project', AddProject::class)->name('add-project');
    Route::get('/partners', ViewPartners::class)->name('partners');
});



// Routes from Breeze
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
