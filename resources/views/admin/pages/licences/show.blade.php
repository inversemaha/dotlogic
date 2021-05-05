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
                                                        <th>Serial No</th>
                                                        <th>License No</th>
                                                        <th>Status</th>
                                                        <th>Valid Date</th>
                                                        <th>Last Access Time</th>
                                                        <th>Version</th>
                                                        <th>Version Name</th>
                                                        <th>License Fee</th>
                                                        <th>Service Charge</th>
                                                        <th class="align-content-center">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php($i=1)
                                                    @foreach($result as $res)
                                                        <tr>
                                                            <td>{{$i++}}</td>
                                                            <td>{{$res->company_name}}</td>
                                                            <td>{{$res->serial_no}}</td>
                                                            <td>{{$res->license_no}}</td>
                                                            <td>
                                                                @if($res->status=1)
                                                                    <span class="label label-primary">Active</span>
                                                                @else
                                                                    <span class="label label-danger">Inactive</span>
                                                                @endif
                                                            </td>
                                                            <td>{{date('d-m-Y', strtotime($res->valid_date))}}</td>
                                                            <td>{{date('d-m-Y', strtotime($res->last_access_time))}}</td>
                                                            <td>{{$res->version}}</td>
                                                            <td>{{$res->version_name}}</td>
                                                            <td>{{$res->license_fee}}</td>
                                                            <td>{{$res->service_charge}}</td>
                                                            <td class="center">
                                                                <div class="btn-group">
                                                                    <button data-toggle="dropdown" class="btn btn-success btn-xs dropdown-toggle" aria-expanded="false">Action </button>
                                                                    <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; top: 25px; left: 0px; will-change: top, left;">
                                                                        <li><a class="dropdown-item" href="/admin/licences/edit/{{$res->id}}">Edit</a></li>
                                                                        <li><a class="dropdown-item" href="/admin/licences/delete/{{$res->id}}" onclick="return confirm('Are you sure?')">Delete</a></li>
                                                                        <li><a class="dropdown-item" href="/admin/payment/pay/{{$res->id}}">Receive Payment</a></li>
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
