@extends('admin.layouts.master')
@section('title', 'Hospital List')
@section('page-header')
    <i class="fa fa-plus"></i> Create Hospital
@endsection

@section('content')
    @include('admin.components.page_header', [
       'fa' => 'fa fa-list',
       'name' => 'Hospital List',
       'route' => route('admin.system.index')
    ])

    <div class="col-sm-9">
        <form role="form"
              method="post"
              class="form-horizontal"
              enctype="multipart/form-data"
              action="{{route('admin.system.store')}}"
              >
        @csrf

        <!-- Name -->
           <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="name">User Name <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="text"
                           id="name"
                           name="name"
                           placeholder=""
                           class="form-control"
                           value="{{old('name')}}">
                    <strong class="red">{{ $errors->first('name') }}</strong>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="email">Email <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="email"
                           id="email"
                           name="email"
                           placeholder=""
                           class="form-control"
                           value="{{old('email')}}">
                    <strong class="red">{{ $errors->first('email') }}</strong>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="password">Password <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="password"
                           id="password"
                           name="password"
                           placeholder=""
                           class="form-control"
                           value="{{old('password')}}">
                    <strong class="red">{{ $errors->first('password') }}</strong>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="hospital_name">Hospital Name <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="text"
                           id="hospital_name"
                           name="hospital_name"
                           placeholder=""
                           class="form-control"
                           value="{{old('hospital_name')}}">
                    <strong class="red">{{ $errors->first('Hospital Name') }}</strong>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="hospital_id">Hospital ID <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="text"
                           id="hospital_id"
                           name="hospital_id"
                           placeholder=""
                           class="form-control"
                           value="{{old('hospital_id')}}">
                    <strong class="red">{{ $errors->first('Hospital ID') }}</strong>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="route_no">Route ID <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="text"
                           id="route_no"
                           name="route_no"
                           placeholder=""
                           class="form-control"
                           value="{{old('route_no')}}">
                    <strong class="red">{{ $errors->first('Route ID') }}</strong>
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="is_woner"> Hospital Woner <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="radio"
                           id="is_woner"
                           name="is_woner"
                           checked
                           value="1">&nbsp; Published
                    <input type="radio"
                           id="is_woner"
                           name="is_woner"
                           value="0">&nbsp; Un-Published
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="is_manager"> Manager <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="radio"
                           id="is_manager"
                           name="is_manager"
                           checked
                           value="1">&nbsp; Published
                    <input type="radio"
                           id="is_manager"
                           name="is_manager"
                           value="0">&nbsp; Un-Published
                </div>
            </div>

            

            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="is_super_user"> Super User <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="radio"
                           id="is_super_user"
                           name="is_super_user"
                           checked
                           value="1">&nbsp; Published
                    <input type="radio"
                           id="is_super_user"
                           name="is_super_user"
                           value="0">&nbsp; Un-Published
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="is_admin"> Admin <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="radio"
                           id="is_admin"
                           name="is_admin"
                           checked
                           value="1">&nbsp; Published
                    <input type="radio"
                           id="is_admin"
                           name="is_admin"
                           value="0">&nbsp; Un-Published
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="is_doctor"> Doctor <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="radio"
                           id="is_doctor"
                           name="is_doctor"
                           checked
                           value="1">&nbsp; Published
                    <input type="radio"
                           id="is_doctor"
                           name="is_doctor"
                           value="0">&nbsp; Un-Published
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="is_stuff"> Stuff <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="radio"
                           id="is_stuff"
                           name="is_stuff"
                           checked
                           value="1">&nbsp; Published
                    <input type="radio"
                           id="is_stuff"
                           name="is_stuff"
                           value="0">&nbsp; Un-Published
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="is_user"> User <sup class="red">*</sup></label>
                <div class="col-sm-4">
                    <input type="radio"
                           id="is_user"
                           name="is_user"
                           checked
                           value="1">&nbsp; Published
                    <input type="radio"
                           id="is_user"
                           name="is_user"
                           value="0">&nbsp; Un-Published
                </div>
            </div>



            <!-- Image -->
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="image_logo">Logo</label>
                <div class="col-sm-4">
                    <input name="image_logo"
                           type="file"
                           id="image_logo"
                           class="form-control single-file" accept="image/*">
                    @error('image_logo')
                    <strong class="red">{{ $message }}</strong>
                    <br>
                    @enderror
                    <strong class="text-primary">Minimum 100x100 pixels</strong>
                </div>
            </div>
            <!-- Image -->
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="image_benar">Benar</label>
                <div class="col-sm-4">
                    <input name="image_benar"
                           type="file"
                           id="image_benar"
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
                <label class="col-sm-2 control-label no-padding-right" for="status">Status <sup class="red">*</sup></label>
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
