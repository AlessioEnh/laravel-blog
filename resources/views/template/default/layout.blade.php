
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Пример на bootstrap 4: Карусель, навигационная панель и новые компоненты.">

    <title>Слайдер | Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

            /* GLOBAL STYLES
        -------------------------------------------------- */
        /* Padding below the footer and lighter body text */

        body {
        padding-bottom: 3rem;
        color: #5a5a5a;
        }


        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
        margin-bottom: 4rem;
        }
        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
        bottom: 3rem;
        z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
        height: 32rem;
        background-color: #777;
        }
        .carousel-item > img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 32rem;
        }


        /* MARKETING CONTENT
        -------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
        }
        .marketing h2 {
        font-weight: 400;
        }
        .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
        }


        /* Featurettes
        ------------------------- */

        .featurette-divider {
        margin: 5rem 0; /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        .featurette-heading {
        font-weight: 300;
        line-height: 1;
        letter-spacing: -.05rem;
        }


        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 40em) {
        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
        }

        @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
        }

        /* styles Form */

        .contact_form {
            width: 100%;
        }
        .heading {
            border-bottom: 1px solid #fcab0e;
            padding-bottom: 9px;
            position: relative;
        }
        .heading span {
            background: #9e6600 none repeat scroll 0 0;
            bottom: -2px;
            height: 3px;
            left: 0;
            position: absolute;
            width: 75px;
        }
        .con_form {
            padding: 0;
            width: 99%;
        }
        .con_txt[type="text"] {
            margin: 10px 4px;
            padding: 10px;
            width: 204px;
        }
        .con_txt_3[type="text"] {
            height: 200px;
            margin: 10px 4px;
            padding: 10px;
            width: 99%;
        }
        .con_txt2[type="submit"] {
            background: #000 none repeat scroll 0 0;
            border: medium none;
            border-radius: 27px;
            color: rgb(255, 255, 255);
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 10px;
            padding: 7px 20px;
            text-transform: uppercase;
            transition: all 0.45s ease-in-out 0s;
        }
        .con_txt2[type="submit"] {
            background: #000 none repeat scroll 0 0;
            border: medium none;
            border-radius: 27px;
            color: rgb(255, 255, 255);
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 10px;
            padding: 7px 20px;
            text-transform: uppercase;
            transition: all 0.45s ease-in-out 0s;
        }
        .con_txt2:hover {
            background: #f2af1f none repeat scroll 0 0;
            color: #000;
            transition: all 0.5s ease 0s;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

  </head>
  <body>

    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-4481610-59', 'auto');
    ga('send', 'pageview');

    </script>

    <!-- Yandex.Metrika counter --> 
    <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter39705265 = new Ya.Metrika({ id:39705265, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/39705265" style="position:absolute; left:-9999px;" alt="Yandex.Metrika" /></div></noscript> <!-- /Yandex.Metrika counter -->
    
    @section('navbar')
    <nav class="site-header sticky-top py-1 bg-dark navbar-dark">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto" focusable="false" role="img"><title>Product</title><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
            </a>
            <a class="py-2 d-none d-md-inline-block" href="/">Home</a>
            <a class="py-2 d-none d-md-inline-block" href="/news">News</a>
            <a class="py-2 d-none d-md-inline-block" href="/art">New art.</a>
            <!-- <a class="py-2 d-none d-md-inline-block" href="/form">New art.</a> -->
        </div>
    </nav>
    @show

    <header>
        @section('slidebar')
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        @show

        @section('header')
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 font-weight-normal">Punny headline</h1>
                <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
                <a class="btn btn-outline-secondary" href="#">Coming soon</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        @show
    </header>


    @section('main')
    <main role="main">

        @yield('content')

    </main>
    @show

    <!-- FOOTER -->
    @section('footer')
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    @show

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>