<?php

require_once $_SERVER['DOCUMENT_ROOT'] .  '/restaurant/conf/connection.php';



// query yang disini digunakan untuk bagian beranda/didepan saja atau bagian client saja

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

// 
function getEnumValues($table, $column)
{
    global $conn;

    $query = "SHOW COLUMNS FROM $table LIKE '$column'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $type = $row['Type'];
    preg_match('/^enum\((.*)\)$/', $type, $matches);
    $enum = explode(',', $matches[1]);
    return array_map(function ($value) {
        return trim($value, "'");
    }, $enum);
}


?>