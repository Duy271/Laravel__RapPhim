<form action="admin/food/edit/{!! $value['id_food'] !!}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="editFood{!! $value['id_food'] !!}" tabindex="-1" aria-labelledby="food_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="food_title">{!! $value['ten_food'] !!}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">@lang('lang.name')</label>
                                    <input class="form-control" type="text" value="{!! $value['ten_food'] !!}" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">@lang('lang.price')</label>
                                    <input class="form-control" type="number" value="{!! $value['gia_food']!!}" name="price">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group file-uploader">
                                    <label for="example-text-input" class="form-control-label">@lang('lang.image')</label>
                                    <input type='file' name='Image' class="form-control image-food">
                                    <img style="width: 300px" src="images/food/{!! $value['hinh_food'] !!}"
                                         class="img_food" alt="user1">

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('lang.close')</button>
                    <button type="submit" class="btn btn-primary">@lang('lang.save')</button>
                </div>

            </div>
        </div>
    </div>
</form>
