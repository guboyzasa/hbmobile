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
			<div class="col-sm-12">
				<ul class="products-filter list-unstyled">
					<li class="active">
						<a href="#!" data-filter="*">All</a>
					</li>
					<li>
						<a href="#!" data-filter=".cat-bags">Bags</a>
					</li>
					<li>
						<a href="#!" data-filter=".cat-caps">Caps</a>
					</li>
					<li>
						<a href="#!" data-filter=".cat-scarves">Scarves</a>
					</li>
					<li>
						<a href="#!" class="text-secondary" data-filter=".cat-popular">Popular</a>
					</li>
				</ul><!-- /.products-filter -->
			</div>
			<div class="clearfix"></div>

			<div class="col-sm-12">
				<div class="row masonry">
					<div class="product col-lg-3 col-md-6 cat-bags" data-product-id="1">
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

					<div class="product col-lg-3 col-md-6 cat-popular" data-product-id="1">
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

					<div class="product col-lg-3 col-md-6 cat-caps" data-product-id="1">
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

					<div class="product col-lg-3 col-md-6 cat-popular" data-product-id="1">
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

					<div class="product col-lg-3 col-md-6 cat-scarves cat-popular" data-product-id="1">
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

					<div class="product col-lg-3 col-md-6 cat-scarves" data-product-id="1">
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

					<div class="product col-lg-3 col-md-6 cat-caps cat-popular" data-product-id="1">
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

					<div class="product col-lg-3 col-md-6 cat-bags" data-product-id="1">
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
</section><!-- /.products-grid -->

@endsection

@section('script')

@stop
