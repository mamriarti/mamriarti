<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>

	<div class="container">
		@if(Session::has('message'))
			<div class="alert alert-success">
				{{ session::get('message') }}
			</div>
		@endif
	@yield('content')


	<div class="footer">

	@yield('footer')
	</div>
	</div>

</body>
</html>