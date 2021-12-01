<?php
include '../entity/product.php';
include '../common/common.php';
include '../common/upload.php';
include '../entity/image.php';
session_start();

include_once "../entity/user.php";
if(!isset($_SESSION["codeSession"]))
    header("location:../layout/page/login.php");
$id_code=$_SESSION["codeSession"];
$u = new User();
$data = $u->checkLogin($id_code);
if($data == null)
    header("location:../layout/page/login.php");

$id_product = "";

$id_product=$_GET['id_product'];
$pro = new Product();
$pro->id_product = $id_product;
$pro->delete($pro);
?>