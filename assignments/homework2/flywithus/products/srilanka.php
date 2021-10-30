<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$escaped_url = htmlspecialchars($actual_link, ENT_QUOTES, 'UTF-8');
$name = "Sri Lanka";
if (!isset($_COOKIE['history'])) {
    setcookie('history', serialize(array($name)), time() + 3600, "/", null);
} else {
    $products = unserialize($_COOKIE['history']);
    array_push($products, $name);
    setcookie('history', serialize($products), time() + 3600, "/", null);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>FLY WITH US</title>
    <meta name="description" content="Free Bootstrap 4 Theme by ProBootstrap.com" />
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template" />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet" />

    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/animate.css" />
    <link rel="stylesheet" href="../assets/fonts/ionicons/css/ionicons.min.css" />

    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css" />

    <link rel="stylesheet" href="../assets/fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="../assets/fonts/fontawesome/css/font-awesome.min.css" />

    <link rel="stylesheet" href="../assets/css/select2.css" />

    <link rel="stylesheet" href="../assets/css/helpers.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
        <div class="container">
            <a class="navbar-brand" href="./index.html">FLY WITH US</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="ion-navicon"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="probootstrap-menu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../city-guides.html">City Guides</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../travel.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html#news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../users.php">Users</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="probootstrap-cover overflow-hidden relative" style="background-image: url('https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/2895/Bentota3.jpg')" data-stellar-background-ratio="0.5" id="section-home">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md">
                    <h2 class="heading mb-2 display-4 font-light probootstrap-animate">
                        Stunning Sri Lanka (6 Nights / 7 Days)
                    </h2>

                    <p class="lead mb-5 probootstrap-animate"></p>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="probootstrap_section" id="section-city-guides">
        <div class="container">
            <div class="row mb-3">
                Stunning Sri Lanka
            </div>
        </div>
    </section>

    <!-- END section -->

    <section class="probootstrap_section">
        <div class="container">
            <div class="row text-center mb-5 probootstrap-animate">
                <div class="col-md-12">
                    <h2 class="display-4 border-bottom probootstrap-section-heading">
                        Popular Landmarks
                    </h2>
                </div>
            </div>

            <div class="row probootstrap-animate">
                <div class="col-md-12">
                    <div class="owl-carousel js-owl-carousel">
                        <a class="probootstrap-slide" href="#">
                            <span class="flaticon-teatro-de-la-caridad"></span>
                            <em>Teatro de la Caridad</em>
                        </a>
                        <a class="probootstrap-slide" href="#">
                            <span class="flaticon-royal-museum-of-the-armed-forces"></span>
                            <em>Royal Museum of the Armed Forces</em>
                        </a>
                        <a class="probootstrap-slide" href="#">
                            <span class="flaticon-parthenon"></span>
                            <em>Parthenon</em>
                        </a>
                        <a class="probootstrap-slide" href="#">
                            <span class="flaticon-marina-bay-sands"></span>
                            <em>Marina Bay Sands</em>
                        </a>
                        <a class="probootstrap-slide" href="#">
                            <span class="flaticon-samarra-minaret"></span>
                            <em>Samarra Minaret</em>
                        </a>
                        <a class="probootstrap-slide" href="#">
                            <span class="flaticon-chiang-kai-shek-memorial"></span>
                            <em>Chiang Kai Shek Memorial</em>
                        </a>
                        <a class="probootstrap-slide" href="#">
                            <span class="flaticon-heuvelse-kerk-tilburg"></span>
                            <em>Heuvelse Kerk Tilburg</em>
                        </a>
                        <a class="probootstrap-slide" href="#">
                            <span class="flaticon-cathedral-of-cordoba"></span>
                            <em>Cathedral of Cordoba</em>
                        </a>
                        <a class="probootstrap-slide" href="#">
                            <span class="flaticon-london-bridge"></span>
                            <em>London Bridge</em>
                        </a>
                        <a class="probootstrap-slide" href="#">
                            <span class="flaticon-taj-mahal"></span>
                            <em>Taj Mahal</em>
                        </a>
                        <a class="probootstrap-slide" href="#">
                            <span class="flaticon-leaning-tower-of-pisa"></span>
                            <em>Leaning Tower of Pisa</em>
                        </a>
                        <a class="probootstrap-slide" href="#">
                            <span class="flaticon-burj-al-arab"></span>
                            <em>Burj al Arab</em>
                        </a>
                        <a class="probootstrap-slide" href="#">
                            <span class="flaticon-gate-of-india"></span>
                            <em>Gate of India</em>
                        </a>
                        <a class="probootstrap-slide" href="#">
                            <span class="flaticon-osaka-castle"></span>
                            <em>Osaka Castle</em>
                        </a>
                        <a class="probootstrap-slide" href="#">
                            <span class="flaticon-statue-of-liberty"></span>
                            <em>Statue of Liberty</em>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <footer class="probootstrap_section probootstrap-border-top">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-3">
                    <h3 class="probootstrap_font-18 mb-3">Quick Links</h3>
                    <ul class="list-unstyled">
                        <li>
                            <a href="./index.html">Home</a>
                        </li>
                        <li>
                            <a href="./travel.html">About</a>
                        </li>
                        <li>
                            <a href="./services.php">Services</a>
                        </li>
                        <li>
                            <a href="./contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="../assets/js/jquery.min.js"></script>

    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>

    <script src="../assets/js/jquery.waypoints.min.js"></script>
    <script src="../assets/js/jquery.easing.1.3.js"></script>

    <script src="../assets/js/select2.min.js"></script>

    <script src="../assets/js/main.js"></script>
</body>

</html>