<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">	
<title>@yield('title', $setting->meta_title)</title>
	<meta name="description" content="@yield('description', $setting->meta_description)">
    <meta name="keywords" content="@yield('keywords', $setting->meta_keywords)">
    <meta name="author" content="Company">
    <meta name="robots" content="index, follow">
	<!--<link rel="shortcut icon" href="{{ $setting->getFirstMediaUrl('favicon') }}" type="image/x-icon">-->
	<!--<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">-->
	<link rel="shortcut icon" href="https://srv1640-files.hstgr.io/d5a858cf8315b5d5/files/public_html/images/Fastvideosave_favicon1.png" type="image/x-icon">
	<link rel="icon" href="https://srv1640-files.hstgr.io/d5a858cf8315b5d5/files/public_html/images/Fastvideosave_favicon1.png" type="image/x-icon">
  <link rel="stylesheet" href="/resources/css/app.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

	<meta property="og:title" content="@yield('title', $setting->meta_title)">
    <meta property="og:description" content="@yield('description', $setting->meta_description)">
    <meta property="og:image" content="@yield('image', ($setting->getFirstMediaUrl('ogimage') ?? $setting->getFirstMediaUrl('logo')))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $setting->sitename }}">
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3371051243633561"
     crossorigin="anonymous"></script>
    <!--Google site verification -->
    <meta name="google-site-verification" content="Vu1FnigGDboNlIeIP7b5IlNcXtZa5Nu4sdOWW7iNJnY" />
    
    <!--Google analytics-->
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CT8789G4S4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CT8789G4S4');
</script>

	<!-- ** CSS Plugins Needed for the Project ** -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
	<!-- themefy-icon -->
	<link rel="stylesheet" href="{{ asset('plugins/themify-icons/themify-icons.css') }}">
	<!--Favicon-->
	<link rel="icon" href="{{ asset('images/Fastvideosave_favicon1.png') }}" type="image/x-icon">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<!-- Main Stylesheet -->
	<link href="{{ asset('assets/style.css') }}" rel="stylesheet" media="screen" />
</head>

<body>

    <div class="video-loader" style="display: none">
      <div class="container">
        <div class="row flex-column align-items-center justify-content-center">
          <img src="https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExd3h3dHB5Z2NxaXJ6bjY2M2Z2eDNsY2llcDhqMmN2YXJnOG0zZjVxZiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/PkoBC2GlkLJ5yFIWtf/giphy.gif" width="300" alt="" class="logo">
          <p class="text-center h3 pt-5">Almost there… don’t ghost us 👻</p>
          <!--<div class="loader pt-4">-->
          <!--  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><radialGradient id="a12" cx=".66" fx=".66" cy=".3125" fy=".3125" gradientTransform="scale(1.5)"><stop offset="0" stop-color="#E5ABF3"></stop><stop offset=".3" stop-color="#E5ABF3" stop-opacity=".9"></stop><stop offset=".6" stop-color="#E5ABF3" stop-opacity=".6"></stop><stop offset=".8" stop-color="#E5ABF3" stop-opacity=".3"></stop><stop offset="1" stop-color="#E5ABF3" stop-opacity="0"></stop></radialGradient><circle transform-origin="center" fill="none" stroke="url(#a12)" stroke-width="19" stroke-linecap="round" stroke-dasharray="200 1000" stroke-dashoffset="0" cx="100" cy="100" r="70"><animateTransform type="rotate" attributeName="transform" calcMode="spline" dur="2" values="360;0" keyTimes="0;1" keySplines="0 0 1 1" repeatCount="indefinite"></animateTransform></circle><circle transform-origin="center" fill="none" opacity=".2" stroke="#E5ABF3" stroke-width="19" stroke-linecap="round" cx="100" cy="100" r="70"></circle></svg>-->
          <!--</div>-->
        </div>
      </div>
    </div>

    @include('partial.header')

    @yield('content')

    @include('partial.footer')
    <!-- ** JS Plugins Needed for the Project ** -->
	<!-- jquiry -->
	<script src="{{ asset('plugins/jquery/jquery-1.12.4.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
	<!-- match-height JS -->
	<script src="{{ asset('plugins/match-height/jquery.matchHeight-min.js') }}"></script>
	<!-- Main Script -->
	<script src="{{ asset('assets/script.js') }}"></script>
</body>
</html>