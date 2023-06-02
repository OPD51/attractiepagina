<?php
session_start();
require_once 'admin/backend/config.php';
?>

<!doctype html>
<html lang="nl">

<head>
    <title>Attractiepagina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
</head>

<body>

    <?php require_once 'header.php'; ?>
    <div class="container content">
        <aside>
        <nav>
            <a href="<?php echo $base_url; ?>/index.php">Attracties</a> |
            <a href="<?php echo $base_url; ?>/admin/index.php">Admin</a>
            <?php if(isset($_SESSION['user_id'])): ?>
                | <a href="<?php echo $base_url; ?>/admin/logout.php">Uitloggen</a>
            <?php endif; ?>
        </nav>
        </aside>
        <main>
            <!-- hier komen de attractiekaartjes -->
           <div class="attractie">
            <div class="attractie-card">
                <img src="img/attracties/adger-kang-oiyzr-SgjBY-unsplash.jpg" alt="">
            </div>
            
            <div class="attractie-card-large">
                <img src="img/attracties/alex-kalinin-6gYjwD4s9xk-unsplash.jpg" alt="">
            </div>

            <div class="attractie-card">
                <img src="img/attracties/brandon-hoogenboom-P0MX2XCqbFc-unsplash.jpg" alt="">
            </div>

            <div class="attractie-card">
                <img src="img/attracties/chris-slupski-QLqIqIhMiNs-unsplash.jpg" alt="">
            </div>

            <div class="attractie-card">
                <img src="img/attracties/david-murcia-HbYniDwjbVE-unsplash.jpg" alt="">
            </div>

           <div class="attractie-card">
                <img src="img/attracties/frenjamin-benklin-fiDVCWI9IUI-unsplash.jpg" alt="">
            </div>

            <div class="attractie-card">
                <img src="img/attracties/jason-leung-5ueIeoysAm8-unsplash.jpg" alt="">
            </div>

            <div class="attractie-card">
                <img src="img/attracties/jeriden-villegas-XrDVROYUTOs-unsplash.jpg" alt="">
            </div>

            <div class="attractie-card">
                <img src="img/attracties/laurie-byrne-EtKSaG-PRbY-unsplash.jpg" alt="">
            </div>

            <div class="attractie-card">
                <img src="img/attracties/mahesh-patel-2Qyn5AqktyE-unsplash.jpg" alt="">
            </div>
            <div class="attractie-card">
                <img src="img/attracties/matt-bowden-GZc4fnQsaWQ-unsplash.jpg" alt="">
            </div>
            <div class="attractie-card">
                <img src="img/attracties/parker-johnson-2Zxd7eYd1VA-unsplash.jpg" alt="">
            </div>
            <div class="attractie-card">
                <img src="img/attracties/philipp-potocnik-nmVzQqgl-pc-unsplash.jpg" alt="">
            </div>
            <div class="attractie-card">
                <img src="img/attracties/remy-gieling--RwJveqoRrg-unsplash.jpg" alt="">
            </div>
            <div class="attractie-card">
                <img src="img/attracties/rusty-watson-jlWKDeU83nw-unsplash.jpg" alt="">
            </div>
            <div class="attractie-card">
                <img src="img/attracties/steve-doig-Pm8PTvvEU1w-unsplash.jpg" alt="">
            </div>
            </div>
        </main>
    </div>

</body>

</html>
