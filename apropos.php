<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>okter</title>
    <meta name="description" content="Découvrez Okter, une agence web passionnée et expérimentée située au Puy-en-Velay. Rencontrez notre équipe et apprenez-en davantage sur notre engagement à fournir des solutions web innovantes et de qualité.">
    <meta name="author" content="Baudry Souvignet">
    <meta name="author" content="okter">

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/source/header.css">
    <link rel="stylesheet" href="css/source/footer.css">
    <link rel="stylesheet" href="css/equipes.css">

    <link rel="icon" href="img/logosimple40.ico" />
    <link rel="stylesheet" href="https://use.typekit.net/xur3ymq.css">
</head>
<body id="body">
<?php
$titre = 'Découvrez l’univers Okter';
include 'source/header.php';
?>

<section class="grid">
    <article class="title block">
        <h1 class="big-text bold">L'aventure Okter, au service de votre succès</h1>
        <p>Notre agence web située au Puy-en-Velay propose des solutions personnalisées pour booster votre présence en ligne.</p>
    </article>

    <div class="img"></div>

    <article class="block text">
        <p>Okter est née d'une vision audacieuse : devenir un acteur incontournable du développement web, en combinant expertise technique et créativité débridée. Guidée par cette ambition, nous nous engageons à concrétiser vos projets numériques en créant des expériences utilisateur mémorables et en vous accompagnant vers de nouveaux horizons.</p>
    </article>

    <?php
        $text = "L’innovation, la passion et la collaboration forment le trio harmonieux qui guide notre quête d'excellence. Ensemble, elles nous inspirent à créer des solutions audacieuses, à dépasser les attentes et à tisser des liens durables avec nos clients. C'est ainsi que nous écrivons nos plus belles réussites.";
    ?>

    <article class="title block longue">
        <h2 class="big-text">Trois valeurs guident notre quête d'excellence</h2>
        <p><?php echo $text ?></p>
    </article>

    <article class="block text long_text">
        <p><?php echo $text ?></p>
    </article>

</section>

<button class="bigbutton" onclick="window.location.href = 'solutions.php'">
    <p>Découvrer nos solutions, pour résoudres vos problématiques</p>
</button>

<?php
include 'source/footer.php';
?>

<script src="js/header.js" async ></script>
</body>
</html>