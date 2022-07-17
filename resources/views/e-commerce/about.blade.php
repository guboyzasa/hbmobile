@extends('layouts-ecommerce.app')

@section('css')
<meta property="og:title" content="HB Mobile|เฮียบอยโมบาย - เกี่ยวกับเรา"/>
<meta property="og:image" content="{{ URL::asset('/assets/dist/images/img-link/dbdreg-link.png') }}"/>
<meta property="og:description" content="ครบเครื่องเรื่องไอที : โทรศัพท์, โน้ตบุ๊ค, แม็คบุ๊ค, ปริ้นเตอร์, เครื่องใช้ไฟฟ้า, กล้องวงจรปิด, จานดาวเทียม, โซล่าเซล์, เน็ตเวิร์ก, กราฟิกดีไซน์"/>
<meta property="og:site_name" content="https://hbmobilekk.me"/>
@endsection

@section('content')

    <div class="page-head">
        <div class="container">
            <div class="d-flex flex-column flex-md-row">
                <ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('index') }}">หน้าแรก</a>
                    </li>
                    <li class="breadcrumb-item active">เกี่ยวกับเรา</li>
                </ol>
            </div>
        </div><!-- /.container -->
    </div><!-- /.page-head -->

    <div style="text-align: center" class="page-wrapper">
        <section class="section" id="page-about">
            <div class="container">
                <div class="card card-default">
                <div class="col-sm-12 text-center">
                    <h2></i>เฮียบอยโมบาย เซอร์วิส</i></h2>
                    <p>HB Mobile Services</p>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <figure class="product-thumbnail text-center">
                            <a href="{{ URL::asset('/assets/dist/images/dbdregcom.png') }}" data-fancybox="images">
                                <img src="{{ URL::asset('/assets/dist/images/dbdregcom.png') }}" class="img-fluid shadow p-2"
                                    alt="" width="250px">
                            </a>
                        </figure>
                        <button class="btn btn-primary rounded-pill"><a href="https://dbdregcom.dbd.go.th/regc-app/public/rcp010700.xhtml?qr=5d2f2a95-5666-49c0-8994-da931d609a69" target="_blank"><b style="color: white">dbdregcom</b></a></button>
                    </div>
                </div>
				<div class="col-md-12">
                    <img style="text-align: center" src='{{ URL::asset('/assets/dist/images/logo.png') }}'
                        class="img-fluid p-2" alt="" width="150px">
                    {{-- <img style="text-align: center" src='{{ URL::asset('/assets/dist/images/tisi.png') }}'
                        class="img-fluid p-2" alt="" width="270px"> --}}
                    <img style="text-align: center" src='{{ URL::asset('/assets/dist/images/logo-img.png') }}'
                        class="img-fluid p-2" alt="" width="127px">
                </div>
                </div>
            </div><!-- /.row -->
    </div><!-- /.container -->
    </section><!-- #page-about -->
    </div><!-- /.page-wrapper -->

@endsection

@section('script')
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62cad181a12f7c001a58e62a&product=sticky-share-buttons' async='async'></script>
@stop
