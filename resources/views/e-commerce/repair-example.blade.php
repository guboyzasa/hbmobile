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
                    <li class="breadcrumb-item active">ตัวอย่างงานซ่อม</li>
                </ol>
            </div>
        </div><!-- /.container -->
    </div><!-- /.page-head -->

    <section class="section manuals">
        <div class="container">
            <div align="center">
                <h2 style="color:red"><i class='bx bx-cog'></i> ตัวอย่างงานซ่อม <i class='bx bx-cog'></i></h2>
            </div>
            <div align="center" class="row row-cols-auto">
                <div class="col-sm">
                    {{-- <div class="card-body"> --}}
                    <div class="box table-responsive">
                        {{-- <div class="col-md-5"> --}}
                        <iframe width="500" height="260" src="https://www.youtube.com/embed/cXjJm4GJfgw"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    {{-- </div> --}}
                    {{-- </div> --}}
                </div>
                <div class="col-sm">
                    {{-- <div class="card-body"> --}}
                    <div class="box table-responsive">
                        {{-- <div class="col-md-5"> --}}
                        <iframe width="500" height="260" src="https://www.youtube.com/embed/qsFq6rRC1I8"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    {{-- </div> --}}
                    {{-- </div> --}}
                </div>

            </div>




            {{-- <div class="row"> --}}
            <div class="custom-accordion flex-column" id="manual-detail" role="tablist" aria-multiselectable="true">
                <div class="card card-default">
                    <div class="card-header cursor-pointer" data-toggle="collapse" data-target="#last-manual"
                        aria-expanded="true">
                        <div class="media-left media-middle">
                            <h3 class="media-heading">
                                <i class='bx bxl-apple'></i>
                                1.IOS</h3>
                        </div>
                    </div>
                    <div id="last-manual" class="card-collapse collapse" data-parent="#manual-detail">

                        <div align="center" class="row row-cols-auto">
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <iframe
                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhbmobilekk%2Fphotos%2Fa.292762624665913%2F1024674664808035%2F%3Ftype%3D3%26av%3D292740724668103%26eav%3DAfZhSC97FshXIa3bmZnvD517T3slREGnhiq3OU28Ig9KlGoVjhjBejznAsRLQ70QqEI&show_text=true&width=500"
                                        width="500" height="498" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <iframe
                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhbmobilekk%2Fphotos%2Fa.292762624665913%2F1024674724808029%2F%3Ftype%3D3%26av%3D292740724668103%26eav%3DAfa6318Y2ZpTm39Enogpx30L56zrB1ROHllphawjBqIW9tP1HcvW0mVAzjIS0Cf7Bsk&show_text=true&width=500"
                                        width="500" height="498" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <iframe
                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhbmobilekk%2Fphotos%2Fa.292762624665913%2F1024674628141372%2F%3Ftype%3D3%26av%3D292740724668103%26eav%3DAfZaAxQ43vz0kIR1qMUyIuS1CWDiGKRSOyXkRdOKcAdDt5oNERlYk5p6Frzb3l54dQE&show_text=true&width=500"
                                        width="500" height="498" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <iframe
                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhbmobilekk%2Fphotos%2Fa.292762624665913%2F1024674768141358%2F%3Ftype%3D3%26av%3D292740724668103%26eav%3DAfaeP_oW1x_r08IQfiMHiM55Nppj7hWkUgvHf6Zk_WuHx8xFkE3IkdpirQbfTrAhc0k&show_text=true&width=500"
                                        width="500" height="498" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
                        </div>
                        <!--./ios -->

                    </div>
                </div>
            </div>
            {{-- </div> --}}
        </div><!-- /.container -->
        {{-- </section><!-- /.manuals --> --}}

        {{-- <section class="section manuals pb-0"> --}}
        <div class="container">
            {{-- <div class="row"> --}}
            <div class="custom-accordion flex-column" id="manuals-detail" role="tablist" aria-multiselectable="true">
                <div class="card card-default">
                    <div class="card-header cursor-pointer" data-toggle="collapse" data-target="#last-manuals"
                        aria-expanded="true">
                        <div class="media-left media-middle">
                            <h3 class="media-heading">
                                <i class='bx bxl-android'></i>
                                2.Android</h3>
                        </div>
                    </div>
                    <div id="last-manuals" class="card-collapse collapse" data-parent="#manuals-detail">
                        <div align="center" class="row row-cols-auto">
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <iframe
                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhbmobilekk%2Fphotos%2Fa.292762624665913%2F1024674611474707%2F%3Ftype%3D3%26av%3D292740724668103%26eav%3DAfaiwGqOv4RRmVXsS9GIByQNdDfQIiBJYwH_3LHk2hYq_WnJQs6cFXnvjfGAgJ2Ejl0&show_text=true&width=500"
                                        width="500" height="498" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <iframe
                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhbmobilekk%2Fphotos%2Fa.292762624665913%2F1024674781474690%2F%3Ftype%3D3%26av%3D292740724668103%26eav%3DAfbDrNbfURjVpu1zN4ReN9ezV_E8J2OkdnOfQS1MFc1la901o2sYMYE7v_sXdGmPDic&show_text=true&width=500"
                                        width="500" height="498" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <iframe
                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhbmobilekk%2Fphotos%2Fa.292762624665913%2F1024674658141369%2F%3Ftype%3D3%26av%3D292740724668103%26eav%3DAfanf7wTY88DhJGJBjSXPadmVq387ZJm2ZucJYl44duyFAPxIMX1m9iNShW3-GGCF0s&show_text=true&width=500"
                                        width="500" height="498" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <iframe
                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhbmobilekk%2Fposts%2F1029121611030007&show_text=false&width=500"
                                        width="500" height="498" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
                        </div>
                        <!--./android -->
                    </div>
                </div>
                {{-- </div> --}}
            </div><!-- /.container -->

            {{-- <div class="container"> --}}
            {{-- <div class="row"> --}}
            <div class="custom-accordion flex-column" id="manual-register-detail" role="tablist"
                aria-multiselectable="true">
                <div class="card card-default">
                    <div class="card-header cursor-pointer" data-toggle="collapse" data-target="#last-manual-register"
                        aria-expanded="true">
                        <div class="media-left media-middle">
                            <h3 class="media-heading">
                                <i class='bx bx-desktop'></i>
                                3.NoteBook</h3>
                        </div>
                    </div>
                    <div id="last-manual-register" class="card-collapse collapse" data-parent="#manual-register-detail">
                        <div align="center" class="row row-cols-auto">
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <iframe
                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhbmobilekk%2Fphotos%2Fa.292762624665913%2F947969602478542%2F%3Ftype%3D3%26av%3D292740724668103%26eav%3DAfaF9LltG6ZSvG6NC0_wQuigZPtqn4lwnrr6CM1wgCcxRDH8XvF46Tn9D-w1DjtS4mk&show_text=true&width=500"
                                        width="500" height="498" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <iframe
                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhbmobilekk%2Fposts%2F876321056310064&show_text=false&width=500"
                                        width="500" height="498" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <iframe
                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhbmobilekk%2Fposts%2F876318346310335&show_text=false&width=500"
                                        width="500" height="498" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <iframe
                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhbmobilekk%2Fposts%2F857779038164266&show_text=false&width=500"
                                        width="500" height="498" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
                        </div>
                        <!--./notebook -->
                    </div>
                </div>
            </div>
            {{-- </div> --}}
            {{-- </div><!-- /.container --> --}}
            {{-- </section><!-- /.manuals --> --}}

            {{-- <section class="section manuals pb-0"> --}}
            {{-- <div class="container"> --}}
            {{-- <div class="row"> --}}
            <div class="custom-accordion flex-column" id="manual-password-detail" role="tablist"
                aria-multiselectable="true">
                <div class="card card-default">
                    <div class="card-header cursor-pointer" data-toggle="collapse" data-target="#last-manual-password"
                        aria-expanded="true">
                        <div class="media-left media-middle">
                            <h3 class="media-heading">
                                <i class='bx bx-cog'></i>
                                4.งานติดตั้ง (Onsite)</h3>
                        </div>
                    </div>
                    <div id="last-manual-password" class="card-collapse collapse" data-parent="#manual-password-detail">
                        <div align="center" class="row row-cols-auto">
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <iframe
                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fcamandservices%2Fphotos%2Fa.107698641950776%2F107717585282215%2F%3Ftype%3D3%26av%3D107692418618065%26eav%3DAfbxGYIh0iPPn7oCpySBaPtvzF2URSVJNq5zgsEJ4vMsSuJ25nSEGbWUE611AX7XBB4&show_text=false&width=500"
                                        width="500" height="280" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <iframe
                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fcamandservices%2Fphotos%2Fa.107698641950776%2F107717555282218%2F%3Ftype%3D3%26av%3D107692418618065%26eav%3DAfbi0IAY-UDa0tLjL-V06dtMRvHWUXqeZTq_VhkrRu6xGBAV6kI30QjbTHDyETl83pQ&show_text=false&width=500"
                                        width="500" height="280" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <iframe
                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fcamandservices%2Fphotos%2Fa.107698641950776%2F107717528615554%2F%3Ftype%3D3%26av%3D107692418618065%26eav%3DAfZrxvtItrSMZW-aN7TwCE47Cu93BfkurC-RNbO1FMZ-O3mSaE3RhPBTW9Ho54bPGbk&show_text=false&width=500"
                                        width="500" height="281" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="box table-responsive">
                                    <iframe
                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fcamandservices%2Fphotos%2Fa.107698641950776%2F107714991949141%2F%3Ftype%3D3%26av%3D107692418618065%26eav%3DAfYeEy3Ucreugp36firM9uO-Jhi8WJPha1ATs1Rcriydhus3rMOCNGQogbHCyYX7zAs&show_text=false&width=500"
                                        width="500" height="281" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
                        </div>
                        <!--./other -->
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.manuals -->


@endsection

@section('script')
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62cad181a12f7c001a58e62a&product=sticky-share-buttons' async='async'></script>
@stop
