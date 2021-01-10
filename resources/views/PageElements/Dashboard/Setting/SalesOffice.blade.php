@extends('PageElements.Dashboard.Layout')
@section('PageTitle', 'تنظیمات دفاتر فروش')
@section('ContentHeader', 'دفاتر فروش')
@section('content')

<div class="col-md-12">
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">
                افزودن دفتر فروش جدید
            </h3>

        </div>
        <!-- /.card-header -->
        <form class="card-body" action="{{ route('SO.store') }}" method="post">
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
                        <label>نام، آدرس، شماره تلفن های دفتر</label>

                        <div class="card-header d-flex p-0">
                            <ul class="nav nav-pills ml-auto p-2">
                                @foreach (Locales() as $item)
                                <li class="nav-item"><a class="nav-link @if ($loop->first) active @endif" href="#SalesOffice_{{$item['locale']}}" data-toggle="tab">{{$item['name']}}</a> </li>
                                @endforeach
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                @foreach (Locales() as $item)
                                <div class="tab-pane @if ($loop->first) active @endif" id="SalesOffice_{{$item['locale']}}">
                                    <div class="mb-3">
                                        <textarea id="editor1" name="SalesOffice_{{$item['locale']}}" style="width: 100%" rows="10"></textarea>
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

<!-- / =============================================================================== -->
<!-- /view products list -->
<div class="col-md-12">
    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title">
                مشاهده لیست دفاتر
            </h3>

        </div>
        <!-- /.card-header -->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="ion ion-clipboard mr-1"></i>
                    لیست دفاتر ثبت شده
                </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">جدول دفاتر</h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover" id="ProductsTable">
                                    <tr>
                                        <th>#</th>
                                        <th>نام دفتر</th>
                                        <th>عملیات</th>
                                    </tr>
                                    <tr id="ProductsList">

                                    </tr>
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






<script>
    function collectCategories(ptype)
{
    let selectedPType=ptype.value;


        $.ajax({
            type: "GET",
            url: '/Category/' + selectedPType,

            success: function (data) {

                $('#categories_list').empty();
                data.forEach(function(entry){
                let list='';
                let Cat_id='';
                    entry.forEach(function(childrenEntry) {
                        list = list + ' (' +  childrenEntry.element_content + ') ';
                        Cat_id=childrenEntry.element_id;

                    });
                        let select = document.getElementById("categories_list");
                        select.options[select.options.length] = new Option(list, Cat_id);
                });
            }
        });
}
</script>



<script>
    function showCategory() {
        let ptypeId=document.getElementById('ptypeId').value;
        $.ajax({
            type: "GET",
            url: '/Category/' + ptypeId,

            success: function (data) {

                // create category list
                function createElementLi(obj) {
                    let ul_obj = document.getElementById(obj);

                    // Create li
                    let li_obj = document.createElement("li");
                    ul_obj.appendChild(li_obj);

                    //create span inside li
                    let last_li = ul_obj.lastElementChild;
                    let span_obj = document.createElement("span");
                    span_obj.setAttribute("class", "text");
                    last_li.appendChild(span_obj);
                }


                //show content
                let list='';
                let Cat_id='';
                $('#CategoryList').empty();
                data.forEach(function(entry){
                    entry.forEach(function(childrenEntry) {
                        list = list + ' (' +  childrenEntry.element_content + ') ';
                        Cat_id=childrenEntry.element_id;
                    });
                    createElementLi("CategoryList");
                    let lst_LI=document.getElementById("CategoryList").lastElementChild;
                    let spn=lst_LI.getElementsByTagName("span");
                    spn[0].innerHTML='<a onclick="editRow('+ Cat_id +')"><i class="fa fa-edit"></i></a> &nbsp; <a onclick="deleteRow('+ Cat_id +')"><i class="fa fa-trash-o"></i></a>' + list;
                    console.log(list);
                    list='';
                });


            }
        });
    }
</script>





{{-- ====================for show all products=============== --}}
<script>
    function collectAllCategories(ptype)
{
    let selectedPType=ptype.value;
        $.ajax({
            type: "GET",
            url: '/Category/' + selectedPType,

            success: function (data) {

                $('#ShowcategoriesList').empty();
                document.getElementById("ShowcategoriesList").options[0] = new Option("یکی از دسته بندی های محصولات را انتخاب کنید", "disabled");
                data.forEach(function(entry){
                let list='';
                let Cat_id='';
                    entry.forEach(function(childrenEntry) {
                        list = list + ' (' +  childrenEntry.element_content + ') ';
                        Cat_id=childrenEntry.element_id;

                    });
                        let select = document.getElementById("ShowcategoriesList");
                        select.options[select.options.length] = new Option(list, Cat_id);
                });
            }
        });
}
</script>

<script>
    function showCategoryProducts(category) {
        let selectedCategory=category.value;

        $.ajax({
            type: "GET",
            url: '/Product/' + selectedCategory,

            success: function (data) {
                //show content
                // console.log(data);
                let Product_id='';
                let Product_name='';
                let count=0;
                let table = document.getElementById("ProductsTable");
                $('#ProductsTable').empty();
                let row = table.insertRow();
                row.insertCell(0).innerHTML= "#";
                row.insertCell(1).innerHTML= "نام محصول";
                row.insertCell(2).innerHTML= "عملیات";

                data.forEach(function(entry){
                    count++;
                    entry.forEach(function(childrenEntry) {
                        Product_id = childrenEntry.element_id;
                    });
                    Product_name = entry[0]['element_content'];
                    let rowCount = table.rows.length;
                    let row = table.insertRow(rowCount);

                    row.insertCell(0).innerHTML= count;
                    row.insertCell(1).innerHTML= Product_name;

                    row.insertCell(2).innerHTML= '<button type="button" class="btn btn-primary"><a onclick="viewEditProduct('+ Product_id +')"><i class="fa fa-eye"></i></a></button> &nbsp <button type="button" class="btn btn-danger"><a onclick="deleteProduct('+ Product_id +')"><i class="fa fa-trash-o"></i></a></button>';
                });


            }
        });
    }
</script>



<script>
    function viewEditProduct(product) {
        window.location.href = "/Product/"+product+"/edit";
    }
</script>



<script>
    function deleteProduct(product) {
        let token = "{{ csrf_token() }}";
        $.ajax({
            type: 'DELETE',
            url: '/Product/' + product,
            data: {
            _token: token,
            product
            },
            success: function() {
                location.reload();
            }
        });

    }
</script>


@endsection
