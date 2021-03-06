<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="-w3rSC-3hGGFY_nTlt92uHxnVqfDz4lMTQgVDmoWPGk"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warm Ukrainian Manufacture</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#EBB089">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#EBB089">
    <link rel="icon" href="/images/favicon/favicon.ico" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <svg viewBox="0 0 280 280" xmlns="http://www.w3.org/2000/svg">
                <title>logo</title>
                <path d="M177.975439,199.033003 L144.074967,173.561257 L111.367693,199.166624
            L15.2710187,83.8409157 L24.4899918,76.1590843 L113.135569,182.542725 L143.925033,158.438743
            L176.182978,182.676346 L267.44248,76.0975631 L276.55752,83.9024369 L177.975439,199.033003 Z
            M1.3900041,95.6871154 L143.00272,272.204374 L286.612144,95.6844563 L287.387856,96.3155437
            L142.99728,273.795626 L0.609995899,96.3128846 L1.3900041,95.6871154 Z M143.913976,13.8794452
            L143.913976,13.8794452 L123.396954,1.42743771 L123.915787,0.572562294 L144.88512,13.2990821
            L166.183841,0.570801225 L166.696826,1.42919878 L145.852279,13.8860617 L232.663189,66.5725623
            L232.144356,67.4274377 L144.881135,14.4664248 L56.2564925,67.4291988 L55.7435075,66.5708012
            L143.913976,13.8794452 Z" id="Logo-Shape"></path>
            </svg>
        </div>
        <div class="header__title">
            <h1>WUM</h1>
            <h3>Warm Ukrainian Manufacture</h3>
        </div>
    </header>
    <main>
        <h2>Найтепліший українский магазин зігріватиме Вас вже зовсім скоро!</h2>
        <span class="divider"></span>
        <p>Ми з нетерпінням чеємо відкриття та дуже ретельного готуємося до цого дня. Ми цінуємо кожного відвідувача
            та кожну думку. Щоб слідуквати за нашими новинами або поділитися своїми ідеями, залиште свій email,
            ми обов’язкого з Вами зв’яжемося!</p>

        <form action="subscribe.php" method="post">
            <?php if (isset($_GET['subscribed'])) {?>
                <p class="success">Ваша електронна адреса успішно додана. Дякуємо!</p>
            <?php } ?>
            <input type="text" name="email" placeholder="some@mail.com">
            <button type="submit">Надіслати</button>
        </form>
    </main>
    <footer>
        <span class="social facebook"></span>
        <span class="social twitter"></span>
        <span class="social instagram"></span>
    </footer>
</body>
</html>