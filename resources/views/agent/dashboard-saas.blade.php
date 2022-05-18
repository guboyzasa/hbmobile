@extends('layouts-agent.master')

@section('title') Dashboard | Agent - HB Mobile Services  @endsection

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="row">

                <div class="col-sm-4">
                    <a href="{{ route('agent-member.warranty.index') }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                        <i class="bx bx-battery"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">ลงทะเบียนรับประกัน</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4> {{ number_format($countRegisterWarranty) }}  ชิ้น<i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                       
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('agent-member.customer.index') }}">
                    <div class="card">
                        <div class="card-body">
                          
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                            <i class="bx bx-package"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">ลูกค้า</h5>
                                </div>
                                <div class="text-muted mt-4">
                                    <h4>{{ number_format($countCustomer) }} คน<i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                            
                                </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="#">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                        <i class="bx bx-archive-in"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">ลูกค้าที่เข้าสู่ระบบแล้ว</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4> {{ number_format($countUserCustomer) }} คน<i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                           
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

            

            </div>
            <!-- end row -->
        </div>
    </div>


@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Saas dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/saas-dashboard.init.js') }}"></script>
@endsection
