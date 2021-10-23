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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title>FLY WITH US</title>
  <meta name="description" content="Free Bootstrap 4 Theme by ProBootstrap.com" />
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template" />

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet" />

  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css" />

  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />

  <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css" />

  <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css" />

  <link rel="stylesheet" href="assets/css/select2.css" />

  <link rel="stylesheet" href="assets/css/helpers.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
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
                <button class="btn btn-primary" type="submit" name="logout" value="logout">Logout</button>
              </form>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="probootstrap-cover overflow-hidden relative" style="background-image: url('assets/images/bg_1.jpg')" data-stellar-background-ratio="0.5" id="section-home">
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
  <div class="w-90">
    <div class="row align-items-center text-center">
      <div class="col-md">
        <main role="main">
          <!-- Show Sign in if not signed in -->
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
            <!-- Show users list if signed in -->
          <?php else : ?>
            <div class="w-90" style="margin: 15px;">
              <div class="row my-1">
                <div class="col-sm-3">
                  <h3 for="form-adduser">Add User</h3>
                  <form class="form-adduser" method="post" action="./dbutils/adduser.php">
                    <div class="form-group">
                      <!-- <label for="firstname">First Name</label> -->
                      <input type="text" class="form-control" name="firstname" aria-describedby="fnameHelp" placeholder="Enter First Name" autofocus required>
                    </div>
                    <div class="form-group">
                      <!-- <label for="lastname">Last Name</label> -->
                      <input type="text" class="form-control" name="lastname" aria-describedby="lnameHelp" placeholder="Enter Last Name" required>
                    </div>
                    <div class="form-group">
                      <!-- <label for="cellphone">Cell Phone</label> -->
                      <input type="text" class="form-control" name="cellphone" aria-describedby="phoneHelp" placeholder="Enter cell phone" required>
                    </div>
                    <div class="form-group">
                      <!-- <label for="homeaddress">Home Address</label> -->
                      <input type="text" class="form-control" name="homeaddress" aria-describedby="phoneHelp" placeholder="Enter home address" required>
                    </div>
                    <div class="form-group">
                      <!-- <label for="homephone">Home Phone</label> -->
                      <input type="text" class="form-control" name="homephone" aria-describedby="phoneHelp" placeholder="Enter home phone" required>
                    </div>
                    <div class="form-group">
                      <!-- <label for="exampleInputEmail1">Email address</label> -->
                      <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>
                    <!-- <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              </div> -->
                    <button type="submit" class="btn btn-primary">Add User</button>
                  </form>
                </div>
                <div class="col-sm-1"></div>
                <div class="col">
                  <br />
                  <!-- Modal -->
                  <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Search User</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <h3>Enter Search Criteria</h3><br>
                          <form action="users.php" method="post">
                            <input type="text" name="name" placeholder="Name">
                            <h3>OR</h3>
                            <input type="text" name="email" placeholder="Email">
                            <h3>OR</h3>
                            <input type="text" name="phone" placeholder="Phone">
                            <input type="submit" name="search" class="login loginmodal-submit" value="Search">
                          </form>
                        </div>
                        <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div> -->
                      </div>
                    </div>
                  </div>
                  <table class="table">
                    <tr>

                      <td class="tableheader"><strong>First Name</strong></td>
                      <td class="tableheader"><strong>Last Name</strong></td>
                      <td class="tableheader"><strong>Email</strong></td>
                      <td class="tableheader"><strong>Home Address</strong></td>
                      <td class="tableheader"><strong>Home Phone</strong></td>
                      <td class="tableheader"><strong>Cell Phone</strong></td>
                    </tr>
                    <?php require "./dbutils/dbconnect.php" ?>
                    <?php
                    if (isset($_POST["search"])) {
                      $sql = "SELECT * FROM users WHERE";
                      if (isset($_POST["name"]) and $_POST["name"] != "") {
                        $sql = $sql . " firstName LIKE '%" . $_POST["name"] . "%' OR lastName LIKE '%" . $_POST["name"] . "%'";
                      } else {
                        $sql = $sql . " firstName = '' OR lastName= ''";
                      }
                      if (isset($_POST["email"]) and $_POST["email"] != "") {
                        $sql = $sql . "OR email LIKE '%" . $_POST["email"] . "%'";
                      }
                      if (isset($_POST["phone"]) and $_POST["phone"] != "") {
                        $sql = $sql . "OR homePhone LIKE'%" . $_POST["phone"] . "%' OR cellPhone LIKE '%" . $_POST["phone"] . "%';";
                      }

                      $result = $conn->query($sql);
                    } else {
                      $sql = "SELECT * FROM users";
                      $result = $conn->query($sql);
                    }


                    while ($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>";
                      echo $row["firstName"];
                      echo "</td>";
                      echo "<td>";
                      echo $row["lastName"];
                      echo "</td>";
                      echo "<td>";
                      echo $row["email"];
                      echo "</td>";
                      echo "<td>";
                      echo $row["homeAddress"];
                      echo "</td>";
                      echo "<td>";
                      echo $row["homePhone"];
                      echo "</td>";
                      echo "<td>";
                      echo $row["cellPhone"];
                      echo "</td>";
                      echo "</tr>";
                    }
                    ?>
                  </table>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#search-modal">
                    Search User
                  </button>
                </div>

              </div>
            </div>
          <?php endif; ?>
        </main>
      </div>
    </div>
  </div>

  <footer class="probootstrap-border-top">
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