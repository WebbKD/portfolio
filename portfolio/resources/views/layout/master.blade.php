<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/images/kendell-webb-logo.png">
    <title>KWebbCodess</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
</head>
<body>
    @yield('nav')
    <main>
    @yield('content')
    </main>

    <footer class="page-footer">
        <div class="footer-copy">
            <div class="section-content">
                <span style="color:white;">&copy 2018 Kendell Webb </span>
            </div>
            <div class="sm-Icons">
                <a href="https://www.facebook.com/KendellWebb95" class="fa fa-facebook"></a>
                <a href="https://www.instagram.com/kwebbcodes/" class="fa fa-instagram"></a>
                <a href="https://twitter.com/KWebbCodes" class="fa fa-twitter"></a>
            </div>
        </div>
    </footer>

    <script src="/js/master.js"></script>
    @yield('javascriptLinks')
</body>
</html>