<?php
$product_name = $_GET['name'];
$product_url = $_GET['url'];

// $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// $escaped_url = htmlspecialchars($actual_link, ENT_QUOTES, 'UTF-8');
// if (!isset($_COOKIE['history'])) {
//     setcookie('history', serialize(array($escaped_url)));
// } else {
//     $url = unserialize($_COOKIE['history']);
//     array_push($url, $escaped_url);
//     setcookie('history', serialize($url));
// }

header("location: ../$product_url");
