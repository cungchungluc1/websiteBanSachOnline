<?php 
    session_start(); 
    include_once "../entity/cart.php";
    include_once "../entity/user.php";
    if(!isset($_SESSION["codeSession"])){
        echo '<script> alert("Bạn cần phải đăng nhập");
                window.location.replace("../layout/page/login.php");
                </script>';
    }
    $id_code=$_SESSION["codeSession"];
    $u = new User();
    $data = $u->checkLogin($id_code);
    if($data == null){
        echo '<script> alert("Bạn cần phải đăng nhập");
                window.location.replace("../layout/page/login.php");
                </script>';
    }
    $c = new cart();
    $now = getdate();
    $c->delete($data->id_user,$_GET["id_product"]);
    // header("../customer/cart.php");
    // echo $c->user_id."   /   ".$c->product_id."   /   ".$c->quantity;
?>