<?php
include '../entity/product.php';
include '../common/common.php';
include '../entity/image.php';
session_start();
$id_product = "";
$category = "";
$productname = "";
$productpublishing="";
$price="";
$sellingprice="";
$editor1="";
$productDescription="";

$id_product=$_POST['id_product'];
$category = $_POST['category'];
$productname = ($_POST['productname']);
$productpublishing = ($_POST['productpublishing']);
$price = $_POST['price'];
$sellingprice = ($_POST['sellingprice']);
$description_detail  = $_POST['editor1'];
$productDescription = $_POST['productDescription'];
$date_publishing = $_POST['date_publishing'];
$pro = new Product();
$pro->id_product = $id_product;
$pro->id_publishing_company = $productpublishing;
$pro->name = $productname;
$pro->description = $productDescription;
$pro->price = $price;
$pro->sell = $sellingprice;
$pro->id_category = $category;
$pro->date_publishing = $date_publishing;
$pro->description_detail = $description_detail;
if($uploaded==true){
    
    $image = new image();
    $image->id=getNewId("image");
    $image->id_use=$pro->id_product;
    $image->id_image =getNewId("image");
    $image->name=$name;
    $image->url=$url;
    $image->alt=$alt;
    $image->chageimage($image);
    $image->add($image);
}
$pro->update($pro);
?>