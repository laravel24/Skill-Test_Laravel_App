<!DOCTYPE html>
<html>
<head>
	<title>Login From</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Metamorphous" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="{{asset('js/custom.js')}}"></script>
</head>
<body>


<div class="container main-body">


<div class="row">
	<div class="col-md-6">
		<div class="loginform">
	        <h2 class="text-center">Register Form</h2>
		    <div class="form">
		    @if(count($errors))
	         <div class="alert alert-danger">
		       <ul class="" style="list-style: none;">
			     @foreach($errors->all() as $error)
			     <li>{{$error}}</li>
			     @endforeach
		       </ul>
	         </div>
	        @endif
			   <form action="{{URL::to('setting')}}" method="POST">
			   {{csrf_field()}}
				  <div class="form-group">
					  <label for="name">Your Name</label>
					  <input type="text" name="name" id="name" class="form-control">
				  </div>
				  <div class="form-group">
					  <label for="email">Your Email</label>
					  <input type="email" name="email" id="email" class="form-control">
				  </div>
				  <div class="form-group">
					  <label for="nationality">Your Nationality</label>
					  <input type="text" name="nationality" id="nationality" class="form-control">
				  </div>
				  <div class="form-group">
					  <label for="phone">Your Phone</label>
					  <input type="text" name="phone" id="phone" class="form-control">
				  </div>
				  <div class="form-group">
					  <label for="university">Your University</label>
					  <input type="text" name="institution" id="university" class="form-control">
				  </div>
				  
					  <input type="hidden" name="label" value="0">
					  <input type="hidden" name="avatar" value="profile_img.png">
				  <div class="form-group">
					  <label for="password">Your Password</label>
					  <input type="password" name="password" id="password" class="form-control">
				  </div>
				  <div class="form-group">
					   <label for="conpassword">Confirm Password</label>
					   <input type="password" name="password_confirmation" id="conpassword" class="form-control">
				   </div>
				  
				 <input type="submit" name="login" class="btn btn-primary" value="LOGIN">
			</form>

		</div>
	</div>
	</div>

	<div class="col-md-6">
		 <div class="loginform">
	          <h2 class="text-center">Login Form</h2>
		      <div class="form">
		       @if(isset($erorrText) && !empty($erorrText))
	            <div class="alert alert-danger">
                  <p>{{$erorrText}}</p>
	            </div>
	           @endif
			      <form action="{{URL::to('login')}}" method="POST">
			      {{csrf_field()}}
				     <div class="form-group">
					    <label for="email">Your Email</label>
					    <input type="email" name="email" id="email" class="form-control">
				     </div>
				     <div class="form-group">
					    <label for="password">Your Password</label>
					    <input type="password" name="password" id="password" class="form-control">
				     </div>
				     
				     <p class="forgotpass">Not a member? <a href="#">Register Here</a></p>
				     <p class="forgotpass">Forgot Your Password? <a href="#">Click Here</a></p>
				   <input type="submit" name="login" class="btn btn-primary" value="LOGIN">
			     </form>
		     </div>
	     </div>
	 </div>
</div>
	
</div>

</body>
</html>