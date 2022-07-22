@extends('layouts-ecommerce.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/libs/toastr/toastr.min.css') }}">
<meta property="og:title" content="HB Mobile|เฮียบอยโมบาย - {{ $product->name }}"/>
<meta property="og:image" content="{{ URL::asset("get-content/$product->img") }}"/>
<meta property="og:description" content="{{ $product->detail }}"/>
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
                <li class="breadcrumb-item">
                    <a href="/products?product_filter_category=1">สินค้า</a>
                </li>
                <li class="breadcrumb-item active">{{ $product->name }}</li>
            </ol>

            <div class="d-flex align-items-center mx-auto mx-md-0 ml-md-auto mt-3 mt-md-0 header-nav">
                <a class="d-inline-flex align-items-center" rel="previous" href="{{ $product->id - 1 }}">
                    <i class="bx bx-chevron-left"></i>
                    Previous
                </a>
                <a class="d-inline-flex align-items-center" rel="next" href="{{ $product->id + 1 }}">
                    Next
                    <i class="bx bx-chevron-right"></i>
                </a>
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.page-head -->

<section class="section single-product-wrapper">
    <div class="container">
        <div class="card shadow-lg" style="border-radius: 10px">
            <div class="card-body ">
        <div class="row">
            <div class="col-lg-5">
                <div class="product-images">
                    <figure class="product-thumbnail">
                        <a href='{{ URL::asset("get-content/$product->img") }}' data-fancybox="images">
                            <img src='{{ URL::asset("get-content/$product->img") }}' class="img-fluid" alt="">
                        </a>
                    </figure>
                    <div class="product-images-carousel owl-carousel">
                        @if($product->productImages != null)
                        @foreach($product->productImages as $img)
                        <figure class="item">
                            <a href='{{ URL::asset("get-content/$img->img") }}' data-fancybox="images">
                                <img src='{{ URL::asset("get-content/$img->img") }}' class="img-fluid" alt="">
                            </a>
                        </figure>
                        @endforeach
                        @endif
                        <!-- <figure class="item">
                            <a href="{{ URL::asset('/assets/dist/images/products/1.jpg') }}" data-fancybox="images">
                                <img src="{{ URL::asset('/assets/dist/images/products/1.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                            <figcaption class="d-none">
                                <h6 class="text-white">This is an example with caption</h6>
                                <a href="https://gum.co/fJYob">Photo by Hussam Abd</a>
                            </figcaption>
                        </figure>
                        <figure class="item">
                            <a href="{{ URL::asset('/assets/dist/images/products/19.jpg') }}" data-fancybox="images">
                                <img src="{{ URL::asset('/assets/dist/images/products/19.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </figure>
                        <figure class="item">
                            <a href="{{ URL::asset('/assets/dist/images/products/12.jpg') }}" data-fancybox="images">
                                <img src="{{ URL::asset('/assets/dist/images/products/12.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </figure>
                        <figure class="item">
                            <a href="{{ URL::asset('/assets/dist/images/products/3.jpg') }}" data-fancybox="images">
                                <img src="{{ URL::asset('/assets/dist/images/products/3.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </figure>
                        <figure class="item">
                            <a href="{{ URL::asset('/assets/dist/images/products/18.jpg') }}" data-fancybox="images">
                                <img src="{{ URL::asset('/assets/dist/images/products/18.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </figure> -->
                    </div>
                </div><!-- /.product-images -->
            </div>

            <div class="col-lg-6 col-sm-offset-1">
                <div class="product-details">
                    <div class="rating mb-3">
                        <!-- <div class="star-rating">
                            <span style="width:90%"></span>
                        </div> -->
                        <!-- <span class="rating-text">3 Reviews</span> -->
                        <!-- <span class="float-right">SKU: <span>29039</span></span> -->
                        <input type="hidden" id="p_id" value="{{ $product->id }}">
                        <span class="float-right">SKU:{{ $product->sku }}</span>
                    </div>

                    <div class="product-title">
                        <h3 class="product-name">{{ $product->name }}</h3>
                        @if($product->is_stock == 1)
                        <p class="product-available text-danger">มีสินค้า</p>
                        @else
                        <p class="product-available text-secondary">ไม่มีสินค้า</p>
                        @endif
                        <hr class="mt-2">
                    </div>

                    <div class="description">
                        <p>
                            {{ $product->detail }}
                        </p>
                    </div>

                    <p class="price">
                        <ins>
                            <span class="amount">ราคา <b>{{ number_format($product->price) }}</b> บาท</span>
                        </ins>
                    </p>

                    <form action="#!" method="POST" class="inputs-border">
                        <!-- <div class="product-attributes row">
							<div class="form-group col-md-6">
								<label for="attr_1">Size</label>
								<select class="form-control" id="attr_1">
									<option selected>Choose an option</option>
									<option>Extra Small</option>
									<option>Small</option>
									<option>Medium</option>
									<option>Large</option>
								</select>
							</div>

							<div class="form-group col-md-6">
								<label for="attr_2">Color</label>
								<select class="form-control" id="attr_2">
									<option selected>Choose an option</option>
									<option>Red</option>
									<option>Blue</option>
									<option>Green</option>
									<option>Yellow</option>
								</select>
							</div>
						</div> -->

                        <!-- <div class="form-group d-flex">
                            <div class="quantity ">
                                <input type="button" value="+" class="plus">
                                <input type="number" step="1" max="5" min="1" value="1" title="Qty" class="qty"
                                    size="4">
                                <input type="button" value="-" class="minus">
                            </div>
                        </div> -->
                        <div class="product" data-product-id="{{ $product->id }}">
                            <div class="product-thumbnail">
                                <img src='{{ URL::asset("get-content/$product->img") }}' class="img-fluid"
                                    style="display:none;">
                            </div>
                            <div class="product-btns">
                                <!-- <a href="#!" id="addProduct" class="add-to-cart product{{ $product->id }} btn btn-danger rounded-pill"
                                    data-product-id="{{ $product->id }}" data-path-img="{{ $product->img }}"
                                    data-name="{{ $product->name }}" data-price="{{ $product->price }}">
                                    <i class="bx"></i>
                                    <span class="text-cart">
                                        เพิ่มลงตะกร้า
                                    </span>
                                </a> -->
                                
                                <button type="button" id="addProduct"
                                    class="add-to-cart product{{ $product->id }} btn btn-danger rounded-pill"
                                    data-product-id="{{ $product->id }}" data-path-img="{{ $product->img }}"
                                    data-name="{{ $product->name }}" data-price="{{ $product->price }}" {{
                                    $product->is_active == 0 ? 'disabled' : '' }}>
                                    <i class="bx" id="icon{{ $product->id }}"></i>
                                    <span class="text-cart">
                                        เพิ่มลงตะกร้า
                                    </span>
                                </button>
                                
                            </div>
                            <br>
                            Share
                                <div class="a2a_kit a2a_kit_size_25 a2a_default_style" style="text-align: center">
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_line"></a>
                                    <a class="a2a_button_facebook_messenger"></a>
                                </div>
                            <div class="d-none">
                                <span class="product-title"><a href="#!">{{ $product->name }}</a></span>
                                <p class="product-price">
                                    <ins>
                                        <span class="amount">ราคา <b>{{ number_format($product->price) }}</b> บาท</span>
                                    </ins>
                                </p>
                                <a href="products/detail/{{ $product->id }}" class="view-details"></a>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- <div class="col-sm-12">
				<div class="tabs-wrapper">
					
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#tab-description" aria-controls="tab-description"
							   data-toggle="tab">Description</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#tab-information" aria-controls="tab-information" data-toggle="tab">
								Information
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#tab-reviews" aria-controls="tab-reviews" data-toggle="tab">Reviews (3)</a>
						</li>
					</ul>
					
					<div class="tab-content">
						<div class="tab-pane active" id="tab-description">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
								standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard
								dummy text.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
								standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						<div class="tab-pane" id="tab-information">
							<table class="table shop_attributes">
								<tbody>
								<tr>
									<th>Color</th>
									<td>
										<p>Red, Black, Yellow</p>
									</td>
								</tr>
								<tr>
									<th>Materials</th>
									<td>
										<p>Wood</p>
									</td>
								</tr>
								<tr>
									<th>Dimensions</th>
									<td>
										<p>H:1.5″ x W: 2.75″ x D: 3.0″</p>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane" id="tab-reviews">
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<ol class="reviews">
										<li class="review">
											<div class="media">
												<div class="media-left media-middle">
													<a href="#!">
														<img class="media-object avatar" src="{{ URL::asset('/assets/dist/images/users/1.jpg') }}" alt="">
													</a>
												</div>
												<div class="media-body">
													<div class="rating float-right">
														<div class="star-rating">
															<span style="width:90%"></span>
														</div>
													</div>
													<h4 class="media-heading mb-0">Hussam 3bd</h4>
													<time datetime="2016-06-07T11:44:50+00:00">June 7, 2016</time>
													<div class="description">
														Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
														been the standard dummy text.
													</div>
												</div>
											</div>
										</li>

										<li class="review">
											<div class="media">
												<div class="media-left media-middle">
													<a href="#!">
														<img class="media-object avatar" src="{{ URL::asset('/assets/dist/images/users/2.jpg') }}" alt="">
													</a>
												</div>
												<div class="media-body">
													<div class="rating float-right">
														<div class="star-rating">
															<span style="width:60%"></span>
														</div>
													</div>
													<h4 class="media-heading mb-0">Toyler</h4>
													<time datetime="2016-06-07T11:44:50+00:00">June 25, 2016</time>
													<div class="description">
														Lorem Ipsum is simply dummy text of the printing and typesetting industry.
													</div>
												</div>
											</div>
										</li>

										<li class="review">
											<div class="media">
												<div class="media-left media-middle">
													<a href="#!">
														<img class="media-object avatar" src="{{ URL::asset('/assets/dist/images/users/3.jpg') }}">
													</a>
												</div>
												<div class="media-body">
													<div class="rating float-right">
														<div class="star-rating">
															<span style="width:75%"></span>
														</div>
													</div>
													<h4 class="media-heading mb-0">Alex</h4>
													<time datetime="2016-06-07T11:44:50+00:00">Feb 10, 2016</time>
													<div class="description">
														Lorem Ipsum is simply dummy text of the printing and typesetting industry.
													</div>
												</div>
											</div>
										</li>
									</ol>
								</div>
								<div class="col-md-5 col-sm-12 offset-md-1 review-form-wrapper">
									<form action="#!" method="post" class="review-form">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Name*" required>
										</div>
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Email*" required>
										</div>
										<div class="form-group">
											<label for="rating">Rating</label>
											<div class="rating-stars" data-rating="4"></div>
											<input type="hidden" id="rating" name="rating" value="4" required>
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Your Review*" rows="5" required></textarea>
										</div>
										<div class="form-group">
											<button type="button" class="btn btn-danger">Leave Rating</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
            </div><!-- /.row -->
        </div>
    </div>
    
    </div><!-- /.container -->
</section><!-- /.products -->

<!-- Related Products -->
<!-- <section class="section related-products second-style pt-0">
    <div class="container">
        <div class="section-title text-center">
            <h3><i class="line"></i>Related Products<i class="line"></i></h3>
        </div>
        <div id="related-products" class="owl-carousel">
            @foreach($random_products as $product)
            <div class="product" data-product-id="{{ $product->id }}">
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
                <h4 class="product-title"><a href="#!" class="text-too-long">{{ $product->name }}</a></h4>
                <p class="product-price text-danger">
                    <ins>
                        <span class="amount">ราคา <b>{{ number_format($product->price) }}</b> บาท</span>
                    </ins>
                </p>
            </div>
            @endforeach


        </div>
    </div>
</section> -->
@endsection


@section('script')

<!-- share plugin -->
<script src="{{ URL::asset('/assets/js/pages/share.init.js') }}"></script>

<!-- toastr plugin -->
<script src="{{ URL::asset('/assets/libs/toastr/toastr.min.js') }}"></script>

<!-- toastr init -->
<script src="{{ URL::asset('/assets/js/pages/toastr.init.js') }}"></script>
<script>
    $(document).ready(function() {
    var get_session_id = sessionStorage.getItem("p_id");
    var p_id = parseInt($("#p_id").val());

    if (get_session_id) {
        let p_ids = JSON.parse("[" + get_session_id + "]")
        if (p_ids) {
            check = $.inArray(p_id, p_ids[0])
            if (check != -1) {
                console.log(check)
                $('#addProduct').prop("disabled", true);
                $('#addProduct').addClass('added');
                $('#addProduct').find('.text-cart').empty();
            }
        }
    }
})
$('#addProduct').on('click', function() {
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": 300,
        "hideDuration": 1000,
        "timeOut": 5000,
        "extendedTimeOut": 1000,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr["success"]("", "เพิ่มลงตะกร้าเรียบร้อย")
    // $(this).removeClass('add-to-cart');
    $(this).find('.text-cart').empty();
    $(this).find('.bx').removeClass('d-none');
    $(this).prop("disabled", true);
    // $(this).addClass('added');
    // $(this).parent().attr('data-original-title', 'Added');
})
</script>
<script type='text/javascript'
    src='https://platform-api.sharethis.com/js/sharethis.js#property=62cad181a12f7c001a58e62a&product=sticky-share-buttons'
    async='async'></script>
@stop