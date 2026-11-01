<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masterclass | KamadoBreda</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="masterclass-page">
    <section class="site-hero">
        <?php require_once __DIR__ . '/header.php'; ?>
        <main class="hero-content masterclass-content">
            <h1>Goed vuur, goed gezelschap</h1>
            <p>Ontdek wat je allemaal kunt maken op de kamado.</p>
        </main>
    </section>
    <main class="masterclass-signup">
        <section class="masterclass-intro" aria-labelledby="masterclass-title">
            <p class="masterclass-eyebrow">Van aansteken tot aanschuiven</p>
            <h2 id="masterclass-title">Schuif aan bij de kamado</h2>
            <p>
                Zin om meer uit je BBQ te halen? Tijdens onze masterclass leer je
                de kamado echt kennen, ontdek je nieuwe smaken en steken we samen
                iets lekkers op het vuur. Je hoeft geen BBQ-expert te zijn:
                nieuwsgierigheid en trek zijn genoeg.
            </p>
            <p class="masterclass-invitation">Laat je gegevens achter, dan nemen we contact met je op.</p>
        </section>
        <form class="masterclass-form" method="post" aria-label="Aanmelden voor de masterclass">
            <h2 class="masterclass-form-title">Schuif je aan?</h2>
            <div class="masterclass-form-field">
                <label for="masterclass-name">Naam</label>
                <input id="masterclass-name" name="name" type="text" autocomplete="name" required>
            </div>
            <div class="masterclass-form-field">
                <div class="masterclass-age-label">
                    <label for="masterclass-age">Leeftijd</label>
                    <details class="masterclass-age-help">
                        <summary aria-label="Waarom vragen we naar je leeftijd?">?</summary>
                        <div class="masterclass-age-help-content">
                            <h3>Waarom willen wij dit weten?</h3>
                            <p>We gebruiken je leeftijd om, waar mogelijk, passende cursusgroepen samen te stellen met deelnemers van vergelijkbare leeftijd.</p>
                        </div>
                    </details>
                </div>
                <input id="masterclass-age" name="age" type="number" min="1" max="120" inputmode="numeric" required>
            </div>
            <div class="masterclass-form-field">
                <label for="masterclass-email">E-mailadres</label>
                <input id="masterclass-email" name="email" type="email" autocomplete="email" required>
            </div>
            <button class="masterclass-submit" type="submit">Ik heb interesse <span aria-hidden="true">→</span></button>
        </form>
    </main>
    <?php require_once __DIR__ . '/footer.php'; ?>
</body>
</html>
