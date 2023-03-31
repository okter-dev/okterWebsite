<?php
/*if (isset($_POST['title'])){$to = "contact.okter@gmail.com"; $subject = $_POST['title']; $societe = $_POST['societe']; $tel = $_POST['phone']; $name = $_POST['nom']; $email = $_POST['mail']; $message = $_POST['content']; $headers = "From: $name <$email>" . "\r\n"; $headers .= "Reply-To: $email" . "\r\n"; $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n"; $body = "<p>Nom: $name</p>"; $body .= "<p>Email: $email</p>"; $body .= "<p>Societe: $societe</p>"; $body .= "<p>telephone: $tel</p>"; $body .= "<p>Message: $message</p>"; if (mail($to, $subject, $body, $headers)){echo 'ok';} } */


if(isset($_POST['title'])) {
    ini_set("SMTP","smtp.gmail.com");
    ini_set("smtp_port","587");
    ini_set("sendmail_from","okter.backup@gmail.com");
    ini_set("auth_username","okter.backup@gmail.com");
    ini_set("auth_password","nWp7oMWLLxMc5Z3");
    ini_set("ssl","tls");

    $to = "okter.backup@gmail.com";
    $subject = $_POST['title'];
    $message = "Contenu de l'e-mail";
    $headers = "De : votreadresse@gmail.com";

    if(mail($to, $subject, $message, $headers)) {
        echo "E-mail envoyé avec succès à " . $to;
    } else {
        echo "Erreur : impossible d'envoyer l'e-mail.";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>okter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Okter - Agence web spécialisée dans la création de sites web et d'expériences web au Puy-en-Velay. Offrez à votre entreprise une présence en ligne exceptionnelle grâce à nos solutions personnalisées.">
    <meta name="author" content="Baudry Souvignet">
    <meta name="author" content="okter">

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/source/footer.css">
    <link rel="stylesheet" href="css/source/header.css">

    <link rel="icon" href="img/logosimple40.ico" />
    <link rel="stylesheet" href="https://use.typekit.net/xur3ymq.css"
</head>
<body>
<?php
$titre = 'Bienvenue chez Okter'; include 'source/header.php'; ?>
<section class="grid">

    <article class="block title frst">
        <h1 class="big-text bold">Nous proposons bien plus qu’un site</h1>
        <p>En façonnant des expériences inédites, enchanteresses et mémorables.</p>
    </article>

    <div class="img"></div>

    <?php $text = "Innover est notre essence même, une quête constante qui oriente nos réalisations. Notre ambition est de faire briller votre projet en le distinguant par une touche singulière. Implanté au cœur du Puy-en-Velay, nos créations poursuivent un objectif clair : atteindre et marquer les esprits."?>
    <article class="block black">
        <h2 class="big-text" style="background-color: unset!important;">Des sites conçus pour vous, pensés pour tous.</h2>
        <p><?php echo $text ?></p>
    </article>

    <article class="block text">
        <p><?php echo $text ?></p>
    </article>

    <nav class="block nav">
        <?php
        $datas = ["apropos.php"=>"Qui sommes-nous&nbsp;?", "solutions.php"=>"Nos solutions&nbsp;?", "contact.php"=>"Nous contacter&nbsp;!"]; $count = 0; foreach ($datas as $key => $data){ $temps = '1.'. $count* 2 .'s'; $temps_bis = 2 - $count * 0.1 .'s'; $count++; echo <<<HTML
                <a href="$key">
                    <h3 class="big-text" style="animation-delay: $temps">$data</h3>
                    <img src="icons/bigarrow.svg" alt="Fleche pour continuer" style="animation-delay: $temps_bis">
                </a>
            HTML;

        }

        ?>

    </nav>

    <article class="block logo">
        <img src="img/logo80.png" alt="logo de la société">
    </article>
</section>
<?php
include 'source/footer.php';
?>
<script src="js/header.js"  async ></script>


</body>
</html>