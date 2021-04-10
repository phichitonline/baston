@extends('layouts.app')

@section('head')
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ url('vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header">
        <div class="page-title">
            <h3>Orders</h3>
            <div class="dropdown">
                <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    <i class="ti-settings mr-2"></i> Actions
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-0">Orders</h6>
                </div>
                <div class="table-responsive">
                    <table id="orders" class="table">
                        <thead>
                        <tr>
                            <th>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="orders-select-all">
                                    <label class="custom-control-label" for="orders-select-all"></label>
                                </div>
                            </th>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Customer</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td>
                                <a href="#">3145</a>
                            </td>
                            <td>
                                <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                    <img width="40" src="{{ url('assets/media/image/products/product1.png') }}"
                                         class="rounded mr-3" alt="Vase">
                                    <span>Vase</span>
                                </a>
                            </td>
                            <td>Dollie Bullock</td>
                            <td>$230</td>
                            <td>
                                <span class="badge bg-secondary-bright text-secondary">On pre-order (not paid)</span>
                            </td>
                            <td>2018/08/28 21:24:36</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating"
                                   data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2"
                                   data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a href="#">7321</a>
                            </td>
                            <td>
                                <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                    <img width="40" src="{{ url('assets/media/image/products/product2.png') }}"
                                         class="rounded mr-3" alt="Glasses">
                                    <span>Glasses</span>
                                </a>
                            </td>
                            <td>Holmes Hines</td>
                            <td>$300</td>
                            <td>
                                <span class="badge bg-success-bright text-success">Payment accepted</span>
                            </td>
                            <td>2018/08/28 21:24:36</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating"
                                   data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2"
                                   data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a href="#">9342</a>
                            </td>
                            <td>
                                <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                    <img width="40" src="{{ url('assets/media/image/products/product3.png') }}"
                                         class="rounded mr-3" alt="Plate">
                                    <span>Plate</span>
                                </a>
                            </td>
                            <td>Serena Glover</td>
                            <td>$250</td>
                            <td>
                                <span class="badge bg-danger-bright text-danger">Payment error</span>
                            </td>
                            <td>2018/08/28 21:24:36</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating"
                                   data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2"
                                   data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a href="#">6416</a>
                            </td>
                            <td>
                                <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                    <img width="40" src="{{ url('assets/media/image/products/product4.png') }}"
                                         class="rounded mr-3" alt="Pen">
                                    <span>Pen</span>
                                </a>
                            </td>
                            <td>Dianne Prince</td>
                            <td>$550</td>
                            <td>
                                <span class="badge bg-success-bright text-success">Payment accepted</span>
                            </td>
                            <td>2018/08/28 21:24:36</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating"
                                   data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2"
                                   data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a href="#">92327</a>
                            </td>
                            <td>
                                <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                    <img width="40" src="{{ url('assets/media/image/products/product5.png') }}"
                                         class="rounded mr-3" alt="Armchair">
                                    <span>Armchair</span>
                                </a>
                            </td>
                            <td>Morgan Pitts</td>
                            <td>$280</td>
                            <td>
                                <span class="badge bg-warning-bright text-warning">Preparing the order</span>
                            </td>
                            <td>2018/08/28 21:24:36</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating"
                                   data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2"
                                   data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a href="#">3013</a>
                            </td>
                            <td>
                                <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                    <img width="40" src="{{ url('assets/media/image/products/product6.png') }}"
                                         class="rounded mr-3" alt="Flowerpot">
                                    <span>Flowerpot</span>
                                </a>
                            </td>
                            <td>Merrill Richardson</td>
                            <td>$128</td>
                            <td>
                                <span class="badge bg-info-bright text-info">Awaiting PayPal payment</span>
                            </td>
                            <td>2018/08/28 21:24:36</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating"
                                   data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2"
                                   data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a href="#">10323</a>
                            </td>
                            <td>
                                <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                    <img width="40" src="{{ url('assets/media/image/products/product7.png') }}"
                                         class="rounded mr-3" alt="Wall Clock">
                                    <span>Wall Clock</span>
                                </a>
                            </td>
                            <td>Krista Mathis</td>
                            <td>$500</td>
                            <td>
                                <span class="badge bg-secondary-bright text-secondary">Shipped</span>
                            </td>
                            <td>2018/08/28 21:24:36</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating"
                                   data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2"
                                   data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a href="#">4218</a>
                            </td>
                            <td>
                                <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                    <img width="40" src="{{ url('assets/media/image/products/product8.png') }}"
                                         class="rounded mr-3" alt="Desk">
                                    <span>Desk</span>
                                </a>
                            </td>
                            <td>Frankie Hewitt</td>
                            <td>$300</td>
                            <td>
                                <span class="badge bg-success-bright text-success">Remote payment accepted</span>
                            </td>
                            <td>2018/08/28 21:24:36</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating"
                                   data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2"
                                   data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a href="#">3158</a>
                            </td>
                            <td>
                                <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                    <img width="40" src="{{ url('assets/media/image/products/product9.png') }}"
                                         class="rounded mr-3" alt="Night light">
                                    <span>Night light</span>
                                </a>
                            </td>
                            <td>Hayden Fitzgerald</td>
                            <td>$200</td>
                            <td>
                                <span class="badge bg-success-bright text-success">Delivered</span>
                            </td>
                            <td>2018/08/28 21:24:36</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating"
                                   data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2"
                                   data-toggle="tooltip" title="Delete">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a href="#">9610</a>
                            </td>
                            <td>
                                <a href="{{ route('product-detail') }}" class="d-flex align-items-center">
                                    <img width="40" src="{{ url('assets/media/image/products/product10.png') }}"
                                         class="rounded mr-3" alt="Shoe">
                                    <span>Shoe</span>
                                </a>
                            </td>
                            <td>Cole Holcomb</td>
                            <td>$700</td>
                            <td>
                                    <span
                                        class="badge bg-secondary-bright text-secondary">On pre-order (not paid)</span>
                            </td>
                            <td>2018/08/28 21:24:36</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-floating"
                                   data-toggle="tooltip" title="Edit">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-floating ml-2"
                                   data-toggle="tooltip" title="Delete">
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

    <script src="{{ url('assets/js/examples/pages/orders.js') }}"></script>
@endsection
