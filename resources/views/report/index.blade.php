@extends('layouts.app')

@section('bodyClass', 'stretch-layout small-navigation')

@section('head')
    <!-- DataTable -->
    <link rel="stylesheet" href="{{ url('vendors/dataTable/datatables.min.css') }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header">
        <div class="page-title">
            <h3>{{ $pagename }}</h3>
            <a href="{{ route('record.create') }}" class="btn btn-outline-primary">
                <i class="ti-plus mr-2"></i> เพิ่มบันทึกขอซื้อ/จ้าง
            </a>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <i class="ti-check mr-2"></i> {{ $message }}
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div><br></div>
                <div class="table-responsive">
                    <table id="example1" class="table table-small">
                        <thead>
                        <tr>
                            <th>เลขที่</th>
                            <th>วันที่ขออนุมัติ</th>
                            <th>เรื่อง</th>
                            <th>ผู้ขอ</th>
                            <th class="text-right">งบประมาณ</th>
                            <th class="text-right">มูลค่าใช้ไป</th>
                            <th>วันที่ตรวจรับ</th>
                            <th class="text-center">สถานะ</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($check_list as $data)
                        <tr>
                            @php
                            if ($data->r_type == 1) {
                                $buy_type_name = "ซื้อ";
                            } else if ($data->r_type == 2) {
                                $buy_type_name = "จ้าง";
                            } else {
                                $buy_type_name = "เช่า";
                            }
                            if ($data->buy_budgetuse > $data->r_budget) {
                                $budget_color = " text-danger";
                            } else if ($data->buy_budgetuse < $data->r_budget) {
                                $budget_color = " text-success";
                            } else {
                                $budget_color = " ";
                            }
                            @endphp
                            <td>{{ $data->r_number }}</td>
                            <td>{{ thaidate('j F Y',$data->r_date) }}</td>
                            <td>{{ $buy_type_name }}{{ $data->r_subject }}</td>
                            <td>{{ $data->buy_request }}</td>
                            <td class="text-right">{{ number_format($data->r_budget,2) }}</td>
                            <td class="text-right {{ $budget_color }}">
                                @if (isset($data->check_billtotal))
                                    {{ number_format($data->check_billtotal,2) }}
                                @endif
                            </td>
                            <td>
                                @if (isset($data->check_checkdate))
                                    {{ thaidate('j F Y',$data->check_checkdate) }}
                                @endif
                            </td>

                            <td>
                                @if ($data->status == 1)
                                    <li class="nav-item dropdown">
                                        <a href="#" class="badge bg-success-bright text-success nav-link dropdown-toggle" data-toggle="dropdown">
                                            ตรวจรับแล้ว
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{ route('buy.show', $data->b_id) }}" class="dropdown-item">พิมพ์ใบขออนุมัติ</a>
                                            <a href="{{ route('check.show', $data->c_id) }}" class="dropdown-item">พิมพ์ใบตรวจรับ</a>
                                            <a href="#" class="dropdown-item">พิมพ์รายงานผล</a>
                                            <a href="#" class="dropdown-item">พิมพ์ใบเบิก</a>
                                        </div>
                                    </li>
                                @elseif ($data->b_id == NULL)
                                    <li class="nav-item dropdown">
                                        <a href="#" class="badge bg-danger nav-link dropdown-toggle" data-toggle="dropdown">รอดำเนินการ</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{ route('record.index') }}" class="dropdown-item">ไปหน้าบันทึกขอ</a>
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item dropdown">
                                        <a href="#" class="badge bg-warning nav-link dropdown-toggle" data-toggle="dropdown">ยังไม่ได้ตรวจรับ</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{ route('buy.index') }}" class="dropdown-item">ไปหน้าแบบขออนุมัติ</a>
                                        </div>
                                    </li>
                                @endif

                            </td>

                        </tr>
                        @endforeach

                        </tfoot>
                    </table>
                </div>

            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- DataTable -->
    <script src="{{ url('vendors/dataTable/datatables.min.js') }}"></script>
    <script src="{{ url('assets/js/examples/datatable.js') }}"></script>

    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>
@endsection
