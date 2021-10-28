@extends('layouts-ecommerce.app')

@section('css')

@endsection

@section('content')

    <style>
        .inputs input {
            width: 60px;
            height: 60px
        }

    </style>

    <div class="page-head">
        <div class="container">
            <div class="d-flex flex-column flex-md-row">
                <ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('index') }}">หน้าหลัก</a>
                    </li>
                    <li class="breadcrumb-item active">OTP</li>
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
                            <h2 class="mb-4">ยืนยัน OTP หมายเลข {{ $phone }}</h2>
                            <form action="{{ route('otp.verify-change') }}" method="POST"
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
                                <br>
                                <input type="hidden" name="token" value="{{ $token }}">
                                <input type="hidden" name="userId" value="{{ $userId }}">
                                <input type="hidden" name="password" value="{{ $password }}">
                                <input type="hidden" name="checkPassword" value="{{ $checkPassword }}">
                                <div class="inputs d-flex flex-row justify-content-center mt-2">
                                    <input class="m-2 text-center form-control rounded" type="number" name="first"
                                        maxlength="1" />
                                    <input class="m-2 text-center form-control rounded" type="number" name="second"
                                        maxlength="1" />
                                    <input class="m-2 text-center form-control rounded" type="number" name="third"
                                        maxlength="1" />
                                    <input class="m-2 text-center form-control rounded" type="number" name="fourth"
                                        maxlength="1" />
                                    <input class="m-2 text-center form-control rounded" type="number" name="fifth"
                                        maxlength="1" />
                                </div>
                                <br>
                                <div class="inputs d-flex flex-row justify-content-center">ระยะเวลาการยืนยัน = <span
                                        class="ml-2" id="timer"></span></div>
                                <br>
                                <br>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div>
                                        ได้รับ OTP หรือไม่ ? <a class="effect ml-1 mr-1" style="cursor: pointer"
                                            onclick="document.getElementById('sendAgain').submit();"><span
                                                class="text-primary">ส่ง
                                                OTP
                                                อีกครั้ง</span></a>
                                    </div>
                                    <button type="submit" class="btn btn-primary rounded-pill">ยืนยัน</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3">

                        </div>
                    </div>
                </div>
                <form action="{{ route('change-password.change') }}" method="POST" id="sendAgain">
                    @csrf
                    <input type="hidden" name="userId" value="{{ $userId }}">
                    <input type="hidden" name="password" value="{{ $password }}">
                    <input type="hidden" name="checkPassword" value="{{ $checkPassword }}">
                </form>
            </div>
        </section>
    </div>

@endsection

@section('script')
    <script>
        document.getElementById('timer').innerHTML =
            05 + ":" + 1;
        startTimer();


        function startTimer() {
            var presentTime = document.getElementById('timer').innerHTML;
            var timeArray = presentTime.split(/[:]+/);
            var m = timeArray[0];
            var s = checkSecond((timeArray[1] - 1));
            if (s == 59) {
                m = m - 1
            }
            if (m < 0) {
                return
            }

            document.getElementById('timer').innerHTML =
                m + ":" + s;
            console.log(m)
            setTimeout(startTimer, 1000);

        }

        function checkSecond(sec) {
            if (sec < 10 && sec >= 0) {
                sec = "0" + sec
            }; // add zero in front of numbers < 10
            if (sec < 0) {
                sec = "59"
            };
            return sec;
        }
    </script>
@stop
