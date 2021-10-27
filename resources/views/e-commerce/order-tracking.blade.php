

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
				<li class="breadcrumb-item active">Order Tracking</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="page-order-tracking">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mx-auto">
					<div class="box">
						<h2>Order Tracking</h2>
						<p>
							To track your order please enter your Order ID in the box below and press the "Track" button. This was
							given to you on your receipt and in the confirmation email you should have received.
						</p>
						<form method="POST" class="tracking-form inputs-border inputs-bg">
							<div class="form-group required">
								<input type="text" id="order_id" class="form-control" placeholder="Order ID*">
							</div>
							<div class="form-group required">
								<input type="email" id="billing_email" class="form-control" placeholder="Billing Email*">
							</div>
							<div class="form-group text-right">
								<button type="button" class="btn btn-primary">Track</button>
							</div>
						</form>
					</div><!-- /.box -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- #page-order-tracking -->
</div><!-- /.page-wrapper -->

@endsection

@section('script')

@stop
