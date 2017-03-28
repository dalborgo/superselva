<?php
session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

header('Content-type: application/json');

//require 'php-mailer/class.phpmailer.php';

// Your email address
$to = 'marco@dalborgo.it';
//$to = 'info@asten.it';

$subject = 'Mail dal sito';

if($to) {
/*
	$name = $_POST['name'];
	$email = $_POST['email'];
	*/

	$fields = array(
		0 => array(
			'text' => 'Nome e Cognome',
			'val' => $_POST['name']
		),
        1 => array(
			'text' => 'Indirizzo',
			'val' => $_POST['address']
		)
        ,2 => array(
			'text' => 'Nazione',
			'val' => $_POST['nation']
		)
        ,4 => array(
			'text' => 'Telefono',
			'val' => $_POST['phone']
		)
        ,3 => array(
			'text' => 'Email',
			'val' => $_POST['email']
		)
        ,5 => array(
			'text' => 'Fax',
			'val' => $_POST['fax']
		),
		6 => array(
			'text' => 'Prodotto',
			'val' => $_POST['product']
		),
		7 => array(
			'text' => 'Messaggio',
			'val' => $_POST['message']
		)
	);
	
	$message = "";
	
	foreach($fields as $field) {
		$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "\n";
	}

// The message
    $headers = 'From: SuperSelva Srl <noreply@asten.it>' . PHP_EOL .
        'Reply-To: '.$_POST['name'].' <'.$_POST['email'].'>' . PHP_EOL .
        'X-Mailer: PHP/' . phpversion();
// Send
$res=mail($to, $subject, $message, $headers);

//$res=true;
	if(!$res) {
	   $arrResult = array ('response'=>'error');
	}

	$arrResult = array ('response'=>'success');

	echo json_encode($arrResult);
	
} else {

	$arrResult = array ('response'=>'error');
	echo json_encode($arrResult);

}
?>