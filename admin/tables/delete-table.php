<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/admin/conf/function.php';

if(isset($_GET['table_id'])) {
    $tableID = $_GET['table_id'];
    
    if (deleteTable($tableID) > 0) {
        header('location: index.php?alert=1');
    } else {
        header('location: index.php?alert=11');
    }
}

?>