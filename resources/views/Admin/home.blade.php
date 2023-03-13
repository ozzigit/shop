@extends('layouts.admin')
@include('Admin.parts.left-bar')
@section('content')

    <div class="main">
        @include('Admin.parts.top-bar')
        <main class="content">
            <div class="container-fluid">

                @include('Admin.parts.header')
                <div class="row">
                    <div class="">
                        @include('Admin.parts.example-resent-movement')

                    </div>

                </div>
                <div class="row">
                    <div class="col-12  col-xxl-6 d-flex">
                        <div class="flex-fill w-100">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col mt-0">
                                                    <h5 class="card-title">Sales Today</h5>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="avatar">
                                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                                            <i class="align-middle" data-feather="truck"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h1 class="display-5 mt-1 mb-3">2.562</h1>
                                            <div class="mb-0">
                                                <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.65% </span>
                                                Less sales than usual
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col mt-0">
                                                    <h5 class="card-title">Visitors Today</h5>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="avatar">
                                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                                            <i class="align-middle" data-feather="users"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h1 class="display-5 mt-1 mb-3">17.212</h1>
                                            <div class="mb-0">
                                                <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.50% </span>
                                                More visitors than usual
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col mt-0">
                                                    <h5 class="card-title">Total Earnings</h5>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="avatar">
                                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                                            <i class="align-middle" data-feather="dollar-sign"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h1 class="display-5 mt-1 mb-3">$24.300</h1>
                                            <div class="mb-0">
                                                <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 8.35% </span>
                                                More earnings than usual
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col mt-0">
                                                    <h5 class="card-title">Pending Orders</h5>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="avatar">
                                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                                            <i class="align-middle" data-feather="shopping-cart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h1 class="display-5 mt-1 mb-3">43</h1>
                                            <div class="mb-0">
                                                <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -4.25% </span>
                                                Less orders than usual
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-3 d-flex ">
                        @include('Admin.parts.example-calendar')
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6  col-xxl-3 d-flex">
                        @include('Admin.parts.example-monthly-sales')
                    </div>

                </div>
                <div class="row">
                    <div class=" d-flex">
                        @include('Admin.parts.example-table')

                    </div>
                </div>

            </div>
        </main>
        @include('Admin.parts.footer')
    </div>

	<svg width="0" height="0" style="position:absolute">
		<defs>
			<symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
				<path
					d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
				</path>
			</symbol>
		</defs>
	</svg>

    @vite(['resources/js/Admin/app.js' ])
    @vite(['resources/js/Admin/chartjs-dashboard.js' ])
    @vite(['resources/js/Admin/vectormap.js' ])
    @vite(['resources/js/Admin/projects-table.js' ])
    @vite(['resources/js/Admin/datetimepicker.js' ])

@endsection
