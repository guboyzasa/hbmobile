@extends('layouts.master')

@section('title')
@lang('translation.Dashboards')
@endsection

@section('content')
<div class="card" style="border-radius: 5px">
    <div class="card-body">
        <div class="col-xl-12 p-4 bg-primary bg-soft shadow-sm" style="border-radius: 5px">
            <div style="text-align: right;color:black" id="clock" onload="currentTime()"></div>
            <h2 class="text-primary">Welcome to admin !</h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-4">
                <div class="card mini-stats-wid shadow-lg" style="border-radius: 5px">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">จำนวนออเดอร์</p>
                                <h4 class="mb-0">{{ number_format($countOrder) }} ออเดอร์<i
                                        class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                            </div>

                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx-package font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card mini-stats-wid shadow-lg" style="border-radius: 5px">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">ยอดขายรวมทั้งสิ้น</p>
                                <h4 class="mb-0">฿ {{ number_format($sumOrder) }} บาท<i
                                        class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                            </div>

                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx-store font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card mini-stats-wid shadow-lg" style="border-radius: 5px">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">ยอดซ่อมรวมทั้งสิ้น</p>
                                <h4 class="mb-0">฿ {{ number_format($sumRepairPrice + $sumRepairShipping) }} บาท<i
                                        class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                            </div>
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx-dollar font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>

<!-- time clock -->
<script>
    function currentTime() {
            let date = new Date();
            let hh = date.getHours();
            let mm = date.getMinutes();
            let ss = date.getSeconds();
            let session = "AM";

            if (hh == 0) {
                hh = 12;
            }
            if (hh > 12) {
                hh = hh - 12;
                session = "PM";
            }

            hh = (hh < 10) ? "0" + hh : hh;
            mm = (mm < 10) ? "0" + mm : mm;
            ss = (ss < 10) ? "0" + ss : ss;

            let time = hh + ":" + mm + ":" + ss + " " + session;

            document.getElementById("clock").innerText = time;
            let t = setTimeout(function() {
                currentTime()
            }, 1000);
        }
        currentTime();
</script>
@endsection