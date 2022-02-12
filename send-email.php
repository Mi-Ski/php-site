<?php 
	require 'vendor/autoload.php';

	// class SendMail {

	// 	public static function SendMail($to, $subject, $content) {
	// 		$key = "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";

	// 		$email = new \SendGrid\Mail\Mail();
	// 		$email->setFrom("skibamichal07@gmail.com", "Michal S");
	// 		$email->setSubject($subject);
	// 		$email->addTo($to);
	// 		$email->addContent('text/plain', $content);

	// 		$sendgrid = new \SendGrid($key);

	// 		try{
	// 			$response = $sendgrid->send($email);	
	// 			return $response;
	// 		}catch(Exception $e) {
	// 			echo 'email exception: ' . $e->getMessage();
	// 			return false;
	// 		}
	// 	}
	// }
?>