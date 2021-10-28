<footer class="footer">
    <div class="container">
        <div class="widgets ">
            <div class="row">
                <div class="col-lg-6 col-md-6 widget widget-about">
                    <h4 class="widget-title">{{ @$company->name }}</h4>
                    <p>
                        {{ @$company->address }}
                    </p>
                </div><!-- ./widget -->

                <div class="col-lg-6 col-md-6 widget widget-links">
                    <h4 class="widget-title">ติดต่อเรา</h4>
                    <div class="row">
                        <ul class="list-unstyled col-12 col-lg-12 align-middle">
                            <li><i class='bx bxs-phone bx-sm'></i> : <a href="#!" class="effect">{{ @$company->tel1 }} ,
                                    {{ @$company->tel2 }} , {{ @$company->tel3 }}</a></li>
                            <li><i class='bx bx-envelope bx-sm'></i> : <a href="#!"
                                    class="effect">{{ @$company->email }}</a></li>
                            <li><i class='bx bxl-facebook-circle bx-sm'></i> : <a href="{{ @$company->facebook_link }}"
                                    class="effect">{{ @$company->facebook }}</a></li>
                            <li><img src="{{ URL::asset('/assets/dist/images/line.png') }}" alt=""> : <a
                                    href="{{ @$company->line_link }}" class="effect">{{ @$company->line }}</a></li>
                            <li>
                                <i class='bx bxs-help-circle bx-sm'></i> : <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=188yanuk" class="effect">ต้องการความช่วยเหลือ</a>
                            </li>
                        </ul>
                    </div>
                </div><!-- ./widget -->
            </div><!-- /.row -->
        </div><!-- /.widgets -->
    </div><!-- /.container -->
    <div class="copyright text-center">
        <p>
            © Copyright 2021. All Rights Reserved.
            <br>
            Created by 
            <a href="https://www.facebook.com/guboyphoto/" class="effect">
                BOY BBQ
            </a> 
        </p>
    </div>
</footer><!-- /.footer -->

<!-- open/close -->
<div class="overlay overlay-simplegenie">
    <i class="overlay-close bx bx-x"></i>
    <div class="container">
        <div class="row text-center position-relative">
            <div class="col-lg-7 m-auto col-height-center search-form">
                <form action="#!" method="POST" class="inputs-bg" id="searchform">
                    <label>
                        <strong>Type a sentence or word you want to search for, And press Enter.</strong>
                        <input type="text" name="q" class="form-control" placeholder="Search..">
                    </label>
                </form>
            </div>
        </div>
    </div>
</div><!-- /.overlay -->

<!-- Go to top -->
<a href="#" class="go-to-top">
    <i class="bx bx-chevrons-down"></i>
</a>

<!-- All Theme Scripts -->
<script type="text/javascript" src="{{ URL::asset('/assets/dist/js/app.js') }}"></script>
<!-- Sweet Alerts js -->
<script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ URL::asset('/assets/js/pages/sweet-alerts.init.js') }}"></script>

<script>
$(document).ready(function() {
    var get_session_id = sessionStorage.getItem("p_id");
    var get_session_products = sessionStorage.getItem("products");
    if (get_session_id) {
        let p_ids = JSON.parse("[" + get_session_id + "]")
        let products = JSON.parse("[" + get_session_products + "]")
        let old_p_id = p_ids;
        let old_product = products;

        if (p_ids) {
            p_ids[0].forEach(function(row) {
                if ($("a").hasClass("product" + row)) {
                    $('.product' + row).addClass('added');
                    $('.product' + row).parent().attr('data-original-title', 'Added');
                }
            })
        }
    }
})

$('.add-to-cart').on('click', function() {
    let id = $(this).data('product-id')
    let name = $(this).data('name')
    let img = $(this).data('path-img')
    let price = $(this).data('price')

    var product = {
        'id': id,
        'name': name,
        'img': img,
        'price': price,
    }

    let get_session_id = sessionStorage.getItem("p_id");
    let get_session_products = sessionStorage.getItem("products");
    let old_p_ids = JSON.parse("[" + get_session_id + "]")
    let old_products = JSON.parse("[" + get_session_products + "]")
    let array_id = [];
    let products = [];
    
    // if (p_ids.length != null) {
    if (old_p_ids[0] != null && old_p_ids[0] != '') {
        // console.log(1)
        sessionStorage.clear();
        old_p_ids[0].push(id) //เอา id ใส่ array
        old_products[0].push(product) //เอา id ใส่ array
        sessionStorage.setItem("p_id", JSON.stringify(old_p_ids[0])); //เอา array ใส่ใน sessionStorage
        sessionStorage.setItem("products", JSON.stringify(old_products[0]));
    } else {
        if(id != null && product != null){
            // console.log(2)
            array_id.push(id) //เอา id ใส่ array
            sessionStorage.setItem("p_id", JSON.stringify(array_id)); //เอา array ใส่ใน sessionStorage
            products.push(product)
            sessionStorage.setItem("products", JSON.stringify(products));
        }
        
    }

    // sessionStorage.setItem("p_id", JSON.stringify(array_id)); //เอา array ใส่ใน sessionStorage
    // sessionStorage.setItem("p_id",array_id);

    // let get_session = sessionStorage.getItem("products");
    var storedArray = JSON.parse(sessionStorage.getItem("products"));
    // let session = JSON.parse("[" + get_session + "]")

    $('.dropdown-wrap').empty();
    if (storedArray != null) {
        storedArray.forEach(function(row) {
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

openLoading = () => {
    $('body').prepend(`
            <div class="loader-bg ">
                <div class="loader ">Loading...</div>
                <span class="loader-load"></span>
            </div>
        `);
    $("#loader").delay(10).fadeIn();
    $("#loader").addClass("loader");
}

closeLoading = () => {
    $("#loader").delay(10).fadeOut();
    $('.loader-bg').remove();
}
</script>