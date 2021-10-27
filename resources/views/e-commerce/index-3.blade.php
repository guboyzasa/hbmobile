
@extends('layouts-ecommerce.app')

@section('css')

@endsection

@section('content')

<header class="header fullscreen" style="background-image: url('{{ URL::asset('/assets/dist/images/slides/05.jpg') }}');">
	<div class="container align-vertical">
		<div class="row">
			<div class="col-sm-5 text-left">
				<h1>We create products by today's standards<span class="typed-cursor">.</span></h1>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard
					dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</p>
				<div class="button-group">
					<a href="#!" class="btn btn-primary">Shop Now</a>
					<a href="products-sidebar-left.html" class="btn btn-primary">Products</a>
				</div>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</header>

<section class="section collections pb-0" id="home-collections">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 collection">
				<a href="#!">
					<img src="{{ URL::asset('/assets/dist/images/collections/01.jpg') }}" class="img-fluid" alt="">
				</a>
			</div><!-- /.collection -->
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-6 collection">
						<a href="#!">
							<img src="{{ URL::asset('/assets/dist/images/collections/02.jpg') }}" class="img-fluid" alt="">
						</a>
					</div><!-- /.collection -->
					<div class="col-sm-6 collection">
						<a href="#!">
							<img src="{{ URL::asset('/assets/dist/images/collections/03.jpg') }}" class="img-fluid" alt="">
						</a>
					</div><!-- /.collection -->
					<div class="col-sm-12 collection">
						<a href="#!">
							<img src="{{ URL::asset('/assets/dist/images/collections/04.jpg') }}" class="img-fluid" alt="">
						</a>
					</div><!-- /.collection -->
				</div>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.collections -->

<section class="section products" id="home-products">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-title text-center">
				<h3><i class="line"></i>Latest Products<i class="line"></i></h3>
				<p>Lorem Ipsum is simply dummy text.</p>
			</div>
			<div class="col-sm-12">
				<div class="masonry row">
					<div class="product col-md-4 col-sm-6 col-xs-12" data-product-id="1">
						<div class="inner-product">
							<span class="onsale">Sale!</span>
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/2.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="product-details text-center">
								<div class="align-vertical">
									<h3 class="product-title">Bag Dark Beige</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and type...</p>
									<p class="product-price">
										<ins>
											<span class="amount">$66.50</span>
										</ins>
										<del>
											<span class="amount">$150.00</span>
										</del>
									</p>
									<div class="product-btns">
										<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
											<a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
										</span>
										<span data-toggle="tooltip" data-placement="top" title="View">
											<a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /.product -->

					<div class="product col-md-4 col-sm-6 col-xs-12" data-product-id="2">
						<div class="inner-product">
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/24.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="product-details text-center">
								<div class="align-vertical">
									<h3 class="product-title">Shoes Maroon</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and type...</p>
									<p class="product-price">
										<ins>
											<span class="amount">$80.99</span>
										</ins>
									</p>
									<div class="product-btns">
											<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
												<a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
											</span>
										<span data-toggle="tooltip" data-placement="top" title="View">
												<a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
											</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /.product -->

					<div class="product col-md-4 col-sm-6 col-xs-12" data-product-id="3">
						<div class="inner-product">
							<span class="onsale new">New!</span>
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/3.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="product-details text-center">
								<div class="align-vertical">
									<h3 class="product-title">Unisex Cap</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and type...</p>
									<p class="product-price">
										<ins>
											<span class="amount">$99.99</span>
										</ins>
									</p>
									<div class="product-btns">
											<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
												<a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
											</span>
										<span data-toggle="tooltip" data-placement="top" title="View">
												<a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
											</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /.product -->

					<div class="product col-md-4 col-sm-6 col-xs-12" data-product-id="4">
						<div class="inner-product">
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/4.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="product-details text-center">
								<div class="align-vertical">
									<h3 class="product-title">Hands winter</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and type...</p>
									<p class="product-price">
										<ins>
											<span class="amount">$15.00</span>
										</ins>
									</p>
									<div class="product-btns">
											<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
												<a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
											</span>
										<span data-toggle="tooltip" data-placement="top" title="View">
												<a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
											</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /.product -->

					<div class="product col-md-4 col-sm-6 col-xs-12" data-product-id="5">
						<div class="inner-product">
							<span class="onsale hot">Hot!</span>
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/1.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="product-details text-center">
								<div class="align-vertical">
									<h3 class="product-title">Patterned Scarf</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and type...</p>
									<p class="product-price">
										<ins>
											<span class="amount">$39.99</span>
										</ins>
									</p>
									<div class="product-btns">
											<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
												<a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
											</span>
										<span data-toggle="tooltip" data-placement="top" title="View">
												<a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
											</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /.product -->

					<div class="product col-md-4 col-sm-6 col-xs-12" data-product-id="6">
						<div class="inner-product">
							<div class="product-thumbnail">
								<img src="{{ URL::asset('/assets/dist/images/products/12.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="product-details text-center">
								<div class="align-vertical">
									<h3 class="product-title">Twill Silk Scarf</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and type...</p>
									<p class="product-price">
										<ins>
											<span class="amount">$49.99</span>
										</ins>
									</p>
									<div class="product-btns">
											<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
												<a href="#!" class="li-icon add-to-cart"><i class="bx bxs-cart"></i></a>
											</span>
										<span data-toggle="tooltip" data-placement="top" title="View">
												<a href="product.html" class="li-icon view-details"><i class="bx bx-search"></i></a>
											</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /.product -->
				</div><!-- /.masonry -->
			</div>
			<div class="col-sm-12 text-center">
				<a href="#!" class="btn btn-primary">Show More</a>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.products -->

<section class="most-popular section">
	<div class="bg-cover" style="background-image: url(dist/images/slides/04.jpg') }})"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-sm-offset-7 text-left">
				<div class="mask-left">
					<h2>Upside Down Island</h2>
					<p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
						has been the standard dummy text. Lorem Ipsum is simply.</p>
					<a href="#" class="btn btn-primary float-right">View</a>
					<div class="clearfix"></div>
				</div>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.most-popular -->

<section class="newsletter section">
	<div class="bg-cover accent" style="background-image: url(dist/images/slides/04.jpg') }})"></div>
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-6 m-auto">
				<h2>Join our Newsletter</h2>
				<p>Subscribe to the newsletter to receive the latest updates and latest products and special offers.</p>
				<form action="#!" method="POST" class="inputs-bg">
					<div class="form-group">
						<input type="email" name="email" placeholder="Your Email" class="form-control" autocomplete="off">
					</div>
					<button type="submit" class="btn btn-primary btn-white">Join Now</button>
				</form>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.newsletter -->

@endsection

@section('script')

@stop