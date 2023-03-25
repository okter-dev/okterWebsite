<?php
$page = basename($_SERVER["PHP_SELF"]);
?>

<header>
    <a href="index.php" style="height: fit-content"><img src="img/logosimple40.png"></a>
    <h2 class="big-text"><?php echo $titre ?></h2>
    <nav id="nav">
        <a class="liens" href="<?php echo $page === 'index.php' ? '#' : 'index.php' ?>">Accueil</a>
        <a class="liens" href="<?php echo $page === 'index.php' ? '#' : 'index.php' ?>">Qui sommes-nous ? </a>
        <a class="liens" href="<?php echo $page === 'solutions.php' ? '#' : 'solutions.php' ?>">Nos solution !</a>
        <a class="liens" href="<?php echo $page === 'contact.php' ? '#' : 'contact.php' ?>">Nous contacter</a>
    </nav>
    <div class="burger-content" id="burger"></div>
    <div class="filter" id="filter"></div>
</header>