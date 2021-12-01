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
$category = "";
$productname = "";
$productpublishing="";
$price="";
$sellingprice="";
$editor1="";
$productDescription="";
$quantity="";

$id_product=$_POST['id_product'];
$category = $_POST['category'];
$productname = ($_POST['productname']);
$productpublishing = ($_POST['productpublishing']);
$price = $_POST['price'];
$sellingprice = ($_POST['sellingprice']);
$description_detail  = $_POST['editor1'];
$productDescription = $_POST['productDescription'];
$date_publishing = $_POST['date_publishing'];
$quantity = $_POST['quantity'];
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
$pro->quantity = $quantity;

    if($uploaded==true){
    $image = new image();
    $image->id=getNewId("image");
    $image->id_use=$pro->id_product;
    $image->id_image =getNewId("image");
    $image->name=$name_image;
    $image->url=$url;
    $image->alt=$alt;
    $image->tbl_table="product";
    $image->chageimage($image);
    $image->add($image);
}
$pro->update($pro);
?>