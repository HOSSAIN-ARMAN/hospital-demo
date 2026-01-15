
@extends('admin.layouts.master')
@section('title','Doctor List')
@section('page-header')
    <i class="fa fa-list"></i> Doctor List
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
          'fa' => 'fa fa-list',
          'name' => 'Add Doctor',
          'route' => route('admin.category.index')
        ])

    <table class="table table-bordered">
        <tbody>
        <tr>
            <th class="bg-dark" style="width: 5%">SL</th>
            <th class="bg-dark" style="width: 25%">Doctor Name</th>
            <th class="bg-dark" style="width: 10%">Gen-ID</th>
            <th class="bg-dark" style="width: 10%">Mobile</th>
            <th class="bg-dark" style="width: 10%">Category</th>
            <th class="bg-dark" style="width: 10%">Address</th>
            <th class="bg-dark" style="width: 10%">Status</th>
            <th class="bg-dark" style="width: 10%">Action</th>
        </tr>

        <tr>
            
            <td>1</td>
            <td>DR.MAHIR HASIN MBBS CMU .DMU PGT MEDICINE</td>
            <td>D-1 </td>
            <td>01720021214 </td>
            <td>Medicine</td>
            <td>n/a
            <td>n/a
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

        <tr>
            
            <td>2</td>
            <td>DTarek DMF</td>
            <td>D-2 </td>
            <td>01720021214 </td>
            <td>Medicine</td>
            <td>n/a
            <td>n/a
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

<tr>
            
            <td>3</td>
            <td>Assistant Prof:Dr Dr Farjana Rabbi Chowdhary MBBS BCS DGO FCPS ( Gayne & Obs)</td>
            <td>D-3 </td>
            <td>01720021214 </td>
            <td>Gayne Consultant</td>
            <td>n/a
            <td>n/a
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


       <tr>
            
            <td>4</td>
            <td>Assistant Prof:Dr Md: Zahid Ferdous MBBS BCS,MS (Ortho),FACS (America)</td>
            <td>D-4 </td>
            <td>01720021214 </td>
            <td>Orthopedic</td>
            <td>n/a
            <td>n/a
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

        

        

        </tbody>
    </table>

    <!-- {{--    @include('backend.partials._paginate', ['data' => $divisions])--}} -->

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
