<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KamadoBreda</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="home-page">
    <section class="site-hero">
        <?php require_once __DIR__ . '/header.php'; ?>
        <main class="hero-content">
            <h1>Welkom bij KamadoBreda</h1>
            <p>Ontdek onze kamado's en accessoires.</p>
        </main>
    </section>
    <?php
    // Laad de productgegevens uit het aparte bestand.
    require __DIR__ . '/product-catalog.php';
    ?>
    <main class="home-products">
        <div class="section-heading">
            <h2>Uitgelicht assortiment</h2>
            <a class="catalog-link" href="products.php">Bekijk het gehele assortiment</a>
        </div>
        <section class="products-grid" aria-label="Uitgelichte kamado's">
            <?php foreach ($products as $id => $product) { ?>
                <?php // Toon alleen kamado's waarbij featured op true staat. ?>
                <?php if ($product['featured']) { ?>
                    <a class="product-card" href="product.php?id=<?php echo htmlspecialchars($id, ENT_QUOTES, 'UTF-8'); ?>">
                        <img src="<?php echo htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($product['alt'], ENT_QUOTES, 'UTF-8'); ?>">
                        <div class="product-details">
                            <h3><?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p class="product-card-price">€ <?php echo number_format($product['price'], 2, ',', '.'); ?></p>
                        </div>
                    </a>
                <?php } ?>
            <?php } ?>
        </section>
    </main>
    <section class="bbq-promo" aria-labelledby="bbq-promo-title">
        <h2 id="bbq-promo-title">Word de BBQ-master van jouw buurt!</h2>
        <a class="bbq-promo-link" href="masterclass.php">Bekijk de masterclass <span aria-hidden="true">→</span></a>
    </section>
    <?php require_once __DIR__ . '/footer.php'; ?>
</body>
</html>