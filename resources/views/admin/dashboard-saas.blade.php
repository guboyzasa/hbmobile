@extends('layouts.master')

@section('title') Dashboard | Admin - HB Mobile Services @endsection

@section('content')

    {{-- @component('components.breadcrumb')
        @slot('li_1') Dashboards @endslot
        @slot('title') Saas @endslot
    @endcomponent --}}

{{-- 
    <div class="row">
        <div class="col-xl-4">
            <div class="card bg-primary bg-soft">
                <div>
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p>HB MOBILE SERVICES Dashboard</p>

                                <ul class="ps-3 mb-0">
                                 
                                </ul>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                        <i class="bx bx-copy-alt"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Orders</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4>1,452 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                <div class="d-flex">
                                    <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span
                                        class="ms-2 text-truncate">From previous period</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                        <i class="bx bx-archive-in"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Revenue</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4>$ 28,452 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                <div class="d-flex">
                                    <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span
                                        class="ms-2 text-truncate">From previous period</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                        <i class="bx bx-purchase-tag-alt"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Average Price</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4>$ 16.2 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>

                                <div class="d-flex">
                                    <span class="badge badge-soft-warning font-size-12"> 0% </span> <span
                                        class="ms-2 text-truncate">From previous period</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div> --}}

    <div class="row">
        <div class="col-xl-12">
            <div class="row">

                <div class="col-sm-4">
                    <a href="{{ route('admin.warranty.index') }}">
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
                    <a href="{{ route('admin.order.index') }}">
                    <div class="card">
                        <div class="card-body">
                          
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                            <i class="bx bx-package"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">จำนวนออเดอร์</h5>
                                </div>
                                <div class="text-muted mt-4">
                                    <h4>{{ number_format($countOrder) }} ออเดอร์<i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                            
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
                                <h5 class="font-size-14 mb-0">ยอดขาย</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4>฿ {{ number_format($sumOrder) }}  บาท<i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                           
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

            

            </div>
            <!-- end row -->
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="row">

                <div class="col-sm-4">
                    <a href="{{ route('admin.customer.index') }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                        <i class="bx bx-user "></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">จำนวนลูกค้า</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4> {{  number_format($countCustomer)  }}  คน<i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                       
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('admin.customer.index') }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                        <i class="bx bx-user-check"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">ลูกค้าที่เข้าสู่ระบบแล้ว</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4> {{ number_format($countUserCustomer) }}  คน<i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                           
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('admin.agent.index') }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                        <i class="bx bx-run"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">ตัวแทนจำหน่าย</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4>{{ number_format($countAgent)  }} ตัวแทน<i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                         
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

           

            

            </div>
            <!-- end row -->
        </div>
    </div>


    <!-- end row -->
{{-- 
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-end">
                            <div class="input-group input-group-sm">
                                <select class="form-select form-select-sm">
                                    <option value="JA" selected>Jan</option>
                                    <option value="DE">Dec</option>
                                    <option value="NO">Nov</option>
                                    <option value="OC">Oct</option>
                                </select>
                                <label class="input-group-text">Month</label>
                            </div>
                        </div>
                        <h4 class="card-title mb-4">Top Selling product</h4>
                    </div>

                    <div class="text-muted text-center">
                        <p class="mb-2">Product A</p>
                        <h4>$ 6385</h4>
                        <p class="mt-4 mb-0"><span class="badge badge-soft-success font-size-11 me-2"> 0.6% <i
                                    class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                    </div>

                    <div class="table-responsive mt-4">
                        <table class="table align-middle mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                        <h5 class="font-size-14 mb-1">Product A</h5>
                                        <p class="text-muted mb-0">Neque quis est</p>
                                    </td>

                                    <td>
                                        <div id="radialchart-1" class="apex-charts"></div>
                                    </td>
                                    <td>
                                        <p class="text-muted mb-1">Sales</p>
                                        <h5 class="mb-0">37 %</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-size-14 mb-1">Product B</h5>
                                        <p class="text-muted mb-0">Quis autem iure</p>
                                    </td>

                                    <td>
                                        <div id="radialchart-2" class="apex-charts"></div>
                                    </td>
                                    <td>
                                        <p class="text-muted mb-1">Sales</p>
                                        <h5 class="mb-0">72 %</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-size-14 mb-1">Product C</h5>
                                        <p class="text-muted mb-0">Sed aliquam mauris.</p>
                                    </td>

                                    <td>
                                        <div id="radialchart-3" class="apex-charts"></div>
                                    </td>
                                    <td>
                                        <p class="text-muted mb-1">Sales</p>
                                        <h5 class="mb-0">54 %</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Tasks</h4>

                    <ul class="nav nav-pills bg-light rounded">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">In Process</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Upcoming</a>
                        </li>
                    </ul>

                    <div class="mt-4">
                        <div data-simplebar style="max-height: 250px;">

                            <div class="table-responsive">
                                <table class="table table-nowrap align-middle table-hover mb-0">
                                    <tbody>
                                        <tr>
                                            <td style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck01">
                                                    <label class="form-check-label" for="tasklistCheck01"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#"
                                                        class="text-dark">Skote Saas Dashboard</a></h5>
                                                <p class="text-muted mb-0">Assigned to Mark</p>
                                            </td>
                                            <td style="width: 90px;">
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-success p-1"><i
                                                                    class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-danger p-1"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck02">
                                                    <label class="form-check-label" for="tasklistCheck02"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#"
                                                        class="text-dark">New Landing UI</a></h5>
                                                <p class="text-muted mb-0">Assigned to Team A</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-success p-1"><i
                                                                    class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-danger p-1"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck02">
                                                    <label class="form-check-label" for="tasklistCheck02"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#"
                                                        class="text-dark">Brand logo design</a></h5>
                                                <p class="text-muted mb-0">Assigned to Janis</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-success p-1"><i
                                                                    class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-danger p-1"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck04">
                                                    <label class="form-check-label" for="tasklistCheck04"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#"
                                                        class="text-dark">Blog Template UI</a></h5>
                                                <p class="text-muted mb-0">Assigned to Dianna</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-success p-1"><i
                                                                    class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-danger p-1"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck05">
                                                    <label class="form-check-label" for="tasklistCheck05"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#"
                                                        class="text-dark">Multipurpose Landing</a></h5>
                                                <p class="text-muted mb-0">Assigned to Team B</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-success p-1"><i
                                                                    class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-danger p-1"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck06">
                                                    <label class="form-check-label" for="tasklistCheck06"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#"
                                                        class="text-dark">Redesign - Landing page</a></h5>
                                                <p class="text-muted mb-0">Assigned to Jerry</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-success p-1"><i
                                                                    class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-danger p-1"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck07">
                                                    <label class="form-check-label" for="tasklistCheck07"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#"
                                                        class="text-dark">Skote Crypto Dashboard</a></h5>
                                                <p class="text-muted mb-0">Assigned to Eric</p>
                                            </td>
                                            <td>
                                                <div>
                                                    <ul class="list-inline mb-0 font-size-16">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-success p-1"><i
                                                                    class="bx bxs-edit-alt"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-danger p-1"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer bg-transparent border-top">
                    <div class="text-center">
                        <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light"> Add new Task</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="row">
                        <div class="col-md-4 col-9">
                            <h5 class="font-size-15 mb-1">Steven Franklin</h5>
                            <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle me-1"></i> Active
                                now</p>
                        </div>
                        <div class="col-md-8 col-3">
                            <ul class="list-inline user-chat-nav text-end mb-0">
                                <li class="list-inline-item d-none d-sm-inline-block">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-search-alt-2"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-0 dropdown-menu-md">
                                            <form class="p-3">
                                                <div class="form-group m-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search ..."
                                                            aria-label="Recipient's username">

                                                        <button class="btn btn-primary" type="submit"><i
                                                                class="mdi mdi-magnify"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item  d-none d-sm-inline-block">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-cog"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">View Profile</a>
                                            <a class="dropdown-item" href="#">Clear chat</a>
                                            <a class="dropdown-item" href="#">Muted</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else</a>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div>
                        <div class="chat-conversation">
                            <ul class="list-unstyled" data-simplebar style="max-height: 260px;">
                                <li>
                                    <div class="chat-day-title">
                                        <span class="title">Today</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="conversation-list">
                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Steven Franklin</div>
                                            <p>
                                                Hello!
                                            </p>
                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i>
                                                10:00</p>
                                        </div>

                                    </div>
                                </li>

                                <li class="right">
                                    <div class="conversation-list">
                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Henry Wells</div>
                                            <p>
                                                Hi, How are you? What about our next meeting?
                                            </p>

                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i>
                                                10:02</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="conversation-list">
                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Steven Franklin</div>
                                            <p>
                                                Yeah everything is fine
                                            </p>

                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i>
                                                10:06</p>
                                        </div>

                                    </div>
                                </li>

                                <li class="last-chat">
                                    <div class="conversation-list">
                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Steven Franklin</div>
                                            <p>& Next meeting tomorrow 10.00AM</p>
                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i>
                                                10:06</p>
                                        </div>

                                    </div>
                                </li>

                                <li class="right">
                                    <div class="conversation-list">
                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Henry Wells</div>
                                            <p>
                                                Wow that's great
                                            </p>

                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i>
                                                10:07</p>
                                        </div>
                                    </div>
                                </li>


                            </ul>
                        </div>

                    </div>
                </div>

                <div class="p-3 chat-input-section">
                    <div class="row">
                        <div class="col">
                            <div class="position-relative">
                                <input type="text" class="form-control rounded chat-input" placeholder="Enter Message...">
                                <div class="chat-input-links">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="mdi mdi-emoticon-happy-outline"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="mdi mdi-file-image-outline"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="mdi mdi-file-document-outline"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary chat-send w-md waves-effect waves-light"><span
                                    class="d-none d-sm-inline-block me-2">Send</span> <i class="mdi mdi-send"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}
    <!-- end row -->

@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Saas dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/saas-dashboard.init.js') }}"></script>
@endsection
