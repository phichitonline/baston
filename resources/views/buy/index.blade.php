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
                    <table id="example1" class="table table-small">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>วันที่</th>
                            <th>เลขที่</th>
                            <th>เรื่อง</th>
                            <th class="text-right">งบประมาณ</th>
                            <th>ผู้ขอ</th>
                            <th class="text-center">สถานะ</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($buy as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ thaidate('j F Y',$data->buy_date) }}</td>
                            <td>{{ $data->buy_number }}</td>
                            <td>{{ $data->buy_header }}</td>
                            <td class="text-right">{{ number_format($data->buy_budget,2) }}</td>
                            <td>{{ $data->buy_request }}</td>

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
                                            <a href="{{ route('buy.show', $data->id) }}" class="dropdown-item">พิมพ์ขออนุมัติ</a>
                                        </div>
                                    </li>
                                @else
                                <li class="nav-item dropdown">
                                    <a href="#" class="badge bg-danger-bright text-danger nav-link dropdown-toggle" data-toggle="dropdown">
                                        รอตรวจรับ
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <form action="{{ route('buy.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('buy.edit', $data->id) }}" class="dropdown-item">แก้ไข</a>
                                            <a href="{{ route('buy.show', $data->id) }}" class="dropdown-item">พิมพ์ขออนุมัติ</a>
                                            <a href="{{ route('check.create') }}/?bid=1" class="dropdown-item text-primary">ตรวจรับ</a>
                                            <div class="dropdown-divider"></div>
                                            <button class="dropdown-item text-danger" onClick="return confirm('ยืนยันการลบรายการนี้');">ยกเลิก</button>
                                        </form>
                                    </div>
                                </li>
                                @endif

                                {{-- <form action="{{ route('record.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('record.edit', $data->id) }}" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="แก้ไข">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <button class="btn btn-outline-danger btn-sm btn-floating" data-toggle="tooltip" title="ลบ" onClick="return confirm('ยืนยันการลบรายการนี้');">
                                        <i class="ti-trash"></i>
                                    </button>
                                    <a href="{{ route('buy.create') }}/?did={{ $data->id }}&bid={{ $data->buy_number }}&bheader={{ $data->buy_header }}&brequest={{ $data->buy_request }}&bdate={{ $data->buy_date }}&bbudget={{ $data->buy_budget }}" class="btn btn-outline-success btn-sm btn-floating" data-toggle="tooltip" title="ทำบันทึกขออนุมัติ">
                                        <i class="ti-book"></i>
                                    </a>
                                </form> --}}
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
