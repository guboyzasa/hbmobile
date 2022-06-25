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
                    <li class="breadcrumb-item active">สมัครสมาชิก</li>
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
                            <h2 class="mb-4">สมัครสมาชิก</h2>
                            <form action="{{ route('register.create') }}" method="POST"
                                class="register-form inputs-border inputs-bg">
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
                                        <input type="text" class="form-control" placeholder="ชื่อ - นามสกุล" name="name"
                                            required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="required">
                                        <input type="tel" class="form-control"
                                            placeholder="เบอร์โทรศัพท์  เช่น : 0935287744" pattern="^[+]?[0-9]{9,12}$"
                                            name="phone" required>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="required">
                                        <input type="email" class="form-control" placeholder="อีเมล" name="email"
                                            required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="required">
                                        <input type="password" class="form-control"
                                            placeholder="รหัสผ่าน (อย่างน้อย 8 ตัว)" name="password" minlength="8" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="required">
                                        <input type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน"
                                            name="checkPassword" minlength="8" required>
                                        @error('checkPassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div>
                                        ต้องการ<a href="{{ route('login-register') }}" class="effect ml-1 mr-1"><span
                                                class="text-primary">เข้าสู่ระบบ</span></a>หรือไม่ ?
                                    </div>
                                    <button type="submit" class="btn btn-primary rounded-pill">สมัครสมาชิก</button>
                                </div>

                            </form>
                        </div>
                        <div class="col-md-3">

                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>

@endsection

@section('script')
    <script>

    </script>
@stop
