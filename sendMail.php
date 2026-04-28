<?php
// Google reCAPTCHA API key configuration 
$siteKey     = '6LcKxp4pAAAAAN4QniZ1sMT4fpPqkWrL2IMMM1X8'; 
$secretKey     = '6LcKxp4pAAAAAIHlQ2Y0wNuya66uL5CHAGApQVPj'; 

ob_start();
include_once ("/usr/share/pear/Mail.php");
include_once ("/usr/share/pear/Mail/mime.php");

$smtpinfo["host"] = "smtp.gmail.com";
$smtpinfo["port"] = "587";
$smtpinfo["auth"] = true;

$smtpinfo["username"] = "contact@webstac.in"; //Enter your mail server username
$smtpinfo["password"] = "con*t#act"; //Enter your mail server password

//$mail_object = Mail::factory("smtp", $smtpinfo);	
$mail_object = Mail::factory("smtp", "smtpinfo");
$email_to = "kalpesh@webstac.in"; //change email id here


if(isset($_POST['send'])){ 

	$fullname = $_POST['your-name'];  // required
	$userEmail = $_POST['your-email'];  // required
	$mobile = $_POST['your-mobile'];  // required
	$company = $_POST['your-company'];  // required
	$subject = $_POST['your-subject'];  // required
	$message = $_POST['your-message']; // not required
	$message = preg_replace("/[&<>%\*\,\.\']/i", '', $message); // required

	//$email_message = "Contact us Form Details Below.<br><br>";

	function clean_string($string)
	{
	$bad = array("content-type", "to:", "cc:", "href");
	return str_replace($bad, "", $string);
	}

	// Validate form fields 
    if(empty($name)){ 
        $valErr .= 'Please enter your name.<br/>'; 
    } 
    if(empty($mobile)){
        $valErr .= 'Please enter mobile number.<br/>';
    }
    if(empty($company)){
        $valErr .= 'Please enter company name.<br/>';
    }
    if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
        $valErr .= 'Please enter a valid email.<br/>'; 
    } 
    if(empty($subject)){ 
        $valErr .= 'Please enter subject.<br/>'; 
    } 
    if(empty($message)){ 
        $valErr .= 'Please enter your message.<br/>'; 
    } 

	// Validate reCAPTCHA box 
	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
 
		// Verify the reCAPTCHA response 
		$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
		 
		// Decode json data 
		$responseData = json_decode($verifyResponse); 
		 
		// If reCAPTCHA response is valid 
		if($responseData->success){

		// create email headers
		$headers["From"] = "contact@webstac.in";
		$headers["Subject"] = "Enquiry About Software";
		$headers["Reply-To"] = "contact@webstac.in";


		$mime = new Mail_mime("\r\n");
		$mime->setHTMLBody(
			"<html>
		<body>

		<table align=left border=0>
		<tr><td colspan=3 align=center><h3>New FeedBack Request</h3></td></tr>
		<tr><td colspan=3>&nbsp;</td></tr>

		<tr>
			<td><b>Person name:</b></td>
			<td><b>:</b></td>
			<td>$fullname</td>
		</tr>
		<tr>
			<td><b>Mobile No:</b></td>
			<td><b>:</b></td>
			<td>$mobile</td>
		</tr>
		<tr>
			<td valign=top><b>Company Name:</b></td>
			<td valign=top><b>:</b></td>
			<td>$company</td>
		</tr>

		<tr>
			<td width=80><b>Email ID:</b></td>
			<td width=15><b>:</b></td>
			<td width=400>$userEmail</td>
		</tr>
		<tr>
			<td width=80><b>Subject:</b></td>
			<td width=15><b>:</b></td>
			<td width=400>$subject</td>
		</tr>
		<tr>
			<td width=80><b>Message:</b></td>
			<td width=15><b>:</b></td>
			<td width=400>$message</td>
		</tr>

		</table>
		</body>
		</html>
			"
		);
		//$filedata = "./casestudy_PDF/homepage_Healthsolution_EPM.pdf";
		//$mime->addAttachment($filedata, 'application/octet-stream', '', true, 'base64');

		//Prepare the message to be sent
		$body = $mime->get();
		$headers = $mime->headers($headers);


		$mail = $mail_object->send($email_to, $headers, $body);

		// create email headers
		$headers["From"] = "contact@webstac.in";
		$headers["Subject"] = "Thank you for your interest in Webstac";
		$headers["Reply-To"] = "contact@webstac.in";

		$mime = new Mail_mime("\r\n");
		$mime->setHTMLBody("
			<font face='Arial, Helvetica, sans-serif' size='2px'>Dear " . $fullname . ",<br>
			<br>Thank you for your interest in Webstac and its projects.<br>If you have more queries, 
			email us at contact@webstac.in.<br><br>Warm regards,
			<br>Team Webstac<br><br>
			Webstac (Web based statutory compliance)<br><br>
			Webstac Software Pvt. Ltd.<br><br>
			501, 5th Floor, Ruchi Towers, Sant Dnyaneshwar Rd.,<br>
			Panchpakhadi, Thane (W) 400602. Maharashtra, India<br>
			Off. : +91 22 2533 7774<br>
			Website: www.webstac.in  | Email: contact@webstac.in, help@webstac.in<br>
			");
		//$filedata = "./casestudy_PDF/homepage_Healthsolution_EPM.pdf";
		//$mime->addAttachment($filedata, 'application/octet-stream', '', true, 'base64');

		//Prepare the message to be sent
		$body = $mime->get();
		$headers = $mime->headers($headers);


		$mail = $mail_object->send($userEmail, $headers, $body);

		echo 'flag';
		header("Location: https://www.webstac.in/contactus.php?flag=true");
		exit();
		}else{ 
			$statusMsg = 'Please check on the reCAPTCHA box.'; 
		} 
	}
}
?>