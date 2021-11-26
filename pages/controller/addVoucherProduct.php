<?php
include '../entity/vouncher.php';
include '../common/common.php';
$id_use = "";
$id_vouncher = "";
$id_use = ($_POST['id_user']);
$id_vouncher = ($_POST['id_vouncher']);
$id=getNewId("voucher_to_user");
$table_name="voucher_to_user";
$status=1;
$use = new vouncher();

$codeSession = $_SESSION["codeSession"];


$use->addVoucher($id,$id_vouncher,$id_use,$table_name,$status);
header('location:../admin/vouncherProduct.php?id='.$id_use, true, 301);
?>