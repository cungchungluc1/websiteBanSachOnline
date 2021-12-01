<?php
session_start();

include_once "../entity/user.php";
if(!isset($_SESSION["codeSession"]))
    header("location:../layout/page/login.php");
$id_code=$_SESSION["codeSession"];
$u = new User();
$data = $u->checkLogin($id_code);
if($data == null)
    header("location:../layout/page/login.php");


$set_voucher = "";
if(isset($_POST["voucher"]))
$set_voucher = $_POST["voucher"];
header("location:../customer/payment.php?voucher=".$set_voucher);
?>