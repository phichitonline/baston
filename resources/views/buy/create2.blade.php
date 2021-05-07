@extends('layouts.app')

@section('head')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('vendors/select2/css/select2.min.css') }}" type="text/css">
    <!-- Form wizard -->
    <link rel="stylesheet" href="{{ url('vendors/form-wizard/jquery.steps.css') }}" type="text/css">
    <!-- Css -->
    <link rel="stylesheet" href="{{ url('vendors/datepicker/daterangepicker.css') }}" type="text/css">
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header">
        <div class="page-title">
            <h3>{{ $pagename }}</h3>
        </div>
    </div>
                        <section class="card card-body border mb-0">

                            <form class="needs-validation basic-repeater" action="{{ route('buy.store') }}" method="POST" novalidate="">
                                @csrf

                                <div class="form-group row">
                                    <label for="buy_number" class="col-sm-2 col-form-label text-right">ที่</label>
                                    <div class="col-sm-4">
                                      <input type="text" class="form-control" value="{{ $buy_number }}" disabled>
                                      <input type="hidden" class="form-control" id="record_id" name="record_id" value="{{ $record_id }}">
                                      <input type="hidden" class="form-control" id="buy_number" name="buy_number" value="{{ $buy_number }}">
                                      {{-- <div class="valid-feedback">ถูกต้อง</div> --}}
                                      <div class="invalid-feedback">กรุณาระบุเลขที่อนุมัติ</div>
                                    </div>
                                    <label for="buy_date" class="col-sm-2 col-form-label text-right">วันที่</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" value="{{ thaidate('j F Y',$buy_date) }}" disabled>
                                        <input type="hidden" class="form-control" id="buy_date" name="buy_date" value="{{ $buy_date }}">
                                      <div class="invalid-feedback">กรุณาระบุวันที่</div>
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                      <legend class="col-form-label col-sm-2 pt-0 text-right">เรื่อง ขออนุมัติ</legend>
                                      <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="buytype" id="buytype1" value="1" checked>
                                          <label class="form-check-label" for="buytype1">ซื้อ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="buytype" id="buytype2" value="2">
                                          <label class="form-check-label" for="buytype2">จ้าง</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="buytype" id="buytype3" value="3">
                                          <label class="form-check-label" for="buytype3">เช่า</label>
                                        </div>
                                      </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                  <label for="buy_header" class="col-sm-2 col-form-label"></label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $buy_header }}" disabled>
                                    <input type="hidden" class="form-control" id="buy_header" name="buy_header" value="{{ $buy_header }}">
                                    <div class="invalid-feedback">กรุณาระบุเรื่องที่ขออนุมัติ</div>
                                  </div>
                                </div>

                                <hr class="my-3">
                                <!-- form-group -->
                                <div class="form-group wd-xs-300">
                                    <label>2. ขอบเขตของงานหรือรายละเอียดคุณลักษณะเฉพาะของพัสดุ</label>
                                    <p>2.1 รายละเอียดการซื้อ/จ้าง/เช่า</p>
                                </div>

                                <div>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 form-group">
                                                <label for="desc">รายการ</label>
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="qqq">หน่วย</label>
                                            </div>
                                            <div class="col-md-1 col-sm-12 form-group">
                                                <label for="gender">ราคาต่อหน่วย</label>
                                            </div>
                                            <div class="col-md-1 col-sm-12 form-group">
                                                <label for="profession">ราคากลาง</label>
                                            </div>
                                            <div class="col-md-1 col-sm-12 form-group">
                                                <label for="profession">จำนวน</label>
                                            </div>
                                            <div class="col-md-1 col-sm-12 form-group">
                                                <label for="profession"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-repeater-list="group-item">
                                    <div data-repeater-item>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="text" class="form-control" name="item_name" id="item_name" placeholder="">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <input type="text" class="form-control" name="item_unit" id="item_unit" placeholder="">
                                            </div>
                                            <div class="col-md-1 col-sm-12 form-group">
                                                <input type="number" class="form-control" name="item_unit_price" id="item_unit_price" placeholder="">
                                            </div>
                                            <div class="col-md-1 col-sm-12 form-group">
                                                <input type="number" class="form-control" name="item_std_price" id="item_std_price" placeholder="">
                                            </div>
                                            <div class="col-md-1 col-sm-12 form-group">
                                                <input type="number" class="form-control" name="item_qty" id="item_qty" placeholder="">
                                            </div>
                                            <div class="col-md-1 col-sm-12 form-group">
                                                <button type="button" class="btn btn-danger" data-repeater-delete>
                                                    <i class="ti-close font-size-10 mr-2"></i> ลบ
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" data-repeater-create>
                                    <i class="ti-plus font-size-10 mr-2"></i> เพิ่มรายการ
                                </button>

                                <hr class="my-3">

                                <!-- form-group -->
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label text-right">ลงชื่อ</label>
                                    <div class="col-sm-4">
                                        <select class="js-example-basic-single">
                                            <option value="">เลือกรายชื่อ</option>
                                            @foreach ($director as $data)
                                            <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label for="inputPassword3" class="col-sm-4 col-form-label">หัวหน้าเจ้าหน้าที่</label>
                                </div>


                                <!-- form-footer -->
                                <div class="text-right d-print-none">
                                    <hr class="my-5">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
                                            <label class="form-check-label" for="invalidCheck">ยืนยันบันทึกข้อมูล</label>
                                            <div class="invalid-feedback">กรุณาตรวจสอบข้อมูลให้ถูกต้องเรียบร้อยแล้วติ๊กเลือก เพื่อยืนยันการบันทึก</div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">
                                        <i class="ti-save mr-2"></i> บันทึกคำขอ
                                    </button>
                                    {{-- <a href="javascript:window.print()" class="btn btn-success m-l-5">
                                        <i class="ti-printer mr-2"></i> หน้าสำหรับพิมพ์
                                    </a> --}}
                                </div>

                            </form>
                        </section>


                    {{-- </div> --}}

            {{-- <div data-label="หมายเหตุ" class="demo-code-preview">
                <pre><code>
                    คำอธิบาย กรุณาตรวจสอบข้อมูลให้ถูกต้องเรียบร้อยแล้วติ๊กเลือก เพื่อยืนยันการบันทึก
                    กรุณาตรวจสอบข้อมูลให้ถูกต้องเรียบร้อยแล้วติ๊กเลือก เพื่อยืนยันการบันทึก กรุณาตรวจสอบข้อมูลให้ถูกต้องเรียบร้อยแล้วติ๊กเลือก เพื่อยืนยันการบันทึก
                    กรุณาตรวจสอบข้อมูลให้ถูกต้องเรียบร้อยแล้วติ๊กเลือก เพื่อยืนยันการบันทึก
                </code></pre>
            </div> --}}
<div><br></div>

@endsection

@section('script')

    <!-- Select2 -->
    <script src="{{ url('vendors/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/js/examples/select2.js') }}"></script>

    <!-- Datepicker -->
    <script src="{{ url('vendors/datepicker/daterangepicker.js') }}"></script>
    <script src="{{ url('assets/js/examples/datepicker.js') }}"></script>

    <!-- Form wizard -->
    <script src="{{ url('vendors/form-wizard/jquery.steps.min.js') }}"></script>
    <script src="{{ url('assets/js/examples/form-wizard.js') }}"></script>

    <!-- Form repeater -->
    <script src="{{ url('vendors/jquery.repeater.min.js') }}"></script>

    <!-- Form repeater examples -->
    <script src="{{ url('assets/js/examples/pages/form-repeater.js') }}"></script>

    <!-- Form validation example -->
    <script src="{{ url('assets/js/examples/form-validation.js') }}"></script>

    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>
@endsection
