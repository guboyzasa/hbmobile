<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title " key="t-menu">@lang('translation.Menu')</li>

                <li>
                    <a href="{{ route('agent-member.index') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards"> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('agent-member.customer.index') }}" class="waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-customer"> จัดการลูกค้า </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('agent-member.warranty.index') }}" class="waves-effect">
                        <i class="bx bx-task"></i>
                        <span key="t-warranty"> ลงทะเบียนรับประกัน </span>
                    </a>
                </li>




             

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
