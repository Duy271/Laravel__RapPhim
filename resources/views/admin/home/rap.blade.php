<div class="modal fade" id="theater_modal" tabindex="-1" aria-labelledby="theater_modal_title" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="theater_modal_title">
                    @lang('lang.revenue_by_theater')
                    <label for="search_theater">
                        <input type="text" placeholder="@lang('lang.type') @lang('lang.theater') " class="form-controller" id="search_theater" name="search_theater" />
                    </label>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table align-items-center ">
                                <tbody id="tbody_theater">
                                    @foreach($theaters as $theater)
                                    <tr>
                                        <td class="w-30">
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">@lang('lang.theater')</p>
                                                    <h6 class="text-sm mb-0">{!! $theater['ten_rap'] !!}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">@lang('lang.ticket_sold')</p>
                                                <h6 class="text-sm mb-0">
                                                    {{$theater['veghes']}}
                                                </h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">@lang('lang.total_price')</p>
                                                <h6 class="text-sm mb-0">
                                                    {{number_format($theater['tong_tien_ve'],0,",",".")}} đ
                                                </h6>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
