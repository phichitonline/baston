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
            <a href="{{ route('director.create') }}" class="btn btn-outline-primary">
                <i class="ti-plus mr-2"></i> เพิ่มกรรมการ
            </a>
            {{-- <div>
                <a href="{{ route('director.create') }}" class="btn btn-outline-success btn-sm btn-floating mr-2" data-toggle="tooltip" title="เพิ่มกรรมการ">
                    <i class="fa fa-plus"></i>
                </a>
            </div> --}}
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
                <div class="card-body">
                    <h6 class="card-title mb-0">รายชื่อ{{ $pagename }}</h6>
                </div>
                <div class="table-responsive">
                    <table id="example1" class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>ชื่อ</th>
                            <th>ตำแหน่ง</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($director as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->position }}</td>
                            <td class="text-right">
                                <form action="{{ route('director.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('director.edit', $data->id) }}" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="แก้ไข">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <button class="btn btn-outline-danger btn-sm btn-floating" data-toggle="tooltip" title="ลบ" onClick="return confirm('ยืนยันการลบรายการนี้');">
                                        <i class="ti-trash"></i>
                                    </button>
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
