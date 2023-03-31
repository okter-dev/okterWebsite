


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>okter</title>
    <meta name="description" content="Contactez Okter, votre agence web au Puy-en-Velay, pour discuter de vos besoins en matière de création de site web et d'expériences web. N'hésitez pas à nous envoyer un message ou à nous appeler pour planifier un rendez-vous.">
    <meta name="author" content="Baudry Souvignet">
    <meta name="author" content="okter">

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/source/footer.css">
    <link rel="stylesheet" href="css/source/header.css">
    <link rel="stylesheet" href="css/contact.css">

    <link rel="icon" href="img/logosimple40.ico" />
    <link rel="stylesheet" href="https://use.typekit.net/xur3ymq.css">
</head>
<body>
<?php
$titre = 'Dites-nous ce dont vous avez besoin !'; require 'source/header.php'; ?>

<section class="grid">
    <article class="block title mail">
        <h2 class="big-text bold">Nous écrire</h2>
        <p>
            <a href="mailto: contact.okter@gmail.com ">Mail: <span class="color">contact.okter@gmail.com</span></a>
            <span onclick="window.location.href='#form'">
                Formulaire
                <img src="icons/bigarrow.svg" alt="Fleche pour continuer" style="animation-delay: $temps_bis">
            </span>
        </p>
    </article>

    <form id="form" class="block" action="./" method="post">
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
        <a href="https://www.instagram.com/okter.fr/"><h3 style="text-decoration: underline" class="big-text">Instagram </h3></a>
        <p>
            Instagram nous permet de partager nos projets, nos inspirations et de créer des liens forts avec des acteurs émergents dans le domaine du web.</p>

    </article>

    <article class="block title position">
        <h3 class="big-text">Le Puy-En-Velay</h3>
        <p>43000 - Haute-Loire</p>
    </article>
</section>

<?php
include 'source/footer.php'; ?>
<script src="js/header.js"  async ></script>
</body>
</html>