

<div class="container d-flex justify-content-center align-items-center my-5" style="min-height: 100vh; padding-top: 100px;">
    <div class="col-md-8 col-lg-6">
        <h2 class="text-center mb-4">Become a Partner</h2>
        <div class="card shadow p-4">
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form wire:submit.prevent="submit">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" wire:model="name" class="form-control">
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Type <span class="text-danger">*</span></label>
                    <select wire:model="type" class="form-control">
                        <option value="">-- Select --</option>
                        <option value="individual">Individual</option>
                        <option value="organization">Organization</option>
                    </select>
                    @error('type') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" wire:model="email" class="form-control">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" wire:model="phone" class="form-control">
                    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Website (for organizations)</label>
                    <input type="url" wire:model="website" class="form-control">
                    @error('website') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea wire:model="address" class="form-control"></textarea>
                    @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea wire:model="description" class="form-control"></textarea>
                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <button type="submit" class="btn btn-donation w-100" wire:loading.attr="disabled">
                    <span wire:loading.remove>Submit</span>
                    <span wire:loading>Processing...</span>
                </button>
            </form>
        </div>
    </div>
</div>
