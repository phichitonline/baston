@extends('layouts.app')

@section('head')
    <!-- Dropzone -->
    <link rel="stylesheet" href="{{ url('vendors/dropzone/dropzone.css') }}" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header">
        <div class="page-title">
            <h3>File Upload</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <p class="lead">
                DropzoneJS is an open source library that provides drag’n’drop file uploads with image
                previews.
                <a href="https://www.dropzonejs.com/" class="link-1" target="_blank">Plugin page</a>.
            </p>
            <div data-label="INCLUDED FILES" class="demo-code-preview">
                                <pre><code class="language-html">&lt;!-- Css --&gt;
&lt;link rel="stylesheet" href="vendors/dropzone/dropzone.css" type="text/css"&gt;

&lt;!-- Javascript --&gt;
&lt;script src="vendors/dropzone/dropzone.js'"&gt;&lt;/script&gt;</code></pre>
            </div>

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Basic Demo</h6>
                    <p>The typical way of using dropzone is by creating a form element with the class</p>
                    <form action="/file-upload" class="dropzone"></form>
                    <div data-label="CODE EXAMPLE" class="demo-code-preview">
                                <pre><code class="language-html">&lt;form action="/file-upload" class="dropzone"&gt;
  ...
&lt;/form&gt;</code></pre>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Dropzone -->
    <script src="{{ url('vendors/dropzone/dropzone.js') }}"></script>

    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>
@endsection
