@extends('PageElements.Dashboard.Layout')
@section('PageTitle', 'تنظیمات دسته بندی محصولات')
@section('ContentHeader', 'دسته بندی محصولات')
@section('content')

<div class="col-md-12">
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">
                افزودن دسته بندی جدید
            </h3>

        </div>
        <!-- /.card-header -->
        <form class="card-body" action="{{ route('Category.store') }}" method="post">
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

            <div class="box-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>انتخاب نوع محصول</label>
                            <select name="ptype" class="form-control select2" style="width: 100%;">
                                @foreach ($PTypes as $item)
                                <option value="{{$item->id}}">{{$item->contents['0']->element_content}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-12">
                    <!-- Custom Tabs -->
                    <div class="card">
                        <label>دسته بندی جدید</label>

                        <div class="card-header d-flex p-0">
                            <ul class="nav nav-pills ml-auto p-2">
                                @foreach (Locales() as $item)
                                <li class="nav-item"><a class="nav-link @if ($loop->first) active @endif" href="#{{$item['locale']}}" data-toggle="tab">{{$item['name']}}</a> </li>
                                @endforeach
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                @foreach (Locales() as $item)
                                <div class="tab-pane @if ($loop->first) active @endif" id="{{$item['locale']}}">
                                    <div class="mb-3">
                                        <textarea id="editor1" name="{{$item['locale']}}" style="width: 100%"></textarea>
                                    </div>
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






<div class="col-9">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="ion ion-clipboard mr-1"></i>
                لیست دسته بندی ها بر اساس نوع محصول (فارسی - انگلیسی - روسی - عربی)
            </h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <div class="box-body">
                <div class="row">
                    <label>انتخاب نوع محصول</label>
                    <div class="col-md-3">
                        <div class="form-group">
                            <select name="ptype" class="form-control select2" style="width: 100%;" onchange="show({{$item->id}})">
                                @foreach ($PTypes as $item)
                                <option value="{{$item->id}}">{{$item->contents['0']->element_content}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-success">نمایش</button>
                    </div>

                </div>
            </div>
            <hr>

            <ul class="todo-list">
                <?php
            foreach ($Categories as $Category) {
                echo '<li>';
                foreach (Locales() as $key=>$value) {
                    // category text
                   echo '<span style="display: none;" class="text">'.$Category->id .'</span>';
                   echo '<span class="text">' . $Category->contents[$key]['element_content'] . '</span>'.'| &nbsp; ';
                }
                // General tools such as edit or delete
                echo '<div class="tools">';

                    echo '<a onclick="editRow('.$Category->id.')"><i class="fa fa-edit"></i></a> &nbsp;';
                     echo '<a onclick="deleteRow('.$Category->id.')"><i class="fa fa-trash-o"></i></a>';
                 echo '</div>';
                echo '</li>';
                }
                ?>
            </ul>
        </div>
        <!-- /.card-body -->

    </div>
</div>


<script>
    function deleteRow(r) {
            let token = "{{ csrf_token() }}";
            $.ajax({
                type: 'DELETE',
                url: '/Category/' + r,
                data: {
                    _token: token,
                    r
                },
                success: function() {
                    location.reload();
                }
            });

        }

</script>

<script>
    function editRow(r) {
        $.ajax({
            type: "GET",
            url: '/Category/' + r + '/edit',

            success: function (data) {
                //display data...
                let CatId= (data['id']);
                $('#CategoryEditModal').find('#CatId').val(CatId);
                data['contents'].forEach(element => {
                    $('#CategoryEditModal').find('#'+element['locale']+'edit').text(element['element_content']);
                });

                $("#CategoryEditModal-form").attr("action", "/Category/" + CatId);
                $('#CategoryEditModal').modal('show');
            }
        });
    }
</script>


<script>
    function show(r) {
alert(r);
        // $.ajax({
        //     type: "GET",
        //     url: '/Category/' + r + '/edit',

        //     success: function (data) {
        //         //display data...
        //         let CatId= (data['id']);
        //         $('#CategoryEditModal').find('#CatId').val(CatId);
        //         data['contents'].forEach(element => {
        //             $('#CategoryEditModal').find('#'+element['locale']+'edit').text(element['element_content']);
        //         });

        //         $("#CategoryEditModal-form").attr("action", "/Category/" + CatId);
        //         $('#CategoryEditModal').modal('show');
        //     }
        // });
    }
</script>
@include('PageElements.Dashboard.Setting.ModalEditCategory')
@endsection
