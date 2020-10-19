@extends('PageElements.Main.Shared.MasterLayout')

@section('slier')
    @include('PageElements.Main.Index.Slider')
@endsection

@section('content')
    @include('PageElements.Main.Index.AboutUs')

    @include('PageElements.Main.Index.Products')

    @include('PageElements.Main.Index.OurNews')

    @include('PageElements.Main.Index.ContactUs')

@endsection