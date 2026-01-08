
@extends('admin.layouts.master')
@section('title',' Product List')
@section('page-header')
    <i class="fa fa-list"></i> Product List
@stop

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
       'fa' => 'fa fa-pencil',
       'name' => 'Create Product',
       'route' => route('admin.product.create')
    ])


{{--    @foreach(json_decode($productImage->filename) as $picture)--}}
{{--        <img src="{{ asset('/product_images/'.$picture) }}">--}}
{{--    @endforeach--}}



    <table class="table table-bordered">
        <tbody>
        <tr>
            <th class="bg-dark" style="width: 5%">SL</th>
            <th class="bg-dark" style="width: 25%">Name</th>
            <th class="bg-dark" style="width: 20%">Code</th>
            <th class="bg-dark" style="width: 25%">Color</th>
            <th class="bg-dark" style="width: 25%">Image</th>
            <th class="bg-dark" style="width: 15%">Status</th>
            <th class="bg-dark" style="width: 20%">Action</th>
        </tr>
        @foreach($products as $key => $product)
            <tr>
                <td>{{ isset($key) ? $key + 1 : 0}}</td>
                <td>{{ isset($product) ? $product->name : ''}}</td>
                <td>{{isset($product) ? $product->code : ''}}</td>
                <td>{{isset($product) ? $product->color : '' }}</td>
                <td><a href="#">View-Image</a></td>
                <td>{{ $product->status == 1 ? "Published" : "Un-published" }}</td>
                <td>
                    <div class="btn-group btn-group-mini btn-corner">
                        {{--                        <a href="{{ route('backend.area.edit',['id' => $division->id]) }}"--}}
                        <a href="#"
                           class="btn btn-xs btn-info"
                           title="Edit">
                            <i class="ace-icon fa fa-pencil"></i>
                        </a>

                        <button type="button" class="btn btn-xs btn-danger"
                                {{--                                onclick="delete_check({{ $division->id }})"--}}
                                onclick="delete_check()"
                                title="Delete">
                            <i class="ace-icon fa fa-trash-o"></i>
                        </button>
                    </div>
                    {{--                    <form action="{{ route('backend.area.destroy', ['id' => $division->id]) }}"--}}
                    {{--                          id="deleteCheck_{{ $division->id }}" method="GET">--}}
                    {{--                        @csrf--}}
                    {{--                    </form>--}}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

    {{--    @include('backend.partials._paginate', ['data' => $divisions])--}}
@endsection

@push('js')
    <script type="text/javascript">
        function delete_check(id) {
            Swal.fire({
                title: 'Are you sure?',
                html: "<b>You will delete it permanently!</b>",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                width: 400,
            }).then((result) => {
                if (result.value) {
                    $('#deleteCheck_' + id).submit();
                }
            })
        }
    </script>
@endpush
