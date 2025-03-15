<?php

namespace App\Livewire\Pages;

use App\Models\Donation as DonationModel; // Alias the model
use Livewire\Component;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class Donation extends Component
{
    public $name, $email, $amount;

    public function submit()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'amount' => 'required|numeric|min:1',
        ]);

        // Set Stripe API key
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            // Create Stripe Checkout Session for donation
            $sessionCheckout = Session::create([
                'payment_method_types' => ['card'],
                'customer_email' => $this->email,
                'mode' => 'payment',
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Charity Donation',
                            'description' => 'Support our charity with your generous donation.',
                        ],
                        'unit_amount' => $this->amount * 100, // Convert dollars to cents
                    ],
                    'quantity' => 1,
                ]],
                'success_url' => route('donation.success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('donation.cancel'),
            ]);

            // Store the donation record before redirecting
            DonationModel::create([
                'name' => $this->name,
                'email' => $this->email,
                'amount' => $this->amount,
                'payment_method' => 'stripe',
                'transaction_id' => $sessionCheckout->id,
                'payment_status' => 'pending',
            ]);

            return redirect()->away($sessionCheckout->url);
        } catch (\Exception $e) {
            session()->flash('error', 'Stripe error: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.pages.donation');
    }
}
