<?php
Session_start();
$_SESSION = array();
session_destroy();
header("location: index.html");
