<?php
include '../common/common.php';
include '../common/upload.php';
include '../entity/image.php';
session_start();

include_once "../entity/user.php";
if(!isset($_SESSION["codeSession"]))
    header("location:../layout/page/login.php");
$id_code=$_SESSION["codeSession"];
$use = new User();
$u = $use->checkLogin($id_code);
if($u == null)
    header("location:../layout/page/login.php");

$id_user = "";
$id_role = "";
$name = "";
$sex = "";
$email = "";
$phone = "";
$birthday = "";
$username = "";
$password = "";
$codeSession = "";

$name = ($_POST['name']);
$sex = ($_POST['sex']);
$email = ($_POST['email']);
$phone = $_POST['phone'];
$birthday = ($_POST['birthday']);
$codeSession = $_SESSION["codeSession"];



$use->name = $name;
$use->sex = $sex;
$use->email = $email;
$use->phone = $phone;
$use->birthday = $birthday;
$use->codeSession = $codeSession;

    if($uploaded==true){
    $image = new image();
    $image->id=getNewId("image");
    $image->id_use=$u->id_user;
    $image->id_image =getNewId("image");
    $image->name=$name_image;
    $image->url=$url;
    $image->alt=$alt;
    $image->tbl_table="user";
    $image->chageimage($image);
    $image->add($image);
}
$use->updateuser($use);
header('location:../customer/profileUser.php', true, 301);
?>