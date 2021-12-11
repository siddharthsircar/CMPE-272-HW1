<?php require "dbconnect.php" ?>
<?php
$sql = "INSERT INTO users (firstName,lastName,email,address,phone) VALUES ('" . $_POST["firstname"] . "', '" . $_POST["lastname"] . "', '" . $_POST["email"] . "', '" . $_POST["homeaddress"] . "','" . $_POST["cellphone"] . "')";
$conn->query($sql);
$conn->close();
header("location: ../users.php");
?>