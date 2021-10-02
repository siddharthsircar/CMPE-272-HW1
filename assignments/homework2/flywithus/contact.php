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
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
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
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">
              Get In Touch
            </h2>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="probootstrap_section bg-light" id="section-contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6 probootstrap-animate">
            <p class="mb-2">
              <p><strong>Connect with our executive or send us a message and we will get back to you</strong></p>
              <span class="text-uppercase">
                <strong>Executive Details</strong>
              </span>
              <div>
                <?php 
                  $contacts = fopen("./assets/contacts.txt", "r");
                  while(($line=fgets($contacts))!==false){
                      echo $line;
                      echo "<br/>";
                  }
                  fclose($contacts)
                  ?>
              </div>
            </p>
            <br/>
            <div class="row">
              <div class="col-md-6">
                <ul class="probootstrap-contact-details">
                  <li>
                    <span class="text-uppercase"
                      ><span class="ion-paper-airplane"></span>Buisiness Email</span
                    >
                    flywithus@yopmail.com
                  </li>
                  <li>
                    <span class="text-uppercase"
                      ><span class="ion-ios-telephone"></span> Phone</span
                    >
                    +1 976 1382 9921
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="probootstrap-contact-details">
                  <li>
                    <span class="text-uppercase"
                      ><span class="ion-location"></span> Address</span
                    >
                    San Francisco, CA <br />
                    4th Floor8 Lower <br />
                    San Francisco street, M1 50F
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 probootstrap-animate">
            <form
              action="#"
              method="post"
              class="probootstrap-form probootstrap-form-box mb60"
            >
              <div class="row mb-3">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fname" class="sr-only sr-only-focusable"
                      >First Name</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="fname"
                      name="fname"
                      placeholder="First Name"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lname" class="sr-only sr-only-focusable"
                      >Last Name</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="lname"
                      name="lname"
                      placeholder="Last Name"
                    />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="sr-only sr-only-focusable"
                  >Email</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Email"
                />
              </div>
              <div class="form-group">
                <label for="message" class="sr-only sr-only-focusable"
                  >Message</label
                >
                <textarea
                  cols="30"
                  rows="10"
                  class="form-control"
                  id="message"
                  name="message"
                  placeholder="Write your message"
                ></textarea>
              </div>
              <div class="form-group">
                <input
                  type="submit"
                  class="btn btn-primary"
                  id="submit"
                  name="submit"
                  value="Send Message"
                />
              </div>
            </form>
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
