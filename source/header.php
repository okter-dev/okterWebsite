<?php
$page = basename($_SERVER["PHP_SELF"]);
?>

<header>
    <a href="./" style="height: fit-content"><img src="img/logosimple40.png" alt="logo de la marque OKter"></a>
    <h2 class="big-text"><?php echo $titre ?></h2>
    <nav id="nav">
        <a class="liens link_js_header" href="<?php echo $page === 'apropos' ? '#' : 'apropos' ?>">Qui sommes-nous ? </a>
        <a class="liens link_js_header" href="<?php echo $page === 'solutions' ? '#' : 'solutions' ?>">Nos solution !</a>
        <a class="liens link_js_header" href="<?php echo $page === 'contact' ? '#' : 'contact' ?>">Nous contacter</a>
    </nav>
    <div class="burger-content" id="burger"></div>
    <div class="filter" id="filter"></div>
</header>