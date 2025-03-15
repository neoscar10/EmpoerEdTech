
<div class="container my-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 mt-5 pt-1">
            <div class="card shadow-lg rounded-3 mt-5">
                <div class="card-header form-header text-white text-center">
                    <h4 class="mb-0 text-white ">Make a Donation</h4>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="submit" wire:ignore.self>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Full Name</label>
                            <input type="text" wire:model="name" class="form-control" placeholder="Enter your name">
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Email Address</label>
                            <input type="email" wire:model="email" class="form-control" placeholder="Enter your email">
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Donation Amount ($)</label>
                            <input type="number" wire:model="amount" class="form-control" placeholder="Enter amount">
                            @error('amount') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-donation btn-lg">
                                <span wire:loading.remove><i class="fas fa-donate"></i> Donate Now</span>
                               <span wire:loading> <i class="fas fa-donate"></i> Processing...</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            @if(session()->has('success'))
                <div class="alert alert-success mt-3 text-center">
                    {{ session('success') }}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger mt-3 text-center">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
</div>

