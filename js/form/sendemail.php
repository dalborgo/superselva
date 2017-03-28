<?php

require_once('phpmailer/class.phpmailer.php');

$mail = new PHPMailer();

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if( $_POST['template-contactform-name'] != '' AND $_POST['template-contactform-email'] != '' AND $_POST['template-contactform-message'] != '' ) {

        $name = $_POST['template-contactform-name'];
        $email = $_POST['template-contactform-email'];
        $phone = $_POST['template-contactform-phone'];
        $service = $_POST['template-contactform-service'];
        $subject = $_POST['template-contactform-subject'];
        $message = $_POST['template-contactform-message'];

        $subject = isset($subject) ? $subject : 'Sito AUSISEGUR | Nuova richiesta preventivo';

        $botcheck = $_POST['template-contactform-botcheck'];

        $toemail = 'matteo@asten.it'; // Your Email Address
        $toname = 'Matteo | Asten Srl'; // Your Name

        if( $botcheck == '' ) {

            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            $name = isset($name) ? "Nome: $name<br><br>" : '';
            $email = isset($email) ? "E-mail: $email<br><br>" : '';
            $phone = isset($phone) ? "Telefono: $phone<br><br>" : '';
            $service = isset($service) ? "Servizio: $service<br><br>" : '';
            $message = isset($message) ? "Messaggio: $message<br><br>" : '';

            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>Mail ricevuta da: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$name $email $phone $service $message $referrer";

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