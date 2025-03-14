<div>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Total Users Card -->
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card">
                        <div class="card-body">
                            <h5 class="card-title">Admin</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon bg-primary text-white p-3 rounded-circle">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h3>{{ $totalUsers }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Total Users Card -->

                <!-- Total Partners Card -->
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card">
                        <div class="card-body">
                            <h5 class="card-title">Partners</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon bg-primary text-white p-3 rounded-circle">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h3>{{ $totalPartners }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Total Users Card -->

                <!-- Total Volunteers Card -->
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card">
                        <div class="card-body">
                            <h5 class="card-title">Volunteers</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon bg-success text-white p-3 rounded-circle">
                                    <i class="bi bi-person-heart"></i>
                                </div>
                                <div class="ps-3">
                                    <h3>{{ $totalVolunteers }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Total Volunteers Card -->

                <!-- Total Donations Card -->
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card">
                        <div class="card-body">
                            <h5 class="card-title">Total Donations</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon bg-warning text-white p-3 rounded-circle">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                                <div class="ps-3">
                                    <h3>${{ number_format($totalDonations, 2) }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Total Donations Card -->

                <!-- Total Projects Card -->
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card">
                        <div class="card-body">
                            <h5 class="card-title">Projects</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon bg-danger text-white p-3 rounded-circle">
                                    <i class="bi bi-folder"></i>
                                </div>
                                <div class="ps-3">
                                    <h3>{{ $totalProjects }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Total Projects Card -->

            </div><!-- End Row -->
        </section>
    </main>
    

</div>
