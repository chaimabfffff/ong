<?php
    // Votre adresse email
    $destinataire = 'chaimajasmine@gmail.com';

    // Envoyer l'email
    mail($destinataire, 'Nouveau message de votre site web', 'Quelqu\'un a cliqué sur le bouton Image de votre site web.');

    // Redirection vers la page d'accueil après l'envoi
    header('Location: index.html');
?>