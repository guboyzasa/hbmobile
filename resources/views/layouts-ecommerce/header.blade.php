<link rel="stylesheet" href="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.css">
<div class="nav-container fixed-top nav-sticky">

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ URL::asset('/assets/dist/images/logo.png') }}" alt="">
            </a>

            <ul class="nav navbar-icons ml-auto order-lg-2">
                <li class="nav-item mr-3 shopping-cart">
                    <a href="#!" class="li-icon" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        <i class='bx bx-cart' ></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-center border-0 shadow">
                        <ul class="dropdown-wrap position-relative" data-slimscroll="true">
                        </ul>
                        <ul class="position-relative">
                            <li class="dropdown-footer p-0 text-center text-uppercase font-weight-bold bg-gray">
                                <form action="{{ route('cart-post') }}" id="cart-form">
                                    <input type="hidden" id="cart_post" name="cart_post">
                                    <a href="#" class="p-3 d-block" onclick="cart()"><i class='bx bxs-cart-download text-primary'></i>
                                        ดูตะกร้า</a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>

                @auth
                    <li class="nav-item profile">
                        <a href="#!" class="li-icon" data-toggle="dropdown" aria-haspopup="false"
                            aria-expanded="false"><i class='bx bx-user'></i></a>
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow">
                            <ul class="position-relative" data-slimscroll="true">
                                <li class="d-flex align-middle">
                                    <a href="{{ route('profile-account') }}">โปรไฟล์ <i
                                            class='ti ti-user-circle align-middle text-primary'></i></a>
                                </li>
                                <li class="d-flex align-middle">
                                    <a href="{{ route('ecom.change-password') }}">แก้ไขรหัสผ่าน <i
                                            class='bx bx-wrench align-middle me-1 text-primary'></i></a>
                                </li>
                                <li class="d-flex align-middle">
                                    <a href="#"
                                        onclick=" event.preventDefault();document.getElementById('logout-form').submit();">ออกจากระบบ
                                        <i class='bx bx-log-out align-middle text-danger'></i></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login-register') }}" class="li-icon" id=""><i
                                class='bx bx-user'></i></a>
                    </li>
                @endauth
            </ul>

            <button class="navbar-toggler ml-0 ml-sm-3 order-lg-3" type="button" data-toggle="collapse"
                data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbar" class="collapse navbar-collapse mr-auto">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown ">
                        <a class="nav-link" href="{{ route('index') }}" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            หน้าแรก
                        </a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('products') }}" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            สินค้าของเรา
                        </a>
                    </li>
                    {{-- <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="{{ route('products') }}" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            สินค้าของเรา
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('products') }}">สินค้าทั้งหมด</a></li>
                            <li><a class="nav-link" href="/products?product_filter_category=8">จอมือถือ</a></li>
                            <li><a class="nav-link" href="/products?product_filter_category=2">แบตเตอรี่มือถือ</a></li>
                            <li><a class="nav-link" href="/products?product_filter_category=3">สายชาร์จมือถือ</a></li>
                            <li><a class="nav-link" href="/products?product_filter_category=10">ปริ้นเตอร์</a></li>
                            <li><a class="nav-link" href="/products?product_filter_category=11">พาวเวอร์แบงค์</a></li>
                            <li><a class="nav-link" href="/products?product_filter_category=4">อุปกรณ์อื่นๆ</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('manual') }}" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            แนะนำ
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('repair-example') }}" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            ตัวอย่างงานซ่อม
                        </a>
                    </li>

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            เพิ่มเติม
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('agent') }}">จุดบริการ</a>
                            </li>
                            <li><a class="nav-link" href="{{ route('option') }}">เงื่อนไขและข้อแนะนำผลิตภัณฑ์</a></li> 
                             <li><a class="nav-link" href="{{ route('produce') }}">กระบวนการผลิตและการรับรอง</a> 
                            </li>
                        </ul>
                    </li> --}}

                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">เกี่ยวกับเรา</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">ติดต่อเรา</a></li>
                    {{-- @if (Auth::user() && Auth::user()->is_agent == 0 && Auth::user()->is_admin == 0)
                        <li class="nav-item"><a class="nav-link text-success"
                                href="{{ route('profile-account') }}">ยืนยันการชำระเงิน</a></li>
                    @endif --}}
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container -->
    </nav>
</div><!-- /.nav-container -->

<script>
    $(document).ready(function() {
        var products = sessionStorage.getItem("products");
        var array_products = JSON.parse("[" + products + "]") // ตัด [ ] ออก 
        if (array_products[0] != null) {
            array_products[0].forEach(function(row) {
                $('.dropdown-wrap').prepend(`
                <li class="d-flex" id="product${row.id}">
                    <a href="product.html">
                        <img src="{{ URL::asset('get-content/${row.img}') }}"
                        class="img-fluid product-img" alt="">
                    </a>
                    <div class="ml-3 product-details">
                        <p class="product-title font-weight-bold text-uppercase mb-2">
                            <a href="product.html">${row.name}</a>
                        </p>
                        <p class="product-price text-muted">
                            <ins>
                                <span class="amount">ราคา ${row.price} บาท</span>
                                <i class="bx bx-trash text-secondary" onclick="removeCart(${row.id})"></i>
                            </ins>
                        </p>
                    </div>
                </li>
            `)
            })
        }
    })

    function removeCart(id) {
        let get_session_id = sessionStorage.getItem("p_id"); // get sessionStorage ออกมาใส่ตัวแปล
        let get_session_products = sessionStorage.getItem("products"); // get sessionStorage ออกมาใส่ตัวแปล
        let p_ids = JSON.parse("[" + get_session_id + "]") // ตัด [ ] ออก 
        let products = JSON.parse("[" + get_session_products + "]") // ตัด [ ] ออก 
        $('#product' + id).remove();
        index = p_ids[0].indexOf(id);
        if (index > -1) {
            p_ids[0].splice(index, 1);
            products[0].splice(index, 1);
            sessionStorage.setItem("p_id", JSON.stringify(p_ids[0])); //เอา array ใส่ใน sessionStorage
            sessionStorage.setItem("products", JSON.stringify(products[0])); //เอา array ใส่ใน sessionStorage
        }
        // console.log($(this))
        // $('.product'+id).find('.bx').addClass('d-none')
        $('.product' + id).prop("disabled", false);
        $('.product' + id).find('.text-cart').text("เพิ่มลงสินค้า");
        $('.product' + id).removeClass('added');
        $('.product' + id).parent().attr('data-original-title', 'เพิ่มลงตะกร้า');
        $('.product' + id).find('#icon' + id).addClass('d-none')
    }

    function cart() {
        // sessionStorage.setItem("p_id",JSON.stringify(array_id));
        // var p_id = sessionStorage.getItem("p_id");
        // $('#cart_post').val(JSON.stringify(p_id))
        // console.log(p_id)
        var get_session = sessionStorage.getItem("p_id"); // get sessionStorage ออกมาใส่ตัวแปล
        let p_id = JSON.parse("[" + get_session + "]") // ตัด [ ] ออก 
        $('#cart_post').val(p_id) // string ใส่ input
        $('#cart-form').submit();
    }
</script>
