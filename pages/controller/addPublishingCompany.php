<?php
include '../entity/publishingCompany.php';
include '../common/common.php';
include '../common/upload.php';
include '../entity/image.php';
session_start();
$name = "";
$description = "";
$phone = "";
$address = "";
$email="";
$name = $_POST['name'];
$description = $_POST['description'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$pc = new publishingCompany();
$pc->id_publishing_company = getNewId("publishing_company");
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
    $image->name=$name;
    $image->url=$url;
    $image->alt=$alt;
    $image->tbl_table="publishing_company";
    $image->add($image);
}
$pc->add($pc);

?>