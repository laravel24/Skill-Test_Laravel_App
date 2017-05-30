@include('header')
	<div class="allList">
	<h2 class="text-center">ALL Skill Test List</h2>
		<div class="list">
			<table class="table">
				<tr>
					<th style="width:10%; ">ID</th>
					<th style="width:40%;">Skill Test Name</th>
					<th style="width:15%;">Full Marks</th>
					<th style="width:15%;">Total Time</th>
					<th style="width:20%;">Get a Chance</th>
				</tr>
				@php
                  $i =0 
				@endphp
				@foreach($allSkillTests as $allSkillTest)
				<tr>
					<td style="width:10%;">{{++$i}}</td>
					<td style="width:40%;">{{$allSkillTest->skillTestName}}</td>
					<td style="width:15%;">{{$allSkillTest->Marks}}</td>
					<td style="width:15%;">{{$allSkillTest->time}} min</td>
				<td style="width:20%;"><a href="{{URL::to('user/'.$id.'/test/'.$allSkillTest->id)}}" class="btn btn-warning">Start</a></td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>
</body>
</html>