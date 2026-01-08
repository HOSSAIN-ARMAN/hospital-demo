@extends('admin.layouts.master')
@section('title', 'Add Category')
@section('page-header')
    <i class="fa fa-plus"></i> Add Category
@endsection

@section('content')
    @include('admin.components.page_header', [
       'fa' => 'fa fa-list',
       'name' => 'Category List',
       'route' => route('admin.category.index')
    ])

    <div class="col-sm-9">
        <form role="form"
              method="post"
              class="form-horizontal"
              enctype="multipart/form-data"
              action="{{route('admin.category.store')}}"
              >
        @csrf

        <!-- Name -->
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="name">Name <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="text"
                           id="name"
                           name="name"
                           placeholder="Category"
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
                <div class="col-sm-4">
                    <input name="image"
                           type="file"
                           id="image"
                           class="form-control single-file" accept="image/*">
                    @error('image')
                    <strong class="red">{{ $message }}</strong>
                    <br>
                    @enderror
                    <strong class="text-primary">Minimum 100x100 pixels</strong>
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

                    <a href="{{route('admin.category.index')}}" class="btn btn-sm btn-gray">
                        <i class="fa fa-refresh"></i> Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection
