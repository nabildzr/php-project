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



?>

