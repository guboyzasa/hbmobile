@extends('layouts-ecommerce.app')

@section('css')
<style>
.fix-size {
    width: 250px;
    height: 130px;
    background-color: #000;
}



</style>
@endsection

@section('content')

<div class="page-head">
    <div class="container">
        <div class="d-flex flex-column flex-md-row">
            <ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('index') }}">หน้าแรก</a>
                </li>
                <li class="breadcrumb-item active">ตัวแทนจำหน่ายและจุดบริการ</li>
            </ol>
        </div>
    </div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper mb-4">
    <section class="section pb-0 ">
        <div class="container">
            <div class="row">
                <div class="products-filter">
                    <a href="#" data-filter=".none" id="filter-hide"></a>
                </div>
                @foreach($thai_regions as $thai_region)
                <div class="col-md-4 col-6 products-filter mb-0">
                    <a href="#" data-filter=".thai-region-{{ $thai_region->id }}">
                        <div class="agent-menu">
                            <div class="box text-center">
                                <span class="f3">{{$thai_region->name}}</span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.promotions -->

    <section class="section products-grid second-style">
        <div class="container">
            <div class="row">
                <div class="clearfix"></div>
                <div class="col-sm-12">
                    <div class="row masonry">
                        <div class="product none" data-product-id="1"></div>
                        @foreach($agents as $agent)
                        <div class="product p-0 col-lg-3 col-md-6 thai-region-{{ $agent->thai_region_id }} p-3"
                            data-product-id="1" >
                            <div class="product-thumbnail">
                                <img src='{{ URL::asset("/get-content/$agent->img") }}' class="img-fluid fix-size"
                                    alt="">
                            </div>
                            <h6 class="mt-4 text-primary text-too-long">{{ $agent->name }}</h6>
                            <p class="m-0 p-0 text-too-long" title="{{ $agent->address }}"><i class='bx bxs-map'></i> {{ $agent->address }}</p>
                            <p class="m-0 p-0"><i class='bx bxs-phone'></i> {{ $agent->tel1 }}</p>
                            <p class="m-0 p-0 text-too-long" title="{{ $agent->facebook }}"><i class='bx bxl-facebook-circle'></i> <a href="{{ $agent->facebook_link }}" class="effect" target="_black"> {{ $agent->facebook }}</a></p>
                            <p class="m-0 p-0"><img src="{{ URL::asset('/assets/dist/images/line.png') }}" style="width:15px;"> <a href="{{ $agent->line }}" class="effect"> {{ $agent->line }}</a></p>
                        </div>
                        @endforeach
                    </div>
                </div><!-- /.masonry -->
            </div>
        </div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.products-grid -->
</div>
@endsection

@section('script')
<script>
$(document).ready(function() {
    $('#filter-hide').click()
});
</script>
@stop