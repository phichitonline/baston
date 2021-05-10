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
    @foreach ($check_list as $data)

                        <div class="text-center">
                            <img src="{{ url('assets/media/image/logo/logo_nhso.png') }}" width="150" alt="logo">
                            <h2 class="text-center m-t-20 m-b-15">ใบตรวจรับพัสดุ</h2>
                            <h4 class="text-center m-b-30">ตามระเบียบกระทรวงการคลังว่าด้วยการจัดซื้อจัดจ้างและการบริหารพัสดุภาครัฐ พ.ศ. 2560 ข้อ 175</h4>
                        </div>

                        <p class="m-t-50 m-b-0 text-right lead">
                            <strong>ผู้ตรวจรับพัสดุ</strong>
                        </p>
                        <p class="m-t-0 m-b-20 text-right lead">
                            <strong>ใบตรวจรับพัสดุเลขที่<u class="dotted"> {{ $data->buy_number }} </u>ลงวันที่<u class="dotted"> {{ thaidate('j F Y',$data->buy_date) }} </u></strong>
                        </p>
                        @php
                        if ($data->buy_type == 1) {
                            $buy_type_name = "ขาย";
                            $buy_type_name2 = "ของ";
                            $buy_type_name3 = "ใบส่งของ";
                            $buy_type_name4 = "งานซื้อ";
                        } else if ($data->buy_type == 2) {
                            $buy_type_name = "รับจ้าง";
                            $buy_type_name2 = "งานจ้าง";
                            $buy_type_name3 = "ใบส่งมอบงาน";
                            $buy_type_name4 = "งานจ้าง";
                        } else {
                            $buy_type_name = "ให้เช่า";
                            $buy_type_name2 = "ค่าเช่า";
                            $buy_type_name3 = "ใบแจ้งหนี้ค่าเช่า";
                            $buy_type_name4 = "การเช่า";
                        }
                      @endphp
                        <p class="m-t-b-20 lead">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ใบตรวจรับพัสดุฉบับนี้ให้ไว้เพื่อแสดงว่า <u class="dotted"> {{ $data->buy_shop }} </u>
                            ซึ่งเป็นผู้<u class="dotted"> {{ $buy_type_name }}  {{ $data->buy_subject }} </u>
                            ตาม ใบสั่งซื้อ/ใบสั่งจ้าง เลขที่ <u class="dotted"> {{ $data->buy_number }} </u>
                            ลงวันที่ <u class="dotted"> {{ thaidate('j F Y',$data->buy_date) }} </u>
                            ในวงเงินทั้งสิ้น <u class="dotted"> {{ number_format($data->buy_budget,2) }} ({{ baht_text($data->buy_budget) }})</u>
                            รวมภาษีมูลค่าเพิ่มแล้ว ซึ่งผู้{{ $buy_type_name }} ได้ส่งมอบ <u class="dotted">{{ $data->buy_subject }} </u>
                            ตาม <u class="dotted">{{ $buy_type_name3 }} {{ $data->check_bill }} </u>
                            และผู้ตรวจรับพัสดุ ได้ตรวจรับงาน แล้วเมื่อวันที่ <u class="dotted"> {{ thaidate('j F Y',$data->check_checkdate) }} </u>
                            มีความเห็นว่า <u class="dotted">{{ $buy_type_name4 }} {{ $data->buy_subject }} </u>
                            มีครบถ้วนถูกต้องเป็นไปตามเงื่อนไขใบสั่งซื้อ/ใบสั่งจ้าง ทุกประการ
                        </p>
                        <p class="m-t-20 m-b-50 lead">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            จึงออกใบตรวจรับฉบับนี้ให้ไว้เป็นหลักฐาน
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <p> </p>
                            </div>
                            <div class="col-md-6">
                                <p class="m-t-30 m-b-10 lead">
                                    ให้ไว้ ณ วันที่ {{ thaidate('j F Y',$data->check_checkdate) }}
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <p> </p>
                            </div>
                            <div class="col-md-6">
                                <p class="m-t-50 m-b-0 text-center lead">
                                    ลงชื่อ
                                    <u class="dotted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                                    ผู้ตรวจรับพัสดุ</p>
                                <p class="m-t-0 m-b-10 text-center lead">({{ $data->buy_auth }}) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>
    </div>
    @endforeach

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
