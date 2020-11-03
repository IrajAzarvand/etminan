@extends('PageElements.Dashboard.Layout')
@section('PageTitle', 'تنظیمات محصولات')
@section('ContentHeader', 'تنظیمات محصولات')
@section('content')





<!-- left column -->
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <!-- form start -->
        <form role="form">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputFile">ارسال فایل</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fileUploader" multiple>
                            <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
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
