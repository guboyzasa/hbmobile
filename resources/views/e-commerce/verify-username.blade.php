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
                            <h2 class="mb-4">ยืนยันหมายเลขโทรศัพท์</h2>
                            <form action="{{ route('change-password.verify-username') }}" method="POST"
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
                                <br>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div>
                                        กลับไปยังหน้า<a href="{{ route('login-register') }}"
                                            class="effect ml-1 mr-1"><span class="text-primary">เข้าสู่ระบบ</span></a>
                                    </div>
                                    <button type="submit" class="btn btn-primary rounded-pill">ตกลง</button>
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
