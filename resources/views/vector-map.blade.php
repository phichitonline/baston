@extends('layouts.app')

@section('head')
    <!-- Vector map -->
    <link rel="stylesheet" href="{{ url('vendors/vmap/jqvmap.min.css') }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header">
        <div class="page-title">
            <h3>Vector Map</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Simple Map</h6>
                            <div id="vmap_world_en" style="height: 400px;"></div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Custom Region</h6>
                            <div id="vmap_usa_en" style="height: 400px;"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Vector map -->
    <script src="{{ url('vendors/vmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('vendors/vmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ url('vendors/vmap/maps/jquery.vmap.canada.js') }}"></script>
    <script src="{{ url('vendors/vmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ url('assets/js/examples/vmap.js') }}"></script>

    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>
@endsection
