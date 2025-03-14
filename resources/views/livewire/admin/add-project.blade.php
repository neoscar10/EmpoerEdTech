<div>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Add Project</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-folder-plus"></i> Add New Project</h5>

                    @if (session()->has('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form wire:submit.prevent="save">
                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-heading"></i> Project Title</label>
                            <input type="text" class="form-control" wire:model="title" placeholder="Enter project title">
                            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-align-left"></i> Description</label>
                            <textarea class="form-control" wire:model="description" rows="4" placeholder="Enter project description"></textarea>
                            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-image"></i> Project Image</label>
                            <input type="file" class="form-control" wire:model="image">
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" class="mt-2 img-thumbnail" width="150">
                            @endif
                            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label"><i class="fas fa-list"></i> Key Points</label>
                            @foreach($key_points as $index => $point)
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" wire:model="key_points.{{ $index }}" placeholder="Enter key point">
                                    <button type="button" class="btn btn-danger" wire:click="removeKeyPoint({{ $index }})"><i class="fas fa-trash"></i></button>
                                </div>
                            @endforeach
                            <button type="button" class="btn btn-secondary mt-2" wire:click="addKeyPoint"><i class="fas fa-plus"></i> Add Key Point</button>
                            @error('key_points.*') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save Project</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</div>
