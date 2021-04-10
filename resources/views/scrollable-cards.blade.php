@extends('layouts.app')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header">
        <div class="page-title">
            <h3>Scrollable Cards</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border mb-0 shadow-none">
                        <div class="card-body">
                            <div class="card-scroll">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi
                                    architecto beatae commodi
                                    deserunt dolores eaque earum, esse et eveniet excepturi id labore
                                    magni maxime modi nemo
                                    nesciunt nobis non, nostrum perferendis placeat praesentium repellat
                                    rerum voluptatum!
                                    Eos id nisi obcaecati reprehenderit. Assumenda culpa illum quis
                                    sapiente temporibus. Ad
                                    blanditiis cum ducimus fugiat ipsa ipsam magnam maiores maxime nemo
                                    officia quas qui
                                    quibusdam unde veritatis voluptas, voluptates voluptatum? Ab ad,
                                    asperiores distinctio
                                    dolorem eaque exercitationem facilis ipsa ipsum natus, neque nihil
                                    perferendis,
                                    praesentium quisquam quod suscipit vitae voluptas. Accusamus
                                    deserunt dolore eos
                                    maiores, nisi porro repellendus velit veniam veritatis, vero
                                    voluptas. Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Animi architecto beatae
                                    commodi deserunt dolores
                                    eaque earum, esse et eveniet excepturi id labore magni maxime modi
                                    nemo nesciunt nobis
                                    non, nostrum perferendis placeat praesentium repellat rerum
                                    voluptatum! Eos id nisi
                                    obcaecati reprehenderit. Assumenda culpa illum quis sapiente
                                    temporibus. Ad blanditiis
                                    cum ducimus fugiat ipsa ipsam magnam maiores maxime nemo officia
                                    quas qui quibusdam unde
                                    veritatis voluptas, voluptates voluptatum? Ab ad, asperiores
                                    distinctio dolorem eaque
                                    exercitationem facilis ipsa ipsum natus, neque nihil perferendis,
                                    praesentium quisquam
                                    quod suscipit vitae voluptas. Accusamus deserunt dolore eos maiores,
                                    nisi porro
                                    repellendus velit veniam veritatis, vero voluptas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-label="CODE EXAMPLE" class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="card"&gt;
  &lt;div class="card-body"&gt;
    &lt;div class="card-scroll"&gt;
      ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card border mb-0 shadow-none">
                        <div class="card-header">Card Header</div>
                        <div class="card-body">
                            <div class="card-scroll">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi
                                    architecto beatae commodi
                                    deserunt dolores eaque earum, esse et eveniet excepturi id labore
                                    magni maxime modi nemo
                                    nesciunt nobis non, nostrum perferendis placeat praesentium repellat
                                    rerum voluptatum!
                                    Eos id nisi obcaecati reprehenderit. Assumenda culpa illum quis
                                    sapiente temporibus. Ad
                                    blanditiis cum ducimus fugiat ipsa ipsam magnam maiores maxime nemo
                                    officia quas qui
                                    quibusdam unde veritatis voluptas, voluptates voluptatum? Ab ad,
                                    asperiores distinctio
                                    dolorem eaque exercitationem facilis ipsa ipsum natus, neque nihil
                                    perferendis,
                                    praesentium quisquam quod suscipit vitae voluptas. Accusamus
                                    deserunt dolore eos
                                    maiores, nisi porro repellendus velit veniam veritatis, vero
                                    voluptas. Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Animi architecto beatae
                                    commodi deserunt dolores
                                    eaque earum, esse et eveniet excepturi id labore magni maxime modi
                                    nemo nesciunt nobis
                                    non, nostrum perferendis placeat praesentium repellat rerum
                                    voluptatum! Eos id nisi
                                    obcaecati reprehenderit. Assumenda culpa illum quis sapiente
                                    temporibus. Ad blanditiis
                                    cum ducimus fugiat ipsa ipsam magnam maiores maxime nemo officia
                                    quas qui quibusdam unde
                                    veritatis voluptas, voluptates voluptatum? Ab ad, asperiores
                                    distinctio dolorem eaque
                                    exercitationem facilis ipsa ipsum natus, neque nihil perferendis,
                                    praesentium quisquam
                                    quod suscipit vitae voluptas. Accusamus deserunt dolore eos maiores,
                                    nisi porro
                                    repellendus velit veniam veritatis, vero voluptas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-label="CODE EXAMPLE" class="demo-code-preview">
                                <pre><code class="language-html">&lt;div class="card"&gt;
  &lt;div class="card-header"&gt;Card Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;div class="card-scroll"&gt;
      ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card border mb-0 shadow-none">
                        <div class="card-header">Card Header</div>
                        <div class="card-body">
                            <div class="card-scroll">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi
                                    architecto beatae commodi
                                    deserunt dolores eaque earum, esse et eveniet excepturi id labore
                                    magni maxime modi nemo
                                    nesciunt nobis non, nostrum perferendis placeat praesentium repellat
                                    rerum voluptatum!
                                    Eos id nisi obcaecati reprehenderit. Assumenda culpa illum quis
                                    sapiente temporibus. Ad
                                    blanditiis cum ducimus fugiat ipsa ipsam magnam maiores maxime nemo
                                    officia quas qui
                                    quibusdam unde veritatis voluptas, voluptates voluptatum? Ab ad,
                                    asperiores distinctio
                                    dolorem eaque exercitationem facilis ipsa ipsum natus, neque nihil
                                    perferendis,
                                    praesentium quisquam quod suscipit vitae voluptas. Accusamus
                                    deserunt dolore eos
                                    maiores, nisi porro repellendus velit veniam veritatis, vero
                                    voluptas. Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Animi architecto beatae
                                    commodi deserunt dolores
                                    eaque earum, esse et eveniet excepturi id labore magni maxime modi
                                    nemo nesciunt nobis
                                    non, nostrum perferendis placeat praesentium repellat rerum
                                    voluptatum! Eos id nisi
                                    obcaecati reprehenderit. Assumenda culpa illum quis sapiente
                                    temporibus. Ad blanditiis
                                    cum ducimus fugiat ipsa ipsam magnam maiores maxime nemo officia
                                    quas qui quibusdam unde
                                    veritatis voluptas, voluptates voluptatum? Ab ad, asperiores
                                    distinctio dolorem eaque
                                    exercitationem facilis ipsa ipsum natus, neque nihil perferendis,
                                    praesentium quisquam
                                    quod suscipit vitae voluptas. Accusamus deserunt dolore eos maiores,
                                    nisi porro
                                    repellendus velit veniam veritatis, vero voluptas.</p>
                            </div>
                        </div>
                        <div class="card-footer">Card Footer</div>
                    </div>
                </div>
            </div>
            <div data-label="CODE EXAMPLE" class="demo-code-preview mb-3">
                                <pre><code class="language-html">&lt;div class="card"&gt;
  &lt;div class="card-header"&gt;Card Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;div class="card-scroll"&gt;
      ...
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card-footer"&gt;Card Footer&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>
@endsection
