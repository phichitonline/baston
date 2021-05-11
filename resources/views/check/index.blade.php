@extends('layouts.app')

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
                    <table id="example1" class="table table-small table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>วันที่อนุมัติ</th>
                            <th>เลขที่</th>
                            <th>เรื่อง</th>
                            <th class="text-right">มูลค่าตรวจรับ</th>
                            <th>วันที่ตรวจรับ</th>
                            <th class="text-center">สถานะ</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($check_list as $data)
                        <tr>
                            @php
                            if ($data->buy_type == 1) {
                                $buy_type_name = "ซื้อ";
                            } else if ($data->buy_type == 2) {
                                $buy_type_name = "จ้าง";
                            } else {
                                $buy_type_name = "เช่า";
                            }
                            if ($data->buy_budgetuse > $data->buy_budget) {
                                $budget_color = " text-danger";
                            } else if ($data->buy_budgetuse < $data->buy_budget) {
                                $budget_color = " text-success";
                            } else {
                                $budget_color = " ";
                            }
                            @endphp
                            <td>{{ $data->cid }}</td>
                            <td>{{ thaidate('j F Y',$data->buy_date) }}</td>
                            <td>{{ $data->buy_number }}</td>
                            <td>{{ $buy_type_name }}{{ $data->buy_subject }}</td>
                            <td class="text-right {{ $budget_color }}">{{ number_format($data->check_billtotal,2) }}</td>
                            <td>{{ thaidate('j F Y',$data->check_checkdate) }}</td>

                            <td>
                                @if ($data->status == 1)
                                    {{-- <a class="badge bg-success-bright text-success">
                                        ตรวจรับแล้ว
                                    </a> --}}
                                    <li class="nav-item dropdown">
                                        <a href="#" class="badge bg-success-bright text-success nav-link dropdown-toggle" data-toggle="dropdown">
                                            ตรวจรับแล้ว
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{ route('check.show', $data->cid) }}" class="dropdown-item">พิมพ์ใบตรวจรับ</a>
                                        </div>
                                    </li>
                                @else
                                <li class="nav-item dropdown">
                                    <a href="#" class="badge bg-danger-bright text-danger nav-link dropdown-toggle" data-toggle="dropdown">
                                        รอตรวจรับ
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <form action="{{ route('check.destroy', $data->cid) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('buy.edit', $data->id) }}" class="dropdown-item">แก้ไข</a>
                                            <a href="{{ route('buy.show', $data->id) }}" class="dropdown-item">พิมพ์ขออนุมัติ</a>
                                            <a href="{{ route('check.create') }}/?bid=1" class="dropdown-item text-primary">ตรวจรับ</a>
                                            {{-- <div class="dropdown-divider"></div> --}}
                                            {{-- <button class="dropdown-item text-danger" onClick="return confirm('ยืนยันการลบรายการนี้');">ยกเลิก</button> --}}
                                        </form>
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
