
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
			<div class="swiper-slide">
				<div class="d-flex align-items-center">
					<img src="{{ URL::asset('/assets/dist/images/slides/01.jpg') }}" class="img-fluid" alt="">
				</div>
			</div>
			<div class="swiper-slide">
				<div class="d-flex align-items-center">
					<img src="{{ URL::asset('/assets/dist/images/slides/02.jpg') }}" class="img-fluid" alt="">
				</div>
			</div>
			<div class="swiper-slide">
				<div class="d-flex align-items-center">
					<img src="{{ URL::asset('/assets/dist/images/slides/03.jpg') }}" class="img-fluid" alt="">
				</div>
			</div>
		</div>

		<!-- If we need pagination -->
		<div class="swiper-pagination swiper-pagination-white"></div>
		<!-- If we need navigation buttons -->
		<div class="d-none d-md-block"><!-- Remove this "div" to show the navigation on mobile -->
			<div class="swiper-button-prev swiper-button-white"><i class="bx bx-chevron-left"></i></div>
			<div class="swiper-button-next swiper-button-white"><i class="bx bx-chevron-right"></i></div>
		</div>
	</div>
</div><!-- /.swiper-slider -->

<section class="section collections pb-0" id="home-collections">
	<div class="container">
		<div class="row">
			<div class="col-md-6 collection">
				<a href="#!">
					<img src="{{ URL::asset('/assets/dist/images/collections/01.jpg') }}" class="img-fluid" alt="">
				</a>
			</div><!-- /.collection -->
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6 collection">
						<a href="#!">
							<img src="{{ URL::asset('/assets/dist/images/collections/02.jpg') }}" class="img-fluid" alt="">
						</a>
					</div><!-- /.collection -->
					<div class="col-md-6 collection">
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

<section class="section promotions pb-0" id="promotions">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="promotion media">
					<div class="media-left media-middle">
						<i class="bx bx-money"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">Money Back</h3>
						<p>Lorem Ipsum is simply dummy text of the printing.</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="promotion media">
					<div class="media-left media-middle">
						<i class="bx bx-globe"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">In Worldwide</h3>
						<p>Lorem Ipsum is simply dummy text of the printing.</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="promotion media">
					<div class="media-left media-middle">
						<i class="bx bxs-plane"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">Free Shipping</h3>
						<p>Lorem Ipsum is simply dummy text of the printing.</p>
					</div>
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
				</div><!-- /.masonry -->
			</div>
			<div class="col-sm-12 text-center">
				<a href="#!" class="btn btn-primary">Show More</a>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.products -->

<section class="section instagram pt-0" id="instagram">
	<div class="container">
		<div class="row">
			<div class="position-relative clearfix">
				<h2><span class="text-secondary">@Hussam3bd</span> On Instagram</h2>

				<ul>
					<li>
						<a href="https://www.instagram.com/p/BDX1oYbxJCK" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/01.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BDYTCedxJOb" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/02.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BDVyuQexJOq" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/03.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BDOJbBzRJIl" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/04.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BDIsqHGxJAn" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/05.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BDIUMb8RJFN" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/06.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BDGvWUXxJI_" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/07.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BDF7EqhRJND" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/08.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BC-Px3FxJEy" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/09.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BC5BAvnRJHV" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/10.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BC2WyRZxJJU" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/11.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BCyE0F6xJDM" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/12.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BCamzh5xJHR" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/13.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BCXvOLBxJDE" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/14.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BDX1oYbxJCK" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/01.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BDYTCedxJOb" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/02.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BDVyuQexJOq" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/03.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BDOJbBzRJIl" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/04.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BDIsqHGxJAn" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/05.jpg') }}')"></span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/p/BDIUMb8RJFN" target="_blank">
							<span
									style="background-image: url('{{ URL::asset('/assets/dist/images/instagram/06.jpg') }}')"></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section><!-- /.instagram -->

@endsection

@section('script')

@stop