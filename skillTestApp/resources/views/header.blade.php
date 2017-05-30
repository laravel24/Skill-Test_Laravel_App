<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Metamorphous" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/setting.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/3f41b57f4d.js"></script>
	<script src="{{ asset('js/jQuek.js') }}"></script>
	
</head>
<body>

<div class="container">
	<div class="main-menu">

		<ul class="list-inline text-center">
		    <li><a href="{{URL::to('/')}}/user/{{$id}}/profile">Profile</a></li>
			<li><a href="{{URL::to('/')}}/user/{{$id}}/testlist">Exam List</a></li>
			<li><a href="{{URL::to('/')}}/user/{{$id}}/setting">Settings</a></li>
			<li><a href="{{URL::to('logout')}}">Logout</a></li>

			@if(Auth::check())
			<li><a href="{{URL::to('logout')}}">{{Auth::user()->name}}</a></li>
			@endif
		</ul>

	</div>