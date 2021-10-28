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
                <li class="breadcrumb-item active">กระบวนการผลิตและการรับรอง</li>
            </ol>
        </div>
    </div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
    <section class="section" id="page-default">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto lead text-center">
                    <h1 class="title">กระบวนการผลิตและการรับรอง</h1>
                    <p>
                        ครบเครื่องเรื่องไอที มือถือ โน๊ตบุ๊ค แม็คบุ๊ค iPad iPhone Samsung Huawei Oppo Vivo กล้องวงจรปิด <br><span class="text-primary">093-528-7744 ช่างบอย</span>
                    </p>
                </div><!-- /.block -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-6">
                    <figure class="product-thumbnail text-right">
                        <a href="{{ URL::asset('/assets/dist/images/tisi.png') }}"
                            data-fancybox="images">
                            <img src="{{ URL::asset('/assets/dist/images/tisi.png') }}" class="img-fluid p-2" alt="">
                        </a>
                    </figure>
                </div>
                <div class="col-md-6">
                    <figure class="product-thumbnail text-left">
                        <a href="{{ URL::asset('/assets/dist/images/qr.png') }}"
                            data-fancybox="images">
                            <img src="{{ URL::asset('/assets/dist/images/qr.png') }}" class="img-fluid p-2" alt="">
                        </a>
                    </figure>
                </div>

                <div class="col-md-12">
                    <figure class="product-thumbnail text-center">
                        <a href="{{ URL::asset('/assets/dist/images/pic1.png') }}"
                            data-fancybox="images">
                            <img src="{{ URL::asset('/assets/dist/images/pic1.png') }}" class="img-fluid shadow p-2 w-50"
                                alt="">
                        </a>
                    </figure>
                </div>
                
            </div>
        </div><!-- /.container -->
    </section><!-- #page-default -->
</div><!-- /.page-wrapper -->

@endsection

@section('script')

@stop