@include('header')


{{$allnames}}

@php

$i=0
@endphp

<br>
@for($i=0 ; $i<count($feildnames) ; $i++)
   {{$feildnames[$i]}}

@endfor

<br>

@foreach($questions as $question)
   {{$question->solution}}
@endforeach

<br>

{{"Value:".$counter}}