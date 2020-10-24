{{--@php--}}
{{--    $MenuContents = collect(AllContentOfLocale())->where('section', 'menu')->all();--}}

{{--NavPicker();--}}
{{--@endphp--}}
@php
    $MainNav=NavPicker();
    $MenuContents=collect($IndexContents)->where('section','menu');
@endphp
@dd($MenuContents)
<div id="mainmenu" class="menu_container">
    <label class="mobile_collapser">منو</label>
    <!-- Mobile menu title -->
    <ul>
        {{--        <li><a href="/">صفحه اصلی</a></li>--}}
        @foreach($MainNav as $main_menu)
            <li @if($main_menu->sub_navs->count()) class="has-dropdown" @endif>
                <a href="#">{{$main_menu->id}}</a>
                @if ($main_menu->sub_navs->count())
                    <div class="dmui_dropdown_block">
                        <div class="dmui-container">
                            <div class="dmui-col span1">
                                <div class="dmui-container">
                                    <ul class="dmui-submenu">
                                        @foreach($main_menu->sub_navs as $sub_menu)
                                            <li><a href="#">{{$sub_menu->id}}</a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </li>
        @endforeach
        {{--        <li><a href="#">زبان ها</a>--}}
        {{--            <div class="dmui_dropdown_block">--}}
        {{--                <div class="dmui-container">--}}
        {{--                    <div class="dmui-col span1">--}}
        {{--                        <div class="dmui-container">--}}
        {{--                            <ul class="dmui-submenu">--}}
        {{--                                <li><a href="{{route('locale',['fa'])}}"> <img src="{{asset('Main/images/IranFlag.png')}}" alt=""> فارسی / Persian</a></li>--}}
        {{--                                <li><a href="{{route('locale',['en'])}}"><img src="{{asset('Main/images/UsaFlag.png')}}" alt=""> انگلیسی / English</a></li>--}}
        {{--                                <li><a href="{{route('locale',['ru'])}}"><img src="{{asset('Main/images/RussiaFlag.png')}}" alt=""> روسی / Russian</a></li>--}}
        {{--                                <li><a href="{{route('locale',['ar'])}}"><img src="{{asset('Main/images/ArabiaFlag.png')}}" alt=""> عربی / Arabic</a></li>--}}
        {{--                            </ul>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </li>--}}
    </ul>
</div>
