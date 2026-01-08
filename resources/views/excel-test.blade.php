@extends('admin.layouts.master')
@section('title', 'demo excel')
@section('page-header')
    <i class="fa fa-plus"></i> demo excel test
@endsection

@section('css')

@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h5>Demo Report
                <span class="pull-right noprint">
{{--                   <a href="{{url('/fabric-stock-summery-report-download?type=pdf&'.request()->getQueryString() ?? ['buyer_id','style_id', 'po_id', 'color_id'])}}"--}}
{{--                                            title="Download Pdf"><i style="color: #DC0A0B" class="fa fa-file-pdf-o"></i></a> &nbsp;--}}
                                        |
                   <a href="{{ url('/demo?type=excel&' . (request()->getQueryString() ?? null)) }}"><i
                                                style="color: #0F733B" class="fa fa-file-excel-o"></i></a>
                </span>
            </h5>
        </div>
    </div>

    <table class="table table-bordered">

        @include('excel')
    </table>



@endsection
