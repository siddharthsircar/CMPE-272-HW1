<?php
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
header("location: users.php");