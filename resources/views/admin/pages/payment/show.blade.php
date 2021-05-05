@extends('layouts.admin')
@section('content')
    <div class="cui__layout__content">
        <div class="cui__utils__content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                @include('includes.error_mesage')
                                <div class="card-body">
                                    <h5 class="mb-4">
                                        <strong>Licences List Table</strong>
                                    </h5>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-5">
                                                <table class="table table-hover nowrap" id="example1">
                                                    <thead>
                                                    <tr>
                                                        <th>#SL</th>
                                                        <th>Company Name</th>
                                                        <th>Payment Date</th>
                                                        <th>From Date</th>
                                                        <th>To Date</th>
                                                        <th>Number Of Month</th>
                                                        <th>Amount</th>
                                                        <th>Subtotal</th>
                                                        <th>Discount</th>
                                                        <th>Total</th>
                                                        <th>Comment</th>
                                                        <th class="align-content-center">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php($i=1)
                                                    @foreach($result as $res)
                                                        <tr>
                                                            <td>{{$i++}}</td>
                                                            <td>{{$res->company_name}}</td>
                                                            <td>{{date('d-m-Y', strtotime($res->payment_date))}}</td>
                                                            <td>{{date('d-m-Y', strtotime($res->from_date))}}</td>
                                                            <td>{{date('d-m-Y', strtotime($res->to_date))}}</td>
                                                            <td>{{$res->number_of_month}}</td>
                                                            <td>{{$res->amount}}</td>
                                                            <td>{{$res->subtotal}}</td>
                                                            <td>{{$res->discount}}</td>
                                                            <td>{{$res->Total}}</td>
                                                            <td>{{$res->comment}}</td>
                                                            <td class="center">
                                                                <div class="btn-group">
                                                                    <button data-toggle="dropdown" class="btn btn-success btn-xs dropdown-toggle" aria-expanded="false">Action </button>
                                                                    <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; top: 25px; left: 0px; will-change: top, left;">
                                                                        <li><a class="dropdown-item" href="/admin/payment/edit/{{$res->client_id}}">Edit</a></li>
                                                                        <li><a class="dropdown-item" href="/admin/payment/delete/{{$res->client_id}}" onclick="return confirm('Are you sure?')">Delete</a></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                ;(function ($) {
                    'use strict'
                    $(function () {
                        $('#example1').DataTable({
                            responsive: true,
                        })
                    })
                })(jQuery)
            </script>
@endsection
