<form action="admin/daodien/edit/{!! $value['id_dao_dien'] !!}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="editDirector{!! $value['id_dao_dien'] !!}" tabindex="-1" aria-labelledby="director_title" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="director_title">{!! $value['ten_dao_dien'] !!}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">@lang('lang.name')</label>
                                    <input class="form-control" type="text" value="{!! $value['ten_dao_dien'] !!}" name="name" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">@lang('lang.national')</label>
                                    <input class="form-control" type="text" value="{!! $value['quoc_gia'] !!}" name="national">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">@lang('lang.birthday')</label>
                                    <input class="form-control" type="date" value="{!! $value['ngaysinh'] !!}" name="birthday"
                                           min="1900-01-01" max="2100-01-01">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group file-uploader">
                                    <label for="example-text-input" class="form-control-label">@lang('lang.image')</label>
                                    <input type='file' name='Image' class="form-control image-director">
                                    @if(strstr($value['hinh_dao_dien'],"https") == "")
                                        <img style="width: 300px"  src="{!! $value['hinh_dao_dien'] !!}"
                                             class="img_direc" alt="user1">
                                    @else
                                        <img style="width: 300px"
                                             src="{!! $value['hinh_dao_dien'] !!}" class="img_direc" alt="user1">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="editor" class="form-control-label">@lang('lang.content')</label>
                                    <textarea class="form-control " name="contents" id="editor">{!! $value['content'] !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </div>
        </div>
    </div>
</form>
