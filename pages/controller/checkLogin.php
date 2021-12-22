<?php
include '../entity/user.php';
include '../common/common.php';
session_start();
$id_code=null;
if(session_id() && isset($_SESSION["codeSession"])) {
    $id_code=$_SESSION["codeSession"];
}

$users = new User();
if($users->checkLogin($id_code)->id_role == "admin" || $users->checkLogin($id_code)->id_role == "customer"){
    if ($users->checkLogin($id_code)->id_role == "customer") {
        header("location:../customer/home.php");
        exit(0);
    } else if ($users->checkLogin($id_code)->id_role == "admin") {
        header("location:../admin/home.php");
        exit(0);
    }
}else $_SESSION["codeSession"] = null;

$idInvaild = "";
$passInvaild = "";
$email = "";
$email = $_POST['username'];
$password = md5($_POST['password']);
$user_cus = new User();
$data = $user_cus->login($email, $password);
$id = $data->id_user;
$user_cus->id_user = $id;
$codeSession = md5("Session={id_user:".$id.",client_ip:".get_client_ip().",id_time:".getNewId("user")."}");
$user_cus->codeSession = $codeSession;
if ($data->id_role == "customer") {
    $_SESSION["codeSession"] = $codeSession; 
    $user_cus->updateCode($user_cus);
    header("location:../customer/home.php");
    exit(0);
} else if ($data->id_role == "admin") {
    $_SESSION["codeSession"] = $codeSession; 
    $user_cus->updateCode($user_cus);
    header("location:../admin/home.php");
    exit(0);
} else {
    $_SESSION["codeSession"] = null; 
    header("location:../layout/page/login.php");
    exit(0);
}
?>