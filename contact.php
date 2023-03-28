<?php
if (isset($_POST['title'])){
    echo 'ok';

    $to = "baudrysouvignet07@gmail.com"; // Adresse email du destinataire
    $subject = $_POST['title']; // Sujet de l'email
    $name = $_POST['nom']; // Récupération du nom de l'expéditeur depuis le formulaire
    $email = $_POST['mail']; // Récupération de l'adresse email de l'expéditeur depuis le formulaire
    $message = $_POST['content']; // Récupération du message depuis le formulaire

    // Construction de l'en-tête de l'email
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

    // Construction du corps de l'email
    $body = "<p>Nom: $name</p>";
    $body .= "<p>Email: $email</p>";
    $body .= "<p>Message: $message</p>";

    // Envoi de l'email
    mail($to, $subject, $body, $headers);
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>okter</title>
    <meta name="description" content="Créer un site web de qualité en Haute-Loire ? Notre équipe d'experts en développement web offre des solutions sur mesure pour les particuliers et les entreprises, y compris les PME. Nous sommes spécialisés dans la création de sites web hautement performants et optimisés pour les moteurs de recherche. Contactez-nous dès maintenant pour un site web professionnel et efficace."> <!--description sous la recherche Google-->
    <meta name="author" content="Baudry Souvignet">
    <meta name="author" content="okter">

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/source/footer.css">
    <link rel="stylesheet" href="css/source/header.css">
    <link rel="stylesheet" href="css/contact.css">


    <link rel="stylesheet" href="https://use.typekit.net/xur3ymq.css">
</head>
<body>
<?php
$titre = 'Dites-nous ce dont vous avez besoin !';
require 'source/header.php';
?>

<section class="grid">
    <article class="block title mail">
        <h2 class="big-text bold">Nous écrire</h2>
        <p>
            <a href="mailto: okter.contact@gmail.com ">Mail: <span class="color">okter.contact@gmail.com</span></a>
            <span onclick="window.location.href='#form'">
                Formulaire
                <img src="icons/bigarrow.svg" alt="Fleche pour continuer" style="animation-delay: $temps_bis">
            </span>
        </p>
    </article>

    <form id="form" class="block" action="contact.php" method="post">
        <h2 class="big-text">Votre message</h2>

        <div>
            <label for="name">Votre nom</label>
            <input type="text" placeholder="Nom" name="nom" id="name" required>

            <label for="societe">Votre entreprise</label>
            <input type="text" placeholder="Entreprise" name="societe" id="societe" required>
        </div>
        <div>
            <label for="mail">Votre Email</label>
            <input type="email" placeholder="Email" name="mail" id="mail" required>

            <label for="phone">Votre numero de telepehone</label>
            <input type="text" placeholder="Téléphone (facultatif)" name="phone" id="phone">
        </div>
        <label for="title">Titre</label>
        <input type="text" placeholder="Sujet" name="title" id="title">

        <label for="content">Votre message</label>
        <textarea name="content" id="content" placeholder="Votre message"></textarea>

        <input type="submit" class="button" value="Envoyer">
    </form>

    <article class="block title color">
        <h3 class="big-text">Nos réseaux sociaux </h3>
        <p>
            <a href="">Instagram</a><br>
            <a href="">Linkedin</a><br>
            <a href="">Facebook</a><br>
        </p>
    </article>

    <article class="block title position">
        <h3 class="big-text">Le Puy-En-Velay</h3>
        <p>43000 - Haute-Loire</p>
    </article>
</section>

<?php
include 'source/footer.php';
?>
<script src="js/header.js" ></script>
<script src="js/animation.js" ></script>
</body>
</html>