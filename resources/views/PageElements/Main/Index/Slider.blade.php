@php
   $Slider= collect($IndexContents)
                ->whereIn('section', array('slider'))
                ->all();

@endphp

<section id="slider_wrapper" class="slider_wrapper full_page_photo">
    <div id="main_flexslider" class="flexslider">
        <ul class="slides">

            <li class="item" style="background-image: url({{asset('Main/images/Sliders/1.jpg')}})">
                <div class="container">
                    <div class="carousel-caption animated bounceInUp">
                        <h1>

                        </h1>
                    </div>
                </div>
            </li>

            <li class="item" style="background-image: url({{asset('Main/images/Sliders/2.jpg')}})">
                <div class="container">
                    <div class="carousel-caption animated bounceInUp">

                        <h1>

                        </h1>
                    </div>
                </div>
            </li>

            <li class="item" style="background-image: url({{asset('Main/images/Sliders/3.jpg')}})">
                <div class="container">
                    <div class="carousel-caption animated bounceInUp">
                        <h1>

                        </h1>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</section>
