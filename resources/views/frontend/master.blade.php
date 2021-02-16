<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/grid.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h4><a href="/">Download Games</a></h4>
            </div>
            <ul class="nav-links">
                <li><a href="#"><span><ion-icon name="home"></ion-icon></span>Anasayfa</a></li>
                <li><a href="#"><span><ion-icon name="pencil"></ion-icon></span>Blog</a></li>
                <li><a href="#"><span><ion-icon name="hammer"></ion-icon></span>Araçlar</a></li>
                <li><a href="#"><span><ion-icon name="mail"></ion-icon></span>İletişim</a></li>
            </ul>
        </nav>
        <section class="nav-social">
            <div class="row">
                <ul class="nav-social-links">
                    <li><a href=""><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href=""><ion-icon name="logo-youtube"></ion-icon></a></li>
                    <li><a href=""><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a href=""><ion-icon name="logo-twitter"></ion-icon></a></li>
                </ul>
            </div>
        </section>
    </header>

    @yield('content')

    <footer>
        <div class="footer-main">
            <div class="row">
                <div class="col span-1-of-3">
                    <p class="about">
                        asdads
                    </p>
                </div>
                <div class="col span-1-of-3">
                    <ul class="footer-nav-links">
                        <li><a href="#"><span><ion-icon name="home"></ion-icon></span>Anasayfa</a></li>
                        <li><a href="#"><span><ion-icon name="pencil"></ion-icon></span>Blog</a></li>
                        <li><a href="#"><span><ion-icon name="hammer"></ion-icon></span>Araçlar</a></li>
                        <li><a href="#"><span><ion-icon name="mail"></ion-icon></span>İletişim</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-3">
                    <ul class="footer-social-links">
                    <li><a href=""><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href=""><ion-icon name="logo-youtube"></ion-icon></a></li>
                    <li><a href=""><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a href=""><ion-icon name="logo-twitter"></ion-icon></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-small">
            <div class="row">
                <span>Copyright</span>
            </div>
        </div>
    </footer>
</body>
</html>
