
@extends('layouts-ecommerce.app')

@section('css')

@endsection

@section('content')

<header class="header slider">
	<div id="carouselSlider" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselSlider" data-slide-to="0" class="active"></li>
			<li data-target="#carouselSlider" data-slide-to="1"></li>
			<li data-target="#carouselSlider" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{ URL::asset('/assets/dist/images/slides/02.jpg') }}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<div class="mask-left col-lg-8 m-auto">
						<h1>We create products by today's standards.</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
							standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<div class="button-group">
							<a href="#!" class="btn btn-primary">Shop Now</a>
							<a href="products-sidebar-left.html" class="btn btn-primary">Products</a>
						</div>
					</div>
				</div>
			</div><!-- /.carousel-item-->
			<div class="carousel-item">
				<img src="{{ URL::asset('/assets/dist/images/slides/03.jpg') }}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<div class="mask-left col-lg-8 m-auto">
						<h1>We create products by today's standards.</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
							standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<div class="button-group">
							<a href="#!" class="btn btn-primary">Shop Now</a>
							<a href="products-sidebar-left.html" class="btn btn-primary">Products</a>
						</div>
					</div>
				</div>
			</div><!-- /.carousel-item-->
			<div class="carousel-item">
				<img src="{{ URL::asset('/assets/dist/images/slides/01.jpg') }}" class="d-block w-100" alt="...">
			</div><!-- /.carousel-item-->
		</div>
	</div>
</header>

<section class="section promotions pb-0 small-padding-top" id="promotions">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="promotion text-center">
					<div class="icon">
						<i class="bx bx-money"></i>
					</div>
					<h3 class="mt-4">Money Back</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="promotion text-center">
					<div class="icon">
						<i class="bx bx-globe"></i>
					</div>
					<h3 class="mt-4">Worldwide</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="promotion text-center">
					<div class="icon">
						<i class="bx bxs-plane"></i>
					</div>
					<h3 class="mt-4">Free Shipping</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
				</div>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.promotions -->

<section class="section products second-style" id="home-products">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-title text-center">
				<h3><i class="line"></i>Latest Products<i class="line"></i></h3>
				<p>Lorem Ipsum is simply dummy text.</p>
			</div>
			<div class="col-sm-12">
				<div class="masonry row">
					<div class="product col-lg-3 col-md-6" data-product-id="1">
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

					<div class="product col-lg-3 col-md-6" data-product-id="1">
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

					<div class="product col-lg-3 col-md-6" data-product-id="1">
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

					<div class="product col-lg-3 col-md-6" data-product-id="1">
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

					<div class="product col-lg-3 col-md-6" data-product-id="1">
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

					<div class="product col-lg-3 col-md-6" data-product-id="1">
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

					<div class="product col-lg-3 col-md-6" data-product-id="1">
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

					<div class="product col-lg-3 col-md-6" data-product-id="1">
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
				</div><!-- /.masonry -->
			</div>
			<div class="col-sm-12 text-center">
				<a href="#!" class="btn btn-primary">Show More</a>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.products -->

<section class="section brands pt-0 pb-4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div id="logos" class="owl-carousel">
					<div class="item">
						<a href="#!"><img src="{{ URL::asset('/assets/dist/images/brands/5.png') }}" class="img-fluid" alt=""></a>
					</div>
					<div class="item">
						<a href="#!"><img src="{{ URL::asset('/assets/dist/images/brands/6.png') }}" class="img-fluid" alt=""></a>
					</div>
					<div class="item">
						<a href="#!"><img src="{{ URL::asset('/assets/dist/images/brands/4.png') }}" class="img-fluid" alt=""></a>
					</div>
					<div class="item">
						<a href="#!"><img src="{{ URL::asset('/assets/dist/images/brands/7.png') }}" class="img-fluid" alt=""></a>
					</div>
					<div class="item">
						<a href="#!"><img src="{{ URL::asset('/assets/dist/images/brands/8.png') }}" class="img-fluid" alt=""></a>
					</div>
					<div class="item">
						<a href="#!"><img src="{{ URL::asset('/assets/dist/images/brands/9.png') }}" class="img-fluid" alt=""></a>
					</div>
					<div class="item">
						<a href="#!"><img src="{{ URL::asset('/assets/dist/images/brands/1.png') }}" class="img-fluid" alt=""></a>
					</div>
					<div class="item">
						<a href="#!"><img src="{{ URL::asset('/assets/dist/images/brands/2.png') }}" class="img-fluid" alt=""></a>
					</div>
					<div class="item">
						<a href="#!"><img src="{{ URL::asset('/assets/dist/images/brands/3.png') }}" class="img-fluid" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- /.brands -->
@endsection

@section('script')

@stop
