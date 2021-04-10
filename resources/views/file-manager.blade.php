@extends('layouts.app')

@section('content')

    <div class="page-header">
        <div class="page-title">
            <h3>File Manager</h3>
            <div>
                <button class="btn btn-primary file-upload-btn" data-toggle="modal"
                        data-target="#compose">
                    <i class="ti-upload mr-2"></i> Upload Files
                </button>
                <form class="d-none" id="file-upload">
                    <input type="file" multiple>
                </form>
            </div>
        </div>
    </div>

    <div class="row app-block mb-4">
        <div class="col-md-3 app-sidebar">
            <div class="card">
                <div class="app-sidebar-menu">
                    <div class="list-group list-group-flush">
                        <a href="" class="list-group-item active d-flex align-items-center">
                            <i class="ti-folder mr-2 list-group-icon"></i>All Files
                            <span class="small ml-auto">45</span>
                        </a>
                        <a href="" class="list-group-item">
                            <i class="ti-desktop mr-2 list-group-icon"></i>My Devices
                        </a>
                        <a href="" class="list-group-item">
                            <i class="ti-upload mr-2 list-group-icon"></i>Recents
                        </a>
                        <a href="" class="list-group-item d-flex align-items-center">
                            <i class="ti-star mr-2 list-group-icon"></i>Important
                            <span class="small ml-auto">10</span>
                        </a>
                        <a href="" class="list-group-item">
                            <i class="ti-trash mr-2 list-group-icon"></i>Deleted Files
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-4">Storage Status</h6>
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <i data-feather="database" class="width-30 height-30"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="progress" style="height: 10px">
                                    <div class="progress-bar progress-bar-striped" role="progressbar"
                                         style="width: 40%" aria-valuenow="10" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="line-height-12 small text-muted mt-2">19.5GB used of 25GB</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 app-content">
            <div class="app-content-overlay"></div>
            <div class="app-action">
                <div class="action-left">
                    <ul class="list-inline">
                        <li class="list-inline-item mb-0">
                            <a href="#" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                                <i data-feather="plus" class="mr-1"></i>
                                Add
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Folder</a>
                                <a class="dropdown-item" href="#">File</a>
                            </div>
                        </li>
                        <li class="list-inline-item mb-0">
                            <a href="#" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">Folders</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item d-flex justify-content-between" href="#">
                                    Video
                                    <span class="text-muted">21</span>
                                </a>
                                <a class="dropdown-item d-flex justify-content-between" href="#">
                                    Image
                                    <span class="text-muted">5</span>
                                </a>
                                <a class="dropdown-item d-flex justify-content-between" href="#">
                                    Audio
                                    <span class="text-muted">12</span>
                                </a>
                                <a class="dropdown-item d-flex justify-content-between" href="#">
                                    Documents
                                    <span class="text-muted">7</span>
                                </a>
                            </div>
                        </li>
                        <li class="list-inline-item mb-0">
                            <a href="#" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                                Order by
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Date</a>
                                <a class="dropdown-item" href="#">Name</a>
                                <a class="dropdown-item" href="#">Size</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="action-right">
                    <form class="d-flex mr-3">
                        <a href="#" class="app-sidebar-menu-button btn btn-outline-light">
                            <i data-feather="menu"></i>
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search file"
                                   aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <button class="btn" type="button" id="button-addon1">
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <p>Recently Files</p>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card app-file-list">
                        <div class="app-file-icon">
                            <i class="fa fa-file-pdf-o text-danger"></i>
                            <div class="dropdown position-absolute top-0 right-0 mr-3">
                                <a href="#" class="btn btn-outline-light btn-floating btn-sm" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Copy to</a>
                                    <a href="#" class="dropdown-item">Move to</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 small">
                            <div>resume.pdf</div>
                            <div class="text-muted">1.2mb</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card app-file-list">
                        <div class="app-file-icon">
                            <i class="fa fa-file-excel-o text-success"></i>
                            <div class="dropdown position-absolute top-0 right-0 mr-3">
                                <a href="#" class="btn btn-outline-light btn-floating btn-sm" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Copy to</a>
                                    <a href="#" class="dropdown-item">Move to</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 small">
                            <div>last-months-report.xlsx</div>
                            <div class="text-muted">120.85kb</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card app-file-list">
                        <div class="app-file-icon">
                            <i class="fa fa-file-text-o text-warning"></i>
                            <div class="dropdown position-absolute top-0 right-0 mr-3">
                                <a href="#" class="btn btn-outline-light btn-floating btn-sm" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Copy to</a>
                                    <a href="#" class="dropdown-item">Move to</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 small">
                            <div>todo-list.txt</div>
                            <div class="text-muted">1.85kb</div>
                        </div>
                    </div>
                </div>
            </div>

            <p>Updated Files</p>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card app-file-list">
                        <div class="app-file-icon">
                            <i class="fa fa-file-powerpoint-o text-secondary"></i>
                            <div class="dropdown position-absolute top-0 right-0 mr-3">
                                <a href="#" class="btn btn-outline-light btn-floating btn-sm" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Copy to</a>
                                    <a href="#" class="dropdown-item">Move to</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 small">
                            <div>presentation-file.pptx</div>
                            <div class="text-muted">10.50kb</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card app-file-list">
                        <div class="app-file-icon">
                            <i class="fa fa-file-excel-o text-success"></i>
                            <div class="dropdown position-absolute top-0 right-0 mr-3">
                                <a href="#" class="btn btn-outline-light btn-floating btn-sm" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Copy to</a>
                                    <a href="#" class="dropdown-item">Move to</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 small">
                            <div>contact-list.xlsx</div>
                            <div class="text-muted">8.7mb</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card app-file-list">
                        <div class="app-file-icon">
                            <i class="fa fa-file-zip-o text-primary"></i>
                            <div class="dropdown position-absolute top-0 right-0 mr-3">
                                <a href="#" class="btn btn-outline-light btn-floating btn-sm" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Copy to</a>
                                    <a href="#" class="dropdown-item">Move to</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 small">
                            <div>website-html-files.zip</div>
                            <div class="text-muted">100mb</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card app-file-list">
                        <div class="app-file-icon">
                            <i class="fa fa-file-word-o text-info"></i>
                            <div class="dropdown position-absolute top-0 right-0 mr-3">
                                <a href="#" class="btn btn-outline-light btn-floating btn-sm" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">View Details</a>
                                    <a href="#" class="dropdown-item">Share</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                    <a href="#" class="dropdown-item">Copy to</a>
                                    <a href="#" class="dropdown-item">Move to</a>
                                    <a href="#" class="dropdown-item">Rename</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 small">
                            <div>articles.docx</div>
                            <div class="text-muted">100.25kb</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- File manager example -->
    <script src="{{ url('assets/js/examples/file-manager.js') }}"></script>
@endsection
