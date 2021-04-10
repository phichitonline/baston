@extends('layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header">
        <div class="page-title">
            <h3>Divider</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Default</h6>
                    <p>You can add a line to divide your section using <code>&lt;hr&gt;</code></p>
                    <div class="bd-example">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt facilis odio quam repellat ut! Blanditiis culpa eaque esse exercitationem hic, illo iusto magnam, mollitia nesciunt optio possimus quibusdam rem vitae.</p>
                        <hr>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, inventore?</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Text</h6>
                    <div class="bd-example">
                        <div class="divider-text mb-3">
                            <span>Divider Text</span>
                        </div>
                        <div class="divider-text divider-center mb-3">
                            <span>Divider Text</span>
                        </div>
                        <div class="divider-text divider-right">
                            <span>Divider Text</span>
                        </div>
                    </div>
                    <div data-label="Html" class="demo-code-preview mt-4">
                                <pre><code class="language-html">&lt;div class="divider-text"&gt;
    &lt;span&gt;Divider Text&lt;/span&gt;
&lt;/div&gt;
&lt;div class="divider-text divider-center"&gt;
    &lt;span&gt;Divider Text&lt;/span&gt;
&lt;/div&gt;
&lt;div class="divider-text divider-right"&gt;
    &lt;span&gt;Divider Text&lt;/span&gt;
&lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Colors</h6>
                    <div class="bd-example">
                        <div class="divider-text mb-3">
                            <span>Divider Default</span>
                        </div>
                        <div class="divider-text divider-primary mb-3">
                            <span>Divider Primary</span>
                        </div>
                        <div class="divider-text divider-secondary mb-3">
                            <span>Divider Secondary</span>
                        </div>
                        <div class="divider-text divider-success mb-3">
                            <span>Divider Success</span>
                        </div>
                        <div class="divider-text divider-info mb-3">
                            <span>Divider Info</span>
                        </div>
                        <div class="divider-text divider-danger mb-3">
                            <span>Divider Danger</span>
                        </div>
                        <div class="divider-text divider-warning">
                            <span>Divider Warning</span>
                        </div>
                    </div>
                    <div data-label="Html" class="demo-code-preview mt-4">
                                <pre><code class="language-html">&lt;div class="divider-text mb-3"&gt;
    &lt;span&gt;Divider Default&lt;/span&gt;
&lt;/div&gt;
&lt;div class="divider-text divider-primary mb-3"&gt;
    &lt;span&gt;Divider Primary&lt;/span&gt;
&lt;/div&gt;
&lt;div class="divider-text divider-secondary mb-3"&gt;
    &lt;span&gt;Divider Secondary&lt;/span&gt;
&lt;/div&gt;
&lt;div class="divider-text divider-success mb-3"&gt;
    &lt;span&gt;Divider Success&lt;/span&gt;
&lt;/div&gt;
&lt;div class="divider-text divider-info mb-3"&gt;
    &lt;span&gt;Divider Info&lt;/span&gt;
&lt;/div&gt;
&lt;div class="divider-text divider-danger mb-3"&gt;
    &lt;span&gt;Divider Danger&lt;/span&gt;
&lt;/div&gt;
&lt;div class="divider-text divider-warning"&gt;
    &lt;span&gt;Divider Warning&lt;/span&gt;
&lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>
@endsection
