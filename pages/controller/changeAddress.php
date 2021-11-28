<?php 
    session_start(); 
    include_once "../entity/address.php";
    include_once "../entity/user.php";
    $id_code=$_SESSION["codeSession"];
    $u = new User();
    $data = $u->checkLogin($id_code);
    $address = new address();
    $address->updateNonDefaul($data->id_user);
    $set_voucher = "";
    if(isset($_GET["voucher"]))
    $set_voucher = $_GET["voucher"];
    header("location:../customer/payment.php?voucher=".$set_voucher);
    // echo $c->user_id."   /   ".$c->product_id."   /   ".$c->quantity;
?>