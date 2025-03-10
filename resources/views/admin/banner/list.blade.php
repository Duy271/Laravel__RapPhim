@extends('admin.layout.index')
    @section('content')
    {{-- @can('banners') --}}
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>@lang('lang.banners')</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <a style="float:right;padding-right:30px;" class="text-light">
                                <button class=" btn btn-primary float-right mb-3" data-bs-toggle="modal" data-bs-target="#banner">@lang('lang.create')</button>
                            </a>
                            <table class="table align-items-center mb-0 ">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">@lang('lang.image')</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">@lang('lang.status')</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($banners as $value)
                                    <tr>
                                        <td class="align-middle text-center">
                                            @if(strstr($value['image'],"https") == "")
                                            <img style="width: 300px" src="{!! $value['hinh'] !!}" alt="user1">
                                            @else
                                            <img style="width: 300px" src="{!! $value['hinh'] !!}" alt="user1">
                                            @endif
                                        </td>
                                        <td id="status{!! $value['id_banner'] !!}" class="align-middle text-center text-sm ">
                                            <form action="{{ route('changeStatusBanner') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="banner_id" value="{{ $value['id_banner'] }}">
                                                @if($value['trang_thai'] == 1)
                                                    <input type="hidden" name="active" value="0">
                                                    <button type="submit" class="btn_active" style="border: none; background: none;">
                                                        <span class="badge badge-sm bg-gradient-success">Online</span>
                                                    </button>
                                                @else
                                                    <input type="hidden" name="active" value="1">
                                                    <button type="submit" class="btn_active" style="border: none; background: none;">
                                                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                                    </button>
                                                @endif
                                            </form>
                                        </td>

                                        <td class="align-middle">
                                            

                                            <a href="{{ url('admin/banner/edit', $value['id_banner'] ) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                data-original-title="Edit banner" data-bs-target="#editBanner{{$value['id_banner']}}"
                                                data-bs-toggle="modal">
                                                <button type="button" class="btn btn-info btn-xs" data-toggle="tooltip" data-original-title="Edit food">
                                                     Sửa
                                                 </button>
                                             </a>
                                        </td>
                                        <td class="align-middle">
                                            <form action="{{ url('admin/banner/delete',$value['id_banner'] ) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @include('admin.banner.edit')
                                    @endforeach
                                    @include('admin.banner.create')
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            {!! $banners->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @else
    <h1 align="center">Permissions Deny</h1>
    @endcan --}}
@endsection


{{-- @section('scripts')
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.delete-banner').on('click', function() {
            var userURL = $(this).data('url');
            var trObj = $(this);
            if (confirm("Are you sure you want to remove it?") == true) {
                $.ajax({
                    url: userURL,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function(data) {
                        if (data['success']) {
                            // alert(data.success);
                            trObj.parents("tr").remove();
                        } else if (data['error']) {
                            alert(data.error);
                        }
                    }
                });
            }

        });
    });
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.file-uploader .img_direc').attr('src', e.target.result).removeClass('d-none');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".image-director").change(function() {
        readURL(this);
    });
</script>
<script>
    function changestatus(banner_id, active) {
        if (active === 1) {
            $("#status" + banner_id).html(' <a href="javascript:void(0)"  class="btn_active" onclick="changestatus(' + banner_id + ',0)">\
                    <span class="badge badge-sm bg-gradient-success">Online</span>\
            </a>')
        } else {
            $("#status" + banner_id).html(' <a  href="javascript:void(0)" class="btn_active"  onclick="changestatus(' + banner_id + ',1)">\
                    <span class="badge badge-sm bg-gradient-secondary">Offline</span>\
            </a>')
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/admin/banners/status",
            type: 'GET',
            dataType: 'json',
            data: {
                'active': active,
                'banner_id': banner_id
            },
            success: function(data) {
                if (data['success']) {
                    // alert(data.success);
                } else if (data['error']) {
                    alert(data.error);
                }
            }
        });
    }
</script>
@endsection --}}