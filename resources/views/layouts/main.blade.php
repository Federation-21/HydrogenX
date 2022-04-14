<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-screen dark:bg-deepdark font-nunito">
<head>

    <!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title : config('app.name', 'Codebumble Inc.') }}</title>
    <meta name="keywords" content="{{ isset($keywords) ? $keywords : config('app.name', '') }}">
    <meta name="theme-color" content="rgb(79, 70, 229)">

    <!-- Primary Meta Tags -->
	<meta name="title" content="{{ isset($title) ? $title : config('app.name', 'Codebumble Inc.') }}">
	<meta name="description" content="{{ isset($description) ? $description : config('app.name', '') }}">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ url()->current() }}">
	<meta property="og:title" content="{{ isset($title) ? $title : config('app.name', 'Codebumble Inc.') }}">
	<meta property="og:description" content="{{ isset($description) ? $description : config('app.name', '') }}">
	<meta property="og:image" content="{{ asset('assets/images/meta/meta.jpg') }}">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="{{ url()->current() }}">
	<meta property="twitter:title" content="{{ isset($title) ? $title : config('app.name', 'Codebumble Inc.') }}">
	<meta property="twitter:description" content="{{ isset($description) ? $description : config('app.name', '') }}">
	<meta property="twitter:image" content="{{ asset('assets/images/meta/meta.jpg') }}">
    <link rel="canonical" href="{{url()->current()}}"/>

	<link rel="shortcut icon" href="" type="image/x-icon" id="icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="{{ asset('css/libs/fontawesome.css') }}" rel="stylesheet">
	<!-- tailwind -->
	<link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
	<!-- style -->
	<link rel="stylesheet" href="{{ asset('css'.'/'.$page_style.'.css') }}">
</head>

<body class="overflow-x-hidden">
    <x-navbar/>

    @yield('content')

    <x-footer/>

    @if(isset($page_script))
        <!-- splide.JS -->
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"></script>
    @endif
	<!-- Commonjs -->
	<script src="{{ asset('js/main.js') }}"></script>

    @if(isset($page_script))
        <!-- script -->
	    <script src="{{ asset('js/'.$page_script.'.js') }}"></script>
    @endif

</body>
</html>
