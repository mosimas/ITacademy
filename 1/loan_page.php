<?php
ob_start();
session_start();
//include 'session.php';

?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$alert="";
if(isset($_POST['submit']))
{


$name=$_POST['first_name'];
$surname=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['contact_no'];
$course=$_POST['Select_Course'];
$Sponsor_Name=$_POST['Sponsor_Name'];
$Sponsor_LN=$_POST['Sponsor_LN'];
$country=$_POST['country'];

 $message= '<html>
<head>
<style>
* {
  box-sizing: border-box;
}

html.open, body.open {
  height: 100%;
  overflow: hidden;
}

html {
  padding: 40px;
  font-size: 62.5%;
}

body { 
  background-color: #a5a872;
  line-height: 1.6;
  -webkit-font-smoothing: antialiased;
  color: black;
  font-size: 1.6rem;
  
}

p {
  text-align: left;
  margin: 20px 0 60px;
}

main {
  background-color: #2C3845;
}

h1 {
  text-align: left;
  font-weight: 300;
}

table {
background-color: #2C3845;	
  display: block;
  color: #fff;
}

tr, td, tbody, tfoot {
  display: block;
}

thead {
  display: none;
}

tr {
  padding-bottom: 10px;
}

td {
  padding: 10px 10px 0;
  text-align: center;
}
td:before {
  content: attr(data-title);
  color: #7a91aa;
  text-transform: uppercase;
  font-size: 1.4rem;
  padding-right: 10px;
  display: block;
}

table {
	 
  width: 100%;
      border-style: solid;
    border-color: #107c61;
}

th {
  text-align: center;
  font-weight: 700;
}

thead th {
  background-color: #107c61;
  color: #fff;
  border: 1px solid #202932;
  text-align: center;
  font-weight: 700;
}

.button {
  line-height: 1;
  display: inline-block;
  font-size: 1.2rem;
  text-decoration: none;
  border-radius: 5px;
  color: #fff;
  padding: 8px;
  background-color: #4b908f;
}

.select {
  padding-bottom: 20px;
  border-bottom: 1px solid #28333f;
}
.select:before {
  display: none;
}

.detail {
  background-color: #BD2A4E;
  width: 100%;
  height: 100%;
  padding: 40px 0;
  position: fixed;
  top: 0;
  left: 0;
  overflow: auto;
  -moz-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
  -moz-transition: -moz-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  -webkit-transition: -webkit-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
}
.detail.open {
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -webkit-transform: translateX(0);
  transform: translateX(0);
}

.detail-container {
  margin: 0 auto;
  padding: 40px;
  max-width: 500px;
}

dl {
  margin: 0;
  padding: 0;
}

dt {
  font-size: 2.2rem;
  font-weight: 300;
}

dd {
  margin: 0 0 40px 0;
  font-size: 1.8rem;
  padding-bottom: 5px;
  border-bottom: 1px solid #ac2647;
  box-shadow: 0 1px 0 #c52c51;
}

.close {
  background: none;
  padding: 18px;
  color: #fff;
  font-weight: 300;
  border: 1px solid rgba(255, 255, 255, 0.4);
  border-radius: 4px;
  line-height: 1;
  font-size: 1.8rem;
  position: fixed;
  right: 40px;
  top: 20px;
  -moz-transition: border 0.3s linear;
  -o-transition: border 0.3s linear;
  -webkit-transition: border 0.3s linear;
  transition: border 0.3s linear;
}
.close:hover, .close:focus {
  background-color: #a82545;
  border: 1px solid #a82545;
}

@media (min-width: 460px) {
  td {
    text-align: left;
  }
  td:before {
    display: inline-block;
    text-align: right;
    width: 140px;
  }

  .select {
    padding-left: 160px;
  }
}
@media (min-width: 720px) {
  table {
    display: table;
  }

  tr {
    display: table-row;
  }

  td, th {
    display: table-cell;
  }

  tbody {
    display: table-row-group;
  }

  thead {
    display: table-header-group;
  }

  tfoot {
    display: table-footer-group;
  }

  td {
    border: 1px solid #28333f;
  }
  td:before {
    display: none;
  }

  td, th {
    padding: 10px;
  }

  tr:nth-child(2n+2) td {
    background-color: #242e39;
  }

  tfoot th {
    display: table-cell;
  }

  .select {
    padding: 10px;
  }
}

</style>
</head>

<body>
<h1>
  Welcome to Fundi Loan Application
</h1>
<p>
Dear Applicant,<br><br>
  Your Application for the loan has been received, you will be informed about the progress of your application in due time.
</p>
<main>
  <table>
    <thead>
      <tr>
      <tr>
        <th colspan="3" >
          LOAN APPLICANT DETAILS
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          First Name
        </td>
        <td>
           '.$name.'
        </td>

      </tr>
      <tr>
        <td>
          Last Name
        </td>
        <td>
          '.$surname.'
        </td>

      </tr>
      <tr>
        <td>
          Cell Number
        </td>
        <td>
          '.$phone.'
        </td>

      </tr>
      <tr>
        <td>
          Email
        </td>
        <td>
          '.$email.'
        </td>
      </tr>
      
      <tr>
        <td>
          Sponsor Name
        </td>
        <td>
          '.$Sponsor_Name.'
        </td>
      </tr>   
      
      <tr>
        <td>
          Sponsor Last Name
        </td>
        <td>
          '.$Sponsor_LN.'
        </td>

      </tr> 
      <tr>
        <td>
          Course:
        </td>
        <td>
          '.$course.'
        </td>

      </tr>  
      <tr>
        <td>
          Country
        </td>
        <td>
          '.$country.'
        </td>

      </tr>                      
    </tbody>
  </table>
</main>

</body>
</html>';
//echo $message;
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


//Load composer's autoloader
require '../vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'ashur.aserv.co.za';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'Calendar@ikworx.co.za';                 // SMTP username
    $mail->Password = 'Password@2018';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('mosimamillicent@gmail.com');
  	// $mail->addAddress($email, $name);     // Add a recipient
    $mail->addAddress('info@ikworxitacademy.com');               // Name is optional
    //$mail->addReplyTo($email, $name);
    $mail->addCC($email, $name);
    //$mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('docs/Advanced Electronic Documents and Records Management#3.pdf');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Student Application Loan';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    $alert= '<div class="alert alert-success">Email Successfully</div>';
} catch (Exception $e) {
    $alert ='Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
}
}


?>


<!DOCTYPE html>


<!--
Author: mosima
Author URL: Ikworx Academy
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html><head>
<title>Ikworx Academy | Home :: IT academy</title>
<!--mobile apps-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scrutiny Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free Webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
<!--mobile apps-->
<!--Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- //Custom Theme files -->
<!-- js -->
<!-- //js -->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Stint+Ultra+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- start-smoth-scrolling-->
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
<style>
.overlay .btn {
    position: absolute;
    top: 75%;
    left: 80%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: #555;
    color: ;
    font-size: 26px;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
		
}

.overlay .btn:hover {
    background-color: #CCCC00;
}
</style>
</head>

<!--banner-->
<div  id="home" class="banner">
<div class="banner-info">
<div class="banner-top">
<div class="container">

  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
       
      <ul class="social-icons">

                       <a href="https://en-gb.facebook.com/pages/biz/computer_training/IKWorx-It-Academy-212248142757564/">  <img src="loan/images/facebook-2.png" height="35"  width="35 "alt="">
                        <a href="https://www.linkedin.com/company/ikworx-it-academy/"><img src="loan/images/linkedin_circle_black-512.png" height="35"  width="35 "alt="">
                       <a href="mailto:info@ikworxitacademy.com?Subject=Enquire about the course"> <img src="loan/images/download1.png" height="33"  width="33 "alt="">	
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="../web/images/IKWorx IT Academy.png" width="150" height="120"alt="logo" align="middle"/>
    
   </ul>
    </ul>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
   <div class="col-md-6 banner-top-right wow slideInDown animated" data-wow-delay=".5s">
						<p><span class="glyphicon glyphicon-earphone"></span> +27 010 446 0477 </p>
					</div>
					<div class="clearfix"> </div>
  
 </div>
 </a>
 </div>
<img src="loan/images/IKWORX-IT-ACADEMY.png" alt="logo" width ="1420" align="middle">

<body style="margin-top: 0; padding: 0em; background-color: #EDED4D;">

<!--navigation-->
<div class="top-nav wow">
  <div class="container">
    <div class="navbar-header logo">
    
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu</button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div class="menu">
        <ul class="nav navbar">
          <li class="menu-item menu-item-current"><a href="index.php" >Home</a></li>
          <li class="menu-item"><a href="index.php#about">Who Are We?</a></li>
          <li class="menu-item"><a href="index.php#services">Services</a></li>
          <li class="menu-item"><a href="index.php#contact">Contact</a></li>
          <li class="menu-item"><a href="index.php#contact">Student Loan</a></li>
        </ul>
      </div>
      <div class="clearfix"></div>
      <script src="js/classie.js"></script>
      <script>
							(function() {
								[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
									var menuItems = menu.querySelectorAll('.menu-link'),
										setCurrent = function(ev) {
											ev.preventDefault();

											var item = ev.target.parentNode; // li
											
											// return if already current
											if( classie.has(item, 'menu-item-current') ) {
												return false;
											}
											// remove current
											classie.remove(menu.querySelector('.menu-item-current'), 'menu-item-current');
											// set current
											classie.add(item, 'menu-item-current');
										};
									
									[].slice.call(menuItems).forEach(function(el) {
										el.addEventListener('click', setCurrent);
									});
								});
							})(window);
						</script>
    </div>
    <!-- script-for sticky-nav -->
    <script>
					$(document).ready(function() {
						 var navoffeset=$(".top-nav").offset().top;
						 $(window).scroll(function(){
							var scrollpos=$(window).scrollTop(); 
							if(scrollpos >=navoffeset){
								$(".top-nav").addClass("fixed");
							}else{
								$(".top-nav").removeClass("fixed");
							}
						 });
						 
					});
					</script>
    <!-- /script-for sticky-nav -->
  </div>
</div>
<!--//navigation-->

<!-- services -->
<div class ="container">
 <form class="well form-horizontal" action=" " method="post"  id="contact_form"> <img src="loan/images/download.png" alt="logo" width =" 120" align="middle">
<fieldset>
   
<h4>About Student Loans</h4>
HomeReal World ReadyAbout Student Loans
Need a Ikworx IT Academy Student Loan?
Student Loan Ikworx IT Academy Education Group offers the opportunity for students to acquire funding for their studies by means of a student loan. Ikworx IT Academy has a unique agreement with recognised banks and by following a simple application process, learners who register at Ikworx IT Academy can begin their studies with financial security.

<h4>How to Apply:</h4>

Students who register for any Ikworx IT Academy qualification may apply to receive financial assistance for their studies, and fill out an application form through Ikworx IT Academy, by contacting the Process Office at +27 (010) 446 0477. Ikworx IT Academy will forward the application along with the required documentation for you. 

 

<h4>What you need:</h4>

<li>A copy of the learner/sponsor/spouse’s ID</li>
<li>Latest payslip or proof of income of sponsor/spouse</li>
<li>Latest 3 month bank statement or 6 month bank statement if self-employed</li>
<li>Latest water and lights bill/receipt and proof of address</li>
<li>Antenuptial contract where married out of community of property</li>
<li>Matriculation results</li>
<li>Proof of Ikworx IT Academy registration</li>
<br>
When the application is approved, the student, along with the sponsor, will be required to sign the relevant documents within 30 days. The Process Office will inform sponsors of any additional documents required. After the documents are signed, an account will be generated, which will remain open until enrolment.
<br>
Students can then have their final matric results and proof of sponsors’ unchanged financial position approved, and the amount will then be paid to Ikworx IT Academy. The sponsor can begin paying the amount off upon commencement of the student’s studies.
<br>
<h4><b>Remember:</b></h4>

This funding process is exclusive to Ikworx IT Academy. Funding acquired through Ikworx IT Academy cannot be transferred to another institution. This offer is only applicable to South African citizens and permanent residents. If you are a resident of another country, you may contact the Process Office and ask for an Account Executive, who deals with countries outside of South Africa. By applying today and getting financial assistance for your studies, you can avoid the November/December rush for funding. Once you begin your career, it becomes possible to pay off the capital amount. Ikworx IT Academy Education Group will endeavour to ensure you find financial peace of mind, so that you can focus on your studies.
 
<!-- Form Name -->

<legend><center><h2><b>Need an Ikworx IT Academy Student Loan?</b></h2></center></legend><br>

<!-- Text input-->
<legend><center><h2><b>Loan Application Form</b></h2></center></legend><br>
<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

	<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact_no" placeholder="+2772 4287 354" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
	
<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>
	<div class="form-group">
  <label class="col-md-4 control-label">Sponsor Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Sponsor_Name" placeholder="first Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Sponsor Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="Sponsor_LN" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- Text input-->

 <div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="country" class="form-control selectpicker">
      <option selected>Choose...</option>
        <option>South Africa</option>
		   <option>South Africa</option>
		   <option>China</option>
		   <option>Mexico</option>
		   <option>Ghana</option>
		   <option>Zimbabwe</option>
		   <option>Zambia</option>
		   <option>Namibia</option>
		   <option>KenyaKenya</option>
		   <option>Brazil</option>
		   <option>Mozambique</option>
		   <option>Kenya</option>
		   <option>Botswana</option>
		   <option>Canada</option>
      
    </select>
  </div>
</div>
</div>		

    
  <div class="form-group"> 
  <label class="col-md-4 control-label">Select Course</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="Select_Course" class="form-control selectpicker">
      <option value="">Select your Course</option>
      <option>CompTIA Network+</option>
      <option>CompTIA Advanced Security Practitioner (CASP)</option>
      <option >CompTIA Cloud Essentials</option>
      <option >CompTIA Cloud+</option>
      <option >CompTIA Linux+ Powered by LPI</option>
     <option> IT FUNDAMENTALS</option>
      <option>COMPTIA A+</option>
      <option>(CASP)</option>
      <option>(CYSA+)</option>
      
      <option >Microsoft</option>
     <option> DEPLOYING WINDOWS DEVICES AND ENTERPRISE APPS</option>
      <option>ADMINISTERING MICROSOFT SQL SERVER DATABASE</option>
      <option> IMPLEMENT A DATA WAREHOUSE WITH MICROSOFT SQL SERVER</option>
      <option> DEVELOPING MICROSOFT SQL SERVER DATABASE</option>
       <option>DESIGNING A DATABASE SOLUTIONS FOR MICROSOFT SQL SERVER</option>
       <option>IMPLEMENT DATA MODELS AND REPORTS WITH MICROSOFT SQL SERVER</option>
      <option> QUERYING MICROSOFT SQL SERVER</option>
      <option> DESIGNING BI SOLUTIONS WITH SQL SERVER</option>
      <option> DEVELOPING MICROSOFT SHAREPOINT SERVER CORE SOLUTIONS</option>
      <option> DEVELOPING MICROSOFT SHAREPOINT SERVER 2013 ADVANCED SOLUTIONS</option>
      <option> ADVANCED SOLUTIONS OF SHAREPOINT SERVER 2013</option>
       <option>CORE SOLUTIONS MICROSOFT SHAREPOINT SERVER 2013</option>
      
    </select>
  </div>
</div>
</div>
  
<!-- Text input-->


<!-- Text input-->



	
	

	
<!-- Success message -->

<!-- Button -->
<div class="form-group inlin">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
  <button type="submit" name="submit" class="btn btn-warning" ><span class="glyphicon glyphicon-send"></span>SUBMIT</button>
  </div>
</div>

	
<!-- Button -->

	</div>
</fieldset>
</form>
</div>
<!-- /.container -->
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/Boot.js"></script>
	<script >

	</script>	
	


<!-- //services -->

 

 
<!-- //main --> 
<!-- copyright -->
<div class="w3copyright-agile">
<div class="footer-copy wow slideInUp animated" data-wow-delay=".5s">
  <p>  ©2018 All rights reserved | Designed by <a href="http://www.mykonki.co.za/" target="_blank">Mykonki Designs and Creations (PTY) LTD</a> </p>
</div></div>

<!-- //copyright --> 


</body>
</div>
</div>
</div>
</html>
