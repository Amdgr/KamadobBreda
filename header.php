<header class="site-header">
    <div class="site-header-inner">
        <a class="site-brand" href="index.php" aria-label="KamadoBreda - home">
            <img src="img/logo.png" alt="KamadoBreda">
        </a>
        <nav class="site-nav" aria-label="Hoofdnavigatie">
            <a href="index.php" <?php if (basename($_SERVER['SCRIPT_NAME']) === 'index.php') echo 'aria-current="page"'; ?>>Home</a>
            <a href="products.php" <?php if (basename($_SERVER['SCRIPT_NAME']) === 'products.php') echo 'aria-current="page"'; ?>>Producten</a>
            <a href="masterclass.php" <?php if (basename($_SERVER['SCRIPT_NAME']) === 'masterclass.php') echo 'aria-current="page"'; ?>>Masterclass</a>
        </nav>
    </div>
</header>
