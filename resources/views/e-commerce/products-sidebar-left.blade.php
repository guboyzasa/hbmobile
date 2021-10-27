@extends('layouts-ecommerce.app')

@section('css')

@endsection

@section('content')

<div class="page-head">
	<div class="container">
		<div class="d-flex flex-column flex-md-row">
			<ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
				<li class="breadcrumb-item">
					<a href="index.html">Home</a>
				</li>
				<li class="breadcrumb-item active">Products</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<section class="section products-grid second-style">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="shop-sidebar shop-sidebar-left">
					<div class="widgets">
						<div class="widget widget-search">
							<h3 class="widget-title">What's on your mind<span class="typed-cursor">?</span></h3>
							<form action="#!" method="GET" class="inputs-border inputs-bg">
								<input type="text" class="form-control" placeholder="Search Products..">
							</form>
						</div><!-- /.widget-search -->

						<div class="widget widget-price-filter">
							<h3 class="widget-title">Filter By Price</h3>
							<div class="price-slider-wrapper">
								<div id="filter-slider" class="filter-slider" data-min="10" data-max="1000" data-values="150,700"></div>
							</div>
							<form action="">
								<div id="amount-slider">
									<strong>Price: </strong><span>$150 — $700</span>
								</div>
								<input type="hidden" id="price" value="150,700">
								<button type="button" class="btn btn-primary">Filter</button>
							</form>
						</div><!-- /.widget-price-filter -->

						<div class="widget widget-sizes">
							<h3 class="widget-title">Sizes</h3>
							<ul>
								<li><a href="#!">XS</a></li>
								<li><a href="#!">S</a></li>
								<li><a href="#!">M</a></li>
								<li><a href="#!">L</a></li>
								<li><a href="#!">XL</a></li>
							</ul>
						</div><!-- /.widget-sizes -->

						<div class="widget widget-categories">
							<h3 class="widget-title">Categories</h3>
							<ul>
								<li>
									<a href="#!">Chairs <span class="count">(6)</span></a>
								</li>
								<li>
									<a href="#!">Tables <span class="count">(7)</span></a>
									<ul class="children">
										<li>
											<a href="#!">Side Tables <span class="count">(2)</span></a>
										</li>
										<li>
											<a href="#!">Lunch Tables <span class="count">(5)</span></a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#!">Couches <span class="count">(3)</span></a>
								</li>
								<li>
									<a href="#!">Lighting <span class="count">(4)</span></a>
								</li>
							</ul>
						</div><!-- /.widget-categories -->

						<div class="widget widget-top-seller">
							<h3 class="widget-title">Top Seller</h3>
							<ul>
								<li class="clearfix">
									<div class="media">
										<div class="media-left float-left">
											<a href="#">
												<img class="media-object img-fluid" src="{{ URL::asset('/assets/dist/images/products/20.jpg') }}">
											</a>
										</div>
										<div class="media-body">
											<h4 class="media-heading"><a href="product.html">Men Cap</a></h4>
											<div class="rating">
												<div class="star-rating">
													<span style="width:90%"></span>
												</div>
											</div>
											<p class="price">
												<del>
													<span class="amount">$200.00</span>
												</del>
												<ins>
													<span class="amount">$450.00</span>
												</ins>
											</p>
										</div>
									</div>
								</li>

								<li class="clearfix">
									<div class="media">
										<div class="media-left float-left">
											<a href="#">
												<img class="media-object img-fluid" src="{{ URL::asset('/assets/dist/images/products/12.jpg') }}" alt="">
											</a>
										</div>
										<div class="media-body">
											<h4 class="media-heading"><a href="product.html">Twill Silk Scarf</a></h4>
											<div class="rating">
												<div class="star-rating">
													<span style="width:100%"></span>
												</div>
											</div>
											<p class="price">
												<ins>
													<span class="amount">$90.00</span>
												</ins>
											</p>
										</div>
									</div>
								</li>

								<li class="clearfix">
									<div class="media">
										<div class="media-left float-left">
											<a href="#">
												<img class="media-object img-fluid" src="{{ URL::asset('/assets/dist/images/products/23.jpg') }}" alt="">
											</a>
										</div>
										<div class="media-body">
											<h4 class="media-heading"><a href="product.html">Glasses Patterned</a></h4>
											<div class="rating">
												<div class="star-rating">
														<span style="width:99%">
													</span></div>
											</div>
											<p class="price">
												<del>
													<span class="amount">$25.00</span>
												</del>
												<ins>
													<span class="amount">$99.00</span>
												</ins>
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div><!-- /.widget-top-seller -->

						<div class="widget widget-instagram">
							<h3 class="widget-title">Instagram</h3>
							<ul class="row">
								<li class="col-4">
									<a href="#!">
										<img src="{{ URL::asset('/assets/dist/images/products/23.jpg') }}" class="img-fluid" alt="">
									</a>
								</li>
								<li class="col-4">
									<a href="#!">
										<img src="{{ URL::asset('/assets/dist/images/products/20.jpg') }}" class="img-fluid" alt="">
									</a>
								</li>
								<li class="col-4">
									<a href="#!">
										<img src="{{ URL::asset('/assets/dist/images/products/18.jpg') }}" class="img-fluid" alt="">
									</a>
								</li>
								<li class="col-4">
									<a href="#!">
										<img src="{{ URL::asset('/assets/dist/images/products/19.jpg') }}" class="img-fluid" alt="">
									</a>
								</li>
								<li class="col-4">
									<a href="#!">
										<img src="{{ URL::asset('/assets/dist/images/products/24.jpg') }}" class="img-fluid" alt="">
									</a>
								</li>
								<li class="col-4">
									<a href="#!">
										<img src="{{ URL::asset('/assets/dist/images/products/12.jpg') }}" class="img-fluid" alt="">
									</a>
								</li>
							</ul>
						</div><!-- /.widget-instagram -->
					</div><!-- /.widgets -->
				</div><!-- /.shop-sidebar -->
			</div>

			<div class="col-md-9">
				<div class="masonry row">
					<div class="product col-lg-4 col-md-6" data-product-id="1">
						<div class="inner-product">
							<span class="onsale">Sale!</span>
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/2.jpg') }}" class="img-fluid" alt="">
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

					<div class="product col-lg-4 col-md-6" data-product-id="1">
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

					<div class="product col-lg-4 col-md-6" data-product-id="1">
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

					<div class="product col-lg-4 col-md-6" data-product-id="1">
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

					<div class="product col-lg-4 col-md-6" data-product-id="1">
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

					<div class="product col-lg-4 col-md-6" data-product-id="1">
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

					<div class="product col-lg-4 col-md-6" data-product-id="1">
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

					<div class="product col-lg-4 col-md-6" data-product-id="1">
						<div class="inner-product">
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/22.jpg') }}" class="img-fluid" alt="">
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
						<h3 class="product-title"><a href="#!">Bag Maroon</a></h3>
						<div class="star-rating">
							<span style="width:90%"></span>
						</div>
						<p class="product-price">
							<ins>
								<span class="amount">$75.99</span>
							</ins>
						</p>
					</div><!-- /.product -->

					<div class="product col-lg-4 col-md-6" data-product-id="1">
						<div class="inner-product">
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/23.jpg') }}" class="img-fluid" alt="">
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
						<h3 class="product-title"><a href="#!">Glasses Patterned</a></h3>
						<div class="star-rating">
							<span style="width:100%"></span>
						</div>
						<p class="product-price">
							<ins>
								<span class="amount">$149.99</span>
							</ins>
						</p>
					</div><!-- /.product -->
				</div><!-- /.masonry -->

				<div class="clearfix text-center">
					<a href="#!" class="btn btn-primary">Show More</a>
				</div>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.products-grid -->

@endsection

@section('script')

@stop
