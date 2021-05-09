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
                        <form action="{{ route('record.store') }}" method="POST">
                            @csrf
                            <fieldset class="form-group">
                                <div class="row">
                                  <legend class="col-form-label col-sm-2 pt-0 text-right">ขออนุมัติ</legend>
                                  <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="buy_type" id="buy_type1" value="1">
                                      <label class="form-check-label" for="buy_type1">ซื้อ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="buy_type" id="buy_type2" value="2">
                                      <label class="form-check-label" for="buy_type2">จ้าง</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="buy_type" id="buy_type3" value="3">
                                      <label class="form-check-label" for="buy_type3">เช่า</label>
                                    </div>
                                  </div>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <label for="buy_date" class="col-md-2 col-form-label text-md-right">วันที่</label>
                                <div class="col-md-4">
                                    <input type="date" class="form-control" id="buy_date" name="buy_date" required>
                                    @error('buy_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">เลขที่</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="buy_number" name="buy_number" value="@foreach ($setting as $data){{ $data->s_no }}@endforeach" required>
                                    @error('buy_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="buy_header" class="col-md-2 col-form-label text-md-right">เรื่อง</label>
                                <div class="col-md-10"><input type="text" class="form-control" id="buy_header" name="buy_header" required>
                                    @error('buy_header')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="buy_budget" class="col-md-2 col-form-label text-md-right">งบประมาณ</label>
                                <div class="col-md-4">
                                    <input type="number" step="any" class="form-control" id="buy_budget" name="buy_budget" required>
                                    @error('buy_budget')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="buy_request" class="col-md-2 col-form-label text-md-right">ผู้ขอ</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="buy_request" name="buy_request" value="{{ Auth::user()->name }}" required>
                                    @error('buy_request')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="buy_description" class="col-md-2 col-form-label text-md-right">หมายเหตุ</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="buy_description" name="buy_description" rows="3" placeholder="ระบุเหตุผลความจำเป็น หรือข้อมูลเพิ่มเติมอื่นๆ"> </textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="buy_description" class="col-md-2 col-form-label text-md-right"></label>
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-primary"><i class="ti-save mr-2"></i> เพิ่มบันทึกขอซื้อ/จ้าง</button>
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
