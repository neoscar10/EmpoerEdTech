<style>
    .header{
        background-color: #1e4356;;
    }
</style>

<div class="container volunteer-form pt-5">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow mx-auto" style="max-width: 600px;">
        <div class="card-header text-white text-center" style="background-color: #68a4c4;">
            <h4 class="mb-0 text-white">Become a Volunteer</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="submit">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" wire:model="name" id="name" placeholder="Enter your name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" wire:model="email" id="email" placeholder="Enter your email">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number (Optional)</label>
                    <input type="text" class="form-control" wire:model="phone" id="phone" placeholder="Enter your phone number">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Why do you want to volunteer?</label>
                    <textarea class="form-control" wire:model="message" id="message" rows="4" placeholder="Write your motivation here"></textarea>
                    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="btn text-white w-100" style="background-color: #68a4c4;">
                    Submit Application
                </button>
            </form>
        </div>
    </div>
</div>
