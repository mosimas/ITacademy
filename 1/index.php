<?php
ob_start();
session_start();
//include 'session.php';

?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$alert="";
if(isset($_POST['button']))
{


$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comment=$_POST['comment'];

 $message= ' <html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        	  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
 .p-3{padding:1rem!important}
.mb-2,.my-2{margin-bottom:.5rem!important}
.bg-warning{background-color:#ffc107!important}
.text-dark{color:#343a40!important}       
</style>
    </head>
    <body style="padding: 4px">

<br>
<label>You have received an enquiry from '.$name.'. </label> <br><br>
<b><label><u>The enquiry message is as follows:</u></label></b> <br><br>
<label></label> '. $comment.' 
<br><br><br><br><br><br>
<div align="left">

     <div style="display: inline-block">          
	 <b><label class="p-3 mb-2 bg-warning text-dark">NB: Please use the following contact details: </label></b>
	 <br><br>
         <hr>
         <div>
        <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-user fa-1x "></i></a>           
        <b><label > Full Name: </label></b> '. $name.'	                   
        </div>           
        <div
        <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-phone-square fa-1x "></i></a>            
            <b> <label> Phone Number: </label> </b>'. $phone.'	                   
        </div>         
     <div>
         <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-1x social"></i></a>
	 <b><label> Email: </label> </b> '. $email.'	 
     </div>
<hr>         
    </div>
</div>  
        </body>
</html>';
//echo $message;
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'dopey.aserv.co.za';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info@ikworxitacademy.com';                 // SMTP username
    $mail->Password = 'Password@2018';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@ikworxitacademy.com');
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
    $mail->Subject = 'Enquiries';
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

                       <a href="https://en-gb.facebook.com/pages/biz/computer_training/IKWorx-It-Academy-212248142757564/">  <img src="images/facebook-2.png" height="35"  width="35 "alt="">
                        <a href="https://www.linkedin.com/company/ikworx-it-academy/"><img src="images/linkedin_circle_black-512.png" height="35"  width="35 "alt="">
                       <a href="mailto:info@ikworxitacademy.com?Subject=Enquire about the course"> <img src="images/download1.png" height="33"  width="33 "alt="">	
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/Group 22e.png"  alt="logo" align="middle"/>
    
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
</div>
<body style="margin-top: 0; padding: 0em; background-color: #FCF7F7;">


   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
  
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item overlay active">
        <img src="images/page-Pulse-living-&-tablet-IN-motion-3.gif" alt="" style="width:100%;">
       
        
        <a class="btn" href="1/test/form.php">REGISTER <B>NOW</B></a>
       
      </div>

      <div class="item overlay">
        <img src="images/page-Pulse-living-&-tablet-IN-motion-2.gif"  alt="" style="width:100%;">
        <a class="btn" href="http://pulseliving.co.za/">CLICK <B>HERE!!</B></a>
      </div>
    
  <div class="item overlay">
      <img src="images/page-Pulse-living-&-tablet-IN-motion-1.gif" alt="" style="width:100%;">
      <a class="btn" href="1/test/form.php">REGISTER <B>NOW</B></a>
      </div>
    
    </div>
   
    

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


      <!-- Left and right controls --> 
      <a class="carousel-control-prev" href="#myCarousel" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> 
     </body> <a class="carousel-control-next" href="#myCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> </div>
    <!--navigation-->
    <div class="top-nav wow">
  
      <div class="container">
      
        <div class="navbar-header logo">
         
        <img src="images/Group 22e.png" width="120" height="80" alt="logo"/>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> Menu </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="menu">
        
            <ul class="nav navbar">
            
              <li class="menu-item menu-item-current"><a href="#home" class="menu-link scroll">Home</a></li>
              
               <li><a href="https://www.linkedin.com/company/ikworx-it-academy/"target="_blank">Who Are We?</a></li>
              <li class="menu-item"><a href="#services" class="menu-link scroll">Courses</a></li>
              <li class="menu-item"><a href="loan_page.php" target="_blank">Loan</a></li>
              <li class="menu-item"><a href="#contact" class="menu-link scroll">Contact </a></li>
            </ul>
          </div>
          <div class="clearfix"> </div>
          <script src="js/classie.js"></script> <script>
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
  
<!--//banner--> 
<!--welcome-->
<div class="welcome" id="about" style="background-image: url(images/Advert.jpg)">
<div class="container">
 <center><img src="images/Comptia-Voucher_2.gif" style="height: 400px" width="1100px"></center>
</div>
</div>

<!--//welcome--> 
<!--services-->
<style>
.services-w3-agileits {
    background: #ececec;
}
.service-grids-w3ls {
    padding: 15px;
    border: 2px solid transparent;
    -webkit-transition: all 0.7s ease-in-out;
    -moz-transition: all 0.7s ease-in-out;
    -o-transition: all 0.7s ease-in-out;
    -ms-transition: all 0.7s ease-in-out;
    transition: all 0.7s ease-in-out;
    width: 33%;
    margin: 0 1px;
}
.service-grids-w3ls:hover {
    border: 2px solid #000;
	-webkit-transition: all 0.7s ease-in-out;
   -moz-transition: all 0.7s ease-in-out;
   -o-transition: all 0.7s ease-in-out;
   -ms-transition: all 0.7s ease-in-out;
   transition: all 0.7s ease-in-out;
}
.service-grids-w3ls i {
    font-size: 27px;
    color: #444;
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
.service-grids-w3ls h5 {
    color: #777;
    font-size: 21px;
    letter-spacing: .6px;
    text-transform: capitalize;
    padding: 20px 0 10px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}
.service-grids-w3ls p {
    color: #000;
    font-size: 16px;
    letter-spacing: 0.7px;
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
.service-grids-w3ls:hover i{
	color:#AA9F9F!important;
}
.service-grids-w3ls:hover h5{
	color:#000!important;
}
.service-grids-w3ls:hover p{
	color:#f5b120!important;
}
.services-right {
    background: url(images/DSCF1179.0.1514331411.jpg) no-repeat 0px 0px;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    padding: 5em 6em;
}
.services-left {
    background: url(images/comptia%20mosima.jpg) no-repeat 0px 0px;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    padding: 5em 7em;
}
.services-info {
    padding: 2em;
    background: rgba(0, 0, 0, 0.65);
}
.service-grid1, .service-grid2 {
    margin-top: 3.7em;
}
</style>


<div class="welcome services" id="services">
		<div class="container">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s"><font color="#cccc00">Our Courses</h3></font>
		<div class="col-md-6  services-left">
		<div class="services-info">
			<h3 class="tittle-agileits-w3layouts white-w3ls"><font color="white">CompTIA</h3></font>
			<p class="para-w3-agile white-w3ls"><font color="white">A+, Network+, IT Fundamentals,Server+,Advanced Security Practitioner(CASP), Cloud Essentials,Cloud+,Linux+ Powered by LPI</p></font>
			<a href="Content.html" class="button-w3layouts hvr-rectangle-out"><b>Learn more</b></a>
		</div>
	</div>
		

	<div class="col-md-6  services-right">
		<div class="services-info">
			<h3 class="tittle-agileits-w3layouts white-w3ls"><font color="white">Microsoft Bundle</h3></font>
			<p class="para-w3-agile white-w3ls"><font color="white">Private Cloud,Data-Platform,Business Intelligence,Server Infrastructure,SharePoint,Core Solutions Microsoft SharePoint Server</p></font>
			<a href="Content2.html" class="button-w3layouts hvr-rectangle-out"><b><font color="red">Learn more</b></a></font>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</div>
</div>
    
<!--//services--> 



<!--contact -->

<div class="welcome contact" id="contact">
      <div class="contact-form">
    <h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Contact Us</h3>

   <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">

                    <div id="map" class="wow slideInUp"></div>

                    
    <div class="row">
	  <div class="col-md-7">
      <br><br><br><br>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7187.370745631119!2d28.22939927139433!3d-25.747916264079144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9561bf44d8efb1%3A0x95a48b6dfc7bb62e!2sInfotech+building!5e0!3m2!1sen!2sza!4v1530539241043" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
  

          <h4><strong>Get in Touch</strong></h4>
       
<form action="" method="post">
           
          
          <div class="form-group">
            <input type="text" class="form-control" name="name"  placeholder="Name">
          </div>
        
          <div class="form-group">
            <input type="email" class="form-control" name="email"  placeholder="E-mail">
          </div>
          
          <div class="form-group">
            <input type="tel" class="form-control" name="phone" placeholder="Phone">
          </div>
        
          <div class="form-group">
            <textarea class="form-control" name="comment" rows="3" placeholder="Message"></textarea>
          </div>
          <input class="btn btn-default" type="submit" name="button">
             </form>
             <br>  
             <?php echo $alert ?>
         </div>
</div>
<br><br><br>
   <div class="row contactv2 text-center">
                        <div class="col-md-4">
                            <div class="small-box">
                                <i class="flaticon-email wow fadeIn"></i>
                                <h4>Contact us today</h4>
                                <p>Phone: 010 446 0477</p>
                                <p>Fax:  084 464 5025</p>
                                <p><a href="mailto:info@ikworxitacademy.com?Subject=Enquire about the course">info@ikworxitacademy.com</a></p>
                            </div><!-- end small-box -->
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="small-box">
                                <i class="flaticon-map-with-position-marker wow fadeIn"></i>
                                <h4>Visit Our Office</h4>
                                <p><b>Infotech Building</b></p>
                                <p>Arcadia St,Hatfield</p>
                                <p>1st Floor,Office 2</p>
                                
                                
<!-- https://maps.google.com/?q=<address> -->

                            </div><!-- end small-box -->
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="small-box">
                                <i class="flaticon-share wow fadeIn"></i>
                                <h4>Be Social</h4>
                                
                              <p>LinkedIn: <a href="https://www.linkedin.com/company/ikworx-it-academy/">ikworx-it-academy</a></p>
                                <p>Facebook: <a href="https://en-gb.facebook.com/pages/biz/computer_training/IKWorx-It-Academy-212248142757564/#">IKWorx-It-Academy</a></p>
                            </div><!-- end small-box -->
                        </div><!-- end col -->
                   </div> <!-- end contactv2 -->
                   
   <div class="footer-copy wow slideInUp animated" data-wow-delay=".5s">
 
  <!-- //main --> 
<!-- copyright -->
<div class="w3copyright-agile">
  <p>© 2018 All rights reserved | Designed by <a href="http://www.mykonki.co.za/" target="_blank">Mykonki Designs and Creations (PTY) LTD</a> </p>
</div>
<!-- //copyright --> 

</div>
     </div>
 
    
    <!-- Custom js -->
    <script src="js/script.js"></script>
 
  
  <!--//contact --> 
  
<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/bootstrap.js"></script>
</div>
</div>

</body>
</html>