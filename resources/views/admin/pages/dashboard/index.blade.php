@extends('layouts.admin')

@section('content')

    <div class="cui__layout__content">

        <div class="cui__utils__content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cui__utils__heading">
                        <strong class="text-uppercase font-size-16">Today Statistics</strong>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body position-relative overflow-hidden">
                                    <div class="font-size-36 font-weight-bold text-dark mb-n2">{{$licenceCount}}</div>
                                    <div class="text-uppercase">Licences</div>
                                    <div class="kit__c11__chartContainer">
                                        <div class="kit__c11__chart ct-hidden-points"></div>
                                    </div>
                                </div>
                                <script>
                                    /////////////////////////////////////////////////////////////////////////////////////////
                                    // "Chart Widget 11" module scripts

                                    ;(function ($) {
                                        'use strict'
                                        $(function () {
                                            new Chartist.Line(
                                                '.kit__c11__chart',
                                                {
                                                    series: [
                                                        {
                                                            className: 'ct-series-a',
                                                            data: [2, 11, 8, 14, 18, 20, 26],
                                                        },
                                                    ],
                                                },
                                                {
                                                    width: '120px',
                                                    height: '107px',

                                                    showPoint: true,
                                                    showLine: true,
                                                    showArea: true,
                                                    fullWidth: true,
                                                    showLabel: false,
                                                    axisX: {
                                                        showGrid: false,
                                                        showLabel: false,
                                                        offset: 0,
                                                    },
                                                    axisY: {
                                                        showGrid: false,
                                                        showLabel: false,
                                                        offset: 0,
                                                    },
                                                    chartPadding: 0,
                                                    low: 0,
                                                    plugins: [Chartist.plugins.tooltip()],
                                                },
                                            )
                                        })
                                    })(jQuery)
                                </script>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body position-relative overflow-hidden">
                                    <div class="font-size-36 font-weight-bold text-dark mb-n2">{{$paymentHisCount}}</div>
                                    <div class="text-uppercase">Payments</div>
                                    <div class="kit__c11-1__chartContainer">
                                        <div class="kit__c11-1__chart ct-hidden-points"></div>
                                    </div>
                                </div>
                                <script>
                                    /////////////////////////////////////////////////////////////////////////////////////////
                                    // "Chart Widget 11-1" module scripts

                                    ;(function ($) {
                                        'use strict'
                                        $(function () {
                                            new Chartist.Line(
                                                '.kit__c11-1__chart',
                                                {
                                                    series: [
                                                        {
                                                            className: 'ct-series-a',
                                                            data: [20, 80, 67, 120, 132, 66, 97],
                                                        },
                                                    ],
                                                },
                                                {
                                                    width: '120px',
                                                    height: '107px',

                                                    showPoint: true,
                                                    showLine: true,
                                                    showArea: true,
                                                    fullWidth: true,
                                                    showLabel: false,
                                                    axisX: {
                                                        showGrid: false,
                                                        showLabel: false,
                                                        offset: 0,
                                                    },
                                                    axisY: {
                                                        showGrid: false,
                                                        showLabel: false,
                                                        offset: 0,
                                                    },
                                                    chartPadding: 0,
                                                    low: 0,
                                                    plugins: [Chartist.plugins.tooltip()],
                                                },
                                            )
                                        })
                                    })(jQuery)
                                </script>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body position-relative overflow-hidden">
                                    <div class="font-size-36 font-weight-bold text-dark mb-n2">{{$usersCount}}</div>
                                    <div class="text-uppercase">Users</div>
                                    <div class="kit__c11-2__chartContainer">
                                        <div class="kit__c11-2__chart ct-hidden-points"></div>
                                    </div>
                                </div>
                                <script>
                                    /////////////////////////////////////////////////////////////////////////////////////////
                                    // "Chart Widget 11-2" module scripts

                                    ;(function ($) {
                                        'use strict'
                                        $(function () {
                                            new Chartist.Line(
                                                '.kit__c11-2__chart',
                                                {
                                                    series: [
                                                        {
                                                            className: 'ct-series-a',
                                                            data: [42, 40, 80, 67, 84, 20, 97],
                                                        },
                                                    ],
                                                },
                                                {
                                                    width: '120px',
                                                    height: '107px',

                                                    showPoint: true,
                                                    showLine: true,
                                                    showArea: true,
                                                    fullWidth: true,
                                                    showLabel: false,
                                                    axisX: {
                                                        showGrid: false,
                                                        showLabel: false,
                                                        offset: 0,
                                                    },
                                                    axisY: {
                                                        showGrid: false,
                                                        showLabel: false,
                                                        offset: 0,
                                                    },
                                                    chartPadding: 0,
                                                    low: 0,
                                                    plugins: [Chartist.plugins.tooltip()],
                                                },
                                            )
                                        })
                                    })(jQuery)
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cui__utils__heading">
                        <strong>LAST MONTH STATISTICS</strong>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="font-weight-bold text-dark font-size-24">
                                        78,367
                                    </div>
                                    <div>Total Sales</div>
                                    <div class="kit__c4__chart height-200 ct-hidden-points"></div>

                                    <script>
                                        /////////////////////////////////////////////////////////////////////////////////////////
                                        // "Chart Widget 4" module scripts

                                        ;(function ($) {
                                            'use strict'
                                            $(function () {
                                                /////////////////////////////////////////////////////////////////////////////////////////
                                                new Chartist.Line(
                                                    '.kit__c4__chart',
                                                    {
                                                        "labels": [
                                                            "Jan",
                                                            "Feb",
                                                            "Mar",
                                                            "Apr",
                                                            "May",
                                                            "Jun"
                                                        ],
                                                        "series": [
                                                            {
                                                                "className": "ct-series-a",
                                                                "data": [
                                                                    2,
                                                                    5,
                                                                    4,
                                                                    5,
                                                                    7,
                                                                    5
                                                                ]
                                                            }
                                                        ]
                                                    },
                                                    {
                                                        chartPadding: {
                                                            right: 0,
                                                            left: 0,
                                                            top: 5,
                                                            bottom: 5,
                                                        },
                                                        fullWidth: true,
                                                        showPoint: true,
                                                        lineSmooth: true,
                                                        axisY: {
                                                            showGrid: false,
                                                            showLabel: false,
                                                            offset: 0,
                                                        },
                                                        axisX: {
                                                            showGrid: true,
                                                            showLabel: true,
                                                            offset: 20,
                                                        },
                                                        showArea: false,
                                                        plugins: [Chartist.plugins.tooltip()],
                                                    },
                                                )
                                                /////////////////////////////////////////////////////////////////////////////////////////
                                            })
                                        })(jQuery)
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="font-weight-bold text-dark font-size-24">
                                        +90%
                                    </div>
                                    <div>Sales Rise</div>
                                    <div class="kit__c4-1__chart height-200 ct-hidden-points"></div>

                                    <script>
                                        /////////////////////////////////////////////////////////////////////////////////////////
                                        // "Chart Widget 4-1" module scripts

                                        ;(function ($) {
                                            'use strict'
                                            $(function () {
                                                /////////////////////////////////////////////////////////////////////////////////////////
                                                new Chartist.Line(
                                                    '.kit__c4-1__chart',
                                                    {
                                                        "labels": [
                                                            "Jan",
                                                            "Feb",
                                                            "Mar",
                                                            "Apr",
                                                            "May",
                                                            "Jun"
                                                        ],
                                                        "series": [
                                                            {
                                                                "className": "ct-series-b",
                                                                "data": [
                                                                    1,
                                                                    5,
                                                                    2,
                                                                    5,
                                                                    4,
                                                                    7
                                                                ]
                                                            }
                                                        ]
                                                    },
                                                    {
                                                        chartPadding: {
                                                            right: 0,
                                                            left: 0,
                                                            top: 5,
                                                            bottom: 5,
                                                        },
                                                        fullWidth: true,
                                                        showPoint: true,
                                                        lineSmooth: true,
                                                        axisY: {
                                                            showGrid: false,
                                                            showLabel: false,
                                                            offset: 0,
                                                        },
                                                        axisX: {
                                                            showGrid: true,
                                                            showLabel: true,
                                                            offset: 20,
                                                        },
                                                        showArea: false,
                                                        plugins: [Chartist.plugins.tooltip()],
                                                    },
                                                )
                                                /////////////////////////////////////////////////////////////////////////////////////////
                                            })
                                        })(jQuery)
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="font-weight-bold text-dark font-size-24">
                                        900
                                    </div>
                                    <div>Completed</div>
                                    <div class="kit__c4-2__chart height-200 ct-hidden-points"></div>

                                    <script>
                                        /////////////////////////////////////////////////////////////////////////////////////////
                                        // "Chart Widget 4-2" module scripts

                                        ;(function ($) {
                                            'use strict'
                                            $(function () {
                                                /////////////////////////////////////////////////////////////////////////////////////////
                                                new Chartist.Line(
                                                    '.kit__c4-2__chart',
                                                    {
                                                        "labels": [
                                                            "Jan",
                                                            "Feb",
                                                            "Mar",
                                                            "Apr",
                                                            "May",
                                                            "Jun"
                                                        ],
                                                        "series": [
                                                            {
                                                                "className": "ct-series-j",
                                                                "data": [
                                                                    2,
                                                                    3,
                                                                    2,
                                                                    4,
                                                                    6,
                                                                    5
                                                                ]
                                                            }
                                                        ]
                                                    },
                                                    {
                                                        chartPadding: {
                                                            right: 0,
                                                            left: 0,
                                                            top: 5,
                                                            bottom: 5,
                                                        },
                                                        fullWidth: true,
                                                        showPoint: true,
                                                        lineSmooth: true,
                                                        axisY: {
                                                            showGrid: false,
                                                            showLabel: false,
                                                            offset: 0,
                                                        },
                                                        axisX: {
                                                            showGrid: true,
                                                            showLabel: true,
                                                            offset: 20,
                                                        },
                                                        showArea: false,
                                                        plugins: [Chartist.plugins.tooltip()],
                                                    },
                                                )
                                                /////////////////////////////////////////////////////////////////////////////////////////
                                            })
                                        })(jQuery)
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="font-weight-bold text-dark font-size-24">
                                        $78.62M
                                    </div>
                                    <div>Paid in Crypto</div>
                                    <div class="kit__c4-3__chart height-200 ct-hidden-points"></div>

                                    <script>
                                        /////////////////////////////////////////////////////////////////////////////////////////
                                        // "Chart Widget 4-3" module scripts

                                        ;(function ($) {
                                            'use strict'
                                            $(function () {
                                                /////////////////////////////////////////////////////////////////////////////////////////
                                                new Chartist.Line(
                                                    '.kit__c4-3__chart',
                                                    {
                                                        "labels": [
                                                            "Jan",
                                                            "Feb",
                                                            "Mar",
                                                            "Apr",
                                                            "May",
                                                            "Jun"
                                                        ],
                                                        "series": [
                                                            {
                                                                "className": "ct-series-d",
                                                                "data": [
                                                                    1,
                                                                    5,
                                                                    2,
                                                                    5,
                                                                    4,
                                                                    7
                                                                ]
                                                            }
                                                        ]
                                                    },
                                                    {
                                                        chartPadding: {
                                                            right: 0,
                                                            left: 0,
                                                            top: 5,
                                                            bottom: 5,
                                                        },
                                                        fullWidth: true,
                                                        showPoint: true,
                                                        lineSmooth: true,
                                                        axisY: {
                                                            showGrid: false,
                                                            showLabel: false,
                                                            offset: 0,
                                                        },
                                                        axisX: {
                                                            showGrid: true,
                                                            showLabel: true,
                                                            offset: 20,
                                                        },
                                                        showArea: false,
                                                        plugins: [Chartist.plugins.tooltip()],
                                                    },
                                                )

                                                /////////////////////////////////////////////////////////////////////////////////////////
                                            })
                                        })(jQuery)
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
