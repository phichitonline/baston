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
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-0">รายการ{{ $pagename }}</h6>
                </div>
                <div class="table-responsive">
                    <table id="example1" class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>วันที่</th>
                            <th>เลขที่บันทึก</th>
                            <th>เรื่อง</th>
                            <th>ผู้ขอ</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach ($requisition as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ thaidate('j F Y',$data->buy_date) }}</td>
                                <td>{{ $data->buy_number }}</td>
                                <td>{{ $data->buy_header }}</td>
                                <td>{{ $data->buy_request }}</td>

                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-outline-light btn-sm btn-floating"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{ route('requisition.edit', $data->id) }}" class="dropdown-item" type="button">แก้ไข</a>
                                            <form action="{{ route('requisition.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item" type="submit" onClick="return confirm('ยืนยันการลบรายการนี้');">ลบ</button>
                                            </form>
                                            <a href="{{ route('requisition.create') }}" class="dropdown-item" type="button">ทำใบเบิก</a>
                                        </div>
                                    </div>
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
