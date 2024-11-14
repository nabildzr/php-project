/************* ✨ Codeium Command 🌟 *************/
<?php

/*
 * Login Check
 *
 * Check if the user has successfully logged in
 *
 */
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] .  '/restaurant/conf/connection.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/conf/function.php';

if (isset($_POST['signin'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    /*
     * First, check if the email exist in the database
     */
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

            /*
             * Second, check if the password is correct
             */
            // Get the password from the accounts table based on account_id
            $accountQuery = "SELECT password FROM accounts WHERE account_id = $accountID";
            $accountResult = mysqli_query($conn, $accountQuery);

            if (!$accountResult) {
                die("Query failed: " . mysqli_error($conn));
            }

            $accountPassword = mysqli_fetch_assoc($accountResult);

            if ($accountPassword && password_verify($password, $accountPassword['password'])) {

                /*
                 * Third, get the member data from the memberships table
                 */
                $members = mysqli_query($conn, "SELECT * FROM memberships WHERE account_id = $accountID");

                if (!$members) {
                    die("Query failed: " . mysqli_error($conn));
                }

                $member = mysqli_fetch_assoc($members);

                if ($member) {

                    // Set the session variables
                    $_SESSION['username'] = $member['member_name'];
                    $_SESSION['points'] = $member['points'];
                    $_SESSION['memberId'] = $member['member_id'];
                    $_SESSION['accountId'] = $member['account_id'];
                    $_SESSION['memberImage'] = $member['member_image'];
                    $_SESSION['isLogin'] = true;

                    // Redirect to the index page
                    header('location: /restaurant/?in=1');
                    exit();
                } else {

                    // Redirect to the login page with error message
                    header('location: /restaurant/login/?in=-3');
                }
            } else {

                // Redirect to the login page with error message
                header('location: /restaurant/login/?in=-2');
            }
        } else {

            // Redirect to the login page with error message
            header('location: /restaurant/login/?in=-1');
        }
    } else {

        // Redirect to the login page with error message
        header('location: /restaurant/login/?in=0');
    }
}
/******  6445b3be-c9f8-4374-b324-4b9da8d1f3bb  *******/
