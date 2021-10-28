
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
				<li class="breadcrumb-item active">เกี่ยวกับเรา</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="page-about">
		<div class="container">
			<div class="row align-items-center mb-5">
				<div class="col-lg-4">
					<h2 class="title">HB MOBILE KHON KAEN <br> เฮียบอยโมบาย ซ่อมโทรศัพท์ โน๊ตบุ๊ค แม็คบุ๊ค</h2>
					<p class="subtitle description">
						<i class='bx bxs-circle' ></i> test7
					<p class="subtitle description">
						<i class='bx bxs-circle' ></i> test8
					</p>
				</div>
				<div class="col-lg-8">
					<div class="image">
						<img src='https://drive.google.com/uc?id=10jZVoy-hs9Nwpq7PEhahcxKpe1o_4oHX&export=download' class="img-fluid" alt="" width="50%">
						<!-- <div class="caption">
							<span>Our</span>
							<span>Office</span>
						</div> -->
					</div>
				</div>
			</div><!-- /.row -->

			<!-- <div class="row align-items-center mb-5">
				<div class="col-lg-8">
					<div class="image">
						<img src="{{ URL::asset('/assets/dist/images/about-2.jpg') }}" class="img-fluid" alt="">
						<div class="caption">
							<span>Mission</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<h2 class="title">Make it blend in or stand out.</h2>
					<p class="subtitle description">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					</p>
					<p class="subtitle description">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					</p>
				</div>
			</div> -->

			<!-- <div class="row clearfix">
				<div class="col-12 section-title text-center">
					<h3><i class="line"></i>Meet our Team<i class="line"></i></h3>
				</div>

				<div class="col-12" id="our-team">
					<div class="row">
						<div class="col-lg-3 col-md-6 mb-4">
							<div class="author">
								<img src="{{ URL::asset('/assets/dist/images/users/8.jpg') }}" alt="">
								<h3>Hussam</h3>
								<p>Web Developer</p>
								<ul class="social">
									<li><a href="#!" target="_blank"><i class="bx bxl-facebook"></i></a></li>
									<li><a href="#!" target="_blank"><i class="bx bxl-twitter"></i></a></li>
									<li><a href="#!" target="_blank"><i class="bx bxl-instagram"></i></a></li>
									<li><a href="#!" target="_blank"><i class="bx bxl-snapchat"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 mb-4">
							<div class="author">
								<img src="{{ URL::asset('/assets/dist/images/users/7.jpg') }}" alt="">
								<h3>Toyler</h3>
								<p>Product Designer</p>
								<ul class="social">
									<li><a href="#!" target="_blank"><i class="bx bxl-facebook"></i></a></li>
									<li><a href="#!" target="_blank"><i class="bx bxl-twitter"></i></a></li>
									<li><a href="#!" target="_blank"><i class="bx bxl-instagram"></i></a></li>
									<li><a href="#!" target="_blank"><i class="bx bxl-snapchat"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 mb-4">
							<div class="author">
								<img src="{{ URL::asset('/assets/dist/images/users/5.jpg') }}" alt="">
								<h3>Kevin</h3>
								<p>Creative Director</p>
								<ul class="social">
									<li><a href="#!" target="_blank"><i class="bx bxl-facebook"></i></a></li>
									<li><a href="#!" target="_blank"><i class="bx bxl-twitter"></i></a></li>
									<li><a href="#!" target="_blank"><i class="bx bxl-instagram"></i></a></li>
									<li><a href="#!" target="_blank"><i class="bx bxl-snapchat"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 mb-4">
							<div class="author">
								<img src="{{ URL::asset('/assets/dist/images/users/6.jpg') }}" alt="">
								<h3>Alex</h3>
								<p>Web Designer</p>
								<ul class="social">
									<li><a href="#!" target="_blank"><i class="bx bxl-facebook"></i></a></li>
									<li><a href="#!" target="_blank"><i class="bx bxl-twitter"></i></a></li>
									<li><a href="#!" target="_blank"><i class="bx bxl-instagram"></i></a></li>
									<li><a href="#!" target="_blank"><i class="bx bxl-snapchat"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> -->

		</div><!-- /.container -->
	</section><!-- #page-about -->
</div><!-- /.page-wrapper -->

@endsection

@section('script')

@stop