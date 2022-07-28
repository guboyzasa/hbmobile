<!-- ========== Left Sidebar Start ========== -->
{{-- <link rel="stylesheet" href="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.css"> --}}
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu"> 
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title " key="t-menu">@lang('translation.Menu')</li>
                @if (Auth::user()->is_super_admin == 1)
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class='bx bxs-dashboard' ></i>
                        <span key="t-dashboards"> Dashboard </span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->is_super_admin == 1)
                <li class="{{ Route::is('admin.product.*') ? 'mm-active' : '' }}">
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-layer"></i>
                        <span key="t-ecommerce">@lang('translation.Ecommerce')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.product.index') }}" key="t-products" class="{{ Route::is('admin.product.*') ? 'active' : '' }}"><i class='bx bx-package'></i> สินค้า </a></li>
                            <li><a href="{{ route('admin.product-cat.index') }}" key="t-products-cat"><i class='bx bx-receipt'></i> หมวดหมู่สินค้า </a></li>
                            <li><a href="{{ route('admin.product-brand.index') }}" key="t-product-band"><i class='bx bxs-receipt' ></i> แบรนด์สินค้า </a></li>
                        </li>
                    </ul>
                </li>
                @endif

                <li>
                    <a href="{{ route('admin.order.index') }}" class="waves-effect">
                        
                        <i class='bx bx-cart-alt' ></i>
                        <span key="t-order"> จัดการออเดอร์ </span><span class="badge rounded-pill bg-info float-end" id="count_order"> </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.customer.index') }}" class="waves-effect">
                        <i class='bx bx-user-plus'></i>
                        <span key="t-customer"> จัดการลูกค้า </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.warranty.index') }}" class="waves-effect">
                        <i class="ti ti-checklist"></i>
                        <span key="t-warranty"> ลงทะเบียนรับประกัน </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.repair.index') }}" class="waves-effect">
                        <i class="bx bx-wrench"></i>
                        <span key="t-repair"> ลงทะเบียนงานซ่อม </span>
                    </a>
                </li>

                @if (Auth::user()->is_super_admin == 1)
                
                <li>
                    <a href="{{ route('admin.onsite.index') }}" class="waves-effect">
                        <i class="ti ti-axe"></i>
                        <span key="t-agent"> ลงทะเบียนงานติดตั้ง </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.agent.index') }}" class="waves-effect">
                        <i class="ti ti-users"></i>
                        <span key="t-agent"> ตัวแทนจำหน่าย </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.payment.index') }}" class="waves-effect">
                        <i class='bx bxs-bank'></i>
                        <span key="t-agent"> ช่องทางชำระเงิน </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.report.index') }}" class="waves-effect">
                        <i class='bx bx-file'></i>
                        <span key="t-agent"> Report </span>
                    </a>
                </li>
                <li>
                    <li class="">
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-cog"></i>
                            <span key="t-setting">ตั้งค่า</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            {{-- <li>
                                <a href="#" class="waves-effect">
                                    <i class='bx bxs-user-detail'></i>
                                    <span key="t-agent"> ข้อมูลธุรกิจ </span>
                                </a>
                            </li> --}}
                            <li> 
                                <a class="dropdown-item d-block" href="#" data-bs-toggle="modal" data-bs-target=".change-detail"><i class='bx bxs-user-detail'></i> ข้อมูลธุรกิจ</a>
                                </li>
                            
                           <li> 
                            <a class="dropdown-item d-block" href="#" data-bs-toggle="modal" data-bs-target=".change-passwords"><i class='bx bxs-edit'></i> เปลี่ยนรหัสผ่าน</a>
                            </li>
                        </ul>
                    </li>
                </li>
                
                @endif
                <li>
                    <a href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="waves-effect">
                        <i class="ti ti-logout"></i>
                        <span key="t-agent"> ออกจากระบบ </span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
            <br>
            <br>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

<!--  Change-Password example -->
<div class="modal fade change-passwords" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">เปลี่ยนรหัสผ่าน</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" id="change-passwords">
                    @csrf
                    <input type="hidden" value="{{ Auth::user() ? Auth::user()->id : '' }}" id="data_id">
                           
                    <div class="mb-3">
                        <label for="newpassword">รหัสผ่านใหม่</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            autocomplete="new_password" placeholder="Enter รหัสผ่านใหม่">
                        <div class="text-danger" id="passwordError" data-ajax-feedback="password"></div>
                    </div>

                    <div class="mb-3">
                        <label for="userpassword">ยืนยันรหัสผ่าน</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            autocomplete="new_password" placeholder="Enter รหัสผ่านยืนยันใหม่">
                        <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                    </div>

                    <div class="mt-3 d-grid">
                        <button class="btn btn-primary waves-effect waves-light UpdatePassword" data-id="{{ Auth::user() ? Auth::user()->id : '' }}"
                            type="submit" style="border-radius: 10px">ยืนยันรหัสผ่าน</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--  Change-Detail example -->
<div class="modal fade change-detail" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">แก้ไขข้อมูลธุรกิจ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" id="change-detail">
                    @csrf
                    <input type="hidden" value="{{ Auth::user() ? Auth::user()->id : '' }}" id="data_id">       
                    <div class="mb-3">
                        <label for="newname">ชื่อธุรกิจ</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            autocomplete="new_password" placeholder="กรอกชื่อธุรกิจ">
                        <div class="text-danger" id="passwordError" data-ajax-feedback="password"></div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="userpassword">ที่อยู่ 1</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    autocomplete="new_password" placeholder="กรอกที่อยู่ 1">
                                <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                            </div>

                            <div class="col-6">
                                <label for="userpassword">ที่อยู่ 2</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    autocomplete="new_password" placeholder="กรอกที่อยู่ 2">
                                <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="userpassword">เบอร์โทร</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    autocomplete="new_password" placeholder="กรอกเบอร์โทร">
                                <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                            </div>
                            <div class="col-6">
                                <label for="userpassword">Email</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    autocomplete="new_password" placeholder="กรอกอีเมล">
                                <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="userpassword">Facebook</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    autocomplete="new_password" placeholder="กรอกชื่อเฟซบุ๊ก">
                                <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                            </div>
                            <div class="col-6">
                                <label for="userpassword">Facebook Link</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    autocomplete="new_password" placeholder="กรอกลิ้งเฟซบุ๊ก">
                                <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="userpassword">Line</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    autocomplete="new_password" placeholder="กรอกชื่อไลน์">
                                <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                            </div>
                            <div class="col-6">
                                <label for="userpassword">Line Link</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    autocomplete="new_password" placeholder="กรอกลิ้งไลน์">
                                <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="userpassword">Instagram</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    autocomplete="new_password" placeholder="กรอกชื่ออินสตาแกรม">
                                <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                            </div>
                            <div class="col-6">
                                <label for="userpassword">Instagram Link</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    autocomplete="new_password" placeholder="กรอกลิ้งอินสตาแกรม">
                                <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="userpassword">Youtube</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    autocomplete="new_password" placeholder="กรอกชื่อช่อง">
                                <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                            </div>
                            <div class="col-6">
                                <label for="userpassword">Youtube Link</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    autocomplete="new_password" placeholder="กรอกลิ้งช่อง">
                                <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="userpassword">Twitter</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    autocomplete="new_password" placeholder="กรอกชื่อทวิตเตอร์">
                                <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                            </div>
                            <div class="col-6">
                                <label for="userpassword">Twitter Link</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    autocomplete="new_password" placeholder="กรอกลิ้งทวิตเตอร์">
                                <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="userpassword">Google Map 1</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    autocomplete="new_password" placeholder="กรอกลิ้งที่อยู่ 1">
                                <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                            </div>
                            <div class="col-6">
                                <label for="userpassword">Google Map 2</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    autocomplete="new_password" placeholder="กรอกลิ้งที่อยู่ 2">
                                <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 d-grid">
                        <button class="btn btn-primary waves-effect waves-light UpdatePassword" data-id="{{ Auth::user() ? Auth::user()->id : '' }}"
                            type="submit" style="border-radius: 10px">ยืนยันแก้ไข</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
