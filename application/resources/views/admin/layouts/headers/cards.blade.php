<div class="row">

@can('manage-users', App\User::class)

    <div class="col-xl-3 col-md-6">

        <div class="card card-stats">

            <!-- Card body -->

            <div class="card-body">

                <div class="row">

                    <a href="{{ route('admin::alumni-registrations.index') }}"><div class="col">

                        <h5 class="card-title text-uppercase text-muted mb-0">Alumni Registration </h5>

                        <span class="h2 font-weight-bold mb-0">{{\App\Models\AlumniRegistration::count()}}</span>

                    </div></a>

                <div class="col-auto">

                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">

                        <i class="ni ni-active-40"></i>

                    </div>

                </div>

            </div>

            <p class="mt-3 mb-0 text-sm">

                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>

                <span class="text-nowrap"></span>

            </p>

        </div>

    </div>

</div>

<div class="col-xl-3 col-md-6">

    <div class="card card-stats">

        <!-- Card body -->

        <div class="card-body">

            <div class="row">

                 <a href="{{ route('admin::transfer-certificates.index') }}"><div class="col">

                    <h5 class="card-title text-uppercase text-muted mb-0">Transfer Certificates  </h5>

                    <span class="h2 font-weight-bold mb-0">{{\App\Models\TransferCertificate::count()}}</span>

                </div></a>

                <div class="col-auto">

                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">

                        <i class="ni ni-chart-pie-35"></i>

                    </div>

                </div>

            </div>

            <p class="mt-3 mb-0 text-sm">

                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>

                <span class="text-nowrap"></span>

            </p>

        </div>

    </div>

</div>

<div class="col-xl-3 col-md-6">

    <div class="card card-stats">

        <!-- Card body -->

        <div class="card-body">

            <div class="row">

                <a href="{{ route('admin::news.index') }}"><div class="col">

                    <h5 class="card-title text-uppercase text-muted mb-0">Flash News</h5>

                    <span class="h2 font-weight-bold mb-0">{{\App\Models\News::where('flash',1)->count()}}</span>

                </div></a>

                <div class="col-auto">

                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">

                        <i class="ni ni-money-coins"></i>

                    </div>

                </div>

            </div>

            <p class="mt-3 mb-0 text-sm">

                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>

                <span class="text-nowrap"></span>

            </p>

        </div>

    </div>

</div>

    @endcan

</div>

