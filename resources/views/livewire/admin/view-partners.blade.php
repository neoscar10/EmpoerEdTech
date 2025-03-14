<div>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Partners</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Partner Type</th>
                                <th>Website</th>
                                <th>Adress</th>
                                <th>Joined</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($partners as $index => $partner)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $partner->name }}</td>
                                    <td>{{ $partner->email }}</td>
                                    <td>{{ $partner->phone}}</td>
                                    <td>{{ $partner->type }}</td>
                                    <td><a href="{{$partner->website}}">{{$partner->website ? $partner->website : 'Null'}}</a></td>
                                    <th>{{$partner->address ? $partner->address : 'Null'}}</th>
                                    <td>{{ $partner->created_at->format('d M, Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No partners found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="mt-3">
                        {{ $partners->links() }}
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
