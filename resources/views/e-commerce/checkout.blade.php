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
                <li class="breadcrumb-item active">สั่งซื้อสินค้า</li>
            </ol>
        </div>
    </div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
    <section class="section" id="page-checkout">
        <div class="container">
            <form action="{{ route('order-received') }}" id="form-checkout" method="POST"
                class="row checkout-form inputs-border inputs-bg">
                @csrf

                <div class="col-md-6">
                    <div class="billing-field">
                        <h3 class="title">รายละเอียดการจัดส่ง</h3>

                        <div class="row">
                            <div class="form-group col-sm-12">
                                <div class="required">
                                    <input type="text" class="form-control" placeholder="ชื่อ"
                                        name="delivery_first_name" value="{{ $customer->name }}" required>
                                </div>
                            </div>

                            {{-- <div class="form-group col-sm-6">
                                <div class="required">
                                    <input type="text" class="form-control" placeholder="นามสกุล"
                                        name="delivery_last_name" required>
                                </div>
                            </div> --}}
                        </div>

                        {{-- <div class="form-group">

                            <input type="text" class="form-control" placeholder="ชื่อบริษัท">
                        </div> --}}
                        {{-- 
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="เลขประจำตัวผู้เสียภาษี"
                                value="{{ @$customer->personal_code }}" name="personal_code">
                        </div> --}}

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <div class="required">
                                    <input type="email" class="form-control" placeholder="Email" name="delivery_email"
                                        value="{{  @$customer->email }}" required>
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <div class="required">
                                    <input type="tel" class="form-control" placeholder="เบอร์โทร"
                                        name="delivery_customer_tel" value="{{  @$customer->phone }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-12">
                                <div class="required">
                                    <input type="text" class="form-control" placeholder="ที่อยู่"
                                        name="delivery_address" value="{{ $customer->customerAddress->address }}"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="required">
                                <select class="form-control" id="delivery_province" name="delivery_province">
                                    <option value="">-- เลือกจังหวัด --</option>
                                    @foreach($provinces as $province)
                                    <option value="{{ $province->code }}" >{{ $province->name_th }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <div class="required">
                                    <select class="form-control" id="delivery_district" name="delivery_district" 
                                        disabled>
                                        {{-- <option value="{{ $customer->customerAddress->district_code }}">{{ $customer->customerAddress->district }}</option> --}}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <div class="required">
                                    <select class="form-control" id="delivery_sub_district" name="delivery_sub_district" 
                                        disabled>
                                        {{-- <option value="{{ $customer->customerAddress->sub_district_code }}">{{ $customer->customerAddress->sub_district }}</option> --}}
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="required">
                                <input type="text" class="form-control" placeholder="รหัสไปรษณีย์"
                                    name="delivery_zipcode" id="delivery_zipcode" value="" required disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <h3 id="check-bill-address">
                                <input type="checkbox" id="ship-different-address" name="ship_different_address"
                                    class="check-bill">
                                <label for="ship-different-address" class="checkbox"
                                    data-slide-toggle=".different-address">
                                    ที่อยู่ออกบิล
                                </label>
                            </h3>
                            <div class="different-address box" style="display: none;">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <div class="required">
                                            <input type="text" class="form-control" placeholder="ชื่อจริง"
                                                 value="{{ @$customer->customerBillAddress->name }}"  name="bill_first_name" id="bill_first_name">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group col-sm-6">
                                        <div class="required">
                                            <input type="text" class="form-control" placeholder="นามสกุล"
                                                name="bill_last_name" id="bill_last_name">
                                        </div>
                                    </div> --}}
                                </div>

                                {{-- <div class="form-group">
                                    <br>
                                    <input type="text" class="form-control" placeholder="ชื่อบริษัท">
                                </div> --}}

                                <div class="form-group">
                                    <br>
                                    <input type="text" class="form-control" placeholder="เลขประจำตัวผู้เสียภาษี"
                                        value="{{ @$customer->personal_code }}" name="bill_personal_code">
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <div class="required">
                                            <input type="email" class="form-control" placeholder="Email" name="bill_customer_email"
                                                value="{{ @$customer->email }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <div class="required">
                                            <input type="tel" class="form-control" placeholder="เบอร์โทร"
                                                name="bill_customer_tel" value="{{  @$customer->phone }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <div class="required">
                                                <input type="text" class="form-control" placeholder="ที่อยู่"
                                                    name="bill_address">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="required">
                                        <select class="form-control" name="bill_province" id="bill_province">
                                            <option>กรุณาเลือกจังหวัด..</option>
                                            @foreach($provinces as $province)
                                            <option value="{{ $province->code }}">{{ $province->name_th }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <div class="form-group">
                                            <div class="required">
                                                <select class="form-control" name="bill_district" id="bill_district">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <div class="form-group">
                                            <div class="required">
                                                <select class="form-control" name="bill_sub_district"
                                                    id="bill_sub_district">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="required">
                                        <input type="text" class="form-control" placeholder="รหัสไปรษณีย์"
                                            id="bill_zipcode" name="bill_zipcode">
                                    </div>
                                </div>
                            </div><!-- /.create-account -->
                        </div>

                        <div class="form-group">
                            <label>รายละเอียดเพิ่มเติม</label>
                            <textarea class="form-control"
                                placeholder="รายละเอียดเพิ่มเติมในการจัดส่ง" rows="4"
                                name="note"></textarea>
                        </div>
                    </div><!-- /.billing-field -->
                </div>

                <div class="col-md-6">
                    <div class="review-order">
                        <div class="box">
                            <h3 class="title">ออเดอร์ของคุณ</h3>
                            <div class="table-responsive">
                                <table class="table cart-table review-order-table">
                                    <thead>
                                        <tr>
                                            <th class="product-name" colspan="2">สินค้า</th>
                                            <th class="product-total">รวม</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($bigDatas['products'])
                                        @foreach($bigDatas['products'] as $product)
                                        <tr class="item">
                                            <td class="product-name" colspan="2">
                                                {{ $product['product_name'] }} <strong
                                                    class="product-quantity text-danger"> ×
                                                    {{ $product['qty'] }}</strong>
                                                <input type="hidden" name="product_id[]"
                                                    value="{{ $product['product_id'] }}">
                                                <input type="hidden" name="qty[]" value="{{ $product['qty'] }}">
                                            </td>
                                            <td class="product-total">
                                                <span
                                                    class="amount">{{ number_format($product['qty'] * $product['price'],2) }}</span>
                                                บาท
                                                <input type="hidden" name="product_price[]"
                                                    value="{{ $product['price'] }}">
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th colspan="2">รวม</th>
                                            <td>
                                                <span class="amount">{{ $bigDatas['subTotal'] }}</span> บาท
                                                <input type="hidden" name="total" value="{{ $bigDatas['subTotal'] }}">
                                            </td>
                                        </tr>
                                        <tr class="shipping">
                                            <th colspan="2">
                                                ค่าส่ง {{ $bigDatas['shipping']->name }}
                                                <input type="hidden" name="shipping_id"
                                                    value="{{ $bigDatas['shipping']->id }}">
                                            </th>
                                            <td>
                                                <p>{{ $bigDatas['shipping']->price }} บาท</p>
                                                <input type="hidden" name="shipping_price"
                                                    value="{{ $bigDatas['shipping']->price }}">
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th colspan="2">รวมทั้งสิน</th>
                                            <td>
                                                <strong><span
                                                        class="amount text-danger">{{ $bigDatas['summary'] }}</span>
                                                    บาท</strong>
                                                <input type="hidden" name="total_amount"
                                                    value="{{ $bigDatas['summary'] }}">
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table><!-- /.review-order-table -->
                            </div>

                            <h2>วิธีการชำระเงิน</h2>
                            <div id="payment" class="checkout-payment">
                                <ul class="payment-methods">
                                    <div class="container">
                                <div class="row">
                                    <li class="payment-method">
                                        @foreach ($paymentMethod as $payment)
                                        <input id="payment_method_cheque_{{ $payment->id }}" type="radio"
                                            name="payment_method" checked="checked" value="1">
                                        <label for="payment_method_cheque_{{ $payment->id }}" class="radio"
                                            data-slide-toggle="#payment-cheque-{{ $payment->id }}"
                                            data-parent=".payment-methods">
                                            โอนชำระ: {{ $payment->bank_name }}

                                            <br>ชื่อบัญชี: {{ $payment->bank_account_name }}
                                            <br>เลขที่บัญชี: {{ $payment->bank_account_no }}
                                        </label @endforeach>
                                       
                                    </li>
                                    <li class="col">
                                    {{-- <div class=""> --}}
                                        <figure class="product-thumbnail text-right">
                                            <a href="{{ URL::asset('/assets/dist/images/qr-payment.PNG') }}" data-fancybox="images">
                                                <img src="{{ URL::asset('/assets/dist/images/qr-payment.PNG') }}" class="img-fluid shadow p-1"
                                                    alt="" width="45px">
                                            </a>
                                        </figure>
                                    </li>  
                                </div> 
                                    </div>
                                        {{-- </div> --}}
                                    <!-- <li class="payment-method">
                                        <input id="payment_method_cod" type="radio" name="payment_method">
                                        <label for="payment_method_cod" class="radio" data-slide-toggle="#payment-cash"
                                            data-parent=".payment-methods">Cash on Delivery</label>

                                        <div class="payment-box" id="payment-cash" style="display:none;">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </li> -->
                                    <!-- <li class="payment-method">
                                        <input id="payment_method_paypal" type="radio" name="payment_method">
                                        <label for="payment_method_paypal" class="radio"
                                            data-slide-toggle="#payment-paypal"
                                            data-parent=".payment-methods">PayPal</label>

                                        <div class="payment-box" id="payment-paypal" style="display:none;">
                                            <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"
                                                class="img-fluid" alt="">
                                            <p><a href="#!" class="effect">What is PayPal?</a></p>
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a
                                                PayPal account.</p>
                                        </div>
                                    </li> -->
                                </ul>
                                <div class="text-right">
                                    <button type="button" id="store-btn" class="btn btn-danger">สั่งซื้อสินค้า</button>
                                    <button type="submit" id="store-hidden-btn" class="d-none">save</button>
                                </div>
                            </div>
                        </div><!-- /.box -->
                    </div><!-- /.review-order -->
                </div>
            </form><!-- /.checkout-form -->
        </div><!-- /.container -->
    </section><!-- #page-checkout -->
</div><!-- /.page-wrapper -->
@endsection

@section('script')
<script>
$("#store-btn").click(function() {
    Swal.fire({
        title: 'กรุณายืนยันการสั่งซื้อสินค้า ?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'ยืนยัน',
        cancelButtonText: 'ยกเลิก',
    }).then((result) => {
        if (result.isConfirmed) {
            $(this).attr('disabled', true);
            $('#store-hidden-btn').click();
        }
    })
})

$('#check-bill-address').click(function() {
    check = $(this).find(".check-bill")
    if ($(check).prop("checked")) {
        $('#bill_first_name').prop('required', true);
        $('#bill_last_name').prop('required', true);
        $('#bill_address').prop('required', true);
        $('#bill_province').prop('required', true);
        $('#bill_district').prop('required', true);
        $('#bill_sub_district').prop('required', true);
        $('#bill_zipcode').prop('required', true);
    } else {
        $('#bill_first_name').prop('required', false);
        $('#bill_last_name').prop('required', false);
        $('#bill_address').prop('required', false);
        $('#bill_province').prop('required', false);
        $('#bill_district').prop('required', false);
        $('#bill_sub_district').prop('required', false);
        $('#bill_zipcode').prop('required', false);
    }
})

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

// 
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
</script>
@stop