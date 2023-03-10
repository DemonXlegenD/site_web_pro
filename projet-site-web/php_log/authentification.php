<?php
// Générer un code aléatoire
$code = rand(100000, 999999);

// Paramètres de l'email
$to = 'flahalle28@gmail.com';
$subject = 'Code d\'authentification';
$message = 'Votre code d\'authentification est : ' . $code;
$headers = 'From: flahalle@gaming.tech' . "\r\n" .
           'Reply-To: flahalle@gaming.tech' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Envoyer l'email
if (mail($to, $subject, $message, $headers)) {
    echo 'Le code d\'authentification a été envoyé à votre adresse email.';
} else {
    echo 'Une erreur est survenue lors de l\'envoi du code d\'authentification.';
}
?>