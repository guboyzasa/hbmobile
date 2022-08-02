@extends('layouts.master')

@section('title')
@lang('translation.Dashboards')
@endsection

@section('content')

<div class="container pb-5">
    <div class="alert alert-warning border-warning">
        <h5><strong class="text-primary">ประกาศสำคัญ!</strong></h5><b> 1.อย่าปล่อยงานซ่อมให้ตกค้าง</b><p class="text-danger font-weight-bold"><strong>2.และอย่าปล่อยออเดอร์ให้ตกค้าง</strong></p>
        <div style="text-align: right"> 
            <div class="btn bg-success bg-soft">
                ออเดอร์ที่ต้องจัดการ <span class="badge badge-light">{{ number_format($sumOrder) }}</span>
            </div>
            <div class="btn bg-danger bg-soft">
                กำลังดำเนินการซ่อม <span class="badge badge-light">{{ number_format($countRepair1+$countRepair3) }}</span>
            </div>
        </div>
    </div>
    <h4>ยินดีต้อนรับ! <span class="text-primary">
        @if (Auth::user()->is_super_admin == 1)
        SuperAdmin
        @elseif (Auth::user()->is_super_admin == 0)
        UserAdmin
        @endif
    </span></h4>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body"><span>ออเดอร์ทั้งหมด</span>
                    <div class="d-flex justify-content-between">
                        <div class="text-info"><i class="fas fa-2x fa-shopping-cart"></i></div>
                        <h3 class="mb-0 text-success">{{ number_format($sumOrderAll) }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body"><span>สมาชิก</span>
                    <div class="d-flex justify-content-between">
                        <div class="text-info"><i class="fas fa-2x fa-users"></i>
                        </div>
                        <h3 class="mb-0 text-info">{{ number_format($countCustomer) }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body"><span>ยอดรวมทั้งสิ้น</span>
                    <div class="d-flex justify-content-between">
                        <div class="text-info"><i class="fas fa-2x fa-baht-sign"></i></div>
                        <h3 class="mb-0">{{ number_format($sumRepairPrice+$sumRepairShipping+$sumOnsites+$sumOrder) }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <h5 >งานซ่อมวันนี้</h5>
    <table class="table table-info table-bordered table-hover">
        <thead>
            <tr>
                <th colspan="2">วันที่รับเครื่อง</th>
                <th>ชื่อ</th>
                <th>รายการ</th>
                <th>ราคารวม</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="8" class="text-center">ยังไม่ออกผล</td>
            </tr>
        </tbody>
    </table> --}}
</div>


{{-- <div class="card" style="border-radius: 5px">
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
                                <h6 class="mb-0">ทั้งหมด<i class="mdi mdi-chevron-up ms-1 text-success"></i></h6>
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
                                <h6 class="mb-0">ทั้งหมด<i class="mdi mdi-chevron-up ms-1 text-success"></i></h6>
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
                                <h6 class="mb-0">ทั้งหมด<i class="mdi mdi-chevron-up ms-1 text-success"></i></h6>
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
                <div class="card mini-stats-wid bg-warning bg-soft shadow-lg" style="border-radius: 5px">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">กำลังซ่อม</p>
                                <h6 class="mb-0">ทั้งหมด<i class="mdi mdi-chevron-up ms-1 text-success"></i></h6>
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
                <div class="card mini-stats-wid bg-success bg-soft shadow-lg" style="border-radius: 5px">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">ซ่อมเสร็จแล้ว</p>
                                <h6 class="mb-0">ทั้งหมด<i class="mdi mdi-chevron-up ms-1 text-success"></i></h6>
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
                <div class="card mini-stats-wid bg-danger bg-soft shadow-lg" style="border-radius: 5px">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">ซ่อมไม่เสร็จ</p>
                                <h6 class="mb-0">ทั้งหมด<i class="mdi mdi-chevron-up ms-1 text-success"></i></h6>
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
</div> --}}

@endsection

@section('script')

<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>

@endsection