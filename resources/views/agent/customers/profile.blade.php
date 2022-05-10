@extends('layouts-agent.master')

@section('title') ข้อมูลลูกค้า | Agent - HB Mobile Services @endsection

@section('css')
<style>
       .select2-container {
        width: 100%;
        z-index: 100000;

    }
</style>
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboard @endslot
        @slot('title') Profile @endslot
    @endcomponent
      <div class="row">

                <div class="col-md-12">
                    <div class="col-md-12">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                                <i class="bx bx-check-double" ></i>

                            </div>

                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>

    </div>
    <input type="hidden" id="agent_id" value="{{ $agentId }}">
    <div class="row">
            <div class="card">
                <div class="card-body">
                    {{-- 
                    <h4 class="card-title">Vertical Nav Tabs</h4>
                    <p class="card-title-desc">Example of Vertical nav tabs</p> --}}
                    <input type="hidden" id="customer_id" value="{{ $customer->id }}" />
                    <div class="row">
                        <div class="col-md-2" style="border-right: 1px solid grey;">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">

                                <a class="nav-link mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true"><i class="bx bx-user"></i>   ข้อมูลส่วนตัว</a>

                                <a class="nav-link mb-2" id="v-pills-address-tab" data-bs-toggle="pill"
                                    href="#v-pills-address" role="tab" aria-controls="v-pills-address"
                                    aria-selected="false"><i class="bx bx-home"></i>   ที่อยู่สำหรับจัดส่ง</a>

                                <a class="nav-link mb-2" id="v-pills-billaddress-tab" data-bs-toggle="pill"
                                    href="#v-pills-billaddress" role="tab" aria-controls="v-pills-billaddress"
                                    aria-selected="false"><i class="bx bx-home-alt"></i>    ที่อยู่สำหรับออกบิล</a>

                                <a class="nav-link" id="v-pills-warranty-tab" data-bs-toggle="pill" 
                                    href="#v-pills-warranty" role="tab" aria-controls="v-pills-warranty" 
                                    aria-selected="false"><i class="bx bx-check-double"></i>   การรับประกันสินค้า</a>
                                    {{-- 
                                <a class="nav-link" id="v-pills-order-tab" data-bs-toggle="pill" 
                                    href="#v-pills-order" role="tab" aria-controls="v-pills-order" 
                                    aria-selected="false"><i class="bx bx-package"></i>   ออเดอร์ทั้งหมด</a> --}}
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"aria-labelledby="v-pills-home-tab">
                                    <div class="card" >
                                        <div class="card-body">
                                            @if($agentId == $customer->agent_id)
                                                <button type="button" class="btn btn-sm btn-warning" onclick='showInfo({{ $customer }})'  style="float:right;"><i class="bx bx-pencil"></i> แก้ไข </button>
                                            @endif
                                            <h4 class="card-title mb-4 text-primary"><i class="bx bx-user"></i>  ข้อมูลส่วนตัว</h4>

                                            @if($customer->user_id && $customer->user)
                                                <span class="badge badge-pill badge-soft-success font-size-11"  style="float:right;"> <i class="bx bx-check"></i> เข้าสู่ระบบแล้ว </span>
                                            @else
                                                <span class="badge badge-pill badge-soft-secondary font-size-11" style="float:right;"> ยังไม่เข้าสู่ระบบ </span><br>
                                            @endif
                                    
                                            <div class="table-responsive">
                                                <table class="table table-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">เบอร์โทรศัพท์ :</th>
                                                            <td>{{ $customer->phone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">ชื่อ - สกุล :</th>
                                                            <td>{{ $customer->name  }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">E-mail :</th>
                                                            <td>{{ $customer->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Facebook :</th>
                                                            <td>{{ $customer->facebook }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">สร้างเมื่อ :</th>
                                                            <td>{{ date('d-m-Y', strtotime($customer->created_at)) }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-address" role="tabpanel" aria-labelledby="v-pills-address-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            @if($agentId == $customer->agent_id)
                                                <button type="button" class="btn btn-sm btn-warning" onclick='showInfoAddress({{ $customerAddress }})'  style="float:right;"><i class="bx bx-pencil"></i> แก้ไข </button>
                                            @endif
                                            <h4 class="card-title mb-4 text-primary"><i class="bx bx-home"></i>  ข้อมูลที่อยู่สำหรับจัดส่ง </h4>


                                            @if($customerAddress->name && $customerAddress->phone)
                                                <span class="badge badge-pill badge-soft-success font-size-11"  style="float:right;"> <i class="bx bx-check"></i> เพิ่มที่อยู่แล้ว </span>
                                            @else
                                                <span class="badge badge-pill badge-soft-secondary font-size-11" style="float:right;"> ยังไม่ได้เพิ่มที่อยู่ </span>
                                            @endif
                                            <br>

                                            <div class="table-responsive">
                                                <table class="table table-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">ชื่อ :</th>
                                                            <td>{{ @$customerAddress->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">เบอร์โทรศัพท์ :</th>
                                                            <td>{{ @$customerAddress->phone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">ที่อยู่ :</th>
                                                            <td>{{ @$customerAddress->address }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">จังหวัด :</th>
                                                            <td>{{ @$customerAddress->province  }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">อำเภอ :</th>
                                                            <td>{{ @$customerAddress->district }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">ตำบล :</th>
                                                            <td>{{ @$customerAddress->sub_district }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">รหัสไปรษณีย์ :</th>
                                                            <td>{{ @$customerAddress->zipcode }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="v-pills-billaddress" role="tabpanel" aria-labelledby="v-pills-billaddress-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            @if($agentId == $customer->agent_id)
                                                <button type="button" class="btn btn-sm btn-warning" onclick='showInfoBillAddress({{ $customerBillAddress }})'  style="float:right;"><i class="bx bx-pencil"></i> แก้ไข </button>
                                            @endif
                                            <h4 class="card-title mb-4 text-primary"><i class="bx bx-home-alt"></i>  ข้อมูลที่อยู่สำหรับออกบิล </h4>


                                            @if($customerBillAddress->name && $customerBillAddress->phone)
                                                <span class="badge badge-pill badge-soft-success font-size-11"  style="float:right;"> <i class="bx bx-check"></i> เพิ่มที่อยู่แล้ว </span>
                                            @else
                                                <span class="badge badge-pill badge-soft-secondary font-size-11" style="float:right;"> ยังไม่ได้เพิ่มที่อยู่ </span>
                                            @endif
                                            <br>

                                            <div class="table-responsive">
                                                <table class="table table-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">ชื่อ :</th>
                                                            <td>{{ @$customerBillAddress->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">เบอร์โทรศัพท์ :</th>
                                                            <td>{{ @$customerBillAddress->phone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">ที่อยู่ :</th>
                                                            <td>{{ @$customerBillAddress->address }}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th scope="row">จังหวัด :</th>
                                                            <td>{{ @$customerBillAddress->province  }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">อำเภอ :</th>
                                                            <td>{{ @$customerBillAddress->district }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">ตำบล :</th>
                                                            <td>{{ @$customerBillAddress->sub_district }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">รหัสไปรษณีย์ :</th>
                                                            <td>{{ @$customerBillAddress->zipcode }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-warranty" role="tabpanel" aria-labelledby="v-pills-warranty-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title text-primary"><i class="bx bx-check-double"></i>  ลงทะเบียนรับประกันสินค้า</h4>
                                          
                                            <button type="button" style="float: right; margin: 2px;" class="btn btn-primary warranty_btn btn-sm" ><i class="bx bx-plus"></i> ลงทะเบียน </button>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <table id="warranty_table" class="table table-bordered dt-responsive   w-100" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            {{-- <th>ชื่อลูกค้า</th> --}}
                                                            <th>รหัสสินค้า</th>
                                                            <th>ประกัน(เดือน)</th>
                                                            <th>วันสิ้นสุดประกัน</th>
                                                            <th>สร้างโดย</th>
                                                            <th>สถานะ</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>

                                                    </tbody>
                                                </table>
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


    <div class="modal fade update-profile" id="simpleModal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel"><span id="modal_title"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>

                </div>
                <div class="modal-body">

                <form action="{{ route('agent-member.customer.update') }}" class="form-horizontal" method="POST" id="customer-form">
                        @csrf
                        <input type="hidden" name="id" value="{{ $customer->id }}">
                        <div class="mb-3">
                            <label for="name" class="form-label">เบอร์โทร</label>
                            <input type="text" class="formInput form-control" id="phone" value="" 
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="เบอร์โทร" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">ชื่อ - นามสกุล</label>
                            <input type="text" class="formInput form-control" id="name" value="" name="name"
                                placeholder="กรอกชื่อ - นามสกุล" required>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Email</label>
                            <input type="email" class="formInput form-control" id="email" value="" name="email"
                                placeholder="Email" required>
                        </div>

                        <div class="mb-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input type="text" class="formInput form-control" id="facebook" value="" name="facebook"
                                placeholder="Facebook" >
                        </div>
           
                        <div class="mt-3 d-grid">
                            <br>
                            <button class="btn btn-primary waves-effect waves-light" type="submit"> บันทึก </button>
                         </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade update-profile" id="simpleModal2" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel"><span id="modal_title2"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>

                </div>
                <div class="modal-body">

                    <form action="{{ route('agent-member.customer.update-address') }}" class="form-horizontal" method="POST" id="customer-address-form">
                        @csrf
                        <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                        <div class="mb-3">
                            <label for="name" class="form-label">ชื่อ - นามสกุล</label>
                            <input type="text" class="formInput form-control" id="address_name" value="" name="address_name"
                                placeholder="กรอกชื่อ - นามสกุล" required>
                        </div>

                        <div class="mb-3">
                            <label for="address_phone" class="form-label">เบอร์โทรศัพท์</label>
                            <input type="text" class="formInput form-control" id="address_phone" value="" name="address_phone"
                                placeholder="กรอกเบอร์โทรศัพท์" required>
                        </div>

                        <div class="mb-3">
                            <label for="address_address" class="form-label">ที่อยู่</label>
                            <input type="text" class="formInput form-control" id="address_address" value="" name="address_address"
                                placeholder="กรอกที่อยู่" required>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="address_province" class="form-label">จังหวัด</label>
                                    <select name="address_province" id="address_province" class="form-control province">
                                         <option value="">-- เลือกจังหวัด --</option>
                                        @foreach ($provinces as $province)
                                            <option value="{{ $province->code }}">{{ $province->name_th }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-6">
                                    <label for="address_district" class="form-label">อำเภอ</label>
                                    <select name="address_district" id="address_district" class="form-control district" >
                                        @if ($customerAddress->district_code)
                                        @foreach ($addressDistricts as $addDis)
                                            @if($addDis->code == $customerAddress->district_code)
                                                 <option value="{{ $addDis->code }}" selected>{{ $addDis->name_th }}</option>
                                            @else
                                                 <option value="{{ $addDis->code }}">{{ $addDis->name_th }}</option>
                                            @endif
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="address_sub_district" class="form-label">ตำบล</label>
                                    <select name="address_sub_district" id="address_sub_district" class="form-control sub_district">
                                        @if ($customerAddress->sub_district_code)
                                        @foreach ($addressSubDistricts as $addSubDis)
                                            @if($addSubDis->code == $customerAddress->sub_district_code)
                                                 <option value="{{ $addSubDis->code }}" selected>{{ $addSubDis->name_th }}</option>
                                            @else
                                                 <option value="{{ $addSubDis->code }}">{{ $addSubDis->name_th }}</option>
                                            @endif
                                        @endforeach 
                                        @endif
                                  
                                    </select>
                                </div>

                                <div class="col-6">
                                     <label for="address_zipcode" class="form-label">รหัสไปรษณีย์</label>
                                    <input type="text" class="formInput form-control zipcode" id="address_zipcode" value="" name="address_zipcode"
                                        placeholder="" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            
                            @if ($customerBillAddress->name == null)
                                <input class="form-check-input" type="checkbox" name="set_bill_address" id="set_bill_address" checked>
                            @else
                                <input class="form-check-input" type="checkbox" name="set_bill_address" id="set_bill_address" >
                            @endif
                           <label for="set_bill_address" class="form-label">ตั้งเป็นที่อยู่สำหรับออกบิลด้วย</label>
                         
                        </div>
                    

                        <div class="mt-3 d-grid">
                            <br>
                            <button class="btn btn-primary waves-effect waves-light" type="submit"> บันทึก </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade update-profile" id="simpleModal3" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel"><span id="modal_title3"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>

                </div>
                <div class="modal-body">

                    <form action="{{ route('agent-member.customer.update-bill-address') }}" class="form-horizontal" method="POST" id="customer-bill-form">
                        @csrf
                        <input type="hidden" name="customer_id" value="{{ $customer->id }}">

                        <div class="mb-3">
                            <label for="name" class="form-label">ชื่อ - นามสกุล</label>
                            <input type="text" class="formInput form-control" id="bill_name" value="" name="bill_name"
                                placeholder="กรอกชื่อ - นามสกุล" required>
                        </div>

                        <div class="mb-3">
                            <label for="bill_name" class="form-label">เบอร์โทรศัพท์</label>
                            <input type="text" class="formInput form-control" id="bill_phone" value="" name="bill_phone"
                                placeholder="กรอกเบอร์โทรศัพท์" required>
                        </div>

                        <div class="mb-3">
                            <label for="bill_address" class="form-label">ที่อยู่</label>
                            <input type="text" class="formInput form-control" id="bill_address" value="" name="bill_address"
                                placeholder="กรอกที่อยู่" required>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="bill_province" class="form-label">จังหวัด</label>
                                    <select name="bill_province" id="bill_province" class="form-control province">
                                         <option value="">-- เลือกจังหวัด --</option>
                                        @foreach ($provinces as $province)
                                            <option value="{{ $province->code }}">{{ $province->name_th }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-6">
                                    <label for="bill_district" class="form-label">อำเภอ</label>
                                    <select name="bill_district" id="bill_district" class="form-control district" >
                                        @if ($customerBillAddress->district_code)
                                        @foreach ($billDistricts as $addDis)
                                            @if($addDis->code == $customerBillAddress->district_code)
                                                 <option value="{{ $addDis->code }}" selected>{{ $addDis->name_th }}</option>
                                            @else
                                                 <option value="{{ $addDis->code }}">{{ $addDis->name_th }}</option>
                                            @endif
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="bill_sub_district" class="form-label">ตำบล</label>
                                    <select name="bill_sub_district" id="bill_sub_district" class="form-control sub_district">
                                       @if ($customerBillAddress->sub_district_code)
                                        @foreach ($billSubDistricts as $addSubDis)
                                            @if($addSubDis->code == $customerBillAddress->sub_district_code)
                                                 <option value="{{ $addSubDis->code }}" selected>{{ $addSubDis->name_th }}</option>
                                            @else
                                                 <option value="{{ $addSubDis->code }}">{{ $addSubDis->name_th }}</option>
                                            @endif
                                        @endforeach 
                                        @endif
                                    </select>
                                </div>

                                <div class="col-6">
                                     <label for="bill_zipcode" class="form-label">รหัสไปรษณีย์</label>
                                    <input type="text" class="formInput form-control zipcode" id="bill_zipcode" value="" name="bill_zipcode"
                                        placeholder="" required>
                                </div>
                            </div>
                        </div>

                    

                        <div class="mt-3 d-grid">
                            <br>
                            <button class="btn btn-primary waves-effect waves-light" type="submit"> บันทึก </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade update-profile" id="warrantyModal" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel"><span id="warranty_title"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>

                </div>
                <div class="modal-body">

                    <form class="form-horizontal warranty-form" action="#" id="warranty-form-1">
                        @csrf
                 
                        <input type="hidden" class="" name="customer" value="{{ $customer->id }}" id="customer">

                        <div class="mb-3">
                            <label for="serial" class="form-label">ลูกค้า</label>
                            <input type="text" class="form-control"  value="{{  $customer->phone  }} {{ $customer->name }}" placeholder="" disabled>
                        </div>

                        
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="datepicker1">วันที่เริ่มรับประกัน</label>
                                    <div class="input-group" id="datepicker1">
                                        <input type="text" id="startDate" class="form-control " placeholder="วัน-เดือน-ปี" data-date-format="dd-mm-yyyy"
                                            data-date-container='#datepicker1' data-date-end-date="" value="{{ date('d-m-Y')}}"
                                            data-provide="datepicker" name="startDate" autocomplete="off" required>
                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                       <label for="datepicker2">วันสิ้นสุดการรับประกัน</label>
                                        <div class="input-group" id="datepicker2">
                                            <input type="text" id="endDate" class="form-control form-inputs" placeholder="วัน-เดือน-ปี" data-date-format="dd-mm-yyyy" 
                                                data-date-container='#datepicker2' data-date-end-date="" value="{{ date('d-m-Y', strtotime(date('Y-m-d'). "+12 months")) }}"
                                                data-provide="datepicker" name="endDate" autocomplete="off" required>
                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>

                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                          
                                <div class="col-6">

                                    <label for="product" class="form-label">สินค้า</label>
                                    <select name="product" id="product" class="form-control formInput formInputWarranty"  style="width: 100% " required>
                                        <option value=""> -- เลือกสินค้า -- </option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->sku }} {{ $product->name }}</option>
                                        @endforeach
                                    </select>
                       
                                </div>

                                <div class="col-6">
                                    <label for="shop" class="form-label">ซื้อจาก</label>
                                    <select name="shop" id="shop" class="form-control formInput formInputWarranty" required>
                                        {{-- <option value=""> -- เลือกซื้อจาก -- </option> --}}
                                        @foreach ($shops as $shop)
                                            <option value="{{ $shop->id }}" selected="selected">{{ $shop->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>

                       
                        <label for="serial" class="form-label">Serial No <i class="bx bx-barcode"></i> </label>  
                        <div class="mb-3">
                            <div class="field_wrapper">
            
                                    <div class="input-group" style="margin-bottom: 5px;">
                                        <button class="btn btn-light" type="button" > <i class="bx bx-barcode text-primary"></i> </button>
                                        <input type="text" class="form-control serials formInputWarranty" name="serials[]" placeholder="กรอก Serial no" aria-describedby="add" aria-label="serial">
                                        {{-- <button class="btn btn-primary check_button" type="button" id="check"><i class="bx bx-check-double"></i> </button> --}}
                                        <button class="btn btn-success add_button" type="button" id="add"> <i class="bx bxs-add-to-queue"></i> </button>
                                    </div>
                            </div>
                        </div>
                        

            

                        <div class="mt-3 d-grid">
                            <br>
                            <button class="btn btn-primary waves-effect waves-light" type="submit"> บันทึก </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade update-profile" id="warrantyEditModal" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel"><span id="warranty_title_edit"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>

                </div>
                <div class="modal-body">

                    <form class="form-horizontal warranty-form" action="#" id="warranty-form-2" >
                        @csrf
                        <input type="hidden" class="formInputWarranty" name="warranty_id" value="" id="warranty_id">
                        <input type="hidden" class="" name="customer" value="{{ $customer->id }}" id="customerEdit">

                        <div class="mb-3">
                            <label for="serial" class="form-label">ลูกค้า</label>
                            <input type="text" class="formInput form-control" value="{{  $customer->phone  }} {{ $customer->name }}" placeholder="" disabled>
                        </div>

                        
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="datepicker1">วันที่เริ่มรับประกัน</label>
                                    <div class="input-group" id="datepicker3">
                                        <input type="text" id="startDateEdit" class="form-control" placeholder="วัน-เดือน-ปี" data-date-format="dd-mm-yyyy"
                                            data-date-container='#datepicker3' data-date-end-date="" value="{{ date('d-m-Y')}}"
                                            data-provide="datepicker" name="startDate" autocomplete="off" required>
                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                       <label for="datepicker2">วันสิ้นสุดการรับประกัน</label>
                                        <div class="input-group" id="datepicker4">
                                            <input type="text" id="endDateEdit" class="form-control form-inputs" placeholder="วัน-เดือน-ปี" data-date-format="dd-mm-yyyy" 
                                                data-date-container='#datepicker4' data-date-end-date="" value="{{ date('d-m-Y', strtotime(date('Y-m-d'). "+12 months")) }}"
                                                data-provide="datepicker" name="endDate" autocomplete="off" required>
                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>

                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                          
                                <div class="col-6">

                                    <label for="product" class="form-label">สินค้า</label>
                                    <select name="product" id="productEdit" class="form-control formInput"  style="width: 100% " required>
                                        <option value=""> -- เลือกสินค้า -- </option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->sku }} {{ $product->name }}</option>
                                        @endforeach
                                    </select>
                       
                                </div>

                                <div class="col-6">
                                    <label for="shop" class="form-label">ซื้อจาก</label>
                                    <select name="shop" id="shopEdit" class="form-control formInput" required>
                                        {{-- <option value=""> -- เลือกซื้อจาก -- </option> --}}
                                        @foreach ($shops as $shop)
                                            <option value="{{ $shop->id }}" selected="selected">{{ $shop->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>

                       
                        <label for="serial" class="form-label">Serial No <i class="bx bx-barcode"></i> </label>  
                        <div class="mb-3">
                            <div class="field_wrapper">
            
                                    <div class="input-group" style="margin-bottom: 5px;">
                                        <button class="btn btn-light" type="button" > <i class="bx bx-barcode text-primary"></i> </button>
                                        <input type="text" class="form-control serials serialEdit" id="serialEdit" name="serials[]" placeholder="กรอก Serial no" aria-describedby="add" aria-label="serial">
                                        {{-- <button class="btn btn-primary check_button" type="button" id="check"><i class="bx bx-check-double"></i> </button> --}}
                      
                                    </div>
                            </div>
                        </div>
                        

            

                        <div class="mt-3 d-grid">
                            <br>
                            <button class="btn btn-primary waves-effect waves-light" type="submit"> บันทึก </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

  
@endsection
@section('script')
<script>
        
        $(document).ready(function () {
            var simple = '';
            var warranty = '';
            var order = '';
            var customerId = $('#customer_id').val();
            var order_table = '';
            var i = 0;
            var agentId = $('#agent_id').val();
        });

        $('#simple_table').ready(function () {
            simple = $('#simple_table').DataTable({
                "processing": false,
                "serverSide": false,
                "info": false,
                "searching": true,
                "responsive": true,
                "bFilter": false,
                "destroy": true,
                "order": [
                    [0, "desc"]
                ],
                "ajax": {
                    "url": "{{ route('agent-member.customer.show') }}",
                    "method": "POST",
                    "data": {
                        "_token": "{{ csrf_token()}}",
                    },
                },
                'columnDefs': [
                    {
                        "targets": [0,1,2,3,4],
                        "className": "text-center",
                    },
                ],
                "columns": [
                    {
                        "data": "phone",
                    },
                    {
                        "data": "name",
                    },
                       {
                        "data": "email",
                    },
                    {
                        "data": "user_id",
                        "render": function (data, type, full) {

                            var text = ``;
                            if(data != null){
                                text = `<span class="badge badge-pill badge-soft-success font-size-11" > <i class="bx bx-check"></i> เข้าสู่ระบบแล้ว </span>`;
                            }else{
                                 text = `<span class="badge badge-pill badge-soft-secondary font-size-11"> ยังไม่เข้าสู่ระบบ </span>`;
                            }
                            return text;

                        }
                    },

                    {
                        "data": "id",
                        "render": function (data, type, full) {
                            var obj = JSON.stringify(full);
                            // var button = `
                            // <a  href="/agent-member/customer/profile/${data}" class="btn btn-sm btn-info" ><i class="bx bx-pencil"></i> ดูรายละเอียด </button>
                            //  <button type="button" class="btn btn-sm btn-danger" onclick='destroy(${data})'><i class="bx bx-trash"></i> ลบ </button>
                            // `;

                            var button = `
                                    <a  href="/agent-member/customer/profile/${data}" class="btn btn-sm btn-info" ><i class="bx bx-search-alt-2"></i>  </a>`;
                            if(agentId == full.agent_id){
                                button = `
                                    <a  href="/agent-member/customer/profile/${data}" class="btn btn-sm btn-info" ><i class="bx bx-search-alt-2"></i>  </a>
                                    <button type="button" class="btn btn-sm btn-danger" onclick='destroy(${data})'><i class="bx bx-trash"></i>  </button>
                                    `;
                            }
                            if(full.user_id != null){
                                button = `<a  href="/agent-member/customer/profile/${data}" class="btn btn-sm btn-info" ><i class="bx bx-search-alt-2"></i>  </a>`;
                            }
                            return button;

                        }
                    },
                    
                ],
            });
        });

        $("#phone").keyup(function(){
            // console.log('OK');
            if($(this).val().length == 10){
                            $.post("{{  route('agent-member.customer.check-phone')  }}", data = {
                                    _token: '{{ csrf_token() }}',
                                    text:   $(this).val(),
                                },
                                function (res) {
                                    // console.log(res)
                                    if(res.status == 'warning'){
                                        Swal.fire(res.title, res.msg, res.status);
                                        $("#phone").val('');
                                    }
                                   
                                },
                            );
            }
   
        });
    
        function destroy(id){
             Swal.fire({
                    title: 'คุณมั่นใจหรือไม่ ?',
                    text: 'ที่จะลูกค้านี้',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#7A7978',
                    confirmButtonText: 'ตกลง',
                    cancelButtonText: 'ยกเลิก',

                }).then((result) => {
                    if (result.isConfirmed) {
                            openLoading();
                            $.post("{{  route('agent-member.customer.destroy')  }}", data = {
                                    _token: '{{ csrf_token() }}',
                                    id: id,
                                },
                                function (res) {
                                    simple.ajax.reload();
                                    closeLoading();
                                    Swal.fire(res.title, res.msg, res.status);
                                },
                            );
                      
                    }
                });
        }

        function showInfo(obj){
            console.log(obj);
            $('#modal_title').text('แก้ไขข้อมูลส่วนตัว');
            $('#phone').val(obj.phone);
            $('#name').val(obj.name);
            $('#email').val(obj.email);
            $('#facebook').val(obj.facebook);
            $('#simpleModal').modal("show");
        }

        function showInfoAddress(obj){
            console.log(obj);
            $('#modal_title2').text('แก้ไขข้อมูลการจัดส่ง');
            if(obj != null){
                $('#address_phone').val(obj.phone ? obj.phone : '');
                $('#address_name').val(obj.name ? obj.name : '');
                $('#address_address').val(obj.address ? obj.address : '');
                if(obj.province){
                     $('#address_province').val(obj.province_code);
                }
                if(obj.district){
                    $('#address_district').val(obj.district_code ? obj.district_code : '');
                }else{
                     $('#address_district').prop('disabled', true);
                }
                if(obj.sub_district){
                    $('#address_sub_district').val(obj.sub_district_code ? obj.sub_district_code : '');
                }else{
                    $('#address_sub_district').prop('disabled', true);
                }
                if(obj.zipcode){
                     $('#address_zipcode').val(obj.zipcode ? obj.zipcode : '');
                }else{
                    $('#address_zipcode').prop('disabled', true);
                }
            }
           
            $('#simpleModal2').modal("show");
        }

        function showInfoBillAddress(obj){
            console.log(obj);
            $('#modal_title3').text('แก้ไขข้อมูลที่อยู่สำหรับออกบิล');
            if(obj != null){
                $('#bill_phone').val(obj.phone ? obj.phone : '');
                $('#bill_name').val(obj.name ? obj.name : '');
                $('#bill_address').val(obj.address ? obj.address : '');
                if(obj.province){
                     $('#bill_province').val(obj.province_code);
                }
                if(obj.district){
                    $('#bill_district').val(obj.district_code ? obj.district_code : '');
                }else{
                    $('#bill_district').prop('disabled', true);
                }
                if(obj.sub_district){
                    $('#bill_sub_district').val(obj.sub_district_code ? obj.sub_district_code : '');
                }else{
                    $('#bill_sub_district').prop('disabled', true);
                }
                if(obj.zipcode){
                     $('#bill_zipcode').val(obj.zipcode ? obj.zipcode : '');
                }else{
                    $('#bill_zipcode').prop('disabled', true);
                }
            }
            $('#simpleModal3').modal("show");
        }

        $(".province").change(function () {
            openLoading();
            $('.district').empty();
            $(".district").prop('disabled', true);
            $.post("{{  route('agent-member.customer.get-district')  }}", data = {
                    _token: '{{ csrf_token() }}',
                    provinceCode: $(this).val(),
                },
                function (res) {
                    console.log(res);
                    $('.district').append($('<option>').val('').text('-- เลือกอำเภอ --'));
                    res.forEach(element => {
                        $('.district').append($('<option>').val(element.code).text(element.name_th));
                    });
                    $(".district").prop('disabled', false); 
                    closeLoading();   
                },
            );
        });

        $(".district").change(function () {
            openLoading();
            $('.sub_district').empty();
            $(".sub_district").prop('disabled', true);
            $.post("{{  route('agent-member.customer.get-sub-district')  }}", data = {
                    _token: '{{ csrf_token() }}',
                    districtCode: $(this).val(),
                },
                function (res) {
                    console.log(res);
                    $('.sub_district').append($('<option>').val('').text('-- เลือกตำบล --'));
                    res.forEach(element => {
                        $('.sub_district').append($('<option>').val(element.code).text(element.name_th));
                    });
                    $(".sub_district").prop('disabled', false); 
                    closeLoading();   
                },
            );
        });

        $(".sub_district").change(function () {
            openLoading();
            $('.zipcode').val('');
            $(".zipcode").prop('disabled', true);
            $.post("{{  route('agent-member.customer.get-zipcode')  }}", data = {
                    _token: '{{ csrf_token() }}',
                    subDistrictCode: $(this).val(),
                },
                function (res) {
                    console.log(res);
                    $(".zipcode").prop('disabled', false); 
                    $(".zipcode").val(res.zipcode);
                    closeLoading();   
                },
            );
        });

        $('#warranty_table').ready(function () {
            var cus_id = $('#customer_id').val();
            agentId = $('#agent_id').val();
            console.log('cus_id : ' + cus_id);
            warranty = $('#warranty_table').DataTable({
                "processing": false,
                "serverSide": false,
                "info": false,
                "searching": true,
                "responsive": true,
                "bFilter": false,
                "destroy": true,
                "order": [
                    [0, "desc"]
                ],
                "ajax": {
                    "url": `/agent-member/warranty/warranty-customer/${cus_id}`,
                    "method": "POST",
                    "data": {
                        "_token": "{{ csrf_token()}}",
                    },
                },
                'columnDefs': [
                    {
                        "targets": [0,1,2,3,4,5],
                        "className": "text-center",
                    },
                ],
                "columns": [

                        {
                        "data": "serial_no",
                    },
          
                    // {
                    //     "data": "customer",
                    //      "render": function (data, type, full) {
                    //         return data ? data.name : '<span class="badge badge-pill badge-soft-danger font-size-11"> ลูกค้าถูกลบ </span>';
                    //     }
                    // },
                              
                    {
                        "data": "product",
                         "render": function (data, type, full) {
                              return data ? data.sku : '<span class="badge badge-pill badge-soft-danger font-size-11"> สินค้าถูกลบ </span>';
                        }
                    },
               
                    {
                        "data": "warranty_months",
                    },
                       
                    {
                        "data": "warranty_end_date",
                         "render": function (data, type, full) {
                            return moment(data).format('DD-MM-YYYY');
                        }
                    },
                
                    {
                        "data": "agent_id",
                        "render": function (data, type, full) {
                            var text = full.agent ? full.agent.name : 'Admin';
                            return text;
                        }
                    },


                    {
                        "data": "warranty_end_date",
                         "render": function (data, type, full) {
                            var dateEnd = moment(data);
                            var dateNow = moment();
                            var text = `<span class="badge badge-pill badge-soft-success font-size-11"> อยู่ในประกัน </span>`;
                            var diff = dateNow.diff(dateEnd);
                            // console.log(diff);
                            if(diff >= 0){
                                text = `<span class="badge badge-pill badge-soft-danger font-size-11"> หมดประกัน </span>`;
                            }

                            return text;
                        }
                    },
                    
                    {
                        "data": "id",
                        "render": function (data, type, full) {
                            var obj = JSON.stringify(full);
                            var button = `
                                <button type="button" class="btn btn-sm btn-info" onclick='showInfoWarranty(${obj})'><i class="bx bx-search-alt-2"></i>  </button>
                            `;

                            if(agentId == full.agent_id){
                                button = `
                                    <button type="button" class="btn btn-sm btn-info" onclick='showInfoWarranty(${obj})'><i class="bx bx-search-alt-2"></i>  </button>
                                    <button type="button" class="btn btn-sm btn-danger" onclick='destroyWarranty(${data})'><i class="bx bx-trash"></i>  </button>
                                `;
                            }
                            
                            return button;

                        }
                    },
                    
                ],
            });
        });

        $(".warranty_btn").click(function () {
            $('#warranty_title').text('ลงทะเบียนรับประกัน');
            $('.formInputWarranty').val('');
            $('#warrantyModal').modal("show");
        });

        $("#startDate").change(function () {
            var d = $(this).val();
            // var newDate = moment(d).add(1, 'years');
            var newDate = moment(d, "DD-MM-YYYY").add(1, 'years').format('L');
            var endDate =  moment(newDate).format('DD-MM-YYYY');
            console.log(newDate)
            console.log(endDate)
            $("#endDate").val(endDate);
         
        });

        $("#startDateEdit").change(function () {
            var d = $(this).val();
            // var newDate = moment(d).add(1, 'years');
            var newDate = moment(d, "DD-MM-YYYY").add(1, 'years').format('L');
            var endDate =  moment(newDate).format('DD-MM-YYYY');
            console.log(newDate)
            console.log(endDate)
            $("#endDateEdit").val(endDate);
         
        });

        $('.warranty-form').submit(function(e){
            e.preventDefault();
            let formData = new FormData(this);
            var serials = $('#serials').val();
            var customer = $('#customer').val();
            var id = $('#warranty_id').val();
            var product = $('#product').val();
            console.log('customer : ' + customer)
            console.log('product : ' + product)
            console.log('id : ' + id)
            if( customer == null && customer == '' && product == '' && product == null){
                Swal.fire('ผิดพลาด!', 'กรุณากรอกข้อมูลให้ครบถ้วน', 'warning');
            }else{
                openLoading();
                if(id != null && id != ''){
                    $.ajax({
                        type: "method",
                        method: "POST",
                        url: "{{ route('agent-member.warranty.update') }}",
                        processData: false,
                        contentType: false,
                        data: formData,
                        success: function (res) {
                            console.log(res);
                            warranty.ajax.reload();
                            Swal.fire(res.title, res.msg, res.status);
                            $('#warrantyEditModal').modal("hide");
                            closeLoading();
                        }
                    });
                }else{
                    $.ajax({
                        type: "method",
                        method: "POST",
                        url: "{{ route('agent-member.warranty.store') }}",
                        processData: false,
                        contentType: false,
                        data: formData,
                        success: function (res) {
                            console.log(res);
                            warranty.ajax.reload();
                            Swal.fire(res.title, res.msg, res.status);
                            if(res.status == 'success'){
                                $('#warrantyModal').modal("hide");
                            }
                            closeLoading();
                        }
                    });
                }
            }
        });

        function showInfoWarranty(obj){
            $('#warranty_title_edit').text('รายละเอียดการรับประกัน');
            $('#warranty_id').val(obj.id);
            $("#customerEdit").val(obj.customer_id);
            // $("#customer").val(obj.customer_id).trigger('change');
            $("#productEdit").val(obj.product_id).trigger('change');
            $('#shopEdit').val(obj.shop_id);
            $('#serialEdit').val(obj.serial_no);
            $('#startDateEdit').val(moment(obj.warranty_start_date).format('DD-MM-YYYY'));
            $('#endDateEdit').val(moment(obj.warranty_end_date).format('DD-MM-YYYY'));
            $('#detail').val(obj.detail);
            $('#warrantyEditModal').modal("show");
   
        }

        function destroyWarranty(id){
                Swal.fire({
                    title: 'คุณมั่นใจหรือไม่ ?',
                    text: 'ที่จะลบการลงทะเบียนรับประกันรายการนี้',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#7A7978',
                    confirmButtonText: 'ตกลง',
                    cancelButtonText: 'ยกเลิก',

                }).then((result) => {
                    if (result.isConfirmed) {
                            openLoading();
                            $.post("{{  route('agent-member.warranty.destroy')  }}", data = {
                                    _token: '{{ csrf_token() }}',
                                    id: id,
                                },
                                function (res) {
                                    warranty.ajax.reload();
                                    closeLoading();
                                    Swal.fire(res.title, res.msg, res.status);
                                },
                            );
                      
                    }
                });
        }

        $(document).ready(function(){
            var x = 1; //Initial field counter is 1
            var maxField = 100; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = `<div class="input-group">
                            <button class="btn btn-secondary" type="button" > ${x} </button>
                            <input type="text" class="form-control serials" name="serials[]" placeholder="กรอก Serial no" aria-describedby="add" aria-label="serial" />
                            <button class="btn btn-danger remove_button" type="button"><i class="bx bx-trash"></i> </button>
                            </div>`; //New input field html 
        
            
            //Once add button is clicked
            $(addButton).click(function(){
                //Check maximum number of input fields
                // console.log('add');
                if(x < maxField){ 
                    x++; //Increment field counter
                    // $(wrapper).append(fieldHTML); //Add field html
                    $(wrapper).append(`<div class="input-group" style="margin-bottom: 5px;">
                            <button class="btn btn-light" type="button" > <i class="bx bx-barcode text-primary"></i> </button>
                            <input type="text" class="form-control serials" name="serials[]" placeholder="กรอก Serial no" aria-describedby="add" aria-label="serial">
                            <button class="btn btn-danger remove_button" type="button"><i class="bx bx-trash"></i> </button>
                            </div>`);
                }
                
            });
            
            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
</script>
  
@endsection
