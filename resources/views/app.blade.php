<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>

	<div class="container">
		@include('flash::message')
	@yield('content')


	<div class="footer">

	@yield('footer')
	</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script>
//		$('div.alert').not('.alert-important').delay(3000).slideUp(300);
		$('#flash-overlay-modal').modal('toggle');
	</script>
</body>
</html>