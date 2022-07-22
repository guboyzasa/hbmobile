@extends('layouts-ecommerce.app')

@section('css')
<meta property="og:title" content="HB Mobile|เฮียบอยโมบาย - ตัวอย่างงานซ่อม" />
<meta property="og:image" content="{{ URL::asset('/assets/dist/images/img-link/example.png') }}" />
<meta property="og:description"
    content="ครบเครื่องเรื่องไอที : โทรศัพท์, โน้ตบุ๊ค, แม็คบุ๊ค, ปริ้นเตอร์, เครื่องใช้ไฟฟ้า, กล้องวงจรปิด, จานดาวเทียม, โซล่าเซล์, เน็ตเวิร์ก, กราฟิกดีไซน์" />
<meta property="og:site_name" content="https://hbmobilekk.me" />
@endsection

@section('content')

<div class="page-head">
    <div class="container">
        <div class="d-flex flex-column flex-md-row">
            <ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('index') }}">หน้าแรก</a>
                </li>
                <li class="breadcrumb-item active">ตัวอย่างงานซ่อม</li>
            </ol>
        </div>
    </div><!-- /.container -->
</div><!-- /.page-head -->

<section class="section manuals">
    <div class="container">
        <div class="card shadow-lg" style="border-radius: 10px">
            <div class="card-body ">
                <div style="text-align: center">
                    <h2 style="color:#CC0000"><i class='bx bx-cog bx-spin bx-flip-horizontal'></i>
                        <strong> ตัวอย่างงานซ่อม </strong>
                        <i class='bx bx-cog bx-spin bx-flip-horizontal'></i>
                    </h2>
                    <br>
                </div>
                {{--
            </div> --}}
            <div style="text-align: center" class="row row-cols">
                <div class="col-xl">
                    <div class="card card-default">
                        <iframe width="100%" height="300px" src="https://www.youtube.com/embed/cXjJm4GJfgw"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xl">
                    <div class="card card-default">
                        <iframe width="100%" height="300px" src="https://www.youtube.com/embed/qsFq6rRC1I8"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><!-- /.container video-->
    <br>
    <div class="container">
            <div class="card shadow-lg" style="border-radius: 10px">
                <div class="card-body ">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-ios-tab" data-toggle="tab" href="#nav-ios" role="tab"
                                aria-controls="nav-ios" aria-selected="true">
                                <h3>
                                    <i class='bx bxl-apple'></i>
                                    1.IOS
                                </h3>
                            </a>
                            <a class="nav-item nav-link" id="nav-android-tab" data-toggle="tab" href="#nav-android" role="tab"
                                aria-controls="nav-android" aria-selected="false">
                                <h3>
                                    <i class='bx bxl-android'></i>
                                    2.Android
                                </h3>
                            </a>
                            <a class="nav-item nav-link" id="nav-notebook-tab" data-toggle="tab" href="#nav-notebook" role="tab"
                                aria-controls="nav-notebook" aria-selected="false">
                                <h3>
                                    <i class='bx bxl-windows'></i>
                                    3.NoteBook
                                </h3>
                            </a>
                            <a class="nav-item nav-link" id="nav-macbook-tab" data-toggle="tab" href="#nav-macbook" role="tab"
                                aria-controls="nav-macbook" aria-selected="false">
                                <h3>
                                    <i class='bx bx-desktop'></i>
                                    4.MacBook
                                </h3>
                            </a>
                            <a class="nav-item nav-link" id="nav-onsite-tab" data-toggle="tab" href="#nav-onsite" role="tab"
                                aria-controls="nav-onsite" aria-selected="false">
                                <h3>
                                    <i class='bx bx-cog bx-spin bx-flip-horizontal'></i>
                                    5.Onsite
                                </h3>
                            </a>
                            {{-- <a class="nav-item nav-link" id="nav-other-tab" data-toggle="tab" href="#nav-other" role="tab"
                                aria-controls="nav-other" aria-selected="false">
                                <h3>
                                    <i class='bx bx-add-to-queue'></i>
                                    6.Other
                                </h3>
                            </a> --}}
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-ios" role="tabpanel" aria-labelledby="nav-ios-tab">
                            <html>
            
                            <body>
                                <div class="photo-gallery">
                                    <div class="container">
                                        <div class="intro">
                                            <h2 class="text-center">IOS Gallery</h2>
                                            <p class="text-center">งานซ่อมเกี่ยวกับ IOS</p>
                                        </div>
                                        <div class="row photos">
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row photos">
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row photos">
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
            
                                    </div>
                                </div>
                            </body>
            
                            </html>
                        </div>
                        <div class="tab-pane fade" id="nav-android" role="tabpanel" aria-labelledby="nav-android-tab">
                            <!DOCTYPE html>
                            <html>
            
                            <body>
                                <div class="photo-gallery">
                                    <div class="container">
                                        <div class="intro">
                                            <h2 class="text-center">Android Gallery</h2>
                                            <p class="text-center">งานซ่อมเกี่ยวกับ Android</p>
                                        </div>
                                        <div class="row photos">
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row photos">
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row photos">
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
            
                                    </div>
                                </div>
                            </body>
            
                            </html>
                        </div>
                        <div class="tab-pane fade" id="nav-notebook" role="tabpanel" aria-labelledby="nav-notebook-tab">
                            <!DOCTYPE html>
                            <html>
            
                            <body>
                                <div class="photo-gallery">
                                    <div class="container">
                                        <div class="intro">
                                            <h2 class="text-center">NoteBook Gallery</h2>
                                            <p class="text-center">งานซ่อมเกี่ยวกับ NoteBook</p>
                                        </div>
                                        <div class="row photos">
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row photos">
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row photos">
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
            
                                    </div>
                                </div>
                            </body>
            
                            </html>
            
                        </div>
                        <div class="tab-pane fade" id="nav-macbook" role="tabpanel" aria-labelledby="nav-macbook-tab">
                            <!DOCTYPE html>
                            <html>
            
                            <body>
                                <div class="photo-gallery">
                                    <div class="container">
                                        <div class="intro">
                                            <h2 class="text-center">MacBook Gallery</h2>
                                            <p class="text-center">งานซ่อมเกี่ยวกับ MacBook</p>
                                        </div>
                                        <div class="row photos">
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row photos">
            
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </body>
            
                            </html>
                        </div>
                        <div class="tab-pane fade" id="nav-onsite" role="tabpanel" aria-labelledby="nav-onsite-tab">
                            <!DOCTYPE html>
                            <html>
            
                            <body>
                                <div class="photo-gallery">
                                    <div class="container">
                                        <div class="intro">
                                            <h2 class="text-center">Onsite Gallery</h2>
                                            <p class="text-center">งานติดตั้งกล้องวงจรปิด จานดาวเทียม โซล่าเซลล์ เน็ตเวิร์ก</p>
                                        </div>
                                        <div class="row photos">
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row photos">
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
            
            
                                    </div>
                                </div>
                            </body>
            
                            </html>
                        </div>
                        {{-- <div class="tab-pane fade" id="nav-other" role="tabpanel" aria-labelledby="nav-other-tab">
                            <!DOCTYPE html>
                            <html>
            
                            <body>
                                <div class="photo-gallery">
                                    <div class="container">
                                        <div class="intro">
                                            <h2 class="text-center">Other Gallery</h2>
                                            <p class="text-center">งานซ่อมอื่นๆ</p>
                                        </div>
                                        <div class="row photos">
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    <a href="#" data-fancybox="images">
                                                        <img src="#" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
            
                                        <div class="row photos">
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    {{-- <a href="" data-fancybox="images">
                                                        <img src="" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    {{-- <a href="" data-fancybox="images">
                                                        <img src="" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    {{-- <a href="" data-fancybox="images">
                                                        <img src="" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                                <figure class="product-thumbnail text-center">
                                                    {{-- <a href="" data-fancybox="images">
                                                        <img src="" class="img-fluid shadow p-2" alt="" width="250px">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
            
                                    </div>
                                </div>
                            </body>
            
                            </html>
                        </div> --}}
                    </div>
                </div>
            </div>
    </div>
    {{-- <div class="container">
        <div class="custom-accordion flex-column" id="manual-detail" role="tablist" aria-multiselectable="true">
            <div class="card card-default">
                <div class="card-header cursor-pointer" data-toggle="collapse" data-target="#last-manual"
                    aria-expanded="true">
                    <div class="media-left media-middle">
                        <h3 class="media-heading">
                            <i class='bx bxl-apple'></i>
                            1.IOS
                        </h3>
                    </div>
                </div>


                <div id="last-manual" class="card-collapse collapse" data-parent="#manual-detail"
                    style="margin-top: 2%">
                    <div class="container">
                        <div style="text-align:center" class="row row-cols">
                            <div class="col-sm">
                                <div class="box table-responsive-sm">
                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279207844_1024674641474704_6323494351878325286_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGKkcpIo-hZO_4lLZG3aj62ljuQoTSVGoKWO5ChNJUaguZ_acaC3zX-PHeI1oUAopTEjvFtrhwSV0HAQixHwOnr&_nc_ohc=DI87xuk-1rcAX8NBCiF&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT-jjvyGVG_JmR7tRm1IN3ie7Z-MN6uh10jafJM4XeQzZQ&oe=62D5D3BE"
                                        width="100%">
                                </div>
                            </div>

                            <div class="col-sm">
                                <div class="box table-responsive-sm">
                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279139751_1024674678141367_4926102314911277739_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH3KGjPcXqumj-oY28y9o_7jcIdIVzcA96Nwh0hXNwD3tFTxTO_Il72o-gEfjtEtHew1QzNjAL4W1dJlnwouwMh&_nc_ohc=92wNjHQNwQ8AX_4Wl5O&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT_CC-6O7HxF4NvHrDhOgPOE6Deul7mIsDHIdRCLVkljZQ&oe=62D6C14B"
                                        width="100%">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive-sm">
                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279206237_1024674608141374_4543428641325967516_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHWveMw1ydydK9jZtAQG1C4k_1GN_f-4C6T_UY39_7gLj8iIljNuL4BWtTDVGjI7mU7SowewybZeBJfO_FE6k-O&_nc_ohc=mevEBpfUHTMAX93BbSr&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9dypw4P55cn21Ioo6rNE7PNoVaMNeTIHjmtM2S4QQiPg&oe=62D62E13"
                                        width="100%">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive-sm">
                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279193311_1024674711474697_13520213737528606_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEIdv79yiclsF75KQlxFUQ3Ee2orvD4CfsR7aiu8PgJ-wHnvB_x8QaA7cehgjCnRBTLbLd8n1SVCKPdoUpxHldO&_nc_ohc=3EGmdTPesUEAX87DehK&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT8hSELWiFv1u6RXi-y-okcdxmceVWqrtTKeSolLkmLlPg&oe=62D6CA52"
                                        width="100%">
                                </div>
                            </div>

                        </div>
                    </div><!-- /.container -->
                    <!--./ios -->
                </div>
            </div>
        </div><!-- ios -->
    </div><!-- /.container ios -->

    <div class="container">
        <div class="custom-accordion flex-column" id="manuals-detail" role="tablist" aria-multiselectable="true">
            <div class="card card-default">
                <div class="card-header cursor-pointer" data-toggle="collapse" data-target="#last-manuals"
                    aria-expanded="true">
                    <div class="media-left media-middle">
                        <h3 class="media-heading">
                            <i class='bx bxl-android'></i>
                            2.Android
                        </h3>
                    </div>
                </div>
                <div id="last-manuals" class="card-collapse collapse" data-parent="#manuals-detail"
                    style="margin-top: 2%">
                    <div class="container">
                        <div style="text-align: center" class="row row-cols">
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279140865_1024674598141375_5313157152301214151_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGAhbBlyhluIZYdygYLtL1mhepJZvktH96F6klm-S0f3gLR2kHbhc8RMGNRS4p8gM7LIRbRpWkgfJGjKvrTBFPj&_nc_ohc=dGXghYMj2zEAX-VVQPm&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT8uRDtUoVV_G-PLvqUH0Ib84xlBzfhsGiez7FBOvkyMIA&oe=62D59669"
                                        width="100%">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279179489_1024674721474696_8973106228559485844_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHuGxy4111zf9XICrJg5EW25pgKh8OtHrLmmAqHw60estdUUjYg7SQ5y52iD9FHit07YUUE8NqTy12twz-s9V5N&_nc_ohc=evVqrSPzzkUAX_H-838&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9VGZiSTNO2bK7X0pDfi8xT-o5B3h8HXpBaSsfNr0wlAQ&oe=62D69D1C"
                                        width="100%">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279184489_1024674744808027_933187063308857812_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEQha7QX52PSwvnXwYd5r6Tbbg7i0SDI1RtuDuLRIMjVMJTvSO4kI8V62Ov3khIov573jyH2ZpUz9x7aQUP8mtT&_nc_ohc=algDtsjeVSQAX9NUH6B&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9X47Oh1FX-f6oHpdEV4raRv2Bovwc_aI_fdo9Yif4XCw&oe=62D6E6A3"
                                        width="100%">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279245482_1024674624808039_2260539461576899618_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGxt1eRhXn8nCSuMzo2ZgSVLyKY1mNELW8vIpjWY0QtbxNsJaNfULZd_2JNwVMz6M1FeO6tidfajaWApVOxhmW2&_nc_ohc=jQpFEYBGZTwAX9L1IrA&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9pLNEthQNg7muHslEyZf9ev27NAS1c4pPhOZlKSfLG2w&oe=62D5BB4E"
                                        width="100%">
                                </div>
                            </div>
                        </div>
                    </div><!-- /.container -->
                    <!--./android -->
                </div>
            </div>
        </div><!-- android -->
    </div><!-- /.container android -->

    <div class="container">
        <div class="custom-accordion flex-column" id="manual-register-detail" role="tablist"
            aria-multiselectable="true">
            <div class="card card-default">
                <div class="card-header cursor-pointer" data-toggle="collapse" data-target="#last-manual-register"
                    aria-expanded="true">
                    <div class="media-left media-middle">
                        <h3 class="media-heading">
                            <i class='bx bx-desktop'></i>
                            3.NoteBook
                        </h3>
                    </div>
                </div>
                <div id="last-manual-register" class="card-collapse collapse" data-parent="#manual-register-detail"
                    style="margin-top: 2%">
                    <div class="container">
                        <div style="text-align: center" class="row row-cols">
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/216148173_857779008164269_6685381950779794105_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHTG0TvGXLCUmCjt5JBy3FNsto3ApvlmISy2jcCm-WYhKPEcOSgafIymud57RSDbrQ9SDxyxzVNBzwpXrqaYzut&_nc_ohc=0KRP8nBziZsAX_Py_8p&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT-gLMNyqHKdojRxQligXRMX-i1QxIizTcbFADbhh1C6Zg&oe=62D68BEF"
                                        width="100%">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t1.6435-9/195753776_837976236811213_6062226608574968098_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEvljt_284kpXb9E3Tq1NIq3QXGM-Q5_7LdBcYz5Dn_ssxU4sU41E_6gTxmPo9-qgnsfgAXzSga1gPXCGuAeds2&_nc_ohc=pQ8hvOKrOSsAX-8WZB7&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT-6UZtIjasV0vz_hasOZQseKoFZTxwVt78jV2oYMBj3bA&oe=62F71D9E"
                                        width="100%">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t1.6435-9/182795637_817694915506012_8103964095566895776_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEhmi09lHk3Ryp2EEukqW4QsZpqNlMaDt-xmmo2UxoO34dIZf26tBrBJcMjrg1r-DJTOXcQSJMZ_WZq2iwpnAfJ&_nc_ohc=TvFxWF29mdAAX_Xa7tR&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9Nllhg1Ub0knFhFIpZgR9foyf90yri0fO8pr0m3I5xUg&oe=62F513C0"
                                        width="100%">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t1.6435-9/176133172_812386759370161_7905963580273804619_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFwFzmCLmo96V2_6TR2OHYkQxEkspGoaGFDESSykahoYYQ-Xh4Tv6eRalIFnvbePfhemqbQU8fY7kd6xDHhvHhq&_nc_ohc=CeQuDF3GAq8AX8fEN-v&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9qRcxywOfpODdme-AvirnpfUlxDtrvudDKKQQfL4LwHw&oe=62F8B5C8"
                                        width="100%">
                                </div>
                            </div>
                        </div>
                    </div><!-- /.container -->
                    <!--./notebook -->
                </div>
            </div>
        </div><!-- notebook -->
    </div><!-- /.container notebook-->

    <div class="container">
        <div class="custom-accordion flex-column" id="manual-password-detail" role="tablist"
            aria-multiselectable="true">
            <div class="card card-default">
                <div class="card-header cursor-pointer" data-toggle="collapse" data-target="#last-manual-password"
                    aria-expanded="true">
                    <div class="media-left media-middle">
                        <h3 class="media-heading">
                            <i class='bx bx-cog bx-spin bx-flip-horizontal'></i>
                            4.งานติดตั้ง (Onsite)
                        </h3>
                    </div>
                </div>
                <div id="last-manual-password" class="card-collapse collapse" data-parent="#manual-password-detail"
                    style="margin-top: 2%">
                    <div class="container">
                        <div style="text-align: center" class="row row-cols">
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/289919633_124912816896025_6646392615919899825_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=iZiNodbMMC0AX-lVqVd&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT_4f8_jNb-2Gvaax7Ze31c71tvOl3mCZ0uK-PjCq7NPNQ&oe=62D730BD"
                                        width="100%">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/285754364_117058701014770_2430968516897204623_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=PnMOtZgwoqQAX_A7pgA&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT_HDqdBKFpUNX2zuLGVHMBxAyhyw-h2j5pf-9AxxLnjrQ&oe=62D73A17"
                                        width="100%">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/283616253_107717581948882_959966794016615792_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_ohc=hmEv7Pt3OcwAX9S97Bl&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9u97SwixKLYBxwM43TbjyIFWi8iOPcTJHDBkMVtnwtAQ&oe=62D6F12A"
                                        width="100%">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/283482082_107717525282221_8073631087816644674_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=730e14&_nc_ohc=u4tiZb5dvREAX-E5KHL&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT8cQtSdxlwMyVYdwdjfrmBYnxIypqCBYCJhbyacNVPEqw&oe=62D743BF"
                                        width="100%">
                                </div>
                            </div>
                        </div>
                    </div><!-- /.container -->
                    <!--./other -->
                </div>
            </div>
        </div><!-- onsite -->
    </div><!-- /.container onsite--> --}}
</section><!-- /.manuals -->


@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script type='text/javascript'
    src='https://platform-api.sharethis.com/js/sharethis.js#property=62cad181a12f7c001a58e62a&product=sticky-share-buttons'
    async='async'></script>
@stop