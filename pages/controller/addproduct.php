<?php
include '../entity/product.php';
include '../common/common.php';
include '../common/upload.php';
include '../entity/image.php';
session_start();
$category = "";
$productname = "";
$productpublishing = "";
$price = "";
$sellingprice = "";
$productDescription="";
$productDescriptionDetail="";
$date_publishing = "";
$category = $_POST['category'];
$productname = $_POST['productname'];
$productpublishing = $_POST['productpublishing'];
$price = $_POST['price'];
$sellingprice = $_POST['sellingprice'];
$productDescription=$_POST['productDescription'];
$productDescriptionDetail=$_POST['editor1'];
$date_publishing = $_POST['date_publishing'];

$cate = new Product();
$cate->id_product = getNewId("product");
$cate->id_publishing_company = $productpublishing;
$cate->name = $productname;
$cate->description = $productDescription;
$cate->price = $price;
$cate->sell = $sellingprice ;
$cate->id_category =$category;
$pro->date_publishing = $date_publishing;
$cate->description_detail = $productDescriptionDetail;

if($uploaded==true){
    
    $image = new image();
    $image->id=getNewId("image");
    $image->id_use=$cate->id_product;
    $image->id_image =getNewId("image");
    $image->name=$name;
    $image->url=$url;
    $image->alt=$alt;
    $image->add($image);
}
$cate->add($cate);

?>