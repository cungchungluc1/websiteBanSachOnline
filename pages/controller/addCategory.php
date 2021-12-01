<?php
include '../entity/category.php';
include '../common/common.php';
include_once "../entity/user.php";
    if(!isset($_SESSION["codeSession"]))
        header("location:../layout/page/login.php");
    $id_code=$_SESSION["codeSession"];
    $u = new User();
    $data = $u->checkLogin($id_code);
    if($data == null)
        header("location:../layout/page/login.php");
    
$parentCategory = "";
$nameCategory = "";
$description = "";
$parentCategory = $_POST['parentCategory'];
$nameCategory = ($_POST['nameCategory']);
$description = $_POST['description'];
$cate = new category();
$cate->id_category = getNewId("category");
$cate->id_parten_category = $parentCategory;
$cate->name = $nameCategory;
$cate->description = $description;
$cate->add($cate);
?>