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

    @if ($message = Session::get('success'))
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <i class="ti-check mr-2"></i> {{ $message }}
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-0">รายการ{{ $pagename }} ที่ยังไม่ได้ดำเนินการ</h6>
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

                        @foreach ($record as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ thaidate('j F Y',$data->buy_date) }}</td>
                            <td>{{ $data->buy_number }}</td>
                            <td>{{ $data->buy_header }}</td>
                            <td>{{ $data->buy_request }}</td>

                            <td class="text-right">
                                <form action="{{ route('record.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('record.edit', $data->id) }}" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="แก้ไข">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <button class="btn btn-outline-danger btn-sm btn-floating ml-2" data-toggle="tooltip" title="ลบ" onClick="return confirm('ยืนยันการลบรายการนี้');">
                                        <i class="ti-trash"></i>
                                    </button>
                                    <a href="{{ route('buy.create') }}" class="btn btn-outline-success btn-sm btn-floating" data-toggle="tooltip" title="ทำบันทึกขออนุมัติ">
                                        <i class="ti-check"></i>
                                    </a>
                                </form>
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
