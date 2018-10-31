<?php
require( "../config.php" );
session_start();
//header("Content-type:application/json");
//$course_code=$_POST['course'];
//$course_code = "CO-BSS";
$sql = "select * from courses";
//$sql ="select * from courses ";
$result = mysqli_query( $conn, $sql );
//$response=array();

// $_SESSION["valID"];
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>IT - academy</title>
	<link rel="icon" href="../images/icon.png" type="image/png">
  <link rel="stylesheet" href="../css/bootstrap.css">
	<!--<link rel="stylesheet" href="css/custom.css">-->
	<link rel="stylesheet" href="../css/framework.css">
	<link rel="stylesheet" href="../css/solid.css">
	<link rel="stylesheet" href="../css/fontawesome.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

  <script src="../js/bootstrap.js"></script>
	<script src="get.js"></script>
	<script src="submit.js"></script>
<link rel="stylesheet" href="../css/animation.css">
<link rel="icon" href="../images/icon.png" type="image/png">
	<style>
		.multi {
  display: none;
}
		/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}
		/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
		.btn.active {
  background-color: #666;
  color: white;
}
	
	</style>


</head>

<body class="container">
	<!-- Card deck -->
	<!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
  </div>

	<div class="multi">
		<button class="active btn el" id="all">Show All</button>
<button class="btn el" id="Comptia">comptia</button>
<button class="btn el" id="Microsoft">microsoft</button>


<div id="parent" class="row">
				<!-- Card -->

	<!-- Card -->
	<?php
	while ( $row = mysqli_fetch_array( $result ) ) {
	//array_push($response,array("subject_code"=>$row[0],"subject_name"=>fixrn($row[1]),"Exam_no"=>$row[2],"cc"=>$row[3]));
	
	

		echo '<div class="card '.$row[2].' mb-4 col-sm-4">

			<!--Card image-->
			<div class="view overlay">
				<img class="card-img-top" src="../course/'.$row[0].'.png" alt="Card image cap">
				<a href="#!">
					<div class="mask rgba-white-slight"></div>
				</a>
			</div>

			<!--Card content-->
			<div class="card-body">

				<!--Title-->
				<h4 class="card-title">'.$row[1].'</h4>
				<!--Text-->
				<p class="card-text">'.$row[3].'.</p>
				<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
				<button onclick="nextPrev(1)" type="button" id="1" class="btn btn-light-blue btn-md hello" value="'.$row[0].'">Select</button>

			</div>

		</div>';
		}
//echo json_encode($response);
mysqli_close( $conn );
   ?>
    
	</div>
		</div>
	<div class="multi">
	<form id='form' method="post" action="test.php">
	<div id="forTable"></div>
		<input type="submit" id="submit" class="btn btn-success" value="submit">
	
				  <input type="button" id="prevBtn" class="btn btn-dark" value="Previous" onclick="nextPrev(-1)">
		  <input type="button" id="nextBtn" class="btn btn-success" value="Next" onclick="nextPrev(1)">
		<br>
		<br>
		<div id='message'></div>
		<input type=hidden id="course_code" name="course_code">
		</form>
	<!-- Card deck -->
</div>

	
	<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("multi");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "none";
	   document.getElementById("nextBtn").style.display = "none";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("multi");
  // Exit the function if any field in the current tab is invalid:
  //if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;

  showTab(currentTab);
}



function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
	
	<script type="text/javascript">
	var $btns = $('.el').click(function() {
  if (this.id == 'all') {
    $('#parent > div').fadeIn(450);
  } else {
    var $el = $('.' + this.id).fadeIn(450);
    $('#parent > div').not($el).hide();
  }
  $btns.removeClass('active');
  $(this).addClass('active');
})
	</script>
</body>
</html>