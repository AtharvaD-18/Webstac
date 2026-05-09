<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Contact Us | Webstac Software Pvt Ltd</title>
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date(); a = s.createElement(o),
				m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-77036548-1', 'auto');
		ga('send', 'pageview');

	</script>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11006925921"></script>
	<script
		src="https://www.google.com/recaptcha/enterprise.js?render=6LeVf1MpAAAAALa5Mzkzh_xtohbM19b6bL-HGmMN"></script>

	<!-- Your code -->

	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'AW-11006925921');
	</script>
	<?php include_once ('include/head_links.php');
	if (isset ($_GET['flag'])) {
		$flag = $_GET['flag'];
	}
	?>

	<!-- Google reCaptcha -->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<!-- Status message -->
	<?php if (!empty ($statusMsg)) { ?>
		<div class="status-msg <?php echo $status; ?>">
			<?php echo $statusMsg; ?>
		</div>
	<?php } ?>

</head>

<body>
	<div id="wrapper" class="">

		<div class="header-wrapper">
			<div class="header-v1">
				
<div class="top-contact-bar" style="background-color: #013953; color: white; padding: 8px 0; font-size: 14px; border-bottom: 1px solid rgba(255,255,255,0.1);">
    <div style="display: flex; justify-content: flex-end; align-items: center; padding: 0 50px;">
        <div style="margin-right: 25px; display: flex; align-items: center; font-family: 'Inter', sans-serif; font-weight: 500;">
            <i class="fa fa-phone" style="color: #0aafd8; margin-right: 8px;"></i>
            <a href="tel:+918108664360" style="color: white; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#0aafd8'" onmouseout="this.style.color='white'">+91 81086 64360</a>
        </div>
        <div style="display: flex; align-items: center; font-family: 'Inter', sans-serif; font-weight: 500;">
            <i class="fa fa-envelope" style="color: #0aafd8; margin-right: 8px;"></i>
            <a href="mailto:contact@webstac.in" style="color: white; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#0aafd8'" onmouseout="this.style.color='white'">contact@webstac.in</a>
        </div>
    </div>
</div>

<header id="header">
					<div class="avada-row" style="padding-top:0px;padding-bottom:0px;" data-padding-top="0px"
						data-padding-bottom="0px">
						<div class="logo" data-margin-right="0px" data-margin-left="0px" data-margin-top="23px"
							data-margin-bottom="23px"
							style="margin-right:0px;margin-top:23px;margin-left:0px;margin-bottom:23px;">
							<a href="index.php">
								<img src="images/webstac-logo.png" alt="Webstac Software" class="normal_logo" />
							</a>
						</div>

						<?php include_once ('include/navigation.php') ?>

						<div class="mobile-menu-icons">
							<a href="#" class="fusionicon fusionicon-bars"></a>
						</div>
					</div>
				</header>
				<div class="mobile-nav-holder main-menu"></div>
			</div>
			<div class="init-sticky-header"></div>
		</div>

		<header id="header-sticky" class="sticky-header">
			<div class="sticky-shadow">
				<div class="avada-row">
					<div class="logo">
						<a href="index.php">
							<img src="images/webstac-logo.png" alt="Webstac Software" class="normal_logo" />
						</a>
					</div>
					<nav id="sticky-nav" class="nav-holder">
						<ul class="navigation menu fusion-navbar-nav">
							<li id="sticky-menu-item"
								class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item current_page_item menu-item">
								<a href="index.php"
									style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Home</a>
							</li>
							<li id="sticky-menu-item"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item"><a
									href="about.php"
									style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">About
									Us</a></li>
							<li id="sticky-menu-item"
								class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item fusion-dropdown-menu">
								<a style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Packages
									<span class="caret"></span></a>
								<ul class="sub-menu">
									<li id="sticky-menu-item"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item fusion-dropdown-submenu">
										<a href="compliancetracking.php"
											style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">3S(Safety
											Support System)</a>
									</li>
									<li id="sticky-menu-item"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item fusion-dropdown-submenu">
										<a href="sense.php"
											style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">SEnSE_L</a>
									</li>
									<li id="sticky-menu-item"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item fusion-dropdown-submenu">
										<a href="incidentmanagement.php"
											style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Infoinci</a>
									</li>
<li  id="sticky-menu-item"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item fusion-dropdown-submenu"  ><a href="BBSSoft.php" style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">BBS(Behaviour Based Safety)</a></li>
								</ul>
							</li>
							<li id="sticky-menu-item"
								class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item fusion-dropdown-menu">
								<a style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Services
									<span class="caret"></span></a>
								<ul class="sub-menu">
									
									<li id="sticky-menu-item"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item fusion-dropdown-submenu">
										<a href="hseaudit.php"
											style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">HSE
											Audit and Improvement in Safety Culture</a>
									</li>
									<li id="sticky-menu-item"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item fusion-dropdown-submenu">
										<a href="legalassessment.php"
											style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Legal
											Assessment</a>
									</li>
								</ul>
							</li>

							<li id="sticky-menu-item"
								class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item fusion-dropdown-menu">
								<a style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Download
									Brochure<span class="caret"></span></a>
								<ul class="sub-menu">
									<li id="sticky-menu-item"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item fusion-dropdown-submenu">
										<a href=""
											style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">All
											Packages</a>
									</li>
									<li id="sticky-menu-item"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item fusion-dropdown-submenu">
										<a href=""
											style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">3S(Safety
											Support System)</a>
									</li>
									<li id="sticky-menu-item"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item fusion-dropdown-submenu">
										<a href=""
											style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">SEnSE
											Legal</a>
									</li>
									<li id="sticky-menu-item"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item fusion-dropdown-submenu">
										<a href=""
											style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Infoinci</a>
									</li>

								</ul>
							</li>
							<li id="sticky-menu-item"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item"><a
									href="testimonial.php"
									style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Testimonials
								</a>
							<li id="sticky-menu-item"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item"><a
									href="contactus.php"
									style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Contact
									Us </a>
								<!--<ul class="sub-menu">
	<li  id="sticky-menu-item"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item fusion-dropdown-submenu"  ><a href="contactus.php">Location</a></li>
	<li  id="sticky-menu-item"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item fusion-dropdown-submenu"  ><a href="buisnesspartner.php">Business Partner / Consultant</a></li>
</ul>-->
							</li>

						<li id="sticky-menu-item"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item fusion-dropdown-submenu">
										<a href="Responsiblecareglimpses.php"
											style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Responsible
											Care</a>
									</li>
						</ul>
					</nav>
					<div class="mobile-nav-holder"></div>
				</div>
			</div>
		</header>
		<div id="sliders-container">
		</div>
		<div class="page-title-container page-title-container-breadcrumbs page-title-left" style="background-image: url('https://images.unsplash.com/photo-1516387938699-a93567ec168e?auto=format&fit=crop&w=1920&q=80');">
			<div class="page-title">
				<div class="page-title-wrapper">
					<div class="page-title-captions">
						<h1 class="entry-title" style="padding-left:573px">Contact Us</h1>
					</div>
					<ul class="breadcrumbs">
						<li> <a href="index.php">Home</a></li>
						<li>Contact Us</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="blue-contact-banner-container">
			<div class="blue-contact-banner">
				<h4>FOR MORE INFORMATION GET IN TOUCH WITH US</h4>
				<a href="contactus.php" class="btn-orange">Quick Enquiry</a>
			</div>
		</div>
		<div id="main" class="clearfix width-100" style="padding-left:30px;padding-right:30px">
			<div class="avada-row" style="max-width:100%;">
				<div id="content" class="full-width">
					<div id="post-10887" class="post-10887 page type-page status-publish hentry">
						<span class="entry-title" style="display: none;">Contact Us</span>
						<div class="post-content modern-card">
							<div class="fusion-fullwidth fullwidth-box"
								style="background-color:#ffffff;background-attachment:fixed;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;border-color:#eae9e9;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:30px;padding-left:0px;padding-right:0px;padding-top:30px;">
								<div class="avada-row">
									<div
										class="fusion-one-half one_half fusion-layout-column fusion-column spacing-yes">
										<div class="fusion-column-wrapper">
											<div class="imageframe-align-center"><span
													class="fusion-imageframe imageframe imageframe-none imageframe-1 fusion-animated"
													data-animationType="fadeInUp" data-animationDuration="1">
													<img src="images/contact.jpg" alt=""
														class="img-responsive" /></span></div>
											<div class="fusion-sep-clear"></div>
											<div class="fusion-separator fusion-full-width-sep sep-single"
												style="border-color:#e0e0e0;margin-top:5px;margin-bottom:20px;"></div>
											<p style="text-align: center;"><strong>Main Office :</strong>  501, Ruchi
												Tower, Sant Dnyaneshwar Road,
												Panchpakhadi, Thane-400602.<br />
												<strong>Email : </strong><a href="#"
													target="_top">contact@webstac.in</a> or <a href="#"
													target="_top">help@webstac.in</a>
											</p>
											<p style="text-align: center;"><strong>Phone : 022-25337774 </strong>
												Shailesh Parab - 9870915170 - <a href="#"
													target="_top">shailesh@webstac.in</a>,<br>
												Reshma Sonawane - 8108664360 - <a href="#"
													target="_top">reshma@webstac.in</a> ,<br>
												Vijay Bukkawar - 9820503444 - <a href="#"
													target="_top">vijay@webstac.in</a> </p>
										</div>
									</div>
									<div
										class="fusion-one-half one_half fusion-layout-column fusion-column last spacing-yes">
										<div class="fusion-column-wrapper">
											<div class="wpcf7" id="wpcf7-f8-p10887-o1" lang="en-US" dir="ltr">
												<div class="screen-reader-response"></div>

												<form method="post" class="wpcf7-form" action="">
													<div class="fusion-one-half one_half fusion-column"><span
															class="wpcf7-form-control-wrap your-name">
															<input type="text" name="your-name" value="" size="40"
																class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																required="true" placeholder="Full Name"
																id="name" /></span></div>
													<div class="fusion-one-half one_half fusion-column last">
														<span class="wpcf7-form-control-wrap your-mobile">
															<input type="text" name="your-mobile" value="" size="40"
																class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																required="true" placeholder="Mobile No."
																id="mobile" /></span>
													</div>
													<p><span class="wpcf7-form-control-wrap your-company">
															<input type="text" name="your-company" value="" size="40"
																class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-field user"
																id="company" required="true"
																placeholder="Company Name" /></span> </p>
													<div class="fusion-one-half one_half fusion-column">
														<span class="wpcf7-form-control-wrap your-email">
															<input type="email" name="your-email" value="" size="40"
																class="wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
																required="true" placeholder="Email Id."
																id="email" /></span>
													</div>
													<div class="fusion-one-half one_half fusion-column last">
														<span class="wpcf7-form-control-wrap your-subject">
															<input type="text" name="your-subject" value="" size="40"
																class="" placeholder="Subject" id="subject" /></span>
													</div>

													<p></p>
													<p><span>
															<textarea name="your-message" cols="40" rows="10"
																class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required input-field user"
																id="message" required="true" placeholder="your-message">
															</textarea>
														</span>
													</p>

													<div class="g-recaptcha"
														data-sitekey="6LcKxp4pAAAAAN4QniZ1sMT4fpPqkWrL2IMMM1X8"></div>
													<br>
													<!--<p><input type="submit" value="Send" name="send" sendMail.php /></p>-->


												</form>
												<?php
												if (isset ($flag) && $flag == "true") {
													?>
													<span><br />Thank you for contacting us. We will be in touch with you
														very soon.<br /><br /></span>
												<?php } ?>

											</div>
										</div>
									</div>
									<div class="fusion-clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<?php include_once ('include/footer.php') ?>


	</div><!-- wrapper -->



	<?php include_once ('include/footer_script.php') ?>

</body>

</html>