<?php

$table = [
    ['titre'=>"3 solutions pour se concentrer avec vous sur l'essentiel", 'article' => "Nous cultivons l'expertise et l'excellence pour vous offrir le meilleur service possible.", 'color'=>'white'],
    ['titre'=>'Site primaire', 'article' => "Imaginez votre petite société décollant sur la toile, mais votre présence en ligne ne reflète pas l'unicité de votre marque. Nous sommes là pour vous aider à réaliser le site web qu'elle mérite, sans compromis sur la qualité et le design.", 'color'=>'main-color'],
    ['titre'=>'Site vitrine', 'article' => "Votre entreprise est le fruit d'une création minutieuse et unique. Pour la distinguer dans le monde en ligne et captiver les visiteurs, il est important de lui offrir une site à la hauteur. Donnez lui la chance de briller.", 'color'=>'black'],
    ['titre'=>'Site intéractif', 'article' => "Imaginez-vous en train de naviguer sur un site web où chaque clic vous transporte dans un univers interactif et surprenant. Offrez à vos utilisateurs l'expérience ultime qu'ils méritent.", 'color'=>'secondary-color']
];


$table_approches = [
    ['titre'=>"Des conseil stratégique et un design créatif", 'article' => "Nous vous proposons des solutions innovantes en conseil stratégique et design, pour vous  aider à définir vos besoins et atteindre ces objectifs avec une vision  claire."],
    ['titre'=>'Une approche personnalisée, pour des projets uniques', 'article' => "Nous vous proposons des solutions innovantes en conseil stratégique et design, pour vous  aider à définir vos besoins et atteindre ces objectifs avec une vision  claire."]
];

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
    <link rel="stylesheet" href="css/solution.css">


    <link rel="stylesheet" href="https://use.typekit.net/xur3ymq.css">
</head>
<body>
<?php
$titre = 'Notre expertise dédié à vos besoins !';
require 'source/header.php';
?>

<section class="grid top anim">
    <?php
    $nbr = 0;
    foreach ($table as $block){
        $className = 'block_'.$nbr;
        $animation = $nbr * 0.6;
        $title = $block['color'] === 'white' ?
            "<h1 class='big-text bold'>{$block['titre']}</h1>" :
            "<h3 class='big-text'><span>0$nbr - </span>{$block['titre']}</h3>";

        $nbr++;
        echo <<<HTML
            <article class="block title $className" >
                $title
                <p>{$block['article']}</p>
            </article>
        HTML;

    }

    $lenTable = count ($table);
    for ($i = 1; $i < $lenTable; $i++){
        $className = 'number_'.$i;
        echo <<<HTML
            <article class="block number $className">
                <span style="color: var(--{$table[$i]['color']});">0$i</span>
            </article>
        HTML;
    }

    ?>
    
</section>



<section class="grid bottom anim">
    <div class="img block"></div>

    <article class="block title head">
        <h2 class="big-text bold">Découvrez ce que nous pouvons faire pour vous&nbsp;!</h2>
    </article>

    <?php

    $nbr = 1;
    foreach ($table_approches as $data){
        $className = 'bigcontent_'.$nbr;
        $nbr++;
        echo <<<HTML
            <div class="big_content $className">
                <article class="block title"><h2 class="big-text">{$data['titre']}</h2><p style="display: none">{$data['article']}</p></article>
                <article class="block text"><p>{$data['article']}</p></article>
            </div>
        HTML;

    }

    ?>
    <article class="block title color">
        <h3 class="big-text">Une approche personnalisée pour des projets uniques&nbsp;!</h3>
        <p>Nous vous proposons des solutions innovantes en conseil stratégique et design, pour vous  aider à d.</p>
    </article>
    
    <div class="block button">
        <a href="contact.php">
            <p>Nous contacter</p>
            <img src="icons/bigarrow.svg" alt="Fleche pour continuer">
        </a>
    </div>

</section>

<?php
include 'source/footer.php';
?>
<script src="js/header.js" ></script>
<script src="js/animation.js" ></script>
</body>
</html>