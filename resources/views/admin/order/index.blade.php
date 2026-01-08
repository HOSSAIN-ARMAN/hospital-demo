
@extends('admin.layouts.master')
@section('title','Order List')
@section('page-header')
    <i class="fa fa-list"></i> Order List
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
       'name' => 'Create Order',
       'route' => route('admin.order.create')
    ])



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
