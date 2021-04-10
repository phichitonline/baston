@extends('layouts.app')

@section('head')
    <!-- Daterangepicker -->
    <link rel="stylesheet" href="{{ url('vendors/datepicker/daterangepicker.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header">
        <div class="page-title">
            <h3>Helpdesk Dashboard</h3>
            <div>
                <div id="helpdesk-dashboard-daterangepicker" class="btn btn-outline-light">
                    <i class="ti-calendar mr-2 text-muted"></i>
                    <span></span>
                </div>
                <a href="#" class="btn btn-primary ml-2" data-toggle="dropdown">
                    <i class="ti-download"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Download</a>
                    <a href="#" class="dropdown-item">Print</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Time to Resolved Complaint</h6>
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 position-relative mr-3 text-center">
                            <div id="circle-1" class="circle"></div>
                            <div class="position-absolute a-0 d-flex flex-column align-items-center justify-content-center">
                                <h4 class="mb-0">65%</h4>
                                <span class="font-size-11 text-uppercase text-muted">Reached</span>
                            </div>
                        </div>
                        <div>
                            <p class="text-muted mb-1">The average time taken to resolve complaints.</p>
                            <h2 class="mb-0">7m:32s
                                <small>/ Goal: 8m:0s</small>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Average Speed of Answer</h6>
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 position-relative mr-3 text-center">
                            <div id="circle-2" class="circle"></div>
                            <div class="position-absolute a-0 d-flex flex-column align-items-center justify-content-center">
                                <h4 class="mb-0">35%</h4>
                                <span class="font-size-11 text-uppercase text-muted">Reached</span>
                            </div>
                        </div>
                        <div>
                            <p class="text-muted mb-1">Measure how quickly support staff answer incoming calls.</p>
                            <h2 class="mb-0">0m:20s
                                <small>/ Goal: 0m:10s</small>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title">Ticket Status</h6>
                        <div>
                            <a href="#" class="btn btn-outline-light btn-sm btn-floating mr-2">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown"
                                   class="btn btn-outline-light btn-sm btn-floating"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="chart-ticket-status"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body">
                        <h2 class="mb-3">
                            321
                            <small>New Tickets</small>
                        </h2>
                        <div class="progress mb-2" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar"
                                 style="width: 100%;"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="font-size-11 m-b-0">
                            <span class="text-success">+ 1.2%</span> than yesterday
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-body">
                        <h2 class="mb-3">
                            70
                            <small>Solved Tickets</small>
                        </h2>
                        <div class="progress mb-2" style="height: 5px">
                            <div class="progress-bar bg-success" role="progressbar"
                                 style="width: 10%;"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="font-size-11 m-b-0">
                            <span class="text-danger">- 2.2%</span> than yesterday
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-body">
                        <h2 class="mb-3">
                            125
                            <small>Pending Tickets</small>
                        </h2>
                        <div class="progress mb-2" style="height: 5px">
                            <div class="progress-bar bg-info" role="progressbar"
                                 style="width: 55%;"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="font-size-11 m-b-0">
                            <span class="text-success">+ 4.2%</span> than yesterday
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Customer Satisfaction</h6>
                                <div>
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown"
                                           class="btn btn-outline-light btn-sm btn-floating"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="customer-satisfaction"></div>
                            <h2>
                                9.8
                                <small class="text-success">2.1%</small>
                            </h2>
                            <p class="text-muted">Performance Score</p>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle mr-3 text-primary"></i>
                                    <span>Excellent</span>
                                </div>
                                <span>55%</span>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle mr-3 text-success"></i>
                                    <span>Very Good</span>
                                </div>
                                <span>20%</span>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle mr-3 text-warning"></i>
                                    <span>Good</span>
                                </div>
                                <span>10%</span>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle mr-3 text-info"></i>
                                    <span>Fair</span>
                                </div>
                                <span>5%</span>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-circle mr-3 text-danger"></i>
                                    <span>Poor</span>
                                </div>
                                <span>10%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Overall Rating</h6>
                                <div>
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown"
                                           class="btn btn-outline-light btn-sm btn-floating"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted">Measures the quality or your support team’s efforts.</p>
                            <div class="d-flex align-items-end">
                                <h2 class="mr-3 mb-0">4.2</h2>
                                <div class="font-size-18">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-muted"></i>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <strong class="mr-3">5.0</strong>
                                    <div class="font-size-14">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="mr-3">3,230</div>
                                    <div>58%</div>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <strong class="mr-3">4.0</strong>
                                    <div class="font-size-14">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-muted"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="mr-3">2,230</div>
                                    <div>24%</div>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <strong class="mr-3">3.0</strong>
                                    <div class="font-size-14">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-muted"></i>
                                        <i class="fa fa-star text-muted"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="mr-3">1,230</div>
                                    <div>10%</div>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <strong class="mr-3">2.0</strong>
                                    <div class="font-size-14">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-muted"></i>
                                        <i class="fa fa-star text-muted"></i>
                                        <i class="fa fa-star text-muted"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="mr-3">1,230</div>
                                    <div>5%</div>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <strong class="mr-3">1.0</strong>
                                    <div class="font-size-14">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-muted"></i>
                                        <i class="fa fa-star text-muted"></i>
                                        <i class="fa fa-star text-muted"></i>
                                        <i class="fa fa-star text-muted"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="mr-3">7</div>
                                    <div>2%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
<!-- Daterangepicker -->
<script src="{{ url('/vendors/datepicker/daterangepicker.js') }}"></script>

<!-- Apex chart -->
<script src="{{ url('/vendors/charts/apex/apexcharts.js') }}"></script>

<!-- Circle progress -->
<script src="{{ url('/vendors/circle-progress/circle-progress.min.js') }}"></script>

<!-- Dashboard scripts -->
<script src="{{ url('assets/js/examples/pages/helpdesk-dashboard.js') }}"></script>
@endsection
