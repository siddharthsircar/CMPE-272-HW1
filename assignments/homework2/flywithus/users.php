<?php
session_start();
if (!isset($_SESSION["user"])) {
    $loggedIn = false;
} else {
    $loggedIn = true;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>FLY WITH US</title>
    <meta
      name="description"
      content="Free Bootstrap 4 Theme by ProBootstrap.com"
    />
    <meta
      name="keywords"
      content="free website templates, free bootstrap themes, free template, free bootstrap, free website template"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css" />

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />

    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css" />

    <link
      rel="stylesheet"
      href="assets/fonts/fontawesome/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="assets/css/select2.css" />

    <link rel="stylesheet" href="assets/css/helpers.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg navbar-dark probootstrap_navbar"
      id="probootstrap-navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="./index.html">FLY WITH US</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#probootstrap-menu"
          aria-controls="probootstrap-menu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="city-guides.html">City Guides</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="travel.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./index.html#news">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>            
            <li class="nav-item active">
              <a class="nav-link" href="users.php">Users</a>
            </li>
            
            <?php if ($loggedIn == 1) : ?>
                <li>
                    <form action="logout.php">
                        <button class="btn btn-lg btn-primary btn-block my-2" type="submit" name="logout" value="logout">Logout</button>
                    </form>
                </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section
      class="probootstrap-cover overflow-hidden relative"
      style="background-image: url('assets/images/bg_1.jpg')"
      data-stellar-background-ratio="0.5"
      id="section-home"
    >
        <div class="overlay"></div>        
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md">
                    <?php if ($loggedIn == 0) : ?>
                        <h2 class="heading mb-2 display-4 font-light probootstrap-animate">
                            Sign In
                        </h2>                    
                    <?php else : ?>
                        <h2 class="heading mb-2 display-4 font-light probootstrap-animate">
                            Users
                        </h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>        
    </section>
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-md">
                <main role="main">
                    <?php if ($loggedIn == 0) : ?>
                        <div class="container">
                            <div class="row my-5">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <form class="form-signin" method="post" action="admin-login.php">
                                        <input type="text" name="userName" class="form-control" placeholder="Username" required autofocus="">
                                        <input type="password" name="inputPassword" class="form-control my-2" placeholder="Password" required>
                                        <button class="btn btn-lg btn-primary btn-block my-2" type="submit" name="login" value="login">Sign in</button>
                                    </form>
                                </div>
                                <div class="col-4"></div>
                            </div>
                        </div>
                    <?php else : ?>                
                        <div class="container">
                            <div class="row my-1">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <br />
                                    <table class="table">
                                        <?php
                                        $userfile = fopen("./assets/contacts.txt", "r");
                                        while (($line = fgets($userfile)) !== false) {
                                            $user = explode(":", $line);
                                            echo "<tr><td>$user[0]</td><td>$user[1]</td></tr>";
                                            // echo "<tr><td></td></tr>";
                                        }
                                        fclose($userfile);
                                        ?>
                                    </table>
                                </div>
                                <div class="col-4"></div>
                            </div>
                        </div>
                    <?php endif; ?>
                </main>
            </div>
        </div>
    </div>
    
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
                <a href="./services.html">Services</a>
              </li>
              <li>
                <a href="./contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/select2.min.js"></script>

    <script src="assets/js/main.js"></script>
  </body>
</html>
