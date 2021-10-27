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
                <li class="breadcrumb-item active">ขั้นตอนการสั่งซื้อ</li>
            </ol>
        </div>
    </div><!-- /.container -->
</div><!-- /.page-head -->

<section class="section manuals pb-0">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="manual media">
					<div class="media-left media-middle">
                        <i class='bx bxs-user-check'></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">1. สมัครสมาชิก</h3>
						<p>ทำการสมัครสมาชิก โดยเบอร์โทรศัพท์ให้เรียบร้อย</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="manual media">
					<div class="media-left media-middle">
                        <i class='bx bxs-cart-add'></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">2. เลือกสินค้า</h3>
						<p>เลือกขนาด ประเภท จำนวนสินค้า และกดสั่งซื้อผ่านหน้าเว็บไซต์</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="manual media">
					<div class="media-left media-middle">
                        <i class='bx bx-file'></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">3. กรอกข้อมูลการจัดส่ง</h3>
						<p>กรอกรายละเอียดให้ครบ และกดปุ่มยืนยันการสั่งซื้อ</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="manual media">
					<div class="media-left media-middle">
                        <i class='bx bx-image'></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">4. อัพโหลด Slip</h3>
						<p>ทำการอัพโหลด slip </p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="manual media">
					<div class="media-left media-middle">
                        <i class='bx bxs-truck' ></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">5. จัดส่งสินค้า</h3>
						<p>เมื่อครบตามขั้นตอนแล้ว รอรับสินค้าที่บ้านได้เลย</p>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.manuals -->

@endsection

@section('script')

@stop

