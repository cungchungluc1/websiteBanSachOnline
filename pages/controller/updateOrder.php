<?php
include '../entity/order.php';
$status = "";
$status_payment = "";
$id_order = "";

$status = ($_POST['status']);
$status_payment = ($_POST['status_payment']);
$id_order = ($_POST['id_order']);

$use = new order();

$use->status = $status;
$use->status_payment = $status_payment;
$use->id_order = $id_order;

$use->updateStatus($use);
header('location:../admin/updateOrder.php?id='.$id_order, true, 301);
?>