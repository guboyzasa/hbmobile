@extends('layouts.master')

@section('title')
@lang('translation.Dashboards')
@endsection

@section('content')
<div class="card" style="border-radius: 5px">
    <div class="card-body">
        <div class="col-xl-12 p-4 bg-primary bg-gradient shadow-sm" style="border-radius: 5px">
            <div style="text-align: right;color:black" id="clock" onload="currentTime()"></div>
            @if (Auth::user()->is_super_admin == 1)
            <h2 class="text-white">Welcome to SuperAdmin !</h2>
            @elseif (Auth::user()->is_super_admin == 0)
            <h2 class="text-white">Welcome to Admin !</h2>
            @endif
        </div>
    </div>
</div>
<div class="container">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-4">
                <a href="{{ route('admin.warranty.index') }}">
                <div class="card mini-stats-wid bg-warning shadow-lg" style="border-radius: 5px">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                {{-- <p class="text-muted fw-medium">ลงทะเบียนประกันสินค้า</p> --}}
                                <h2 class="mb-0" style="color: white">ลงทะเบียนประกันสินค้า</h2>
                            </div>

                            <div class="mini-stat-icon avatar-sm rounded-circle align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx-plus-medical font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-4">
                <a href="{{ route('admin.repair.index') }}">
                <div class="card mini-stats-wid bg-danger shadow-lg" style="border-radius: 5px">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                {{-- <p class="text-muted fw-medium">ลงทะเบียนประกันงานซ่อม</p> --}}
                                <h2 class="mb-0" style="color: white">ลงทะเบียนงานซ่อม</h2>
                            </div>

                            <div class="mini-stat-icon avatar-sm rounded-circle align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx-plus-medical font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            @if (Auth::user()->is_super_admin == 1)
                <div class="col-xl-4">
                    <a href="{{ route('admin.onsite.index') }}">
                    <div class="card mini-stats-wid bg-info shadow-lg" style="border-radius: 5px">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    {{-- <p class="text-muted fw-medium">ลงทะเบียนประกันงานซ่อม</p> --}}
                                    <h2 class="mb-0" style="color: white">ลงทะเบียนงานติดตั้ง</h2>
                                </div>

                                <div class="mini-stat-icon avatar-sm rounded-circle align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-plus-medical font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            @endif
        </div>
    </div>
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
            @if (Auth::user()->is_super_admin == 1)
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
            @endif
        </div>
    </div>
    <div class="col-xl-12">
        <div class="row">
        @if (Auth::user()->is_super_admin == 1)
            <div class="col-xl-2">
                <div class="card mini-stats-wid shadow-lg" style="border-radius: 5px">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                 <p class="text-muted fw-medium">ลูกค้า</p>
                                <h6 class="mb-0">ทั้งหมด<i
                                        class="mdi mdi-chevron-up ms-1 text-success"></i></h6>
                            </div>

                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    {{$countCustomer}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-xl-2">
                    <div class="card mini-stats-wid shadow-lg" style="border-radius: 5px">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted fw-medium">งานซ่อม</p>
                                    <h6 class="mb-0">ทั้งหมด<i
                                            class="mdi mdi-chevron-up ms-1 text-success"></i></h6>
                                </div>

                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        {{$countRepair}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="card mini-stats-wid shadow-lg" style="border-radius: 5px">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted fw-medium">งานติดตั้ง</p>
                                    <h6 class="mb-0">ทั้งหมด<i
                                            class="mdi mdi-chevron-up ms-1 text-success"></i></h6>
                                </div>
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        {{$countOnsite}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="card mini-stats-wid shadow-lg" style="border-radius: 5px">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted fw-medium">กำลังซ่อม</p>
                                    <h6 class="mb-0">ทั้งหมด<i
                                            class="mdi mdi-chevron-up ms-1 text-success"></i></h6>
                                </div>
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        {{$countRepair1}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="card mini-stats-wid shadow-lg" style="border-radius: 5px">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted fw-medium">ซ่อมเสร็จแล้ว</p>
                                    <h6 class="mb-0">ทั้งหมด<i
                                            class="mdi mdi-chevron-up ms-1 text-success"></i></h6>
                                </div>
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        {{$countRepair2}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="card mini-stats-wid shadow-lg" style="border-radius: 5px">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted fw-medium">ซ่อมไม่เสร็จ</p>
                                    <h6 class="mb-0">ทั้งหมด<i
                                            class="mdi mdi-chevron-up ms-1 text-success"></i></h6>
                                </div>
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        {{$countRepair3}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
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