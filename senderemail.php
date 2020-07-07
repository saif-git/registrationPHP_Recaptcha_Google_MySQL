<?php 

require 'vendor/autoload.php';

class SendEmail{

public static function SendMail($to,$subject,$content){
	$key = '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';
	$email = new \SendGrid\Mail\Mail(); 
     $email->setFrom("saifjuini14@gmail.com", "onetool is email for confirm registration");
     $email->setSubject($subject);
     $email->addTo($to);
     $email->addContent("text/html", $content);
     $sendgrid = new \SendGrid($key);
     try {
     	$response = $sendgrid->send($email);
     	return $response;
     	
     } catch (Exception $e) {
     	echo 'Email is not sending'.$e->getMessage()."\n";
     }

}
}

?>
