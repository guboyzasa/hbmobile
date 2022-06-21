@extends('layouts.master')

@section('title') @lang('translation.Dashboards') @endsection

@section('content')

<div class="media-body">
    <h3 class="media-heading">Welcome to admin !</h3>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="manual media">
            <div class="media-left media-middle">
                <i class='bx bxs-user-check' style='font-size:30px'></i>
            </div>
            <div class="media-body">
                <h2 class="media-heading">1. Ecommerce</h2>
                <p>เพิ่ม/แก้ไข สินค้า</p>
                <p>เพิ่ม/แก้ไข หมวดหมู่</p>
                <p>เพิ่ม/แก้ไข แบรนด์</p>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-4">
            <div class="manual media">
                <div class="media-left media-middle">
                    <i class='bx bxs-user-check' style='font-size:30px'></i>
                </div>
                <div class="media-body">
                    <h2 class="media-heading">2. จัดการออเดอร์</h2>
                    <p>เพิ่ม/แก้ไข ออเดอร์</p>
                    
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-4">
                <div class="manual media">
                    <div class="media-left media-middle">
                        <i class='bx bxs-user-check' style='font-size:30px'></i>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">3. จัดการลูกค้า</h2>
                        <p>เพิ่ม/แก้ไข ลูกค้า</p>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="manual media">
                        <div class="media-left media-middle">
                            <i class='bx bxs-user-check' style='font-size:30px'></i>
                        </div>
                        <div class="media-body">
                            <h2 class="media-heading">4. ลงทะเบียนประกัน</h2>
                            <p>เพิ่ม/แก้ไข ประกัน</p>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="manual media">
                            <div class="media-left media-middle">
                                <i class='bx bxs-user-check' style='font-size:30px'></i>
                            </div>
                            <div class="media-body">
                                <h2 class="media-heading">5. ลงทะเบียนงานซ่อม</h2>
                                <p>เพิ่ม/แก้ไข งานซ่อม</p>
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
@endsection
