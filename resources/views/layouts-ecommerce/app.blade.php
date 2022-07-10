<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en-US"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9 ie-lt10 no-js" lang="en-US"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en-US" dir="ltr">
<!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HB Mobile|เฮียบอยโมบาย - ติดตั้ง,จำหน่าย,ซ่อมโทรศัพท์,แม็คบุ๊ค,โน้ตบุ๊ค </title>
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('/assets/dist/images/favicon/icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ URL::asset('/assets/dist/images/favicon/icon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ URL::asset('/assets/dist/images/favicon/icon-16x16.png') }}">
    <meta name="theme-color" content="#9ed4d6">

    <!-- Load Fonts -->
    <link rel="stylesheet" type="text/css" media="all"
        href="https://fonts.googleapis.com/css?family=Inconsolata:300,400,500,700|Unica+One:300,400,500,700">
    <!-- All theme style -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ URL::asset('/assets/dist/css/app.css') }}">
    <!-- Sweet Alert-->
    <link href="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ URL::asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    

    
    @yield('css')
</head>

<body>
    @include('layouts-ecommerce.header')

    @yield('content')

    @include('layouts-ecommerce.footer')

   <!-- Messenger ปลั๊กอินแชท Code -->
   <div id="fb-root"></div>

   <!-- Your ปลั๊กอินแชท code -->
   <div id="fb-customer-chat" class="fb-customerchat">
   </div>

   

</body>
@yield('script')
<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "292740724668103");
    chatbox.setAttribute("attribution", "biz_inbox");
  </script>

  <!-- Your SDK code -->
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v14.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

</html>
