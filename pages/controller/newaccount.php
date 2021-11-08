<?php
include '../entity/user.php';
include '../common/common.php';
session_start();
$name = "";
$emailAddress = "";
$password = "";
$confirmPassword = "";

$name = ($_POST['name']);
$emailAddress = $_POST['emailaddress'];
$password = $_POST['password'];
$confirmPassword = ($_POST['confirmpassword']);

if($password==$confirmPassword){
    $user = new User();
    $user->id_user = null;
    $user->id_role = null;
    $user->name = $name;
    $user->sex = null;
    $user->email = $emailAddress;
    $user->phone = null;
    $user->birthday = null;
    $user->username = null;
    $user->password = $password;
    $user->codeSession = null;
    $user->add($user);
}else{
    header("location:../layout/page/rigister.php");
}

?>