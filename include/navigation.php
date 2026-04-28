<?php

$full_page  = $_SERVER['SCRIPT_FILENAME'];
$page_name =  substr( $full_page  , strrpos($full_page , '/') +1 );
$page = substr($page_name , 0 , -4);

function get_active($link)
{
	global $page;
	if($link == trim($page))
	{
		return "class='current-menu-item'";
	}
}

?>
<nav id="nav" class="nav-holder" data-height="83px">
<ul class="navigation menu fusion-navbar-nav">
		<li <?php echo get_active('index') ?>><a href="index.php" style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Home</a></li>
		<li <?php echo get_active('about') ?>><a href="about.php" style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">About Us</a></li>

	<li ><a style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Packages <span class="caret"></span></a>	
		<ul class="sub-menu">
		<li <?php echo get_active('compliancetracking') ?>><a href="compliancetracking.php" style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">3S(Safety Support System)</a></li>
		<li <?php echo get_active('sense') ?>><a href="sense.php" style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">SEnSE_L</a></li>
		<li <?php echo get_active('incidentmanagement') ?>><a href="incidentmanagement.php" style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Infoinci</a></li>
		<li <?php echo get_active('BBSSoft') ?>><a href="BBSSoft.php" style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">BBS (Behaviour Based Safety)</a></li>
			
			
			
			
		</ul>
	</li>
	<li ><a style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Services <span class="caret"></span></a>	
		<ul class="sub-menu">
			
			<li <?php echo get_active('hseaudit') ?>><a href="hseaudit.php" style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">HSE Audit and Improvement in Safety Culture</a></li>
			<li <?php echo get_active('legalassessment') ?>><a href="legalassessment.php" style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Legal Assessment</a></li>
			
		</ul>
	</li>
	

	
	<li><a style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Download Brochure<span class="caret"></span></a>
	<ul class="sub-menu">
	<li><a href="images/WebstacBrochure.pdf" target='_blank' style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">All Packages</a></li>
	<li><a href="images/3S-(Safety_Support_System).pdf" target='_blank' style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">3S(Safety Support System)</a></li>
	<li><a href="images/SenSE.pdf" target='_blank' style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">SEnSE Legal</a></li>
	<li><a href="images/Infolnci.pdf" target='_blank' style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Infoinci</a></li>
	<li><a href="images/Final_BBS_flyer.pdf" target='_blank' style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">BBS (Behaviour Based Safety)</a></li>
		
		
		
		
	</ul>
	</li>
	<li <?php echo get_active('testimonial') ?>><a href="testimonial.php" style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Testimonials<span class="caret"></span></a></li>
	<li <?php echo get_active('contactus') ?>><a href="contactus.php" style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Contact Us <span class="caret"></span></a>
	
	</li>

	
<li <?php echo get_active('responsiblecare') ?>><a href="Responsiblecareglimpses.php" style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Responsible Care</a></li>
	<li><a href="contactus.php" class="nav-demo-btn">Request Demo</a></li>
</ul>
</nav>