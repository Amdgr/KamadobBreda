<?php
// Gebruik dit menu op elke pagina met: require_once __DIR__ . '/header.php';
$currentPage = basename($_SERVER['SCRIPT_NAME']);
?>
<header class="site-header">
    <div class="site-header-inner">
        <a class="site-brand" href="index.php" aria-label="KamadoBreda - home">
            <img src="img/logo.png" alt="KamadoBreda">
        </a>
        <nav class="site-nav" aria-label="Hoofdnavigatie">
            <a href="index.php" <?php if ($currentPage === 'index.php') { echo 'aria-current="page"'; } ?>>Home</a>
            <a href="products.php" <?php if ($currentPage === 'products.php') { echo 'aria-current="page"'; } ?>>Producten</a>
            <a href="masterclass.php" <?php if ($currentPage === 'masterclass.php') { echo 'aria-current="page"'; } ?>>Masterclass</a>
        </nav>
    </div>
</header>
