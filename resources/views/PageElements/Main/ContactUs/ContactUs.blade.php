@extends('PageElements.Main.InnerPagesLayout')
@section('PageTitle', 'تماس با ما')
@section('content')
    <section class="with_right_sidebar">
        <div class="container">
            <div class="row">
                <div id="leftcol" class="col-sm-12 col-md-12">


                    <section>
                        <div class="row">
                            <div class="office_address col-sm-6 col-md-4">
                                <div class="team_member"><img src="{{asset('Main/images/Etminan about-us Logo.jpg')}}"
                                                              alt="logo">
                                    <h5>{{$CompanyName}}</h5>
                                    {{--                                    <small>دانلود منابع طراحی وب و گرافیک</small><br>--}}
                                    <address>
                                        {{$Address}}
                                    </address>
                                    <abbr title="Phone">{{$PhoneTitle}}:</abbr> (98) 41-34328223<br>
                                    <abbr title="Phone">{{$EmailTitle}}:</abbr> <a
                                        href="mailto:#">info@hajabdollah.com</a>
                                </div>
                            </div>
                            <div class="contact_form col-sm-6 col-md-8">
                                <form name="contact_form" id="contact_form" method="post">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <label>نام</label>
                                            <input name="name" id="name" class="form-control" type="text" value="">
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <label>ایمیل</label>
                                            <input name="email" id="email" class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <label>موضوع</label>
                                            <input name="subject" id="subject" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <label>پیام</label>
                                            <textarea name="message" id="message" rows="8"
                                                      class="form-control"></textarea>
                                        </div>
                                        <div class="col-sm-12 col-md-12"><br/>
                                            <a id="submit_btn" class="btn btn-primary" name="submit">ثبت پیام</a> <span
                                                id="notice" class="alert alert-warning alert-dismissable hidden"
                                                style="margin-left:20px;"></span></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>


                </div>

            </div>
        </div>
    </section>
@endsection
