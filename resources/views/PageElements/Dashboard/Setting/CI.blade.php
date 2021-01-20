@extends('PageElements.Dashboard.Layout')
@section('PageTitle', 'تنظیمات معرفی شرکت')
@section('ContentHeader', 'معرفی شرکت')
@section('content')

    <div class="col-md-12">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    افزودن متن جدید
                </h3>

            </div>
            <!-- /.card-header -->
            <form class="card-body" action="{{ route('CI.store') }}" method="post">
            @csrf
            <!-- /error box -->
                <div class="mb3">


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>
                <!-- /.error box -->

                <div class="row">
                    <div class="col-12">
                        <!-- Custom Tabs -->
                        <div class="card">
                            <label>متن</label>

                            <div class="card-header d-flex p-0">
                                <ul class="nav nav-pills ml-auto p-2">
                                    @foreach (Locales() as $item)
                                        <li class="nav-item"><a class="nav-link @if ($loop->first) active @endif"
                                                                href="#CI_{{$item['locale']}}"
                                                                data-toggle="tab">{{$item['name']}}</a></li>
                                    @endforeach
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    @foreach (Locales() as $item)
                                        <div class="tab-pane @if ($loop->first) active @endif"
                                             id="CI_{{$item['locale']}}">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="box box-info">
                                                        <div class="box-header">
                                                            <h3 class="box-title">توضیحات
                                                            </h3>
                                                        </div>
                                                        <!-- /.box-header -->
                                                        <div class="box-body pad">
                                                            <form>
                        <textarea id="editor" name="editor" rows="10"
                                  cols="80">این ویرایشگر راست چین و فارسی شده و تنظیمات آن به صورت اختصاصی تنظیم شده است...</textarea>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- /.box -->

                                                </div>
                                            </div>


{{--                                            --}}
                                            {{--                                            <div class="mb-3">--}}
                                            {{--                                                <textarea id="editor1" name="CI_{{$item['locale']}}"--}}
                                            {{--                                                          style="width: 100%" rows="10"></textarea>--}}
                                            {{--                                            </div>--}}
                                        </div>
                                    @endforeach
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- ./card -->
                    </div>
                    <!-- /.col -->
                </div>

                <button type="submit" class="btn btn-primary">ذخیره</button>
            </form>
        </div>
    </div>
    <!-- /.card -->

    <!-- / =============================================================================== -->
    <!-- /view Office list -->
    <div class="col-md-12">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    متن اضافه شده
                </h3>

            </div>
            <!-- /.card-header -->

            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover" id="ProductsTable">
                                        <tr>
                                            <th>#</th>
                                            <th>نام دفتر</th>
                                            <th>عملیات</th>
                                        </tr>
{{--                                        @foreach($OList as $key=>$OfficeList)--}}
{{--                                            <tr>--}}
{{--                                                <td>{{$key+1}}</td>--}}
{{--                                                <td>{{$OfficeList['title']}}</td>--}}
{{--                                                <td><button type="button" class="btn btn-primary"><a onclick="EditOffice({{$OfficeList['id']}})"><i class="fa fa-eye"></i></a></button> &nbsp; &nbsp; <button type="button" style="display: none" class="btn btn-danger"><a onclick="deleteOffice({{$OfficeList['id']}})"><i class="fa fa-trash-o"></i></a></button> </td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div><!-- /.row -->
                </div>
                <!-- /.card-body -->

            </div>


        </div>
    </div>
    <!-- /.card -->




    {{-- ====================for show all products=============== --}}

    <script>
        function deleteOffice(O_Id) {
            let token = "{{ csrf_token() }}";
            $.ajax({
                type: 'DELETE',
                url: '/SO/' + O_Id,
                data: {
                    _token: token,
                    O_Id
                },
                success: function () {
                    location.reload();
                }
            });

        }
    </script>

    <script>
        function EditOffice(r) {
            $.ajax({
                type: "GET",
                url: '/SO/' + r + '/edit',

                success: function (data) {
                    //display data...
                    let SOId= (data['id']);
                    $('#SalesOfficeEditModal').find('#OfficeId').val(SOId);
                    data['contents'].forEach(element => {
                        $('#SalesOfficeEditModal').find('#'+element['locale']+'edit').text(element['element_content']);
                    });

                    $("#SalesOfficeEditModal-form").attr("action", "/SO/" + SOId);
                    $('#SalesOfficeEditModal').modal('show');
                }
            });
        }
    </script>
    @include('PageElements.Dashboard.Setting.ModalEditSalesOffice')
@endsection
