jQuery(document).ready(function(){

var agernam ;


  jQuery(".queslabel").click(function(){
  	  var attrname = jQuery(this).prev().val();
  	  agernam = jQuery(".skilltestno").val();
  	  ekhonernam = agernam + attrname+"|" ;
  	  jQuery(".skilltestno").val(ekhonernam);
  });

  jQuery(".getvalue").click(function(){
     var newvalue = jQuery(".skilltestno").val();
      jQuery(".setvalue").text(newvalue);
  });


});

