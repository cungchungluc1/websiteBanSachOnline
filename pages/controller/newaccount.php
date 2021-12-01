<?php
include '../entity/user.php';
include '../common/common.php';
session_start();


if(!isset($_SESSION["codeSession"])){
    $id_code=$_SESSION["codeSession"];
    $u = new User();
    $data = $u->checkLogin($id_code);
    if($data != null){
        if ($data->id_role == "customer") {
            header("location:../customer/home.php");
            exit(0);
        } else if ($data->id_role == "admin") {
            header("location:../admin/home.php");
            exit(0);
        }
    }
}


$name = "";
$emailAddress = "";
$password = "";
$confirmPassword = "";
$UserName = "";
$name = ($_POST['name']);
$emailAddress = $_POST['emailaddress'];
$password = md5($_POST['password']);
$confirmPassword = md5($_POST['confirmpassword']);
$UserName = ($_POST['username']);
if($password==$confirmPassword){
    $user = new User();
    $user->id_user = getNewId("user");
    $user->id_role = $user->getRole("customer");
    $user->name = $name;
    $user->sex = null;
    $user->email = $emailAddress;
    $user->phone = null;
    $user->birthday = null;
    $user->username = $UserName;
    $user->password = $password;
    $user->codeSession = null;
    $user->add($user);
}else{
    header("location:../layout/page/register.php");
}

?>