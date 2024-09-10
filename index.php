<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hipi szuper Telefon tokok</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }
    </style>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="hero-section">
        <div class="hero-section-content">
            <h1>Gondoskodj telefonod védelméről és stílusáról</h1>
            <h6>Mi olyan telefontokokat biztosítunk amelyek <span class="cyan-span">megvédik</span> telefonodat a fizikai hatásoktól és mégszebbnek mutatják <span class="orange-span">megfizethető</span> áron</h6>
        </div>
    </section>

    <section class="about-section">
        <div class="about-wrapper">
            <h2>Hogy miért mi?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis obcaecati odit veniam, enim est perferendis alias id excepturi ut. Ratione ducimus quae ex quod numquam quisquam, rem nemo! Animi, quisquam.</p>
        </div>
    </section>

    <section class="store-section">
        <h1>Kínálatunk</h1>

        <div class="store-wrapper">
            <div class="store-item">
                <h3 class="store-item-name">Rókás</h3>
                <h6 class="store-item-price">3 990 Ft</h6>
                <a href="?item=fox" class="store-item-button">Tővebben</a>
            </div>
            <div class="store-item">
                <h3 class="store-item-name">Kék sárga levelek</h3>
                <h6 class="store-item-price">3 990 Ft</h6>
                <a href="?item=kek-sarga" class="store-item-button">Tővebben</a>
            </div>
            <div class="store-item">
                <h3 class="store-item-name">Márvány</h3>
                <h6 class="store-item-price">3 990 Ft</h6>
                <a href="?item=marble" class="store-item-button">Tővebben</a>
            </div>
            <div class="store-item">
                <h3 class="store-item-name">Színes ősz</h3>
                <h6 class="store-item-price">3 990 Ft</h6>
                <a href="?item=fall" class="store-item-button">Tővebben</a>
            </div>
        </div>

        <?php
        if (isset($_GET["item"])) {
            include 'pages/' . $_GET["item"] . '.php';
        }
        ?>
    </section>

    <section class="gallery-section">
        <h1>Galéria</h1>

        <div class="gallery-wrapper">
            <?php
            $path = 'assets/cases/';
            if (is_dir($path)) {
                $imgs = scandir($path);

                foreach($imgs as $img) {
                    echo '<img src="' . $path . $img . '" alt=""/>';
                }
            }
            ?>
        </div>
    </section>

    <section class="gallery-section"></section>
</body>
</html>