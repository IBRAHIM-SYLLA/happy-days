<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once '../includes/Exception.php';
require_once '../includes/PHPMailer.php';
require_once '../includes/SMTP.php';

    function security($data){
        //trim permet de supprimer les espaces inutiles
        $data = trim($data);
        //stripslashes supprimes les antishlashs
        $data = stripslashes($data);
        //htmlspecialchars permet d'échapper certains caractéres spéciaux et les transforment en entité HTML
        $data = htmlspecialchars($data);
        return $data;
    }

    function sendMail($email, $prenom){

        // on passe le constructeur a un true parcequ'on gère les exception
        $mail = new PHPMailer(true);

        // on gère les exceptions donc try catch
        try{
            // Configuration
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Je veux des info de debug

            // On configure le SMTP (Simple Mail Transfer Protocol)
            $mail->isSMTP();
            $mail->Host = 'localhost';
            $mail->Port = 1025;

            // Charset = utf8
            $mail->CharSet = 'utf-8';

            // Destinataires
            $mail->addAddress($email);
            $mail->addCC("copie@site.fr");
            $mail->addBCC("copiecachee@site.fr");

            // Expéditeur
            $mail->setFrom("no-reply@site.fr");

            // Contenu
            // si on veut mettre du html
            $mail->isHTML();
            $mail->Subject = "Bienvenue";

            $mail->Body = "<p><strong>".$prenom." "."Merci d'avoir adhérer a l'association. A bientôt !</strong></p>";

            // pour les personnes qui ont des outils qui ne peuvent pas lire le html
            $mail->AltBody = $prenom."Merci d'avoir adhérer a l'association. A bientôt !";
            // on envoie
            $mail->send();
            echo "message envoyé";
        }
        catch(Exception $e){
            echo "Message non envoyé. Erreur; {$mail->ErrorInfo}";
        }
    }


    function sendMailEvent($AllEmail, $nameEvent, $dateEvent){

        // on passe le constructeur a un true parcequ'on gère les exception
        $mail = new PHPMailer(true);

        // on gère les exceptions donc try catch
        try{
            // Configuration
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Je veux des info de debug

            // On configure le SMTP (Simple Mail Transfer Protocol)
            $mail->isSMTP();
            $mail->Host = 'localhost';
            $mail->Port = 1025;

            // Charset = utf8
            $mail->CharSet = 'utf-8';

            // Destinataires
            $mail->addAddress($AllEmail);
            $mail->addCC("copie@site.fr");
            $mail->addBCC("copiecachee@site.fr");

            // Expéditeur
            $mail->setFrom("no-reply@site.fr");

            // Contenu
            // si on veut mettre du html
            $mail->isHTML();
            $mail->Subject = "Nouvelle évènement !";

            $mail->Body = "<p><strong>Chère adhérent, nous vous annonçons notre nouvel
            évènement:" .$nameEvent." "."qui aura lieu le ".$dateEvent."</strong></p>";

            // pour les personnes qui ont des outils qui ne peuvent pas lire le html
            $mail->AltBody = "Chère adhérent, nous vous annonçons notre nouvel
            évènement:" .$nameEvent." "."qui aura lieu le ".$dateEvent;
            // on envoie
            $mail->send();
            echo "message envoyé";
        }
        catch(Exception $e){
            echo "Message non envoyé. Erreur; {$mail->ErrorInfo}";
        }
    }

?>