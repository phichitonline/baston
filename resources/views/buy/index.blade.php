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
                    <h6 class="card-title mb-0">รายการ{{ $pagename }} ที่ดำเนินการแล้ว</h6>
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

                        <tr>
                            <td>1</td>
                            <td>{{ thaidate('j F Y') }}</td>
                            <td>สปสช.25.1/123</td>
                            <td>ขอซื้อแบบฟอร์มอนามัยแม่และเด็ก</td>
                            <td>บัญชา  คุ้มคูณ</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-outline-light btn-sm btn-floating"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">แก้ไข</button>
                                        <button class="dropdown-item" type="button">ลบ</button>
                                        <button class="dropdown-item" type="button">ทำบันทึกขออนุมัติ</button>
                                    </div>
                                </div>
                            </td>
                        </tr>

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
