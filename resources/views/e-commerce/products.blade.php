@extends('layouts-ecommerce.app')

@section('css')
<meta property="og:title" content="HB Mobile|เฮียบอยโมบาย - สินค้าทั้งหมด" />
<meta property="og:image" content="{{ URL::asset('/assets/dist/images/img-link/products.png') }}" />
<meta property="og:description"
    content="ครบเครื่องเรื่องไอที : โทรศัพท์, โน้ตบุ๊ค, แม็คบุ๊ค, ปริ้นเตอร์, เครื่องใช้ไฟฟ้า, กล้องวงจรปิด, จานดาวเทียม, โซล่าเซล์, เน็ตเวิร์ก, กราฟิกดีไซน์" />
<meta property="og:site_name" content="https://hbmobilekk.me" />
@endsection

@section('content')

<div class="page-head">
    <div class="container">
        <div class="d-flex flex-column flex-md-row">
            <ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('index') }}">หน้าแรก</a>
                </li>
                <li class="breadcrumb-item active">สินค้าทั้งหมด</li>
            </ol>
        </div>
    </div><!-- /.container -->
</div><!-- /.page-head -->

{{-- <section class="section products second-style">
    <div class="container">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row flex-nowrap">
                        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-white">
                            <div
                                class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                                <!-- <p
                                    class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-black text-decoration-none">
                                    <span class="fs-5 d-none d-sm-inline"><strong><b>หมวดหมู่สินค้า</b></strong></span>
                                </p> -->
                                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start products-filter list-unstyled"
                                    id="menu">
                                    <!-- <li class="nav-item">
                                        <a href="#" class="nav-link align-middle px-0">
                                            <i class="bx bx-home"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                        </a>
                                    </li> -->
                                    <h5 class="card-title text-center text-primary">หมวดหมู่สินค้า<i
                                            class='bx bx-store-alt'></i></h5>
                                    <li
                                        class="{{ !isset($product_filter_category) && !isset($product_filter_brand) ? 'active' : '' }}">
                                        <a href="#!" onclick="hideBtnBrandFilter()" data-filter="*"
                                            class="nav-link px-0">สินค้าทั้งหมด</a>
                                    </li>
                                    @foreach($product_categorys as $product_category)
                                    <li
                                        class="{{$product_category['id'] == $product_filter_category ? 'active' : '' }}">
                                        <a href="#!" onclick="showBtnBrandFilter({{$product_category['id']}})"
                                            data-filter=".category-{{$product_category['id']}}"
                                            class="nav-link px-0">{{$product_category['name']}}</a>
                                    </li>
                                    @endforeach
                                    <li>
                                        <a href="#!" onclick="hideBtnBrandFilter()" class="text-violet nav-link px-0"
                                            data-filter=".category-new">ใหม่</a>
                                    </li>
                                    <li>
                                        <a href="#!" onclick="hideBtnBrandFilter()" class="text-secondary nav-link px-0"
                                            data-filter=".category-recommend">แนะนำ</a>
                                    </li>
                                </ul>
                                <hr>
                            </div>
                        </div>
                        <div class="col py-3">
                            <div class="container">
                                <div class="col-sm-12">
                                    <ul class="products-filter list-unstyled">
                                        <h5 class="card-title text-center text-primary">แบรนด์</h5>
                                        @foreach($product_categorys as $product_category)
                                        @foreach ( $product_category['brands'] as $brand)
                                        <li
                                            class="cataegory-brand category-{{$product_category['id']}}-brand d-none  {{$brand->id == $product_filter_brand && $product_category['id'] == 2 ? 'active' : '' }}">
                                            <a href="#!" onclick="showBtnBrandFilter({{$product_category['id']}})"
                                                data-filter=".category-{{$product_category['id']}}-brand-{{$brand->id}}">{{$brand->name}}</a>
                                        </li>
                                        @endforeach
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-sm-12">
                                    <div class="masonry row">
                                        @foreach($products as $product)
                                        <div class="product  col-lg-3 col-md-6 category-{{ $product->product_category_id }} {{$product->is_new == 1 ? 'category-new' : ''}} {{$product->is_recommend == 1 ? 'category-recommend' : ''}} category-{{$product->product_category_id}}-brand-{{$product->product_brand_id}}"
                                            data-product-id="{{ $product->id }}">
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
                                                        <span data-toggle="tooltip" data-placement="top"
                                                            title="เพิ่มลงตะกร้า">
                                                            <a href="#!"
                                                                class="li-icon add-to-cart product{{ $product->id }}"
                                                                data-product-id="{{ $product->id }}"
                                                                data-path-img="{{ $product->img }}"
                                                                data-name="{{ $product->name }}"
                                                                data-price="{{ $product->price }}"><i
                                                                    class="bx bxs-cart-add"></i></a>
                                                        </span>
                                                        <span data-toggle="tooltip" data-placement="top"
                                                            title="ดูรายละเอียด">
                                                            <a href="products/detail/{{ $product->id }}"
                                                                class="li-icon view-details"><i
                                                                    class="bx bx-search"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="product-title f3 text-too-long"><a
                                                    href="products/detail/{{ $product->id }}">{{
                                                    $product->name }}</a></p>
                                            <p class="product-price f3 text-danger">
                                                <ins>
                                                    <span class="amount">ราคา <b>{{ number_format($product->price)
                                                            }}</b>
                                                        บาท</span>
                                                </ins>
                                            </p>
                                        </div><!-- /.product -->
                                        @endforeach
                                    </div><!-- /.masonry -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="section products second-style">
    <div class="container">
        <div class="card shadow-lg" style="border-radius: 10px">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="products-filter list-unstyled">
                            <li
                                class="{{ !isset($product_filter_category) && !isset($product_filter_brand) ? 'active' : '' }}">
                                <a href="#!" onclick="hideBtnBrandFilter()" data-filter="*">ทั้งหมด</a>
                            </li>
                            @foreach($product_categorys as $product_category)
                            <li class="{{$product_category['id'] == $product_filter_category ? 'active' : '' }}">
                                <a href="#!" onclick="showBtnBrandFilter({{$product_category['id']}})"
                                    data-filter=".category-{{$product_category['id']}}">{{$product_category['name']}}</a>
                            </li>
                            @endforeach
                            <li>
                                <a href="#!" onclick="hideBtnBrandFilter()" class="text-violet"
                                    data-filter=".category-new">ใหม่</a>
                            </li>
                            <li>
                                <a href="#!" onclick="hideBtnBrandFilter()" class="text-secondary"
                                    data-filter=".category-recommend">แนะนำ</a>
                            </li>
                            <br>
                            
                            <hr style="border-block-color: #cc0000">
                            @foreach($product_categorys as $product_category)
                            @foreach ( $product_category['brands'] as $brand)
                            <li
                                class="cataegory-brand category-{{$product_category['id']}}-brand d-none  {{$brand->id == $product_filter_brand && $product_category['id'] == 2 ? 'active' : '' }}">
                                <a href="#!" onclick="showBtnBrandFilter({{$product_category['id']}})"
                                    data-filter=".category-{{$product_category['id']}}-brand-{{$brand->id}}">{{$brand->name}}</a>
                            </li>
                            @endforeach
                            @endforeach
                        </ul><!-- /.products-filter -->
                        <br>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12">
                        <div class="masonry row">
                            @foreach($products as $product)
                            <div class="product col-6 col-lg-3 col-md-6 category-{{ $product->product_category_id }} {{$product->is_new == 1 ? 'category-new' : ''}} {{$product->is_recommend == 1 ? 'category-recommend' : ''}} category-{{$product->product_category_id}}-brand-{{$product->product_brand_id}}"
                                data-product-id="{{ $product->id }}">
                                <div class="inner-product">
                                    @if($product->is_new == 1)
                                    <span class="onsale new">ใหม่ !</span>
                                    @elseif($product->is_recommend == 1)
                                    <span class="onsale hot">แนะนำ !</span>
                                    @endif
                                    <div class="product-thumbnail">
                                        <img src='{{ URL::asset("get-content/$product->img") }}' class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="product-details text-center">
                                        <div class="product-btns">
                                            <span data-toggle="tooltip" data-placement="top" title="เพิ่มลงตะกร้า">
                                                <a href="#!" class="li-icon add-to-cart product{{ $product->id }}"
                                                    data-product-id="{{ $product->id }}"
                                                    data-path-img="{{ $product->img }}" data-name="{{ $product->name }}"
                                                    data-price="{{ $product->price }}"><i
                                                        class="bx bxs-cart-add"></i></a>
                                            </span>
                                            <span data-toggle="tooltip" data-placement="top" title="ดูรายละเอียด">
                                                <a href="products/detail/{{ $product->id }}"
                                                    class="li-icon view-details"><i class="bx bx-search"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <p class="product-title f3 text-too-long"><a
                                        href="products/detail/{{ $product->id }}">{{
                                        $product->name }}</a></p>
                                <!-- <div class="star-rating">
							<span style="width:90%"></span>
						</div> -->
                                <p class="product-price f3 text-danger">
                                    <ins>
                                        <span class="amount">ราคา <b>{{ number_format($product->price) }}</b> บาท</span>
                                    </ins>
                                    <!-- <del>
								<span class="amount">$150.00</span>
							</del> -->
                                </p>
                            </div><!-- /.product -->
                            @endforeach
                        </div><!-- /.masonry -->
                    </div>
                    <!-- <div class="col-sm-12 text-center">
                <a href="#!" class="btn btn-danger rounded-pill">ดูเพิ่มเติม</a>
            </div> -->
                </div><!-- /.row -->
            </div>
        </div>
    </div><!-- /.container -->
</section><!-- /.products -->
@endsection

@section('script')

<script>
    $(document).ready(function() {
        var active = $('.products-filter').find('.active');
        active.find('a').click();
    });

    function showBtnBrandFilter(product_category_id){
        $(`.cataegory-brand`).addClass('d-none');
        $(`.category-${product_category_id}-brand`).removeClass('d-none');
    }

    function hideBtnBrandFilter(){
        $(`.cataegory-brand`).addClass('d-none');
    }
</script>
<script type='text/javascript'
    src='https://platform-api.sharethis.com/js/sharethis.js#property=62cad181a12f7c001a58e62a&product=sticky-share-buttons'
    async='async'></script>
<script>
    function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
</script>
@stop