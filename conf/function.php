<?php
require 'connection.php';

function query($query)
{
    global $conn;

    $rows =  [];

    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function addMembership($data)
{
    global $conn;

    $memberName = $data['member_name'];
    $points = $data['points'];
    $account_id = $data['account_id'];

    $query = "INSERT INTO memberships (member_name, points, account_id) VALUES(
        '$memberName', $points, $account_id
        )
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function addMenu($data) {
    global $conn;

    $menuID = $data['menu_id'];
    $menuName = $data['menu_name'];
    $menuType = $data['menu_type'];
    $menuCategory = $data['menu_category'];
    $menuPrice = $data['menu_price'];
    $menuDescription = $data['menu_description'];
    $menuUrl = $data['menu_url'];

    $query = "INSERT INTO menu (item_id, name, type, category, price, description, image_url) VALUES(
        '$menuID', '$menuName', '$menuType', '$menuCategory', $menuPrice, '$menuDescription', '$menuUrl'
        )";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



?>

