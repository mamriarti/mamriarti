<!DOCTYPE html>
<html lang="en">
<head>

	@include('partials._titli_and_metatag')
	@include('partials._favicons')
	<link rel="stylesheet" href="/css/all.css">


	<link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
	<script src="/js/respond.min.js"></script>
	<![endif]-->

	<script type="text/javascript" src="/js/modernizr.min.js"></script>

</head>
<body data-spy="scroll" data-target="#main-nav" data-offset="400">

@include('partials._main_nav')
@include('partials._header')
@include('partials._services')
		@include('flash::message')
	    @yield('content')




    <script src="/js/all.js"></script>

	<script>
		//		$('div.alert').not('.alert-important').delay(3000).slideUp(300);
		$('#flash-overlay-modal').modal('toggle');
	</script>
	<div class="footer">

		@yield('footer')
	</div>
</body>
</html>