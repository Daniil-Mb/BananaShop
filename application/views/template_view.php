<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>BananaShop</title>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header_cap">
                <div class="header__brand">
                    <a href="/main" class="header__name"><img src="img/logo.png" alt="logo" class="header__logo">BananaShop</a>
                </div>
                <a href="/basket" class="header_link"><button class="header_button">Basket</button></a>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <?php include 'application/views/'.$content_view; ?>
        </div>
</main>
<footer class="footer">
    <div class="container">
        <h3 class="footer__text">Best Bananas</h3>
    </div>
    <script src="js/script.js"></script>
</footer>
</div>
</body>
</html>