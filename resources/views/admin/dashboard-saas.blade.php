@extends('layouts.master')

@section('title')
Dashboard | Admin - HB Mobile Services
@endsection

@section('content')
<div class="page-title-box d-sm-flex align-items-center justify-content-between">
    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
</div>

<div class="container pb-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body"><span>จำนวนออเดอร์ทั้งหมด</span>
                    <div class="d-flex justify-content-between">
                        <div class="text-info"><i class="fas fa-2x fa fa-shopping-cart"></i>
                        </div>
                        <h3 class="mb-0 text-info">{{ number_format($sumOrderAll) }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body"><span>จำนวนลูกค้าที่ยังไม่เข้าระบบ</span>
                    <div class="d-flex justify-content-between">
                        <div class="text-info"><i class="fas fa-2x fa fa-user"></i>
                        </div>
                        <h3 class="mb-0 text-info">{{ number_format($countUserCus) }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body"><span>จำนวนลูกค้าเข้าสู่ระบบแล้ว</span>
                    <div class="d-flex justify-content-between">
                        <div class="text-info"><i class="fas fa-2x fa fa-user-check"></i>
                        </div>
                        <h3 class="mb-0 text-info">{{ number_format($countUserCustomer) }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body"><span>ลงทะเบียนประกัน</span>
                    <div class="d-flex justify-content-between">
                        <div class="text-info"><i class="fas fa-2x fa fa-shield-halved"></i></div>
                        <h3 class="mb-0 text-success">{{ number_format($countRegisterWarranty) }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body"><span>ลงทะเบียนงานติดตั้ง</span>
                    <div class="d-flex justify-content-between">
                        <div class="text-info"><i class="fas fa-2x fa fa-gavel"></i></div>
                        <h3 class="mb-0 text-success">{{ number_format($countOnsite) }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body"><span>ลงทะเบียนงานซ่อม</span>
                    <div class="d-flex justify-content-between">
                        <div class="text-info"><i class="fas fa-2x fa fa-wrench"></i></div>
                        <h3 class="mb-0 text-success">{{ number_format($countRegisterRepair) }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body"><span>ยอดขายรวมทั้งสิ้น</span>
                    <div class="d-flex justify-content-between">
                        <div class="text-info"><i class="fas fa-2x fa-baht-sign"></i></div>
                        <h3 class="mb-0">{{ number_format($sumOrder) }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body"><span>ยอดซ่อมรวมทั้งสิ้น</span>
                    <div class="d-flex justify-content-between">
                        <div class="text-info"><i class="fas fa-2x fa-baht-sign"></i></div>
                        <h3 class="mb-0">{{ number_format($sumRepairPrice + $sumRepairShipping) }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body"><span>ยอดติดตั้งรวมทั้งสิ้น</span>
                    <div class="d-flex justify-content-between">
                        <div class="text-info"><i class="fas fa-2x fa-baht-sign"></i></div>
                        <h3 class="mb-0">{{ number_format($sumOnsites) }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="text-dark">
        <label><strong style="font-size: 15px">รายการซ่อมล่าสุด</strong></label>
    </div>
    <table class="table table-info table-bordered table-hover" id="repair_table">
        <thead>
            <tr>
                <th>วันที่รับเครื่อง</th>
                <th>เบอร์โทร</th>
                <th>ชื่อลูกค้า</th>
                <th>รายการซ่อม</th>
                <th>ราคารวม</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table> --}}


{{-- <div class="col-xl-12">
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
                                    <p class="text-muted fw-medium">จำนวนลูกค้าเข้าสู่ระบบแล้ว</p>
                                    <h4 class="mb-0">{{ number_format($countUserCustomer) }} คน<i
                                            class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                </div>

                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-user-check font-size-24"></i>
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
            </div>
        </div>
    </div>
</div><!-- col 2 -->
<div class="col-xl-12">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <a href="{{ route('admin.repair.index') }}">
                    <div class="card mini-stats-wid shadow-lg" style="border-radius: 5px">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted fw-medium">ลงทะเบียนงานติดตั้ง</p>
                                    <h4 class="mb-0">{{ number_format($countOnsite) }} คน<i
                                            class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                </div>

                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="ti ti-axe font-size-24"></i>
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
                                    <p class="text-muted fw-medium">จำนวนลูกค้าที่ยังไม่เข้าระบบ</p>
                                    <h4 class="mb-0">{{ number_format($countUserCus) }} คน<i
                                            class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                </div>

                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-user-x font-size-24"></i>
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
                                    <p class="text-muted fw-medium">ยอดติดตั้งรวมทั้งสิ้น</p>
                                    <h4 class="mb-0">฿ {{ number_format($sumOnsites) }}
                                        บาท<i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                </div>
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-credit-card font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div><!-- col 3 --> --}}

<div class="container">
    <div class="col-12 p-4 card" style="border-radius: 5px">
        <div class="row">
            <div class="col-xl-12">
                <div class="text-dark">
                    <label><strong style="font-size: 15px">รายการซ่อมล่าสุด</strong></label>
                </div>
                <table class="table dt-responsive nowrap w-100" id="repair_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>เบอร์โทร</th>
                            <th>ชื่อลูกค้า</th>
                            <th>รายการซ่อม</th>
                            <th>ราคารวม</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div><!-- end row -->
    </div>
</div>

<div class="container">
    <div class="col-12 p-4 card" style="border-radius: 5px">
        <div class="row">
            <div class="col-xl-12">
                <div class="text-dark">
                    <label><strong style="font-size: 15px">รายการติดตั้งล่าสุด</strong></label>
                </div>
                <table class="table dt-responsive nowrap w-100" id="onsite_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>เบอร์โทร</th>
                            <th>ชื่อลูกค้า</th>
                            <th>รายการติดตั้ง</th>
                            <th>ราคาติดตั้ง</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div><!-- end row -->
    </div>
</div>
</div>
@endsection
@section('script')

<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Saas dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/saas-dashboard.init.js') }}"></script>

<script>
    $(document).ready(function () {
        var repair = '';
        var onsite = '';
        } );
        
        $('#repair_table').ready(function() {

            repair = $('#repair_table').DataTable({
                "iDisplayLength": 3,
                "processing": false,
                "serverSide": false,
                "info": false,
                "searching": true,
                "responsive": true,
                "bFilter": false,
                "destroy": true,
                "oLanguage": {
                    // "sSearch": "ค้นหา :",
                    // "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                    "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                    // "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                    "aaSorting" :[[0,'desc']],
                "oPaginate": {
                "sPrevious":"<<",
                "sNext":">>",
                }
            },
                "order": [
                    [0, "desc"]
                ],
                "ajax": {
                    "url": `{{ route('admin.repair.show') }}`,
                    "method": "POST",
                    "data": {
                        "_token": "{{ csrf_token() }}",
                    },
                },
                'columnDefs': [{
                    "targets": [0, 1, 2, 3, 4],
                }, ],
                "columns": [
                    {
                        "data": "repair_start_date",
                        "render": function(data, type, full) {
                            return moment(data).format('MM-DD-YYYY');
                        }
                    },
                    {
                        "data": "customer",
                        "render": function(data, type, full) {
                            return data ? data.phone :
                                '<span class="badge badge-pill badge-soft-danger font-size-11"> เบอร์โทรถูกลบ </span>';

                        }
                    },
                    {
                        "data": "customer",
                        "render": function(data, type, full) {
                            return data ? data.name :
                                '<span class="badge badge-pill badge-soft-danger font-size-11"> ลูกค้าถูกลบ </span>';

                        }
                    },
                    {
                        "data": "model",
                        "render": function(data, type, full) {
                            return full.model + " x " + full.detail;
                        }
                    },

                    {
                        "data": "price",
                        "render": function(data, type, full) {
                            let sum = full.price + full.shipping_price;
                            return (sum.toLocaleString('en-US'));
                        }
                    },
                ],
            });
        });

        $('#onsite_table').ready(function() {

            onsite = $('#onsite_table').DataTable({
                "iDisplayLength": 3,
                "processing": false,
                "serverSide": false,
                "info": false,
                "searching": true,
                "responsive": true,
                "bFilter": false,
                "destroy": true,
                "oLanguage": {
                    // "sSearch": "ค้นหา :",
                    // "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                    "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                    // "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                    "aaSorting" :[[0,'desc']],
                "oPaginate": {
                "sPrevious":"<<",
                "sNext":">>",
                }
            },
                "order": [
                    [0, "desc"]
                ],
                "ajax": {
                    "url": `{{ route('admin.onsite.show') }}`,
                    "method": "POST",
                    "data": {
                        "_token": "{{ csrf_token() }}",
                    },
                },
                'columnDefs': [{
                    "targets": [0, 1, 2, 3, 4],
                }, ],
                "columns": [
                    {
                        "data": "onsite_start_date",
                        "render": function(data, type, full) {
                            return moment(data).format('MM-DD-YYYY');
                        }
                    },
                    {
                        "data": "customer",
                        "render": function(data, type, full) {
                            return data ? data.phone :
                                '<span class="badge badge-pill badge-soft-danger font-size-11"> เบอร์โทรถูกลบ </span>';

                        }
                    },
                    {
                        "data": "customer",
                        "render": function(data, type, full) {
                            return data ? data.name :
                                '<span class="badge badge-pill badge-soft-danger font-size-11"> ลูกค้าถูกลบ </span>';

                        }
                    },

                    {
                        "data": "model",
                        "render": function(data, type, full) {
                            return full.model + " x " + full.detail;
                        }
                    },

                    // {
                    //     "data": "price",
                    // },
                    {
                        "data": "price",
                        "render": function(data, type, full) {
                            let sum = full.price;
                            return (sum.toLocaleString('en-US'));
                        }
                    },
                ],
            });
        });

</script>
@endsection