@extends('layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">
@endsection

@section('content')
    <div class="page-header">
        <div class="page-title">
            <h3>Apex Chart</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p class="lead">
                ApexCharts is an open-source modern charting library that helps developers to create
                beautiful and interactive visualizations for web pages. <a
                    href="https://apexcharts.com/" class="link-1" target="_blank">Plugin page</a>.
            </p>
            <div data-label="INCLUDED FILES" class="demo-code-preview">
                <pre><code class="language-html">&lt;script src="vendors/charts/apex/apexcharts.min.js"&gt;&lt;/script&gt;</code></pre>
            </div>
            <p>We prepared demo samples. You don't have to use them. You can create your own demos.</p>
            <div class="demo-code-preview">
                <pre><code class="language-html">&lt;script src="assets/js/examples/charts/apex.js"&gt;&lt;/script&gt;</code></pre>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="apex_chart_one" style="height: 300px"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="apex_chart_two" style="height: 300px"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="apex_chart_three" style="height: 300px"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="apex_chart_four" style="height: 300px"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="apex_chart_five" style="height: 300px"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="apex_chart_six" style="height: 300px"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="apex_chart_eight" style="height: 300px"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="apex_chart_seven" style="height: 300px"></div>
                        </div>
                        <div class="col-md-6">
                            <div id="apex_chart_nine" style="height: 300px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Apex Chart -->
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="{{ url('vendors/charts/apex/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/js/examples/charts/apex.js') }}"></script>

    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>
@endsection
