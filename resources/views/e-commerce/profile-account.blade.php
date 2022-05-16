@extends('layouts-ecommerce.app')

@section('css')

@endsection

@section('content')

<section class="section pt-0 mt-3" id="profile-order">
    <div class="container">
        <div class="row shadow-lg">
            <div class="col-md-12 pt-5">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    <i class="bx bx-check-double"></i>
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
            <div class="col-lg-3 col-md-6 text-center">
                <div class="promotion text-center pt-5 pb-5">
                    <div class="icon">
                        <i class='bx bxs-user-circle' style="font-size: 8rem;"></i>
                    </div>
                    <h4 class="mt-4 text-primary">ชื่อ : {{ @$customer->name }}</h4>
                    <p>เบอร์โทร: {{ @$customer->phone }}</p>
                    <p>Email: {{ @$customer->email }}</p>
                </div>
            </div>
            @if ($order)
            <div class="col-lg-9 ">
                <div class="col-sm-12 section-title text-center pt-5">
                    <h3><i class="line"></i>การสั่งซื้อล่าสุด<i class="line"></i></h3>
                    <p>รายละเอียดการสั่งซื้อล่าสุดของคุณ</p>
                </div>
                @switch ($order->status)
                @case(0)
                <div class="alert alert-warning ">
                    <i class='bx bx-loader-circle bx-spin bx-flip-horizontal'></i> รออัพโหลดสลิป
                </div>
                @break

                @case(1)
                <div class="alert alert-dark">
                    <i class='bx bx-check-double'></i> อัพโหลดสลิปแล้ว
                </div>
                @break

                @case(2)
                <div class="alert alert-primary">
                    <i class="bx bx-loader"></i> ยืนยันการชำระเงิน
                </div>
                @break

                @case(3)
                <div class="alert alert-info">
                    <i class="bx bx-loader"></i> กำลังเตรียมจัดส่ง
                </div>
                @break

                @case(4)
                <div class="alert alert-success">
                    <i class="bx bx-loader"></i> จัดส่งแล้ว
                </div>
                @break

                @case(5)
                <div class="alert alert-danger">
                    <i class="bx bx-loader"></i> จัดส่งไม่สำเร็จ
                </div>
                @break

                @case(6)
                <div class="alert alert-danger">
                    <i class="bx bx-loader"></i> ยกเลิกรายการ
                </div>
                @break

                @default
                @break
                @endswitch

                <ul class="order-details">
                    <li class="order">
                        รหัสใบสั่งซื้อ: <strong>{{ $order->code }}</strong>
                    </li>
                    <li class="date">
                        วันที่สั่ง: <strong>{{ date("d/m/Y", strtotime($order->created_at)) }}</strong>
                    </li>
                    <li class="total">
                        รวมทั้งสิ้น: <strong><span class="amount">{{ $order->total_amount }}</span></strong>
                    </li>
                    <li class="method">
                        ประเภทการชำระ: <strong>โอนชำระ</strong>
                    </li>
                </ul><!-- /.order-details -->

                <div class="custom-accordion flex-column" id="order-detail" role="tablist" aria-multiselectable="true">
                    <div class="card card-default">
                        <div class="card-header cursor-pointer" data-toggle="collapse" data-target="#last-order"
                            aria-expanded="true">
                            <h4 class="h4 mb-0">
                                Order Details
                            </h4>
                        </div>
                        <div id="last-order" class="card-collapse collapse" data-parent="#order-detail">
                            <div class="card-body">
                                <div class="box table-responsive">
                                    <table class="table cart-table order-details-table w-100">
                                        <thead>
                                            <tr>
                                                <th colspan="2">
                                                    @if($order->orderDeliveryAddress)
                                                    <p>
                                                        <i class='bx bxs-map'></i>
                                                        ที่อยู่จัดส่ง :
                                                        {{ $order->orderDeliveryAddress->address }}
                                                        {{ $order->orderDeliveryAddress->district }}
                                                        {{ $order->orderDeliveryAddress->sub_district }}
                                                        {{ $order->orderDeliveryAddress->province }}
                                                        {{ $order->orderDeliveryAddress->zipcode }}
                                                    </p>
                                                    @endif

                                                    @if($order->orderBillAddress)
                                                    <p>
                                                        <i class='bx bx-receipt'></i>
                                                        ที่อยู่ออกบิล :
                                                        {{ $order->orderBillAddress->address }}
                                                        {{ $order->orderBillAddress->district }}
                                                        {{ $order->orderBillAddress->sub_district }}
                                                        {{ $order->orderBillAddress->province }}
                                                        {{ $order->orderBillAddress->zipcode }}
                                                    </p>
                                                    @endif
                                                </th>
                                            </tr>
                                            <tr>
                                                <th class="product-name">สินค้า</th>
                                                <th class="product-total">ราคา</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($order->orderDetails as $detail)
                                            <tr class="item">
                                                <td class="product-name">
                                                    <a href="product.html">{{$detail->product->name}}</a>
                                                    <strong class="product-quantity">× {{$detail->amount}}</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">{{$detail->total_amount}}</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th scope="row">รวม:</th>
                                                <td><span class="amount">{{ $order->total }}</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ค่าส่ง:</th>
                                                <td><span class="amount">{{ $order->shipping_price }}</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ประเภทการชำระ:</th>
                                                <td>
                                                    <p>ธนาคาร : {{ $order->paymentMethod->bank_name }}</p>
                                                    <p>ชื่อบัญชี : {{ $order->paymentMethod->bank_account_name }}</p>
                                                    <p>เลขที่บัญชี : {{ $order->paymentMethod->bank_account_no }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">รวมทั้งสิ้น:</th>
                                                <td><span class="amount text-primary">{{ $order->total_amount }}</span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div> <!-- /.box -->
                                <div class="text-right">
                                    <a href="/form-upload-slip/order/{{ $order->id }}" class="btn btn-primary">
                                        อัพโหลดสลิป</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.custom-accordion -->
            </div>
            @endif
        </div>
</section>

<section class="section pt-0">
    <div class="container">
        <div class="row shadow-lg">
            <div class="col-sm-12">
                <div class="tabs-wrapper pt-3 pb-3">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-violet" href="#tab-orders" aria-controls="tab-orders"
                                data-toggle="tab"><i class='bx bx-history'></i> ประวัติการสั่งซื้อ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning" href="#tab-information" aria-controls="tab-information"
                                data-toggle="tab"><i class='bx bx-calendar'></i>
                                ประกันสินค้า
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success" href="#tab-repair" aria-controls="tab-information"
                                data-toggle="tab"><i class='bx bx-wrench'></i>
                                สถานะงานส่งซ่อม
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="#tab-profile" aria-controls="tab-profile"
                                data-toggle="tab">
                                <i class='bx bxs-user-circle'></i> แก้ไขข้อมูลส่วนตัว
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="#tab-customer-bill" aria-controls="tab-customer-bill"
                                data-toggle="tab">
                                <i class='bx bx-receipt'></i> แก้ไขที่อยู่ออกบิล
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-orders">
                            @foreach($orders as $key => $order)
                            <div class="card card-default mb-3">
                                <div class="card-header cursor-pointer" data-toggle="collapse"
                                    data-target="#order-{{ $key }}" aria-expanded="true">
                                    <h4 class="h4 mb-0">
                                        @switch ($order->status)
                                        @case(0)
                                        <i class='bx bxs-hand-up bx-flashing' ></i> รหัสใบสั่งซื้อ {{ $order->code }} <span
                                            class="float-right badge badge-warning"><i class='bx bx-loader-circle bx-spin bx-flip-horizontal' ></i> รออัพโหลดสลิป
                                        </span>
                                        @break

                                        @case(1)
                                        <i class='bx bxs-hand-up bx-flashing' ></i> รหัสใบสั่งซื้อ {{ $order->code }} <span
                                            class="float-right badge badge-dark"><i class='bx bx-check-double'></i>
                                            อัพโหลดสลิปแล้ว </span>
                                        @break

                                        @case(2)
                                        <i class='bx bxs-hand-up bx-flashing' ></i> รหัสใบสั่งซื้อ {{ $order->code }} <span
                                            class="float-right badge badge-primary">
                                            ยืนยันการชำระเงิน </span>
                                        @break

                                        @case(3)
                                        <i class='bx bxs-hand-up bx-flashing' ></i> รหัสใบสั่งซื้อ {{ $order->code }} <span
                                            class="float-right badge badge-info">กำลังเตรียมจัดส่ง </span>
                                        @break

                                        @case(4)
                                        <i class='bx bxs-hand-up bx-flashing' ></i> รหัสใบสั่งซื้อ {{ $order->code }} <span
                                            class="float-right badge badge-success">จัดส่งแล้ว
                                        </span>
                                        @break

                                        @case(5)
                                        <i class='bx bxs-hand-up bx-flashing' ></i> รหัสใบสั่งซื้อ {{ $order->code }} <span
                                            class="float-right badge badge-secondary">จัดส่งไม่สำเร็จ </span>
                                        @break

                                        @case(6)
                                        <i class='bx bxs-hand-up bx-flashing' ></i> รหัสใบสั่งซื้อ {{ $order->code }} <span
                                            class="float-right badge badge-danger">ยกเลิกรายการ </span>
                                        @break

                                        @default
                                        @break
                                        @endswitch

                                    </h4>
                                </div>
                                <div id="order-{{ $key }}" class="card-collapse collapse" data-parent="#order-detail">
                                    <div class="card-body">
                                        <div class="box table-responsive">
                                            <table class="table cart-table order-details-table w-100">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2">
                                                            @if($order->orderDeliveryAddress)
                                                            <p>
                                                                <i class='bx bxs-map'></i>
                                                                ที่อยู่จัดส่ง :
                                                                {{ $order->orderDeliveryAddress->address }}
                                                                {{ $order->orderDeliveryAddress->district }}
                                                                {{ $order->orderDeliveryAddress->sub_district }}
                                                                {{ $order->orderDeliveryAddress->province }}
                                                                {{ $order->orderDeliveryAddress->zipcode }}
                                                            </p>
                                                            @endif

                                                            @if($order->orderBillAddress)
                                                            <p>
                                                                <i class='bx bx-receipt'></i>
                                                                ที่อยู่ออกบิล :
                                                                {{ $order->orderBillAddress->address }}
                                                                {{ $order->orderBillAddress->district }}
                                                                {{ $order->orderBillAddress->sub_district }}
                                                                {{ $order->orderBillAddress->province }}
                                                                {{ $order->orderBillAddress->zipcode }}
                                                            </p>
                                                            @endif
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="product-name">สินค้า</th>
                                                        <th class="product-total">ราคา</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($order->orderDetails as $detail)
                                                    <tr class="item">
                                                        <td class="product-name">
                                                            <a href="product.html">{{$detail->product->name}}</a>
                                                            <strong class="product-quantity">×
                                                                {{$detail->amount}}</strong>
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="amount">{{$detail->total_amount}}</span>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th scope="row">รวม:</th>
                                                        <td><span class="amount">{{ $order->total }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">ค่าส่ง:</th>
                                                        <td><span class="amount">{{ $order->shipping_price }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">ประเภทการชำระ:</th>
                                                        <td>
                                                            <p>ธนาคาร : {{ $order->paymentMethod->bank_name }}</p>
                                                            <p>ชื่อบัญชี :
                                                                {{ $order->paymentMethod->bank_account_name }}</p>
                                                            <p>เลขที่บัญชี :
                                                                {{ $order->paymentMethod->bank_account_no }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">รวมทั้งสิ้น:</th>
                                                        <td><span
                                                                class="amount text-primary">{{ $order->total_amount }}</span>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div> <!-- /.box -->
                                        <div class="text-right">
                                            <a href="/form-upload-slip/order/{{ $order->id }}" class="btn btn-primary">
                                                อัพโหลดสลิป</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div><!-- ./tab-orders -->

                        <div class="tab-pane" id="tab-information">
                            <table class="table shop_attributes" id="warranty_table">
                                <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>รหัสสินค้า</th>
                                        <th>วันที่เริ่มประกัน</th>
                                        <th>วันสิ้นสุดประกัน</th>
                                        <th>ผู้ลงทะเบียนรับประกัน</th>
                                        <th>สถานะ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($warrantys)
                                    @foreach($warrantys as $warranty)
                                    <tr>
                                        <td>{{ $warranty->serial_no }}</td>
                                        <td>{{ $warranty->product->sku }}</td>
                                        <td>{{ $warranty->warranty_start_date }}</td>
                                        <td>{{ $warranty->warranty_end_date }}</td>
                                        <td>
                                            @if($warranty->agent)
                                            {{ $warranty->agent->name }}
                                            @endif
                                        </td>
                                        <td>
                                            @php
                                            $dateNow = date_create(strval(date('Y-m-d')));
                                            $dateEnd = date_create($warranty->warranty_end_date);
                                            $diff = date_diff($dateNow, $dateEnd);
                                            @endphp
                                            @if((int)$diff->format('%R%a') >= 0)
                                            <span class="badge badge-success"> อยู่ในประกัน </span>
                                            @else
                                            <span class="badge badge-danger"> หมดประกัน </span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div><!-- ./tab-orders -->

                        <div class="tab-pane" id="tab-repair">
                            <table class="table shop_attributes" id="warranty_table">
                                <thead>
                                    <tr>
                                        <th>ชื่อลูกค้า</th>
                                        <th>เบอร์โทร</th>
                                        <th>วันรับเครื่อง</th>
                                        <th>รายละเอียด</th>
                                        <th>ราคา</th>
                                        <th>สถานะ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($warrantys)
                                    @foreach($warrantys as $warranty)
                                    <tr>
                                        <td>{{ $warranty->serial_no }}</td>
                                        <td>{{ $warranty->product->sku }}</td>
                                        <td>{{ $warranty->warranty_start_date }}</td>
                                        <td>{{ $warranty->warranty_end_date }}</td>
                                        <td>
                                            @if($warranty->agent)
                                            {{ $warranty->agent->name }}
                                            @endif
                                        </td>
                                        <td>
                                            @php
                                            $dateNow = date_create(strval(date('Y-m-d')));
                                            $dateEnd = date_create($warranty->warranty_end_date);
                                            $diff = date_diff($dateNow, $dateEnd);
                                            @endphp
                                            @if((int)$diff->format('%R%a') >= 0)
                                            <span class="badge badge-success"> กำลังดำเนินการ </span>
                                            @else
                                            <span class="badge badge-danger"> ซ่อมเสร็จแล้ว </span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div><!-- ./tab-repair -->

                        <div class="tab-pane" id="tab-profile">
                            <form action="#!" class="form-horizontal row" method="POST" id="form-customer">
                                @csrf
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">ชื่อ-นามสกุล</label>
                                        <input type="text" class="form-control bg-white border" name="name"
                                            value="{{ $customer->name ? $customer->name : '' }}"
                                            placeholder="ชื่อ-นามสกุล">
                                    </div>
                                    <div class="form-group">
                                        <label for="">เลขประจำตัวผู้เสียภาษี</label>
                                        <input type="text" class="form-control bg-white border" name="personal_code"
                                            value="{{ $customer->personal_code ? $customer->personal_code : '' }}"
                                            placeholder="เลขประจำตัวผู้เสียภาษี">
                                    </div>
                                    <div class="form-group">
                                        <label for="">โทรศัพท์</label>
                                        <input type="text" class="form-control bg-white border" name="phone"
                                            value="{{ $customer->phone ? $customer->phone : '' }}"
                                            placeholder="โทรศัพท์" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">E-mail</label>
                                        <input type="text" class="form-control bg-white border" name="email"
                                            value="{{ $customer->email ? $customer->email : '' }}" placeholder="E-mail">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">ที่อยู่</label>
                                        <input type="text" class="form-control bg-white border" placeholder="ที่อยู่"
                                            name="address"
                                            value="{{ $customer->customerAddress->address ? $customer->customerAddress->address : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">จังหวัด</label>
                                        <select class="form-control bg-white border" id="delivery_province"
                                            name="province_code">
                                            <option value="">-- เลือกจังหวัด --</option>
                                            @foreach($provinces as $province)
                                            <option value="{{ $province->code }}"
                                                {{ $customer->customerAddress->province_code == $province->code ? 'selected' : '' }}>
                                                {{ $province->name_th }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">อำเภอ</label>
                                        <select class="form-control bg-white border" id="delivery_district"
                                            name="district_code">
                                            <option value="{{ $customer->customerAddress->district_code }}">
                                                {{ $customer->customerAddress->district }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ตำบล</label>
                                        <select class="form-control bg-white border" id="delivery_sub_district"
                                            name="sub_district_code">
                                            <option value="{{ $customer->customerAddress->sub_district_code }}">
                                                {{ $customer->customerAddress->sub_district }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">รหัสไปรษณีย์</label>
                                        <input type="text" class="form-control bg-white border"
                                            placeholder="รหัสไปรษณีย์" name="zipcode" id="delivery_zipcode"
                                            value="{{ $customer->customerAddress->zipcode ? $customer->customerAddress->zipcode : '' }}"
                                            required disabled>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <button type="button" id="store-btn"
                                            class="btn btn-primary w-100">บันทึก</button>
                                        <button type="submit" id="store-btn-hidden" class="d-none">save</button>
                                    </div>
                                </div>
                            </form><!-- /.form -->
                        </div><!-- ./tab-profile -->

                        <div class="tab-pane" id="tab-customer-bill">
                            <form action="#!" class="form-horizontal row" method="POST" id="form-bill-customer">
                                @csrf
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">ที่อยู่</label>
                                        <input type="text" class="form-control bg-white border" name="bill_address"
                                            value="{{ $customer->customerBillAddress->address ? $customer->customerBillAddress->address : '' }}"
                                            placeholder="ที่อยู่">
                                    </div>
                                    <div class="form-group">
                                        <label for="">อำเภอ</label>
                                        <select class="form-control bg-white border" id="bill_district"
                                            name="bill_district" >
                                            <option value="{{ $customer->customerBillAddress->district_code }}">
                                                {{ $customer->customerBillAddress->district }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">รหัสไปรษณีย์</label>
                                        <input type="text" class="form-control bg-white border" name="bill_zipcode"
                                            id="bill_zipcode"
                                            value="{{ $customer->customerBillAddress->zipcode ? $customer->customerBillAddress->zipcode : '' }}"
                                            placeholder="รหัสไปรษณีย์">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">จังหวัด</label>
                                        <select class="form-control bg-white border" name="bill_province"
                                            id="bill_province">
                                            <option value="">-- เลือกจังหวัด --</option>
                                            @foreach($provinces as $province)
                                            <option value="{{ $province->code }}"
                                                {{ $customer->customerBillAddress->province_code == $province->code ? 'selected' : '' }}>
                                                {{ $province->name_th }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ตำบล</label>
                                        <select class="form-control bg-white border" id="bill_sub_district"
                                            name="bill_sub_district" >
                                            <option value="{{ $customer->customerBillAddress->sub_district_code }}">
                                                {{ $customer->customerBillAddress->sub_district }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for=""></label>
                                    <button type="button" id="store-btn-bill"
                                        class="btn btn-primary w-100">บันทึก</button>
                                    <button type="submit" id="store-btn-bill-hidden" class="d-none">save</button>
                                </div>
                            </form>
                        </div>
                    </div><!-- ./tab-customer-bill -->
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


@endsection

@section('script')
<script>
$(document).ready(function() {
    var simple = '';
    sessionStorage.clear();
});

// Delivery
$('#store-btn').on('click', function() {
    Swal.fire({
        title: 'กรุณายืนยันการสั่งซื้อสินค้า ?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'ยืนยัน',
        cancelButtonText: 'ยกเลิก',
    }).then((result) => {
        if (result.isConfirmed) {
            $(this).attr('disabled', true);
            $('#store-btn-hidden').click();
        }
    })
})

$('#form-customer').submit(function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    openLoading();
    $.ajax({
        type: "method",
        method: "POST",
        url: "{{ route('profile-account.store') }}",
        processData: false,
        contentType: false,
        data: formData,
        success: function(res) {
            console.log(res)
            closeLoading();
            Swal.fire(res.title, res.msg, res.status);
            $('#store-btn').attr('disabled', false);
        }
    });
});

$("#delivery_province").change(function() {
    openLoading();
    $('#delivery_district').empty();
    $('#delivery_district').prop('disabled', true);
    $("#delivery_sub_district").empty();
    $("#delivery_sub_district").prop('disabled', true);
    $('#delivery_zipcode').val('');
    $("#delivery_zipcode").prop('disabled', true);

    $.ajax({
        url: "{{ route('get-district') }}",
        method: "POST",
        data: {
            _token: "{{ csrf_token() }}",
            provinceCode: $(this).val(),
        },
        success: function(res) {
            $('#delivery_district').append($('<option>').val('').text('-- เลือกอำเภอ --'));
            res.forEach(element => {
                $('#delivery_district').append($('<option>').val(element.code).text(element
                    .name_th));
            });
            $("#delivery_district").prop('disabled', false);
            closeLoading();
        }
    });
});

$("#delivery_district").change(function() {
    openLoading();
    $("#delivery_sub_district").empty();
    $("#delivery_sub_district").prop('disabled', true);
    $.post("{{  route('get-sub-district')  }}", data = {
            _token: '{{ csrf_token() }}',
            districtCode: $(this).val(),
        },
        function(res) {
            $("#delivery_sub_district").append($('<option>').val('').text('-- เลือกตำบล --'));
            res.forEach(element => {
                $("#delivery_sub_district").append($('<option>').val(element.code).text(element
                    .name_th));
            });
            $("#delivery_sub_district").prop('disabled', false);
            closeLoading();
        },
    );
});

$("#delivery_sub_district").change(function() {
    openLoading();
    $('#delivery_zipcode').val('');
    $("#delivery_zipcode").prop('disabled', true);
    $.post("{{  route('get-zipcode')  }}", data = {
            _token: '{{ csrf_token() }}',
            subDistrictCode: $(this).val(),
        },
        function(res) {
            $("#delivery_zipcode").prop('disabled', false);
            $("#delivery_zipcode").val(res.zipcode);
            closeLoading();
        },
    );
});
// End Delivery

// Bill
$('#store-btn-bill').on('click', function() {
    Swal.fire({
        title: 'กรุณายืนยันการสั่งซื้อสินค้า ?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'ยืนยัน',
        cancelButtonText: 'ยกเลิก',
    }).then((result) => {
        if (result.isConfirmed) {
            $(this).attr('disabled', true);
            $('#store-btn-bill-hidden').click();
        }
    })
})

$('#form-bill-customer').submit(function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    openLoading();
    $.ajax({
        type: "method",
        method: "POST",
        url: "{{ route('profile-account-bill.store') }}",
        processData: false,
        contentType: false,
        data: formData,
        success: function(res) {
            console.log(res)
            closeLoading();
            Swal.fire(res.title, res.msg, res.status);
            $('#store-btn-bill').attr('disabled', false);
        }
    });
})

$("#bill_province").change(function() {
    openLoading();
    $('#bill_district').empty();
    $('#bill_district').prop('disabled', true);
    $("#bill_sub_district").empty();
    $("#bill_sub_district").prop('disabled', true);
    $('#bill_zipcode').val('');
    $("#bill_zipcode").prop('disabled', true);
    $.post("{{  route('get-district')  }}", data = {
            _token: '{{ csrf_token() }}',
            provinceCode: $(this).val(),
        },
        function(res) {
            $('#bill_district').append($('<option>').val('').text('-- เลือกอำเภอ --'));
            res.forEach(element => {
                $('#bill_district').append($('<option>').val(element.code).text(element
                    .name_th));
            });
            $("#bill_district").prop('disabled', false);
            closeLoading();
        },
    );
});

$("#bill_district").change(function() {
    openLoading();
    $("#bill_sub_district").empty();
    $("#bill_sub_district").prop('disabled', true);
    console.log($(this).val())
    $.post("{{  route('get-sub-district')  }}", data = {
            _token: '{{ csrf_token() }}',
            districtCode: $(this).val(),
        },
        function(res) {
            $("#bill_sub_district").append($('<option>').val('').text('-- เลือกตำบล --'));
            res.forEach(element => {
                $("#bill_sub_district").append($('<option>').val(element.code).text(element
                    .name_th));
            });
            $("#bill_sub_district").prop('disabled', false);
            closeLoading();
        },
    );
});

$("#bill_sub_district").change(function() {
    openLoading();
    $('#bill_zipcode').val('');
    $("#bill_zipcode").prop('disabled', true);
    $.post("{{  route('get-zipcode')  }}", data = {
            _token: '{{ csrf_token() }}',
            subDistrictCode: $(this).val(),
        },
        function(res) {
            $("#bill_zipcode").prop('disabled', false);
            $("#bill_zipcode").val(res.zipcode);
            closeLoading();
        },
    );
});
// End Bill

</script>
@stop