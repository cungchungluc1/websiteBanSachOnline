<?php 
    session_start(); 
    include_once "../entity/cart.php";
    
    include_once "../entity/user.php";
if(!isset($_SESSION["codeSession"]))
    header("location:../layout/page/login.php");
$id_code=$_SESSION["codeSession"];
$use = new User();
$data = $use->checkLogin($id_code);
if($data == null)
    header("location:../layout/page/login.php");

    $c = new cart();
    $c->deleteAll($data->id_user);
    header("location:../customer/cart.php");
    // echo $c->user_id."   /   ".$c->product_id."   /   ".$c->quantity;
?>