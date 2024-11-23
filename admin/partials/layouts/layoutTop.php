<?php session_start();
require_once $_SERVER['DOCUMENT_ROOT'] .  '/restaurant/conf/connection.php';


if (!isset($_SESSION['isAdmin'])) {
?>
    <script>
        window.location.href = "/restaurant/admin/sign-in.php";
    </script>
<?php
}

$staffId = $_SESSION['accountId'];
$queryLayout = "SELECT *
FROM staff
INNER JOIN accounts
ON staff.account_id = accounts.account_id
WHERE accounts.account_id = $staffId";

$user = mysqli_query($conn, $queryLayout);
$userData = mysqli_fetch_assoc($user);

?>




<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/admin/partials/head.php' ?>

<body>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/admin/partials/sidebar.php' ?>

    <main class="dashboard-main">
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/admin/partials/navbar.php' ?>

        <div class="dashboard-main-body">

            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/admin/partials/breadcrumb.php' ?>