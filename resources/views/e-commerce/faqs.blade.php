@extends('layouts-ecommerce.app')

@section('css')

@endsection

@section('content')

<div class="page-head">
	<div class="container">
		<div class="d-flex flex-column flex-md-row">
			<ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
				<li class="breadcrumb-item">
					<a href="index.html">หน้าแรก</a>
				</li>
				<li class="breadcrumb-item active">เงื่อนไขและข้อแนะนำผลิตภัณฑ์</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="page-faqs">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="title">เงื่อนไขการรับประกันสินค้า</h2>
					<div class="custom-accordion flex-column" id="faqs" role="tablist" aria-multiselectable="true">
						<div class="card card-default">
							<div class="card-header cursor-pointer" data-toggle="collapse" data-target="#faq-1" aria-expanded="true">
								<h4 class="h4 mb-0">
									Is account registration required?
								</h4>
							</div>
							<div id="faq-1" class="card-collapse collapse show" data-parent="#faqs">
								<div class="card-body">
									Account registration at Sham is only required if you will be shopping. This ensures a valid
									communication channel for all parties involved in any transactions.
								</div>
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header cursor-pointer" data-toggle="collapse" data-target="#faq-2" aria-expanded="true">
								<h4 class="h4 mb-0">
									What is the currency used for all transactions?
								</h4>
							</div>
							<div id="faq-2" class="card-collapse collapse" data-parent="#faqs">
								<div class="card-body">
									All prices for products and other items, including each seller's or buyer's account balance are in
									USD.
								</div>
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header cursor-pointer" data-toggle="collapse" data-target="#faq-3" aria-expanded="true">
								<h4 class="h4 mb-0">
									What are the payment options?
								</h4>
							</div>
							<div id="faq-3" class="card-collapse collapse" data-parent="#faqs">
								<div class="card-body">
									The best way to transfer funds is via Paypal. This secure platform ensures timely payments and a
									secure environment.
								</div>
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header cursor-pointer" data-toggle="collapse" data-target="#faq-4" aria-expanded="true">
								<h4 class="h4 mb-0">
									Lorem Ipsum is simply dummy text
								</h4>
							</div>
							<div id="faq-4" class="card-collapse collapse" data-parent="#faqs">
								<div class="card-body">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
									standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								</div>
							</div>
						</div>
					</div><!-- /.accordion -->
				</div>

				<div class="col-md-6">
					<h2 class="title">Users Questions</h2>
					<div class="custom-accordion flex-column" id="faqs-2" role="tablist" aria-multiselectable="true">
						<div class="card card-default">
							<div class="card-header cursor-pointer" data-toggle="collapse" data-target="#faq-2-1"
							     aria-expanded="true">
								<h4 class="h4 mb-0">
									Is account registration required?
								</h4>
							</div>
							<div id="faq-2-1" class="card-collapse collapse show" data-parent="#faqs-2">
								<div class="card-body">
									Account registration at Sham is only required if you will be shopping. This ensures a valid
									communication channel for all parties involved in any transactions.
								</div>
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header cursor-pointer" data-toggle="collapse" data-target="#faq-2-2"
							     aria-expanded="true">
								<h4 class="h4 mb-0">
									What is the currency used for all transactions?
								</h4>
							</div>
							<div id="faq-2-2" class="card-collapse collapse" data-parent="#faqs-2">
								<div class="card-body">
									All prices for products and other items, including each seller's or buyer's account balance are in
									USD.
								</div>
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header cursor-pointer" data-toggle="collapse" data-target="#faq-2-3"
							     aria-expanded="true">
								<h4 class="h4 mb-0">
									What are the payment options?
								</h4>
							</div>
							<div id="faq-2-3" class="card-collapse collapse" data-parent="#faqs-2">
								<div class="card-body">
									The best way to transfer funds is via Paypal. This secure platform ensures timely payments and a
									secure environment.
								</div>
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header cursor-pointer" data-toggle="collapse" data-target="#faq-2-4"
							     aria-expanded="true">
								<h4 class="h4 mb-0">
									Lorem Ipsum is simply dummy text
								</h4>
							</div>
							<div id="faq-2-4" class="card-collapse collapse" data-parent="#faqs-2">
								<div class="card-body">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
									standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								</div>
							</div>
						</div>
					</div><!-- /.accordion -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- #page-faqs -->
</div><!-- /.page-wrapper -->

@endsection

@section('script')

@stop

