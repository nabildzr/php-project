<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] .  '/restaurant/conf/connection.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/conf/function.php';


if (isset($_POST['signin'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT email, account_id FROM accounts WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $row = mysqli_num_rows($result);

    // Check if the query returned any rows
    if ($row > 0) {
        $account = mysqli_fetch_assoc($result);
        if ($account) {

            $accountID = $account['account_id'];
            // Get the password from the accounts table based on account_id
            $accountQuery = "SELECT password FROM accounts WHERE account_id = $accountID";
            $accountResult = mysqli_query($conn, $accountQuery);

            if (!$accountResult) {
                die("Query failed: " . mysqli_error($conn));
            }

            $accountPassword = mysqli_fetch_assoc($accountResult);

            if ($accountPassword && password_verify($password, $accountPassword['password'])) {
                $members = mysqli_query($conn, "SELECT * FROM memberships WHERE account_id = $accountID");

                if (!$members) {
                    die("Query failed: " . mysqli_error($conn));
                }

                $member = mysqli_fetch_assoc($members);
                if ($member) {

                    $_SESSION['username'] = $member['member_name'];
                    $_SESSION['points'] = $member['points'];
                    $_SESSION['memberId'] = $member['member_id'];
                    $_SESSION['accountId'] = $member['account_id'];
                    $_SESSION['memberImage'] = $member['member_image'];
                    $_SESSION['isLogin'] = true;

                    header('location: /restaurant/?in=1');
                    exit();
                } else {

                    header('location: /restaurant/login/?in=-3');
                }
            } else {

                header('location: /restaurant/login/?in=-2');
            }
        } else {

            header('location: /restaurant/login/?in=-1');
        }
    } else {

        header('location: /restaurant/login/?in=0');
    }
}
