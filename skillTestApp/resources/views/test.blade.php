 @include('header')

	<div class="skilQuestion" id="skilQuestion">
        <h2 class="text-center">Skill Test Is Running</h2>
	 <div class="testform">
		<form action="{{URL::to('user/'.$userid.'/profile')}}" method="POST" id="skillForm">
                @php
                  $i =0 
				@endphp
				{{csrf_field()}}
		    @foreach($questions as $question)

			<div class="form-group question">
			<div class="row">
				<div class="col-md-8">
					<p class="testqus"><span>{{++$i}}.</span><span>{{$question->question}}</span></p>
				<ul class="list">
					<li>
					    <input type="radio" name="name-{{$question->id}}-ans" class="ques" id="{{$question->id}}-ans1" value="{{$question->option1}}">
						<label for="{{$question->id}}-ans1" class="queslabel">{{$question->option1}}</label>
					</li>
					<li>
					    <input type="radio" name="name-{{$question->id}}-ans" class="ques" id="{{$question->id}}-ans2" value="{{$question->option2}}">
						<label for="{{$question->id}}-ans2" class="queslabel">{{$question->option2}}</label>
					</li>
					<li>
					    <input type="radio" name="name-{{$question->id}}-ans" class="ques" id="{{$question->id}}-ans3" value="{{$question->option3}}">
						<label for="{{$question->id}}-ans3" class="queslabel">{{$question->option3}}</label>
					</li>
					<li>
					    <input type="radio" name="name-{{$question->id}}-ans" class="ques" id="{{$question->id}}-ans4" value="{{$question->option4}}">
						<label for="{{$question->id}}-ans4" class="queslabel">{{$question->option4}}</label>
					</li>
				</ul>
				</div>
				<div class="col-md-4">
				   <div class="timer">
				 	  <p><span class="text-danger">You Only Have 5 secnds to answer</span></p>
				   </div>
				</div>
			</div>
				
			</div>
          @endforeach
        <input type="text" name="skilltestno" class="skilltestno" style="display: none;" value="">
         <input type="text" name="skillIdNo" style="display: none;" value="{{$id}}">
       <!--  <a href="#" class="getvalue">click</a>
        <p class="setvalue"></p> -->
			<div class="finish-text" id="finishText">
    	      <h3 class="text-center">Your skill test just have finished! <input type="submit" name="submitskill" value="Submit" class="btn btn-primary"></h3>
            </div>
		</form>
	</div>
	</div>
    

</div>


<script src="{{ asset('js/custom.js') }}"></script>


</body>
</html>