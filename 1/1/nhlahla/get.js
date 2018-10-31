$(document).ready(function(){
	
	

    //disable the submit button
	  var course = $(this).val();
    //alert(course);
   // $(this).attr('disabled','true');$(this).css('cursor','progress');$(this).html('processing');
    $.ajax({
      url: 'controller.php?function=allContact&ID=E001',
      success: function(data,status)
      {
		  console.log(data);
        createTableByForLoop(data,course);
      },
      async:   true,
      dataType: 'json'
    }); 
  
});
 
function createTableByForLoop(data,course)
{
  var eTable="<table id='table' class='table table-hover thead-light table-striped table-bordered table-mc-red'><thead><tr><th>Name</th><th>Surname</th></tr></thead><tbody>"
  for(var i=0; i<data.length;i++)
  {
    eTable += "<tr>";
    eTable += "<td><a runat='server' id='myButton' href='javascript:void(0);' onclick='myFunction("+"'"+data[i]['Name']+"'"+");'> "+data[i]['Name']+"</a></td>";
	eTable += "<td>"+data[i]['Surname']+"</td>";
    eTable += "</tr>";
  }
  eTable +="</tbody></table>";
  $('#forTable').html(eTable);
	 $("#course_code").val(course);
}