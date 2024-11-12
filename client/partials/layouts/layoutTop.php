<?php
include_once $_SERVER['DOCUMENT_ROOT'] .  '/restaurant/client/conf/function.php';
require_once $_SERVER['DOCUMENT_ROOT'] .  '/restaurant/conf/connection.php';
if (!isset($_SESSION['isLogin'])) {
?>
 <script>
        window.location.href = "../index.php"   
    </script>
<?php
}

$memberId = $_SESSION['accountId'];
$queryLayout = "SELECT *
FROM memberships
INNER JOIN accounts
ON memberships.account_id = accounts.account_id
WHERE accounts.account_id = $memberId";

$user = mysqli_query($conn, $queryLayout);
$userData = mysqli_fetch_assoc($user);

?>

<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/client/partials/head.php' ?>

<body>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/client/partials/sidebar.php' ?>

    <main class="dashboard-main">
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/client/partials/navbar.php' ?>

        <div class="dashboard-main-body">

            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/client/partials/breadcrumb.php' ?>