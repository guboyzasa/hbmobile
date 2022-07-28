@extends('layouts-ecommerce.app')

@section('css')
<meta property="og:title" content="HB Mobile|เฮียบอยโมบาย - เปลี่ยนรหัสผ่าน"/>
<meta property="og:image" content="{{ URL::asset('/assets/dist/images/img-link/logo-link.png') }}"/>
<meta property="og:description" content="ครบเครื่องเรื่องไอที : โทรศัพท์, โน้ตบุ๊ค, แม็คบุ๊ค, ปริ้นเตอร์, เครื่องใช้ไฟฟ้า, กล้องวงจรปิด, จานดาวเทียม, โซล่าเซล์, เน็ตเวิร์ก, กราฟิกดีไซน์"/>
<meta property="og:site_name" content="https://hbmobilekk.me"/>
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
                        <div class="box shadow-lg" style="border-radius: 5px">
                            <h2 class="mb-4">เปลี่ยนรหัสผ่าน</h2>
                            <form action="{{ route('change-password.change') }}" method="POST"
                                class="login-form inputs-border inputs-bg">
                                @csrf

                                @if (Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                @if (Session::get('error'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif

                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="hidden" value="{{ $user->id }}" name="userId">
                                        <div class="required">
                                            <input type="password" class="form-control"
                                                placeholder="รหัสผ่านใหม่ (อย่างน้อย 8 ตัว)" name="password" minlength="8"
                                                required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="required">
                                            <input type="password" class="form-control" placeholder="ยืนยันรหัสผ่านใหม่"
                                                name="checkPassword" minlength="8" required>
                                            @error('checkPassword')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div>
                                        กลับไปยังหน้า<a href="{{ route('login-register') }}"
                                            class="effect ml-1 mr-1"><span class="text-danger">เข้าสู่ระบบ</span></a>
                                    </div>
                                    <button type="submit" class="btn btn-danger" style="border-radius: 5px">ยืนยัน</button>
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

@stop
