<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('laurent.demazy@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], $_POST['email'], 'From: webmaster@monsite.fr');
    if ($retour)
        echo '<p style="color: blue; font-size: 25px;">Votre message a bien &eacute;t&eacute; envoy&eacute;.</p>';
    ?>
</body>
</html>