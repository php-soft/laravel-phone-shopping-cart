<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thế Giới Di Động</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">
		<div class="page-header">
			@yield('header')
		</div>
		@if(Session::has('success'))
			<div class="alert alert-success">
				{{Session::get('success')}}
			</div>
		@endif
		<div class="content">
			@yield('content')
		</div>
		<div class="footer">
			<hr>
			<p>&copy; Copyright 2017</p>
		</div>
	</div>
</body>
</html>