<?php require "./dbutils/dbconnect.php" ?>

<?php
if (isset($_COOKIE["lastSeen"])) {
    $products = explode(",", $_COOKIE["lastSeen"]);
    $last5Products = array_slice($products, -5);
    if ($last5Products) {
        for ($i = 0; $i < count($last5Products); $i += 1) {
            $sql = "SELECT id FROM product WHERE name  = '" . $last5Products[$i] . "'";
            // echo $sql;
            $result = $conn->query($sql);
            // echo $result;
            // $row = $result->fetch_assoc();
            while ($row = $result->fetch_assoc()) {
                echo $row["id"];
                echo "<br/>";
            }
        }
    }
}
?>