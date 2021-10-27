/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * add .sticky class if user scroll down.
 */
function stick() {
    let $navSticky = $('.nav-sticky');
    if (!$navSticky.length) return;

    let stickyNavTop = $navSticky.offset().top;
    let scrollTop = $(window).scrollTop();

    if (stickyNavTop > 70) {
        $navSticky.addClass('sticky');
    } else {
        $navSticky.removeClass('sticky');
    }
}

function alignVertical() {
    $('.fullscreen').height($(window).height());
    $('.align-vertical').each(function () {
        let that = $(this);
        let height = that.height();
        let parentHeight = that.parent().height();
        let padAmount = (parentHeight / 2) - (height / 2);

        that.css('padding-top', padAmount);
    });
}

function heightCenter() {
    let height = $(window).height();
    let padAmount = (height / 2.5);
    $('.col-height-center').css('padding-top', padAmount);
}

function initializeMap(selector) {

    let latitude = $(selector).data('lat'),
        longitude = $(selector).data('long'),
        title = $(selector).data('title'),
        subtitle = $(selector).data('subtitle');

    let mapOptions = {
        zoom: 14,
        scrollwheel: false,
        panControl: false,
        zoomControl: true,
        scaleControl: false,
        disableDefaultUI: true,
        center: new google.maps.LatLng(latitude, longitude)
    };

    let map = new google.maps.Map(document.querySelector(selector), mapOptions);
    map.set('styles', [{
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
            "color": "#e9e9e9"
        }, {
            "lightness": 17
        }]
    }, {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [{
            "color": "#f5f5f5"
        }, {
            "lightness": 20
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{
            "color": "$whitefff"
        }, {
            "lightness": 17
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{
            "color": "$whitefff"
        }, {
            "lightness": 29
        }, {
            "weight": 0.2
        }]
    }, {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [{
            "color": "$whitefff"
        }, {
            "lightness": 18
        }]
    }, {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [{
            "color": "$whitefff"
        }, {
            "lightness": 16
        }]
    }, {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{
            "color": "#f5f5f5"
        }, {
            "lightness": 21
        }]
    }, {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{
            "color": "#dedede"
        }, {
            "lightness": 21
        }]
    }, {
        "elementType": "labels.text.stroke",
        "stylers": [{
            "visibility": "on"
        }, {
            "color": "$whitefff"
        }, {
            "lightness": 16
        }]
    }, {
        "elementType": "labels.text.fill",
        "stylers": [{
            "saturation": 36
        }, {
            "color": "#333333"
        }, {
            "lightness": 40
        }]
    }, {
        "elementType": "labels.icon",
        "stylers": [{
            "visibility": "off"
        }]
    }, {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [{
            "color": "#f2f2f2"
        }, {
            "lightness": 19
        }]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [{
            "color": "#fefefe"
        }, {
            "lightness": 20
        }]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [{
            "color": "#fefefe"
        }, {
            "lightness": 17
        }, {
            "weight": 1.2
        }]
    }]);


    let image = '/assets/dist/images/map-marker.png';
    let myLatLng = new google.maps.LatLng(latitude, longitude);
    let marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image
    });

    infowindow = new google.maps.InfoWindow({
        content: "<b>" + title + "</b><br/>" + subtitle
    });

    marker.addListener('click', function () {
        infowindow.open(map, marker);
    });
}

jQuery(document).ready(function () {

    alignVertical();
    heightCenter();
    stick();

    $('.shopping-cart .dropdown-menu a').click(function () {
        window.location = $(this).attr('href');
    });

    $('.shopping-cart .dropdown-menu').click(function () {
        return false;
    });

    $('[data-toggle="tooltip"]').tooltip();

    let $logos = $("#logos");
    if ($logos.length) {
        $logos.owlCarousel({
            items: 7,
            loop: false,
            nav: false,
            margin: 40,
            dots: false,
            rtl: isRTL,
            responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 7
                }
            }
        });
    }

    $(".product-images-carousel").owlCarousel({
        items: 3,
        loop: false,
        nav: false,
        margin: 20,
        dots: false,
        rtl: isRTL,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    $("#related-products").owlCarousel({
        items: 3,
        loop: false,
        nav: true,
        margin: 20,
        dots: false,
        navText: [
            `<i class='bx bx-${isRTL ? 'right' : 'left'}-arrow-alt h2 mb-0'></i>`,
            `<i class='bx bx-${isRTL ? 'left' : 'right'}-arrow-alt h2 mb-0'></i>`
        ],
        rtl: isRTL,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    // Run slim scroll.
    $('[data-slimscroll]').slimScroll({
        size: '5px'
    });

    // Rating Stars.
    let $ratingStars = $('.rating-stars');
    if ($ratingStars.length) {
        let rating = $ratingStars.data('rating');
        let readOnly = ($ratingStars.attr('readonly'));
        $ratingStars.starrr({
            readOnly: readOnly,
            rating: rating,
            fullClass: 'bx bxs-star',
            emptyClass: 'bx bx-star'
        });

        $ratingStars.on('starrr:change', function (e, value) {
            $(e.target).attr('data-rating', value); // For change stars rating attr
            $('input[name="rating"]').val(value);
        });
    }

    // Ren Fancybox
    let $fancybox = $('[data-fancybox="images"]');
    if ($fancybox.length) {
        // Clone defaults
        let imgOpts = $.extend(true, {}, $.fancybox.defaults, {
            caption: function (instance, item) {
                return $(this).next('figcaption').html();
            }
        });

        $fancybox.fancybox(imgOpts);
    }

    /**
     * Flying to cart effect
     */
    $('.add-to-cart:not(.added)').on('click', function () {
        if ($(this).hasClass('added')) return;

        let $cart = $('.shopping-cart'),
            product = $(this).parents('.product'),
            imgToDrag = product.find("img").eq(0);

        if (imgToDrag) {
            let imgClone = imgToDrag.clone()
                .offset({
                    top: imgToDrag.offset().top + 150,
                    left: imgToDrag.offset().left + 150
                })
                .css({
                    'opacity': '.9',
                    'position': 'absolute',
                    'height': '50px',
                    'width': '50px',
                    'z-index': '999999',
                    'border-radius': '50%'
                })
                .appendTo($('body'))
                .animate({
                    'top': $cart.offset().top + 12,
                    'left': $cart.offset().left + 12,
                    'width': 75,
                    'height': 75
                }, 1000, 'easeInOutExpo');

            setTimeout(function () {
                $cart.effect("shake", {
                    times: 2
                }, 400, addToCart(product));
            }, 1500);

            imgClone.animate({
                'width': 0,
                'height': 0
            }, function () {
                $(this).detach()
            });
        }

        $(this).addClass('added');
        $(this).parent().attr('data-original-title', 'Added');
    });

    /**
     * Add product to cart and change badge count
     */
    function addToCart(product) {
        let $cart = $('.shopping-cart');
        let productId = product.attr('product-id');

        /*
        * 1- [Add product to 'Application' by AJAX]
        *  - Your AJAX code.
        */

        // 2- [Add product to shopping cart]
        let productTitle = product.find('.product-title').text();
        let productPrice = product.find('.product-price').html();
        let productLink = product.find('.view-details').attr('href');
        let productImg = product.find('.product-thumbnail img').attr('src');

        let toCart = `
            <li class="d-flex">
                <a href="${productLink}">
                  <img src="${productImg}" class="img-fluid product-img" alt="${productTitle}">
                </a>
                <div class="ml-3 product-details">
                  <p class="product-title font-weight-bold text-uppercase mb-2">
                    <a href="${productLink}">${productTitle}</a>
                  </p>
                  <p class="product-price text-muted">
                      ${productPrice}
                  </p>
                </div>
            </li>
        `;

        $cart.find('.dropdown-wrap').prepend(toCart);

        // 3- [Change badge count]
        let badge = $cart.find('.badge');
        badge.text(parseInt(badge.text()) + 1);
    }

    // Custom Quantity Input
    $('.quantity input[type="button"]').on('click', function () {
        let qty = $(this).parent().find('input.qty');
        let qtyVal = parseInt(qty.val());
        let min = qty.attr('min') ? parseInt(qty.attr('min')) : 1,
            max = qty.attr('max') ? parseInt(qty.attr('max')) : null,
            step = qty.attr('step') ? parseInt(qty.attr('step')) : 1;

        if ($(this).hasClass('plus') && (max == null || qtyVal < max)) {
            qty.val(qtyVal + step);
        } else if ($(this).hasClass('minus') && qtyVal > min) {
            qty.val(qtyVal - step);
        }
    });


    let $masonry = $('.masonry').imagesLoaded(function () {
        // init Isotope after all images have loaded
        $masonry.isotope({
            isInitLayout: true,
            isOriginLeft: !isRTL,
            isOriginTop: true,
            isResizeBound: true,
            isResizingContainer: true,
            layoutMode: 'masonry',
            itemSelector: '.product',
        });

        alignVertical();
        heightCenter();
    });

    // Products Filter
    $('.products-filter a').click(function (e) {
        e.preventDefault();

        let selector = $(this).attr('data-filter');
        $(".products-filter li").removeClass("active");
        $(this).parent().addClass("active");

        $masonry.isotope({filter: selector});
    });

    // Go to top
    $(".go-to-top").click(function (e) {
        e.preventDefault();
        $("html,body").animate({scrollTop: 0}, 350);
    });

    // Google maps
    if ($('#map').length) {
        google.maps.event.addDomListener(window, 'load', initializeMap('#map'));
    }

    // Enter in any string, and watch it type at the speed you've set.
    let $autoType = $('.autotype');
    if ($autoType.length) {
        $autoType.typed({
            strings: ['Hello', 'Merhaba', 'Ħello', 'Salü', 'Hallo', 'Halito', 'مرحبا', 'Hallå'],
            typeSpeed: 50,
            loop: true
        });
    }

    let $filterSlider = $('#filter-slider');
    if ($filterSlider.length) {
        let values = $filterSlider.data('values').split(",");
        let max = $filterSlider.data('max');
        let min = $filterSlider.data('min');

        $filterSlider.slider({
            isRTL: isRTL,
            min: min,
            max: max,
            orientation: 'horizontal',
            range: true,
            values: [values[0], values[1]],
            slide: function (event, ui) {
                $("#amount-slider > span").html(`$${ui.values[0]} — $${ui.values[1]}`);
                $("input#price").val(ui.values[0] + "," + ui.values[1]);
            }
        });
    }

    // Slide Toggle
    $('[data-slide-toggle]').on('click', function (e) {
        e.preventDefault();

        let $target = $($(this).data('slide-toggle'));
        let parent = $(this).attr('data-parent');
        if (parent) {
            $(this).parents(parent).find('[data-slide-toggle]').each(function (index, element) {
                $($(element).data('slide-toggle')).slideUp();
            });
        }

        $target.slideToggle();
    });

    // Custom checkbox and radio.
    $('.checkbox[data-slide-toggle], .radio[data-slide-toggle]').on('click', function (e) {
        let query = $(this).hasClass('checkbox') ? 'checkbox' : 'radio';
        let $input = $(this).parent().find('>input[type="' + query + '"]');

        if (query === 'radio') {
            $('[name="' + $input.attr('name') + '"]').attr('checked', false).prop('checked', false);
        }

        if (!$input.attr('checked')) {
            $input.attr('checked', true).prop('checked', true);
        } else {
            $input.attr('checked', false).prop('checked', false);
        }
    });

    // Swiper Silder
    new Swiper.default('.swiper-container', {
        // direction: 'vertical',
        loop: true,
        effect: 'slide', // Could be "slide", "fade", "cube", "coverflow" or "flip"
        parallax: true,
        autoplay: 3000,

        // And if we need scrollbar
        // scrollbar: '.swiper-scrollbar',

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
            clickable: true,
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    /**
     * List Select.
     */
    // Hover container select menu
    $('.list-select .inner-select').hover(
        function () {
            $(this).addClass('hover');
            $(this).children().eq(0).addClass('hover');
            $(this).find('ul').stop().slideToggle(100);

        }, function () {
            $(this).removeClass('hover');
            $(this).children().eq(0).removeClass('hover');
            $(this).find('ul').stop().slideToggle(100);
        }
    );

    // Click Select
    // $('.list-select ul a').on('click', function (e) {
    //     e.preventDefault();
    //
    //     // Select value and apply changes
    //     $(this).parents('ul').find('a').removeClass('active');
    //     $(this).addClass('active');
    //     let $lang = $(this).html();
    //     $(this).parents('.list-select').find('.selected').html($lang);
    // });

    // Open dropdown on hover.
    $('.navbar [data-toggle="dropdown"]:not(.li-icon)').hover(function (e) {
        e.preventDefault();

        if ($('.navbar-toggle').css('display') !== 'none') return;

        $(this).parents('.nav').find('.open').removeClass('open');
        $(this).parent().addClass('open');
    });

    // To get random number between custom number
    function randomIntFromInterval(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    // Instagram effect.
    let insta = $('.instagram ul>li').length;
    if (insta) {
        setInterval(function () {
            let random = randomIntFromInterval(1, insta);
            $('.instagram ul>li').removeClass('active');
            $('.instagram ul>li:eq(' + random + ')').addClass('active');
        }, 1000);
    }

});

$(window).scroll(function () {
    stick();

    // Go to top
    let $toTop = $('.go-to-top');
    $(this).scrollTop() > 300 ? $toTop.addClass('visible') : $toTop.removeClass('visible');
});

$(window).resize(function () {
    alignVertical();
    heightCenter();
});