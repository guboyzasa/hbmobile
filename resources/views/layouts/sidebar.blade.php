<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu"> 
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title " key="t-menu">@lang('translation.Menu')</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards"> Dashboard </span>
                    </a>
                </li>

                <li class="{{ Route::is('admin.product.*') ? 'mm-active' : '' }}">
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">@lang('translation.Ecommerce')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.product.index') }}" key="t-products" class="{{ Route::is('admin.product.*') ? 'active' : '' }}"> สินค้า </a></li>
                        @if (Auth::user()->is_super_admin == 1)
                            <li><a href="{{ route('admin.product-cat.index') }}" key="t-products-cat"> หมวดหมู่สินค้า </a></li>
                            <li><a href="{{ route('admin.product-brand.index') }}" key="t-product-band"> แบรนด์สินค้า </a></li>
                        @endif

                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('admin.order.index') }}" class="waves-effect">
                        <i class="bx bxs-layer"></i>
                        <span key="t-order"> จัดการออเดอร์ </span><span class="badge rounded-pill bg-info float-end" id="count_order"> </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.customer.index') }}" class="waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-customer"> จัดการลูกค้า </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.warranty.index') }}" class="waves-effect">
                        <i class="bx bx-task"></i>
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
                {{-- <li>
                    <a href="{{ route('admin.agent.index') }}" class="waves-effect">
                        <i class="bx bxs-store-alt"></i>
                        <span key="t-agent"> จัดการตัวแทนจำหน่าย </span>
                    </a>
                </li> --}}
                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
