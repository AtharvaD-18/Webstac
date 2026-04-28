<?php 
// Google reCAPTCHA API key configuration 
$siteKey     = '6LcKxp4pAAAAAN4QniZ1sMT4fpPqkWrL2IMMM1X8'; 
$secretKey     = '6LcKxp4pAAAAAIHlQ2Y0wNuya66uL5CHAGApQVPj'; 
 
ob_start();
	include_once("/usr/share/pear/Mail.php");
	include_once("/usr/share/pear/Mail/mime.php");
	
    $smtpinfo["host"] = "smtp.gmail.com";
    $smtpinfo["port"] = "587";
    $smtpinfo["auth"] = true;
	
	$smtpinfo["username"] = "contact@webstac.in"; //Enter your mail server username
	$smtpinfo["password"] = "con*t#act"; //Enter your mail server password
 
	//$mail_object = Mail::factory("smtp", $smtpinfo);	
    $mail_object = Mail::factory("smtp","smtpinfo");
	$email_to = "kalpesh@webstac.in"; //change email id here
 
$postData = $statusMsg = $valErr = ''; 
$status = 'error'; 
 
// If the form is submitted 
if(isset($_POST['send'])){ 
    // Get the submitted form data 
    $postData = $_POST; 
    $name = trim($_POST['your-name']); 
    $mobile = trim($_POST['your-mobile']);
    $company = trim($_POST['your-company']);
    $email = trim($_POST['your-email']); 
    $subject = trim($_POST['your-subject']); 
    $message = trim($_POST['your-message']); 

    function clean_string($string) {
        $bad = array("content-type","to:","cc:","href");
        return str_replace($bad,"",$string);
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
     
    if(empty($valErr)){ 
         
        // Validate reCAPTCHA box 
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
 
            // Verify the reCAPTCHA response 
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
             
            // Decode json data 
            $responseData = json_decode($verifyResponse); 
             
            // If reCAPTCHA response is valid 
            if($responseData->success){ 
 
                // Send email notification to the site admin 
                $subject = 'Enquiry About Software'; 
                $htmlContent = " 
                    <h2>New FeedBack Request</h2> 
                    <p><b>Name: </b>".$name."</p> 
                    <p><b>Mobile No. </b>".$mobile."</p>
                    <p><b>Company. </b>".$company."</p>
                    <p><b>Email: </b>".$email."</p> 
                    <p><b>Subject: </b>".$subject."</p> 
                    <p><b>Message: </b>".$message."</p> 
                "; 

                // create email headers
	             $headers["From"] = "contact@webstac.in";
	            $headers["Subject"] = "Enquiry About Software";
	                $headers["Reply-To"] = "contact@webstac.in";
                 
                // Always set content-type when sending HTML email 
                $headers = "MIME-Version: 1.0" . "\r\n"; 
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
                // More headers 
               // $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n"; 
                 
                // Send email 
                @mail($email_to, $subject, $htmlContent, $headers); 

                echo 'flag';
	             header("Location: https://www.webstac.in/contactus.php?flag=true");
	             exit();
                 
                $status = 'success'; 
                $statusMsg = 'Thank you! Your contact request has submitted successfully, we will get back to you soon.'; 
                $postData = ''; 
            }else{ 
                $statusMsg = 'Robot verification failed, please try again.'; 
            } 
        }else{ 
            $statusMsg = 'Please check on the reCAPTCHA box.'; 
        } 
    }else{ 
        $statusMsg = '<p>Please fill all the mandatory fields:</p>'.trim($valErr, '<br/>'); 
    } 
}

// Display status message 
echo $statusMsg;
