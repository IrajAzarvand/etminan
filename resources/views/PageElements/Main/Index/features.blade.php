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
            $features=collect($IndexContents)->where('section','feature');
            @endphp

            @foreach ($features as $feature)
                <div class="feature_teaser col-sm-4 col-md-4"><img alt="responsive"
                        src="{{ asset('Main/images/phone-v2.png') }}">
                    <h3>{{ $feature['element_title'] }}</h3>
                    <p>{{ $feature['element_content'] }}</p>
                </div>
            @endforeach

        </div>
    </div>
</section>
