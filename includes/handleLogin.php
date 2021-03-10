<?php
session_start();
include 'db.php';


$email = $_POST['email'];
$password = $_POST['password'];


$stmt = $pdo->prepare('SELECT * FROM profs WHERE email = ?');
$stmt->execute([$email]);
$user = $stmt->fetch();

if($password == $user['password']){
    $_SESSION['user'] = $user;
    header('location: /tableau.php');
}else {
    header('location: /login.php?msg=error');
}

?>