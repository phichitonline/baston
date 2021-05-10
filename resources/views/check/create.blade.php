@extends('layouts.app')

@section('head')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('vendors/select2/css/select2.min.css') }}" type="text/css">
    <!-- Css -->
    <link rel="stylesheet" href="{{ url('vendors/datepicker/daterangepicker.css') }}" type="text/css">
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
                    <div class="col-md-12">
                        <form action="{{ route('check.store') }}" method="POST">
                            @csrf

                            <div class="form-group row">
                                <label for="buy_number" class="col-md-3 col-form-label text-md-right">เลขที่ใบสั่งซื้อ/ใบสั่งจ้าง</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control text-danger" id="buy_number" name="buy_number" value="{{ $buy_number }}" disabled>
                                    <input type="hidden" class="form-control" id="buy_id" name="buy_id" value="{{ $buy_id }}">
                                    @error('buy_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="buy_date" class="col-md-3 col-form-label text-md-right">วันที่ใบสั่งซื้อ/ใบสั่งจ้าง</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control text-danger" id="buy_date" name="buy_date" value="{{ thaidate('j F Y',$buy_date) }}" disabled>
                                    @error('buy_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="buy_shop" class="col-md-3 col-form-label text-md-right">ผู้ขาย/ผู้รับจ้าง</label>
                                <div class="col-md-9"><input type="text" class="form-control text-danger" id="buy_shop" name="buy_shop" value="{{ $buy_shop }}" disabled>
                                    @error('buy_shop')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="buy_subject" class="col-md-3 col-form-label text-md-right">เรื่อง</label>
                                <div class="col-md-9"><input type="text" class="form-control text-danger" id="buy_subject" name="buy_subject" value="{{ $buy_subject }}" disabled>
                                    @error('buy_subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="buy_budget" class="col-md-3 col-form-label text-md-right">งบประมาณ</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control text-right text-danger" id="buy_budget" name="buy_budget" value="{{ number_format($buy_budget,2) }}" disabled>
                                    @error('buy_budget')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="check_bill" class="col-md-3 col-form-label text-md-right">เลขที่ใบส่งของ</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="check_bill" name="check_bill">
                                    @error('check_bill')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="check_billtotal" class="col-md-3 col-form-label text-md-right">จำนวนเงิน</label>
                                <div class="col-md-4">
                                    <input type="number" step="any" class="form-control text-right" id="check_billtotal" name="check_billtotal" required>
                                    @error('check_billtotal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="check_billdate" class="col-md-3 col-form-label text-md-right">วันที่ใบส่งของ</label>
                                <div class="col-md-4">
                                    <input type="date" class="form-control" id="check_billdate" name="check_billdate" required>
                                    @error('check_billdate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="check_checkdate" class="col-md-3 col-form-label text-md-right">วันที่ตรวจรับ</label>
                                <div class="col-md-4">
                                    <input type="date" class="form-control" id="check_checkdate" name="check_checkdate" required>
                                    @error('check_checkdate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="check_checker" class="col-sm-3 col-form-label text-right">ผู้ตรวจรับ</label>
                                <div class="col-sm-4">
                                    <select class="js-example-basic-single" name="check_checker">
                                        <option value="">เลือกรายชื่อ</option>
                                        @foreach ($director as $data)
                                        <option value="{{ $data->name }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="check_description" class="col-md-3 col-form-label text-md-right">หมายเหตุ</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="check_description" name="check_description" rows="3" placeholder="ข้อมูลเพิ่มเติมอื่นๆ"> </textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-md-right"></label>
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-primary"><i class="ti-save mr-2"></i> บันทึกตรวจรับ</button>
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
    <!-- Select2 -->
    <script src="{{ url('vendors/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/js/examples/select2.js') }}"></script>

    <!-- Datepicker -->
    <script src="{{ url('vendors/datepicker/daterangepicker.js') }}"></script>
    <script src="{{ url('assets/js/examples/datepicker.js') }}"></script>

    <!-- Form validation example -->
    <script src="{{ url('assets/js/examples/form-validation.js') }}"></script>

    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>
@endsection
