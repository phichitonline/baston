@extends('layouts.app')

@section('head')
    <!-- Lightbox -->
    <link rel="stylesheet" href="{{ url('vendors/lightbox/magnific-popup.css') }}" type="text/css">
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">

            <div class="py-5">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6">
                            <h2 class="mb-4 text-center">What do you want to find?</h2>
                            <form>
                                <div class="input-group input-group-lg mb-3">
                                    <input type="text" class="form-control"
                                           aria-label="Example text with button addon"
                                           placeholder="Search..." autofocus
                                           aria-describedby="button-addon1">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"
                                                id="button-addon1">
                                            <i class="ti-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <ul class="list-inline mt-3">
                                <li class="list-inline-item">
                                    <a href="#">mobile</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">sofware</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">desktop</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">iphone</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="mb-5">
                <i class="ti-search mr-2"></i>
                12 results found for: <span class="text-primary">“Lorem Ipsum”</span>
            </h4>
            <ul class="nav nav-pills mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#clasic" role="tab"
                       aria-controls="clasic" aria-selected="true">Classic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#articles" role="tab"
                       aria-controls="articles" aria-selected="false">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#photos" role="tab"
                       aria-controls="photos" aria-selected="false">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#users" role="tab" aria-controls="users"
                       aria-selected="false">Users</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="clasic" role="tabpanel">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-l-0 p-r-0">
                            <h5>
                                <a href="#">Lorem ipsum dolar set amet</a>
                            </h5>
                            <p class="text-muted">Velit laborum sint labore consectetur dolor minim
                                deserunt sit proident dolor id ea voluptate aliquip duis fugiat anim
                                nisi sint nulla irure sunt pariatur fugiat et mollit </p>
                            <div class="text-muted font-size-13">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <span class="badge badge-secondary">Trends</span>
                                    </li>
                                    <li class="list-inline-item">Dec 27 2018</li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-group-item p-l-0 p-r-0">
                            <h5>
                                <a href="#">Lorem ipsum dolar set amet</a>
                            </h5>
                            <p class="text-muted">Deserunt sint sit dolor proident qui ipsum enim in
                                veniam in sed ut in voluptate </p>
                            <div class="text-muted font-size-13">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <span class="badge badge-success">Lifestyle</span>
                                    </li>
                                    <li class="list-inline-item">Oct 13 2018</li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-group-item p-l-0 p-r-0">
                            <h5>
                                <a href="#">Lorem ipsum dolar set amet</a>
                            </h5>
                            <p class="text-muted">Commodo excepteur non ut exercitation qui sit proident
                                aliqua ex qui velit sed esse consequat in eiusmod nulla laboris tempor
                                ad esse elit ut enim ea veniam </p>
                            <div class="text-muted font-size-13">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <span class="badge badge-danger">Desing</span>
                                    </li>
                                    <li class="list-inline-item">Sep 27 2018</li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-group-item p-l-0 p-r-0">
                            <h5>
                                <a href="#">Lorem ipsum dolar set amet</a>
                            </h5>
                            <p class="text-muted">Ad ut exercitation ut esse aute ut aliqua dolore qui
                                nulla ea ut sed lorem tempor amet nostrud eu eiusmod ex consectetur in
                                velit officia incididunt ut </p>
                            <div class="text-muted font-size-13">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <span class="badge badge-primary">Trends</span>
                                    </li>
                                    <li class="list-inline-item">Dec 27 2018</li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-group-item p-l-0 p-r-0">
                            <h5>
                                <a href="#">Lorem ipsum dolar set amet</a>
                            </h5>
                            <p class="text-muted">Esse ipsum ex ut consectetur enim exercitation non
                                irure lorem dolore in non commodo ut officia officia est pariatur fugiat
                                deserunt veniam in aliqua velit veniam dolor </p>
                            <div class="text-muted font-size-13">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <span class="badge badge-warning">Travel</span>
                                    </li>
                                    <li class="list-inline-item">Dec 27 2018</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="articles" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card border">
                                <img class="card-img-top" src="{{ url('assets/media/image/photo1.jpg') }}"
                                     alt="image">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card
                                        title and make up...</p>
                                    <a href="#" class="text-uppercase font-size-11">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card border">
                                <img class="card-img-top" src="{{ url('assets/media/image/photo2.jpg') }}"
                                     alt="image">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card
                                        title and make up...</p>
                                    <a href="#" class="text-uppercase font-size-11">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card border">
                                <img class="card-img-top" src="{{ url('assets/media/image/photo3.jpg') }}"
                                     alt="image">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card
                                        title and make up...</p>
                                    <a href="#" class="text-uppercase font-size-11">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card border">
                                <img class="card-img-top" src="{{ url('assets/media/image/photo4.jpg') }}"
                                     alt="image">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card
                                        title and make up...</p>
                                    <a href="#" class="text-uppercase font-size-11">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card border">
                                <img class="card-img-top" src="{{ url('assets/media/image/photo5.jpg') }}"
                                     alt="image">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card
                                        title and make up...</p>
                                    <a href="#">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card border">
                                <img class="card-img-top" src="{{ url('assets/media/image/photo6.jpg') }}"
                                     alt="image">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card
                                        title and make up...</p>
                                    <a href="#" class="text-uppercase font-size-11">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="photos" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                            <a href="{{ url('assets/media/image/portfolio-one.jpg') }}"
                               class="image-popup-gallery-item">
                                <img class="img-fluid rounded"
                                     src="{{ url('assets/media/image/portfolio-one.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                            <a href="{{ url('assets/media/image/portfolio-two.jpg') }}"
                               class="image-popup-gallery-item">
                                <img class="img-fluid rounded"
                                     src="{{ url('assets/media/image/portfolio-two.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                            <a href="{{ url('assets/media/image/portfolio-three.jpg') }}"
                               class="image-popup-gallery-item">
                                <img class="img-fluid rounded"
                                     src="{{ url('assets/media/image/portfolio-three.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                            <a href="{{ url('assets/media/image/portfolio-four.jpg') }}"
                               class="image-popup-gallery-item">
                                <img class="img-fluid rounded"
                                     src="{{ url('assets/media/image/portfolio-four.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                            <a href="{{ url('assets/media/image/portfolio-five.jpg') }}"
                               class="image-popup-gallery-item">
                                <img class="img-fluid rounded"
                                     src="{{ url('assets/media/image/portfolio-five.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                            <a href="{{ url('assets/media/image/portfolio-six.jpg') }}"
                               class="image-popup-gallery-item">
                                <img class="img-fluid rounded"
                                     src="{{ url('assets/media/image/portfolio-six.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                            <a href="{{ url('assets/media/image/portfolio-one.jpg') }}"
                               class="image-popup-gallery-item">
                                <img class="img-fluid rounded"
                                     src="{{ url('assets/media/image/portfolio-one.jpg') }}" alt="image">
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                            <a href="{{ url('assets/media/image/portfolio-two.jpg') }}"
                               class="image-popup-gallery-item">
                                <img class="img-fluid rounded"
                                     src="{{ url('assets/media/image/portfolio-two.jpg') }}" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="users" role="tabpanel">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-l-r-0">
                            <div class="media">
                                <figure class="avatar m-r-15">
                                    <span class="avatar-title bg-secondary rounded-circle">FS</span>
                                </figure>
                                <div class="media-body">
                                    <h5>Ferrel Skipsea</h5>
                                    <p class="m-b-0">Tax Accountant</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item p-l-r-0">
                            <div class="media">
                                <figure class="avatar m-r-15">
                                    <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                         class="rounded-circle" alt="image">
                                </figure>
                                <div class="media-body">
                                    <h5>Lorry Lewsey</h5>
                                    <p class="m-b-0">Marketing Assistant</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item p-l-r-0">
                            <div class="media">
                                <figure class="avatar m-r-15">
                                    <span class="avatar-title bg-success rounded-circle">W</span>
                                </figure>
                                <div class="media-body">
                                    <h5>Winny Lippiatt</h5>
                                    <p class="m-b-0">Cost Accountant</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item p-l-r-0">
                            <div class="media">
                                <figure class="avatar m-r-15">
                                    <span class="avatar-title bg-danger rounded-circle">SW</span>
                                </figure>
                                <div class="media-body">
                                    <h5>Salim Walklate</h5>
                                    <p class="m-b-0">Chemical Engineer</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item p-l-r-0">
                            <div class="media">
                                <figure class="avatar m-r-15">
                                    <span class="avatar-title bg-warning rounded-circle">S</span>
                                </figure>
                                <div class="media-body">
                                    <h5>Sena Erangey</h5>
                                    <p class="m-b-0">Financial Advisor</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item p-l-r-0">
                            <div class="media">
                                <figure class="avatar m-r-15">
                                    <span class="avatar-title bg-info rounded-circle">D</span>
                                </figure>
                                <div class="media-body">
                                    <h5>Decca Thorrington</h5>
                                    <p class="m-b-0">Systems Administrator</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <nav class="mt-3">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>

@endsection

@section('script')
    <!-- lightbox -->
    <script src="{{ url('vendors/lightbox/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('assets/js/examples/lightbox.js') }}"></script>
@endsection
