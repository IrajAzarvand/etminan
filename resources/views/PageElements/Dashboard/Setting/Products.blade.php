@extends('PageElements.Dashboard.Layout')
@section('PageTitle', 'تنظیمات محصولات')
@section('ContentHeader', 'مدیریت محصولات')
@section('content')





<!-- left column -->
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <!-- form start -->
        <form role="form" action="{{ route('Product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

                <!-- file uploader -->
                <div class="form-group">
                    <label for="exampleInputFile">ارسال تصاویر محصول</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="product_images[]" class="custom-file-input" id="fileUploader" multiple>
                            <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                        </div>

                    </div>
                </div>

                <!-- category -->
                <div class="form-group">
                    <label for="exampleInputFile">دسته بندی محصول</label>
                    <div class="input-group">
                        <select name="product_category" class="form-control">

                            @foreach ($product_categories as $key=>$value)
                            <option value=" {{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>




            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">ارسال</button>
            </div>
        </form>
    </div>
    <!-- /.card -->

</div>
<!--/.col (left) -->


<!-- /.row -->
@endsection
