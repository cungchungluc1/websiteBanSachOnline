<?php
include '../entity/vouncher.php';
include '../common/common.php';
include '../common/upload.php';
include '../entity/image.php';
session_start();

include_once "../entity/user.php";
if(!isset($_SESSION["codeSession"]))
    header("location:../layout/page/login.php");
$id_code=$_SESSION["codeSession"];
$use = new User();
$data = $use->checkLogin($id_code);
if($data == null)
    header("location:../layout/page/login.php");

$id_vouncher="";
$name = "";
$description = "";
$code = "";
$sell = "";
$date_start = "";
$date_end = "";
$id_vouncher=$_POST['id_vouncher'];
$name = $_POST['name'];
$description = ($_POST['description']);
$code = $_POST['code'];
$sell = $_POST['sell'];
$date_start = ($_POST['date_start']);
$date_end = $_POST['date_end'];
$v = new vouncher();
$v->id_vouncher = $id_vouncher;
$v->description = $description;
$v->name = $name;
$v->code = $code;
$v->sell = $sell;
$v->date_start = $date_start;
$v->date_end = $date_end;
if($uploaded==true){
    $image = new image();
    $image->id=getNewId("image");
    $image->id_use=$v->id_vouncher;
    $image->id_image =getNewId("image");
    $image->name=$name_image;
    $image->url=$url;
    $image->alt=$alt;
    $image->tbl_table="vouncher";
    $image->chageimage($image);
    $image->add($image);
}
$v->update($v);
?>