<?php
include '../entity/user.php';
include '../common/common.php';
session_start();
$idInvaild = "";
$passInvaild = "";
$email = "";
$email = $_POST['username'];
$password = ($_POST['password']);
$user_cus = new User();
$data = $user_cus->login($email, $password);
$id ="0000";
$id = $user_cus->getId($email, $password)->id_user;
$user_cus->id_user = $id;
$user_cus->codeSession = "client_ip=".get_client_ip();
if ($data == "customer") {
    $_SESSION['username'] = $email;
    $_SESSION["role"] = $data;
    $_SESSION["login"] = true;
    
    $user_cus->updateCode($user_cus);
    header("location:../customer/home.php");
    exit(0);
} else if ($data == "admin") {
    $_SESSION['username'] = $email;
    $_SESSION["role"] = $data;
    $_SESSION["login"] = true;
    $user_cus->updateCode($user_cus);
    header("location:../admin/home.php?id=".$id);
    exit(0);
} else {
    $_SESSION['username'] = null;
    $_SESSION["role"] = null;
    $_SESSION["login"] = null;
    header("location:../layout/page/login.php");
    exit(0);
}
?>