<?php 

session_start();
session_unset();
session_destroy();

if (isset($_SESSION['isLogin']) == false) {
    header('location: index.php');
}

?>