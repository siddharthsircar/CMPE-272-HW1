<?php require "dbconnect.php" ?>
<?php
$sql = "INSERT INTO users (firstName,lastName,email,homeAddress,cellPhone,homePhone) VALUES ('" . $_POST["firstname"] . "', '" . $_POST["lastname"] . "', '" . $_POST["email"] . "', '" . $_POST["homeaddress"] . "','" . $_POST["homephone"] . "','" . $_POST["cellphone"] . "')";
$conn->query($sql);
$conn->close();
header("location: ../users.php");
?>