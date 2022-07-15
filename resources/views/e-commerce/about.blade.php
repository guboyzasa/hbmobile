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
                            <a href="{{ URL::asset('/assets/dist/images/001.png') }}" data-fancybox="images">
                                <img src="{{ URL::asset('/assets/dist/images/001.png') }}" class="img-fluid shadow p-2"
                                    alt="" width="250px">
                            </a>
                        </figure>
                    </div>
                </div>
				<div class="col-md-12">
                    <img style="text-align: center" src='{{ URL::asset('/assets/dist/images/logo.png') }}'
                        class="img-fluid p-2" alt="" width="100px">
                    {{-- <img style="text-align: center" src='{{ URL::asset('/assets/dist/images/tisi.png') }}'
                        class="img-fluid p-2" alt="" width="270px"> --}}
                    <img style="text-align: center" src='{{ URL::asset('/assets/dist/images/qr.png') }}'
                        class="img-fluid p-2" alt="" width="83px">
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
