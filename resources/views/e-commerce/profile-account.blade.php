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

                @if ($repair == null && $order == null)
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
                @endif

                @if ($repair != null && $order == null)
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
                    <div class="col-lg-9 ">
                        <div class="col-sm-12 section-title text-center pt-5">
                            <h3><i class="line"></i>งานซ่อมล่าสุด<i class="line"></i></h3>
                            <p>รายละเอียดงานซ่อมล่าสุดของคุณ</p>
                        </div>

                        @switch($repair->status)
                            @case(1)
                                <div class="alert alert-danger ">
                                    <i class='bx bx-cog bx-spin bx-flip-horizontal'></i> กำลังดำเนินการ
                                </div>
                            @break

                            @case(2)
                                <div class="alert alert-success">
                                    <i class="bx bx-check-double"></i> ซ่อมเสร็จแล้ว
                                </div>
                            @break

                            @case(3)
                                <div class="alert alert-warning">
                                    <i class="bx bx-error"></i> ซ่อมไม่ได้
                                </div>
                            @break

                            @default
                        @endswitch

                        <ul class="order-details">
                            <li class="date">
                                วันที่รับเครื่อง:
                                <strong>{{ date('d/m/Y', strtotime($repair->repair_start_date)) }}</strong>
                            </li>
                            <li class="order">
                                รุ่น:model: <strong>{{ $repair->model }}</strong>
                            </li>
                            <li class="method">
                                รายการซ่อม: <strong>{{ $repair->detail }}</strong>
                            </li>

                            <li class="total">
                                ราคา: <strong><span class="amount">{{ $repair->price }}</span></strong>
                            </li>

                        </ul>
                    </div>
                @endif

                @if ($order != null && $repair == null)
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
                                    <div class="alert alert-warning ">
                                        <i class="bx bx-save"></i> ยืนยันการชำระเงิน
                                    </div>
                                @break

                                @case(3)
                                    <div class="alert alert-dark">
                                        <i class="bx bx-paper-plane"></i> กำลังเตรียมจัดส่ง
                                    </div>
                                @break

                                @case(4)
                                    <div class="alert alert-success">
                                        <i class="bx bx-check-double"></i> จัดส่งแล้ว
                                    </div>
                                @break

                                @case(5)
                                    <div class="alert alert-danger">
                                        <i class="bx bx-error"></i> จัดส่งไม่สำเร็จ
                                    </div>
                                @break

                                @case(6)
                                    <div class="alert alert-danger">
                                        <i class="bx bx-x-circle"></i> ยกเลิกรายการ
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
                                    วันที่สั่ง: <strong>{{ date('d/m/Y', strtotime($order->created_at)) }}</strong>
                                </li>
                                <li class="total">
                                    รวมทั้งสิ้น: <strong><span class="amount">{{ $order->total_amount }}</span></strong>
                                </li>
                                <li class="method">
                                    ประเภทการชำระ: <strong>โอนชำระ</strong>
                                </li>
                            </ul><!-- /.order-details -->

                            <div class="custom-accordion flex-column" id="order-detail" role="tablist"
                                aria-multiselectable="true">
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
                                                                @if ($order->orderDeliveryAddress)
                                                                    <p>
                                                                        <i class='bx bx-user'></i>
                                                                        ชื่อ :

                                                                        {{ $order->orderDeliveryAddress->name }}
                                                                    </p>
                                                                    <p>
                                                                        <i class='bx bx-phone'></i>
                                                                        เบอร์โทร :
                                                                        {{ $order->orderDeliveryAddress->phone }}
                                                                    </p>
                                                                @endif
                                                                @if ($customer->customerBillAddress)
                                                                    <p>
                                                                        <i class='bx bxs-map'></i>
                                                                        ที่อยู่จัดส่ง :
                                                                        {{ $customer->customerBillAddress->address }}
                                                                        ต.
                                                                        {{ $customer->customerBillAddress->sub_district }}
                                                                        อ.
                                                                        {{ $customer->customerBillAddress->district }}
                                                                        จ.
                                                                        {{ $customer->customerBillAddress->province }}
                                                                        {{ $customer->customerBillAddress->zipcode }}
                                                                    </p>
                                                                @endif
                                                                {{-- @if ($order->orderDeliveryAddress)
                                                                    <p>
                                                                        <i class='bx bxs-map'></i>
                                                                        ที่อยู่จัดส่ง :

                                                                        {{ $order->orderDeliveryAddress->address }}
                                                                        {{ $order->orderDeliveryAddress->district }}
                                                                        {{ $order->orderDeliveryAddress->sub_district }}
                                                                        {{ $order->orderDeliveryAddress->province }}
                                                                        {{ $order->orderDeliveryAddress->zipcode }}
                                                                    </p>
                                                                @endif --}}

                                                                @if ($order->orderBillAddress)
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
                                                        @foreach ($order->orderDetails as $detail)
                                                            <tr class="item">
                                                                <td class="product-name">
                                                                    <a
                                                                        href="product.html">{{ $detail->product->name }}</a>
                                                                    <strong class="product-quantity">×
                                                                        {{ $detail->amount }}</strong>
                                                                </td>
                                                                <td class="product-total">
                                                                    <span
                                                                        class="amount">{{ $detail->total_amount }}</span>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th scope="row">รวม:</th>
                                                            <td><span class="amount">{{ $order->total }}</span>
                                                            </td>
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
                                                                    {{ $order->paymentMethod->bank_account_name }}
                                                                </p>
                                                                <p>เลขที่บัญชี :
                                                                    {{ $order->paymentMethod->bank_account_no }}
                                                                </p>
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
                                                <a href="/form-upload-slip/order/{{ $order->id }}"
                                                    class="btn btn-primary">
                                                    อัพโหลดสลิป</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.custom-accordion -->

                        </div>

                    @endif
                @endif

                @if ($order != null && $repair != null)
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
                    {{-- order --}}
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
                                    <div class="alert alert-warning ">
                                        <i class="bx bx-save"></i> ยืนยันการชำระเงิน
                                    </div>
                                @break

                                @case(3)
                                    <div class="alert alert-dark">
                                        <i class="bx bx-paper-plane"></i> กำลังเตรียมจัดส่ง
                                    </div>
                                @break

                                @case(4)
                                    <div class="alert alert-success">
                                        <i class="bx bx-check-double"></i> จัดส่งแล้ว
                                    </div>
                                @break

                                @case(5)
                                    <div class="alert alert-danger">
                                        <i class="bx bx-error"></i> จัดส่งไม่สำเร็จ
                                    </div>
                                @break

                                @case(6)
                                    <div class="alert alert-danger">
                                        <i class="bx bx-x-circle"></i> ยกเลิกรายการ
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
                                    วันที่สั่ง: <strong>{{ date('d/m/Y', strtotime($order->created_at)) }}</strong>
                                </li>
                                <li class="total">
                                    รวมทั้งสิ้น: <strong><span class="amount">{{ $order->total_amount }}</span></strong>
                                </li>
                                <li class="method">
                                    ประเภทการชำระ: <strong>โอนชำระ</strong>
                                </li>
                            </ul><!-- /.order-details -->

                            <div class="custom-accordion flex-column" id="order-detail" role="tablist"
                                aria-multiselectable="true">
                                <div class="card card-default">
                                    <div class="card-header cursor-pointer" data-toggle="collapse"
                                        data-target="#last-order" aria-expanded="true">
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
                                                                @if ($order->orderDeliveryAddress)
                                                                    <p>
                                                                        <i class='bx bx-user'></i>
                                                                        ชื่อ :

                                                                        {{ $order->orderBillAddress->name }}
                                                                    </p>
                                                                    <p>
                                                                        <i class='bx bx-phone'></i>
                                                                        เบอร์โทร :
                                                                        {{ $order->orderBillAddress->phone }}
                                                                    </p>
                                                                @endif
                                                                @if ($customer->customerBillAddress)
                                                                    <p>
                                                                        <i class='bx bxs-map'></i>
                                                                        ที่อยู่จัดส่ง :
                                                                        {{ $customer->customerBillAddress->address }}
                                                                        ต.
                                                                        {{ $customer->customerBillAddress->sub_district }}
                                                                        อ.
                                                                        {{ $customer->customerBillAddress->district }}
                                                                        จ.
                                                                        {{ $customer->customerBillAddress->province }}
                                                                        {{ $customer->customerBillAddress->zipcode }}
                                                                    </p>
                                                                @endif

                                                                @if ($order->orderBillAddress)
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
                                                        @foreach ($order->orderDetails as $detail)
                                                            <tr class="item">
                                                                <td class="product-name">
                                                                    <a
                                                                        href="product.html">{{ $detail->product->name }}</a>
                                                                    <strong class="product-quantity">×
                                                                        {{ $detail->amount }}</strong>
                                                                </td>
                                                                <td class="product-total">
                                                                    <span
                                                                        class="amount">{{ $detail->total_amount }}</span>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th scope="row">รวม:</th>
                                                            <td><span class="amount">{{ $order->total }}</span>
                                                            </td>
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
                                                                    {{ $order->paymentMethod->bank_account_name }}
                                                                </p>
                                                                <p>เลขที่บัญชี :
                                                                    {{ $order->paymentMethod->bank_account_no }}
                                                                </p>
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
                                                <a href="/form-upload-slip/order/{{ $order->id }}"
                                                    class="btn btn-primary">
                                                    อัพโหลดสลิป</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.custom-accordion -->
                        </div>
                    @endif
                    {{-- repair --}}
                    @if ($repair)
                        <div class="col-lg-3 col-md-6 text-center">
                        </div>
                        <div class="col-lg-9 ">
                            <div class="col-sm-12 section-title text-center pt-5">
                                <h3><i class="line"></i>งานซ่อมล่าสุด<i class="line"></i></h3>
                                <p>รายละเอียดงานซ่อมล่าสุดของคุณ</p>
                            </div>

                            @switch($repair->status)
                                @case(1)
                                    <div class="alert alert-danger ">
                                        <i class='bx bx-cog bx-spin bx-flip-horizontal'></i> กำลังดำเนินการ
                                    </div>
                                @break

                                @case(2)
                                    <div class="alert alert-success">
                                        <i class="bx bx-check-double"></i> ซ่อมเสร็จแล้ว
                                    </div>
                                @break

                                @case(3)
                                    <div class="alert alert-warning">
                                        <i class="bx bx-error"></i> ซ่อมไม่ได้
                                    </div>
                                @break

                                @default
                            @endswitch

                            <ul class="order-details">
                                <li class="date">
                                    วันที่รับเครื่อง:
                                    <strong>{{ date('d/m/Y', strtotime($repair->repair_start_date)) }}</strong>
                                </li>
                                <li class="order">
                                    รุ่น:model: <strong>{{ $repair->model }}</strong>
                                </li>
                                <li class="method">
                                    รายการซ่อม: <strong>{{ $repair->detail }}</strong>
                                </li>

                                <li class="total">
                                    ราคา: <strong><span class="amount">{{ $repair->price }}</span></strong>
                                </li>

                            </ul>
                        </div>
                    @endif
                @endif
            </div>
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
                                <a class="nav-link text-info" href="#tab-repair" aria-controls="tab-information"
                                    data-toggle="tab"><i class='bx bx-wrench'></i>
                                    ติดตามงานซ่อม
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-primary" href="#tab-profile" aria-controls="tab-profile"
                                    data-toggle="tab">
                                    <i class='bx bxs-user-circle'></i> แก้ไขข้อมูลส่วนตัว
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-primary" href="#tab-customer-bill"
                                    aria-controls="tab-customer-bill" data-toggle="tab">
                                    <i class='bx bx-receipt'></i> แก้ไขที่อยู่จัดส่ง
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-orders">
                                @foreach ($orders as $key => $order)
                                    <div class="card card-default mb-3">
                                        <div class="card-header cursor-pointer" data-toggle="collapse"
                                            data-target="#order-{{ $key }}" aria-expanded="true">
                                            <h4 class="h4 mb-0">
                                                @switch ($order->status)
                                                    @case(0)
                                                        <i class='bx bxs-hand-up bx-flashing'></i> รหัสใบสั่งซื้อ
                                                        {{ $order->code }} <span class="float-right badge badge-warning"><i
                                                                class='bx bx-loader-circle bx-spin bx-flip-horizontal'></i>
                                                            รออัพโหลดสลิป
                                                        </span>
                                                    @break

                                                    @case(1)
                                                        <i class='bx bxs-hand-up bx-flashing'></i> รหัสใบสั่งซื้อ
                                                        {{ $order->code }} <span class="float-right badge badge-dark"><i
                                                                class='bx bx-check-double'></i>
                                                            อัพโหลดสลิปแล้ว </span>
                                                    @break

                                                    @case(2)
                                                        <i class='bx bxs-hand-up bx-flashing'></i> รหัสใบสั่งซื้อ
                                                        {{ $order->code }} <span class="float-right badge badge-primary">
                                                            ยืนยันการชำระเงิน </span>
                                                    @break

                                                    @case(3)
                                                        <i class='bx bxs-hand-up bx-flashing'></i> รหัสใบสั่งซื้อ
                                                        {{ $order->code }} <span
                                                            class="float-right badge badge-info">กำลังเตรียมจัดส่ง </span>
                                                    @break

                                                    @case(4)
                                                        <i class='bx bxs-hand-up bx-flashing'></i> รหัสใบสั่งซื้อ
                                                        {{ $order->code }} <span
                                                            class="float-right badge badge-success">จัดส่งแล้ว
                                                        </span>
                                                    @break

                                                    @case(5)
                                                        <i class='bx bxs-hand-up bx-flashing'></i> รหัสใบสั่งซื้อ
                                                        {{ $order->code }} <span
                                                            class="float-right badge badge-secondary">จัดส่งไม่สำเร็จ </span>
                                                    @break

                                                    @case(6)
                                                        <i class='bx bxs-hand-up bx-flashing'></i> รหัสใบสั่งซื้อ
                                                        {{ $order->code }} <span
                                                            class="float-right badge badge-danger">ยกเลิกรายการ </span>
                                                    @break

                                                    @default
                                                    @break
                                                @endswitch

                                            </h4>
                                        </div>
                                        <div id="order-{{ $key }}" class="card-collapse collapse"
                                            data-parent="#order-detail">
                                            <div class="card-body">
                                                <div class="box table-responsive">
                                                    <table class="table cart-table order-details-table w-100">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="2">
                                                                    @if ($order->orderDeliveryAddress)
                                                                        <p>
                                                                            <i class='bx bx-user'></i>
                                                                            ชื่อ :

                                                                            {{ $order->orderDeliveryAddress->name }}
                                                                        </p>
                                                                        <p>
                                                                            <i class='bx bx-phone'></i>
                                                                            เบอร์โทร :
                                                                            {{ $order->orderDeliveryAddress->phone }}
                                                                        </p>
                                                                    @endif
                                                                    @if ($customer->customerBillAddress)
                                                                        <p>
                                                                            <i class='bx bxs-map'></i>
                                                                            ที่อยู่จัดส่ง :
                                                                            {{ $customer->customerBillAddress->address }}
                                                                            ต.
                                                                            {{ $customer->customerBillAddress->sub_district }}
                                                                            อ.
                                                                            {{ $customer->customerBillAddress->district }}
                                                                            จ.
                                                                            {{ $customer->customerBillAddress->province }}
                                                                            {{ $customer->customerBillAddress->zipcode }}
                                                                        </p>
                                                                    @endif
                                                                    {{-- @if ($order->orderDeliveryAddress)
                                                                        <p>
                                                                            <i class='bx bxs-map'></i>
                                                                            ที่อยู่จัดส่ง :
                                                                            {{ $order->orderDeliveryAddress->address }}
                                                                            {{ $order->orderDeliveryAddress->district }}
                                                                            {{ $order->orderDeliveryAddress->sub_district }}
                                                                            {{ $order->orderDeliveryAddress->province }}
                                                                            {{ $order->orderDeliveryAddress->zipcode }}
                                                                        </p>
                                                                    @endif --}}

                                                                    @if ($order->orderBillAddress)
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
                                                            @foreach ($order->orderDetails as $detail)
                                                                <tr class="item">
                                                                    <td class="product-name">
                                                                        <a
                                                                            href="product.html">{{ $detail->product->name }}</a>
                                                                        <strong class="product-quantity">×
                                                                            {{ $detail->amount }}</strong>
                                                                    </td>
                                                                    <td class="product-total">
                                                                        <span
                                                                            class="amount">{{ $detail->total_amount }}</span>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th scope="row">รวม:</th>
                                                                <td><span class="amount">{{ $order->total }}</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">ค่าส่ง:</th>
                                                                <td><span
                                                                        class="amount">{{ $order->shipping_price }}</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">ประเภทการชำระ:</th>
                                                                <td>
                                                                    <p>ธนาคาร : {{ $order->paymentMethod->bank_name }}
                                                                    </p>
                                                                    <p>ชื่อบัญชี :
                                                                        {{ $order->paymentMethod->bank_account_name }}
                                                                    </p>
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
                                                    <a href="/form-upload-slip/order/{{ $order->id }}"
                                                        class="btn btn-primary">
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
                                        @if ($warrantys)
                                            @foreach ($warrantys as $warranty)
                                                <tr>
                                                    <td>{{ $warranty->serial_no }}</td>
                                                    <td>{{ $warranty->product->sku }}</td>
                                                    <td>{{ date_format(date_create($warranty->warranty_start_date), 'd-m-Y') }}
                                                    </td>
                                                    <td>{{ date_format(date_create($warranty->warranty_end_date), 'd-m-Y') }}
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $statAdmin = $warranty->user_create_id;
                                                        if ($statAdmin == 1):
                                                            echo '<span class="badge badge-danger"> Admin </span>';
                                                        elseif ($statAdmin == 0):
                                                            echo '<span class="badge badge-success"> Other </span>';
                                                        endif;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        @php
                                                            $dateNow = date_create(strval(date('Y-m-d')));
                                                            $dateEnd = date_create($warranty->warranty_end_date);
                                                            $diff = date_diff($dateNow, $dateEnd);
                                                        @endphp
                                                        @if ((int) $diff->format('%R%a') >= 0)
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
                                            <th>วันที่รับเครื่อง</th>
                                            <th>รุ่น:model</th>
                                            <th>รายการซ่อม</th>
                                            <th>ราคา</th>
                                            <th>วันสิ้นสุดประกัน</th>
                                            <th>สถานะประกัน</th>
                                            <th>สถานะซ่อม</th>
                                            <th>ใบแจ้งหนี้</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($repairs)
                                            @foreach ($repairs as $repair)
                                                <tr>
                                                    <!--วันที่รับเครื่อง -->
                                                    <td>
                                                        {{ date_format(date_create($repair->repair_start_date), 'd-m-Y') }}
                                                    </td>
                                                    <!--รุ่น:model -->
                                                    <td>{{ $repair->model }}</td>
                                                    <!--รายการซ่อม -->
                                                    <td>{{ $repair->detail }}</td>
                                                    <!--ราคา -->
                                                    <td>{{ $repair->price }}</td>
                                                    <!--วันสิ้นสุดประกัน -->
                                                    <td>
                                                        {{ date_format(date_create($repair->repair_end_date), 'd-m-Y') }}
                                                    </td>
                                                    <!--สะถานะประกัน -->
                                                    <td>
                                                        @php
                                                            $dateNow = date_create(strval(date('Y-m-d')));
                                                            $dateEnd = date_create($repair->repair_start_date);
                                                            $diff = date_diff($dateNow, $dateEnd);
                                                        @endphp
                                                        @if ((int) $diff->format('%R%a') >= 0)
                                                            <span class="badge badge-success"> อยู่ในประกัน </span>
                                                        @else
                                                            <span class="badge badge-danger"> หมดประกันแล้ว </span>
                                                        @endif

                                                    </td>
                                                    <!--สะถานะซ่อม -->
                                                    <td>
                                                        <?php
                                                        $status = $repair->status;
                                                        if ($status == 1):
                                                            echo '<span class="badge badge-danger"> กำลังดำเนินการ </span>';
                                                        elseif ($status == 2):
                                                            echo '<span class="badge badge-success"> ซ่อมเสร็จแล้ว </span>';
                                                        elseif ($status == 3):
                                                            echo '<span class="badge badge-warning"> ซ่อมไม่ได้ </span>';
                                                        endif;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <!DOCTYPE html>
                                                        <html>

                                                        <head>
                                                            <meta name="viewport"
                                                                content="width=device-width, initial-scale=1">
                                                            <style>
                                                                /* The Modal (background) */
                                                                .modal {
                                                                    display: none;
                                                                    /* Hidden by default */
                                                                    position: fixed;
                                                                    /* Stay in place */
                                                                    z-index: 1;
                                                                    /* Sit on top */
                                                                    padding-top: 100px;
                                                                    /* Location of the box */
                                                                    left: 0;
                                                                    top: 0;
                                                                    width: 100%;
                                                                    /* Full width */
                                                                    height: 100%;
                                                                    /* Full height */
                                                                    overflow: auto;
                                                                    /* Enable scroll if needed */
                                                                    background-color: rgb(0, 0, 0);
                                                                    /* Fallback color */
                                                                    background-color: rgba(0, 0, 0, 0.4);
                                                                    /* Black w/ opacity */
                                                                }

                                                                /* Modal Content */
                                                                .modal-content {
                                                                    background-color: #fefefe;
                                                                    margin: auto;
                                                                    padding: 20px;
                                                                    border: 1px solid #888;
                                                                    width: 70%;
                                                                }

                                                                /* The Close Button */
                                                                .close {
                                                                    color: #aaaaaa;
                                                                    float: right;
                                                                    /* font-size: 28px; */
                                                                    font-weight: bold;
                                                                }

                                                                .close:hover,
                                                                .close:focus {
                                                                    color: #000;
                                                                    text-decoration: none;
                                                                    cursor: pointer;
                                                                }
                                                            </style>
                                                        </head>

                                                        <body>
                                                            <!-- Trigger/Open The Modal -->
                                                            <div id="myBtn">
                                                                <button type="button" class="badge badge-info"><i
                                                                        class="bx bx-printer"></i>ใบแจ้งหนี้</button>
                                                            </div>
                                                            <!-- The Modal -->
                                                            <div id="myModal" class="modal">
                                                                <!-- Modal content -->
                                                                <div class="modal-content"><span
                                                                        class="close">&times;</span>

                                                                    <div id='DivIdToPrint'>

                                                                        <div class="card-header cursor-pointer"
                                                                            data-toggle="collapse"
                                                                            data-target="#last-repair">
                                                                            <h4 class="h4 mb-0"><i
                                                                                    class="bx bx-receipt"></i>
                                                                                ใบแจ้งหนี้/แจ้งชำระ <span
                                                                                    class="amount text-primary"> [ยอดชำระ :
                                                                                    {{ $repair->price + 80 }}
                                                                                    บาท]</span>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="last-repair"
                                                                            class="card-collapse collapse"
                                                                            data-parent="#last-repair">
                                                                            <div class="card-body">
                                                                                <div class="box table-responsive">

                                                                                    <table
                                                                                        class="table cart-table last-repair-table w-100">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th colspan="2">
                                                                                                    {{-- @if ($customerAddress->customer) --}}
                                                                                                    <p>
                                                                                                        <i
                                                                                                            class='bx bx-user'></i>
                                                                                                        ชื่อ :
                                                                                                        <span
                                                                                                            class="text-primary">{{ @$customer->name }}</span>
                                                                                                    </p>
                                                                                                    {{-- @endif --}}
                                                                                                    {{-- @if ($order->orderDeliveryAddress) --}}
                                                                                                    <p>
                                                                                                        <i
                                                                                                            class='bx bx-phone'></i>
                                                                                                        เบอร์โทร :
                                                                                                        {{ @$customer->phone }}
                                                                                                    </p>
                                                                                                    {{-- @endif --}}
                                                                                                    <p>
                                                                                                        <i
                                                                                                            class='bx bxs-map'></i>
                                                                                                        ที่อยู่จัดส่ง
                                                                                                        :
                                                                                                        {{ $customer->customerAddress->address }}
                                                                                                        ต.
                                                                                                        {{ $customer->customerAddress->sub_district }}
                                                                                                        อ.
                                                                                                        {{ $customer->customerAddress->district }}
                                                                                                        จ.
                                                                                                        {{ $customer->customerAddress->province }}
                                                                                                        {{ $customer->customerAddress->zipcode }}
                                                                                                    </p>
                                                                                                </th>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th class="product-name">
                                                                                                    รายการซ่อม
                                                                                                </th>
                                                                                                <th class="product-total">
                                                                                                    ราคา (บาท)
                                                                                                </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>

                                                                                            <tr class="item">
                                                                                                <td class="product-name">
                                                                                                    <a href="#">{{ $repair->model }}
                                                                                                        x
                                                                                                        {{ $repair->detail }}</a>

                                                                                                </td>
                                                                                                <td class="product-total">
                                                                                                    <span
                                                                                                        class="amount">{{ $repair->price }}</span>
                                                                                                </td>
                                                                                            </tr>

                                                                                        </tbody>
                                                                                        <tfoot>
                                                                                            <tr>
                                                                                                <th scope="row">
                                                                                                    ค่าส่ง:</th>
                                                                                                <td><span class="amount">
                                                                                                        80
                                                                                                    </span>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">
                                                                                                    ช่องทางการชำระ:
                                                                                                </th>
                                                                                                <td>
                                                                                                    <p>ธนาคาร :
                                                                                                        ธนาคาไทยพาณิชย์
                                                                                                    </p>
                                                                                                    <p>ชื่อบัญชี :
                                                                                                        นายรชต
                                                                                                        วันเทาแก้ว
                                                                                                    </p>
                                                                                                    <p>เลขที่บัญชี :
                                                                                                        808-2-70209-0
                                                                                                    </p>
                                                                                                    <p><a style="color:red;">*</a>โอนแล้ว :
                                                                                                        รบกวนแจ้งสลิปได้ทางแชท
                                                                                                        <a href="https://liff.line.me/1645278921-kWRPP32q?accountId=hbmobilekk&openerPlatform=native&openerKey=talkroom%3Aheader#mst_challenge=DviURfP2GW9z0o6eoP1xMF0s8C1qRokmKwj55BTIzms"
                                                                                                            style="color:red;"
                                                                                                            target="_blank">
                                                                                                            chat (คลิก)</a>
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th scope="row">
                                                                                                    รวมทั้งสิ้น:
                                                                                                </th>
                                                                                                <td><span
                                                                                                        class="amount text-primary">{{ $repair->price + 80 }}</span>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tfoot>
                                                                                    </table>

                                                                                </div> <!-- /.box -->
                                                                            </div>
                                                                            <div class="text-right">
                                                                                <button class="btn btn-danger"
                                                                                    type="button"
                                                                                    onclick='printDiv();'><i
                                                                                        class="bx bx-printer"></i>Print</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </body>

                                                        </html>
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
                                            <input type="text" class="form-control bg-white border"
                                                name="personal_code"
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
                                                value="{{ $customer->email ? $customer->email : '' }}"
                                                placeholder="E-mail">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">ที่อยู่</label>
                                            <input type="text" class="form-control bg-white border"
                                                placeholder="ที่อยู่" name="address"
                                                value="{{ $customer->customerAddress->address ? $customer->customerAddress->address : '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">จังหวัด</label>
                                            <select class="form-control bg-white border" id="delivery_province"
                                                name="province_code">
                                                <option value="">-- เลือกจังหวัด --</option>
                                                @foreach ($provinces as $province)
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
                                            <input type="text" class="form-control bg-white border"
                                                name="bill_address"
                                                value="{{ $customer->customerBillAddress->address ? $customer->customerBillAddress->address : '' }}"
                                                placeholder="ที่อยู่">
                                        </div>
                                        <div class="form-group">
                                            <label for="">อำเภอ</label>
                                            <select class="form-control bg-white border" id="bill_district"
                                                name="bill_district">
                                                <option value="{{ $customer->customerBillAddress->district_code }}">
                                                    {{ $customer->customerBillAddress->district }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">รหัสไปรษณีย์</label>
                                            <input type="text" class="form-control bg-white border"
                                                name="bill_zipcode" id="bill_zipcode"
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
                                                @foreach ($provinces as $province)
                                                    <option value="{{ $province->code }}"
                                                        {{ $customer->customerBillAddress->province_code == $province->code ? 'selected' : '' }}>
                                                        {{ $province->name_th }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">ตำบล</label>
                                            <select class="form-control bg-white border" id="bill_sub_district"
                                                name="bill_sub_district">
                                                <option
                                                    value="{{ $customer->customerBillAddress->sub_district_code }}">
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
                        $('#delivery_district').append($('<option>').val(element.code).text(
                            element
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
            $.post("{{ route('get-sub-district') }}", data = {
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
            $.post("{{ route('get-zipcode') }}", data = {
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
            $.post("{{ route('get-district') }}", data = {
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
            $.post("{{ route('get-sub-district') }}", data = {
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
            $.post("{{ route('get-zipcode') }}", data = {
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
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function printDiv() {
            var divToPrint = document.getElementById('DivIdToPrint');
            var newWin = window.open('', 'Print-Window');
            newWin.document.open();
            newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
            newWin.document.close();
            setTimeout(function() {
                newWin.close();
            }, 10);
        }
    </script>
@stop
