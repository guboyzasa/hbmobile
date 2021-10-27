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
				<li class="breadcrumb-item active">Wishlist</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="page-wishlist">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="table-responsive">
						<table class="table cart-table wishlist-table" cellspacing="0">
							<thead>
							<tr>
								<th class="product-remove"></th>
								<th class="product-thumbnail"></th>
								<th class="product-name">Product</th>
								<th class="product-price">Unit Price</th>
								<th class="product-stock-status">Stock Status</th>
								<th class="product-add-to-cart" colspan="1"></th>
							</tr>
							</thead>
							<tbody>
							<tr class="item">
								<td class="product-remove">
									<a href="#!" class="remove" title="Remove this item"><i class="bx bx-x"></i></a>
								</td>
								<td class="product-thumbnail">
									<a href="product.html">
										<img src="{{ URL::asset('/assets/dist/images/products/12.jpg') }}" class="img-fluid" alt="">
									</a>
								</td>
								<td class="product-name">
									<a href="product.html">Twill Silk Scarf</a>
								</td>
								<td class="product-price">
									<span class="amount">$49.99</span>
								</td>
								<td class="product-stock-status">
									<span class="wishlist-in-stock">In Stock</span>
								</td>
								<td class="product-add-to-cart text-right">
									<button class="btn btn-primary" type="button">Add To Cart</button>
								</td>
							</tr>

							<tr class="item">
								<td class="product-remove">
									<a href="#!" class="remove" title="Remove this item"><i class="bx bx-x"></i></a>
								</td>
								<td class="product-thumbnail">
									<a href="product.html">
										<img src="{{ URL::asset('/assets/dist/images/products/1.jpg') }}" class="img-fluid" alt="">
									</a>
								</td>
								<td class="product-name">
									<a href="product.html">Patterned Scarf</a>
								</td>
								<td class="product-price">
									<span class="amount">$39.99</span>
								</td>
								<td class="product-stock-status">
									<span class="wishlist-out-of-stock">Out Of Stock</span>
								</td>
								<td class="product-add-to-cart text-right">
									<button class="btn btn-primary" type="button">Add To Cart</button>
								</td>
							</tr>

							<!-- <tr><td colspan="6"></td></tr> -->
							</tbody>
						</table>
					</div><!-- /.table-responsive -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /#wishlist -->
</div><!-- /.page-wrapper -->
@endsection

@section('script')

@stop