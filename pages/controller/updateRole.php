<?php
session_start();
include_once "../entity/user.php";
if(!isset($_SESSION["codeSession"]))
    header("location:../layout/page/login.php");
$id_code=$_SESSION["codeSession"];
$use = new User();
$data = $use->checkLogin($id_code);
if($data == null)
    header("location:../layout/page/login.php");

$id_user = "";
$id_role = "";
$id_user = ($_POST['id_user']);
$id_role = ($_POST['id_role']);


$codeSession = $_SESSION["codeSession"];
$use->id_user = $id_user;
$use->id_role = $id_role;

$use->updateRole($codeSession,$use);
header('location:../admin/manageuser.php', true, 301);
?>