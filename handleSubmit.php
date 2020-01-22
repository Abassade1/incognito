<?php

if (isset($_POST['submit'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "mclord@initsng.com";
    $email_subject = "RE: Request";
 
    function died($error) {
        // your error code can go here
        echo '<div class="alert alert-danger" role="alert">';
        echo $error."<br />";
        echo '</div>';
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['company_name']) ||
        !isset($_POST['number']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) :
        died('We are sorry, but there appears to be some missing fields with the form you submitted.');       
     else :
 
        $name = $_POST['name'];
        $company_name = $_POST['company_name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    
        $error_message = "";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    
        if(!preg_match($email_exp,$email)) {
            $error_message .= 'The email address you entered does not appear to be valid.<br />';
        }
    
        $string_exp = "/^[A-Za-z0-9 .'-]+$/";
    
        if(!preg_match($string_exp,$name)) {
            $error_message .= 'The name you entered does not appear to be valid.<br />';
        }
    
        if(!preg_match($string_exp,$company_name)) {
            $error_message .= 'The company name you entered does not appear to be valid.<br />';
        }

        $number_exp = "/^[0-9\-\(\)\/\+\s]*$/";

        if(!preg_match($number_exp,$number)) {
            $error_message .= 'The mobile no you entered does not appear to be valid. <br />';
        }
    
        if(strlen($message) < 2) {
            $error_message .= 'The comment you entered do not appear to be valid.<br />';
        }
    
        if(strlen($error_message) > 0) {
            died($error_message);
        } else {
            $email_message = "Request details below.\n\n";
        
            
            function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad,"",$string);
            }
            
        
            $email_message .= "Name: ".clean_string($name)."\n";
            $email_message .= "Company Name: ".clean_string($company_name)."\n";
            $email_message .= "Number: ".clean_string($number)."\n";
            $email_message .= "Email: ".clean_string($email)."\n";
            $email_message .= "Message: ".clean_string($message)."\n";
        
            // create email headers
            $headers = 'From: '.$email."\r\n".
            'Reply-To: '.$email."\r\n" .
            'X-Mailer: PHP/' . phpversion();
            mail($email_to, $email_subject, $email_message, $headers);
    
            echo '<div class="alert alert-success" role="alert">';
            echo "You message has been sent successfully.<br />";
            echo '</div>';
        }
    
    
    endif;
}