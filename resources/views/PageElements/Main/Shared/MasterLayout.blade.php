<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('PageElements.Main.Shared.CoreCSS')

    <title>{{config('app.name')}}</title>
</head>

<body>

{{--<li class="nav-item">--}}
{{--    <select id="language" class="form-control rounded-0" name="language">--}}
{{--        @foreach(array_values(config('locale.languages')) as $language)--}}
{{--            <option value="{{$language[0]}}"--}}
{{--                    @if ($language[0]===App::getLocale()) selected @endif>{{ $language[3]}}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}
{{--</li>--}}


{{--@php--}}
{{--    echo $locale;--}}
{{--    echo $content;--}}
{{--@endphp--}}


<div id="fh5co-hero-carousel" class="carousel slide header" data-ride="carousel">
    @include('PageElements.Main.Shared.MainNav')
    @section('slier')
    @show
</div>

@section('content')
@show

<div class="container-fluid copy">
    <div class="col-lg-12">
        <p>All Rights Reserved. <i class="fa fa-copyright"></i>
        </p>
    </div>
</div>

@include('PageElements.Main.Shared.CoreScripts')
</body>

</html>