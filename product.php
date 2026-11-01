<?php
// Laad de kamado's zodat we de juiste kunnen opzoeken.
require __DIR__ . '/product-catalog.php';

// Haal de ID uit de URL, bijvoorbeeld product.php?id=cream-kamado.
$productId = '';
if (isset($_GET['id']) && is_string($_GET['id'])) {
    $productId = $_GET['id'];
}

// Zoek de kamado die bij deze ID hoort.
$product = null;
if (isset($products[$productId])) {
    $product = $products[$productId];
}

// Bereid de tekst voor de pagina voor.
if ($product === null) {
    http_response_code(404);
    $pageTitle = 'Product niet gevonden | KamadoBreda';
    $productName = '';
    $productImage = '';
    $productAlt = '';
    $productDescription = '';
    $productPrice = '';
} else {
    $pageTitle = htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') . ' | KamadoBreda';
    $productName = htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8');
    $productImage = htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8');
    $productAlt = htmlspecialchars($product['alt'], ENT_QUOTES, 'UTF-8');
    $productDescription = htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8');
    $productPrice = number_format($product['price'], 2, ',', '.');
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="product-page">
    <section class="site-hero">
        <?php require_once __DIR__ . '/header.php'; ?>
    </section>
    <main class="product-detail">
        <a class="product-back-link" href="products.php">← Alle kamado's</a>
        <?php if ($product !== null) { ?>
            <div class="product-photo">
                <img class="product-detail-image" src="<?php echo $productImage; ?>" alt="<?php echo $productAlt; ?>">
                <p class="product-photo-note">KamadoBreda <span>•</span> Buiten koken</p>
            </div>
            <div class="product-detail-info">
                <p class="product-detail-label">Uit de KamadoBreda collectie</p>
                <h1><?php echo $productName; ?></h1>
                <p class="product-description"><?php echo $productDescription; ?></p>
                <div class="product-purchase">
                    <div class="product-price-row">
                        <span>Prijs</span>
                        <p class="product-detail-price">€ <?php echo $productPrice; ?></p>
                    </div>
                    <button class="buy-button" type="button">Kopen</button>
                    <p class="buy-note">De bestelknop is nog niet actief.</p>
                </div>
            </div>
        <?php } else { ?>
            <div class="product-not-found">
                <h1>Deze kamado is niet gevonden</h1>
                <p>Kies een kamado uit ons assortiment om de informatie te bekijken.</p>
                <a class="catalog-link" href="products.php">Bekijk alle kamado's</a>
            </div>
        <?php } ?>
    </main>
    <?php require_once __DIR__ . '/footer.php'; ?>
</body>
</html>
