<?php
include '../entity/vouncher.php';
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
$id_vouncher=$_GET['id_vouncher'];
$v = new vouncher();
$v->id_vouncher = $id_vouncher;
$v->delete($v);
?>