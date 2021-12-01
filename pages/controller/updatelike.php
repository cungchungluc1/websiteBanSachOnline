<?php
session_start();
include_once "../entity/user.php";
include_once "../entity/like.php";
if(!isset($_SESSION["codeSession"]))
    header("location:../layout/page/login.php");
$id_code=$_SESSION["codeSession"];
$use = new User();
$data = $use->checkLogin($id_code);
if($data == null)
    header("location:../layout/page/login.php");

$id_user = "";
$id_product = "";

$id_user = ($_GET['id_user']);
$id_product = ($_GET['id_product']);

$l = new like();
$l->id_user = $id_user;
$l->id_product = $id_product;

$l->upsert($l);
header('location:../customer/product.php?id='.htmlentities($id_product), true, 301);
?>