<?php

$server = "localhost";
    $user = "root";
$password = "";
$db = "admin";

$conn = mysqli_connect($server, $user, $password, $db);

if (!$conn) {
    echo "Not Connected";
} else {
    echo "Connected";
}

?>  