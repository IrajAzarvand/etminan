@php
    $MenuContents = collect(AllContentOfLocale())->where('section', 'menu')->all();
dd($MenuContents);
@endphp
<div id="mainmenu" class="menu_container">
    <label class="mobile_collapser">منو</label>
    <!-- Mobile menu title -->
    <ul>
        {{--        <li><a href="/">صفحه اصلی</a></li>--}}
        @foreach($MenuContents as $Item)
            <li @if($Item['element_title']) class="has-dropdown" @endif>
                <a href="#">{{$Item['element_content']}}</a>
                @if ($Item['element_title'])
                    <div class="dmui_dropdown_block">
                        <div class="dmui-container">
                            <div class="dmui-col span1">
                                <div class="dmui-container">
                                    <ul class="dmui-submenu">
                                        <li><a href="#">{{$Item['element_content']}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </li>
        @endforeach
        <li><a href="#">زبان ها</a>
            <div class="dmui_dropdown_block">
                <div class="dmui-container">
                    <div class="dmui-col span1">
                        <div class="dmui-container">
                            <ul class="dmui-submenu">
                                <li><a href="{{route('locale',['fa'])}}"> <img src="{{asset('Main/images/IranFlag.png')}}" alt=""> فارسی / Persian</a></li>
                                <li><a href="{{route('locale',['en'])}}"><img src="{{asset('Main/images/UsaFlag.png')}}" alt=""> انگلیسی / English</a></li>
                                <li><a href="{{route('locale',['ru'])}}"><img src="{{asset('Main/images/RussiaFlag.png')}}" alt=""> روسی / Russian</a></li>
                                <li><a href="{{route('locale',['ar'])}}"><img src="{{asset('Main/images/ArabiaFlag.png')}}" alt=""> عربی / Arabic</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
