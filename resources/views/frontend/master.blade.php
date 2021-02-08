<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/grid/simple-grid.css">
    <link rel="stylesheet" type="text/css" href="/grid/simple-grid.min.css">
    <link rel="stylesheet" type="text/css" href="/grid/simple-grid.scss">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="row main-nav">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn"><i style="color: white;" class="fas fa-bars"></i></label>
            <label class="logo">{{$data->logo}}</label>
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Tools</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>
    <section class="small-nav">
        <div class="row">
            <ul>
                @foreach($data->social as $key=>$social)
                <li><a href="{{$social}}"><i class="{{$data->icon[$key]}}"></i></a></li>
                @endforeach
            </ul>
        </div>
    </section>
    @yield('content')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h3 class="title">About Us</h3>
                    <p class="nav-items">Seamlessly deliver effective platforms without professional products. Globally orchestrate B2C applications and value-added markets. Monotonectally re-engineer market-driven.</p>
                </div>
                <div class="col-4">
                    <h3 class="title">Navigation</h3>
                    <ul class="nav-items">
                        <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                        <li><a href="#"><i class="fas fa-pencil-alt"></i>Blog</a></li>
                        <li><a href="#"><i class="fas fa-wrench"></i></i>Tools</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i>Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <h3 class="title">Tools</h3>
                    <ul class="nav-items">
                        <li><a href="#"><i class="fas fa-home"></i>Tool1</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <section class="footer-alt" style="text-align: center;">
            Copyright
        </section>
    </div>
</body>
</html>
