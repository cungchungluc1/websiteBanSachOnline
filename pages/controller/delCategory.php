<?php
include '../entity/category.php';
include '../common/common.php';
session_start();

include_once "../entity/user.php";
if(!isset($_SESSION["codeSession"]))
    header("location:../layout/page/login.php");
$id_code=$_SESSION["codeSession"];
$u = new User();
$data = $u->checkLogin($id_code);
if($data == null)
    header("location:../layout/page/login.php");

$id_category="";

$id_category=$_GET['id_category'];

$cate = new category();
$cate->id_category = $id_category;
$cate->delete($cate);
?>