@extends('layouts.app')

@section('head')
    <!-- Range slider -->
    <link rel="stylesheet" href="{{ url('vendors/range-slider/css/ion.rangeSlider.min.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header">
        <div class="page-title">
            <h3>Product List</h3>
            <div>
                <a href="{{ route('product-list') }}" class="btn btn-outline-primary active" title="List"
                   data-toggle="tooltip">
                    <i class="fa fa-th-list"></i>
                </a>
                <a href="{{ route('product-grid') }}" class="btn btn-outline-primary ml-2" title="Grid"
                   data-toggle="tooltip">
                    <i class="fa fa-th-large"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Filter Products</h6>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Keywords">
                                </div>
                                <p class="text-muted">Brands</p>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1">Iphone</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Samsung</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3" checked>
                                        <label class="custom-control-label" for="customCheck3">Huawei</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4">General Mobile</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                        <label class="custom-control-label" for="customCheck5">Xiaomi</label>
                                    </div>
                                </div>
                                <hr>
                                <p class="text-muted">Price</p>
                                <div class="form-group">
                                    <input type="text" id="rangeSlider-example">
                                </div>
                                <p class="text-muted">Rate</p>
                                <div class="list-inline mb-2">
                                    <a href="#">
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">(100)</div>
                                    </a>
                                </div>
                                <div class="list-inline mb-2">
                                    <a href="#">
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">(78)</div>
                                    </a>
                                </div>
                                <div class="list-inline mb-2">
                                    <a href="#">
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">(55)</div>
                                    </a>
                                </div>
                                <div class="list-inline mb-2">
                                    <a href="#">
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">(25)</div>
                                    </a>
                                </div>
                                <div class="list-inline mb-2">
                                    <a href="#">
                                        <div class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="list-inline-item">(17)</div>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fa fa-heart text-danger mr-2"></i> 51
                                </div>
                                <span class="badge badge-warning">%30 Off</span>
                            </div>
                            <div class="d-lg-flex text-center text-lg-left">
                                <a href="#" class="mr-3" title="Vase">
                                    <img width="200" src="{{ url('assets/media/image/products/product1.png') }}"
                                         class="img-fluid rounded" alt="Vase">
                                </a>
                                <div>
                                    <a href="#">
                                        <h4 class="mb-3">Vase</h4>
                                    </a>
                                    <p>
                                        <del class="text-muted mr-1">$6.200</del>
                                        <span class="text-truncate">$5.190,90</span>
                                    </p>
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="list-inline-item">(47)</li>
                                    </ul>
                                    <div>
                                        <a href="{{ route('product-detail') }}" class="btn btn-primary">View</a>
                                        <button class="btn btn-primary add-to-card ml-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fa fa-heart-o mr-2"></i> 57
                                </div>
                                <span class="badge badge-danger">Out of Stock</span>
                            </div>
                            <div class="d-lg-flex text-center text-lg-left">
                                <a href="#" class="mr-3" title="Glasses">
                                    <img width="200" src="{{ url('assets/media/image/products/product2.png') }}"
                                         class="img-fluid rounded" alt="Glasses">
                                </a>
                                <div>
                                    <a href="#">
                                        <h4 class="mb-3">Glasses</h4>
                                    </a>
                                    <p>
                                        <!-- <del class="text-muted mr-1">$24,95</del> -->
                                        <span class="text-truncate">$2.400,00</span>
                                    </p>
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="list-inline-item">(16)</li>
                                    </ul>
                                    <div>
                                        <a href="{{ route('product-detail') }}" class="btn btn-primary">View</a>
                                        <button class="btn btn-primary ml-2 disabled">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fa fa-heart text-danger mr-2"></i> 80
                                </div>
                                <span class="badge badge-success" title="New Product" data-toggle="tooltip">
                                    <i class="ti-star"></i>
                                </span>
                            </div>
                            <div class="d-lg-flex text-center text-lg-left">
                                <a href="#" class="mr-3" title="Plate">
                                    <img width="200" src="{{ url('assets/media/image/products/product3.png') }}"
                                         class="img-fluid rounded" alt="Plate">
                                </a>
                                <div>
                                    <a href="#">
                                        <h4 class="mb-3">Plate</h4>
                                    </a>
                                    <p>
                                        <!-- <del class="text-muted mr-1">$24,95</del> -->
                                        <span class="text-truncate">$180,90</span>
                                    </p>
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="list-inline-item">(23)</li>
                                    </ul>
                                    <div>
                                        <a href="{{ route('product-detail') }}" class="btn btn-primary">View</a>
                                        <button class="btn btn-primary add-to-card ml-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fa fa-heart text-danger mr-2"></i> 213
                                </div>
                                <span class="badge badge-warning">%30 Off</span>
                            </div>
                            <div class="d-lg-flex text-center text-lg-left">
                                <a href="#" class="mr-3" title="Pen">
                                    <img width="200" src="{{ url('assets/media/image/products/product4.png') }}"
                                         class="img-fluid rounded" alt="Pen">
                                </a>
                                <div>
                                    <a href="#">
                                        <h4 class="mb-3">Pen</h4>
                                    </a>
                                    <p>
                                        <del class="text-muted mr-1">$6.200</del>
                                        <span class="text-truncate">$5.190,90</span>
                                    </p>
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="list-inline-item">(47)</li>
                                    </ul>
                                    <div>
                                        <a href="{{ route('product-detail') }}" class="btn btn-primary">View</a>
                                        <button class="btn btn-success add-to-card ml-2">View Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fa fa-heart-o mr-2"></i> 57
                                </div>
                                <!-- <span class="badge badge-danger">Out of Stock</span> -->
                            </div>
                            <div class="d-lg-flex text-center text-lg-left">
                                <a href="#" class="mr-3" title="Armchair">
                                    <img width="200" src="{{ url('assets/media/image/products/product5.png') }}"
                                         class="img-fluid rounded" alt="Armchair">
                                </a>
                                <div>
                                    <a href="#">
                                        <h4 class="mb-3">Armchair</h4>
                                    </a>
                                    <p>
                                        <!-- <del class="text-muted mr-1">$24,95</del> -->
                                        <span class="text-truncate">$2.400,00</span>
                                    </p>
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="list-inline-item">(16)</li>
                                    </ul>
                                    <div>
                                        <a href="{{ route('product-detail') }}" class="btn btn-primary">View</a>
                                        <button class="btn btn-primary add-to-card ml-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fa fa-heart text-danger mr-2"></i> 80
                                </div>
                                <span class="badge badge-success" title="New Product" data-toggle="tooltip">
                                    <i class="ti-star"></i>
                                </span>
                            </div>
                            <div class="d-lg-flex text-center text-lg-left">
                                <a href="#" class="mr-3" title="Flowerpot">
                                    <img width="200" src="{{ url('assets/media/image/products/product6.png') }}"
                                         class="img-fluid rounded" alt="Flowerpot">
                                </a>
                                <div>
                                    <a href="#">
                                        <h4 class="mb-3">Flowerpot</h4>
                                    </a>
                                    <p>
                                        <!-- <del class="text-muted mr-1">$24,95</del> -->
                                        <span class="text-truncate">$180,90</span>
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item mb-3">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="list-inline-item">(23)</li>
                                    </ul>
                                    <div>
                                        <a href="{{ route('product-detail') }}" class="btn btn-primary">View</a>
                                        <button class="btn btn-primary add-to-card ml-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fa fa-heart text-danger mr-2"></i> 213
                                </div>
                                <span class="badge badge-warning">%30 Off</span>
                            </div>
                            <div class="d-lg-flex text-center text-lg-left">
                                <a href="#" class="mr-3" title="Wall Clock">
                                    <img width="200" src="{{ url('assets/media/image/products/product7.png') }}"
                                         class="img-fluid rounded" alt="Wall Clock">
                                </a>
                                <div>
                                    <a href="#">
                                        <h4 class="mb-3">Wall Clock</h4>
                                    </a>
                                    <p>
                                        <del class="text-muted mr-1">$6.200</del>
                                        <span class="text-truncate">$5.190,90</span>
                                    </p>
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="list-inline-item">(47)</li>
                                    </ul>
                                    <div>
                                        <a href="{{ route('product-detail') }}" class="btn btn-primary">View</a>
                                        <button class="btn btn-primary add-to-card ml-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <i class="fa fa-heart-o mr-2"></i> 57
                                </div>
                                <span class="badge badge-danger">Out of Stock</span>
                            </div>
                            <div class="d-lg-flex text-center text-lg-left">
                                <a href="#" class="mr-3" title="Desk">
                                    <img width="200" src="{{ url('assets/media/image/products/product8.png') }}"
                                         class="img-fluid rounded" alt="Desk">
                                </a>
                                <div>
                                    <a href="#">
                                        <h4 class="mb-3">Desk</h4>
                                    </a>
                                    <p>
                                        <!-- <del class="text-muted mr-1">$24,95</del> -->
                                        <span class="text-truncate">$2.400,00</span>
                                    </p>
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-half-o text-warning"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li class="list-inline-item">(16)</li>
                                    </ul>
                                    <div>
                                        <a href="{{ route('product-detail') }}" class="btn btn-primary">View</a>
                                        <button class="btn btn-primary add-to-card ml-2 disabled">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <nav aria-label="..." class="mb-4">
                        <ul class="pagination pagination-rounded justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Range slider -->
    <script src="{{ url('vendors/range-slider/js/ion.rangeSlider.min.js') }}"></script>

    <script src="{{ url('assets/js/examples/pages/product-list.js') }}"></script>
@endsection
