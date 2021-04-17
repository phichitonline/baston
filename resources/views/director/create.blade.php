@extends('layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header">
        <div class="page-title">
            <h3>{{ $pagename }}</h3>
            {{-- <a href="{{ route('director.index') }}" class="btn btn-outline-primary">
                <i class="ti-plus mr-2"></i> กลับ
            </a> --}}
            <a class="app-detail-close-button btn btn-outline-light mr-2" href="{{ route('director.index') }}">
                <i class="ti-arrow-left mr-2"></i> กลับ
            </a>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <i class="ti-check mr-2"></i> {{ $message }}
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-5">เพิ่มรายชื่อ{{ $pagename }}</h6>
                    <div class="col-md-6">
                        <form action="{{ route('director.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">ชื่อ-นามสกุล</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <small id="name" class="form-text text-muted">
                                    ชื่อเจ้าหน้าที่ หรือคณะกรรมการสำหรับระบบงาน
                                </small>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="position">ตำแหน่ง</label>
                                <input type="text" class="form-control" id="position" name="position" required>
                                <small id="name" class="form-text text-muted">
                                    ตำแหน่งงาน
                                </small>
                                @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="ti-plus mr-2"></i> เพิ่มกรรมการ</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>
@endsection
