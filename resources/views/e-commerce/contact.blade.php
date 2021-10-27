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
				<li class="breadcrumb-item active">ติดต่อเรา</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section pb-0" id="contact-map">
		<div class="container">
			<div class="row">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.0509793924257!2d102.8253220148631!3d16.42223708866373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228b3f066dce01%3A0x5d7bb28823a965!2z4LmA4Liu4Li14Lii4Lia4Lit4Lii4LmC4Lih4Lia4Liy4LiiIEhCIE1vYmlsZQ!5e0!3m2!1sth!2sth!4v1635321481365!5m2!1sth!2sth" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				{{-- <div class="map-wrapper col-sm-12">
					<div id="map" data-lat="40.9803480" data-long="28.7270580" data-title="Sham Inc."
					     data-subtitle="Istanbul, Turkey"></div>
				</div><!-- /.map-wrapper --> --}}
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>

	<section class="section" id="contact-info">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="pt-0"><span class="autotype"></span></h3>
					<div>
						<p><strong>Phone:</strong> <a href="#!" class="">{{ @$company->tel1 }} , {{ @$company->tel2 }} , {{ @$company->tel3 }}</a></p>
						<p><strong>Email:</strong> <a href="#!" class="">{{ @$company->email }}</a></p>
						<p><strong>Address:</strong> {{ @$company->address }}</p>
						<p><strong>Facebook:</strong> <a href="{{ $company->facebook_link }}" class="" target="_black">{{ @$company->facebook }}</a></p>
						<p><strong>Line:</strong> <a href="{{ $company->line_link }}" class="">{{ @$company->line }}</a></p>
						<p><strong>มีปัญหาการใช้งานเว็บไซต์:</strong> <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=188yanuk" target="_blank">Click Here!!</a></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
</div><!-- /.page-wrapper -->


@endsection

@section('script')

<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?&v=3.exp&key=AIzaSyBpYnEHQmPhQNkwrqZD52TcNmtDHusIgxw"></script>

@stop