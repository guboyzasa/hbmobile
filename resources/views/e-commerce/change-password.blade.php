@extends('layouts-ecommerce.app')

@section('css')

@endsection

@section('content')

<div class="page-head">
    <div class="container">
        <div class="d-flex flex-column flex-md-row">
            <ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('index') }}">หน้าหลัก</a>
                </li>
                <li class="breadcrumb-item active">เปลี่ยนรหัสผ่าน</li>
            </ol>
        </div>
    </div>
</div>

<div class="page-wrapper">
    <section class="section" id="page-login">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <h2 class="mb-4">เปลี่ยนรหัสผ่าน</h2>
                        <form action="#!" id="change-password" method="POST" class="login-form inputs-border inputs-bg">
                            @csrf
                            <input type="hidden" value="{{ Auth::user() ? Auth::user()->id : '' }}" id="data_id" name="data_id">
                            <div class="form-group">
                                <div class="required">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="new_password" placeholder="รหัสผ่านใหม่">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="required">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" autocomplete="new_password"
                                        placeholder="รหัสผ่านยืนยันใหม่">
                                </div>
                            </div>
                            <br>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <button type="submit" class="btn btn-primary w-100"
                                    data-id="{{ Auth::user() ? Auth::user()->id : '' }}">บันทึก</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-3">
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('script')
<script>
$('#change-password').submit(function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    var password = $('#password').val();
    var passwordConfirm = $('#password-confirm').val();
    if (password == '' || password == null || passwordConfirm == '' || passwordConfirm == null) {
        Swal.fire('ผิดพลาด!', 'กรุณากรอกข้อมูลให้ครบถ้วน', 'warning');
    } else {
        openLoading();
        $.ajax({
            type: "method",
            method: "POST",
            url: "{{ route('change-password') }}",
            processData: false,
            contentType: false,
            data: formData,
            success: function(res) {
                Swal.fire(res.title, res.msg, res.status).then(function(){
                    window.location.href = '{{ route('profile-account') }}';
                });
                closeLoading();
            }
        });
    }
})
</script>
@stop