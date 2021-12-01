<?php 
    session_start(); 
    include_once "../entity/cart.php";
    include_once "../entity/user.php";
    if(!isset($_SESSION["codeSession"]))
        header("location:../layout/page/login.php");
    $id_code=$_SESSION["codeSession"];
    $u = new User();
    $data = $u->checkLogin($id_code);
    if($data == null)
        header("location:../layout/page/login.php");
    $c = new cart();
    $now = getdate(); 
	$ngaydathang = $now["year"] . "-" . $now["mon"] . "-" . $now["mday"]; 
    $c->user_id=$data->id_user;
    $c->product_id=$_POST["id_product"];
    $c->quantity=$_POST["product_quantity"];
    $c->date_update=$ngaydathang;
    $c->upsert($c);
    // echo $c->user_id."   /   ".$c->product_id."   /   ".$c->quantity;
?>