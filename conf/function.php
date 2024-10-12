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

    $memberName = htmlspecialchars($data['member_name']);
    $points = htmlspecialchars($data['points']);
    $account_id = htmlspecialchars($data['account_id']);

    $query = "INSERT INTO memberships (member_name, points, account_id) VALUES(
        '$memberName', $points, $account_id
        )
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editMembership($data) {
    global $conn;

    $memberId = htmlspecialchars($data['member_id']);
    $memberName = htmlspecialchars($data['member_name']);
    $points = htmlspecialchars($data['points']);

    $query = "UPDATE memberships SET member_name = '$memberName', points = $points WHERE member_id = $memberId";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function addMenu($data)
{
    global $conn;

    $menuID = htmlspecialchars($data['menu_id']);
    $menuName = htmlspecialchars($data['menu_name']);
    $menuType = htmlspecialchars($data['menu_type']);
    $menuCategory = htmlspecialchars($data['menu_category']);
    $menuPrice = htmlspecialchars($data['menu_price']);
    $menuDescription = htmlspecialchars($data['menu_description']);
    $menuUrl = htmlspecialchars($data['menu_url']);

    $query = "INSERT INTO menu (item_id, name, type, category, price, description, image_url) VALUES(
        '$menuID', '$menuName', '$menuType', '$menuCategory', $menuPrice, '$menuDescription', '$menuUrl'
        )";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function addStaff($data)
{
    global $conn;

    $staffName = htmlspecialchars($data['staff_name']);
    $staffPassword = htmlspecialchars($data['password']);
    $passwordhash = password_hash ($staffPassword, PASSWORD_DEFAULT);
    $staffEmail = htmlspecialchars($data['staff_email']);
    $staffRole = htmlspecialchars($data['staff_role']);
    $registerDate = htmlspecialchars($data['register_date']);
    $staffPhone = htmlspecialchars($data['staff_phone']);
    $AccountID = htmlspecialchars($data['account_id']);

    $query = "INSERT INTO staff (staff_name, password, staff_email, staff_role, register_date, staff_phone, account_id) VALUES(
        '$staffName', '$passwordhash', '$staffEmail', '$staffRole', '$registerDate', $staffPhone, $AccountID
    )";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editStaff($data) {
    global $conn;

    $staffId = htmlspecialchars($data['staff_id']);
    $staffName = htmlspecialchars($data['staff_name']);
    $staffEmail = htmlspecialchars($data['staff_email']);
    $staffRole = htmlspecialchars($data['staff_role']);
    $registerDate = htmlspecialchars($data['register_date']);
    $staffPhone = htmlspecialchars($data['staff_phone']);

    $staffRoleOld = mysqli_query($conn, "SELECT staff_role FROM staff WHERE staff_id = '$staffId'");

    $query = $staffRole == $staffRoleOld ?
    "UPDATE staff SET
        staff_name = '$staffName',
        staff_email = '$staffEmail',
        staff_role = '$staffRole',
        register_date = '$registerDate',
        staff_phone = '$staffPhone'
        WHERE staff_id = '$staffId'
    " : "UPDATE staff SET
        staff_name = '$staffName',
        staff_email = '$staffEmail',
        register_date = '$registerDate',
        staff_phone = '$staffPhone'
        WHERE staff_id = '$staffId'
    ";

  

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}