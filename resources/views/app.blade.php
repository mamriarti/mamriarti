<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/all.css">



</head>
<body>

	<div class="container">
		@include('flash::message')
	@yield('content')



	</div>


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