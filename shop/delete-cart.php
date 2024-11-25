<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/conf/function.php';

if (isset($_GET['itemId'])) {
    $itemId = $_GET['itemId'];
    $memberId = $_SESSION['memberId'];

    if (deleteCart($memberId, $itemId) > 0) {
        // $_SERVER['HTTP_REFERER'] adalah variabel global yang berisi URL dari halaman sebelumnya
        header('location: ' . $_SERVER['HTTP_REFERER'] . '?cart_deleted=1');
    } else {
        header('location: ' . $_SERVER['HTTP_REFERER'] . '?cart_deleted=0');
    }
} else {
    header('location: ' . $_SERVER['HTTP_REFERER']);
}
