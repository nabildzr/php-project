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


function getNextAvailableAccountID()
{
    global $conn;
    $query = "SELECT MAX(account_id) as max_account_id FROM Accounts";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $next_account_id = $row['max_account_id'] + 1;
    return $next_account_id;
}

function getNextAvailableMemberID()
{
    global $conn;
    $query = "SELECT MAX(member_id) as max_member_id FROM memberships";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $next_member_id = $row['max_member_id'] + 1;
    return $next_member_id;
}


// hanya perlu mengisi parameter nya saja jadi function ini dapat di gunakan lagi tidak hanya untuk member_id, account_id saja tapi hanya dengan 1 function bisa di gunakan lagi untuk lain hal NextAvailable
function getNextAvailable($column, $as, $table)
{
    global $conn;


    $query = "SELECT MAX(" . $column . ") as " . $as . " FROM " . $table;
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $next_member_id = $row[$as] + 1;
    return $next_member_id;
}


function register($data)
{
    global $conn;
    $accountId = getNextAvailableAccountID();
    $memberId = getNextAvailableMemberID();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $email = htmlspecialchars($data['email']);
    $passwordhash = password_hash($password, PASSWORD_DEFAULT);

    $queryEmail = query("SELECT email FROM accounts WHERE email = '$email'");

    if (count($queryEmail) > 0) {
        echo "<script>window.location.href = '/restaurant/register/?reg=-1'</script>";
        return false;
    }

    $registerDate = date('Y-m-d');

    $queryAccount = "INSERT INTO accounts (email, password, register_date) VALUES (
    '$email',
    '$passwordhash',
    '$registerDate'
  )";

    mysqli_query($conn, $queryAccount);
    $queryMembership = "INSERT INTO memberships (member_id, member_name, account_id) VALUES (
    $memberId,
    '$username',
    $accountId
    )
    ";
    mysqli_query($conn, $queryMembership);


    return mysqli_affected_rows($conn);
}


function addToCart($data)
{
    global $conn;
    $cartId = getNextAvailable("cart_id", "next_cart_id", "cart");

    $itemId = htmlspecialchars($data['item_id']);
    $memberId = $data['member_id'];
    $quantity = $data['quantity'];


    $query = "SELECT * FROM cart WHERE member_id = " . $memberId . " AND item_id = $itemId";
    $result = mysqli_query($conn, $query);


    // jika berhasil yang dimana misalkan > 0 nya itu 1 itu maka cart telah dilakukan di satu waktu yang sama oleh user yang sama jadi harus merefresh dahulu
    if (mysqli_num_rows($result) > 0) {
        // -3 = sudah ditambahkan ke cart, silahkan ulangi lagi jika ingin menambahkan lagi
        echo "<script>window.location.href = '/restaurant/cart/?cart=-3'</script>";
        return false;
    } else {

        $queryInsert = "INSERT INTO cart (cart_id, item_id, member_id, quantity, purchased, status) VALUES (
            $cartId,
            $itemId,
            $memberId,
            $quantity,
            0,
            'waiting'
        )";
    }
}
