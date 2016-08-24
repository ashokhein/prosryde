<?php

if (!empty($_POST["email_submit"])) {
    $to = "ashokhein@gmail.com";
    $from = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: $from";
    $subject = "Learn2Apply | You have a message";

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"message"} = "message";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);
}
?>

<!DOCTYPE HTML>
<html>
<title>Prosryde</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='web/css/font_css.css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="web/css/popup.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="web/css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="web/css/slider.css" />
<script src="web/js/jquery.min.js"></script>
<script type="text/javascript" src="web/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="web/js/jquery.cslider.js"></script>
<link rel="shortcut icon" type="image/ico" href="web/images/fav.ico"/>
<script type="text/javascript">
	$(function() {				
		$('#da-slider').cslider({
			autoplay	: true,
			bgincrement	: 450
		});
	});
</script>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div id="content">
      <header id="topnav">
        <nav>
        		 <ul>
					<li class="active"><a class="scroll" href="#home">Home</a></li>
					<li><a class="scroll"href="#service">Services</a></li>
					<li><a class="scroll" href="#portfolio">Porfolio</a></li>
<!--				<li><a class="scroll" href="#pricing">Pricing</a></li> -->
					<li><a class="scroll" href="#team">Team</a></li>
					<li><a  class="scroll" href="#contact">Contact</a></li>
					<div class="clear"> </div>
				</ul>
        </nav>
         <div class="logo"><a href="index.html"><img src="web/images/logo.png" style="width:180px"></a></div>
        <a href="#" id="navbtn">Nav Menu</a>
        <div class="clear"> </div>
      </header><!-- @end #topnav -->
      <script type="text/javascript"  src="web/js/menu.js"></script>
    </div>
</div>
</div>
<?php if (!empty($_POST["email_submit"])) { ?>
<script src="web/js/popup.js"></script>
<?php } ?>
<div id="boxes">
  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window"><b>Finger Cross</b>
    <div id="lorem">
      <p>Thanks for choosing us. We will get back to you soon.</p>
    </div>
    <div id="popupfoot" class="button"> <a href="#" class="close agree">Close</a> </div> 
  </div>
  <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>

<!--start-slider---->
<div class="slider" id="home"> 
	<div class="wrap">
	<!---start-da-slider----->
	<div id="da-slider" class="da-slider">
		<div class="da-slide">
			<h2>Simple,Easy,Secure</h2>
			<p>Keep inventory and Get Order and Deliver it</p>
			<a href="#contact" class="da-link">Contact Us</a>
		</div>				
		<div class="da-slide">
			<h2>AWS Cloud Computing</h2>
			<p>AWS, or your prefered Hosting</p>
			<a href="#contact" class="da-link">Contact Us</a>
		</div>
		<div class="da-slide">
			<h2>Gorgeous templates</h2>
			<p>Third party templates or Own designed templates.</p>
			<a href="#contact" class="da-link">Contact Us</a>
		</div>
		<div class="da-slide">
			<h2>Android Application</h2>
			<p>We convert your responsive website to Android Application</p>
			<a href="#contact" class="da-link">Contact Us</a>
		</div>
		<div class="da-slide">
			<h2>Source Control Management</h2>
			<p>Git,Jenkin,etc.</p>
			<a href="#contact" class="da-link">Contact Us</a>
		</div>
		<nav class="da-arrows">
			<span class="da-arrows-prev"></span>
			<span class="da-arrows-next"></span>
		</nav>
	</div>
		<!---//End-da-slider----->
	</div>
</div>

<!-----------service------------>
<div  class="sevice" id="service">
	<div class="wrap">
		<div class="service-grids">
						<div class="images_1_of_4">
					 		<img src="web/images/opencart.png">
					 		<h3>Opencart</h3>
					 		<p>Rich, easy to use, SEO friendly and visually appealing interface.</p>
				     		<div class="button"><span><a href="http://www.opencart.com/" target="_blank">Read More</a></span></div>
						</div>
						<div class="images_1_of_4">
							 <img src="web/images/hosting.png" width="105" height="105">
							 <h3>Hosting and DNS</h3>
							 <p>AWS - Create and Manage Hosting and DNS with high reliability.</p>
						     <div class="button"><span><a href="#contact">Contact Us</a></span></div>
						</div>
						<div class="images_1_of_4">
							 <img src="web/images/mobile-friendly.png" width="105" height="105">
							 <h3>Bootstrap</h3>
							 <p>Website will be supported on both Desktop and Mobile.</p>
						     <div class="button"><span><a href="#contact">Contact Us</a></span></div>
						</div>
						<div class="images_1_of_4">
							 <img src="web/images/php_image.gif" width="105" height="105">
							 <h3>PHP Custom Work</h3>
							 <p>We will do PHP custom modification.</p>
						     <div class="button"><span><a href="#contact">Contact Us</a></span></div>
						</div>
						<div class="clear"> </div>
		 </div>
		<div class="service-grids">
						<div class="images_1_of_4">
					 		<img src="web/images/security.png" width="105" height="105">
					 		<h3>Security and SSL Support</h3>
					 		<p>We will provide high level security and dedicated support.</p>
						     <div class="button"><span><a href="#contact">Contact Us</a></span></div>
						</div>
						<div class="images_1_of_4">
							 <img src="web/images/messenger.png" width="105" height="105">
							 <h3>Messenger Bot</h3>
							 <p>We will create bot your brand.</p>
						     <div class="button"><span><a href="#contact">Contact Us</a></span></div>
						</div>
						<div class="images_1_of_4">
							 <img src="web/images/analystic.png" width="105" height="105">
							 <h3>Analaytics</h3>
							 <p>We will provide more details about website analystic details.</p>
						     <div class="button"><span><a href="#contact">Contact Us</a></span></div>
						</div>
						<div class="images_1_of_4">
							 <img src="web/images/fb_ad.png" width="105" height="105">
							 <h3>Advertising</h3>
							 <p>We have leverage to spead your website to world.</p>
						     <div class="button"><span><a href="#contact">Contact Us</a></span></div>
						</div>
						<div class="clear"> </div>
		 </div>
		<div class="service-grids">
						<div class="images_1_of_4">
					 		<img src="web/images/sms.png" width="105" height="105">
					 		<h3>SMS Integration</h3>
					 		<p>We will add or integrate SMS functionality.</p>
						     <div class="button"><span><a href="#contact">Contact Us</a></span></div>
						</div>
						<div class="images_1_of_4">
							 <img src="web/images/email.png" width="105" height="105">
							 <h3>Email Service</h3>
							 <p>Email Hosting service integration with Zoho.</p>
						     <div class="button"><span><a href="#contact">Contact Us</a></span></div>
						</div>
						<div class="images_1_of_4">
							 <img src="web/images/net.gif" width="105" height="105">
							 <h3>.Net Custom Task</h3>
							 <p>We will do .Net and webform custom modification.</p>
						     <div class="button"><span><a href="#contact">Contact Us</a></span></div>
						</div>
						<div class="images_1_of_4">
							 <img src="web/images/git.jpg" width="105" height="105">
							 <h3>Source Code Management</h3>
							 <p>We will make your code more private in git repository.</p>
						     <div class="button"><span><a href="#contact">Contact Us</a></span></div>
						</div>
						<div class="clear"> </div>
		 </div>
	 
	</div>
</div>
<!-----------//service//------------>
<!-----------portfolio-------------->
<div class="team" id="portfolio">
	 <div class="wrap">
		<div class="heading_h">
			<h3><a href="#">Portfolio</a></h3>
		</div>	
		<div class="middle-grids">
		<div class="portfolio-grids">
			<a href="https://www.onryde.com" target="_blank"><img src="web/images/onryde1.png"  alt="Image 1"/></a>
		</div>
		<div class="portfolio-grids">
			 <a href="http://www.gopajama.com/" target="_blank"><img src="web/images/gopajama.png"></a>
		</div>
		<div class="portfolio-grids" style="position: relative;top: -30px;">
			 <a href="http://www.bodyorganics.com.ng/" target="_blank"><img src="web/images/bodyorganics.png"></a>
		</div>			
		<div class="clear"> </div>
	</div>
	</div>
</div>

<!-----------//portfolio//----------->

<!-----------start-team-------------->

<div class="team" id="team">
	 <div class="wrap">
			<div class="heading_h">
				<h3><a href="#">The Team</a></h3>
			</div>	
			<div class="middle-grids" style="position:relative;left:13%">
				<div class="grid_1_of_4 images_1_of_4">
					<img src="web/images/ashok.jpg"  alt="Image 1"/>
					<h3>Ashokkumar</h3>
					<h4>Software Developer</h4>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					 <img src="web/images/gowtham.jpg">
					<h3>Gowtham</h3>
					<h4>Business Analyst</h4>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					 <img src="web/images/gopi.jpg">
					<h3>Gopi</h3>
					<h4>Software Developer</h4>
				</div>
				 <div class="clear"> </div>
		</div>
	</div>
</div>

<!----------end-team----------------->

<!--------start-contact-----------> 
 <div class="contact" id="contact">
	<div class="wrap">
		<h2>Contact Us</h2>
			<div class="contact-form">
				<div class="para-contact">
					<h4>Get in touch with us</h4>
					<p>Contact us for simple way to start online shopping at finger crossed</p>
				
		 		  <div class="get-intouch-left-address">
						<p><strong>London</strong></p>
						<p>+44 07459794984</p>
						<p><a href="mailto:ashokhein@gmail.com"> ashokhein(at)gmail.com</a></p>
						<p><strong>Chennai</strong></p>
						<p>+91 7708407444</p>
						<p><a href="mailto:gowthamgurumoorthy@gmail.com"> gowthamgurumoorthy(at)gmail.com</a></p>
					</div>
					<div class="clear"> </div>	
				</div>
						<div class="form">
				  			<form method="post" action="#">
									<input type="hidden" name="email_submit" value="send_mail_hidden_box" />
							    	<input type="text" class="textbox"  name="name" placeholder="Name" required="true" />
							    	<input type="email" class="textbox" name="email" placeholder="Email" required="true" />
										<div class="clear"> </div>
								    <div>
								    	<textarea value="Message:" name="message" required>Message</textarea>
								    </div>
								<div class="button send_button">
									<span id="info_msg"> </span>
									<input type="submit" value="Send">
								</div>
								<div class="clear"> </div>
							</form>
						</div>
						<a class="mov-top" href="#home1"> <span> </span></a>
					 <div class="clear"> </div>
				</div>
  			</div>
     </div>
     <!-- scroll_top_btn -->
		<script type="text/javascript" src="web/js/move-top.js"></script>
		<script type="text/javascript" src="web/js/easing.js"></script>
	    <script type="text/javascript">
			
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
			</script>

		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<!--------//end-contact----------->
</body>
</html>		