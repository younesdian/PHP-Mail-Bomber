<?php


function sendmail ($reciever_mail, $reciever_name='FILL IN A NAME', $subject='FILL IN A SUBJECT', $mailtemplate='mail.html') {
  for ($i = 0; $i < 100; $i++) {       // Number of mails (now set on 100 e-mails)
    $mail = new PHPMailer;

    $mail->From = 'mail@example.com';   // A custom email address that the reciever will see
    $mail->FromName = 'John Doe';   // A custom name that the reciever will see
    $mail->addAddress($reciever_mail, $reciever_name);

    $mail->isHTML(true);

    $mail->Subject = $subject;

    ob_start();
    include('mailtemplate/'.$mailtemplate);
    $template = ob_get_contents();
    ob_end_clean();

    $mail->Body    = $template;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        echo '<p class="text-danger font-weight-bold">Message could not be sent.</p>';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo '<p class="text-success">Message has been sent</p>';
    }
  }
}


?>
