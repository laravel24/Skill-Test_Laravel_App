var showindex = 0 ;

 showQuestion();
  timechnager = setInterval(showQuestion, 2000);

function showQuestion(){
   
   var question = document.getElementsByClassName("question") ;
   

   var i ;
   for(i=0 ; i<question.length ; i++){
	  question[i].style.display = "none" ;
   }
   showindex++;
   

   

   if(showindex == question.length+1){
   	  
   	  allquestion  = document.getElementById("skilQuestion");
   	  finishText   = document.getElementById("finishText");
   	  //allquestion.style.display = "none" ;
   	  finishText.style.display  = "block" ;
      clearInterval(timechnager) ;
   }
   
  question[showindex-1].style.display = "block" ;


}


function submitans(){
	document.getElementById("skillForm").submit() ;
	var value = document.getElementById("")
}


