<?php
       $email = $_POST['email'];
       $first_name = $_POST['first_name'];
       $last_name = $_POST['last_name'];
       $comments = $_POST['comments'];
       $human_check = ( strtolower($_POST['human_check']) === 'yes' ) ? 'Yes' : 'No';
       
       //where the email will be sent to.
       //to send to multiple addresses, separate each with a comma
       $to = "aaronedwards938@gmail.com, " . $email;
       $subject = "Aaron Edwards Portfolio Contact Form";
	   $message ="<html><body><h1>$subject</h1>";
       $message .= "<p>Thank you for contacting me. You will receive a response shortly! Below is the information you provided:</p>\n\n";
       $message .= "<p>First Name: {$first_name}</p> \n\n";
       $message .= "<p>Last Name: {$last_name}</p> \n\n";
       $message .= "<p>Email: {$email}</p> \n\n";
       $message .= "<p>Comments: {$comments}</p> \n\n";
	   $message .="</body></html>";//close body close html
	   
	   $headers="MIME-Version: 1.0\r\n";
//hey, recieving end (gmail)! this email complies with the standard called MIME
$headers.="Content-type:text/html;charset=utf-8\r\n";
//within the MIME standard, this email is: html formatted, and using utf-8
$fullName="$first_name $last_name";
//create a var that has the full name of the user. ex: Joe Smith
//$headers.="From: $fullName<$email>";
$headers.="From: $fullName <dontreply@aaronarts.com>";
//so now we can compose a "from". ex: Joe Smith, likned to the email they filled up in the form.the "from" is needed to: replyto, and so it doesnt end up in spam.
    
	
      if (isset($_POST['human_check'])&&($_POST["human_check"] == "yes"))  {
       $mail_sent = @mail( $to, $subject, $message, $headers );
	  }
	  
       if($mail_sent)
       {
       print "Thank you $first_name for contacting me! I look forward to working with you! \n\n";
	   echo "Here is what you sent. \n\n";
	   echo "Your Name: $fullName \n\n";
	   echo "Your Email: $email \n\n";
	   echo "Comments: $comments \n\n";
       } 
	   
	   else {
       print "An error occurred while sending the email.";
       }
?>