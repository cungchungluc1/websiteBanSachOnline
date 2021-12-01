<?php
include '../entity/vouncher.php';
session_start();

include_once "../entity/user.php";
if(!isset($_SESSION["codeSession"]))
    header("location:../layout/page/login.php");
$id_code=$_SESSION["codeSession"];
$use = new User();
$data = $use->checkLogin($id_code);
if($data == null)
    header("location:../layout/page/login.php");

$id="";
$id=$_GET['id'];
$id_pro="";
$id_pro=$_GET['id_pro'];
$v = new vouncher();
$v->deleteVouncher($id);
header("location:../admin/vouncherProduct.php?id=".$id_pro);
?>