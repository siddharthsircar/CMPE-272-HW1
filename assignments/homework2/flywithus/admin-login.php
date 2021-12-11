<!-- 
session_start();
if (isset($_POST["login"]) && !empty($_POST["userName"]) && !empty($_POST["inputPassword"])) {

    if ($_POST["userName"] == "admin"  && $_POST["inputPassword"]== "admin") {
        $_SESSION["user"] = $_POST["userName"];
        echo "here";
        echo $_SESSION["user"];
        fclose($userfile);
        header("location: users.php");
        exit;
    }
}
header("location: users.php"); -->

<?php require "./dbutils/dbconnect.php" ?>
<?php
session_start();
if (isset($_POST["login"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
    $sql = "SELECT * FROM user WHERE email = '" . $_POST["email"] . "' and password = '" . $_POST["password"] . "'";
    $result = $conn->query($sql);
    if ($result) {
        $_SESSION["user"] = $_POST["email"];
        header("location: index.html");
    } else {
        header("location: users.php");
    }
}
