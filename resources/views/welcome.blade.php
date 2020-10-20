@extends('PageElements.Main.MasterLayout')
@section('PageTitle', 'صفحه اصلی')
@section('Slider')
    @include('PageElements.Main.Index.Slider')
@endsection

@section('content')

    @include('PageElements.Main.Index.features')
    @include('PageElements.Main.Index.CallToAction')
    @include('PageElements.Main.Index.Portfolio')
    @include('PageElements.Main.Index.TwitterFeed')
@endsection