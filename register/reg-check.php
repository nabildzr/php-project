<?php
require_once $_SERVER['DOCUMENT_ROOT'] .  '/restaurant/conf/connection.php';

function register($data)
{
  global $conn;

  $username = htmlspecialchars($data['member_name']);
  $memberId = htmlspecialchars($data['member_id']);
  $accountId = htmlspecialchars($data['account_id']);
  $password = htmlspecialchars($data['password']);
  $email = htmlspecialchars($data['email']);
  $passwordhash = password_hash($password, PASSWORD_DEFAULT);

  $queryEmail = query("SELECT email FROM accounts WHERE email = '$email'");

  if (count($queryEmail) > 0) {
    echo "<script>window.location.href = '/restaurant/register/?reg=-2'</script>";
    exit;
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
