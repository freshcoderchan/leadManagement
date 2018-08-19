@extends('layouts.master')
@section('heading')
    Invoices
@stop

@section('content')
    <div class="card">
        <form action="{{url('/search')}}" method="get" id="filterForm-invoice" >
        <div class="card-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4" hidden="true">
                        <div class="form-group label-floating" style="margin-top: 0%">
                            <select class="selectpicker" data-live-search="true" data-style="select-with-transition" name ="invoice_id" title="Invoice Number" data-size="3">
                                <option value=""></option>
                                @foreach($invoices as $invoice)
                                    <option value="{{$invoice->id}}">{{$invoice->invoice_number}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <!-- <div class="col-md-4">
                        <div class="form-group label-floating" style="margin-top: 0%">
                            <select class="selectpicker" data-live-search="true" data-style="select-with-transition" name ="lead_name" title="Lead Name" data-size="3">
                                <option value="" style="font-style: italic; color: #969595">Select Name</option>
                                @foreach($leads as $lead)

                                    <option value="{{$lead->id}}">{{$lead->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> -->
                    <div class="col-md-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Lead Name</label>
                            <input type="name" class="form-control" name="lead_name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Company</label>
                            <input type="name" class="form-control" name="company">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <select class="selectpicker" data-style="select-with-transition" title="Status" data-size="5">
                            <option value="2">Pending</option>
                            <option value="3">Paid</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <div class="pull-left" >
                             <input class="btn btn-sm btn-warning" type="submit" value="RESET" id="reset" onClick="location.reload()"/>
                            <input class="btn btn-sm btn-success" type="submit" value="APPLY" id="apply" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="page"  id="page_no" value="1" />
        <input type="hidden" name="ajax" value="invoice"/>
    </form>
    </div>
    <div id="ajaxContent-invoice">
        @include('layouts.invoicedatatable')
    </div>
    <div id="modal_window">
    </div>
@stop
{{--@push('scripts')--}}
    {{--<script>--}}
        {{--$(function () {--}}
            {{--$('#invoices-table').DataTable({--}}
                {{--"order": [[0, "desc"]]--}}

            {{--});--}}
        {{--});--}}
    {{--</script>--}}
{{--@endpush--}}