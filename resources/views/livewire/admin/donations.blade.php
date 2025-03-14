<div>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Donors</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">List of Donors</h5>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Amount Donated</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($donors as $index => $donor)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $donor->name }}</td>
                                        <td>{{ $donor->email }}</td>
                                        <td>${{ number_format($donor->amount, 2) }}</td>
                                        <td>{{ $donor->created_at->format('d M, Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No donors found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                   
                </div>
            </div>
        </section>
    </main>
</div>
