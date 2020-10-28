<!-- /edit modal -->
<div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" id="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ویرایش اسلایدر</h4>
            </div>
            <div class="modal-body" id="modal-body">
                <form class="card-body" id="modal-form" action="" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="OldSliderImage" id="OldSliderImage">
                    <input type="hidden" name="SliderId" id="SliderId">

                    <div class="modal-image">
                        <img style="width: 25%; height:auto;" id="modal-image-preview" src="">
                    </div>
                    <!-- /image uploader -->
                    <div class="mb3">

                        <div class="form-group">
                            <label for="SliderImage">تصویر</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="SliderImage" class="custom-file-input" id="SliderImage">
                                    <label class="custom-file-label" for="SliderImage">انتخاب فایل</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.image uploader -->

                    <div class="mb-3">
                        <textarea id="slider_title" name="slider_title" style="width: 100%" placeholder="عنوان"></textarea>
                        <textarea id="slider_description" name="slider_description" style="width: 100%" placeholder="توضیح مختصر"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">ذخیره</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                </form>
            </div>

        </div>

    </div>
</div>
