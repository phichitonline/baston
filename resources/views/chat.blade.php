@extends('layouts.app')

@section('bodyClass', 'chat-app small-navigation')

@section('content')
    <div class="row no-gutters chat-block">
        <!-- Chat sidebar -->
        <div class="col-lg-4 chat-sidebar">

            <!-- Sidebar search -->
            <div class="chat-sidebar-header">
                <div class="d-flex">
                    <div class="pr-3">
                        <div class="avatar">
                            <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}" class="rounded-circle"
                                 alt="image">
                        </div>
                    </div>
                    <div>
                        <p class="mb-0">Bony Gidden</p>
                        <p class="m-0 small text-muted">Team Leader</p>
                    </div>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <a href="#" data-toggle="dropdown">
                                <i class="width-18 height-18" data-toggle="tooltip" title="Settings"
                                   data-feather="settings"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                                <a class="dropdown-item" href="{{ route('user-edit') }}">Edit</a>
                                <a class="dropdown-item" data-sidebar-target="#settings" href="#">Settings</a>
                            </div>
                        </div>
                    </div>
                </div>
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Chat search">
                        <div class="input-group-append">
                            <button class="btn" type="button">
                                <i class="ti-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- ./ Sidebar search -->

            <!-- Chat list -->
            <div class="chat-sidebar-content">
                <div class="chat-lists">
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <div class="pr-3">
                                <div class="avatar avatar-state-danger">
                                    <img src="{{ url('assets/media/image/user/man_avatar2.jpg') }}"
                                         class="rounded-circle"
                                         alt="image">
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-1">Francisco Ubsdale</h6>
                                <span class="text-muted">Hello how are you?</span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="badge badge-success badge-pill ml-auto mb-2">1</span>
                                <span class="small text-muted">2:32 PM</span>
                            </div>
                        </a>
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <div class="pr-3">
                                <div class="avatar avatar-state-success">
                                    <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}"
                                         class="rounded-circle"
                                         alt="image">
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-1">Natale Janu</h6>
                                <span class="text-muted">Hi!</span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="badge badge-success badge-pill ml-auto mb-2">3</span>
                                <span class="small text-muted">08:27 PM</span>
                            </div>
                        </a>
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <div class="pr-3">
                                        <span class="avatar avatar-state-warning">
                                            <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                            </div>
                            <div class="flex-grow- 1">
                                <h6 class="mb-1">Orelie Rockhall</h6>
                                <span class="text-muted">
                                                <i class="fa fa-image mr-1"></i> Photo
                                            </span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">Yesterday</span>
                            </div>
                        </a>
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <div class="pr-3">
                                            <span class="avatar avatar-state-info">
                                                <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </span>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">Barbette Bolf</h6>
                                <span class="text-muted">
                                                <i class="fa fa-video-camera mr-1"></i> Video
                                            </span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">Last week</span>
                            </div>
                        </a>
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <div class="pr-3">
                                        <span class="avatar avatar-state-secondary">
                                            <span class="avatar-title bg-warning rounded-circle">D</span>
                                        </span>
                            </div>
                            <div>
                                <h6 class="mb-1">Dudley Laborde</h6>
                                <span class="text-muted">Hello how are you?</span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">2:32 PM</span>
                            </div>
                        </a>
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <div class="pr-3">
                                        <span class="avatar avatar-state-success">
                                            <img src="{{ url('assets/media/image/user/man_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                            </div>
                            <div>
                                <h6 class="mb-1">Boony Gidden</h6>
                                <span class="text-muted">Hi!</span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">08:27 PM</span>
                            </div>
                        </a>
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <div class="pr-3">
                                        <span class="avatar avatar-state-danger">
                                            <img src="{{ url('assets/media/image/user/women_avatar3.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                            </div>
                            <div class="flex-grow- 1">
                                <h6 class="mb-1">Vivianne Sothcott</h6>
                                <span class="text-muted">
                                                <i class="fa fa-image mr-1"></i> Photo
                                            </span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">Yesterday</span>
                            </div>
                        </a>
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <div class="pr-3">
                                        <span class="avatar avatar-state-warning">
                                            <img src="{{ url('assets/media/image/user/man_avatar4.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">Brandais Reisen</h6>
                                <span class="text-muted">
                                                <i class="fa fa-video-camera mr-1"></i> Video
                                            </span>
                            </div>
                            <div class="text-right ml-auto d-flex flex-column">
                                <span class="small text-muted">Last week</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ./ Chat list -->

        </div>
        <!-- ./ Chat sidebar -->

        <!-- Chat content -->
        <div class="col-lg-8 chat-content no-chat-selected">
            <!-- Chat empty block -->
            <div class="chat-empty">
                <img src="{{ url('assets/media/svg/empty_chat.svg') }}" alt="...">
                <p class="lead text-muted mt-3">Choose a chat</p>
                <button class="btn btn-primary">
                    <i class="ti-plus mr-2"></i> New Chat
                </button>
            </div>
            <!-- ./Chat empty block -->

            <!-- Chat header -->
            <div class="chat-header">
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <div class="avatar avatar-state-warning">
                            <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}" class="rounded-circle"
                                 alt="image">
                        </div>
                    </div>
                    <div>
                        <p class="mb-0">Orelie Rockhall</p>
                        <div class="m-0 small text-success">typing...</div>
                    </div>
                    <div class="ml-auto">
                        <ul class="nav align-items-center">
                            <li class="mr-4 d-sm-inline d-none">
                                <a href="#" title="Start Video Call" data-toggle="tooltip">
                                    <i data-feather="video" class="width-18 height-18"></i>
                                </a>
                            </li>
                            <li class="mr-4 d-sm-inline d-none">
                                <a href="#" title="Start Voice Call" data-toggle="tooltip">
                                    <i data-feather="phone-call" class="width-18 height-18"></i>
                                </a>
                            </li>
                            <li class="d-sm-inline d-none">
                                <a href="#" title="Add to Contact" data-toggle="tooltip">
                                    <i data-feather="user-plus" class="width-18 height-18"></i>
                                </a>
                            </li>
                            <li class="ml-4 mobile-chat-close-btn">
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i data-feather="x" class="width-18 height-18"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ./ Chat header -->

            <!-- Messages -->
            <div class="messages">
                <div class="message-item">
                    <div class="message-item-content">Hi!</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me">
                    <div class="message-item-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Exercitationem fuga iure iusto libero, possimus quasi quis repellat sint tempora ullam!
                    </div>
                    <span class="time small text-muted font-italic">Yesterday</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content">Hello! How are you today?</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content d-flex">
                        <i class="ti-file mr-2 font-size-20 mt-2"></i>
                        <div>
                            <div>important_documents.pdf <i class="text-muted small">(50KB)</i></div>
                            <ul class="list-inline small">
                                <li class="list-inline-item"><a href="#">Download</a></li>
                                <li class="list-inline-item"><a href="#">View</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me message-media">
                    <img src="{{ url('assets/media/image/photo1.jpg') }}" alt="image">
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item message-item-divider">
                    <span>Today</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
            </div>
            <!-- ./ Messages -->

            <!-- Chat footer -->
            <div class="chat-footer">
                <form class="d-flex">
                    <button class="btn btn-outline-light mr-2" type="button" title="Emoji"
                            data-toggle="tooltip">
                        <i data-feather="smile" class="width-15 height-15"></i>
                    </button>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" placeholder="Write your message">
                    </div>
                    <div class="chat-footer-buttons d-flex">
                        <button class="btn btn-primary" type="submit">
                            <i data-feather="send" class="width-15 height-15"></i>
                        </button>
                        <button class="btn btn-outline-light" type="button" title="Attach files"
                                data-toggle="tooltip">
                            <i data-feather="paperclip" class="width-15 height-15"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- ./ Chat footer -->
        </div>
        <!-- ./ Chat content -->
    </div>
@endsection

@section('script')
    <!-- Chat app examples -->
    <script src="{{ url('assets/js/examples/pages/chat.js') }}"></script>
@endsection
