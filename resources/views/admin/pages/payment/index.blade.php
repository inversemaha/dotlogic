@extends('layouts.admin')

@section('content')

    <div class="cui__layout__content" ng-controller="pymtCtrl" >
        <div class="cui__utils__content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cui__utils__heading">
                        <strong class="text-uppercase font-size-16">Payment History Page</strong>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                @include('includes.error_mesage')
                                <div class="card-body">
                                    <form action="/admin/payment/store" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Company Name</label>
                                            <div class="col-md-6">
                                                <select class="form-control" name="client_id"
                                                        value="{{$cmpName[0]->company_name}}">
                                                    @foreach($cmpName as $cmp)
                                                    <option value="{{$cmp->id}}">{{$cmp->company_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label"></label>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <h5 class="mb-4"><strong> Payment Date</strong></h5>
                                                    <div class="mb-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Payment Date" id="datepicker-payment_date"
                                                                   data-toggle="datetimepicker" name="payment_date" data-target="#datepicker-payment_date" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h5 class="mb-4"><strong>From Date</strong></h5>
                                                    <div class="mb-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="From Date" id="datepicker-from_date"
                                                                   data-toggle="datetimepicker" name="from_date" data-target="#datepicker-from_date" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h5 class="mb-4"><strong>To Date</strong></h5>
                                                    <div class="mb-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="To Date" id="datepicker-to_date"
                                                                   data-toggle="datetimepicker" name="to_date" data-target="#datepicker-to_date" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Number Of Month</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Number Of Month"
                                                        ng-model="number_of_month" name="number_of_month" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Amount</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Amount"
                                                       ng-keyup="sumAmount()" ng-model="amount" name="amount" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Subtotal</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Subtotal"
                                                       ng-model="subtotal" name="subtotal" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Discount</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Discount"
                                                       ng-keyup="calculateTota()" ng-model="discount" name="discount" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Total</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Total"
                                                       ng-model="Total" name="Total" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Comment</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Comment"
                                                       name="comment" required>
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
        ; (function ($) {
            'use strict'
            $(function () {
                $('#datepicker-payment_date').datetimepicker({
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

                $('#datepicker-from_date').datetimepicker({
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

                $('#datepicker-to_date').datetimepicker({
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

        app.controller('pymtCtrl',function($scope){

            $scope.sumAmount= function (){
                $scope.subtotal = $scope.number_of_month * $scope.amount;
            }
            $scope.calculateTota= function (){
                $scope.Total = $scope.subtotal - $scope.discount;
            }

        });

    </script>




@endsection
