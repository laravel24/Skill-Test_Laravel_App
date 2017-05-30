@include('header')

	<div class="profilepic">
		<div class="row">
			<div class="col-md-4">
				<div class="proimage">
					<img src="{{URL::to('/')}}/images/{{$profile->avatar}}" class="img-circle" width="300">
				</div>
				<div class="personinfo">
					<ul>
						<li><span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span><span>{{$profile->name}}</span></li>
						<li><span class="icon"><i class="fa fa-flag" aria-hidden="true"></i></span><span>{{$profile->nationality}}</span></li>
						<li><span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span><span>{{$profile->email}}</span></li>
						<li><span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span><span>{{$profile->phone}}</span></li>
						<li><span class="icon"><i class="fa fa-star" aria-hidden="true"></i></span><span>Position: {{$profile->label}} Label</span></li>
					</ul>
				</div>
			</div>
			<div class="col-md-8">
				<div class="examList">
					<table class="table table-bordered">
						<tr>
						    <th style="width: 7%;">ID</th>
							<th style="width:43%; ">Exam Name</th>
							<th style="width:15%; ">Get Marks</th>
							<th style="width:15% ;">Total Marks</th>
							<th style="width:20%;">Stutus</th>
						</tr>
						@php  
						$i =0
						@endphp
						@foreach($tests as $test)
						<tr>
						    <td style="width: 7%;">{{++$i}}</td>
							<td style="width:43%; ">{{$test->skillTestName}}</td>
							<td style="width:15%;">{{$test->GetMarks}}</td>
							<td style="width:15%;">{{$test->Marks}}</td>
							@if($test->Stutus == 'PASSED')
							<td style="width:20%;" class="text-success" style="font-weight: bold;">{{$test->Stutus}}</td>
							@elseif($test->Stutus == 'FAILED')
							<td style="width:20%;" class="text-danger" style="font-weight: bold;">{{$test->Stutus}}</td>
							@endif
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>