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
                                      <input type="text" class="form-control text-danger" value="{{ $buy_number }}" disabled>
                                      <input type="hidden" class="form-control" id="rid" name="rid" value="{{ $record_id }}">
                                      <input type="hidden" class="form-control" id="buy_number" name="buy_number" value="{{ $buy_number }}">
                                      {{-- <div class="valid-feedback">ถูกต้อง</div> --}}
                                      <div class="invalid-feedback">กรุณาระบุเลขที่อนุมัติ</div>
                                    </div>
                                    <label for="buy_date" class="col-sm-2 col-form-label text-right">วันที่</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control text-danger" value="{{ thaidate('j F Y',$buy_date) }}" disabled>
                                        <input type="hidden" class="form-control" id="buy_date" name="buy_date" value="{{ $buy_date }}">
                                      <div class="invalid-feedback">กรุณาระบุวันที่</div>
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        @php
                                        if ($buy_type == 1) {
                                            $buy_type_name = "ซื้อ";
                                            $buy_type_checked1 = "checked";
                                        } else if ($buy_type == 2) {
                                            $buy_type_name = "จ้าง";
                                            $buy_type_checked2 = "checked";
                                        } else {
                                            $buy_type_name = "เช่า";
                                            $buy_type_checked3 = "checked";
                                        }
                                      @endphp
                                      <legend class="col-form-label col-sm-2 pt-0 text-right">เรื่อง ขออนุมัติ</legend>
                                      <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="buy_type" id="buy_type1" value="1" @php if (isset($buy_type_checked1)) { echo $buy_type_checked1; } @endphp>
                                          <label class="form-check-label" for="buy_type1">ซื้อ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="buy_type" id="buy_type2" value="2" @php if (isset($buy_type_checked2)) { echo $buy_type_checked2; } @endphp>
                                          <label class="form-check-label" for="buy_type2">จ้าง</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="buy_type" id="buy_type3" value="3" @php if (isset($buy_type_checked3)) { echo $buy_type_checked3; } @endphp>
                                          <label class="form-check-label" for="buy_type3">เช่า</label>
                                        </div>
                                      </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                  <label for="buy_subject" class="col-sm-2 col-form-label"></label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control text-danger" value="{{ $buy_subject }}" disabled>
                                    <input type="hidden" class="form-control" id="buy_subject" name="buy_subject" value="{{ $buy_subject }}">
                                    <div class="invalid-feedback">กรุณาระบุเรื่องที่ขออนุมัติ</div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="buy_headname" class="col-sm-2 col-form-label text-right">เรียน</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="buy_headname" id="buy_headname" placeholder="" value="@foreach ($setting as $data){{ $data->s_headname }}@endforeach" required>
                                    <div class="invalid-feedback">กรุณาระบุข้อมูล</div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="buy_header2" class="col-sm-2 col-form-label text-right">ด้วย</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="buy_header2" id="buy_header2" placeholder=""
                                    value="สำนักงานหลักประกันสุขภาพแห่งชาติ เขต 3 นครสวรรค์ มีความประสงค์จะดำเนินการ {{ $buy_type_name }} {{ $buy_subject }}" required>
                                    <div class="invalid-feedback">กรุณาระบุข้อมูล</div>
                                  </div>
                                </div>

                                <!-- form-group -->
                                <fieldset class="form-group">
                                    <div class="row">
                                      <legend class="col-form-label col-sm-2 pt-0 text-right">ด้วยวิธี</legend>
                                      <div class="col-sm-10">
                                        {{-- <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="buy_method" id="buy_method1" value="1">
                                          <label class="form-check-label" for="buy_method1">ตกลงราคา</label>
                                        </div> --}}
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="buy_method" id="buy_method2" value="2">
                                          <label class="form-check-label" for="buy_method2">ประกาศเชิญชวนทั่วไป</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="buy_method" id="buy_method3" value="3" checked>
                                          <label class="form-check-label" for="buy_method3">เฉพาะเจาะจง</label>
                                        </div>
                                      </div>
                                    </div>
                                </fieldset>

                                <!-- form-group -->
                                <div class="form-group wd-xs-300">
                                    <label>1. เหตุผลความจำเป็นที่ต้องซื้อ/จ้าง/เช่า</label>
                                    <input type="text" class="form-control" name="buy_reason" value="{{ $buy_description }}" placeholder="" required>
                                    <div class="invalid-feedback">กรุณาระบุเหตุผล</div>
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
                                            <div class="col-md-4 col-sm-12 form-group">
                                                <label for="desc">รายการ</label>
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="qqq">หน่วย</label>
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="gender">ราคาต่อหน่วย</label>
                                            </div>
                                            <div class="col-md-1 col-sm-12 form-group">
                                                <label for="profession">ราคากลาง</label>
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="profession">จำนวน</label>
                                            </div>
                                            <div class="col-md-1 col-sm-12 form-group">
                                                <label for="profession"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-repeater-list="groupitem">
                                    <div data-repeater-item>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 form-group">
                                                <input type="text" class="form-control" name="item_name" id="item_name" placeholder="">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <input type="text" class="form-control" name="item_unit" id="item_unit" placeholder="">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <input type="number" step="any" class="form-control text-right" name="item_unit_price" id="item_unit_price" placeholder="">
                                            </div>
                                            <div class="col-md-1 col-sm-12 form-group">
                                                <input type="text" class="form-control" name="item_std_price" id="item_std_price" placeholder="">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <input type="number" step="any" class="form-control text-right" name="item_qty" id="item_qty" placeholder="">
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
                                    <label for="buy_perspec" class="col-sm-2 col-form-label">3. แต่งตั้งให้</label>
                                    <div class="col-sm-4">
                                        <select class="js-example-basic-single" name="buy_perspec">
                                            <option value="">เลือกรายชื่อ</option>
                                            @foreach ($director as $data)
                                            <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label for="buy_perspec2" class="col-sm-6 col-form-label">เป็นผู้กำหนดรายละเอียดการจ้าง/ซื้อ/เช่า*</label>
                                </div>
                                <!-- form-group -->
                                <div class="form-group row">
                                    <label for="buy_budget" class="col-sm-3 col-form-label">4. วงเงินที่จะซื้อหรือจ้าง จำนวน</label>
                                    <div class="col-sm-3">
                                        <input type="number" step="any" class="form-control text-right" name="buy_budget" value="{{ $buy_budget }}" required>
                                        <div class="invalid-feedback">กรุณาระบุข้อมูล</div>
                                    </div>
                                    <label for="buy_budget2" class="col-sm-6 col-form-label">บาท&nbsp;&nbsp;&nbsp;&nbsp;รวมภาษีมูลค่าเพิ่มแล้ว จาก</label>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="buy_project" placeholder="" required>
                                        <div class="invalid-feedback">กรุณาระบุข้อมูล</div>
                                    </div>
                                    <label for="buy_budgetcode" class="col-sm-2 col-form-label text-right">รหัสเงินเลขที่</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="buy_budgetcode" placeholder="" required>
                                        <div class="invalid-feedback">กรุณาระบุข้อมูล</div>
                                    </div>
                                </div>

                                <!-- form-group -->
                                <div class="form-group wd-xs-300">
                                    <label>5. วิธีที่จะซื้อหรือจ้างและเหตุผลที่ต้องซื้อหรือจ้างโดยวิธี เฉพาะเจาะจง(ข) วงเงินในการจัดซื้อจัดจ้างครั้งหนึ่งไม่เกินวงเงินตามที่กำหนดในกฎกระทรวง (ไม่เกิน 500,000 บาท)</label>
                                </div>
                                <!-- form-group -->
                                <div class="form-group wd-xs-300">
                                    <label>6. หลักเกณฑ์การพิจารณา พิจารณาเกณฑ์ราคาต่ำสุด</label>
                                </div>
                                <!-- form-group -->
                                <div class="form-group row">
                                    <label for="buy_period" class="col-sm-3 col-form-label">7. ระยะเวลาดำเนินการ (วัน/เดือน)</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="buy_period" placeholder="" required>
                                        <div class="invalid-feedback">กรุณาระบุข้อมูล</div>
                                    </div>
                                    <label for="buy_period2" class="col-sm-6 col-form-label">(นับจากวันรับใบสั่งซื้อ/จ้าง/เช่า)</label>
                                </div>
                                <!-- form-group -->
                                <div class="form-group row">
                                    <label for="buy_shop" class="col-sm-2 col-form-label">8. แหล่งจัดหา</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="buy_shop" placeholder="" required>
                                        <div class="invalid-feedback">กรุณาระบุข้อมูล</div>
                                    </div>
                                </div>

                                <!-- form-group -->
                                <div class="form-group row">
                                    <label for="buy_percheck" class="col-sm-12 col-form-label">9. ขอแต่งตั้งบุคคลดังต่อไปนี้</label>
                                </div>
                                <!-- form-group -->
                                <div class="form-group row">
                                    <label for="buy_percheck1" class="col-sm-2 col-form-label text-right">9.1</label>
                                    <div class="col-sm-4">
                                        <select class="js-example-basic-single" name="buy_percheck1">
                                            <option value="">เลือกรายชื่อ</option>
                                            @foreach ($director as $data)
                                            <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label for="buy_percheck1" class="col-sm-6 col-form-label">ประธานกรรมการ</label>
                                </div>
                                <div class="form-group row">
                                    <label for="buy_percheck2" class="col-sm-2 col-form-label text-right">9.2</label>
                                    <div class="col-sm-4">
                                        <select class="js-example-basic-single" name="buy_percheck2">
                                            <option value="">เลือกรายชื่อ</option>
                                            @foreach ($director as $data)
                                            <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label for="buy_percheck2" class="col-sm-6 col-form-label">กรรมการ</label>
                                </div>
                                <div class="form-group row">
                                    <label for="buy_percheck3" class="col-sm-2 col-form-label text-right">9.3</label>
                                    <div class="col-sm-4">
                                        <select class="js-example-basic-single" name="buy_percheck3">
                                            <option value="">เลือกรายชื่อ</option>
                                            @foreach ($director as $data)
                                            <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label for="buy_percheck3" class="col-sm-6 col-form-label">กรรมการ</label>
                                </div>
                                <!-- form-group -->
                                <div class="form-group wd-xs-300">
                                    <label>เป็นผู้ตรวจรับพัสดุ (กรณีวงเงินไม่เกิน 100,000 บาท ผู้ตรวจรับพัสดุ 1 คน)
                                        อำนาจและหน้าที่ ตรวจรับพัสดุ ให้ดำเนินการตามระเบียบกระทรวงการคลังฯ ข้อ 175
                                        โดยให้คณะกรรมการดำเนินการให้แล้วเสร็จภายใน 3 วันทำการ
                                        นับตั้งแต่วันที่ผู้ขายหรือผู้รับจ้างนำพัสดุมาส่งมอบให้กับสำนักงาน
                                    </label>
                                </div>

                                <!-- form-group -->
                                <div class="form-group row">
                                    <label for="buy_auth" class="col-sm-2 col-form-label text-right">ลงชื่อ</label>
                                    <div class="col-sm-4">
                                        <select class="js-example-basic-single" name="buy_auth">
                                            <option value="">เลือกรายชื่อ</option>
                                            @foreach ($director as $data)
                                            <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label for="buy_auth" class="col-sm-4 col-form-label">เจ้าหน้าที่</label>
                                </div>

                                <!-- form-group -->
                                <div class="form-group row">
                                    <label for="buy_headauth" class="col-sm-2 col-form-label text-right">ลงชื่อ</label>
                                    <div class="col-sm-4">
                                        <select class="js-example-basic-single" name="buy_headauth">
                                            <option value="">เลือกรายชื่อ</option>
                                            @foreach ($director as $data)
                                            <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label for="buy_headauth" class="col-sm-4 col-form-label">หัวหน้าเจ้าหน้าที่</label>
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
