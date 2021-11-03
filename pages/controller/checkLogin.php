<?php
include '../entity/user.php';
session_start();
$idInvaild = "";
$passInvaild = "";
$email = "";
$email = $_POST['username'];
$password = ($_POST['password']);
$user_cus = new User();
$data = $user_cus->login($email, $password);
if ($data == "customer") {

    $_SESSION['username'] = $email;
    $_SESSION["role"] = $data;
    $_SESSION["login"] = true;
    header("location:../customer/home.php");
    exit(0);
} else if ($data == "admin") {
    $_SESSION['username'] = $email;
    $_SESSION["role"] = $data;
    $_SESSION["login"] = true;
    header("location:../admin/home.php");
    exit(0);
} else {
    $_SESSION['username'] = null;
    $_SESSION["role"] = null;
    $_SESSION["login"] = null;
    header("location:../layout/page/login.php");
    exit(0);
}