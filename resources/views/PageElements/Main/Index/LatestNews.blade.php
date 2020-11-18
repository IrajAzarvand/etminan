@php
$LatestNews=collect($IndexContents)->where('section','latestnews');
$NewsTitle=$LatestNews->where('element_title','news_title')->pluck('element_content');
@endphp

<section class="twitter_feed_wrapper skincolored_section">
    <div class="container">
        <div class="row">
            <div class="twitter_feed_icon wow fadeInDown"><a href="https://twitter.com/PlethoraThemes"><i class="fa fa-star-o"></i></a></div>
            <div id="twitter_flexslider" class="flexslider">
                <ul class="slides">
                    @foreach ($NewsTitle as $key=>$news)
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
