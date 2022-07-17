@extends('layouts-ecommerce.app')

@section('css')
<meta property="og:title" content="HB Mobile|เฮียบอยโมบาย - เข้าสู่ระบบ"/>
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
                    <li class="breadcrumb-item active">เข้าสู่ระบบ</li>
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
                            <h2 class="mb-4">เข้าสู่ระบบ</h2>
                            <form action="{{ route('login') }}" method="POST" class="login-form inputs-border inputs-bg">
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
                                    <div class="required">
                                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                                            placeholder="Username or Phone number" name="username" required>
                                        {{-- pattern="^[+]?[0-9]{9,12}$" --}}
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="required">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password" name="password" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div>
                                        <input type="checkbox" id="rememberme">
                                        <label for="rememberme" class="checkbox">Remember me</label>
                                    </div>
                                    <a href="{{ route('verify-username') }}" class="effect float-right">ลืมรหัสผ่าน
                                        ?</a>
                                </div>
                                <br>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div>
                                        ต้องการ<a href="{{ route('register-page') }}" class="effect ml-1 mr-1"><span
                                                class="text-primary">สมัครสมาชิก</span></a>หรือไม่ ?
                                    </div>
                                    <button type="submit" class="btn btn-primary rounded-pill">เข้าสู่ระบบ</button>
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
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62cad181a12f7c001a58e62a&product=sticky-share-buttons' async='async'></script>
@stop
