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
    $u = new User();
    $dataUser = $u->checkLogin($id_code);
    if($dataUser == null)
        header("location:../layout/page/login.php");

$name = "";
$description = "";
$code = "";
$sell = "";
$date_start = "";
$date_end = "";
$name = $_POST['name'];
$description = ($_POST['description']);
$code = $_POST['code'];
$sell = $_POST['sell'];
$date_start = ($_POST['date_start']);
$date_end = $_POST['date_end'];
$v = new vouncher();
$v->id_vouncher = getNewId("vouncher");
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
$v->add($v);
?>