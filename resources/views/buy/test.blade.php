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
                <i class="ti-printer mr-2"></i> ทดสอบ
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <div class="invoice">

                        {{ print_r($groupitem) }}
                        <br><hr>
                        {{ print_r($order_number) }}

                        <br><hr>

                        @php
                        for($i = 0; $i < count($groupitem); $i++) {
                            echo $i+1;
                        }
                        @endphp

                        @php
                        $i = 1;
                        @endphp
                        @foreach ($groupitem as $data)

                        <li>{{ $i++ }} : {{ $data["item_name"] }} จำนวน {{ $data["item_unit_price"] }} ราคา {{ $data["item_qty"] }} บาท</li>
                        @endforeach

                        <br><hr>


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
