<div>
    <main id="main" class="main">
        <div class="pagetitle d-flex justify-content-between align-items-center">
            <h1>Registered Participants</h1>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-title">Participants List</h5>

                            @if($participants->isEmpty())
                                <div class="alert alert-info text-center">
                                    No participants have registered yet.
                                </div>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Registered At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($participants as $index => $participant)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $participant->name }}</td>
                                                    <td>{{ $participant->email }}</td>
                                                    <td>{{ $participant->phone }}</td>
                                                    <td>{{ $participant->created_at->format('d M Y h:i A') }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="mt-3">
                                        {{ $participants->links('pagination::bootstrap-5') }}
                                    </div>                                    
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
