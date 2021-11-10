<?php
include '../entity/user.php';
include '../common/common.php';
session_start();
$name = "";
$emailAddress = "";
$password = "";
$confirmPassword = "";
$UserName = "";
$name = ($_POST['name']);
$emailAddress = $_POST['emailaddress'];
$password = $_POST['password'];
$confirmPassword = ($_POST['confirmpassword']);
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