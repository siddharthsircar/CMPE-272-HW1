<?php require "./dbutils/dbconnect.php" ?>

<?php
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
while ($row = $result->fetch_assoc()) {
    echo $row["firstName"] . " " . $row["lastName"];
    echo "<br/>";
}
?>