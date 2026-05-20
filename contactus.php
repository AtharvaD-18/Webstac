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
        <a href="https://www.linkedin.com/company/webstac-software-private-limited/" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;justify-content:center;width:32px;height:32px;background-color:#0077b5;border-radius:6px;color:white;text-decoration:none;margin-left:20px;flex-shrink:0;transition:background-color 0.3s;" onmouseover="this.style.backgroundColor='#005885'" onmouseout="this.style.backgroundColor='#0077b5'"><i class="fa-brands fa-linkedin" style="font-size:18px;"></i></a>
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
							<a href="#" class="mobile-menu-btn" aria-label="Menu"><i class="fa fa-bars"></i></a>
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
<li  id="sticky-menu-item"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item fusion-dropdown-submenu"  ><a href="BBSSoft.php" style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">BEST (Behaviour Ensuring Safety with Tracker)</a></li>
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
											style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Legal Assessment</a>
									</li>
									<li id="sticky-menu-item"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item fusion-dropdown-submenu">
										<a href="Responsiblecareglimpses.php"
											style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Responsible Care</a>
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
							<li id="sticky-menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item"><a href="testimonial.php" style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Testimonial</a></li>
							<li id="sticky-menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item"><a href="happenings.php" style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Happening at Webstac</a></li>
							<li id="sticky-menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item"><a href="contactus.php" style="color:#0272A7;text-decoration:none;font-weight:bold;font-size:13px;">Contact Us</a></li>
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
		<div id="main" style="background:#f1f5f9; padding:60px 0;">
		<div style="max-width:1160px; margin:0 auto; padding:0 40px; display:flex; gap:44px; align-items:flex-start; flex-wrap:wrap;">

			<!-- Left: Info Card -->
			<div style="flex:0 0 340px; background:linear-gradient(160deg,#0d1f35 0%,#0272a7 100%); border-radius:16px; padding:44px 36px; color:white; box-shadow:0 20px 60px rgba(2,114,167,0.28);">
				<h2 style="font-family:'Inter',sans-serif; font-size:1.5rem; font-weight:700; margin:0 0 6px; color:white;">Get In Touch</h2>
				<p style="color:rgba(255,255,255,0.6); font-family:'Inter',sans-serif; font-size:0.85rem; margin:0 0 36px; line-height:1.6;">We'd love to hear from you. Our team is always here to help.</p>

				<!-- Office -->
				<div style="display:flex; gap:14px; margin-bottom:26px; align-items:flex-start;">
					<div style="width:38px; height:38px; background:rgba(255,255,255,0.12); border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
						<i class="fa fa-map-marker" style="color:#0aafd8; font-size:15px;"></i>
					</div>
					<div>
						<p style="margin:0 0 4px; font-family:'Inter',sans-serif; font-size:0.72rem; color:rgba(255,255,255,0.45); text-transform:uppercase; letter-spacing:1.2px;">Main Office</p>
						<p style="margin:0; font-family:'Inter',sans-serif; font-size:0.84rem; color:white; line-height:1.6;">501, Ruchi Tower, Sant Dnyaneshwar Road, Panchpakhadi, Thane-400602.</p>
					</div>
				</div>

				<!-- Email -->
				<div style="display:flex; gap:14px; margin-bottom:26px; align-items:flex-start;">
					<div style="width:38px; height:38px; background:rgba(255,255,255,0.12); border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
						<i class="fa fa-envelope" style="color:#0aafd8; font-size:13px;"></i>
					</div>
					<div>
						<p style="margin:0 0 4px; font-family:'Inter',sans-serif; font-size:0.72rem; color:rgba(255,255,255,0.45); text-transform:uppercase; letter-spacing:1.2px;">Email</p>
						<p style="margin:0; font-family:'Inter',sans-serif; font-size:0.84rem; line-height:1.8;">
							<a href="mailto:contact@webstac.in" style="color:#0aafd8; text-decoration:none;">contact@webstac.in</a><br>
							<!-- <a href="mailto:help@webstac.in" style="color:#0aafd8; text-decoration:none;">help@webstac.in</a> -->
						</p>
					</div>
				</div>

				<!-- Phone -->
				<div style="display:flex; gap:14px; align-items:flex-start;">
					<div style="width:38px; height:38px; background:rgba(255,255,255,0.12); border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
						<i class="fa fa-phone" style="color:#0aafd8; font-size:14px;"></i>
					</div>
					<div>
						<p style="margin:0 0 4px; font-family:'Inter',sans-serif; font-size:0.72rem; color:rgba(255,255,255,0.45); text-transform:uppercase; letter-spacing:1.2px;">Phone</p>
						<!-- <p style="margin:0; font-family:'Inter',sans-serif; font-size:0.82rem; color:rgba(255,255,255,0.85); line-height:2;">
							022-25337774<br> -->
							Shailesh Parab &mdash; <a href="tel:9870915170" style="color:#0aafd8;text-decoration:none;">9870915170</a><br>
							Reshma Sonawane &mdash; <a href="tel:8108664360" style="color:#0aafd8;text-decoration:none;">8108664360</a><br>
							Sarika Bukkawar &mdash; <a href="tel:9819669962" style="color:#0aafd8;text-decoration:none;">9819669962</a><br>
							Vijay Bukkawar &mdash; <a href="tel:9820503444" style="color:#0aafd8;text-decoration:none;">9820503444</a>
						</p>
					</div>
				</div>
			</div>

			<!-- Right: Form Card -->
			<div style="flex:1; min-width:320px; background:white; border-radius:16px; padding:44px 40px; box-shadow:0 10px 40px rgba(0,0,0,0.07);">
				<h2 style="font-family:'Inter',sans-serif; font-size:1.4rem; font-weight:700; color:#0d1f35; margin:0 0 6px;">Send Us a Message</h2>
				<p style="font-family:'Inter',sans-serif; font-size:0.85rem; color:#64748b; margin:0 0 28px;">Fill out the form and we'll get back to you shortly.</p>

				<form method="post" action="" style="display:flex; flex-direction:column; gap:14px;">
					<div style="display:grid; grid-template-columns:1fr 1fr; gap:14px;">
						<input type="text" name="your-name" id="name" required placeholder="Full Name"
							style="padding:12px 15px; border:1.5px solid #e2e8f0; border-radius:8px; font-family:'Inter',sans-serif; font-size:0.85rem; color:#0d1f35; outline:none; width:100%; box-sizing:border-box;"
							onfocus="this.style.borderColor='#0272a7'" onblur="this.style.borderColor='#e2e8f0'">
						<input type="text" name="your-mobile" id="mobile" required placeholder="Mobile No."
							style="padding:12px 15px; border:1.5px solid #e2e8f0; border-radius:8px; font-family:'Inter',sans-serif; font-size:0.85rem; color:#0d1f35; outline:none; width:100%; box-sizing:border-box;"
							onfocus="this.style.borderColor='#0272a7'" onblur="this.style.borderColor='#e2e8f0'">
					</div>
					<input type="text" name="your-company" id="company" required placeholder="Company Name"
						style="padding:12px 15px; border:1.5px solid #e2e8f0; border-radius:8px; font-family:'Inter',sans-serif; font-size:0.85rem; color:#0d1f35; outline:none; width:100%; box-sizing:border-box;"
						onfocus="this.style.borderColor='#0272a7'" onblur="this.style.borderColor='#e2e8f0'">
					<div style="display:grid; grid-template-columns:1fr 1fr; gap:14px;">
						<input type="email" name="your-email" id="email" required placeholder="Email Id."
							style="padding:12px 15px; border:1.5px solid #e2e8f0; border-radius:8px; font-family:'Inter',sans-serif; font-size:0.85rem; color:#0d1f35; outline:none; width:100%; box-sizing:border-box;"
							onfocus="this.style.borderColor='#0272a7'" onblur="this.style.borderColor='#e2e8f0'">
						<input type="text" name="your-subject" id="subject" placeholder="Subject"
							style="padding:12px 15px; border:1.5px solid #e2e8f0; border-radius:8px; font-family:'Inter',sans-serif; font-size:0.85rem; color:#0d1f35; outline:none; width:100%; box-sizing:border-box;"
							onfocus="this.style.borderColor='#0272a7'" onblur="this.style.borderColor='#e2e8f0'">
					</div>
					<textarea name="your-message" id="message" required placeholder="Your message..." rows="5"
						style="padding:12px 15px; border:1.5px solid #e2e8f0; border-radius:8px; font-family:'Inter',sans-serif; font-size:0.85rem; color:#0d1f35; outline:none; width:100%; box-sizing:border-box; resize:vertical;"
						onfocus="this.style.borderColor='#0272a7'" onblur="this.style.borderColor='#e2e8f0'"></textarea>

					<div class="g-recaptcha" data-sitekey="6LcKxp4pAAAAAN4QniZ1sMT4fpPqkWrL2IMMM1X8"></div>

					<div>
						<button type="submit" name="send"
							style="background:linear-gradient(135deg,#0272a7,#0aafd8); color:white; border:none; padding:13px 38px; border-radius:8px; font-family:'Inter',sans-serif; font-size:0.88rem; font-weight:600; cursor:pointer; letter-spacing:0.5px; box-shadow:0 4px 15px rgba(2,114,167,0.3); transition:all 0.3s;"
							onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 8px 25px rgba(2,114,167,0.4)'"
							onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 15px rgba(2,114,167,0.3)'">
							Send Message &nbsp;&rarr;
						</button>
					</div>
				</form>

				<?php if (isset($flag) && $flag == "true") { ?>
					<div style="margin-top:18px; padding:13px 16px; background:#ecfdf5; border:1px solid #6ee7b7; border-radius:8px; font-family:'Inter',sans-serif; font-size:0.85rem; color:#065f46;">
						&#10003; &nbsp;Thank you for contacting us. We will be in touch with you very soon.
					</div>
				<?php } ?>
			</div>

		</div>
	</div>

	<?php include_once ('include/footer.php') ?>


	</div><!-- wrapper -->



	<?php include_once ('include/footer_script.php') ?>

</body>

</html>