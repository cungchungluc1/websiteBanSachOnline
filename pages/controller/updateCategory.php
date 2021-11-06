<?php
include '../entity/category.php';
include '../common/common.php';
session_start();
$parentCategory = "";
$nameCategory = "";
$description = "";
$id_category="";

$id_category=$_POST['id_category'];
$parentCategory = $_POST['parentCategory'];
$nameCategory = ($_POST['nameCategory']);
$description = $_POST['description'];

$cate = new category();
$cate->id_category = $id_category;
$cate->id_parten_category = $parentCategory;
$cate->name = $nameCategory;
$cate->description = $description;
$cate->update($cate);
?>