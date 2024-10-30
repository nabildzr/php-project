<?php
require 'connection.php'; 
require 'function.php';

// Fungsi untuk sanitasi input data
function sanitizeInput($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// Fungsi untuk validasi email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : '';
}

// Fungsi untuk validasi nomor telepon
function sanitizePhoneNumber($phoneNumber) {
    return filter_var($phoneNumber, FILTER_SANITIZE_NUMBER_INT);
}

// Fungsi untuk validasi angka
function sanitizeInteger($number) {
    return filter_var($number, FILTER_SANITIZE_NUMBER_INT);
}

// Fungsi untuk hashing password
function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

// Fungsi untuk memverifikasi password
function verifyPassword($password, $hashedPassword) {
    return password_verify($password, $hashedPassword);
}

// Fungsi untuk prepared statements dengan bind param
function executePreparedQuery($conn, $query, $params, $types) {
    $stmt = mysqli_prepare($conn, $query);
    if (!$stmt) {
        die("Failed to prepare query: " . mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, $types, ...$params);
    mysqli_stmt_execute($stmt);
    return $stmt; // Return statement untuk fetch result di file utama
}
?>

<?php
session_start();
require_once('conf/connection.php');
require_once('security.php'); 

if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] === true) {
    header('Location: /admin-restaurant/index.php');
    exit();
}

if (isset($_POST['signin'])) {
    // Sanitasi input dari pengguna
    $idStaff = sanitizeInput($_POST['staff_id']);
    $password = sanitizeInput($_POST['password']);

    // Query aman untuk mencari data staf berdasarkan staff_id
    $query = "SELECT * FROM staff WHERE staff_id = ?";
    $stmt = executePreparedQuery($conn, $query, [$idStaff], "s");
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $staff = mysqli_fetch_assoc($result);
        $accountID = $staff['account_id'];

        // Mengambil password dari tabel accounts
        $accountQuery = "SELECT password FROM accounts WHERE account_id = ?";
        $accountStmt = executePreparedQuery($conn, $accountQuery, [$accountID], "s");
        $accountResult = mysqli_stmt_get_result($accountStmt);

        if ($accountPassword = mysqli_fetch_assoc($accountResult)) {
            if (verifyPassword($password, $accountPassword['password'])) {
                $_SESSION['username'] = $staff['staff_name'];
                $_SESSION['role'] = $staff['staff_role'];
                $_SESSION['isLogin'] = true;

                header('Location: index.php');
                exit();
            } else {
                echo "<script> Swal.fire({
                    icon: 'warning',
                    text: 'Invalid Staff ID or Password. Please try again.',
                    timer: 1500,
                    showConfirmButton: false
                })</script>";
            }
        } else {
            echo "<script> Swal.fire({
                icon: 'error',
                text: 'Invalid Staff ID or Password. Please try again.',
                timer: 1500,
                showConfirmButton: false
            })</script>";
        }
    } else {
        echo "<script> Swal.fire({
            icon: 'error',
            text: 'Invalid Staff ID or Password. Please try again.',
            timer: 1500,
            showConfirmButton: false
        })</script>";
    }
}
?>
