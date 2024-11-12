<?php
session_start();
session_unset();    
session_destroy();

header('location: /restaurant/admin/sign-in.php');
exit(); 
?>