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
    $dataUser = $u->checkLogin($id_code);
    if($dataUser == null)
        header("location:../layout/page/login.php");
        
$category = "";
$productname = "";
$productpublishing = "";
$price = "";
$sellingprice = "";
$productDescription="";
$productDescriptionDetail="";
$date_publishing = "";
$quantity = 0;
$category = $_POST['category'];
$productname = $_POST['productname'];
$productpublishing = $_POST['productpublishing'];
$price = $_POST['price'];
$sellingprice = $_POST['sellingprice'];
$productDescription=$_POST['productDescription'];
$productDescriptionDetail=$_POST['editor1'];
$date_publishing = $_POST['date_publishing'];
$quantity = $_POST['quantity'];
$cate = new Product();
$cate->id_product = getNewId("product");
$cate->id_publishing_company = $productpublishing;
$cate->name = $productname;
$cate->description = $productDescription;
$cate->price = $price;
$cate->sell = $sellingprice ;
$cate->id_category =$category;
$cate->date_publishing = $date_publishing;
$cate->description_detail = $productDescriptionDetail;
$cate->quantity = $quantity;
if($uploaded==true){
    
    $image = new image();
    $image->id=getNewId("image");
    $image->id_use=$cate->id_product;
    $image->id_image =getNewId("image");
    $image->name=$name_image;
    $image->url=$url;
    $image->alt=$alt;
    $image->tbl_table="product";
    $image->add($image);
}
$cate->add($cate);

?>