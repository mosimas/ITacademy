$(document).ready(function(){
  $("#myBtn").click(function(){
    //disable the submit button
    $(this).attr('disabled','true');$(this).css('cursor','progress');$(this).html('processing');
    $.ajax({
      url: 'subject.php',
      success: function(data,status)
      {
        createTableByForLoop(data);
       // createTableByJqueryEach(data);
        //enable the submit button
        $('#myBtn').css('cursor','pointer');$('#myBtn').html('Submit');$('#myBtn').removeAttr('disabled');
      },
      async:   true,
      dataType: 'json'
    }); 
  });
});
 
function createTableByForLoop(data)
{
  var eTable="<table id='table' class='table table-hover thead-light table-striped table-bordered table-mc-red'><thead><tr><th>tick</th><th>Subject code</th><th>Subject Name</th><th>Exam</th><th>Course code</th></tr></thead><tbody>"
  for(var i=0; i<data.length;i++)
  {
    eTable += "<tr>";
	eTable += "<td><input type='checkbox' name='vehicle' value='"+data[i]['subject_code']+"'></td>";
    eTable += "<td>"+data[i]['subject_code']+"</td>";
	eTable += "<td>"+data[i]['subject_name']+"</td>";
    eTable += "<td>"+data[i]['Exam_no']+"</td>";
    eTable += "<td>"+data[i]['cc']+"</td>";
    eTable += "</tr>";
  }
  eTable +="</tbody></table>";
  $('#forTable').html(eTable);
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