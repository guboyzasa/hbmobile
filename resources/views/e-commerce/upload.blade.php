@extends('layouts-ecommerce.app')

@section('css')

@endsection

@section('content')

<div class="page-wrapper">
    <section class="section" id="page-checkout">
        <div class="container">
            <form action="{{ route('upload-slip') }}" id="form-upload-slip" method="POST"
                class="row checkout-form inputs-border inputs-bg shadow-lg pt-4 pb-4">
                @csrf
                <div class="col-sm-12 section-title text-center mb-4">
                    <h3><i class="line"></i>อัพโหลดสลิป<i class="line"></i></h3>
                    <p>กรอกรายละเอียดให้ตรงกับสลิป</p> 
                </div>

                <div class="col-md-6">
                    <div class="review-order">
                        <div class="">
                            <div class="form-group">
                                <input type="file" class="form-control formInput" accept="image/*" name="" id="imgFile"
                                    placeholder="กรุณาเลือกรูปภาพ" style="display:none" onchange="loadFile(event)"
                                    required>
                                <input type="hidden" id="imgbase64" name="imgbase64" value="" />
                                <button type="button" style="display:block;" class="btn btn-primary w-100"
                                    onclick="document.getElementById('imgFile').click()"> เลือกรูปภาพ </button>
                            </div>
                            <div class="form-group">
                                <img id="output" style="display: none;" class="img-responsive img-fluid" />
                            </div>
                        </div><!-- /.box -->
                    </div><!-- /.review-order -->
                </div>

                <div class="col-md-6">
                    <div class="billing-field">
                        <div class="form-group">
                            <input type="hidden" id="order_id" name="order_id" value="{{ $order->id }}">
                            <input type="text" class="form-control" value="{{ $order->code }}" placeholder="เลขที่ใบสั่งซื้อ" disbled>
                        </div>

                        <div class="form-group">
                            <div class="required">
                                <select class="form-control" id="payment_method_id" name="payment_method_id">
                                    <option value="" disabled>-- ช่องทางการชำระเงิน --</option>
                                    <option value="1" {{ ($order->payment_method_id == 1) ? 'selected' : ''}}>โอนชำระ</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="date" class="form-control" id="date" name="date" placeholder="วันที่ชำระ" required>
                        </div>

                        <div class="row">
                            <!-- <div class="form-group col-sm-6">
                                <div class="required">
                                    <select class="form-control" id="hour" name="hour" required>
                                        <option value="">-- ชั่วโมง --</option>
                                        @for($i=1;$i<=24;$i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <div class="required">
                                    <select class="form-control" id="min" name="min" required>
                                        <option value="">-- นาที --</option>
                                        @for($i=0;$i<=60;$i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div> -->
                            <div class="form-group col-sm-12">
                                <div class="required">
                                    <input type="time" class="form-control" name="time" id="time">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="required">
                                <input type="text" class="form-control" placeholder="จำนวนเงิน" id="payment_amount" name="payment_amount" value="{{ $order->total_amount }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>รายละเอียดเพิ่มเติม</label>
                            <textarea class="form-control"
                                placeholder="รายละเอียดเพิ่มเติมในการจัดส่ง" rows="4"
                                name="note"></textarea>
                        </div>
                    </div><!-- /.billing-field -->
                </div>

                <div class="col-md-12">
                    <div class="text-center">
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary w-100">อัพโหลดสลิป</button>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-outline-dark w-100">ยกเลิก</button>
                        </div>
                    </div>
                </div>
            </form><!-- /.checkout-form -->
        </div><!-- /.container -->
    </section><!-- #page-checkout -->
</div><!-- /.page-wrapper -->

@endsection

@section('script')
<script>
$(document).ready(function() {

});

var loadFile = function(event) {
    // var image = document.getElementById('output');
    // image.src = URL.createObjectURL(event.target.files[0]);
    resizeImages(event.target.files[0], function(url) {
        $('#imgbase64').val(url);
    });

    var reader = new FileReader();
    reader.onload = function(e) {
        $('#output').attr('src', e.target.result);
        document.getElementById('output').style.display = "block";
    }
    reader.readAsDataURL(event.target.files[0]);
};

function resizeImages(file, com) {
    var reader = new FileReader();
    reader.onload = function(e) {
        var img = new Image();
        img.onload = function() {
            com(resizeInCanvas(img));
        };
        img.src = e.target.result;
    }
    reader.readAsDataURL(file);
}

function resizeInCanvas(img) {
    var perferedWidth = 1048;
    var ratio = perferedWidth / img.width;
    var canvas = $("<canvas>")[0];
    canvas.width = img.width * ratio;
    canvas.height = img.height * ratio;
    var ctx = canvas.getContext("2d");
    ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
    var imgfile = canvas.toDataURL('image/jpeg', 0.5);
    return imgfile;
}

$('#form-upload-slip').submit(function(){
    openLoading()
})



</script>
@stop