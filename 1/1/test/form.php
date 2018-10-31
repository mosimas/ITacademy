<?php
require "config.php";
session_start();

if ( isset( $_POST['Submit'] ) ) {
 header("Location:maint.php");	
	$Name = $_POST['name'];	
	$Surname = $_POST['Surname'];
	$DOB = $_POST['DOB'];
	$Gender = $_POST['Gender'];	
	$Ethnic_Group = $_POST['Ethnic_Group'];
	$IdOrPassport = $_POST['valID'];
	$_SESSION["valID"] = $IdOrPassport;
	$Email = $_POST['email'];
	$PhoneNo = $_POST['phone_number'];
	$AddressLine1 = $_POST['address'];
	$AddressLine2 = $_POST['line'];
	$City = $_POST['city'];
	$ZipCode = $_POST['zip_code'];
	$PaymentMethod = $_POST['rdPaymethod'];
	$Country = $_POST['Country'];
	$FullAddress = $AddressLine1." , ".$AddressLine2;

	 // Check connection
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
}

$sql = "SELECT ID_no FROM personal";
	
$result = $conn->query( $sql );
//$_SESSION['id']=$IdOrPassport;

if ( $result->num_rows < 1 ){
	
			$sql = "INSERT INTO personal
				(ID_no
				  ,Fullnames
				  ,Surname
				  ,DOB
				  ,PhoneNo
				  ,email
				  ,gender
				  ,residential_address
				  ,city
				  ,Country
				  ,Ethnic_Group
				  ,Zip_code
				  ,Pay_Method)
				 VALUES
					   ('$IdOrPassport'
					   ,'$Name'
					   ,'$Surname'
					   ,'$DOB'
					   ,'$PhoneNo'
					   ,'$Email'
					   ,'$Gender'
					   ,'$FullAddress'
					   ,'$City'
					   ,'$Country'
					   ,'$Ethnic_Group'
					   ,'$ZipCode'
					   ,'$PaymentMethod')
				 ";	
}	
			
if ( $result->num_rows > 0 ) {
	// output data of each row
	while ( $row = $result->fetch_assoc() ) {
		$rowdata =  $row[ "ID_no" ];
		if($rowdata == $IdOrPassport){break;}
	}
	
		if($rowdata != $IdOrPassport){
			
			$sql = "INSERT INTO personal
				(ID_no
				  ,Fullnames
				  ,Surname
				  ,DOB
				  ,PhoneNo
				  ,email
				  ,gender
				  ,residential_address
				  ,city
				  ,Country
				  ,Ethnic_Group
				  ,Zip_code
				  ,Pay_Method)
				 VALUES
					   ('$IdOrPassport'
					   ,'$Name'
					   ,'$Surname'
					   ,'$DOB'
					   ,'$PhoneNo'
					   ,'$Email'
					   ,'$Gender'
					   ,'$FullAddress'
					   ,'$City'
					   ,'$Country'
					   ,'$Ethnic_Group'
					   ,'$ZipCode'
					   ,'$PaymentMethod')
				 ";
			}	
	
	
} else {
	echo "0 results";
}

            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }	

$conn->close();


 header("Location:maint.php");
//exit(header("Location:maint.php"));

}
?>
<!DOCTYPE html>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="id.js"></script>
<head>
<title>Education Admission Form Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Education Admission Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<link rel="stylesheet" href="../css/font-awesome.css">
<!-- Font-Awesome-Icons-CSS -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Acme" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
<!-- //web font -->
</head>

<body>
<!-- main -->
<div class="main-agileits"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
  &nbsp;&nbsp;&nbsp;&nbsp;
   <img src="../../images/IKWorx IT Academy.png" width="150" alt="logo" align="middle">
  <h1>Education Admission Form </h1>
  <div class="register-form">
    <form action="" method="post">
      <div class="fields-grid">
      <div class="styled-input"> <span class="fa fa-user" aria-hidden="true"></span>
        <input type="text" placeholder="Full Name(s)" name="name" required="">
      </div>
      <div class="styled-input"> <span class="fa fa-user" aria-hidden="true"></span>
        <input type="text" placeholder="Surname" name="Surname" required="">
      </div>
      <div class="styled-input"> <span class="fa fa-calendar" aria-hidden="true"></span>
        <input id="datepicker" placeholder="Birth Date" name="DOB" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
						    required="">
      </div>
      <div class="styled-input agile-styled-input-top"> <span class="fa fa-venus" aria-hidden="true"></span>
        <select class="category2" name="Gender" id="gender" onBlur="onblurfunction1(this)" required>
          <option value=""  style="display:none;">Gender</option>
          <option value="Female">Female</option>
          <option value="Male">Male</option>
          <option value="Other">Other</option>
        </select>
      </div>
     <!-- <div class="styled-input agile-styled-input-top"> <span class="fa fa-flag" aria-hidden="true"></span>
        <select id="citizen" class="category2" name="citizen" onchange="CheckCitizen(this);"  onBlur="onblurfunction4(this)" required>
          <option value="" style="display:none;">RSA Citizen</option>
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      </div> -->
      <div id="countries" class="styled-input agile-styled-input-top"> <span class="fa fa-flag" aria-hidden="true"></span>
        <select class="category2" name="Country"  onBlur="onblurfunction5(this)" required>
          <option value="" style="display:none;">Country Of Origin</option>
          <option value="South Africa">South Africa</option>
          <option value="Albania">Albania</option>
          <option value="">Algeria</option>
          <option value="Algeria">Andorra</option>
          <option value="Angola">Angola</option>
          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
          <option value="Argentina">Argentina</option>
          <option value="Armenia">Armenia</option>
          <option value="Australia">Australia</option>
          <option value="Austria">Austria</option>
          <option value="Azerbaijan">Azerbaijan</option>
          <option value="Bahamas">Bahamas</option>
          <option value="Bahrain">Bahrain</option>
          <option value="Bangladesh">Bangladesh</option>
          <option value="Barbados">Barbados</option>
          <option value="Belarus">Belarus</option>
          <option value="Belgium">Belgium</option>
          <option value="Belize">Belize</option>
          <option value="Benin">Benin</option>
          <option value="Bhutan">Bhutan</option>
          <option value="Bolivia">Bolivia</option>
          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
          <option value="Botswana">Botswana</option>
          <option value="Brazil">Brazil</option>
          <option value="Brunei">Brunei</option>
          <option value="Bulgaria">Bulgaria</option>
          <option value="">Burkina Faso</option>
          <option value="">Burundi</option>
          <option value="">Cameroon</option>
          <option value="">Central African Republic</option>
          <option value="">Cuba</option>
          <option value="">Other</option>
          <option value="">Bangladesh</option>
          <option value="">Barbados</option>
          <option value="">Belarus</option>
          <option value="">Belgium</option>
          <option value="">Belize</option>
          <option value="">Benin</option>
          <option value="">Bhutan</option>
          <option value="">Bolivia</option>
          <option value="">Bosnia and Herzegovina</option>
          <option value="">Botswana</option>
          <option value="">Brazil</option>
          <option value="">Brunei</option>
          <option value="">Bulgaria</option>
          <option value="">Burkina Faso</option>
          <option value="">Burundi</option>
          <option value="">Cameroon</option>
          <option value="">Central African Republic</option>
          <option value="">Cuba</option>
          <option value="">Ethiopia</option>
          <option value="">Ghana</option>
          <option value="">Ivory Coast</option>
          <option value="">Kenya</option>
          <option value="">Lesotho</option>
          <option value="">Libya</option>
          <option value="">Mozambique</option>
          <option value="">Nigeria</option>
          <option value="">Republic of the Congo</option>
          <option value="">São Tomé and Príncipe</option>
          <option value="">Senegal</option>
          <option value="">Somalia</option>
          <option value="">South Sudan</option>
          <option value="">Other</option>
        </select>
      </div>
      <div class="styled-input agile-styled-input-top"> <span class="fa fa-flag" aria-hidden="true"></span>
        <select class="category2" name="Ethnic_Group" id="ethnic" onBlur="onblurfunction2(this)" required>
          <option value="" style="display:none;">Ethnic Group</option>
          <option value="African">African</option>
          <option value="White">White</option>
          <option value="Coloured">Coloured</option>
          <option value="Indian">Indian</option>
        </select>
      </div>
      <div class="styled-input agile-styled-input-top"> <span class="fa fa-flag" aria-hidden="true"></span>
        <select class="category2" onchange="yesnoCheck(this);" id="selID" name="selID" onBlur="onblurfunction3(this)"   required>
          <option value="" style="display:none;">Type of identification</option>
          <option id="yesCheck" value="pass">Passport Number:</option>
          <option id="NoCheck" value="ID">ID Number:</option>
        </select>
        <div id="ifYes" style="display: none;">
          <div class="styled-input"> <span class="fa fa-user" aria-hidden="true"></span>
            <input type="text" id="valID" placeholder="" name="valID" required="">
          </div>
        </div>
      </div>
      <script>
    
</script>
      <div class="styled-input"> <span class="fa fa-envelope-o" aria-hidden="true"></span>
        <input type="email" placeholder="Your E-mail" name="email" required="">
      </div>
      <div class="styled-input"> <span class="fa fa-phone" aria-hidden="true"></span>
        <input type="text" placeholder="Phone Number" name="phone_number" required="">
      </div>
      <div class="styled-input-2">
        <label class="header">Your Address</label>
        <div class="styled-input">
          <input type="text" name="address" placeholder="Address" title="Please enter your Address" required="">
        </div>
        <div class="styled-input">
          <input type="text" name="line" placeholder="Line" title="Please enter your Line" required="">
        </div>
        <div class="styled-input">
          <input type="text" name="city" placeholder="City" title="Please enter your City" required="">
        </div>
        <div class="styled-input">
          <input type="text" name="zip_code" placeholder="Zip Code" title="Please enter your Zip code" required="">
        </div>
      </div>
      <div class="styled-input clearfix">

        <div class= "clearfix"> </div>
        <input type="submit" name="Submit" value="Submit">
      </div>
		                       <div class="carousel-inner">
<div class="item overlay active">
                     <img src="../../images/pulse.png" width="800" height="100" alt="" >
                     <a class="btn" href="http://pulseliving.co.za/">Click <b>here!!</b></a>
       
		</div>
        </div>
    </form>
  </div>
</div>

<style>
.overlay .btn {
    position: absolute;
  top: 50px;
      left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: #CCCC00;
 
    font-size: 20px;
    padding: 12px 18px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
		
}

.overlay .btn:hover {
    background-color:#13E4C7 ;
}
</style>

</div>

<!-- //main --> 
<!-- copyright -->
<div class="w3copyright-agile">
  <h2>© 2018 All rights reserved | Designed by <a href="http://www.mykonki.co.za/" target="_blank">Mykonki Designs and Creations (PTY) LTD</a> </h2>
</div>
<!-- //copyright --> 

<!-- js --> 
 

<!-- Calendar -->
<link rel="stylesheet" href="../css/jquery-ui.css" />
<script src="../js/jquery-ui.js"></script> 
<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script> 
<!-- //Calendar -->
    <script type="text/javascript">
        function onblurfunction1(str){
    if(str = "gender") {
		document.getElementById("gender").options[0].style.display = "block"; 
		document.getElementById("gender").options[0].disabled = "true";
        }
	}
	
	function onblurfunction2(str){
	    if(str = "ethnic") {
		document.getElementById("ethnic").options[0].style.display = "block"; 
		document.getElementById("ethnic").options[0].disabled = "true";
        }		
	}
		
	function onblurfunction3(str){
		    if(str = "selID") {
		document.getElementById("selID").options[0].style.display = "block"; 
		document.getElementById("selID").options[0].disabled = "true";
        }
	}
		
	function onblurfunction4(str){
    if(str = "citizen") {
		document.getElementById("citizen").options[0].style.display = "block"; 
		document.getElementById("citizen").options[0].disabled = "true";
        }		
	}
		
	function onblurfunction5(str){
    if(str = "countries") {
		document.getElementById("countries").options[0].style.display = "block"; 
		document.getElementById("countries").options[0].disabled = "true";
        }        
     }
		
    </script>
<script>
function myFunction() {
	var x = document.getElementById("citizen").value;
    if(x=="yes")
    {
    document.getElementById("countries").required=false;  
    }
}
</script>	
	
</div>
</body>
</html>