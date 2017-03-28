<?php

require_once('phpmailer/class.phpmailer.php');

$mail = new PHPMailer();

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	if( $_POST['quick-contact-form-name'] != '' AND $_POST['quick-contact-form-email'] != '' AND $_POST['quick-contact-form-message'] != '' ) {

		$name = $_POST['quick-contact-form-name'];
		$email = $_POST['quick-contact-form-email'];
		$message = $_POST['quick-contact-form-message'];

		$subject = 'Sito AUSISEGUR | Nuova richiesta preventivo';

		$botcheck = $_POST['quick-contact-form-botcheck'];

		$toemail = 'matteo@asten.it'; // Your Email Address
		$toname = 'Matteo | Asten Srl'; // Your Name

		if( $botcheck == '' ) {

			$mail->SetFrom( $email , $name );
			$mail->AddReplyTo( $toemail , $toname );
			$mail->AddAddress( $toemail , $toname );
			$mail->Subject = $subject;

			$name = isset($name) ? "Nome: $name<br><br>" : '';
			$email = isset($email) ? "E-mail: $email<br><br>" : '';
			$message = isset($message) ? "Messaggio: $message<br><br>" : '';

			$referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>Mail ricevuta da: ' . $_SERVER['HTTP_REFERER'] : '';

			$body = "$name $email $message $referrer";

			$mail->MsgHTML( $body );
			$sendEmail = $mail->Send();

			if( $sendEmail == true ):
				echo 'Messaggio <strong>INVIATO con successo.</strong> Risponderemo nel minor tempo possibile!';
			else:
				echo 'Messaggio <strong>NON inviato</strong> a causa di un errore. Controllare i dati e riprovare.<br /><br /><strong>Motivo:</strong><br />' . $mail->ErrorInfo . '';
			endif;
		} else {
			echo 'Bot <strong>Detected</strong>.! Clean yourself Botster.!';
		}
	} else {
		echo 'Per favore, <strong>completa</strong> tutti i campi necessari e riprova.';
	}
} else {
	echo '<strong>Errore insaspettato.</strong> Riprova.';
}

?>