
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
					<h2 class="title">HB Mobile Services <br> เฮียบอยโมบายขอนแก่น ศูนย์บริการด้านสมาร์ทโฟนครบวงจร</h2>
					<p class="subtitle description">
						<i class='bx bxs-circle' ></i> จำหน่ายแบตเตอรี่มือถือหลากหลายรุ่น สายชาร์จ อุปกรณ์ อะไหล่มือถือสมาร์ทโฟน
					</p>
					<p class="subtitle description">
						<i class='bx bxs-circle' ></i> สินค้าเราได้มาตราฐาน ม.อ.ก อย่างถูกต้อง พร้อมทีมช่างเทคนิคดูแลให้คำปรึกษาอย่างไกล้ชิด
					</p>
				</div>
				<div class="col-lg-8">
					<div class="image">
						<img src='{{ URL::asset("/assets/dist/images/qr.png") }}' class="img-fluid" alt="" width="50%">
					</div>
					
				</div>
			</div><!-- /.row -->

			

		</div><!-- /.container -->
	</section><!-- #page-about -->
</div><!-- /.page-wrapper -->

@endsection

@section('script')

@stop