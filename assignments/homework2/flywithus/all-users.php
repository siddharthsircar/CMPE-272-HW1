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
                        <a class="nav-link" href="services.php">Services</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="users.php">Users</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="all-users.php">All Users</a>
                    </li>
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
                    <h2 class="heading mb-2 display-4 font-light probootstrap-animate">
                        ALL USERS
                    </h2>

                    <p class="lead mb-5 probootstrap-animate"></p>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <div class="w-90">
        <div class="row align-items-center text-center">
            <div class="col-md">
                <main role="main">

                    <div class="w-90" style="margin: 15px;">
                        <div class="row my-1">
                            <div class="col-md-5">
                                <h3 for="form-adduser">Our Users</h3>
                                <table class="table">
                                    <tr>

                                        <td class="tableheader"><strong>First Name</strong></td>
                                        <td class="tableheader"><strong>Last Name</strong></td>
                                        <td class="tableheader"><strong>Email</strong></td>
                                        <td class="tableheader"><strong>Home Address</strong></td>
                                        <td class="tableheader"><strong>Phone</strong></td>
                                    </tr>
                                    <?php require "./dbutils/dbconnect.php" ?>
                                    <?php
                                    $sql = "SELECT * FROM user";
                                    $result = $conn->query($sql);
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
                                        echo $row["address"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row["phone"];
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </table>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-md-4">
                                <h3 for="form-adduser">MuscleTron Users</h3>
                                <table class="table">
                                    <tr>
                                        <td class="tableheader"><strong>First Name</strong></td>
                                        <td class="tableheader"><strong>Last Name</strong></td>
                                    </tr>
                                    <?php
                                    $curl_handle = curl_init();
                                    curl_setopt($curl_handle, CURLOPT_URL, "http://krishnagupta.live/cmpe272/homework6/userApi.php");
                                    curl_setopt($curl_handle, CURLOPT_HEADER, 0);
                                    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
                                    $contents = curl_exec($curl_handle);
                                    print_r($contents);
                                    curl_close($curl_handle);
                                    $users = preg_split('/<br[^>]*>/i', $contents);
                                    foreach ($users as $user) {
                                        if ($user == "") break;
                                        $firstName = explode(" ", $user)[0];
                                        $lastName = explode(" ", $user)[1];
                                        echo "<tr>";
                                        echo "<td>";
                                        echo $firstName;
                                        echo "</td>";
                                        echo "<td>";
                                        echo $lastName;
                                        echo "</td>";
                                    }
                                    ?>
                                </table>
                            </div>

                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

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