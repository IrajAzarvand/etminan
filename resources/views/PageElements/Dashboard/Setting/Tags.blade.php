{{-- @dd($Tags) --}}
@extends('PageElements.Dashboard.Layout')
@section('PageTitle', 'تنظیمات برچسب ها')
@section('ContentHeader', 'تنظیمات برچسب ها')
@section('content')

<div class="col-6">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="ion ion-clipboard mr-1"></i>
                لیست برچسب ها
            </h3>

            <div class="card-tools">
                <ul class="pagination pagination-sm">
                    @foreach ($Tags['links'] as $key=>$item)
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
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <ul class="todo-list">
                <?php
                foreach ($Tags['data'] as $key => $value) {
                echo '<li>';
                    echo '<span style="display: none;">'.$value['id'].'</span>';
                    // tag text
                   echo '<span class="text">' . $value['tag_name'] . '</span>';
                    // General tools such as edit or delete
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
        <div class="card-footer clearfix">
            <button type="button" class="btn btn-info float-right"><i class="fa fa-plus"></i> جدید</button>
        </div>
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
