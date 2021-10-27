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
				<li class="breadcrumb-item active">Page Default</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="page-default">
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto lead">
					<h1 class="title">Welcome to Sham!</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus, velit a mattis suscipit,
						ipsum libero hendrerit ante, eget volutpat massa est sit amet lorem. Aenean ut justo fermentum, aliquam enim
						vitae, varius erat. Mauris congue, mauris sed laoreet rutrum, metus orci pretium ligula, at porttitor ante
						tortor quis sapien. Quisque vestibulum libero ac lectus placerat hendrerit. Aliquam in auctor lacus. Sed
						imperdiet congue mi ac mattis.</p>
					<img src="{{ URL::asset('/assets/dist/images/slides/03.jpg') }}" class="img-fluid" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus, velit a mattis suscipit,
						ipsum libero hendrerit ante, eget volutpat massa est sit amet lorem. Aenean ut justo fermentum, aliquam enim
						vitae, varius erat. Mauris congue, mauris sed laoreet rutrum, metus orci pretium ligula, at porttitor ante
						tortor quis sapien. Quisque vestibulum libero ac lectus placerat hendrerit. Aliquam in auctor lacus. Sed
						imperdiet congue mi ac mattis.</p>

					<h3>Lorem ipsum dolor sit amet</h3>
					<iframe
							width="100%"
							height="450"
							src="https://www.youtube.com/embed/ZHpEsTHQFCM"
							frameborder="0"
							allowFullScreen=""
					></iframe>
				</div><!-- /.block -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- #page-default -->
</div><!-- /.page-wrapper -->

@endsection

@section('script')

@stop
