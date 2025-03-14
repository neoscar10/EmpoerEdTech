<div>
    <main id="main" class="main">
        <div class="pagetitle d-flex justify-content-between align-items-center">
            <h1>Projects</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <h5 class="card-title">Projects List</h5>
                                <a href="{{url('add-project')}}" class="btn btn-primary">
                                    <i class="bi bi-plus-lg"></i> Add Project
                                </a>
                            </div>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $project)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('storage/'.$project->image) }}" alt="Project Image" class="img-thumbnail" width="100">
                                        </td>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->description }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <!-- Edit Button -->
                                                <button class="btn btn-primary btn-sm d-flex align-items-center"
                                                    wire:click="editProject({{ $project->id }})">
                                                    <i class="bi bi-pencil me-1"></i> Edit
                                                </button>

                                                <!-- Delete Button -->
                                                <button class="btn btn-danger btn-sm d-flex align-items-center"
                                                    wire:click="confirmDelete({{ $project->id }})">
                                                    <i class="bi bi-trash me-1"></i> Delete
                                                </button>
                                            </div>
                                        </td>                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="deleteProjectModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this project?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" wire:click="deleteProject">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Project Modal -->
        <div class="modal fade" id="editProjectModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Project</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="updateProject">
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" wire:model="title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" wire:model="description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" wire:model="newImage">
                                <div class="mt-2">
                                    @if ($oldImage)
                                        <img src="{{ asset('storage/'.$oldImage) }}" class="img-thumbnail" width="100">
                                    @endif
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>

<script>
    window.addEventListener('show-delete-modal', () => {
        let deleteModal = new bootstrap.Modal(document.getElementById('deleteProjectModal'));
        deleteModal.show();
    });

    window.addEventListener('show-edit-modal', () => {
        let editModal = new bootstrap.Modal(document.getElementById('editProjectModal'));
        editModal.show();
    });

    window.addEventListener('close-modal', (event) => {
    let modalElement = document.getElementById(event.detail.id);
    if (modalElement) {
        let modal = bootstrap.Modal.getInstance(modalElement);
        if (modal) {
            modal.hide();
            modal.dispose(); // Ensures it doesn't persist
        }
    }
});

// Ensure forced modal close in case of duplicate triggers
window.addEventListener('force-modal-hide', () => {
    document.querySelectorAll('.modal.show').forEach((modalEl) => {
        let modal = bootstrap.Modal.getInstance(modalEl);
        if (modal) {
            modal.hide();
            modal.dispose();
        }
    });
});


</script>
