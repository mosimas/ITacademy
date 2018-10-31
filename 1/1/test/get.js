$(document).ready(function(){

  $("button").click(function(event){
	  event.preventDefault();
    //disable the submit button
	  var course = $(this).val();
	  
    //alert(course);
   // $(this).attr('disabled','true');$(this).css('cursor','progress');$(this).html('processing');
    $.ajax({
      url: '../subject.php?course='+course,
      success: function(data,status)
      {
		  //console.log(data);
        createTableByForLoop(data,course);
       // createTableByJqueryEach(data);
        //enable the submit button
       // $('#myBtn').css('cursor','pointer');$('#myBtn').html('Submit');$('#myBtn').removeAttr('disabled');
      },
      async:   true,
      dataType: 'json'
    }); 
  });
});
 
function createTableByForLoop(data,course)
{
  var eTable="<table id='table' class='table table-hover thead-light table-striped table-bordered table-mc-red'><thead><tr><th>tick</th><th>Subject code</th><th>Subject Name</th><th>Exam</th><th>Course code</th></tr></thead><tbody>"
  for(var i=0; i<data.length;i++)
  {
    eTable += "<tr>";
	eTable += "<td><input type='checkbox' class='check' name='course[]' value='"+data[i]['subject_code']+"'></td>";
    eTable += "<td>"+data[i]['subject_code']+"</td>";
	eTable += "<td>"+data[i]['subject_name']+"</td>";
    eTable += "<td>"+data[i]['Exam_no']+"</td>";
    eTable += "<td>"+data[i]['cc']+"</td>";
    eTable += "</tr>";
  }
  eTable +="</tbody></table>";
  $('#forTable').html(eTable);
	 $("#course_code").val(course);
		$('[type=checkbox]').click(function() {
	    getValueUsingClass();
	});
	getValueUsingClass();
}
 
	function getValueUsingClass(){
	/* declare an checkbox array */
	var chkArray = [];
	
	/* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
	$(".check:checked").each(function() {
		chkArray.push($(this).val());
	});
	
	/* we join the array separated by the comma */
	var selected;
	selected = chkArray.join(',') ;
	
	/* check if there is selected checkboxes, by default the length is 1 as it contains one single comma */
	if(selected.length > 0){
		$('#submit').removeAttr("disabled"); 
		//alert("You have selected " + selected);	
	}else{
		//alert("Please at least check one of the checkbox");
		$('#submit').attr('disabled', 'disabled');
	}
}
function createTableByJqueryEach(data)
{
 
 
  var eTable="<table><thead><tr><th colspan='3'>Created by Jquery each</th></tr><tr><th>Name</th><th>Title</th><th>Salary</th</tr></thead><tbody>"
  $.each(data,function(index, row){
    // eTable += "<tr>";
    // eTable += "<td>"+value['name']+"</td>";
    // eTable += "<td>"+value['title']+"</td>";
    // eTable += "<td>"+value['salary']+"</td>";
    // eTable += "</tr>";
 
    eTable += "<tr>";
    $.each(row,function(key,value){
      eTable += "<td>"+value+"</td>";
    });
    eTable += "</tr>";
  });
  eTable +="</tbody></table>";
  $('#eachTable').html(eTable);
}