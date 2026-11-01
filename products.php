<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten | KamadoBreda</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="products-page">
    <section class="site-hero">
        <?php require_once __DIR__ . '/header.php'; ?>
        <main class="hero-content products-content">
            <h1>Onze producten</h1>
            <p>Bekijk ons assortiment kamado’s.</p>
        </main>
    </section>
    <?php
    // Laad de productgegevens uit het aparte bestand.
    require __DIR__ . '/product-catalog.php';
    ?>
    <main class="products-list">
        <h2>Ons assortiment</h2>
        <section class="products-grid" aria-label="Kamado assortiment">
            <?php foreach ($products as $id => $product) { ?>
                <a class="product-card" href="product.php?id=<?php echo htmlspecialchars($id, ENT_QUOTES, 'UTF-8'); ?>">
                    <img src="<?php echo htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($product['alt'], ENT_QUOTES, 'UTF-8'); ?>">
                    <div class="product-details">
                        <h3><?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="product-card-price">€ <?php echo number_format($product['price'], 2, ',', '.'); ?></p>
                    </div>
                </a>
            <?php } ?>
        </section>
    </main>
    <?php require_once __DIR__ . '/footer.php'; ?>
</body>
</html>
