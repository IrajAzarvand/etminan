{{-- @dd($Tags) --}}
@extends('PageElements.Dashboard.Layout')
@section('PageTitle', 'تنظیمات برچسب ها')
@section('ContentHeader', 'تنظیمات برچسب ها')
@section('content')

<div class="col-md-12">
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">
                افزودن برچسب جدید
            </h3>

        </div>
        <!-- /.card-header -->
        <form class="card-body" action="{{ route('Tags.store') }}" method="post">
            @csrf
            <!-- /image uploader -->
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
            <!-- /.image uploader -->

            <div class="row">
                <div class="col-12">
                    <!-- Custom Tabs -->
                    <div class="card">
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
                لیست برچسب ها
            </h3>
            {{-- {{ $Tags->links() }} --}}
            {{-- <div class="card-tools">
                <ul class="pagination pagination-sm">
                    @foreach ($Tags->links() as $key=>$item)
                    <li class="page-item">
                        <a href="{{$item['url']}}" class="page-link">
            @php
            if ($loop->first) {
            echo '&laquo;';
            } else if($loop->last)
            {
            echo '&raquo;';
            }
            else {
            echo $item['label'];
            }
            @endphp
            </a>
            </li>
            @endforeach
            </ul>
        </div> --}}
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <ul class="todo-list">
            <?php
            foreach ($Tags as $Tag) {
                echo '<li>';
                foreach (Locales() as $key=>$value) {
                    // echo '<span style="display: none;">'.$value['id'].'</span>';
                    // tag text
                   echo '<span class="text">' . $Tag->contents[$key]['element_content'] . '</span>'.'| &nbsp; ';
                    // General tools such as edit or delete
                }
                echo '<div class="tools">';
                    echo '<i class="fa fa-edit"></i> &nbsp;';
                     echo '<a onclick="deleteRow(this)"><i class="fa fa-trash-o"></i></a>';
                 echo '</div>';
                echo '</li>';
                }
                ?>
        </ul>
    </div>
    <!-- /.card-body -->
    {{-- <div class="card-footer clearfix">
            <button type="button" class="btn btn-info float-right"><i class="fa fa-plus"></i> جدید</button>
        </div> --}}
</div>
</div>


<script>
    function deleteRow(r) {
            let currentRow = $(r).closest("li");
            let Id = currentRow.find("span:eq(1)").text(); // get current row id
            console.log(currentRow);
            // let token = "{{ csrf_token() }}";
            // $.ajax({
            //     type: 'DELETE',
            //     url: '/Tags/' + Id,
            //     data: {
            //         _token: token,
            //         Id
            //     },
            //     success: function() {
            //         location.reload();
            //     }
            // });

        }

</script>

@endsection