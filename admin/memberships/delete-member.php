<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/admin/conf/function.php';

// jika ada id
if (isset($_GET['account_id'])) {
    $idAccount = $_GET['account_id'];

    if (deleteMemberships($idAccount) > 0) {
        header('Location: index.php?alert=1');
    } else {
        // jika data gagal dihapus maka akan muncul alert
        header('Location: index.php?alert=11');

    }
}

?>