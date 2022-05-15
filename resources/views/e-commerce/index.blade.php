@extends('layouts-ecommerce.app')

@section('css')

@endsection

@section('content')
<div class="swiper-slider">
    <!-- Slider main container -->
    <div class="swiper-container" dir="ltr">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper text-center">
            <!-- Slides -->
            @foreach($banner_imgs as $banner_img)
            <div class="swiper-slide">
                {{-- <div class="d-flex align-items-center">
                    <img src='https://drive.google.com/uc?id={{$banner_img->img}}&export=download' class="img-fluid" alt="" style="width:100%;">
                </div> --}}
            </div>
            @endforeach
        </div>

        <!-- If we need pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- If we need navigation buttons -->
        <div class="d-none d-md-block">
            <!-- Remove this "div" to show the navigation on mobile -->
            <div class="swiper-button-prev swiper-button-white"><i class="bx bx-chevron-left"></i></div>
            <div class="swiper-button-next swiper-button-white"><i class="bx bx-chevron-right"></i></div>
        </div>
    </div>
</div><!-- /.swiper-slider -->

<section class="section collections pb-0 " id="home-collections">
    <div class="container">
        <div class="row">
            <div class="col-md- 12 col-lg-6 collection">
                <!-- <a href="#!">
                    <img src="{{ URL::asset('/assets/dist/images/collections/01.jpg') }}" class="img-fluid" alt=""
                        style="margin-top:-30px">
                </a> -->
                <h3 class="text-primary"><span class="autotype"></span></h3>
                <p>
                    ครบเครื่องเรื่องไอที มือถือ โน๊ตบุ๊ค แม็คบุ๊ค iPad iPhone Samsung Huawei Oppo Vivo กล้องวงจรปิด
                </p>
                <p>
                    เปลี่ยนแบตมือถือ  โน๊ตบุ๊ค, เปลี่ยนจอมือถือ  โน๊ตบุ๊ค, เปลี่ยนแป้นพิมพ์โน๊ตบุ๊ค, 
                    ลง Windows  Programes, ลง Windows บน MacBook, iMac, MacAir
                </p>
                <p>
                    ปลด  iCloud Clean - รหัสหน้าจอ - Bypass, ปลดเครื่องติดรายเดือน - ติดเครื่อข่าย - Gmail Account, 
                    กล้องวงจรปิด, โซล่าเซลล์, จานดาวเทียม, ครบเครื่องเรื่อง IT, IOT, มือถือ, โน๊ตบุ๊ค, แม็กบุ๊ค
                </p>
            </div><!-- /.collection -->
            <div class="col-md-12 col-lg-6 collection">
                <div class="row">
                    @foreach($product_categorys as $product_category)
                    <div class="col-6 col-md-6 collection">
                        <a href="products?product_filter_category={{$product_category->id}}">
                            <img src='{{ URL::asset("get-content/$product_category->logo_img") }}' class="img-fluid" alt="">
                        </a>
                    </div><!-- /.collection -->
                    @endforeach
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.collections -->

<section class="section promotions pb-0 small-padding-top" id="promotions">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-title text-center">
                <h3><i class="line"></i>เลือกรายการ<i class="line"></i></h3>
                <!-- <p>สินค้าที่เพิ่มเข้ามาล่าสุด</p> -->
            </div>
            @foreach($product_brands as $product_brand)
            <div class="col-6 col-md-4">
                <a href="products?product_filter_brand={{$product_brand->id}}">
                    <div class="promotion media">
                        <div class="media-body">
                            <img src='{{ URL::asset("get-content/$product_brand->logo_img") }}' class="img-option" alt="">
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.promotions -->

{{-- <section class="section products second-style" id="home-products">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-title text-center">
                <h3><i class="line"></i>สินค้าของเรา<i class="line"></i></h3>
                <p>สินค้าใหม่และแนะนำ</p>
            </div>
            <div class="col-sm-12">
                <div class="masonry row">
                  
                    @foreach($products as $key => $product)
                    <div class="product col-6 col-lg-3 col-md-6" data-product-id="{{ $product->id }}">
                        <div class="inner-product">
                            @if($product->is_new == 1)
                            <span class="onsale new">ใหม่ !</span>
                            @elseif($product->is_recommend == 1)
                            <span class="onsale hot">แนะนำ !</span>
                            @endif
                            <div class="product-thumbnail">
                                <img src='{{ URL::asset("get-content/$product->img") }}'
                                    class="img-fluid" alt="">
                            </div>
                            <div class="product-details text-center">
                                <div class="product-btns">
                                    <span data-toggle="tooltip" data-placement="top" title="เพิ่มลงตระกร้า">
                                        <a href="#!" class="li-icon add-to-cart product{{ $product->id }}"
                                            data-product-id="{{ $product->id }}" data-path-img="{{ $product->img }}"
                                            data-name="{{ $product->name }}" data-price="{{ $product->price }}"><i
                                                class="bx bxs-cart"></i></a>
                                    </span>
                                    <span data-toggle="tooltip" data-placement="top" title="ดูรายละเอียด">
                                        <a href="products/detail/{{ $product->id }}" class="li-icon view-details"><i
                                                class="bx bx-search"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <h4 class="product-title text-too-long"><a href="products/detail/{{ $product->id }}">{{ $product->name }}</a></h4>
                        <!-- <div class="star-rating">
                            <span style="width:90%"></span>
                        </div> -->
                        <p class="product-price text-primary">
                            <ins>
                            <span class="amount">ราคา <b>{{ number_format($product->price) }}</b> บาท</span>
                            </ins>
                            <!-- <del>
                                <span class="amount">150.00 บาท</span>
                            </del> -->
                        </p>
                    </div><!-- /.product -->
                    @endforeach
                    
                </div><!-- /.masonry -->
            </div>
            <div class="col-sm-12 text-center">
                <a href="/products?product_filter_category=1" class="btn btn-primary rounded-pill">ดูเพิ่มเติม</a>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.products --> --}}

<section class="section brands pt-0 pb-4">
    <div class="container">
        <div class="row">

           
            {{-- <div class="col-md-6 col-lg-3">
                <a href="{{ route('produce') }}">
                <div class="promotion text-center">
                    <div class="icon">
                        <img src="{{ URL::asset('/assets/dist/images/option/01.png') }}" class="w-126 shadow bx-border-circle" alt="">
                    </div>
                    <h3 class="mt-4 text-primary">การรับรองมาตรฐาน</h3>
                    <p>ได้รับการตรวจสอบและรับรองมาตรญานโดย ม.อ.ก.</p>
                </div>
                 </a>
            </div> --}}
           
            <div class="col-md-6 col-lg-3">
                <a href="{{ route('option') }}">
                <div class="promotion text-center">
                    <div class="icon">
                        <img src="{{ URL::asset('/assets/dist/images/option/02.png') }}" class="w-126 shadow bx-border-circle" alt="">
                    </div>
                    <h3 class="mt-4 text-primary">ประกันสินค้า</h3>
                    <p>สินค้ารับประกัน 1 ปีเต็ม</p>
                </div>
                </a>
            </div>

            {{-- <div class="col-md-6 col-lg-3">
                <a href="{{ route('produce') }}">
                <div class="promotion text-center">
                    <div class="icon">
                        <img src="{{ URL::asset('/assets/dist/images/option/03.png') }}" class="w-126 shadow bx-border-circle" alt="">
                    </div>
                    <h3 class="mt-4 text-primary">ประกันอุบัติเหตุ</h3>
                    <p>มีประกันอุบัติเหตุสูงสุด 1 ล้านบาท</p>
                </div>
                </a>
            </div> --}}

            {{-- <div class="col-md-6 col-lg-3">
                <a href="{{ route('produce') }}">
                <div class="promotion text-center">
                    <div class="icon">
                        <img src="{{ URL::asset('/assets/dist/images/option/04.png') }}" class="w-126 shadow bx-border-circle" alt="">
                    </div>
                    <h3 class="mt-4 text-primary">ผ่านการตรวจสอบ</h3>
                    <p>สินค้าทุกชิ้นผ่านการตรวจสอบอย่างดี</p>
                </div>
                </a>
            </div> --}}
        </div>
    </div>
</section><!-- /.brands -->
@endsection

@section('script')

@stop