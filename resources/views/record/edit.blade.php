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
            <a class="app-detail-close-button btn btn-outline-light mr-2" href="{{ route('record.index') }}">
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
                    <h6 class="card-title mb-5">เพิ่ม{{ $pagename }}</h6>
                    <div class="col-md-12">
                        <form action="{{ route('record.update',$record->id) }}" method="POST" novalidate="novalidate">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="buy_date" class="col-md-2 col-form-label text-md-right">วันที่</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="buy_date" name="buy_date" value="{{ $record->buy_date }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">เลขที่</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="buy_number" name="buy_number" value="{{ $record->buy_number }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="buy_header" class="col-md-2 col-form-label text-md-right">เรื่อง</label>
                                <div class="col-md-10"><input type="text" class="form-control" id="buy_header" name="buy_header" value="{{ $record->buy_header }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="buy_budget" class="col-md-2 col-form-label text-md-right">งบประมาณ</label>
                                <div class="col-md-4">
                                    <input type="number" step="any" class="form-control" id="buy_budget" name="buy_budget" value="{{ $record->buy_budget }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="buy_request" class="col-md-2 col-form-label text-md-right">ผู้ขอ</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="buy_request" name="buy_request" value="{{ Auth::user()->name }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="buy_description" class="col-md-2 col-form-label text-md-right">หมายเหตุ</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="buy_description" name="buy_description" rows="3" placeholder="ระบุเหตุผลความจำเป็น หรือข้อมูลเพิ่มเติมอื่นๆ">{{ $record->buy_description }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="buy_description" class="col-md-2 col-form-label text-md-right"></label>
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-primary"><i class="ti-check mr-2"></i> บันทึก</button>
                                </div>
                            </div>

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
