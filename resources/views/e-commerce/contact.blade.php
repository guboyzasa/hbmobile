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
    <div class="sharethis-sticky-share-buttons"></div>
    <section class="section" id="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h3 class="pt-0"><span class="autotype"></span></h3>
                    <div>
                        <p><strong>Phone:</strong> <a href="tel:0935287744" class="">{{ @$company->tel1 }}</a>
                            ช่างบอย</p>
                        <p><strong>Email:</strong> <a href="mailto:rachata147@gmail.com"
                                class="">{{ @$company->email }}</a></p>
                        <p><strong>Address1:</strong> {{ @$company->address1 }}</p>
                        <p><strong>Address2:</strong> {{ @$company->address2 }}</p>
                        <p><strong>Facebook:</strong> <a href="{{ $company->facebook_link }}" class=""
                                target="_blank">{{ @$company->facebook }}</a></p>
                        <p><strong>LINE Official Account:</strong> <a href="{{ $company->line_link }}" class=""
                                target="_blank">{{ @$company->line }}</a></p>
                        <p><strong>Instagram:</strong> <a href="{{ $company->ig_link }}" class=""
                                target="_blank">{{ @$company->ig }}</a></p>
                        <p><strong>Youtube:</strong> <a href="{{ $company->youtube_link }}" class=""
                                target="_blank">{{ @$company->youtube }}</a></p>
                                
                        <!-- <p><strong>มีปัญหาการใช้งานเว็บไซต์:</strong> <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=188yanuk" target="_blank">Click Here!!</a></p> -->
                    </div>
                </div>
                <div class="col-lg-3 text-center bg-primary p-4">
                    <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=188yanuk" target="_blank">
                        <p>
                            <h4 class="text-white">มีปัญหาการใช้งานเว็บไซต์ Click!</h4>
                        </p>
                    </a>
                    <img src='{{ URL::asset('/assets/dist/images/qrhb.png') }}' alt="img-fluid" style="width:100%;">
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <section class="section manuals pb-0">
        <div class="container">
            {{-- <div class="row"> --}}
            <div class="custom-accordion flex-column" id="manual-01-detail" role="tablist" aria-multiselectable="true">
                <div class="card card-default">
                    <div class="card-header cursor-pointer" data-toggle="collapse" data-target="#last-manual-01"
                        aria-expanded="true">
                        <div class="media-left media-middle">
                            <h3 class="media-heading"><i class='bx bx-map' style='font-size:33px'></i>
                                สาขา 1 ในเมืองขอนแก่น</h3>
                        </div>
                    </div>
                    <div id="last-manual-01" class="card-collapse collapse" data-parent="#manual-01-detail">
                        <div class="card-body">
                            <div class="box table-responsive">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- <div class="manual media"> --}}
                                        <div class="media-body">
                                            <section id="contact-map">
                                                <div class="container">
                                                    <div class="row">
                                                        <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15308.203916677!2d102.8275107!3d16.4222371!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d7bb28823a965!2z4LmA4Liu4Li14Lii4Lia4Lit4Lii4LmC4Lih4Lia4Liy4LiiIEhCIE1vYmlsZQ!5e0!3m2!1sth!2sth!4v1635424137619!5m2!1sth!2sth"
                                                            width="100%" height="450" style="border:0;"
                                                            allowfullscreen="" loading="lazy"></iframe>
                                                    </div><!-- /.row -->
                                                </div><!-- /.container -->
                                            </section>
                                        </div>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{-- </div> --}}
        </div> <!-- /.container -->
        <div class="container">
            {{-- <div class="row"> --}}
            <div class="custom-accordion flex-column" id="manual-02-detail" role="tablist" aria-multiselectable="true">
                <div class="card card-default">
                    <div class="card-header cursor-pointer" data-toggle="collapse" data-target="#last-manual-02"
                        aria-expanded="true">
                        <div class="media-left media-middle">
                            <h3 class="media-heading"><i class='bx bx-map' style='font-size:33px'></i>
                                สาขา 2 บ้านบ่อทอง อ.พระยืน</h3>
                        </div>
                    </div>
                    <div id="last-manual-02" class="card-collapse collapse" data-parent="#manual-02-detail">
                        <div class="card-body">
                            <div class="box table-responsive">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- <div class="manual media"> --}}
                                        <div class="media-body">
                                            <section id="contact-map">
                                                <div class="container">
                                                    <div class="row">
                                                        <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3829.3480555112915!2d102.63387671486159!3d16.305150688735523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31227b153394e707%3A0x34787c9d9d27195c!2z4LmA4Liu4Li14Lii4Lia4Lit4Lii4LmC4Lih4Lia4Liy4LiiIC0g4Liq4Liy4LiC4Liy4Lia4LmJ4Liy4LiZ4Lia4LmI4Lit4LiX4Lit4LiHIOC4lS7guILguLLguKHguJvguYnguK3guKEg4LitLuC4nuC4o-C4sOC4ouC4t-C4mSDguIgu4LiC4Lit4LiZ4LmB4LiB4LmI4LiZIDQwMzIw!5e0!3m2!1sth!2sth!4v1652604702362!5m2!1sth!2sth"
                                                            width="100%" height="450" style="border:0;"
                                                            allowfullscreen="" loading="lazy"></iframe>
                                                    </div><!-- /.row -->
                                                </div><!-- /.container -->
                                            </section>
                                        </div>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{-- </div> --}}
        </div> <!-- /.container -->
    </section>
<br>
<br>

    {{-- <div class="page-wrapper">
         MAP สาขาในเมือง
        <section class="section pb-0" id="contact-map">
            <div class="container">
                <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15308.203916677!2d102.8275107!3d16.4222371!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d7bb28823a965!2z4LmA4Liu4Li14Lii4Lia4Lit4Lii4LmC4Lih4Lia4Liy4LiiIEhCIE1vYmlsZQ!5e0!3m2!1sth!2sth!4v1635424137619!5m2!1sth!2sth" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        MAP สาขาบ้านบ่อทอง
        <section class="section pb-0" id="contact-map">
            <div class="container">
                <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3829.3480555112915!2d102.63387671486159!3d16.305150688735523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31227b153394e707%3A0x34787c9d9d27195c!2z4LmA4Liu4Li14Lii4Lia4Lit4Lii4LmC4Lih4Lia4Liy4LiiIC0g4Liq4Liy4LiC4Liy4Lia4LmJ4Liy4LiZ4Lia4LmI4Lit4LiX4Lit4LiHIOC4lS7guILguLLguKHguJvguYnguK3guKEg4LitLuC4nuC4o-C4sOC4ouC4t-C4mSDguIgu4LiC4Lit4LiZ4LmB4LiB4LmI4LiZIDQwMzIw!5e0!3m2!1sth!2sth!4v1652604702362!5m2!1sth!2sth" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
    </div><!-- /.page-wrapper --> --}}


@endsection

@section('script')
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=62b8c6063a1e900019a62f42&product=sticky-share-buttons" async="async"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?&v=3.exp&key=AIzaSyBpYnEHQmPhQNkwrqZD52TcNmtDHusIgxw"></script>

@stop
