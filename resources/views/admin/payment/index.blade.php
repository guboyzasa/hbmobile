@extends('layouts.master')

@section('title')
ช่องทางชำระเงิน
| Admin - HB Mobile Services
@endsection


@section('content')
<div class="page-title-box d-sm-flex align-items-center justify-content-between">
    <h4 class="mb-sm-0 font-size-18">ช่องทางชำระเงิน</h4>
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            Dashboard
            <li class="breadcrumb-item"></li>
            <li class="breadcrumb-item active">ช่องทางชำระเงิน</li>
        </ol>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">ช่องทางชำระเงิน</h4>
        <br>
        <div class="col-xl-12">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card mini-stats-wid bg-success shadow-lg" style="border-radius: 5px">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p style="font-size: 1.2rem;color:white">นายรชต วันเทาแก้ว</p>
                                            <h2 class="mb-0" style="color: white">051-8-71549-6<i
                                                    class="mdi mdi-chevron-up ms-1 text-white"></i></h2>
                                        </div>

                                        <div class="mini-stat-icon avatar-md rounded-circle align-self-center">
                                            <span class="avatar-title">
                                                <img src="{{ URL::asset ('assets/dist/bank/kbank.png') }}" height="75px">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card mini-stats-wid bg-info shadow-lg" style="border-radius: 5px">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p style="font-size: 1.2rem;color:white">นายรชต วันเทาแก้ว</p>
                                            <h2 class="mb-0" style="color: white">788-0-16835-2<i
                                                    class="mdi mdi-chevron-up ms-1 text-white"></i></h2>
                                        </div>

                                        <div class="mini-stat-icon avatar-md rounded-circle align-self-center">
                                            <span class="avatar-title">
                                                <img src="{{ URL::asset ('assets/dist/bank/ktb.png') }}" height="75px">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card mini-stats-wid shadow-lg" style="background-color: #6f42c1;border-radius: 5px">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p style="font-size: 1.2rem;color:white">นายรชต วันเทาแก้ว</p>
                                            <h2 class="mb-0" style="color: white">808-2-70209-0<i
                                                    class="mdi mdi-chevron-up ms-1 text-white"></i></h2>
                                        </div>

                                        <div class="mini-stat-icon avatar-md rounded-circle align-self-center">
                                            <span class="avatar-title">
                                                <img src="{{ URL::asset ('assets/dist/bank/scb.png') }}" height="75px">
                                            </span>
                                        </div>
                                    </div>
                                </div>
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

@endsection