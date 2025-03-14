<div>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Manage Volunteers</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="card">
                <div class="card-body">
                    {{-- <div class="d-flex justify-content-between align-items-center my-3">
                        <input type="text" class="form-control w-25" placeholder="Search volunteers..."
                            wire:model="search">
                    </div> --}}

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Joined</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($volunteers as $index => $volunteer)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $volunteer->name }}</td>
                                    <td>{{ $volunteer->email }}</td>
                                    <td>{{ $volunteer->created_at->format('d M, Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No volunteers found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="mt-3">
                        {{ $volunteers->links() }}
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
