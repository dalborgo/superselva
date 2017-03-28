<?php

require_once('../phpmailer/class.phpmailer.php');

$mail = new PHPMailer();

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if( $_POST['template-contactform-name'] != '' AND $_POST['template-contactform-email'] != '' AND $_POST['template-contactform-message'] != '' ) {

        $name = $_POST['template-contactform-name'];
        $email = $_POST['template-contactform-email'];
		$riferimento = $_POST['template-contactform-riferimento'];
		$service = $_POST['template-contactform-service'];
		$web = $_POST['template-contactform-web'];
        $durataservizio = $_POST['template-contactform-durataservizio'];
		$phone = $_POST['template-contactform-phone'];
		$fax = $_POST['template-contactform-fax'];
        $personale = $_POST['template-contactform-personale'];
        $subject = $_POST['template-contactform-subject'];
        $message = $_POST['template-contactform-message'];

        $subject = isset($subject) ? $subject : 'Sito SOTTACETI RIZZI | Nuova richiesta di contatto';

        $botcheck = $_POST['template-contactform-botcheck'];

        $toemail = 'matteo@asten.it'; // Your Email Address
        $toname = 'Matteo | Asten Srl'; // Your Name

        if( $botcheck == '' ) {

            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            
			$name = isset($name) ? "Nome e cognomne: $name<br><br>" : '';
			$indirizzo = isset($indirizzo) ? "Indirizzo: $indirizzo<br><br>" : '';
			$nazione = isset($nazione) ? "Nazione: $nazione<br><br>" : '';
			$telefono = isset($telefono) ? "Telefono: $telefono<br><br>" : '';
			$fax = isset($fax) ? "Fax: $fax<br><br>" : '';
			$prodotto = isset($prodotto) ? "Prodotto d'interesse: $prodotto<br><br>" : '';
			$message = isset($message) ? "Messaggio: $message<br><br>" : '';

			$referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>Mail ricevuta da: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$name $indirizzo $nazione $telefono $fax $prodotto
					Messaggio: <br>
					--------------------------<br>
					$message <br>
					-------------------------- <br>
					$referrer";

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