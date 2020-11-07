<!-- /edit modal -->
{{-- @dd($EditTag) --}}

<div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" id="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ویرایش برچسب</h4>
            </div>
            <div class="modal-body" id="modal-body">
                <form class="card-body" id="modal-form" action="" method="post">
                    @method('PUT')
                    @csrf
                    @method('PUT')
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

                                    <input type="hidden" name="TagId" id="TagId">

                                    <div class="mb-3">
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
                                                    @foreach (Locales() as $key=>$value)
                                                    <div class="tab-pane @if ($loop->first) active @endif" id="{{$value['locale']}}">
                                                        <div class="mb-3">
                                                            <textarea id="editor1" name="{{$value['locale']}}" style="width: 100%"></textarea>
                                                            {{-- {{$EditTag->contents[$key]['element_content']}} --}}
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <!-- /.tab-content -->
                                            </div><!-- /.card-body -->
                                        </div>
                                        <!-- ./card -->
                                    </div>

                                    <button type="submit" class="btn btn-primary">ویرایش</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                </form>
            </div>

        </div>

    </div>

</div>

</div>

</div>
</div>
