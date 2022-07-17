@extends('layouts-ecommerce.app')

@section('css')
<meta property="og:title" content="HB Mobile|เฮียบอยโมบาย - ตัวอย่างงานซ่อม"/>
<meta property="og:image" content="{{ URL::asset('/assets/dist/images/img-link/example.png') }}"/>
<meta property="og:description" content="ครบเครื่องเรื่องไอที : โทรศัพท์, โน้ตบุ๊ค, แม็คบุ๊ค, ปริ้นเตอร์, เครื่องใช้ไฟฟ้า, กล้องวงจรปิด, จานดาวเทียม, โซล่าเซล์, เน็ตเวิร์ก, กราฟิกดีไซน์"/>
<meta property="og:site_name" content="https://hbmobilekk.me"/>
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
        <div class="card">
            <div class="card-header ">
                <div style="text-align: center">
                    <h2 style="color:#CC0000"><i class='bx bx-cog bx-spin bx-flip-horizontal'></i>
                        <strong> ตัวอย่างงานซ่อม </strong>
                        <i class='bx bx-cog bx-spin bx-flip-horizontal'></i>
                    </h2>

                </div>
            </div>
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
            <a href="https://www.youtube.com/channel/UCtqcdSQsp73J--yP7eCFGLA" class="btn btn-primary"
                target="_blank">Go to Youtube</a>
        </div>
    </div><!-- /.container video-->
    <br>
    <div class="container">
        <div class="container">
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
                    <a class="nav-item nav-link" id="nav-other-tab" data-toggle="tab" href="#nav-other" role="tab"
                        aria-controls="nav-other" aria-selected="false">
                        <h3>
                            <i class='bx bx-add-to-queue'></i>
                            6.Other
                        </h3>
                    </a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-ios" role="tabpanel" aria-labelledby="nav-ios-tab">
                    <!DOCTYPE html>
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
                                            <a href="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279207844_1024674641474704_6323494351878325286_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGKkcpIo-hZO_4lLZG3aj62ljuQoTSVGoKWO5ChNJUaguZ_acaC3zX-PHeI1oUAopTEjvFtrhwSV0HAQixHwOnr&_nc_ohc=DI87xuk-1rcAX8NBCiF&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT-jjvyGVG_JmR7tRm1IN3ie7Z-MN6uh10jafJM4XeQzZQ&oe=62D5D3BE" data-fancybox="images">
                                                <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279207844_1024674641474704_6323494351878325286_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGKkcpIo-hZO_4lLZG3aj62ljuQoTSVGoKWO5ChNJUaguZ_acaC3zX-PHeI1oUAopTEjvFtrhwSV0HAQixHwOnr&_nc_ohc=DI87xuk-1rcAX8NBCiF&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT-jjvyGVG_JmR7tRm1IN3ie7Z-MN6uh10jafJM4XeQzZQ&oe=62D5D3BE" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279139751_1024674678141367_4926102314911277739_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH3KGjPcXqumj-oY28y9o_7jcIdIVzcA96Nwh0hXNwD3tFTxTO_Il72o-gEfjtEtHew1QzNjAL4W1dJlnwouwMh&_nc_ohc=92wNjHQNwQ8AX_4Wl5O&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT_CC-6O7HxF4NvHrDhOgPOE6Deul7mIsDHIdRCLVkljZQ&oe=62D6C14B" data-fancybox="images">
                                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279139751_1024674678141367_4926102314911277739_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH3KGjPcXqumj-oY28y9o_7jcIdIVzcA96Nwh0hXNwD3tFTxTO_Il72o-gEfjtEtHew1QzNjAL4W1dJlnwouwMh&_nc_ohc=92wNjHQNwQ8AX_4Wl5O&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT_CC-6O7HxF4NvHrDhOgPOE6Deul7mIsDHIdRCLVkljZQ&oe=62D6C14B" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279206237_1024674608141374_4543428641325967516_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHWveMw1ydydK9jZtAQG1C4k_1GN_f-4C6T_UY39_7gLj8iIljNuL4BWtTDVGjI7mU7SowewybZeBJfO_FE6k-O&_nc_ohc=mevEBpfUHTMAX93BbSr&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9dypw4P55cn21Ioo6rNE7PNoVaMNeTIHjmtM2S4QQiPg&oe=62D62E13" data-fancybox="images">
                                                <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279206237_1024674608141374_4543428641325967516_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHWveMw1ydydK9jZtAQG1C4k_1GN_f-4C6T_UY39_7gLj8iIljNuL4BWtTDVGjI7mU7SowewybZeBJfO_FE6k-O&_nc_ohc=mevEBpfUHTMAX93BbSr&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9dypw4P55cn21Ioo6rNE7PNoVaMNeTIHjmtM2S4QQiPg&oe=62D62E13" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279193311_1024674711474697_13520213737528606_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEIdv79yiclsF75KQlxFUQ3Ee2orvD4CfsR7aiu8PgJ-wHnvB_x8QaA7cehgjCnRBTLbLd8n1SVCKPdoUpxHldO&_nc_ohc=3EGmdTPesUEAX87DehK&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT8hSELWiFv1u6RXi-y-okcdxmceVWqrtTKeSolLkmLlPg&oe=62D6CA52" data-fancybox="images">
                                                <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279193311_1024674711474697_13520213737528606_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEIdv79yiclsF75KQlxFUQ3Ee2orvD4CfsR7aiu8PgJ-wHnvB_x8QaA7cehgjCnRBTLbLd8n1SVCKPdoUpxHldO&_nc_ohc=3EGmdTPesUEAX87DehK&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT8hSELWiFv1u6RXi-y-okcdxmceVWqrtTKeSolLkmLlPg&oe=62D6CA52" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="row photos">
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/279204601_1024674688141366_5389153943819136393_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeF8LrEhhmgajJvKq_8fJ6tKeB7QdWCwUzB4HtB1YLBTMEhjNgxkgVI2zyQAtiqOkkx7ydfSUFLvEH07E5x-52zT&_nc_ohc=fLXos3Q2wH0AX-XUqJv&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT9qkCYdQ5R1vPXV5UC_HxGM9ayqOr1FamQoSymX-YMB6Q&oe=62D7935D" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/279204601_1024674688141366_5389153943819136393_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeF8LrEhhmgajJvKq_8fJ6tKeB7QdWCwUzB4HtB1YLBTMEhjNgxkgVI2zyQAtiqOkkx7ydfSUFLvEH07E5x-52zT&_nc_ohc=fLXos3Q2wH0AX-XUqJv&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT9qkCYdQ5R1vPXV5UC_HxGM9ayqOr1FamQoSymX-YMB6Q&oe=62D7935D" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-5.fna.fbcdn.net/v/t39.30808-6/279095260_1024666011475567_8954811461359446324_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFvGCrVAVD02rhuW_9V6A8m1nY4dxdVk0rWdjh3F1WTSrB3IamIrgkQb4rknbYxOJDES5oIi2RLP6BYcolc4jXr&_nc_ohc=juVAGskst64AX-YCM97&_nc_ht=scontent.fbkk2-5.fna&oh=00_AT97nkyLR9p0Qm7un34RC607MOlLKmyEUCqrxr9pIVtQJg&oe=62D6A175" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-5.fna.fbcdn.net/v/t39.30808-6/279095260_1024666011475567_8954811461359446324_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFvGCrVAVD02rhuW_9V6A8m1nY4dxdVk0rWdjh3F1WTSrB3IamIrgkQb4rknbYxOJDES5oIi2RLP6BYcolc4jXr&_nc_ohc=juVAGskst64AX-YCM97&_nc_ht=scontent.fbkk2-5.fna&oh=00_AT97nkyLR9p0Qm7un34RC607MOlLKmyEUCqrxr9pIVtQJg&oe=62D6A175" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/279172724_1024665971475571_2261297361554288445_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHI31vH7GOeFAlsYC870f6lNd_0uf59H_k13_S5_n0f-Ss_HtfRMXn8Z3IvNWS6JpSUJiBFwKPTeq5Ga9Dgs1mY&_nc_ohc=11y6Qt622RsAX-LhozK&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT8KVyxzX9mcMDqkvkRb_M2s6UnCmqTLxD8zA7SCCQar9g&oe=62D61E22" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/279172724_1024665971475571_2261297361554288445_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHI31vH7GOeFAlsYC870f6lNd_0uf59H_k13_S5_n0f-Ss_HtfRMXn8Z3IvNWS6JpSUJiBFwKPTeq5Ga9Dgs1mY&_nc_ohc=11y6Qt622RsAX-LhozK&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT8KVyxzX9mcMDqkvkRb_M2s6UnCmqTLxD8zA7SCCQar9g&oe=62D61E22" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-3.fna.fbcdn.net/v/t39.30808-6/279200931_1024665998142235_3981313810855275427_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGpJK4qiTJNxF8envciM8M98xYA7fAgxe_zFgDt8CDF7_eeym5qKZ9MrtBzOc_4lEJ_kicQZ2daV_moI3BfJ0DL&_nc_ohc=JYacMYcpXcsAX8bxXiD&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT_pkTllb1GlNgdm545yxsMo3tW7CuYMxNPsY8eatfasyg&oe=62D5C2DC" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t39.30808-6/279200931_1024665998142235_3981313810855275427_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGpJK4qiTJNxF8envciM8M98xYA7fAgxe_zFgDt8CDF7_eeym5qKZ9MrtBzOc_4lEJ_kicQZ2daV_moI3BfJ0DL&_nc_ohc=JYacMYcpXcsAX8bxXiD&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT_pkTllb1GlNgdm545yxsMo3tW7CuYMxNPsY8eatfasyg&oe=62D5C2DC" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                </div>
                                </div>
                                <div class="row photos">
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/240506029_884222572186579_8913908650798408071_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFw5R3BoGDA9JjjL4bMjgF9-DCEWI9aS5X4MIRYj1pLleBHb0FE4sbdgA-jGk0vFwGKq17U4p9rUtA3Y4g9U5l9&_nc_ohc=YFAiRz5V6E4AX-LjrUj&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT8i3qRLRYUeFWastM-jc54lmvtFCDsXOV-iXEpgE1TOXw&oe=62D76233" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/240506029_884222572186579_8913908650798408071_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFw5R3BoGDA9JjjL4bMjgF9-DCEWI9aS5X4MIRYj1pLleBHb0FE4sbdgA-jGk0vFwGKq17U4p9rUtA3Y4g9U5l9&_nc_ohc=YFAiRz5V6E4AX-LjrUj&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT8i3qRLRYUeFWastM-jc54lmvtFCDsXOV-iXEpgE1TOXw&oe=62D76233" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/240403623_884222555519914_1550584410398611025_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGOs_HCVlp1rWUperpilvjY5tqcwG5GTszm2pzAbkZOzNpuZXp4HYMEcd26TuXlNLyR36m_-Nm9Rh0A8dJlRZ_m&_nc_ohc=QF2GFO9LLsIAX-pk1jt&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT-L6fYw0kapa7MNSsh5jR94jx2BNVczlxIgwYGme5Peew&oe=62D64F26" data-fancybox="images">
                                                    <img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/240403623_884222555519914_1550584410398611025_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGOs_HCVlp1rWUperpilvjY5tqcwG5GTszm2pzAbkZOzNpuZXp4HYMEcd26TuXlNLyR36m_-Nm9Rh0A8dJlRZ_m&_nc_ohc=QF2GFO9LLsIAX-pk1jt&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT-L6fYw0kapa7MNSsh5jR94jx2BNVczlxIgwYGme5Peew&oe=62D64F26" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/240466933_884222522186584_6797569378349034890_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGA6aS6WOYq4iJ0llYL-L-b1nB5oIi25e7WcHmgiLbl7i623-GOU8KWxUmMd6eKoKnq9xkD28GShM7soucZZA6e&_nc_ohc=1crDvvHfx2kAX9hnBpT&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT-K8Rjvy4gnt6OCc_D3T481f1C3k0ImD2B4sgUUeH426w&oe=62D78B6C" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/240466933_884222522186584_6797569378349034890_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGA6aS6WOYq4iJ0llYL-L-b1nB5oIi25e7WcHmgiLbl7i623-GOU8KWxUmMd6eKoKnq9xkD28GShM7soucZZA6e&_nc_ohc=1crDvvHfx2kAX9hnBpT&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT-K8Rjvy4gnt6OCc_D3T481f1C3k0ImD2B4sgUUeH426w&oe=62D78B6C" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-3.fna.fbcdn.net/v/t39.30808-6/240166483_884222502186586_5960951468083894677_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHfWsumVxNE7TPcBXImGF6PqPw7GDu6hDao_DsYO7qENiPowNh3NEuKAc1niBp2-ADWodUQvDVXDFe_9hjwXcYd&_nc_ohc=umvKc-fAV6oAX9U8ql-&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT803qltwzVram-EZHvWt_VFuyHWtKZNzAP9hmRiNhsoug&oe=62D648F1" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t39.30808-6/240166483_884222502186586_5960951468083894677_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHfWsumVxNE7TPcBXImGF6PqPw7GDu6hDao_DsYO7qENiPowNh3NEuKAc1niBp2-ADWodUQvDVXDFe_9hjwXcYd&_nc_ohc=umvKc-fAV6oAX9U8ql-&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT803qltwzVram-EZHvWt_VFuyHWtKZNzAP9hmRiNhsoug&oe=62D648F1" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="row photos">
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/238949865_876321732976663_8758517797156066437_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeE96_JWdXYrM7aKuYaDXpkNIbhSU4r_53ohuFJTiv_nevvxmysugWncAaUxI2tIyDuI4YnIsj0DacylXlwD0fdK&_nc_ohc=PsOSMwDiy1EAX_q3f0T&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT-fJsEx1OrqaIzwRoB8l0NMEwLE60r-hWPU9tO_6sEqRA&oe=62D72CEB" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/238949865_876321732976663_8758517797156066437_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeE96_JWdXYrM7aKuYaDXpkNIbhSU4r_53ohuFJTiv_nevvxmysugWncAaUxI2tIyDuI4YnIsj0DacylXlwD0fdK&_nc_ohc=PsOSMwDiy1EAX_q3f0T&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT-fJsEx1OrqaIzwRoB8l0NMEwLE60r-hWPU9tO_6sEqRA&oe=62D72CEB" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fbkk2-5.fna.fbcdn.net/v/t1.6435-9/182775886_817694245506079_5832013994603841839_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHQ0qa0ITgi7KQK5jzTHt_bayDCwuR-Wj9rIMLC5H5aPzC39JTK07krCR5GAshIoW6xlVJcRnNMXexhp2Yaoo75&_nc_ohc=zMce0wgNocYAX-zdbMT&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-5.fna&oh=00_AT-cpFBO-IQHgv8HpHda1Qf5ScRhR_ghuX7-GbFboMucMA&oe=62F5E1F8" data-fancybox="images">
                                                    <img src="https://scontent.fbkk2-5.fna.fbcdn.net/v/t1.6435-9/182775886_817694245506079_5832013994603841839_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHQ0qa0ITgi7KQK5jzTHt_bayDCwuR-Wj9rIMLC5H5aPzC39JTK07krCR5GAshIoW6xlVJcRnNMXexhp2Yaoo75&_nc_ohc=zMce0wgNocYAX-zdbMT&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-5.fna&oh=00_AT-cpFBO-IQHgv8HpHda1Qf5ScRhR_ghuX7-GbFboMucMA&oe=62F5E1F8" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/239106671_876319916310178_3425475974778446743_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGThcBIEANeva0dbKtrYz5LA6xoIqj_cNEDrGgiqP9w0SNOgyyH0NEl9Ics4NCC0nkPYlk_w5S-mnDaT08FvNB6&_nc_ohc=MdfB9GSVJqoAX9SRLyP&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT_5bYtk3NlWrq5Mcxvkm0DwGrIZLYKUO7vchmB8tAbuXw&oe=62D5DF61" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/239106671_876319916310178_3425475974778446743_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGThcBIEANeva0dbKtrYz5LA6xoIqj_cNEDrGgiqP9w0SNOgyyH0NEl9Ics4NCC0nkPYlk_w5S-mnDaT08FvNB6&_nc_ohc=MdfB9GSVJqoAX9SRLyP&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT_5bYtk3NlWrq5Mcxvkm0DwGrIZLYKUO7vchmB8tAbuXw&oe=62D5DF61" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.6435-9/195478565_837979086810928_8100629691719197625_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHxslnmPaLWGddi1t5jPFly3WBmdMdm1_PdYGZ0x2bX83RfjuTox-XIemaOlipGWtCOX7m1tN3SLtqO0NDMvluE&_nc_ohc=G4ZyeDNdN2UAX85LJbI&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT99jBwisPnrFwEKJSdiVI6qUk_O1cqICfLBr4XAhLwJJQ&oe=62F8FBF6" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.6435-9/195478565_837979086810928_8100629691719197625_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHxslnmPaLWGddi1t5jPFly3WBmdMdm1_PdYGZ0x2bX83RfjuTox-XIemaOlipGWtCOX7m1tN3SLtqO0NDMvluE&_nc_ohc=G4ZyeDNdN2UAX85LJbI&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT99jBwisPnrFwEKJSdiVI6qUk_O1cqICfLBr4XAhLwJJQ&oe=62F8FBF6" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
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
                                            <a href="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279140865_1024674598141375_5313157152301214151_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGAhbBlyhluIZYdygYLtL1mhepJZvktH96F6klm-S0f3gLR2kHbhc8RMGNRS4p8gM7LIRbRpWkgfJGjKvrTBFPj&_nc_ohc=dGXghYMj2zEAX-VVQPm&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT8uRDtUoVV_G-PLvqUH0Ib84xlBzfhsGiez7FBOvkyMIA&oe=62D59669" data-fancybox="images">
                                                <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279140865_1024674598141375_5313157152301214151_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGAhbBlyhluIZYdygYLtL1mhepJZvktH96F6klm-S0f3gLR2kHbhc8RMGNRS4p8gM7LIRbRpWkgfJGjKvrTBFPj&_nc_ohc=dGXghYMj2zEAX-VVQPm&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT8uRDtUoVV_G-PLvqUH0Ib84xlBzfhsGiez7FBOvkyMIA&oe=62D59669" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279179489_1024674721474696_8973106228559485844_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHuGxy4111zf9XICrJg5EW25pgKh8OtHrLmmAqHw60estdUUjYg7SQ5y52iD9FHit07YUUE8NqTy12twz-s9V5N&_nc_ohc=evVqrSPzzkUAX_H-838&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9VGZiSTNO2bK7X0pDfi8xT-o5B3h8HXpBaSsfNr0wlAQ&oe=62D69D1C" data-fancybox="images">
                                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279179489_1024674721474696_8973106228559485844_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHuGxy4111zf9XICrJg5EW25pgKh8OtHrLmmAqHw60estdUUjYg7SQ5y52iD9FHit07YUUE8NqTy12twz-s9V5N&_nc_ohc=evVqrSPzzkUAX_H-838&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9VGZiSTNO2bK7X0pDfi8xT-o5B3h8HXpBaSsfNr0wlAQ&oe=62D69D1C" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279184489_1024674744808027_933187063308857812_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEQha7QX52PSwvnXwYd5r6Tbbg7i0SDI1RtuDuLRIMjVMJTvSO4kI8V62Ov3khIov573jyH2ZpUz9x7aQUP8mtT&_nc_ohc=algDtsjeVSQAX9NUH6B&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9X47Oh1FX-f6oHpdEV4raRv2Bovwc_aI_fdo9Yif4XCw&oe=62D6E6A3" data-fancybox="images">
                                                <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279184489_1024674744808027_933187063308857812_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEQha7QX52PSwvnXwYd5r6Tbbg7i0SDI1RtuDuLRIMjVMJTvSO4kI8V62Ov3khIov573jyH2ZpUz9x7aQUP8mtT&_nc_ohc=algDtsjeVSQAX9NUH6B&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9X47Oh1FX-f6oHpdEV4raRv2Bovwc_aI_fdo9Yif4XCw&oe=62D6E6A3" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279245482_1024674624808039_2260539461576899618_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGxt1eRhXn8nCSuMzo2ZgSVLyKY1mNELW8vIpjWY0QtbxNsJaNfULZd_2JNwVMz6M1FeO6tidfajaWApVOxhmW2&_nc_ohc=jQpFEYBGZTwAX9L1IrA&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9pLNEthQNg7muHslEyZf9ev27NAS1c4pPhOZlKSfLG2w&oe=62D5BB4E" data-fancybox="images">
                                                <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/279245482_1024674624808039_2260539461576899618_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGxt1eRhXn8nCSuMzo2ZgSVLyKY1mNELW8vIpjWY0QtbxNsJaNfULZd_2JNwVMz6M1FeO6tidfajaWApVOxhmW2&_nc_ohc=jQpFEYBGZTwAX9L1IrA&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9pLNEthQNg7muHslEyZf9ev27NAS1c4pPhOZlKSfLG2w&oe=62D5BB4E" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="row photos">
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-3.fna.fbcdn.net/v/t39.30808-6/279692182_1029121554363346_3517236025561696703_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGCUfIT4JSGSJhr-8_KPkVxA1YNf-OJUPYDVg1_44lQ9qIMPHhO4uJTRQchoVp1B1D56BOFXKLUcqnOw7HLWu91&_nc_ohc=_MyquJswJuEAX_rl-4N&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT-H6Lyutz5lZlSmmoCNFNjN1axYlxle_Yxr2ssAAQH5iA&oe=62D6680C" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t39.30808-6/279692182_1029121554363346_3517236025561696703_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGCUfIT4JSGSJhr-8_KPkVxA1YNf-OJUPYDVg1_44lQ9qIMPHhO4uJTRQchoVp1B1D56BOFXKLUcqnOw7HLWu91&_nc_ohc=_MyquJswJuEAX_rl-4N&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT-H6Lyutz5lZlSmmoCNFNjN1axYlxle_Yxr2ssAAQH5iA&oe=62D6680C" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/279498031_1027167904558711_4854900281944901039_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFbTxkKcJs4Z2y0_lcLwjj7eGJYe78MPKN4Ylh7vww8o2QE6sFDB5ATi_2U-axFfzan6FB3crCsEzIC8ksvGLrd&_nc_ohc=ucu0za0APqkAX85Lh-m&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT8tm8CAOHr1GIPJ5wFa8p3teJj_ZcBWAEJEHfBkjD3V9w&oe=62D5C18A" data-fancybox="images">
                                                    <img src="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/279498031_1027167904558711_4854900281944901039_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFbTxkKcJs4Z2y0_lcLwjj7eGJYe78MPKN4Ylh7vww8o2QE6sFDB5ATi_2U-axFfzan6FB3crCsEzIC8ksvGLrd&_nc_ohc=ucu0za0APqkAX85Lh-m&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT8tm8CAOHr1GIPJ5wFa8p3teJj_ZcBWAEJEHfBkjD3V9w&oe=62D5C18A" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/278711331_1024674654808036_8555201943971223816_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeF8UFWcz4Fm5_11lqmekrE6H2iXzR4akaIfaJfNHhqRot7javpCHuDxWuWEo4n31WGduAtMEmVOVzKE8yJYnRKS&_nc_ohc=dOhWZiaDSk8AX_xhtRF&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT-7UFlvhMPjHcDYSsylX8A0-z0uufKBru_hXScQ1x3IpQ&oe=62D7161D" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/278711331_1024674654808036_8555201943971223816_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeF8UFWcz4Fm5_11lqmekrE6H2iXzR4akaIfaJfNHhqRot7javpCHuDxWuWEo4n31WGduAtMEmVOVzKE8yJYnRKS&_nc_ohc=dOhWZiaDSk8AX_xhtRF&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT-7UFlvhMPjHcDYSsylX8A0-z0uufKBru_hXScQ1x3IpQ&oe=62D7161D" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-3.fna.fbcdn.net/v/t39.30808-6/279142037_1024665951475573_5289492456063987136_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFifGC4OvnNA4DCcCfCVk_70NxrykdlXHjQ3GvKR2VceARMCx8aEu_887Dt6yzy3pYAUCdayepSxcyhLDZTNUeM&_nc_ohc=nr-lSL5934AAX_x65WS&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT8ia3lL96-v0ZKZDP7pElmkd2ehMwmpgX5dXzLBSOd9OA&oe=62D63925" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t39.30808-6/279142037_1024665951475573_5289492456063987136_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFifGC4OvnNA4DCcCfCVk_70NxrykdlXHjQ3GvKR2VceARMCx8aEu_887Dt6yzy3pYAUCdayepSxcyhLDZTNUeM&_nc_ohc=nr-lSL5934AAX_x65WS&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT8ia3lL96-v0ZKZDP7pElmkd2ehMwmpgX5dXzLBSOd9OA&oe=62D63925" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="row photos">
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-5.fna.fbcdn.net/v/t39.30808-6/279217075_1024666001475568_1293029106774958210_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEg05owkmK1pIwLI2fF5oXokJ7tRsPSvJCQnu1Gw9K8kMDUyDGXs2JYlU534XxuqpLxYIaNDFpnPdSERPJKQbwJ&_nc_ohc=enLRalsbLG0AX-xH0yV&_nc_ht=scontent.fbkk2-5.fna&oh=00_AT_Vs8_70CFVP7H6NlLdWTMJi-1jj1LZrwQjiAMpB1fhoQ&oe=62D68566" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-5.fna.fbcdn.net/v/t39.30808-6/279217075_1024666001475568_1293029106774958210_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEg05owkmK1pIwLI2fF5oXokJ7tRsPSvJCQnu1Gw9K8kMDUyDGXs2JYlU534XxuqpLxYIaNDFpnPdSERPJKQbwJ&_nc_ohc=enLRalsbLG0AX-xH0yV&_nc_ht=scontent.fbkk2-5.fna&oh=00_AT_Vs8_70CFVP7H6NlLdWTMJi-1jj1LZrwQjiAMpB1fhoQ&oe=62D68566" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/279168955_1024665968142238_6253371372329198375_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHp3RuLRpPrpJukd-muxht_nV__c9w3ehKdX_9z3Dd6EhhnbRpEB8AZzt4eiNlHE4l04bXF5b4wPh-rQwMsghKP&_nc_ohc=Sk6XhLXO6NQAX__g1mF&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT9-55lQX2ney0WybU9mIAHvqGn5LcmRGgH3cVuWO6lTaA&oe=62D72C37" data-fancybox="images">
                                                    <img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/279168955_1024665968142238_6253371372329198375_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHp3RuLRpPrpJukd-muxht_nV__c9w3ehKdX_9z3Dd6EhhnbRpEB8AZzt4eiNlHE4l04bXF5b4wPh-rQwMsghKP&_nc_ohc=Sk6XhLXO6NQAX__g1mF&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT9-55lQX2ney0WybU9mIAHvqGn5LcmRGgH3cVuWO6lTaA&oe=62D72C37" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/278774211_1024665994808902_9088208173250567517_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFnu5Q80HkiRJXEME0vVUg_m7McfJSCw0Kbsxx8lILDQg3AzVt6Y_h1YakVntBLT31IMYaVBh_7pCbWDOytxJNm&_nc_ohc=mMJx9I_tsOIAX-umA36&_nc_oc=AQk-facjKT62FvGgKx_yBKNTnJh_rI83y4UyyJUlX-4jdMJL0mTRrfMKLjfd9VeI7iZ0F7fEWq4laEQ-cXGd0xgX&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT8hqUlfQIfVH1KFB2Hb_rgIRFlDY3fCXZZPwMvzK0H0-g&oe=62D78298" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/278774211_1024665994808902_9088208173250567517_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFnu5Q80HkiRJXEME0vVUg_m7McfJSCw0Kbsxx8lILDQg3AzVt6Y_h1YakVntBLT31IMYaVBh_7pCbWDOytxJNm&_nc_ohc=mMJx9I_tsOIAX-umA36&_nc_oc=AQk-facjKT62FvGgKx_yBKNTnJh_rI83y4UyyJUlX-4jdMJL0mTRrfMKLjfd9VeI7iZ0F7fEWq4laEQ-cXGd0xgX&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT8hqUlfQIfVH1KFB2Hb_rgIRFlDY3fCXZZPwMvzK0H0-g&oe=62D78298" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-3.fna.fbcdn.net/v/t39.30808-6/279142143_1024665958142239_8513247179061851568_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHeIVZM2matmxfSjRNS5tzJIEwpVc1rAzIgTClVzWsDMhUxpsaZDOwZKJXMdcjKhiBJMhglLBrC4XBRJFUcngoL&_nc_ohc=pwGFrLz4hosAX8b4tzb&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT8qjraDqtKFATAqcKAY8N5EeQ0ziLZ_7NiTAM4lBpufQg&oe=62D640E5" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t39.30808-6/279142143_1024665958142239_8513247179061851568_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHeIVZM2matmxfSjRNS5tzJIEwpVc1rAzIgTClVzWsDMhUxpsaZDOwZKJXMdcjKhiBJMhglLBrC4XBRJFUcngoL&_nc_ohc=pwGFrLz4hosAX8b4tzb&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT8qjraDqtKFATAqcKAY8N5EeQ0ziLZ_7NiTAM4lBpufQg&oe=62D640E5" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="row photos">
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/279205697_1024665941475574_7387668710086843412_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFaaR2spY6GMNYmvdn1_U8bEe6g9lVvtbkR7qD2VW-1uTcpfsP3mtVyXkDoKok5TpyPh7JHTpYYHNEisyOXoLpn&_nc_ohc=dBX6cmbqJB4AX-5N7j2&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT9tpMs_SnKOTxfIIRI1u3fxHOTXSY4MRIIpjbfiYIrbSQ&oe=62D60285" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/279205697_1024665941475574_7387668710086843412_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFaaR2spY6GMNYmvdn1_U8bEe6g9lVvtbkR7qD2VW-1uTcpfsP3mtVyXkDoKok5TpyPh7JHTpYYHNEisyOXoLpn&_nc_ohc=dBX6cmbqJB4AX-5N7j2&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT9tpMs_SnKOTxfIIRI1u3fxHOTXSY4MRIIpjbfiYIrbSQ&oe=62D60285" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/240532395_884222558853247_2025195338150106962_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFcpMBfRlbpGKaaJFEbLCAOzPGYp3uwEXrM8Zine7ARep1T9ZgdMncS0MCSnqaXhukb5HHNKyPznvJ-MIDQTqGO&_nc_ohc=Nub9OWkgtqwAX_i5eO1&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT9Ijo4iaZ1WWc4iVNkc5mceh7MaeMCZasqBUTzprj_9BA&oe=62D73A92" data-fancybox="images">
                                                    <img src="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/240532395_884222558853247_2025195338150106962_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFcpMBfRlbpGKaaJFEbLCAOzPGYp3uwEXrM8Zine7ARep1T9ZgdMncS0MCSnqaXhukb5HHNKyPznvJ-MIDQTqGO&_nc_ohc=Nub9OWkgtqwAX_i5eO1&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT9Ijo4iaZ1WWc4iVNkc5mceh7MaeMCZasqBUTzprj_9BA&oe=62D73A92" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/238982350_876319572976879_6809556713680252085_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEka2QHnMLzAvm5iwdYXHYfZ1JJu8nzEf5nUkm7yfMR_mZnNijLa66a4bMW6lfube-lsiRx7VUUGggUIkFZ_H1y&_nc_ohc=lJSgHoGwplIAX920uwj&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT_0809_w6MukIJA0Fuqf62Dy6FDJiuiwrN-BHPEhI-3FA&oe=62D6EBDE" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/238982350_876319572976879_6809556713680252085_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEka2QHnMLzAvm5iwdYXHYfZ1JJu8nzEf5nUkm7yfMR_mZnNijLa66a4bMW6lfube-lsiRx7VUUGggUIkFZ_H1y&_nc_ohc=lJSgHoGwplIAX920uwj&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT_0809_w6MukIJA0Fuqf62Dy6FDJiuiwrN-BHPEhI-3FA&oe=62D6EBDE" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/218316087_857780248164145_4392150600376128526_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHpRGFOIajLuzQyya2nUYk3MeaDc9YGRJ0x5oNz1gZEnSD-xBumHDuGVCfRab58XJ-Ljh3gC3o1pE_CrKZ9KAfd&_nc_ohc=Ny6nQBaayUMAX-H1u-c&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT-ubPNjVLLCK4OK5Tj3N3BEPRmpIKJxnW7dFm61wVhkZQ&oe=62D6C9B9" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/218316087_857780248164145_4392150600376128526_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHpRGFOIajLuzQyya2nUYk3MeaDc9YGRJ0x5oNz1gZEnSD-xBumHDuGVCfRab58XJ-Ljh3gC3o1pE_CrKZ9KAfd&_nc_ohc=Ny6nQBaayUMAX-H1u-c&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT-ubPNjVLLCK4OK5Tj3N3BEPRmpIKJxnW7dFm61wVhkZQ&oe=62D6C9B9" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
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
                                            <a href="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/216148173_857779008164269_6685381950779794105_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHTG0TvGXLCUmCjt5JBy3FNsto3ApvlmISy2jcCm-WYhKPEcOSgafIymud57RSDbrQ9SDxyxzVNBzwpXrqaYzut&_nc_ohc=0KRP8nBziZsAX_Py_8p&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT-gLMNyqHKdojRxQligXRMX-i1QxIizTcbFADbhh1C6Zg&oe=62D68BEF" data-fancybox="images">
                                                <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/216148173_857779008164269_6685381950779794105_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHTG0TvGXLCUmCjt5JBy3FNsto3ApvlmISy2jcCm-WYhKPEcOSgafIymud57RSDbrQ9SDxyxzVNBzwpXrqaYzut&_nc_ohc=0KRP8nBziZsAX_Py_8p&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT-gLMNyqHKdojRxQligXRMX-i1QxIizTcbFADbhh1C6Zg&oe=62D68BEF" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fkkc2-1.fna.fbcdn.net/v/t1.6435-9/195753776_837976236811213_6062226608574968098_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEvljt_284kpXb9E3Tq1NIq3QXGM-Q5_7LdBcYz5Dn_ssxU4sU41E_6gTxmPo9-qgnsfgAXzSga1gPXCGuAeds2&_nc_ohc=pQ8hvOKrOSsAX-8WZB7&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT-6UZtIjasV0vz_hasOZQseKoFZTxwVt78jV2oYMBj3bA&oe=62F71D9E" data-fancybox="images">
                                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t1.6435-9/195753776_837976236811213_6062226608574968098_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEvljt_284kpXb9E3Tq1NIq3QXGM-Q5_7LdBcYz5Dn_ssxU4sU41E_6gTxmPo9-qgnsfgAXzSga1gPXCGuAeds2&_nc_ohc=pQ8hvOKrOSsAX-8WZB7&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT-6UZtIjasV0vz_hasOZQseKoFZTxwVt78jV2oYMBj3bA&oe=62F71D9E" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fkkc2-1.fna.fbcdn.net/v/t1.6435-9/182795637_817694915506012_8103964095566895776_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEhmi09lHk3Ryp2EEukqW4QsZpqNlMaDt-xmmo2UxoO34dIZf26tBrBJcMjrg1r-DJTOXcQSJMZ_WZq2iwpnAfJ&_nc_ohc=TvFxWF29mdAAX_Xa7tR&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9Nllhg1Ub0knFhFIpZgR9foyf90yri0fO8pr0m3I5xUg&oe=62F513C0" data-fancybox="images">
                                                <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t1.6435-9/182795637_817694915506012_8103964095566895776_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEhmi09lHk3Ryp2EEukqW4QsZpqNlMaDt-xmmo2UxoO34dIZf26tBrBJcMjrg1r-DJTOXcQSJMZ_WZq2iwpnAfJ&_nc_ohc=TvFxWF29mdAAX_Xa7tR&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9Nllhg1Ub0knFhFIpZgR9foyf90yri0fO8pr0m3I5xUg&oe=62F513C0" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fkkc2-1.fna.fbcdn.net/v/t1.6435-9/176133172_812386759370161_7905963580273804619_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFwFzmCLmo96V2_6TR2OHYkQxEkspGoaGFDESSykahoYYQ-Xh4Tv6eRalIFnvbePfhemqbQU8fY7kd6xDHhvHhq&_nc_ohc=CeQuDF3GAq8AX8fEN-v&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9qRcxywOfpODdme-AvirnpfUlxDtrvudDKKQQfL4LwHw&oe=62F8B5C8" data-fancybox="images">
                                                <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t1.6435-9/176133172_812386759370161_7905963580273804619_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFwFzmCLmo96V2_6TR2OHYkQxEkspGoaGFDESSykahoYYQ-Xh4Tv6eRalIFnvbePfhemqbQU8fY7kd6xDHhvHhq&_nc_ohc=CeQuDF3GAq8AX8fEN-v&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9qRcxywOfpODdme-AvirnpfUlxDtrvudDKKQQfL4LwHw&oe=62F8B5C8" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="row photos">
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/238425049_876318319643671_6437094040131777971_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGpB9f4XkmhL4yP_KyhfVxUAdcnEhL9V38B1ycSEv1Xf4oaH_IIvo8_hbVQXmxQpj-VHskkyx1ae25_8uBrPtTb&_nc_ohc=xTV3TDRA7dcAX8M9CUy&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT9aY35tbjjYCe9m4sB30ODDiWKbffhJMiy5vritC3CDfQ&oe=62D6F351" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/238425049_876318319643671_6437094040131777971_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGpB9f4XkmhL4yP_KyhfVxUAdcnEhL9V38B1ycSEv1Xf4oaH_IIvo8_hbVQXmxQpj-VHskkyx1ae25_8uBrPtTb&_nc_ohc=xTV3TDRA7dcAX8M9CUy&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT9aY35tbjjYCe9m4sB30ODDiWKbffhJMiy5vritC3CDfQ&oe=62D6F351" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/238695324_876317899643713_2951478499656752655_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEE7VSaphBM9zAZpOmVchqyBwae61ojFsUHBp7rWiMWxeqmfbr7fnL1kV9I25-57RptPw2rs5w_2FbZXUdBhlRB&_nc_ohc=NlMpk2bOX1YAX9jzK_e&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT_AmRMJYH7awoj_kV6g1Y3jP7HH7m0cgaltLprJ52uCHA&oe=62D68544" data-fancybox="images">
                                                    <img src="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/238695324_876317899643713_2951478499656752655_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEE7VSaphBM9zAZpOmVchqyBwae61ojFsUHBp7rWiMWxeqmfbr7fnL1kV9I25-57RptPw2rs5w_2FbZXUdBhlRB&_nc_ohc=NlMpk2bOX1YAX9jzK_e&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT_AmRMJYH7awoj_kV6g1Y3jP7HH7m0cgaltLprJ52uCHA&oe=62D68544" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/238974236_876317449643758_3569098886166097357_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH6pMtGDW1LQFLwrURgWU3K16fcMNx_2L3Xp9ww3H_Yve3KjANjAC-Fo-dyxHX4L6ADa6V8pe2hkcr6snZfZ5hl&_nc_ohc=ImhvziU1CIIAX_53UGl&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT9aKvQBsNtAOMVG_eTg9yU4LlFPIrKa_7sd-KDoO-JYvg&oe=62D74C1C" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/238974236_876317449643758_3569098886166097357_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH6pMtGDW1LQFLwrURgWU3K16fcMNx_2L3Xp9ww3H_Yve3KjANjAC-Fo-dyxHX4L6ADa6V8pe2hkcr6snZfZ5hl&_nc_ohc=ImhvziU1CIIAX_53UGl&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT9aKvQBsNtAOMVG_eTg9yU4LlFPIrKa_7sd-KDoO-JYvg&oe=62D74C1C" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/239006772_876317022977134_4546563673195917950_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHl8Lh9iXU_cbyYtTRCJ4_n1TdqtC4nRbrVN2q0LidFuuBnssXXqOMmDNZY0KLP4p4JGciFYJmEJm2DZxm2Lt8y&_nc_ohc=VJU8BqJG9T4AX9_E6Np&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT82vf1AoLSVqyKkIlhqvhWHK-Jgy7K13X0vslxh-d9zOw&oe=62D61BFD" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/239006772_876317022977134_4546563673195917950_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHl8Lh9iXU_cbyYtTRCJ4_n1TdqtC4nRbrVN2q0LidFuuBnssXXqOMmDNZY0KLP4p4JGciFYJmEJm2DZxm2Lt8y&_nc_ohc=VJU8BqJG9T4AX9_E6Np&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT82vf1AoLSVqyKkIlhqvhWHK-Jgy7K13X0vslxh-d9zOw&oe=62D61BFD" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="row photos">
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-4.fna.fbcdn.net/v/t1.6435-9/194246931_837974420144728_2010798694609051612_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeElJrC0TDdPrar4G8_TToJt7CI9zD2MzKbsIj3MPYzMpnlFbO6zWUSqhRRipI8Adsf8u9GJ0u64m3KskQeH8FMN&_nc_ohc=3vJ1xM19ZAgAX8SUU7_&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT93Gp0WCCVHwTSIuea9lZ-3hZ2TEb1vxbxFzhvae_KENw&oe=62F88F48" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-4.fna.fbcdn.net/v/t1.6435-9/194246931_837974420144728_2010798694609051612_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeElJrC0TDdPrar4G8_TToJt7CI9zD2MzKbsIj3MPYzMpnlFbO6zWUSqhRRipI8Adsf8u9GJ0u64m3KskQeH8FMN&_nc_ohc=3vJ1xM19ZAgAX8SUU7_&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT93Gp0WCCVHwTSIuea9lZ-3hZ2TEb1vxbxFzhvae_KENw&oe=62F88F48" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.6435-9/175479729_812386716036832_1717280000923986654_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHQk5-IVsOihQJB6nr59oHhnyjfmd7ySdqfKN-Z3vJJ2sZTP28CqsitmXEdL-zoeXqtH6ewxYORMhb5LKBo0Kh8&_nc_ohc=KCXnXJlyJ_EAX-jiS-J&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT8cR96SFyQ_hxsE6SLa9DQpYUI6keMXYQqPE82e5AuqGw&oe=62F8D520" data-fancybox="images">
                                                    <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.6435-9/175479729_812386716036832_1717280000923986654_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHQk5-IVsOihQJB6nr59oHhnyjfmd7ySdqfKN-Z3vJJ2sZTP28CqsitmXEdL-zoeXqtH6ewxYORMhb5LKBo0Kh8&_nc_ohc=KCXnXJlyJ_EAX-jiS-J&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT8cR96SFyQ_hxsE6SLa9DQpYUI6keMXYQqPE82e5AuqGw&oe=62F8D520" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.6435-9/157309882_785132918762212_1051026032825515325_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeE4UdLWsepXImRqQlTXm5lS_EoSuC2TB7X8ShK4LZMHtXIMe0maO4dI97eourEixuU8BGYDRv9P_Gft6RpUG3FZ&_nc_ohc=6Z6_nu9ooXYAX_7bFGA&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT_51r6zWGa70latO9sko2bWtkXL1Bx6yHdap5ohDuwAbg&oe=62F6E404" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.6435-9/157309882_785132918762212_1051026032825515325_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeE4UdLWsepXImRqQlTXm5lS_EoSuC2TB7X8ShK4LZMHtXIMe0maO4dI97eourEixuU8BGYDRv9P_Gft6RpUG3FZ&_nc_ohc=6Z6_nu9ooXYAX_7bFGA&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT_51r6zWGa70latO9sko2bWtkXL1Bx6yHdap5ohDuwAbg&oe=62F6E404" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.6435-9/133717472_751324065476431_5642530189835776865_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeE6xqj2RWJGP51PyIqewH9b1SVxHEp-derVJXEcSn516oAaykB9Z0Le_D_qOQoiYbOdhWEz4utgHo5AdxBQKw1l&_nc_ohc=feJruOAX4d8AX-MkcQh&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT9eiOHogYyLTjYcGtRH4tiFxCYii7K9C35uvnNJpWQEIA&oe=62F59844" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.6435-9/133717472_751324065476431_5642530189835776865_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeE6xqj2RWJGP51PyIqewH9b1SVxHEp-derVJXEcSn516oAaykB9Z0Le_D_qOQoiYbOdhWEz4utgHo5AdxBQKw1l&_nc_ohc=feJruOAX4d8AX-MkcQh&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT9eiOHogYyLTjYcGtRH4tiFxCYii7K9C35uvnNJpWQEIA&oe=62F59844" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="row photos">
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            {{-- <a href="" data-fancybox="images">
                                                <img src="" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a> --}}
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fbkk2-6.fna.fbcdn.net/v/t1.6435-9/121703072_700966647178840_4312499374829319153_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHnYA1TQcjBCYQP--6Xcrxb9mStPjLXhkz2ZK0-MteGTA38dzmHVsE9EFC5m-LsURkJcaf34DHLzQUwQTLj7Br3&_nc_ohc=-G3fJTnchQoAX_Tg4gC&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT9L1Fg3ZGeQFzdbo1MztCqvOyWMOE4Q1iVUXqnNVTzOgA&oe=62F71AED" data-fancybox="images">
                                                    <img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t1.6435-9/121703072_700966647178840_4312499374829319153_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHnYA1TQcjBCYQP--6Xcrxb9mStPjLXhkz2ZK0-MteGTA38dzmHVsE9EFC5m-LsURkJcaf34DHLzQUwQTLj7Br3&_nc_ohc=-G3fJTnchQoAX_Tg4gC&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT9L1Fg3ZGeQFzdbo1MztCqvOyWMOE4Q1iVUXqnNVTzOgA&oe=62F71AED" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-7.fna.fbcdn.net/v/t1.6435-9/121618658_697097324232439_6669262272880873335_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFnWhmTYbXCYPjHFxh6bttaL3HTYF9qx5EvcdNgX2rHkUqRRup__yrrtaBPlwGo2xXS5y5CG1hTm_OQ7FWB3XXk&_nc_ohc=Bo13h9D7adwAX_wsidM&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT88U2fM2UtknFfSpLi20X3SbHE2ENCL5W-vTANcb9LuHA&oe=62F85D3E" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-7.fna.fbcdn.net/v/t1.6435-9/121618658_697097324232439_6669262272880873335_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFnWhmTYbXCYPjHFxh6bttaL3HTYF9qx5EvcdNgX2rHkUqRRup__yrrtaBPlwGo2xXS5y5CG1hTm_OQ7FWB3XXk&_nc_ohc=Bo13h9D7adwAX_wsidM&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT88U2fM2UtknFfSpLi20X3SbHE2ENCL5W-vTANcb9LuHA&oe=62F85D3E" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            {{-- <a href="" data-fancybox="images">
                                                <img src="" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a> --}}
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
                                            <a href="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/271094371_961682444440591_763066383170056575_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEBAgzUHwDyCEP6rkRJnLbWmjTSgA6xLBmaNNKADrEsGU-e_z0kkZn1vPmAr5Lc6Y1j71LNzCDFRhvpm0cwKyPg&_nc_ohc=YUpx75AW3dAAX-pclRl&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT-i9KX-2r0pSl2X_uj5-aNG0h5k5VeEnNYX83mLQowM5w&oe=62D6A85F" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/271094371_961682444440591_763066383170056575_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEBAgzUHwDyCEP6rkRJnLbWmjTSgA6xLBmaNNKADrEsGU-e_z0kkZn1vPmAr5Lc6Y1j71LNzCDFRhvpm0cwKyPg&_nc_ohc=YUpx75AW3dAAX-pclRl&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT-i9KX-2r0pSl2X_uj5-aNG0h5k5VeEnNYX83mLQowM5w&oe=62D6A85F" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/274162391_985309848744517_7420732700691378571_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEHNi-WwEgaXY0_C21m5k88u8xLuApA0Fu7zEu4CkDQWxcfOqwhGcWR2F_yqfAnQiYuiXIUJ02O-L0n1XICZK_m&_nc_ohc=Sie3mswP9dsAX_y7pH3&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT_owJbeynaXI8M8tlfULln0vK9NuqBcitufo8V4LjYa3Q&oe=62D75720" data-fancybox="images">
                                                    <img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/274162391_985309848744517_7420732700691378571_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEHNi-WwEgaXY0_C21m5k88u8xLuApA0Fu7zEu4CkDQWxcfOqwhGcWR2F_yqfAnQiYuiXIUJ02O-L0n1XICZK_m&_nc_ohc=Sie3mswP9dsAX_y7pH3&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT_owJbeynaXI8M8tlfULln0vK9NuqBcitufo8V4LjYa3Q&oe=62D75720" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-8.fna.fbcdn.net/v/t1.6435-9/106464113_624963484779157_6258973570266200654_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEcWhp_-HeyzPYXFQfu1N-EXg_PQslsbGVeD89CyWxsZZmVCmTRb_-t5_GyBXszWOROdCLKMtmXtNtb_s3oPy0o&_nc_ohc=lunnKdkURBAAX-zhDV8&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT95gUkTE3ltXkJ-82wls7zCX0FArKfRlxa4TXMUbZJt-w&oe=62F5E574" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t1.6435-9/106464113_624963484779157_6258973570266200654_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEcWhp_-HeyzPYXFQfu1N-EXg_PQslsbGVeD89CyWxsZZmVCmTRb_-t5_GyBXszWOROdCLKMtmXtNtb_s3oPy0o&_nc_ohc=lunnKdkURBAAX-zhDV8&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT95gUkTE3ltXkJ-82wls7zCX0FArKfRlxa4TXMUbZJt-w&oe=62F5E574" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-8.fna.fbcdn.net/v/t1.6435-9/103126879_611685332773639_1825301620416724003_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=9267fe&_nc_eui2=AeE2KauPc0DzEol8tBYVH9YXEeQWxJWMjEgR5BbElYyMSKm0IvBi5LUVAx3jUAj6u5W3WKj91DH1RLDCPoq9Pwgu&_nc_ohc=wpjv-U0vGW4AX-_yvxX&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT_VqRFLYT4fFdtoki8l432zS8fExO8B_TpH-YvWUAlzHA&oe=62F91F5B" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t1.6435-9/103126879_611685332773639_1825301620416724003_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=9267fe&_nc_eui2=AeE2KauPc0DzEol8tBYVH9YXEeQWxJWMjEgR5BbElYyMSKm0IvBi5LUVAx3jUAj6u5W3WKj91DH1RLDCPoq9Pwgu&_nc_ohc=wpjv-U0vGW4AX-_yvxX&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT_VqRFLYT4fFdtoki8l432zS8fExO8B_TpH-YvWUAlzHA&oe=62F91F5B" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="row photos">
                                    
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            {{-- <a href="" data-fancybox="images">
                                                <img src="" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a> --}}
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-5.fna.fbcdn.net/v/t1.6435-9/95238815_590384258237080_5901983271767506944_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=9267fe&_nc_eui2=AeGECBvWin1dUc1XUeNsTMwWCXPH4mi1T8IJc8fiaLVPwomD3LjkkqeN_PpCwv97nR8Nz-b9X6ULmYLxQxQ70yL2&_nc_ohc=2ZGReJ9hl-oAX_Xwekr&_nc_ht=scontent.fbkk2-5.fna&oh=00_AT8QWd6hKiqkyqAi1gMI4eDfYkCloH8RQN1kKXAu8-UMZw&oe=62F5D3A3" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-5.fna.fbcdn.net/v/t1.6435-9/95238815_590384258237080_5901983271767506944_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=9267fe&_nc_eui2=AeGECBvWin1dUc1XUeNsTMwWCXPH4mi1T8IJc8fiaLVPwomD3LjkkqeN_PpCwv97nR8Nz-b9X6ULmYLxQxQ70yL2&_nc_ohc=2ZGReJ9hl-oAX_Xwekr&_nc_ht=scontent.fbkk2-5.fna&oh=00_AT8QWd6hKiqkyqAi1gMI4eDfYkCloH8RQN1kKXAu8-UMZw&oe=62F5D3A3" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fbkk2-8.fna.fbcdn.net/v/t1.6435-9/94102862_584137962195043_2763582709312782336_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=a26aad&_nc_eui2=AeGjzkx-j7uObJCO314jyEeAnb32W94dyXmdvfZb3h3Jed7QOZ01J4RjVypQtVcUOz4gYZ5i_hNJdhgv4enXAx9k&_nc_ohc=DTt1FypBvTYAX8KpiXv&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT-PnJarpOPwKQ4E1WU7WkYvwFykMC87xPOkdW6vRXYpaA&oe=62F80AD9" data-fancybox="images">
                                                    <img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t1.6435-9/94102862_584137962195043_2763582709312782336_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=a26aad&_nc_eui2=AeGjzkx-j7uObJCO314jyEeAnb32W94dyXmdvfZb3h3Jed7QOZ01J4RjVypQtVcUOz4gYZ5i_hNJdhgv4enXAx9k&_nc_ohc=DTt1FypBvTYAX8KpiXv&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT-PnJarpOPwKQ4E1WU7WkYvwFykMC87xPOkdW6vRXYpaA&oe=62F80AD9" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            {{-- <a href="" data-fancybox="images">
                                                <img src="" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a> --}}
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
                                            <a href="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/289919633_124912816896025_6646392615919899825_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=iZiNodbMMC0AX-lVqVd&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT_4f8_jNb-2Gvaax7Ze31c71tvOl3mCZ0uK-PjCq7NPNQ&oe=62D730BD" data-fancybox="images">
                                                <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/289919633_124912816896025_6646392615919899825_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=iZiNodbMMC0AX-lVqVd&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT_4f8_jNb-2Gvaax7Ze31c71tvOl3mCZ0uK-PjCq7NPNQ&oe=62D730BD" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/285754364_117058701014770_2430968516897204623_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=PnMOtZgwoqQAX_A7pgA&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT_HDqdBKFpUNX2zuLGVHMBxAyhyw-h2j5pf-9AxxLnjrQ&oe=62D73A17" data-fancybox="images">
                                                    <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/285754364_117058701014770_2430968516897204623_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=PnMOtZgwoqQAX_A7pgA&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT_HDqdBKFpUNX2zuLGVHMBxAyhyw-h2j5pf-9AxxLnjrQ&oe=62D73A17" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/283616253_107717581948882_959966794016615792_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_ohc=hmEv7Pt3OcwAX9S97Bl&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9u97SwixKLYBxwM43TbjyIFWi8iOPcTJHDBkMVtnwtAQ&oe=62D6F12A" data-fancybox="images">
                                                <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/283616253_107717581948882_959966794016615792_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_ohc=hmEv7Pt3OcwAX9S97Bl&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT9u97SwixKLYBxwM43TbjyIFWi8iOPcTJHDBkMVtnwtAQ&oe=62D6F12A" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/283482082_107717525282221_8073631087816644674_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=730e14&_nc_ohc=u4tiZb5dvREAX-E5KHL&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT8cQtSdxlwMyVYdwdjfrmBYnxIypqCBYCJhbyacNVPEqw&oe=62D743BF" data-fancybox="images">
                                                <img src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/283482082_107717525282221_8073631087816644674_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=730e14&_nc_ohc=u4tiZb5dvREAX-E5KHL&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fkkc2-1.fna&oh=00_AT8cQtSdxlwMyVYdwdjfrmBYnxIypqCBYCJhbyacNVPEqw&oe=62D743BF" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="row photos">
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/285233163_118911230829517_4267479673953572608_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGckkVBYcIgSf0cwKJW1PNu5t2NVXEUKvLm3Y1VcRQq8n0yC6v_J03khYP7drYc4-tFfSxNgkcOZIxgPKZ9J2EE&_nc_ohc=Jew7S55YM7QAX-4kG9n&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT8xVkYq2kzIxmc4BGkLvJ-l7yWCRwgCltm5r8moM2Rmmg&oe=62D5DD54" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/285233163_118911230829517_4267479673953572608_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGckkVBYcIgSf0cwKJW1PNu5t2NVXEUKvLm3Y1VcRQq8n0yC6v_J03khYP7drYc4-tFfSxNgkcOZIxgPKZ9J2EE&_nc_ohc=Jew7S55YM7QAX-4kG9n&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT8xVkYq2kzIxmc4BGkLvJ-l7yWCRwgCltm5r8moM2Rmmg&oe=62D5DD54" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/283568826_107714975282476_6810118519494916676_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFeB2uTJx27kFTx8UOV9ev2ZnEP37-T5N5mcQ_fv5Pk3n6IKSjNZhg6Xvvb0GnOvqB8UEXb3HdUHYbvoemHIJMq&_nc_ohc=_aRzxjNxcM4AX9G1KlS&_nc_oc=AQkqcevUV7aeVXHNHBVK15fnKRqlzn3gF_f5fytiC9gN7LIHj-zUgAPm_UiWYEQJtljL-p036yp_4nAvEtPPYIEn&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT8HVmXU2z9WbW5LUWN0jq-iKSZrJVoXgLCwamH--WhXQA&oe=62D785C7" data-fancybox="images">
                                                    <img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/283568826_107714975282476_6810118519494916676_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFeB2uTJx27kFTx8UOV9ev2ZnEP37-T5N5mcQ_fv5Pk3n6IKSjNZhg6Xvvb0GnOvqB8UEXb3HdUHYbvoemHIJMq&_nc_ohc=_aRzxjNxcM4AX9G1KlS&_nc_oc=AQkqcevUV7aeVXHNHBVK15fnKRqlzn3gF_f5fytiC9gN7LIHj-zUgAPm_UiWYEQJtljL-p036yp_4nAvEtPPYIEn&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT8HVmXU2z9WbW5LUWN0jq-iKSZrJVoXgLCwamH--WhXQA&oe=62D785C7" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/283534031_107714311949209_7918571395857973238_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEg3LqWkIfzJlGsvypnyMaAqV4MvE2t01CpXgy8Ta3TUOrG3pGG9AM5dcUvdE8a3IjCGELzWxZuEpayAhtmw8ya&_nc_ohc=62kO8yYXMNEAX8xw4a8&_nc_oc=AQktEfiqKL9zh97sj_JKmXDGjqBYql7cn7A44qgks3cFDdNMfX-judCDhhGQ9QeRgRq4MfV5AOEb1inbioWI30OG&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT-j5p04tLU_Zibn-PQGfQCVqu-JZr6uwkp2iCDmAEu6gg&oe=62D6CBF3" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/283534031_107714311949209_7918571395857973238_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEg3LqWkIfzJlGsvypnyMaAqV4MvE2t01CpXgy8Ta3TUOrG3pGG9AM5dcUvdE8a3IjCGELzWxZuEpayAhtmw8ya&_nc_ohc=62kO8yYXMNEAX8xw4a8&_nc_oc=AQktEfiqKL9zh97sj_JKmXDGjqBYql7cn7A44qgks3cFDdNMfX-judCDhhGQ9QeRgRq4MfV5AOEb1inbioWI30OG&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT-j5p04tLU_Zibn-PQGfQCVqu-JZr6uwkp2iCDmAEu6gg&oe=62D6CBF3" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-3.fna.fbcdn.net/v/t39.30808-6/283548104_107713658615941_1268493237965301409_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEHNNStfHs5ApSNVoVydvyUEKAvM338GgsQoC8zffwaC8z_E0QRsZiNpYHzIvLfxbjgR0DMZoYQsU2zKRaH-ElT&_nc_ohc=RYy3adI2L4oAX-Y1LYZ&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT-OxHwbfRTGEhpBscA5sa4dTnqbqywimhy8_ICEZHJ6cA&oe=62D717A1" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t39.30808-6/283548104_107713658615941_1268493237965301409_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEHNNStfHs5ApSNVoVydvyUEKAvM338GgsQoC8zffwaC8z_E0QRsZiNpYHzIvLfxbjgR0DMZoYQsU2zKRaH-ElT&_nc_ohc=RYy3adI2L4oAX-Y1LYZ&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT-OxHwbfRTGEhpBscA5sa4dTnqbqywimhy8_ICEZHJ6cA&oe=62D717A1" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="row photos">
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/283511861_107713595282614_4597407863797603904_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeG2TUmmiszi_Gt51HFe3bkkG9YjdkzIfW0b1iN2TMh9bfF5davGeoHIKQTocxQHrIAgl3GJFH7mVesChS0SezaX&_nc_ohc=8rQuy6beogoAX-Xx-Rg&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT-cMYS5kzDE8mDkrcJpajAEL8eWSnD6ArN33m_e3pZ7fg&oe=62D6612E" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/283511861_107713595282614_4597407863797603904_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeG2TUmmiszi_Gt51HFe3bkkG9YjdkzIfW0b1iN2TMh9bfF5davGeoHIKQTocxQHrIAgl3GJFH7mVesChS0SezaX&_nc_ohc=8rQuy6beogoAX-Xx-Rg&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT-cMYS5kzDE8mDkrcJpajAEL8eWSnD6ArN33m_e3pZ7fg&oe=62D6612E" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/283537376_107712778616029_2773885433580285754_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHnNnSlQSAzzm4ocXFtam2Ow-0xWyhR_i7D7TFbKFH-Lqu4M9S1Y6GuXUev6Ou7w8H3UICMrh7OcDip8Z2dOb5t&_nc_ohc=LN2brroRLNwAX9Ar5Ib&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT_ewEBO98jOKlWtC4sYPf4pTY3p0CX2dXwkJsnK09U-WA&oe=62D75A72" data-fancybox="images">
                                                    <img src="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/283537376_107712778616029_2773885433580285754_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHnNnSlQSAzzm4ocXFtam2Ow-0xWyhR_i7D7TFbKFH-Lqu4M9S1Y6GuXUev6Ou7w8H3UICMrh7OcDip8Z2dOb5t&_nc_ohc=LN2brroRLNwAX9Ar5Ib&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT_ewEBO98jOKlWtC4sYPf4pTY3p0CX2dXwkJsnK09U-WA&oe=62D75A72" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/283136007_107718225282151_8557268139859971332_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEvhsK9dNSFym7G9QgDhX2VfukXLilcxZh-6RcuKVzFmOt6fqwLemgZ95yxtMSD8Mb3-IA_Dc4GVG3Qc7k63oRB&_nc_ohc=X0aHUbDG1dgAX9f-sbk&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT_pUyXkF-QGFXQ79VHElPrd3s4P3FMNILZ_i1CFP3Hebw&oe=62D6F734" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/283136007_107718225282151_8557268139859971332_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEvhsK9dNSFym7G9QgDhX2VfukXLilcxZh-6RcuKVzFmOt6fqwLemgZ95yxtMSD8Mb3-IA_Dc4GVG3Qc7k63oRB&_nc_ohc=X0aHUbDG1dgAX9f-sbk&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT_pUyXkF-QGFXQ79VHElPrd3s4P3FMNILZ_i1CFP3Hebw&oe=62D6F734" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/293171374_108360875280070_965681650704387789_n.jpg?stp=cp1_dst-jpg&_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGhHWMREKvBoV0JkYZtMAx-4kyqJE7xkHbiTKokTvGQdgpBEa4flNl1UrQWOZyHD2dKx0g7ecp7fQzqzfiEuXGi&_nc_ohc=Rf9hefY9KIkAX_ETTET&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT8mThTysOft9I-uB-Q3LWo4IyxmYhGahVSCjV-8RCfUoA&oe=62D683A4" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/293171374_108360875280070_965681650704387789_n.jpg?stp=cp1_dst-jpg&_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGhHWMREKvBoV0JkYZtMAx-4kyqJE7xkHbiTKokTvGQdgpBEa4flNl1UrQWOZyHD2dKx0g7ecp7fQzqzfiEuXGi&_nc_ohc=Rf9hefY9KIkAX_ETTET&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT8mThTysOft9I-uB-Q3LWo4IyxmYhGahVSCjV-8RCfUoA&oe=62D683A4" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="row photos">
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/291597305_128353709885269_1815508802423796272_n.jpg?stp=cp1_dst-jpg&_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGTW9T4aGTRwjY8CinGLFwZ_nIebQYz9c3-ch5tBjP1zWWgCiea069Bw8ZdGpZaeHlEm9l8CjcdLiz7WlBMf7t-&_nc_ohc=LYRt9dG0-hsAX8GHXz_&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT-cpmamzTM_yy-TIjONcwA_SepTlGp58Qrnx0zN_4cuBw&oe=62D63280" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/291597305_128353709885269_1815508802423796272_n.jpg?stp=cp1_dst-jpg&_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGTW9T4aGTRwjY8CinGLFwZ_nIebQYz9c3-ch5tBjP1zWWgCiea069Bw8ZdGpZaeHlEm9l8CjcdLiz7WlBMf7t-&_nc_ohc=LYRt9dG0-hsAX8GHXz_&tn=vb5FvuXwdZC7-_Nl&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT-cpmamzTM_yy-TIjONcwA_SepTlGp58Qrnx0zN_4cuBw&oe=62D63280" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fbkk2-3.fna.fbcdn.net/v/t39.30808-6/287708834_122337807153526_548344954066602673_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeElbCvR4K0ZFJ_-u0M1kGpHWglwfAXr4n1aCXB8BevifQOTtmsIXaTKo07qaz5AXa_qF9BdYGABU-8jK8dmWZ_S&_nc_ohc=Sj0wuMKJoHwAX9oBjEo&_nc_oc=AQmeu8yYI_JECCDPxRw_oRLpJQNcPqpeqCVg5Y6hEM0_qTWtDqcQbsQ0GW93puEPc05i9krLTJW-MqUvjfkioOro&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT-4rZ-Svge4O_Ms9JqVeCiRkZnOCizNrr0zaMCP9HlQZw&oe=62D71C4D" data-fancybox="images">
                                                    <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t39.30808-6/287708834_122337807153526_548344954066602673_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeElbCvR4K0ZFJ_-u0M1kGpHWglwfAXr4n1aCXB8BevifQOTtmsIXaTKo07qaz5AXa_qF9BdYGABU-8jK8dmWZ_S&_nc_ohc=Sj0wuMKJoHwAX9oBjEo&_nc_oc=AQmeu8yYI_JECCDPxRw_oRLpJQNcPqpeqCVg5Y6hEM0_qTWtDqcQbsQ0GW93puEPc05i9krLTJW-MqUvjfkioOro&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT-4rZ-Svge4O_Ms9JqVeCiRkZnOCizNrr0zaMCP9HlQZw&oe=62D71C4D" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/286669227_122258090494831_5475605832852836170_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFgQ53xSWOpxMA2FHKX5sFwZLKBLc73ciZksoEtzvdyJgrzvrtq-UFzeeiKrJK5YhrS2IdUpQiFiai9Y_tW78f5&_nc_ohc=JcAO4Qxw5CwAX_wgMdC&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT90CR9v02mnOtrdJXFAiHRCUiOL-Kf8QOzeuCpSqKRrKg&oe=62D7471E" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/286669227_122258090494831_5475605832852836170_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFgQ53xSWOpxMA2FHKX5sFwZLKBLc73ciZksoEtzvdyJgrzvrtq-UFzeeiKrJK5YhrS2IdUpQiFiai9Y_tW78f5&_nc_ohc=JcAO4Qxw5CwAX_wgMdC&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT90CR9v02mnOtrdJXFAiHRCUiOL-Kf8QOzeuCpSqKRrKg&oe=62D7471E" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/284969531_118911240829516_4551676989665248508_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFCgwhTtaY3ctwUwLN01kzRwx9MLI95Gy_DH0wsj3kbL-N2iEv9P6lAcZSQhJL0qS8jnopRy0HDe_kiGppO4iN1&_nc_ohc=QdRxDJBWY_oAX94spFC&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT8nET53MwbgklKt_Ejy9AyC96QZHMrw21yGq7sfv8eRyw&oe=62D73995" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/284969531_118911240829516_4551676989665248508_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFCgwhTtaY3ctwUwLN01kzRwx9MLI95Gy_DH0wsj3kbL-N2iEv9P6lAcZSQhJL0qS8jnopRy0HDe_kiGppO4iN1&_nc_ohc=QdRxDJBWY_oAX94spFC&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT8nET53MwbgklKt_Ejy9AyC96QZHMrw21yGq7sfv8eRyw&oe=62D73995" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </body>
                    </html>
                </div>
                <div class="tab-pane fade" id="nav-other" role="tabpanel" aria-labelledby="nav-other-tab">
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
                                            <a href="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/271284499_961682454440590_3828022147603801924_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHFlbYbrP5bEA6_--y8xwLJ4ThkZ5J8Pi_hOGRnknw-L1LgZsK0GoM9pzpIuire0bhLC3OIe636Y9pR7KVHkjh9&_nc_ohc=26oXfNX9RsYAX9fY736&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT8ctuZ04_Dl7MoKTCPliDbbm7hbXvQCxJE1ppMjr-1e0g&oe=62D7361D" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/271284499_961682454440590_3828022147603801924_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHFlbYbrP5bEA6_--y8xwLJ4ThkZ5J8Pi_hOGRnknw-L1LgZsK0GoM9pzpIuire0bhLC3OIe636Y9pR7KVHkjh9&_nc_ohc=26oXfNX9RsYAX9fY736&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT8ctuZ04_Dl7MoKTCPliDbbm7hbXvQCxJE1ppMjr-1e0g&oe=62D7361D" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                <a href="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/273441633_980014192607416_5805976584816175678_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGeqqCN2n1jsyrD4kJkCjo1FMCkBkQQ0ZkUwKQGRBDRmVpKt213VEYrZkBGIDxiX9X8szJEw5lb-6WJzY610iMk&_nc_ohc=aFyJCWUICHMAX-cGT_g&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT_NhLTOpNoVtTlL61d62xnRotJC6bgLmaO44JVmBsoC7w&oe=62D5C4EC" data-fancybox="images">
                                                    <img src="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/273441633_980014192607416_5805976584816175678_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGeqqCN2n1jsyrD4kJkCjo1FMCkBkQQ0ZkUwKQGRBDRmVpKt213VEYrZkBGIDxiX9X8szJEw5lb-6WJzY610iMk&_nc_ohc=aFyJCWUICHMAX-cGT_g&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT_NhLTOpNoVtTlL61d62xnRotJC6bgLmaO44JVmBsoC7w&oe=62D5C4EC" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a>
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-6.fna.fbcdn.net/v/t1.6435-9/104805152_620062801935892_8505661418578213539_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeENejDzRHlxzjjyIYosLl5dPRkCrfRltYE9GQKt9GW1gSD4MtbT9yCMyKxvfR3s9S9Tgi1aJWL5hwodLq8jlGmi&_nc_ohc=YRAwGf-tQkQAX9v7ODs&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT-fwIhG_NrlDe0U3sskcqUyhe_JQT8Hb39Q8RLozXiW_Q&oe=62F62405" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t1.6435-9/104805152_620062801935892_8505661418578213539_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeENejDzRHlxzjjyIYosLl5dPRkCrfRltYE9GQKt9GW1gSD4MtbT9yCMyKxvfR3s9S9Tgi1aJWL5hwodLq8jlGmi&_nc_ohc=YRAwGf-tQkQAX9v7ODs&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT-fwIhG_NrlDe0U3sskcqUyhe_JQT8Hb39Q8RLozXiW_Q&oe=62F62405" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            <a href="https://scontent.fbkk2-5.fna.fbcdn.net/v/t39.30808-6/273537918_980015302607305_6875135405602790960_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHGtCTP6uCPGFVyr70PSQvRxSpsbiNVrIHFKmxuI1Wsgfe1wYgTxVFHsFmctR2l6jAVqmB-c1xRlDKouii7wVAH&_nc_ohc=AZfRj7CsB7cAX81ZJmT&_nc_ht=scontent.fbkk2-5.fna&oh=00_AT9CdidPVyJbdsGqs_y3pdrRZlByQMNZ3XGb1UDYxiT7nw&oe=62D5CAA0" data-fancybox="images">
                                                <img src="https://scontent.fbkk2-5.fna.fbcdn.net/v/t39.30808-6/273537918_980015302607305_6875135405602790960_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHGtCTP6uCPGFVyr70PSQvRxSpsbiNVrIHFKmxuI1Wsgfe1wYgTxVFHsFmctR2l6jAVqmB-c1xRlDKouii7wVAH&_nc_ohc=AZfRj7CsB7cAX81ZJmT&_nc_ht=scontent.fbkk2-5.fna&oh=00_AT9CdidPVyJbdsGqs_y3pdrRZlByQMNZ3XGb1UDYxiT7nw&oe=62D5CAA0" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="row photos">
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            {{-- <a href="" data-fancybox="images">
                                                <img src="" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a> --}}
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                {{-- <a href="" data-fancybox="images">
                                                    <img src="" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a> --}}
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            {{-- <a href="" data-fancybox="images">
                                                <img src="" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a> --}}
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            {{-- <a href="" data-fancybox="images">
                                                <img src="" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a> --}}
                                        </figure>
                                    </div>
                                </div>
                                <div class="row photos">
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            {{-- <a href="" data-fancybox="images">
                                                <img src="" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a> --}}
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                {{-- <a href="" data-fancybox="images">
                                                    <img src="" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a> --}}
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            {{-- <a href="" data-fancybox="images">
                                                <img src="" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a> --}}
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            {{-- <a href="" data-fancybox="images">
                                                <img src="" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a> --}}
                                        </figure>
                                    </div>
                                </div>
                                <div class="row photos">
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            {{-- <a href="" data-fancybox="images">
                                                <img src="" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a> --}}
                                        </figure>
                                    </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                                            <figure class="product-thumbnail text-center">
                                                {{-- <a href="" data-fancybox="images">
                                                    <img src="" class="img-fluid shadow p-2"
                                                        alt="" width="250px">
                                                </a> --}}
                                            </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            {{-- <a href="" data-fancybox="images">
                                                <img src="" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a> --}}
                                        </figure>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                        <figure class="product-thumbnail text-center">
                                            {{-- <a href="" data-fancybox="images">
                                                <img src="" class="img-fluid shadow p-2"
                                                    alt="" width="250px">
                                            </a> --}}
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </body>
                    </html>
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