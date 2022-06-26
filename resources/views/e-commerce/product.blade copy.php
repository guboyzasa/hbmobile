@extends('layouts-ecommerce.app')

@section('css')

@endsection

@section('content')

<!-- <div class="page-head">
    <div class="container">
        <div class="d-flex flex-column flex-md-row">
            <ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
                <li class="breadcrumb-item">
                    <a href="index.html">หน้าแรก</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/products?product_filter_category=1">สินค้า</a>
                </li>
                <li class="breadcrumb-item active">{{ $product->name }}</li>
            </ol>

            <div class="d-flex align-items-center mx-auto mx-md-0 ml-md-auto mt-3 mt-md-0 header-nav">
                <a class="d-inline-flex align-items-center" rel="previous" href="#!">
                    <i class="bx bx-chevron-left"></i>
                    Previous
                </a>
                <a class="d-inline-flex align-items-center" rel="next" href="#!">
                    Next
                    <i class="bx bx-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>/.page-head -->

  <section class="section single-product-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="product-images">
                    <figure class="product-thumbnail">
                        <a href="{{ URL::asset('/assets/dist/images/products/product01.webp') }}"
                            data-fancybox="images">
                            <img src="{{ URL::asset('/assets/dist/images/products/product01.webp') }}" class="img-fluid"
                                alt="">
                        </a>
                    </figure>
                    <div class="product-images-carousel owl-carousel">
                        <figure class="item">
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
                        </figure>
                    </div>
                </div><!-- /.product-images -->
            </div>

            <div class="col-lg-6 col-sm-offset-1">
                <div class="product-details">
                    <div class="rating mb-3">
                        <div class="star-rating">
                            <span style="width:90%"></span>
                        </div>
                        <!-- <span class="rating-text">3 Reviews</span> -->
                        <!-- <span class="float-right">SKU: <span>29039</span></span> -->
                        <span class="float-right">{{ $product->sku }}</span>
                    </div>

                    <div class="product-title">
                        <h3 class="product-name">{{ $product->name }}</h3>
                        @if($product->is_stock == 1)
                        <p class="product-available text-primary">มีสินค้า</p>
                        @else
                        <p class="product-available text-secondary">ไม่มีสินค้า</p>
                        @endif
                        <hr class="mt-2">
                    </div>

                    <div class="description">
                        <p>
                            {{ $product->name }}
                        </p>
                    </div>

                    <p class="price">
                        <!-- <del>
							<span class="amount">$750.00</span>
						</del> -->
                        <ins>
                            <span class="amount">ราคา {{ $product->price }} บาท</span>
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

                        <div class="form-group d-flex">
                            <div class="quantity ">
                                <input type="button" value="+" class="plus">
                                <input type="number" step="1" max="5" min="1" value="1" title="Qty" class="qty"
                                    size="4">
                                <input type="button" value="-" class="minus">
                            </div>

                            <button type="button" class="btn btn-primary rounded-pill">
								<i class="lil-add_shopping_cart"></i> เพิ่มลงตระกร้า</button>
                        </div>
                    </form>

                    <!-- <div class="product-share">
						<span>Share on</span>
						<ul class="social">
							<li><a href="#!" target="_blank"><i class="bx bxl-facebook"></i></a></li>
							<li><a href="#!" target="_blank"><i class="bx bxl-twitter"></i></a></li>
							<li><a href="#!" target="_blank"><i class="bx bxl-instagram"></i></a></li>
							<li><a href="#!" target="_blank"><i class="bx bxl-snapchat"></i></a></li>
						</ul>
					</div> -->
                </div><!-- /.product-details -->
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
											<button type="button" class="btn btn-primary">Leave Rating</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section> 

<!-- Related Products -->
<section class="section related-products second-style pt-0">
    <div class="container">
        <div class="section-title text-center">
            <h3><i class="line"></i>Related Products<i class="line"></i></h3>
        </div>
        <div id="related-products" class="owl-carousel">
            <div class="product" data-product-id="1">
                <div class="inner-product">
                    <span class="onsale">Sale!</span>
                    <div class="product-thumbnail">
                        <img src="{{ URL::asset('/assets/dist/images/products/2.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="product-details text-center">
                        <div class="product-btns">
                            <span data-toggle="tooltip" data-placement="top" title="เพิ่มลงตระกร้า">
                                <a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
                            </span>
                            <!-- <span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
                                <a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
                            </span> -->
                            <span data-toggle="tooltip" data-placement="top" title="ดูรายละเอียด">
                                <a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <h3 class="product-title"><a href="#!">Bag Dark Beige</a></h3>
                <div class="star-rating">
                    <span style="width:90%"></span>
                </div>
                <p class="product-price">
                    <ins>
                        <span class="amount">$66.50</span>
                    </ins>
                    <del>
                        <span class="amount">$150.00</span>
                    </del>
                </p>
            </div><!-- /.product -->

            <div class="product" data-product-id="1">
                <div class="inner-product">
                    <div class="product-thumbnail">
                        <img src="{{ URL::asset('/assets/dist/images/products/24.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="product-details text-center">
                        <div class="product-btns">
                            <span data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                <a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
                            </span>
                            <span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
                                <a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
                            </span>
                            <span data-toggle="tooltip" data-placement="top" title="View">
                                <a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <h3 class="product-title"><a href="#!">Shoes Maroon</a></h3>
                <div class="star-rating">
                    <span style="width:20%"></span>
                </div>
                <p class="product-price">
                    <ins>
                        <span class="amount">$80.99</span>
                    </ins>
                </p>
            </div><!-- /.product -->

            <div class="product" data-product-id="1">
                <div class="inner-product">
                    <span class="onsale new">New!</span>
                    <div class="product-thumbnail">
                        <img src="{{ URL::asset('/assets/dist/images/products/3.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="product-details text-center">
                        <div class="product-btns">
                            <span data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                <a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
                            </span>
                            <span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
                                <a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
                            </span>
                            <span data-toggle="tooltip" data-placement="top" title="View">
                                <a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <h3 class="product-title"><a href="#!">Unisex Cap</a></h3>
                <div class="star-rating">
                    <span style="width:65%"></span>
                </div>
                <p class="product-price">
                    <ins>
                        <span class="amount">$99.99</span>
                    </ins>
                </p>
            </div><!-- /.product -->

            <div class="product" data-product-id="1">
                <div class="inner-product">
                    <div class="product-thumbnail">
                        <img src="{{ URL::asset('/assets/dist/images/products/4.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="product-details text-center">
                        <div class="product-btns">
                            <span data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                <a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
                            </span>
                            <span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
                                <a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
                            </span>
                            <span data-toggle="tooltip" data-placement="top" title="View">
                                <a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <h3 class="product-title"><a href="#!">Hands winter</a></h3>
                <div class="star-rating">
                    <span style="width:50%"></span>
                </div>
                <p class="product-price">
                    <ins>
                        <span class="amount">$15.00</span>
                    </ins>
                </p>
            </div><!-- /.product -->

            <div class="product" data-product-id="1">
                <div class="inner-product">
                    <span class="onsale hot">Hot!</span>
                    <div class="product-thumbnail">
                        <img src="{{ URL::asset('/assets/dist/images/products/1.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="product-details text-center">
                        <div class="product-btns">
                            <span data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                <a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
                            </span>
                            <span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
                                <a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
                            </span>
                            <span data-toggle="tooltip" data-placement="top" title="View">
                                <a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <h3 class="product-title"><a href="#!">Patterned Scarf</a></h3>
                <div class="star-rating">
                    <span style="width:70%"></span>
                </div>
                <p class="product-price">
                    <ins>
                        <span class="amount">$39.99</span>
                    </ins>
                </p>
            </div><!-- /.product -->

            <div class="product" data-product-id="1">
                <div class="inner-product">
                    <div class="product-thumbnail">
                        <img src="{{ URL::asset('/assets/dist/images/products/12.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="product-details text-center">
                        <div class="product-btns">
                            <span data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                <a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
                            </span>
                            <span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
                                <a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
                            </span>
                            <span data-toggle="tooltip" data-placement="top" title="View">
                                <a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <h3 class="product-title"><a href="#!">Twill Silk Scarf</a></h3>
                <div class="star-rating">
                    <span style="width:90%"></span>
                </div>
                <p class="product-price">
                    <ins>
                        <span class="amount">$49.99</span>
                    </ins>
                </p>
            </div><!-- /.product -->

            <div class="product" data-product-id="1">
                <div class="inner-product">
                    <div class="product-thumbnail">
                        <img src="{{ URL::asset('/assets/dist/images/products/20.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="product-details text-center">
                        <div class="product-btns">
                            <span data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                <a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
                            </span>
                            <span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
                                <a href="#!" class="li-icon"><i class="bx bx-heart"></i></a>
                            </span>
                            <span data-toggle="tooltip" data-placement="top" title="View">
                                <a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <h3 class="product-title"><a href="#!">Men Cap</a></h3>
                <div class="star-rating">
                    <span style="width:90%"></span>
                </div>
                <p class="product-price">
                    <ins>
                        <span class="amount">$25.00</span>
                    </ins>
                </p>
            </div><!-- /.product -->
        </div>
    </div><!-- /.container -->
</section><!-- /.related-products -->
@endsection

@section('script')

@stop