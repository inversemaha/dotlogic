@extends('layouts.admin')
@section('content')

    <div class="cui__layout__content" ng-controller="myCtrl">
        <div class="cui__utils__content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cui__utils__heading">
                        <strong class="text-uppercase font-size-16">licences Page</strong>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                @include('includes.error_mesage')
                                <div class="card-body">
                                    <form action="/admin/licences/update" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Company Name</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Company Name"
                                                       name="company_name" value="{{$licences->company_name}}" required>
                                                <input type="hidden" class="form-control" name="id"
                                                       value="{{$licences->id}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Serial No</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Serial No"
                                                       name="serial_no" ng-model="serial_no"
                                                       value="{{$licences->serial_no}}" required>
                                            </div>
                                            <div class="col-md-4">
                                                <button ng-click="generateLicence()" class="btn btn-sm btn-success"
                                                        type="button">Generate
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">License No</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="License No"
                                                       name="license_no" ng-model="license_no"
                                                       value="{{$licences->license_no}}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Status</label>
                                            <div class="col-md-6">
                                                <select class="form-control" name="status"
                                                        value="{{$licences->status}}">
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"></label>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h5 class="mb-4"><strong> Valid Date</strong></h5>
                                                    <div class="mb-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Select Date" id="datepicker-valid_date"
                                                                   data-toggle="datetimepicker" name="valid_date"
                                                                   value="{{date('d-m-Y', strtotime($licences->valid_date))}}"
                                                                   data-target="#datepicker-valid_date"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5 class="mb-4"><strong>Last Access Time</strong></h5>
                                                    <div class="mb-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Select Date" id="datepicker-last_access"
                                                                   data-toggle="datetimepicker" name="last_access_time"
                                                                   value="{{date('d-m-Y', strtotime($licences->last_access_time))}}"
                                                                   data-target="#datepicker-last_access"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Version</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Version"
                                                       name="version" value="{{$licences->version}}" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Select Version Name</label>
                                            <div class="col-md-6">
                                                <select class="form-control" name="version_name"
                                                        value="{{$licences->version_name}}">
                                                    <option value="Super Shop">Super Shop</option>
                                                    <option value="V4.O">V4.O</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">License Fee</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="License Fee"
                                                       name="license_fee" value="{{$licences->license_fee}}" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Service Charge</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Service Charge"
                                                       name="service_charge" value="{{$licences->service_charge}}"
                                                       required>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success px-5">Save</button>
                                    </form>
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
                $('#datepicker-valid_date').datetimepicker({
                    icons: {
                        time: 'fa fa-clock-o',
                        date: 'fa fa-calendar',
                        up: 'fa fa-arrow-up',
                        down: 'fa fa-arrow-down',
                        previous: 'fa fa-arrow-left',
                        next: 'fa fa-arrow-right',
                    },
                    format: 'LL',
                })

                $('#datepicker-last_access').datetimepicker({
                    icons: {
                        time: 'fa fa-clock-o',
                        date: 'fa fa-calendar',
                        up: 'fa fa-arrow-up',
                        down: 'fa fa-arrow-down',
                        previous: 'fa fa-arrow-left',
                        next: 'fa fa-arrow-right',
                    },
                    format: 'LL',
                })
            })
        })(jQuery)

        app.controller('myCtrl', function ($scope, $http) {
            // console.log("ok");

            $scope.serial_no={{$licences->serial_no}}
            $scope.license_no={{$licences->license_no}}

            $scope.generateLicence = function () {
                //console.log("Click"+$scope.serial_no);

                $http.get("/admin/generate/" + $scope.serial_no)
                    .then(function (response) {

                        $scope.license_no = response.data;
                        // console.log($scope.license_no);
                    });

            }

        });
    </script>




@endsection
