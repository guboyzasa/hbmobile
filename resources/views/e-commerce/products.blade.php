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
                <li class="breadcrumb-item active">สินค้าทั้งหมด</li>
            </ol>
        </div>
    </div><!-- /.container -->
</div><!-- /.page-head -->
{{-- <div class="sharethis-sticky-share-buttons"></div> --}}
<section class="section products second-style">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="products-filter list-unstyled">
                   <!-- <li class="{{ !isset($product_filter_category) && !isset($product_filter_brand) ? 'active' : '' }}">
                        <a href="#!" onclick="hideBtnBrandFilter()" data-filter="*">ทั้งหมด</a>
                    </li> -->
                    @foreach($product_categorys as $product_category)
                    <li class="{{$product_category['id'] == $product_filter_category ? 'active' : '' }}" >
                        <a href="#!" onclick="showBtnBrandFilter({{$product_category['id']}})" data-filter=".category-{{$product_category['id']}}">{{$product_category['name']}}</a>
                    </li>
                    @endforeach
                    <li>
                        <a href="#!" onclick="hideBtnBrandFilter()" class="text-violet" data-filter=".category-new">ใหม่</a>
                    </li>
                    <li>
                        <a href="#!" onclick="hideBtnBrandFilter()" class="text-secondary" data-filter=".category-recommend">แนะนำ</a>
                    </li>
                    <br>
                    @foreach($product_categorys as $product_category)
                        @foreach ( $product_category['brands'] as $brand)
                            <li class="cataegory-brand category-{{$product_category['id']}}-brand d-none  {{$brand->id == $product_filter_brand && $product_category['id'] == 2 ? 'active' : '' }}">
                                <a href="#!" onclick="showBtnBrandFilter({{$product_category['id']}})" data-filter=".category-{{$product_category['id']}}-brand-{{$brand->id}}">{{$brand->name}}</a>
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
                    <div class="product col-6 col-lg-3 col-md-6 category-{{ $product->product_category_id }} {{$product->is_new == 1 ? 'category-new' : ''}} {{$product->is_recommend == 1 ? 'category-recommend' : ''}} category-{{$product->product_category_id}}-brand-{{$product->product_brand_id}}" data-product-id="{{ $product->id }}">
                        <div class="inner-product">
                            @if($product->is_new == 1)
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
                                            data-name="{{ $product->name }}" data-price="{{ $product->price }}"><i class="bx bxs-cart-add"></i></a>
                                    </span>
                                    <span data-toggle="tooltip" data-placement="top" title="ดูรายละเอียด">
                                        <a href="products/detail/{{ $product->id }}" class="li-icon view-details"><i
                                                class="bx bx-search"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p class="product-title f3 text-too-long"><a href="products/detail/{{ $product->id }}">{{ $product->name }}</a></p>
                        <!-- <div class="star-rating">
							<span style="width:90%"></span>
						</div> -->
                        <p class="product-price f3 text-primary">
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
                <a href="#!" class="btn btn-primary rounded-pill">ดูเพิ่มเติม</a>
            </div> -->
        </div><!-- /.row -->
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
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62cad181a12f7c001a58e62a&product=sticky-share-buttons' async='async'></script>
@stop