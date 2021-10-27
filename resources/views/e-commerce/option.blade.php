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
                <li class="breadcrumb-item active">เงื่อนไขและข้อแนะนำผลิตภัณฑ์</li>
            </ol>
        </div>
    </div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="page-default">
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto lead">
					<h1 class="title text-primary">เงื่อนไขและข้อแนะนำผลิตภัณฑ์</h1>
					<p class="pl-2"><i class='bx bxs-circle'></i> บริษัทรับประกันสินค้าในกรณีเกิดจากความบกพร่องของโรงงาน</p>
					
					<p class="pl-2"><i class='bx bxs-circle'></i> การรับประกันจะขึ้นอยู่กับเงื่อนไขของบริษัท</p>

                    <p class="pl-2"><i class='bx bxs-circle'></i> ขอสงวนสิทธิ์การรับประกันที่เกิดจากการใช้งานที่ผิดปกติ การตกหล่น ตกน้ำ แก้ไข ซ่อมแซม หรือดัดแปลงสินค้า</p>

					<h1 class="text-primary">ข้อแนะนำการใช้งานผลิตภัณฑ์</h1>
					<p class="pl-2"><i class='bx bxs-circle'></i> ในการเปลี่ยนแบตเตอรี่ครั้งแรก ทางโรงงานได้กระตุ้นแบตเตอรี่มาให้เรียบร้อยแล้ว</p>
					
					<p class="pl-2"><i class='bx bxs-circle'></i> สามารถใช้งานได้ตามปกติ 8-12 ชั่วโมง ไม่จำเป็นต้องชาร์จ</p>

                    <p class="pl-2"><i class='bx bxs-circle'></i> หลีกเลี่ยงการสัมผัสขั้วแบตเตอรี่ เพราะอาจทำให้เกิดการลัดวงจรได้</p>

                    <p class="pl-2"><i class='bx bxs-circle'></i> สามารถชาร์จไฟได้ตลอดเวลาเมื่อต้องการ ไม่ว่าแบตเตอรี่จะหมดหรือไม่ก็ตาม</p>
				</div><!-- /.block -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- #page-default -->
</div><!-- /.page-wrapper -->
@endsection

@section('script')
<script>

</script>
@stop