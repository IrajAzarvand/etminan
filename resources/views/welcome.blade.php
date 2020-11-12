@extends('PageElements.Main.MasterLayout')
@section('PageTitle', 'صفحه اصلی')
@section('Slider')
@include('PageElements.Main.Index.Slider')
@endsection

@section('content')
@include('PageElements.Main.Index.NewProducts')
@include('PageElements.Main.Index.Catalogues')
@include('PageElements.Main.Index.CallToAction')
@include('PageElements.Main.Index.TwitterFeed')
@endsection
