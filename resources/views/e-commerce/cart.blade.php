@extends('layouts-ecommerce.app')

@section('css')

@endsection

@section('content')
<div class="page-head">
    <div class="container">
        <div class="d-flex flex-column flex-md-row">
            <ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('index') }}">หน้าแรก</a>
                </li>
                <li class="breadcrumb-item active">ตะกร้า</li>
            </ol>
        </div>
    </div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
    <section class="section" id="page-cart">
        <div class="container">
            <div class="card shadow-lg" style="border-radius: 10px">
                <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive-sm">
                        <form action="{{ route('checkout') }}" id="form-cart" method="post">
                            @csrf
                            <table class="table cart-table" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="product-remove">#</th>
                                        <th class="product-thumbnail"></th>
                                        <th class="product-name">สินค้า</th>
                                        <th class="product-price">ราคา</th>
                                        <th class="product-quantity">จำนวน</th>
                                        <th class="product-subtotal">ราคารวม</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($products)
                                    @foreach($products as $product)
                                    <tr class="item">
                                        <td class="product-remove">
                                            {{-- <a href="#!" class="remove" title="remove this item"><i class="bx bx-x"></i></a> --}}
                                            <input type="hidden"  name="product_id[]" value="{{ $product->id }}">
                                         
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="products/detail/{{ $product->id }}">
                                                <img src='{{ URL::asset("get-content/$product->img") }}' alt=""
                                                    class="img-fluid">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="products/detail/{{ $product->id }}">{{ $product->name }}</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="price">{{ $product->price }}</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="quantity">
                                                <input type="button" value="+" class="plus">
                                                <input type="number" step="1" max="1000" min="1" value="1" title="Qty"
                                                    class="qty" size="4" name="qty[]" readonly>
                                                <input type="button" value="-" class="minus">
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="subPrice">{{ $product->price }}</span>
                                            <input type="hidden" class="input-subPrice" name="subPrice[]" value="{{ $product->price }}">
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif

                                    <tr>
                                        <td colspan="6" class="actions">
                                            <div class="row">
                                                <div class="coupon col-lg-5">
                                                    <div class="row">
                                                        <label class="col-sm-2">ส่งโดย</label>
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <select class="form-control" id="shipping_method" name="shipping_method">
                                                                    @foreach($shippings as $shipping)
                                                                    <option value="{{ $shipping->id }}"
                                                                        data-price="{{ $shipping->price }}">
                                                                        {{ $shipping->name }}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="cart-collaterals col-lg-5 offset-lg-2">
                                                    <div class="cart-totals">
                                                        <h2>Cart Totals</h2>
                                                        <table class="table table-condensed" cellspacing="0">
                                                            <tbody>
                                                                <tr class="cart-subtotal">
                                                                    <th>ราคา</th>
                                                                    <td class="text-right">
                                                                        <span class="subTotal" id="subTotal"></span> บาท
                                                                        <input type="hidden" name="subTotal" id="inputSubTotal">
                                                                    </td>
                                                                </tr>
                                                                <tr class="shipping">
                                                                    <th>ค่าส่ง
                                                                        <!-- <div class="form-group">
                                                                            <label for="attr_1">ส่งโดย</label>
                                                                            <select class="form-control"
                                                                                id="shipping_method">
                                                                                @foreach($shippings as $shipping)
                                                                                <option value="{{ $shipping->id }}"
                                                                                    data-price="{{ $shipping->price }}">
                                                                                    {{ $shipping->name }}
                                                                                </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div> -->
                                                                    </th>
                                                                    <td class="text-right">
                                                                        <span class="shipping" id="shipping"></span> บาท
                                                                        <input type="hidden" name="shipping" id="inputShipping">
                                                                    </td>
                                                                </tr>
                                                                <tr class="order-total">
                                                                    <th>รวมทั้งสิน</th>
                                                                    <td class="text-right">
                                                                        <strong>
                                                                            <span class="summary" id="summary"></span> บาท
                                                                        </strong>
                                                                        <input type="hidden" name="summary" id="inputSummary">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <div class="form-group clearfix d-flex align-items-center justify-content-between">
                                                            <div class="ml-auto">
                                                                <button type="submit" class="btn btn-danger" style="border-radius: 10px">สั่งซื้อสินค้า</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div><!-- /.table-responsive -->
                </div>
            </div><!-- /.row -->
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- #page-cart -->
</div><!-- /.page-wrapper -->

@endsection

@section('script')
<script>
$(document).ready(function() {
    calSubtotal()
    price = $('option:selected').attr('data-price')
    $('#shipping').text(price)
    $('#inputShipping').val(price)
    calSummary()
})

$('#shipping_method').on('change', function(e) {
    price = $('option:selected').attr('data-price')
    $('#shipping').text(price)
    $('#inputShipping').val(price)
    calSummary()
})

function calSubtotal() {
    var sum = 0;
    $(".subPrice").each(function() {
        total = parseFloat($(this).text()); //รับค่ามาเก็บไว้ในตัวแปล
        if (total) {
            sum += total; //นำค่าไปมาเก็บไว้ในตัวแปล เรื่อยๆ
        }
    });
    subTotal = parseFloat(sum).toFixed(2)
    $("#subTotal").text(subTotal)
    $("#inputSubTotal").val(subTotal)
}

function calSummary() {
    subTotal = parseFloat($('#subTotal').text())
    shipping = parseFloat($('#shipping').text())
    summary = parseFloat(subTotal + shipping).toFixed(2)
    $('#summary').text(summary)
    $('#inputSummary').val(summary)
}
</script>
@stop