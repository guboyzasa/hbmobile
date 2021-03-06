@extends('layouts-ecommerce.app')

@section('css')
<meta property="og:title" content="HB Mobile|เฮียบอยโมบาย - ติดตั้ง,จำหน่าย,ซ่อมโทรศัพท์,แม็คบุ๊ค,โน้ตบุ๊ค" />
<meta property="og:image" content="{{ URL::asset('/assets/dist/images/img-link/logo-link.png') }}" />
<meta property="og:description"
    content="ครบเครื่องเรื่องไอที : โทรศัพท์, โน้ตบุ๊ค, แม็คบุ๊ค, ปริ้นเตอร์, เครื่องใช้ไฟฟ้า, กล้องวงจรปิด, จานดาวเทียม, โซล่าเซล์, เน็ตเวิร์ก, กราฟิกดีไซน์" />
<meta property="og:site_name" content="https://hbmobilekk.me" />
@endsection

@section('content')
<!-- //braner img// -->
<div class="container">
    <div class="swiper-slider">
        <div class="swiper-wrapper text-center">
            <!-- Slides -->
            @foreach ($banner_imgs as $banner_img)
                <div class="d-flex align-items-center">
                    <img src='https://drive.google.com/uc?id={{ $banner_img->img }}&export=download' class="img-fluid"
                        alt="" style="width:100%;">
                </div>
            @endforeach
        </div>
</div><!-- /.swiper-slider -->
</div>

<section class="section collections pb-0 " id="home-collections">
    <div class="container">
        <div class="row">
            <div class="col-md- 12 col-lg-6 collection">
                <h3 class="text-danger"><span class="autotype"></span></h3>
                <p>
                    <i class="bx bx-check"></i> เปลี่ยนแบต,เปลี่ยนจอ, มือถือ-โน้ตบุ๊ค, เปลี่ยนแป้นพิมพ์
                    <br><i class="bx bx-check"></i> ซ่อมเครื่องตกน้ำ, เปิดไม่ติด, ติดดับเอง, ชาร์จไม่เข้า
                    <br><i class="bx bx-check"></i> ลง Windows Programes, ลง Windows บน MacBook, iMac
                    <br><i class="bx bx-check"></i> ปลด iCloud Clean, รหัสหน้าจอ, Bypass
                    <br><i class="bx bx-check"></i> ปลดเครื่องติดรายเดือน, ติดเครื่อข่าย, Gmail Account
                    <br><i class="bx bx-check"></i> ติดตั้งกล้องวงจรปิด, ติดตั้งโซล่าเซลล์, ติดตั้งจานดาวเทียม
                    <br><i class="bx bx-check"></i> IT, IOT, OS, Osx, Android, Arduino, Rasp pi, Mikrotik
                </p>
            </div><!-- /.collection -->

            @foreach ($product_categorys as $product_category)
            <div class="col-6 col-md-3 collection">
                <a href="products?product_filter_category={{ $product_category->id }}">
                    <img src='{{ URL::asset("get-content/$product_category->logo_img") }}' class="img-fluid" alt="">
                </a>
            </div><!-- /.collection -->
            @endforeach

        </div><!-- /.row -->
        <br>
        <p style="text-align: center;font-size:100%">
            ครบเครื่องเรื่องไอที : โทรศัพท์, โน้ตบุ๊ค, แม็คบุ๊ค, ปริ้นเตอร์,
            เครื่องใช้ไฟฟ้า, กล้องวงจรปิด, จานดาวเทียม, <br> โซล่าเซล์, เน็ตเวิร์ก, กราฟิกดีไซน์
        </p>
    </div><!-- /.container -->

</section><!-- /.collections -->

<!-- produc brand -->
{{-- <section class="section promotions pb-0 small-padding-top" id="promotions">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-title text-center">
                <h3><i class="line"></i>เลือกรายการ<i class="line"></i></h3>
                <!-- <p>สินค้าที่เพิ่มเข้ามาล่าสุด</p> -->
            </div>
            @foreach ($product_brands as $product_brand)
            <div class="col-6 col-md-4">
                <a href="products?product_filter_brand={{$product_brand->id}}">
                    <div class="promotion media">
                        <div class="media-body">
                            <img src='{{ URL::asset("get-content/$product_brand->logo_img") }}' class="img-option"
                                alt="">
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.promotions --> --}}

<section class="section products second-style" id="home-products">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-title text-center">
                <h3><i class="line"></i>สินค้าของเรา<i class="line"></i></h3>
                <p>สินค้าใหม่และแนะนำ</p>
            </div>
            <div class="col-sm-12">
                <div class="masonry row">
                    @foreach ($products as $product)
                    <div class="product col-6 col-lg-3 col-md-6" data-product-id="{{ $product->id }}">
                        <div class="inner-product">

                            @if ($product->is_new == 1)
                            <span class="onsale new">ใหม่ !</span>
                            @elseif($product->is_recommend == 1)
                            <span class="onsale hot">แนะนำ !</span>
                            @endif

                            <div class="product-thumbnail">
                                <img src='{{ URL::asset("get-content/$product->img") }}' class="img-fluid" alt="">
                            </div>
                            <div class="product-details text-center">
                                <div class="product-btns">
                                    <span data-toggle="tooltip" data-placement="top" title="เพิ่มลงตะกร้า">
                                        <a href="#!" class="li-icon add-to-cart product{{ $product->id }}"
                                            data-product-id="{{ $product->id }}" data-path-img="{{ $product->img }}"
                                            data-name="{{ $product->name }}" data-price="{{ $product->price }}"><i
                                                class="bx bxs-cart-add"></i></a>
                                    </span>
                                    <span data-toggle="tooltip" data-placement="top" title="ดูรายละเอียด">
                                        <a href="products/detail/{{ $product->id }}" class="li-icon view-details"><i
                                                class="bx bx-search"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <h4 class="product-title text-too-long"><a href="products/detail/{{ $product->id }}">{{
                                $product->name }}</a></h4>
                        {{-- <div class="star-rating">
                            <span style="width:80%"></span>
                        </div> --}}
                        <p class="product-price text-danger">
                            <ins>
                                <span class="amount">ราคา <b>{{ number_format($product->price) }}</b> บาท</span>
                            </ins>
                        </p>
                    </div><!-- /.product -->
                    @endforeach
                </div><!-- /.masonry -->
            </div>
            <div class="col-sm-12 text-center">
                <a href="/products?product_filter_category=1" class="btn btn-danger rounded-pill">ดูเพิ่มเติม</a>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.products -->

<section class="section brands pt-0 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                {{-- <a href="{{ route('produce') }}">
                    <div class="promotion text-center">
                        <div class="icon">
                            <img src="{{ URL::asset('/assets/dist/images/option/01.png') }}"
                                class="w-126 shadow bx-border-circle" alt="">
                        </div>
                        <h3 class="mt-4 text-danger">การรับรองมาตรฐาน</h3>
                        <p>ได้รับการตรวจสอบและรับรองมาตรญานโดย ม.อ.ก.</p>
                    </div>
                </a> --}}
            </div>

            <div class="col-md-6 col-lg-3">
                {{-- <a href="{{ route('option') }}"> --}}
                    <div class="promotion text-center">
                        <div class="icon">
                            <img src="{{ URL::asset('/assets/dist/images/option/02.png') }}"
                                class="w-126 shadow bx-border-circle" alt="">
                        </div>
                        <h3 class="mt-4 text-danger">ประกันสินค้า</h3>
                        <p>สินค้ารับประกัน 1 ปีเต็ม</p>
                    </div>
                    {{--
                </a> --}}
            </div>

            <div class="col-md-6 col-lg-3">
                {{-- <a href="{{ route('produce') }}"> --}}
                    <div class="promotion text-center">
                        <div class="icon">
                            <img src="{{ URL::asset('/assets/dist/images/option/03.png') }}"
                                class="w-126 shadow bx-border-circle" alt="">
                        </div>
                        <h3 class="mt-4 text-danger">ประกันงานซ่อม</h3>
                        <p>งานซ่อมรับประกัน 3 เดือน</p>
                    </div>
                    {{--
                </a> --}}
            </div>

            <div class="col-md-6 col-lg-3">
                {{-- <a href="{{ route('produce') }}">
                    <div class="promotion text-center">
                        <div class="icon">
                            <img src="{{ URL::asset('/assets/dist/images/option/04.png') }}"
                                class="w-126 shadow bx-border-circle" alt="">
                        </div>
                        <h3 class="mt-4 text-danger">ผ่านการตรวจสอบ</h3>
                        <p>สินค้าทุกชิ้นผ่านการตรวจสอบอย่างดี</p>
                    </div>
                </a> --}}
            </div>
        </div>
    </div>
</section><!-- /.brands -->
@endsection

@section('script')
<script type='text/javascript'
    src='https://platform-api.sharethis.com/js/sharethis.js#property=62cad181a12f7c001a58e62a&product=sticky-share-buttons'
    async='async'></script>
@stop