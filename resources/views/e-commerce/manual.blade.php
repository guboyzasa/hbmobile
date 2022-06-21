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
                    <li class="breadcrumb-item active">ขั้นตอนการสั่งซื้อสินค้าและส่งเครื่องซ่อม</li>
                </ol>
            </div>
        </div><!-- /.container -->
    </div><!-- /.page-head -->

    <section class="section manuals pb-0">
        <div class="container">
            <div class="row">
                <div class="media-left media-middle">
                    <i class='bx bx-list-check' style='font-size:32px'></i>
                </div>
                <div class="media-body">
                    <h3 class="media-heading">ขั้นตอนการสั่งซื้อสินค้า</h3>
                </div>
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
                                <p>ทำการอัพโหลด slip และ รอระบบดำเนินการ </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="manual media">
                            <div class="media-left media-middle">
                                <i class='bx bxs-truck'></i>
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

    <section class="section manuals pb-0">
        <div class="container">
            <div class="row">
                <div class="media-left media-middle">
                    <i class='bx bx-wrench' style='font-size:32px'></i>
                </div>
                <div class="media-body">
                    <h3 class="media-heading">ขั้นตอนการส่งเครื่องซ่อม</h3>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="manual media">
                            <div class="media-left media-middle">
                                <i class='bx bx-message-edit'></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">1. แจ้งอาการเสีย</h3>
                                <p>โดยแจ้งรายละเอียดมาทาง :</p> <a
                                    href="https://liff.line.me/1645278921-kWRPP32q?accountId=hbmobilekk&openerPlatform=native&openerKey=talkroom%3Aheader#mst_challenge=DviURfP2GW9z0o6eoP1xMF0s8C1qRokmKwj55BTIzms"
                                    style="color:red;"> chat (คลิก)</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="manual media">
                            <div class="media-left media-middle">
                                <i class='bx bx bxs-truck'></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">2. ข้อมูลการจัดส่ง</h3>
                                <p>เฮียบอยโมบายเซอร์วิส 1 หมู่ 6 บ.บ่อทอง ต.ขามป้อม อ.พระยืน จ.ขอนแก่น 40320</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="manual media">
                            <div class="media-left media-middle">
                                <i class='bx bx-file'></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">3. แนบใบส่งเครื่อง</h3>
                                <p>โดยแนบใบส่งเครื่องหรือสลิปมาทางแชท ตามข้อ 1</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="manual media">
                            <div class="media-left media-middle">
                                <i class='bx bx-check-double'></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">4. ทางร้านได้รับเครื่อง</h3>
                                <p>จะทำการแจ้งการรับเครื่องไปทางช่องทางแชทของลูกค้า </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="manual media">
                            <div class="media-left media-middle">
                                <i class='bx bxs-user-check'></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">5. สมัครสมาชิก</h3>
                                <p>เพื่อดูสถานะซ่อมและรายละเอียดการซ่อม </p>
                                <p style="color:red;"> *ใช้เบอร์ที่ติดต่อได้ สมัครเท่านั้น</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="manual media">
                            <div class="media-left media-middle">
                                <i class='bx bx-check-circle'></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">6. ซ่อมเสร็จ</h3>
                                <p>ทางร้านจะทำการแจ้งค่าใช้จ่ายทางแชท และขอที่อยู่เพื่อส่งเครื่องกลับ </p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->

            </div><!-- /.container -->
    </section><!-- /.manuals -->

@endsection

@section('script')

@stop
