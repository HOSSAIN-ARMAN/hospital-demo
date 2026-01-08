@extends('admin.layouts.master')
@section('title', 'Add Product')
@section('page-header')
    <i class="fa fa-plus"></i> Add Product
@endsection

@section('content')
    @include('admin.components.page_header', [
       'fa' => 'fa fa-list',
       'name' => 'Product List',
       'route' => route('admin.product.index')
    ])

    <div class="col-sm-12">
        <form role="form"
              method="post"
              class="form-horizontal"
              enctype="multipart/form-data"
              action="{{route('admin.product.store')}}"
        >
        @csrf

                <!--category-->
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="category">category</label>
                <div>
                    <select class="col-sm-3" style="margin-left: 18px;" id="category" name="category_id">
                        <option value="-1">--select--</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!--sub-category-->
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="category">Sub-category</label>
                <div>
                    <select class="col-sm-3" style="margin-left: 18px;" id="subCategory" name="sud_category_id">
                        <option value="-2">--select--</option>
                    </select>
                </div>
            </div>
            <!-- Name -->
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="name">Name <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="text"
                           id="name"
                           name="name"
                           placeholder="Product"
                           class="form-control"
                           value="{{old('name')}}">
                    <strong class="red">{{ $errors->first('name') }}</strong>
                </div>
            </div>
            <!--code--->
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="name">Code <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="text"
                           id="code"
                           name="code"
                           placeholder="Code"
                           class="form-control"
                           value="{{old('code')}}">
                    <strong class="red">{{ $errors->first('code') }}</strong>
                </div>
            </div>
            <!-- Image -->
           <div class="form-group">
               <label class="col-sm-2 control-label no-padding-right" for="image">Image</label>
               <div  class="col-sm-4">
                   <div class="input-group control-group increment" >
                       <input type="file" name="filename[]" class="form-control">
                       <div class="input-group-btn">
                           <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i></button>
                       </div>
                   </div>
                   <div class="clone hide">
                       <div class="control-group input-group" style="margin-top:10px">
                           <input type="file" name="filename[]" class="form-control" />
                           <div class="input-group-btn">
                               <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i></button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>



{{--            <div class="form-group">--}}
{{--                <label class="col-sm-2 control-label no-padding-right" for="image">Image</label>--}}
{{--                <div class="increment col-sm-2">--}}
{{--                    <input name="filename[]" type="file" id="image" class="form-control single-file" accept="image/*">--}}
{{--                    <button class="btn btn-dark" type="button"> <i class="glyphicon glyphicon-plus"></i></button>--}}
{{--                    @error('image')--}}
{{--                    <strong class="red">{{ $message }}</strong>--}}
{{--                    <br>--}}
{{--                    @enderror--}}
{{--                    <strong class="text-primary">Press Plus Button to insert multiple Image</strong>--}}
{{--                </div>--}}
{{--                    <div class="clone hide">--}}
{{--                        <div class="control-group input-group">--}}
{{--                            <div class="col-sm-3">--}}
{{--                                <button class="btn btn-outline-light remove" type="button"> <i class="glyphicon glyphicon-remove"></i>--}}
{{--                                    <img id="output" width="130px" height="130px"/>--}}
{{--                                </button>--}}
{{--                                <input name="filename[]" type="file" accept="image/*"  class="form-control btn-dark" onchange="loadFile(event)">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        @error('image')--}}
{{--                        <strong class="red">{{ $message }}</strong>--}}
{{--                        <br>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--            </div>--}}
            <!--color-->
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="name">Color <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="text"
                           id="color"
                           name="color"
                           placeholder="Color"
                           class="form-control"
                           value="{{old('color')}}">
                    <strong class="red">{{ $errors->first('color') }}</strong>
                </div>
            </div>
            <!--size-->
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="size">Size</label>
                <div class="col-sm-4">
                    <select name="size[]" multiple="" class="chosen-select form-control" id="form-field-select-4" data-placeholder="Choose a Size...">
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="32">32</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                    </select>
                </div>
            </div>

            <!--status-->
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="name">Status <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="radio"
                           id="status"
                           name="status"
                           checked
                           value="1">&nbsp; Published
                    <input type="radio"
                           id="status"
                           name="status"
                           value="0">&nbsp; Un-Published
                </div>
            </div>
            <!-- Buttons -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                    <button class="btn btn-sm btn-success submit create-button">
                        <i class="fa fa-save"></i> Add
                    </button>

                    <a href="{{route('admin.product.index')}}" class="btn btn-sm btn-gray">
                        <i class="fa fa-refresh"></i> Cancel
                    </a>
                </div>
            </div>

        </form>
    </div>



@endsection

@push('js')



    <script>
        loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };

    </script>


{{--    this script for Multiple Image field--}}

    <script type="text/javascript">

        $(document).ready(function() {

            $(".btn-success").click(function(){
                var html = $(".clone").html();
                $(".increment").after(html);
            });

            $("body").on("click",".btn-danger",function(){
                $(this).parents(".control-group").remove();
            });

        });

    </script>

{{--    <script type="text/javascript">--}}

{{--        $(document).ready(function() {--}}

{{--            $(".btn-dark").click(function(){--}}
{{--                var html = $(".clone").html();--}}
{{--                $(".increment").after(html);--}}
{{--            });--}}

{{--            $("body").on("click",".remove",function(){--}}
{{--                $(this).parents(".control-group").remove();--}}
{{--            });--}}

{{--        });--}}

{{--    </script>--}}


{{--    this script for size--}}

    <script type="text/javascript">
        jQuery(function($) {
            if(!ace.vars['touch']) {
                $('.chosen-select').chosen({allow_single_deselect:true});
                //resize the chosen on window resize
                $(window)
                    .off('resize.chosen')
                    .on('resize.chosen', function() {
                        $('.chosen-select').each(function() {
                            var $this = $(this);
                            $this.next().css({'width': $this.parent().width()});
                        })
                    }).trigger('resize.chosen');
                //resize chosen on sidebar collapse/expand
                $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                    if(event_name != 'sidebar_collapsed') return;
                    $('.chosen-select').each(function() {
                        var $this = $(this);
                        $this.next().css({'width': $this.parent().width()});
                    })
                });
            }

        });
    </script>
    <script>
        $(document).ready(function () {
            $('#category').change(function () {
                var catId = $(this).val();
                var url = "{{ route('admin.product.create.getSubCategory', ":catId") }}";
                url = url.replace(':catId', catId);
                $.ajax({
                    url      : url,
                    method   : 'get',
                    data     : 'jsonData',
                    dataType : 'json',
                    success  : function(data) {
                        $("#subCategory").empty();
                        $("#subCategory").append('<Option value="' + -1 + '">' + "--select--" + '</Option>');
                        $.each(data, function (key, value) {
                            $("#subCategory").append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    },
                    error: function(errorMessage) {
                        // alert(errorMessage);
                    },

                });
            });
        });
    </script>
@endpush
