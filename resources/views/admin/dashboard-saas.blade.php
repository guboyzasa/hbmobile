@extends('layouts.master')

@section('title')
Dashboard | Admin - HB Mobile Services
@endsection

@section('content')
<div class="page-title-box d-sm-flex align-items-center justify-content-between">
    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
    {{-- <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div> --}}
</div>
<div class="card" style="border-radius: 5px">
    <div class="card-body">
        <div class="col-12 p-4 bg-primary bg-gradient shadow-sm" style="border-radius: 5px">
            <div style=" text-align: right;color:black" id="clock" onload="currentTime()"></div>
            <h2 class="text-white">HB MOBILE Dashboard !</h2>
        </div>
    </div>
</div>
<div class="col-xl-12">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <a href="{{ route('admin.warranty.index') }}">
                    <div class="card mini-stats-wid shadow-lg" style="border-radius: 5px">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted fw-medium">ลงทะเบียนรับประกัน</p>
                                    <h4 class="mb-0">{{ number_format($countRegisterWarranty) }} ชิ้น<i
                                            class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                </div>
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-task font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4">
                <a href="{{ route('admin.order.index') }}">
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
                </a>
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
        </div>
    </div>
</div><!-- col 1 -->
<div class="col-xl-12">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <a href="{{ route('admin.repair.index') }}">
                    <div class="card mini-stats-wid shadow-lg" style="border-radius: 5px">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted fw-medium">ลงทะเบียนงานซ่อม</p>
                                    <h4 class="mb-0">{{ number_format($countRegisterRepair) }} คน<i
                                            class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                </div>

                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-wrench font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4">
                <a href="{{ route('admin.customer.index') }}">
                    <div class="card mini-stats-wid shadow-lg" style="border-radius: 5px">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted fw-medium">จำนวนลูกค้า</p>
                                    <h4 class="mb-0">{{ number_format($countCustomer) }} คน<i
                                            class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                </div>

                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-user font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4">
                <a href="#">
                    <div class="card mini-stats-wid shadow-lg" style="border-radius: 5px">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted fw-medium">ยอดซ่อมรวมทั้งสิ้น</p>
                                    <h4 class="mb-0">฿ {{ number_format($sumRepairPrice + $sumRepairShipping) }}
                                        บาท<i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                </div>
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-dollar font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div><!-- col 2 -->

<div class="container">
    <div class="col-12 p-4 card" style="border-radius: 5px">
        <div class="row">
            {{-- <div class="col-xl-3">
                <div class="card mini-stats-wid shadow-lg" style="border-radius: 5px">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">ยอดซ่อมรวมทั้งสิ้น</p>
                                <h4 class="mb-0">฿ {{ number_format($sumRepairPrice + $sumRepairShipping) }}
                                    บาท<i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                            </div>
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx-archive-in font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-xl-12">
                <div class="text-dark">
                    <label><strong style="font-size: 15px">รายการซ่อมล่าสุด</strong></label>
                        </div>
                        <table class="table dt-responsive nowrap w-100" id="repair_table">
                            <thead>
                                <tr class="table-secondary">
                                    <th>เบอร์โทร</th>
                                    <th>ชื่อลูกค้า</th>
                                    <th>รายการซ่อม</th>
                                    <th>ราคา</th>
                                    <th>ค่าส่ง</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($repairs as $row)
                                    <td>{{$row->customer->phone}}</td>
                                    <td>{{$row->customer->name}}</td>
                                    <td>{{$row->model}} x {{$row->detail}}</td>
                                    <td>{{$row->price}}</td>
                                    <td>{{$row->shipping_price}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
        </div><!-- end row -->
    </div>
</div>
@endsection
@section('script')

<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Saas dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/saas-dashboard.init.js') }}"></script>

<!-- Saas dashboard time -->
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

        $(document).ready(function () {
            var simple = $('#repair_table').DataTable();
            });
</script>
@endsection