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
				<li class="breadcrumb-item active">404</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="page-404">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 mx-auto text-center">
					<h1>404</h1>
					<h3 class="px-5">Sorry, the page you were looking for doesn’t exist.</h3>
					<p>Let's get back on track..</p>
					<div class="button-group">
						<a href="index.html" class="btn btn-primary">Home</a>
						<a href="products-sidebar-right.html" class="btn btn-primary">Shop</a>
					</div>
					<h2 class="or">OR</h2>
					<form action="#!" method="GET" class="inputs-border">
						<input type="text" class="form-control" placeholder="What's on your mind?">
					</form>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
</div><!-- /.page-wrapper -->

@endsection

@section('script')

@stop
