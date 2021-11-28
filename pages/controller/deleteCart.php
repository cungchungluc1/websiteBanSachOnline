<?php 
    session_start(); 
    include_once "../entity/cart.php";
    include_once "../entity/user.php";
    $id_code=$_SESSION["codeSession"];
    $u = new User();
    $data = $u->checkLogin($id_code);
    $c = new cart();
    $c->delete($data->id_user);
    header("location:../customer/cart.php");
    // echo $c->user_id."   /   ".$c->product_id."   /   ".$c->quantity;
?>