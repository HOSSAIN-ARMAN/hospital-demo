@extends('admin.layouts.master')
@section('title', 'Add Order')
@section('page-header')
    <i class="fa fa-plus"></i>
        <input type="button" id="btnShowPopup" value="Take Order" class="btn btn-info btn-lg" />

@endsection

@push('css')
    <style>
        table th,
        td {
            text-align: center !important;
            vertical-align: middle !important;
        }



    </style>
@endpush

@section('content')
    @include('admin.components.page_header', [
       'fa' => 'fa fa-list',
       'name' => 'Order List',
       'route' => route('admin.order.index')
    ])

    <!-- Modal Popup -->
    <div id="MyPopup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        &times;</button>
                    <h4 class="modal-title">
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="category_id" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a Category...">
                                        <option value=""> Select Category </option>
                                        <option value="AL">Nekles</option>
                                        <option value="AK">Chik</option>
                                        <option value="AZ">Dhul</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="carat_id" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a Carat...">
                                        <option value=""> Select Carat </option>
                                        <option value="AL">KDM-21</option>
                                        <option value="AK">KDM-22</option>
                                        <option value="AZ">Rupa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number"
                                           id="quantity"
                                           name="quantity"
                                           placeholder="Quantity"
                                           class="form-control"
                                           value="{{old('name')}}">
                                    <strong class="red">{{ $errors->first('name') }}</strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="wt" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a Wt/ওজন...">
                                        <option value=""> Select Wt/ওজন </option>
                                        <option value="AL">গ্রাম/gm</option>
                                        <option value="AK">মিলি/m.gm</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number"
                                           id="bhori_rate"
                                           name="bhori_rate"
                                           placeholder="Rate/প্রতি ভরি"
                                           class="form-control"
                                           value="{{old('gold_price')}}">
                                    <strong class="red">{{ $errors->first('gold_price') }}</strong>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number"
                                           id="gold_price"
                                           name="gold_price"
                                           placeholder="Gold Price/সোনার দম "
                                           class="form-control"
                                           value="{{old('gold_price')}}">
                                    <strong class="red">{{ $errors->first('gold_price') }}</strong>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="number"
                                           id="stone"
                                           name="stone"
                                           placeholder="stone/পাথর"
                                           class="form-control"
                                           value="{{old('stone')}}">
                                    <strong class="red">{{ $errors->first('stone') }}</strong>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="number"
                                           id="m_charge"
                                           name="m_charge"
                                           placeholder="M.Charge/মুজুরি"
                                           class="form-control"
                                           value="{{old('m_charge')}}">
                                    <strong class="red">{{ $errors->first('m_charge') }}</strong>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="number"
                                           id="total"
                                           name="total"
                                           placeholder="Total/মোট মূল্য "
                                           class="form-control"
                                           value="{{old('total')}}">
                                    <strong class="red">{{ $errors->first('total') }}</strong>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="number"
                                           id="advance"
                                           name="advance"
                                           placeholder="Advance/অগ্রিম"
                                           class="form-control"
                                           value="{{old('advance')}}">
                                    <strong class="red">{{ $errors->first('advance') }}</strong>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="number"
                                           id="arrears"
                                           name="arrears"
                                           placeholder="Arrears/বকেয়া"
                                           class="form-control"
                                           value="{{old('arrears')}}">
                                    <strong class="red">{{ $errors->first('arrears') }}</strong>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Close</button>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tbody>
        <tr>
            <th class="bg-dark" style="width: 5%" rowspan="2">SL</th>
            <th class="bg-dark" style="width: 25%" rowspan="2">Category(Description)/বিবরণ </th>
            <th class="bg-dark" style="width: 20%" colspan="2">Wt/ওজন </th>
            <th class="bg-dark" style="width: 20%" rowspan="2">Rate/প্রতি ভরি</th>
            <th class="bg-dark" style="width: 15%" rowspan="2">Empty</th>
            <th class="bg-dark" style="width: 25%" rowspan="2">TAKA</th>
            <th class="bg-dark" style="width: 20%" rowspan="2">Action</th>
        </tr>
        <tr>
            <th class="bg-dark" colspan="1">গ্রাম/gm</th>
            <th class="bg-dark" colspan="1">মিলি/m.gm</th>
        </tr>
        </tbody>
    </table>


















{{--    <div class="col-sm-9">--}}
{{--        <form role="form"--}}
{{--              method="post"--}}
{{--              class="form-horizontal"--}}
{{--              enctype="multipart/form-data"--}}
{{--              action="{{route('admin.category.store')}}"--}}
{{--        >--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--            <div class="form-group">--}}
{{--                <label class="col-sm-2 control-label no-padding-right" for="name">Name <sup class="red">*</sup></label>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <input type="text"--}}
{{--                           id="name"--}}
{{--                           name="name"--}}
{{--                           placeholder="Category"--}}
{{--                           class="form-control"--}}
{{--                           value="{{old('name')}}">--}}
{{--                    <strong class="red">{{ $errors->first('name') }}</strong>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Buttons -->--}}
{{--            <div class="form-group">--}}
{{--                <div class="col-sm-offset-2 col-sm-4">--}}
{{--                    <button class="btn btn-sm btn-success submit create-button">--}}
{{--                        <i class="fa fa-save"></i> Add--}}
{{--                    </button>--}}

{{--                    <a href="{{route('admin.category.index')}}" class="btn btn-sm btn-gray">--}}
{{--                        <i class="fa fa-refresh"></i> Cancel--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}

@endsection

@push('js')
    <script type="text/javascript">

        $(function () {
            $("#btnShowPopup").click(function () {
                var title = "Please Enter Your Details Order Information";
                // var body = "Welcome to ASPSnippets.com";
                $("#MyPopup .modal-title").html(title);
                // $("#MyPopup .modal-body").html(body);
                $("#MyPopup").modal("show");
            });
        });


    </script>
@endpush

