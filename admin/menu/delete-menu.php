<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/admin/conf/function.php';

if(isset($_GET['item_id'])) {
    $id = $_GET['item_id'];
    
    if(deleteMenu($id) > 0) {
        header('location: index.php?alert=1');
    } else {
        header('location: index.php?alert=11');
    }

}

?>