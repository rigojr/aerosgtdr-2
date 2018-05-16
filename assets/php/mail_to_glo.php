<?php
if ($_POST['g-recaptcha-response']!='') {

	$email_to = "rigojr@aeros.io ";
	$email_subject = $_POST['InputNombre']."\t from ". $_POST['InputEmail1'];
	
	$email_message .= "Nombre: " . $_POST['InputNombre'] . "\n";
	$email_message .= "eMail: " . $_POST['InputEmail1'] . "\n";
	$email_message .= "Comentarios: " . $_POST['exampleFormControlTextarea1']. "\n";
	
	$headers = 'From: rigojr@aeros.io\r\n'.
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);
}else{
}
?>