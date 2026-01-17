@extends('admin.layouts.master')
@section('title','Hospital List')
@section('page-header')
    <i class="fa fa-list"></i> Hospital List
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
           'name' => 'Create Hospital',
           'route' => route('admin.system.create')
        ])

    <table class="table table-bordered">
        <tbody>
        <tr>
            <th class="bg-dark" style="width: 5%">SL</th>
            <th class="bg-dark" style="width: 25%">Category</th>
            <th class="bg-dark" style="width: 20%">Code</th>
            <th class="bg-dark" style="width: 25%">Image</th>
            <th class="bg-dark" style="width: 15%">Status</th>
            <th class="bg-dark" style="width: 20%">Action</th>
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