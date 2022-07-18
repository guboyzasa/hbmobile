@extends('layouts-ecommerce.app')

@section('css')

@endsection

@section('content')

<div class="page-head">
    <div class="container">
        <div class="d-flex flex-column flex-md-row">
            <ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="checkout.html">Checkout</a>
                </li>
                <li class="breadcrumb-item active">Order Received</li>
            </ol>
        </div>
    </div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
    <section class="section" id="page-order-received">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if($alert=='success')
                    <div class="alert alert-danger">Thank you, Your order has been received. {{ $msg }}</div>
					@else
					<div class="alert alert-danger">Error. {{ $msg }}</div>
                    @endif
                    <ul class="order-details">
                        <li class="order">
                            รหัสใบสั่งซื้อ: <strong>{{ $order->code }}</strong>
                        </li>
                        <li class="date">
                            วันที่สั่ง: <strong>{{ $order->created_at }}</strong>
                        </li>
                        <li class="total">
							รวมทั้งสิ้น: <strong><span class="amount">{{ $order->total_amount }}</span></strong>
                        </li>
                        <li class="method">
                            วิธีการชำระ: <strong>{{ $order->created_at }}</strong>
                        </li>
                    </ul><!-- /.order-details -->

                    {{-- <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store
                        Postcode.</p> --}}
                    <div class="box table-responsive">
                        <h3 class="title">รายการสั่งซื้อ</h3>
                        <table class="table cart-table order-details-table">
                            <thead>
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
                                <!-- <tr class="item">
                                    <td class="product-name">
                                        <a href="product.html">Patterned Scarf</a> <strong class="product-quantity">×
                                            1</strong>
                                    </td>
                                    <td class="product-total">
                                        <span class="amount">$90.00</span>
                                    </td>
                                </tr> -->
                                <!-- <tr class="item">
                                    <td class="product-name">
                                        <a href="product.html">Bag Maroon</a> <strong class="product-quantity">×
                                            1</strong>
                                        <table class="variation">
                                            <tbody>
                                                <tr>
                                                    <th class="variation-size">Size:</th>
                                                    <td class="variation-size">
                                                        <p>Large</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="product-total">
                                        <span class="amount">$450.00</span>
                                    </td>
                                </tr> -->
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
                                        <p>{{ $order->orderPayment->bank_name }}</p>
                                        <p>{{ $order->orderPayment->bank_account_name }}</p>
                                        <p>{{ $order->orderPayment->bank_account_no }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">รวมทั้งสิ้น:</th>
                                    <td><span class="amount">{{ $order->total_amount }}</span></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box -->
                    <div class="text-right">
                        <a href="/form-upload-slip/order/{{ $order->id }}" class="btn btn-danger">อัพโหลดสลิป</a>
                        <a href="{{ route('index') }}" class="btn btn-light">กลับหน้าแรก</a>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- #page-order-received -->
</div><!-- /.page-wrapper -->

@endsection

@section('script')
<script>
$(document).ready(function() {
    sessionStorage.clear();
})
</script>
@stop