@extends('layouts.app')

@section('head')
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ url('vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header">
        <div class="page-title">
            <h3>User List</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Filters</h6>
                    <form>
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="form-control">
                                        <option value="">All</option>
                                        <option value="">Admin</option>
                                        <option value="">User</option>
                                        <option value="">Staff</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control">
                                        <option value="">All</option>
                                        <option value="">Active</option>
                                        <option value="">Blocked</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <label>Department</label>
                                    <select class="form-control">
                                        <option value="">All</option>
                                        <option value="">Sales</option>
                                        <option value="">Development</option>
                                        <option value="">Management</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <label>Verified</label>
                                    <select class="form-control">
                                        <option value="">All</option>
                                        <option value="">Yes</option>
                                        <option value="">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary">
                            <i class="ti-search mr-2"></i> Search
                        </button>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title mb-0">User List</h6>
                        <button class="btn btn-primary">
                            <i class="ti-plus mr-2"></i> Add User
                        </button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="user-list" class="table table-lg">
                        <thead>
                        <tr>
                            <th>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="user-list-select-all">
                                    <label class="custom-control-label" for="user-list-select-all"></label>
                                </div>
                            </th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td>1</td>
                            <td>
                                <a href="#">
                                    <figure class="avatar avatar-sm mr-2">
                                        <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}"
                                             class="rounded-circle" alt="avatar">
                                    </figure>
                                    Hillery Ovenell
                                </a>
                            </td>
                            <td>hovenell0</td>
                            <td>hovenell0@1und1.de</td>
                            <td>Syria</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge bg-danger-bright text-danger">Blocked</span>
                            </td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2</td>
                            <td>
                                <a href="#">
                                    <figure class="avatar avatar-sm mr-2">
                                        <img src="{{ url('assets/media/image/user/man_avatar4.jpg') }}"
                                             class="rounded-circle" alt="avatar">
                                    </figure>
                                    Roarke Woolford
                                </a>
                            </td>
                            <td>rwoolford1</td>
                            <td>rwoolford1@nba.com</td>
                            <td>Mauritania</td>
                            <td>User</td>
                            <td>
                                <span class="badge bg-success-bright text-success">Active</span>
                            </td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>3</td>
                            <td>
                                <a href="#">
                                    <figure class="avatar avatar-sm mr-2">
                                        <img src="{{ url('assets/media/image/user/man_avatar2.jpg') }}"
                                             class="rounded-circle" alt="avatar">
                                    </figure>
                                    Woody Guerra
                                </a>
                            </td>
                            <td>wguerra2</td>
                            <td>wguerra2@freewebs.com</td>
                            <td>Poland</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge bg-danger-bright text-danger">Blocked</span>
                            </td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>4</td>
                            <td>
                                <a href="#">
                                    <figure class="avatar avatar-sm mr-2">
                                        <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}"
                                             class="rounded-circle" alt="avatar">
                                    </figure>
                                    Wainwright Taffe
                                </a>
                            </td>
                            <td>wtaffe3</td>
                            <td>wtaffe3@addthis.com</td>
                            <td>Chile</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge bg-danger-bright text-danger">Blocked</span>
                            </td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>5</td>
                            <td>
                                <a href="#">
                                    <figure class="avatar avatar-sm mr-2">
                                        <img src="{{ url('assets/media/image/user/women_avatar4.jpg') }}"
                                             class="rounded-circle" alt="avatar">
                                    </figure>
                                    Steven Preuvost
                                </a>
                            </td>
                            <td>spreuvost4</td>
                            <td>spreuvost4@webnode.com</td>
                            <td>China</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge bg-danger-bright text-danger">Blocked</span>
                            </td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>6</td>
                            <td>
                                <a href="#">
                                    <figure class="avatar avatar-sm mr-2">
                                        <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                             class="rounded-circle" alt="avatar">
                                    </figure>
                                    Aurlie Kimmel
                                </a>
                            </td>
                            <td>akimmel5</td>
                            <td>akimmel5@globo.com</td>
                            <td>Indonesia</td>
                            <td>User</td>
                            <td>
                                <span class="badge bg-success-bright text-success">Active</span>
                            </td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>7</td>
                            <td>
                                <a href="#">
                                    <figure class="avatar avatar-sm mr-2">
                                        <img src="{{ url('assets/media/image/user/women_avatar5.jpg') }}"
                                             class="rounded-circle" alt="avatar">
                                    </figure>
                                    Mariann Pepperrall
                                </a>
                            </td>
                            <td>mpepperrall6</td>
                            <td>mpepperrall6@tripadvisor.com</td>
                            <td>China</td>
                            <td>Admin</td>
                            <td>
                                <span class="badge bg-success-bright text-success">Active</span>
                            </td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>8</td>
                            <td>
                                <a href="#">
                                    <figure class="avatar avatar-sm mr-2">
                                        <img src="{{ url('assets/media/image/user/man_avatar5.jpg') }}"
                                             class="rounded-circle" alt="avatar">
                                    </figure>
                                    Erl Srutton
                                </a>
                            </td>
                            <td>esrutton7</td>
                            <td>esrutton7@geocities.jp</td>
                            <td>South Korea</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge bg-danger-bright text-danger">Blocked</span>
                            </td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>9</td>
                            <td>
                                <a href="#">
                                    <figure class="avatar avatar-sm mr-2">
                                        <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}"
                                             class="rounded-circle" alt="avatar">
                                    </figure>
                                    Luce Meddings
                                </a>
                            </td>
                            <td>lmeddings8</td>
                            <td>lmeddings8@usa.gov</td>
                            <td>Ukraine</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge bg-success-bright text-success">Active</span>
                            </td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>10</td>
                            <td>
                                <a href="#">
                                    <figure class="avatar avatar-sm mr-2">
                                        <img src="{{ url('assets/media/image/user/man_avatar2.jpg') }}"
                                             class="rounded-circle" alt="avatar">
                                    </figure>
                                    Osbourne Wiskar
                                </a>
                            </td>
                            <td>owiskar9</td>
                            <td>owiskar9@mlb.com</td>
                            <td>Nigeria</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge bg-success-bright text-success">Active</span>
                            </td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>11</td>
                            <td>
                                <a href="#">
                                    <figure class="avatar avatar-sm mr-2">
                                        <img src="{{ url('assets/media/image/user/women_avatar3.jpg') }}"
                                             class="rounded-circle" alt="avatar">
                                    </figure>
                                    Jeannette Daintith
                                </a>
                            </td>
                            <td>jdaintitha</td>
                            <td>jdaintitha@blogger.com</td>
                            <td>Egypt</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge bg-danger-bright text-danger">Blocked</span>
                            </td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>12</td>
                            <td>
                                <a href="#">
                                    <figure class="avatar avatar-sm mr-2">
                                        <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                             class="rounded-circle" alt="avatar">
                                    </figure>
                                    Payton Espinola
                                </a>
                            </td>
                            <td>pespinolab</td>
                            <td>pespinolab@hhs.gov</td>
                            <td>China</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge bg-danger-bright text-danger">Blocked</span>
                            </td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- Datatable -->
    <script src="{{ url('vendors/dataTable/datatables.min.js') }}"></script>

    <script src="{{ url('assets/js/examples/pages/user-list.js') }}"></script>
@endsection
