@extends('layouts.app')

@section('head')
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
                        @php
                        if ($buy->buy_method == 1) {
                            $buy_method_name = "ตกลงราคา";
                        } else if ($buy->buy_method == 2) {
                            $buy_method_name = "ประกาศเชิญชวนทั่วไป";
                        } else {
                            $buy_method_name = "เฉพาะเจาะจง";
                        }
                        @endphp
                        {{-- <div class="d-md-flex justify-content-between align-items-center">
                            <img src="{{ url('assets/media/image/logo/logo_nhso.png') }}" alt="logo">
                            <h3 class="text-xs-left m-b-0">เลขที่ {{ $buy->buy_number }}</h3>
                        </div> --}}
                        <div class="text-center">
                            <img src="{{ url('assets/media/image/logo/logo_nhso.png') }}" width="220" alt="logo">
                            <h2 class="text-center m-t-20 m-b-15">สำนักงานหลักประกันสุขภาพแห่งชาติ</h2>
                            <h2 class="text-center m-b-15">แบบขออนุมัติขอซื้อขอจ้าง</h2>
                            <h4 class="text-center m-b-30">(วิธี{{ $buy_method_name }} วงเงินไม่เกิน 500,000 บาท)</h4>
                        </div>
                        {{-- <hr class="m-t-b-50"> --}}
                        <div class="row">
                            <div class="col-md-6">
                                <p class="m-b-10 lead"><b>ที่ &nbsp;&nbsp;{{ $buy->buy_number }}</b></p>
                            </div><div class="col-md-6">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <p class="m-t-b-10 lead">วันที่ {{ thaidate('j F Y',$buy->buy_date) }}</p>
                            </div>
                        </div>
                        @php
                        if ($buy->buy_type == 1) {
                            $buy_type_name = "ซื้อ";
                            $buy_type_icon1 = "<i class='ti-check'></i>";
                        } else if ($buy->buy_type == 2) {
                            $buy_type_name = "จ้าง";
                            $buy_type_icon2 = "<i class='ti-check'></i>";
                        } else if ($buy->buy_type == 3) {
                            $buy_type_name = "เช่า";
                            $buy_type_icon3 = "<i class='ti-check'></i>";
                        } else {
                            $buy_type_name = "";
                        }
                        $buy_type_icon = "&nbsp;&nbsp;&nbsp;&nbsp;";
                        @endphp
                        <p class="m-t-b-10 lead">เรื่อง &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ขออนุมัติ &nbsp;&nbsp;(@if (isset($buy_type_icon1)) {!! $buy_type_icon1 !!} @else {!! $buy_type_icon !!} @endif) ซื้อ
                            &nbsp;&nbsp;(@if (isset($buy_type_icon2)) {!! $buy_type_icon2 !!} @else {!! $buy_type_icon !!} @endif) จ้าง
                            &nbsp;&nbsp;(@if (isset($buy_type_icon3)) {!! $buy_type_icon3 !!} @else {!! $buy_type_icon !!} @endif) เช่า
                            &nbsp;&nbsp;<u class="dotted">{{ $buy->buy_subject }}</u></p>
                        <p class="m-t-b-10 lead">เรียน &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $buy->buy_headname }}</p>
                        <p class="m-t-b-10 lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ด้วย <u class="dotted">{{ $buy->buy_subject2 }}</u>
                            &nbsp;ด้วยวิธี <u class="dotted">{{ $buy_method_name }}</u> ดังนี้
                        </p>
                        <p class="m-t-b-10 lead">
                            1. เหตุผลความจำเป็นที่ต้อง <u class="dotted">{{ $buy_type_name }}
                            &nbsp;{{ $buy->buy_reason }}</u>
                        </p>
                        <p class="m-t-10 m-b-0 lead">
                            2. ขอบเขตของงานหรือรายละเอียดคุณลักษณะเฉพาะของพัสดุ
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            2.1 รายละเอียดการ{{ $buy_type_name }}
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td style="border: 2px solid black" class="text-center lead">ที่</td>
                                        <td style="border: 2px solid black" class="text-center lead">รายการ</td>
                                        <td style="border: 2px solid black" class="text-right lead">จำนวน</td>
                                        <td style="border: 2px solid black" class="text-right lead">ราคา/หน่วย</td>
                                        <td style="border: 2px solid black" class="text-right lead">ราคากลาง</td>
                                        <td style="border: 2px solid black" class="text-center lead">จำนวนเงิน<br>(รวมภาษีมูลค่าเพิ่ม)</td>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($buyitem as $data)
                                    <tr class="text-right">
                                        <td style="border: 2px solid black" class="align-top text-center lead">{{ $data->item_no }}</td>
                                        <td style="border: 2px solid black" class="align-top text-left lead">{{ $data->item_name }}</td>
                                        <td style="border: 2px solid black" class="lead">{{ number_format($data->item_qty,2) }}</td>
                                        <td style="border: 2px solid black" class="lead">{{ number_format($data->item_unit_price,2) }}/{{ $data->item_unit }}</td>
                                        <td style="border: 2px solid black" class="lead">{{ number_format($data->item_std_price,2) }}</td>
                                        <td style="border: 2px solid black" class="lead">{{ number_format(($data->item_unit_price * $data->item_qty),2) }}</td>
                                    </tr>
                                    @endforeach
                                    @if ($buyitemcount < 5)
                                    <tr>
                                        <td class="text-right lead" colspan="5"><b>รวมเงิน ({{ baht_text($buysumprice) }}) </b></td>
                                        <td style="border: 2px solid black" class="text-right lead"><b>{{ number_format($buysumprice,2) }}</b></td>
                                    </tr>
                                    @else
                                    <tr>
                                        <td class="text-right lead" colspan="5"><b>ยอดยกไป 2.1 รายละเอียดการ{{ $buy_type_name }} (ใบต่อ) </b></td>
                                        <td style="border: 2px solid black" class="text-right lead"><b>{{ number_format($buysumprice,2) }}</b></td>
                                    </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
@if ($buy->buy_perspec2 == NULL)
                        <p class="m-t-b-10 lead">
                            3. แต่งตั้งให้ <u class="dotted">{{ $buy->buy_perspec }}</u> เป็นผู้กำหนดรายละเอียดการ{{ $buy_type_name }}*
                        </p>
@else
                        <p class="m-t-0 m-b-0">
                            <div class="form-group m-t-b-0 row lead">
                                <label class="col-sm-6 col-form-label m-t-b-0 lead">
                                    3. แต่งตั้งให้
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    3.1 <u class="dotted">{{ $buy->buy_perspec }}</u>
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    3.2 <u class="dotted">{{ $buy->buy_perspec2 }}</u>
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    3.3 <u class="dotted">{{ $buy->buy_perspec3 }}</u>
                                </label>
                                <label class="col-sm-6 col-form-label lead"><br>เป็นประธานกรรมการ<br>เป็นกรรมการ<br>เป็นกรรมการ ผู้กำหนดรายละเอียดการ{{ $buy_type_name }}*</label>
                            </div>
                        </p>
@endif
                        <p class="m-t-b-10 lead">
                            4. วงเงินที่จะซื้อหรือจ้าง จำนวน <strong><u class="dotted">{{ number_format($r_budget,2) }}</u></strong> บาท
                            (<u class="dotted">{{ baht_text($r_budget) }}</u>)
                            &nbsp;&nbsp;&nbsp;รวมภาษีมูลค่าเพิ่มแล้ว จาก
                            <br>&nbsp;&nbsp;&nbsp;<u class="dotted">{{ $buy->buy_project }}</u>
                            รหัสเงินเลขที่ <u class="dotted">{{ $buy->buy_budgetcode }}</u>
                        </p>
                        <p class="m-t-b-10 lead">
                            5. วิธีที่จะซื้อหรือจ้างและเหตุผลที่ต้องซื้อหรือจ้างโดยวิธี <u class="dotted">{{ $buy_method_name }}</u> (ข)
                            วงเงินในการจัดซื้อจัดจ้างครั้งหนึ่ง
                            <br>&nbsp;&nbsp;&nbsp;
                            ไม่เกินวงเงินตามที่กำหนดในกฎกระทรวง (ไม่เกิน 500,000 บาท)
                        </p>
                        @if ($buy->buy_perspec2 == NULL)
                        <p class="m-t-b-10 lead">
                            6. หลักเกณฑ์การพิจารณา <u class="dotted"> พิจารณาเกณฑ์ราคาต่ำสุด</u>
                        </p>
                        <p class="m-t-b-0 lead">
                            7. ระยะเวลาดำเนินการ <u class="dotted">{{ $buy->buy_period }}</u> (นับจากวันรับใบสั่งซื้อ/จ้าง/เช่า)
                        </p>
                        @else
                        @endif
@if ($buyitemcount == 1)
    <p class="m-t-b-50">
        <br>&nbsp;
    </p>
@elseif ($buyitemcount == 2)
    <p class="m-t-b-20">
        <br>&nbsp;
    </p>
@elseif ($buyitemcount == 3)
    <p class="m-t-b-0">
        <br>&nbsp;
    </p>
@elseif ($buyitemcount == 4)
@elseif ($buyitemcount > 4)

@else

@endif
                        <div class="row">
                            <div class="col-md-6"><br>FM-401 01-013</div>
                            <div class="col-md-6 text-right">ฉบับที่ 05 <br>วันที่ 24 ธันวาคม 2561</div>
                        </div>
                        <p class="m-t-b-0" style='page-break-after:always'></p>
                    {{-- เส้นแบ่งขึ้นหน้าใหม่ --}}


                        <p class="m-t-b-20 text-center lead">
                            - 2 -
                        </p>

                        @if ($buy->buy_perspec2 == NULL)
                        @else
                        <p class="m-t-b-10 lead">
                            6. หลักเกณฑ์การพิจารณา <u class="dotted"> พิจารณาเกณฑ์ราคาต่ำสุด</u>
                        </p>
                        <p class="m-t-b-10 lead">
                            7. ระยะเวลาดำเนินการ <u class="dotted">{{ $buy->buy_period }}</u> (นับจากวันรับใบสั่งซื้อ/จ้าง/เช่า)
                        </p>
                        @endif

                        <p class="m-t-10 m-b-5 lead">
                            8. แหล่งจัดหา <u class="dotted"> {{ $buy->buy_shop }} </u>
                            @if ($buy->buy_shopaddr == NULL)
                            @else
                                <br>&nbsp;&nbsp;&nbsp;
                                ที่อยู่ <u class="dotted"> {{ $buy->buy_shopaddr }} </u>
                            @endif
                        </p>

                        @if ($buy->buy_percheck2 == NULL)
                        <p class="m-t-b-10 lead">
                            9. ขอแต่งตั้งบุคคลดังต่อไปนี้
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            9.1 <u class="dotted">{{ $buy->buy_percheck1 }}</u> เป็นผู้ตรวจรับพัสดุ  (กรณีวงเงินไม่เกิน 100,000 บาท ผู้ตรวจรับพัสดุ 1 คน)
                            อำนาจและหน้าที่ ตรวจรับพัสดุ ให้ดำเนินการตามระเบียบกระทรวงการคลังฯ ข้อ 175
                            โดยให้คณะกรรมการดำเนินการให้แล้วเสร็จภายใน 3 วันทำการ
                            นับตั้งแต่วันที่ผู้ขายหรือผู้รับจ้างนำพัสดุมาส่งมอบให้กับสำนักงาน
                        </p>
                        @else
                        <p class="m-t-0 m-b-0 lead">
                            <div class="form-group m-t-b-0 row lead">
                                <label class="col-sm-6 col-form-label m-t-b-0">
                                    9. ขอแต่งตั้งบุคคลดังต่อไปนี้
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9.1 <u class="dotted">{{ $buy->buy_percheck1 }}</u>
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9.2 <u class="dotted">{{ $buy->buy_percheck2 }}</u>
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9.3 <u class="dotted">{{ $buy->buy_percheck3 }}</u>
                                </label>
                                <label class="col-sm-6 col-form-label"><br>เป็นประธานกรรมการ<br>เป็นกรรมการ<br>เป็นกรรมการ</label>
                            </div>
                            <p class="m-t-0 m-b-0 lead">
                            ผู้ตรวจรับพัสดุ  (กรณีวงเงินไม่เกิน 100,000 บาท ผู้ตรวจรับพัสดุ 1 คน)
                            อำนาจและหน้าที่ ตรวจรับพัสดุ ให้ดำเนินการตามระเบียบกระทรวงการคลังฯ ข้อ 175
                            โดยให้คณะกรรมการดำเนินการให้แล้วเสร็จภายใน 3 วันทำการ
                            นับตั้งแต่วันที่ผู้ขายหรือผู้รับจ้างนำพัสดุมาส่งมอบให้กับสำนักงาน
                            </p>
                        </p>
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <p> </p>
                            </div>
                            <div class="col-md-6">
                                <p class="m-t-30 m-b-0 text-center lead">
                                    ลงชื่อ
                                    <u class="dotted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                                    เจ้าหน้าที่</p>
                                <p class="m-t-0 m-b-10 text-center lead">({{ $buy->buy_auth }}) &nbsp;&nbsp;&nbsp;</p>
                            </div>
                        </div>

                        <p class="m-t-b-10 lead">
                            ความเห็นของหัวหน้าเจ้าหน้าที่
                        </p>
                        <p class="m-t-b-10 lead">
                            <u class="dotted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                        </p>
                        <p class="m-t-b-10 lead">
                            <u class="dotted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                        </p>

                        <div class="row">
                            <div class="col-md-12">
                                <p class="m-t-30 m-b-0 text-center lead">
                                    ลงชื่อ
                                    <u class="dotted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                                    หัวหน้าเจ้าหน้าที่</p>
                                <p class="m-t-0 m-b-10 text-center lead">({{ $buy->buy_headauth }}) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            </div>
                        </div>

                        <p class="m-t-b-10 lead">
                            <u><strong>คำสั่งเลขาธิการสำนักงานหลักประกันสุขภาพแห่งชาติ</strong></u>
                        </p>
                        <p class="m-t-10 m-b-50 lead">
                            <i class="ti-layout-width-full mr-2"></i>อนุมัติ &nbsp;&nbsp;&nbsp;&nbsp; <i class="ti-layout-width-full mr-2"></i>ไม่อนุมัติ
                        </p>

                        @if ($buy->buy_percheck2 == NULL)
                        <p class="m-t-b-50">
                            <br>&nbsp;
                        </p>
                        @else
                        @endif

                        @if ($buy->buy_perspec2 == NULL)
                        <p class="m-t-b-50">
                            <br>&nbsp;
                        </p>
                        <p class="m-t-b-50">
                            <br>&nbsp;
                        </p>
                        @else
                        <p class="m-t-b-50">
                            <br>&nbsp;
                        </p>
                        @endif
                        <p class="m-t-b-50">
                            <br>&nbsp;
                        </p>
                        <p class="m-t-b-50">
                            <br>&nbsp;
                        </p>
                        <p class="m-t-b-50">
                            <br>&nbsp;
                        </p>

                        <div class="row">
                            <div class="col-md-6"><br>FM-401 01-013</div>
                            <div class="col-md-6 text-right">ฉบับที่ 05 <br>วันที่ 24 ธันวาคม 2561</div>
                        </div>


                        {{-- หน้าต่อรายการที่ 5 --}}
                        @if ($buyitemcount > 4)
                        <p class="m-t-b-0" style='page-break-after:always'></p>
                        {{-- เส้นแบ่งขึ้นหน้าใหม่ --}}

                        <p class="m-t-10 m-b-0 lead">
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            2.1 รายละเอียดการ{{ $buy_type_name }} (ใบต่อ)
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td style="border: 2px solid black" class="text-center lead">ที่</td>
                                        <td style="border: 2px solid black" class="text-center lead">รายการ</td>
                                        <td style="border: 2px solid black" class="text-right lead">จำนวน</td>
                                        <td style="border: 2px solid black" class="text-right lead">ราคา/หน่วย</td>
                                        <td style="border: 2px solid black" class="text-right lead">ราคากลาง</td>
                                        <td style="border: 2px solid black" class="text-center lead">จำนวนเงิน<br>(รวมภาษีมูลค่าเพิ่ม)</td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td style="border: 2px solid black" class="align-top text-center lead"> </td>
                                        <td style="border: 2px solid black" class="align-top text-center lead"><b>ยอดยกมา </b></td>
                                        <td style="border: 2px solid black" class="align-top text-center lead"> </td>
                                        <td style="border: 2px solid black" class="align-top text-center lead"> </td>
                                        <td style="border: 2px solid black" class="align-top text-center lead"> </td>
                                        <td style="border: 2px solid black" class="text-right lead"><b>{{ number_format($buysumprice,2) }}</b></td>
                                    </tr>
                                    @foreach ($buyitem2 as $data)
                                    <tr class="text-right">
                                        <td style="border: 2px solid black" class="align-top text-center lead">{{ $data->item_no }}</td>
                                        <td style="border: 2px solid black" class="align-top text-left lead">{{ $data->item_name }}</td>
                                        <td style="border: 2px solid black" class="lead">{{ number_format($data->item_qty,2) }}</td>
                                        <td style="border: 2px solid black" class="lead">{{ number_format($data->item_unit_price,2) }}/{{ $data->item_unit }}</td>
                                        <td style="border: 2px solid black" class="lead">{{ number_format($data->item_std_price,2) }}</td>
                                        <td style="border: 2px solid black" class="lead">{{ number_format(($data->item_unit_price * $data->item_qty),2) }}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td class="text-right lead" colspan="5"><b>รวมเงิน ({{ baht_text($buysumprice2) }}) </b></td>
                                        <td style="border: 2px solid black" class="text-right lead"><b>{{ number_format($buysumprice2,2) }}</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <p> </p>
                            </div>
                            <div class="col-md-6">
                                <p class="m-t-30 m-b-0 text-center lead">
                                    ลงชื่อ
                                    <u class="dotted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
                                    เจ้าหน้าที่</p>
                                <p class="m-t-0 m-b-30 text-center lead">({{ $buy->buy_auth }}) &nbsp;&nbsp;&nbsp;</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6"><br>FM-401 01-013</div>
                            <div class="col-md-6 text-right">ฉบับที่ 05 <br>วันที่ 24 ธันวาคม 2561</div>
                        </div>
                        @endif

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
