@include('header')
	<div class="userform">
	<h2 class="text-center">User Profile Setting</h2>
     
     @if(count($errors))
	<div class="alert alert-danger">
		<ul class="text-center errorclass">
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif
		<div class="form">
			<form action="{{URL::to('user/'.$id.'/profile')}}" method="POST" enctype="multipart/form-data">

			{{csrf_field()}}
			<input type="hidden" name="userid" value="{{$id}}">
				<div class="form-group" enctype="multipart/form-data">
					<label for="name">Your Name<span style="color: red;">*</span></label>
					<input type="text" name="name" class="form-control" id="name" value="{{$userinfo->name}}">
				</div>
				<div class="form-group">
					<label for="email">Your Email<span style="color: red;">*</span></label>
					<input type="email" name="email" class="form-control" id="email" value="{{$userinfo->email}}">
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
					     <label for="nationality">Your Nationality<span style="color: red;">*</span></label>
					     <input type="text" name="nationality" class="form-control" id="nationality" value="{{$userinfo->nationality}}">
				        </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
					      <label for="phone">Your Phone<span style="color: red;">*</span></label>
					      <input type="text" name="phone" class="form-control" id="phone" value="{{$userinfo->phone}}">
				        </div>
					</div>
				</div>

				<div class="form-group">
					<label for="institution">Your Institution<span style="color: red;">*</span></label>
					<input type="text" name="institution" class="form-control" id="institution" value="{{$userinfo->institution}}">
				</div>
                
                <div class="row">
					<div class="col-md-6">
						<div class="form-group">
					     <label for="Avatar">Your Avatar<span style="color: red;">*</span></label>
					     <input type="file" name="Avatar" class="form-control" id="Avatar">
				        </div>
					</div>
					<div class="col-md-6"></div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
					     <label for="password">Your Password<span style="color: red;">*</span></label>
					     <input type="password" name="password" class="form-control" id="password">
				        </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
					      <label for="phone">Confirm Password<span style="color: red;">*</span></label>
					      <input type="password" name="confirm-password" class="form-control" id="conpassword">
				        </div>
					</div>
				</div>

				<input type="submit" name="update" class="btn btn-primary" value="Update">
				
			</form>
		</div>
	</div>
</div>

</body>
</html>