<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once '../includes/Exception.php';
require_once '../includes/PHPMailer.php';
require_once '../includes/SMTP.php';
// on passe le constructeur a un true parcequ'on gère les exception
$mail = new PHPMailer(true);

// on gère les exceptions donc try catch
try{
    // Configuration
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Je veux des info de debug

    // On configure le SMTP (Simple Mail Transfer Protocol)
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 1025;

    // Charset = utf8
    $mail->CharSet = 'utf-8';

    // Destinataires
    $mail->addAddress("brouette@site.fr");
    $mail->addCC("copie@site.fr");
    $mail->addBCC("copiecachee@site.fr");

    // Expéditeur
    $mail->setFrom("no-reply@site.fr");

    // Contenu
    // si on veut mettre du html
    $mail->isHTML();
    $mail->Subject = "Sujet du message avec caractère accentué";

    $mail->Body = "<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Sed interdum mauris sollicitudin ex molestie fringilla. Sed dui nisi,
    rutrum vitae rhoncus sit amet, auctor non quam. Sed ac justo sit amet
    mi blandit porttitor et efficitur libero. Curabitur pellentesque</strong></p>";

    // pour les personnes qui ont des outils qui ne peuvent pas lire le html
    $mail->AltBody = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Sed interdum mauris sollicitudin ex molestie fringilla. Sed dui nisi,
    rutrum vitae rhoncus sit amet, auctor non quam. Sed ac justo sit amet
    mi blandit porttitor et efficitur libero. Curabitur pellentesque";
    // on envoie
    $mail->send();
    echo "message envoyé";
}
catch(Exception $e){
    echo "Message non envoyé. Erreur; {$mail->ErrorInfo}";
}

?>