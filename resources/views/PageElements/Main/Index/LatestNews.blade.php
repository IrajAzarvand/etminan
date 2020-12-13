<section class="twitter_feed_wrapper skincolored_section" style="background-image:url({{ asset('storage/Main/Shared/GPlay.svg') }})">
    <div class="container">
        <div class="row">
            <div class="twitter_feed_icon wow fadeInDown"><a href="#"><i class="fa fa-star-o"></i></a></div>
            <div id="twitter_flexslider" class="flexslider">
                <ul class="slides">
                    @foreach ($LatestNewsTitle as $key=>$news)
                    <li class="item">
                        <blockquote>
                            <p> {{$news}}</p>
                        </blockquote>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
