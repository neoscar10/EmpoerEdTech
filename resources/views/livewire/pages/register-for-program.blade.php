<div class="container my-5">
    
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 mt-5 pt-1">
            <div style="margin-bottom: -20px">
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
            <div class="card shadow-lg rounded-3 mt-5">
                <div class="card-header form-header text-white text-center">
                    <h4 class="mb-0 text-white">Program Registration</h4>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="submit" wire:ignore.self>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Full Name</label>
                            <input type="text" wire:model.defer="name" class="form-control" placeholder="Enter your name">
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Email Address</label>
                            <input type="email" wire:model.defer="email" class="form-control" placeholder="Enter your email">
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Phone Number</label>
                            <input type="text" wire:model.defer="phone" class="form-control" placeholder="Enter your phone number">
                            @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-donation btn-lg">
                                <span wire:loading.remove><i class="fas fa-user-plus"></i> Register</span>
                                <span wire:loading><i class="fas fa-spinner fa-spin"></i> Submitting...</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            
        </div>
    </div>
</div>


<script>
    window.addEventListener('redirect-home', () => {
        setTimeout(() => {
            window.location.href = "/";
        }, 3000); // 3 seconds delay
    });
</script>
