<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Donation as DonationModel;
use Stripe\Stripe;
use Stripe\Checkout\Session;


class SuccessPage extends Component
{
    public $sessionId;

    public function mount()
    {
        $this->sessionId = request()->query('session_id');

        if ($this->sessionId) {
            $this->updatePaymentStatus();
        }
    }


    private function updatePaymentStatus()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            // Fetch payment session details
            $session = Session::retrieve($this->sessionId);

            if ($session->payment_status === 'paid') {
                // Find the donation using the transaction_id
                $donation = DonationModel::where('transaction_id', $this->sessionId)->first();

                if ($donation) {
                    $donation->update(['payment_status' => 'completed']);
                }
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to verify payment: ' . $e->getMessage());
        }
    }
    public function render()
    {
        
        return view('livewire.pages.success-page');
    }
}
