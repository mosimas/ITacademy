function yesnoCheck(that) {
        if (that.value == "ID") {
            //alert("check");
            document.getElementById("ifYes").style.display = "block";
			document.getElementById("valID").placeholder = "Enter ID NO";
        } 
	     else if (that.value == "pass") {
            //alert("check");
            document.getElementById("ifYes").style.display = "block";
			 document.getElementById("valID").placeholder = "Enter passport No";
        }else {
        
            document.getElementById("ifYes").style.display = "none";
        }
    }

function CheckCitizen(that) {
        if (that.value == "yes") {
            //alert("check");
            document.getElementById("countries").style.display = "none";
			
        } 
	     else if(that.value=="no") {
            //alert("check");
            document.getElementById("countries").style.display = "block";
       
    }else
		{
			document.getElementById("countries").style.display = "none";
		}
}



$(document).ready(function(){
 $("#SelID").change(function(event){
	   
	  event.preventDefault();
   
  });

});