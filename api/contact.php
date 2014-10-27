<?php 
 require_once($_SERVER['DOCUMENT_ROOT'].'/classes/class.phpmailer.php');

//change settings here
$your_email = "matt@dentstudios.com";
		
$mail = new PHPMailer(); // defaults to using php "mail()"

$body = 'You have recieved a contact from the site. <br/> Name: '.$_REQUEST['n'].'<br/>Email: '.$_REQUEST['e'].'<br/>'.$_REQUEST['m'];

$mail->SetFrom($your_email, 'Pratt and Hart');

$mail->AddReplyTo($your_email,"Pratt and Hart");

$address =$_REQUEST['e'];

$mail->AddAddress($address, $_REQUEST['e']);

$mail->Subject    = 'Contact from website';

$mail->MsgHTML($body);


if(!$mail->Send()) {
				  //echo "Mailer Error: " . $mail->ErrorInfo;
 $Response = array('msg'=>'Email Error');

} else {
	
  $Response = array('msg'=>'Email sent', 'name'=>$_REQUEST['n'], 'email'=>$_REQUEST['e']);
}

echo json_encode($Response);			

?>