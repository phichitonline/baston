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
            {{-- <button type="button" class="btn btn-primary btn-pulse" onclick="javascript:window.print()">
                <i class="ti-printer mr-2"></i> พิมพ์
            </button> --}}
            <a href="javascript:window.print()" class="btn btn-outline-primary">
                <i class="ti-printer mr-2"></i> พิมพ์
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            {{-- <div class="card"> --}}
            <div>
                <div class="card-body">
                    <div class="invoice">
                        {{-- <div class="d-md-flex justify-content-between align-items-center">
                            <img src="{{ url('assets/media/image/logo/logo_nhso.png') }}" alt="logo">
                            <h3 class="text-xs-left m-b-0">เลขที่ {{ $buy->buy_number }}</h3>
                        </div> --}}
                        <div class="text-center">
                            <img src="{{ url('assets/media/image/logo/logo_nhso.png') }}" width="150" alt="logo">
                            <h4 class="text-center m-t-20 m-b-15">สำนักงานหลักประกันสุขภาพแห่งชาติ</h4>
                            <h4 class="text-center m-b-15">แบบขออนุมัติขอซื้อขอจ้าง</h4>
                            <h6 class="text-center m-b-30">(วิธีเฉพาะเจาะจง วงเงินไม่เกิน 500,000 บาท)</h6>
                        </div>
                        {{-- <hr class="m-t-b-50"> --}}
                        <div class="row">
                            <div class="col-md-6">
                                <p class="m-b-10"><b>ที่ &nbsp;&nbsp;{{ $buy->buy_number }}</b></p>
                                <p class="m-t-b-10"><br></p>
                            </div>
                            <div class="col-md-6">
                                <p class="m-b-10">
                                    <br>
                                </p>
                                <p class="m-t-b-10">วันที่ {{ thaidate('j F พ.ศ. Y',$buy->buy_date) }}</p>
                            </div>
                        </div>
                        <p class="m-t-b-10">เรื่อง &nbsp;&nbsp;
                            ขออนุมัติ &nbsp;&nbsp;<i class="ti-layout-width-full mr-1"></i>ซื้อ
                            &nbsp;&nbsp;<i class="ti-check-box mr-1"></i>จ้าง
                            &nbsp;&nbsp;<i class="ti-layout-width-full mr-1"></i>เช่า
                            &nbsp;&nbsp;<u class="dotted">{{ $buy->buy_header }}</u></p>
                        <p class="m-t-b-10">เรียน &nbsp;&nbsp;เลขาธิการสำนักงานหลักประกันสุขภาพแห่งชาติ</p>
                        <p class="m-t-b-10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ด้วย @foreach ($setting as $data){{ $data->s_name }}@endforeach
                            &nbsp;มีความประสงค์จะดำเนินการจ้าง
                            &nbsp;<u class="dotted">{{ $buy->buy_header }}</u>
                            &nbsp;ด้วยวิธีเฉพาะเจาะจง ดังนี้
                        </p>
                        <p class="m-t-b-10">
                            1. เหตุผลความจำเป็นที่ต้องซื้อหรือจ้าง/เช่า
                            &nbsp;<u class="dotted">{{ $buy->buy_header }}</u>
                        </p>
                        <p class="m-t-10 m-b-0">
                            2. ขอบเขตของงานหรือรายละเอียดคุณลักษณะเฉพาะของพัสดุ
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            2.1 รายละเอียดการซื้อ/จ้าง/เช่า
                        </p>
                        <div class="table-responsive">
                            <table class="table my-2 table-small table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">ที่</th>
                                        <th class="text-center">รายการ</th>
                                        <th class="text-right">จำนวน</th>
                                        <th class="text-right">ราคา/หน่วย</th>
                                        <th class="text-right">ราคากลาง</th>
                                        <th class="text-center">จำนวนเงิน<br>(รวมภาษีมูลค่าเพิ่ม)</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($buyitem as $data)
                                    <tr class="text-right">
                                        <td class="align-top text-center">{{ $data->item_no }}</td>
                                        <td class="align-top text-left">{{ $data->item_name }}</td>
                                        <td>{{ number_format($data->item_qty,2) }}</td>
                                        <td>{{ number_format($data->item_unit_price,2) }}/{{ $data->item_unit }}</td>
                                        <td>{{ number_format($data->item_std_price,2) }}</td>
                                        <td>{{ number_format(($data->item_unit_price * $data->item_qty),2) }}</td>
                                    </tr>
                                    @endforeach

                                    <tr>
                                        <td class="text-right" colspan="5"><b>รวมเงิน ({{ baht_text($buysumprice) }}) </b></td>
                                        <td class="text-right"><b>{{ number_format($buysumprice,2) }}</b></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <p class="m-t-b-10">
                            3. แต่งตั้งให้ <u class="dotted">{{ $buy->buy_request }}</u> เป็นผู้กำหนดรายละเอียดการจ้าง/ซื้อ/เช่า*
                        </p>
                        <p class="m-t-b-10">
                            4. วงเงินที่จะซื้อหรือจ้าง จำนวน <strong><u class="dotted">{{ number_format($buy->buy_budget,2) }}</u></strong> บาท
                            (<u class="dotted">{{ baht_text($buy->buy_budget) }}</u>)
                            <br>&nbsp;&nbsp;&nbsp;
                            รวมภาษีมูลค่าเพิ่มแล้ว จาก <u class="dotted">{{ $buy->buy_header }}</u>
                            รหัสเงินเลขที่ <u class="dotted">สปสช.1234/234</u>
                        </p>
                        <p class="m-t-b-10">
                            5. วิธีที่จะซื้อหรือจ้างและเหตุผลที่ต้องซื้อหรือจ้างโดยวิธี เฉพาะเจาะจง (ข)
                            <br>&nbsp;&nbsp;&nbsp;
                            วงเงินในการจัดซื้อจัดจ้างครั้งหนึ่ง
                            ไม่เกินวงเงินตามที่กำหนดในกฎกระทรวง (ไม่เกิน 500,000 บาท)
                        </p>
                        <p class="m-t-b-10">
                            6. หลักเกณฑ์การพิจารณา <u class="dotted">{{ $buy->buy_header }}</u> พิจารณาเกณฑ์ราคาต่ำสุด
                        </p>
                        <p class="m-t-b-10">
                            7. ระยะเวลาดำเนินการ <u class="dotted">15/0</u> วัน/เดือน (นับจากวันรับใบสั่งซื้อ/จ้าง/เช่า)
                        </p>
                        <p class="m-t-b-10">
                            8. แหล่งจัดหา <u class="dotted">ชื่อร้านค้าที่ซื้อหรือรับจ้าง</u>
                        </p>
                        <p class="m-t-b-10">
                            9. ขอแต่งตั้งบุคคลดังต่อไปนี้
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            9.1 <u class="dotted">{{ $buy->buy_request }}</u> เป็นผู้ตรวจรับพัสดุ  (กรณีวงเงินไม่เกิน 100,000 บาท ผู้ตรวจรับพัสดุ 1 คน)
                            อำนาจและหน้าที่ ตรวจรับพัสดุ ให้ดำเนินการตามระเบียบกระทรวงการคลังฯ ข้อ 175
                            โดยให้คณะกรรมการดำเนินการให้แล้วเสร็จภายใน 3 วันทำการ
                            นับตั้งแต่วันที่ผู้ขายหรือผู้รับจ้างนำพัสดุมาส่งมอบให้กับสำนักงาน
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <p> </p>
                            </div>
                            <div class="col-md-6">
                                <p class="m-t-30 m-b-0 text-center">
                                    ลงชื่อ
                                    <u class="dotted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                                    เจ้าหน้าที่</p>
                                <p class="m-t-0 m-b-10 text-center">({{ $buy->buy_request }}) &nbsp;&nbsp;&nbsp;</p>
                            </div>
                        </div>

                        <p class="m-t-b-10">
                            ความเห็นของหัวหน้าเจ้าหน้าที่
                        </p>
                        <p class="m-t-b-10">
                            <u class="dotted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                        </p>
                        <p class="m-t-b-10">
                            <u class="dotted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                        </p>

                        <div class="row">
                            <div class="col-md-12">
                                <p class="m-t-30 m-b-0 text-center">
                                    ลงชื่อ
                                    <u class="dotted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                                    หัวหน้าเจ้าหน้าที่</p>
                                <p class="m-t-0 m-b-10 text-center">({{ $buy->buy_request }}) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            </div>
                        </div>

                        <p class="m-t-b-10">
                            <u><strong>คำสั่งเลขาธิการสำนักงานหลักประกันสุขภาพแห่งชาติ</strong></u>
                        </p>
                        <p class="m-t-10 m-b-50">
                            <i class="ti-layout-width-full mr-2"></i>อนุมัติ &nbsp;&nbsp;&nbsp;&nbsp; <i class="ti-layout-width-full mr-2"></i>ไม่อนุมัติ
                        </p>
                        <p class="m-t-b-50">
                            <br>&nbsp;
                        </p>

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
