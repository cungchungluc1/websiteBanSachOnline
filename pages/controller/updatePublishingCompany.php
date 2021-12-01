<?php
include '../entity/publishingCompany.php';
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

$id_publishing_company="";
$name = "";
$description = "";
$phone = "";
$address = "";
$email="";
$id_publishing_company = $_POST['id_publishing_company'];
$name = $_POST['name'];
$description = $_POST['description'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$pc = new publishingCompany();
$pc->id_publishing_company = $id_publishing_company;
$pc->name = $name;
$pc->description = $description;
$pc->phone = $phone;
$pc->address = $address;
$pc->email = $email ;
if($uploaded==true){
    
    $image = new image();
    $image->id=getNewId("image");
    $image->id_use=$pc->id_publishing_company;
    $image->id_image =getNewId("image");
    $image->name=$name_image;
    $image->url=$url;
    $image->alt=$alt;
    $image->tbl_table="publishing_company";
    $image->chageimage($image);
    $image->add($image);
}
$pc->update($pc);

?>