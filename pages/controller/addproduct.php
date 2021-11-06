<?php
include '../entity/product.php';
include '../common/common.php';
session_start();
$category = "";
$productname = "";
$productpublishing = "";
$price = "";
$sellingprice = "";
$productDescription="";
$productDescriptionDetail="";

$category = $_POST['category'];
$productname = $_POST['productname'];
$productpublishing = $_POST['productpublishing'];
$price = $_POST['price'];
$sellingprice = $_POST['sellingprice'];
$productDescription=$_POST['productDescription'];
$productDescriptionDetail=$_POST['editor1'];

$cate = new Product();
$cate->id_product = getNewId("product");
$cate->id_publishing_company = $productpublishing;
$cate->name = $productname;
$cate->description = $productDescription;
$cate->price = $price;
$cate->sell = $sellingprice ;
$cate->id_category =$category;
$cate->date_publishing = "2012-02-05";
$cate->description_detail = $productDescriptionDetail;
$cate->add($cate);
?>