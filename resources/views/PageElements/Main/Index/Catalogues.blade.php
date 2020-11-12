<section class="features_teasers_wrapper">
    <div class="container triangles-of-section">
        <div class="triangle-up-left"></div>
        <div class="square-left"></div>
        <div class="triangle-up-right"></div>
        <div class="square-right"></div>
    </div>
    <div class="container">
        <div class="row">

            @php
            $catalogues=collect($IndexContents)->where('section','catalog');
            @endphp

            @foreach ($catalogues as $catalog)
            <div class="feature_teaser col-sm-4 col-md-4"><img alt="responsive" src="{{ asset('Main/images/500.jpg') }}">
                <h3>{{ $catalog['element_title'] }}</h3>
                <p>{{ $catalog['element_content'] }}</p>
            </div>
            @endforeach

        </div>
    </div>
</section>
