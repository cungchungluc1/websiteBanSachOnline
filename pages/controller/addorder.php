<?php
include '../entity/order.php';
include '../entity/user.php';
include '../entity/orderDetail.php';
include_once "../entity/cart.php";
include '../common/common.php';
session_start();
$id_code=$_SESSION["codeSession"];
$u = new User();
$id_address= "";

$dataUser = $u->checklogin($id_code);
$id_order= getNewId("order");
$id_user= $dataUser->id_user;

if($_POST['is_defaul']=="0"){
    include '../entity/address.php';
    $address = new address();
    $address->id_address = getNewId("address");
    $address->id_user = $dataUser->id_user;
    $address->name = $_POST['name'];
    $address->phone = $_POST['phone'];
    $address->diachi = $_POST['diachi'];
    $address->phuong = $_POST['phuong'];
    $address->quan = $_POST['quan'];
    $address->tinh = $_POST['tinh'];
    $address->is_defaul = 1;
    $address->add($address);
    $id_address= $address->id_address;

} else if($_POST['is_defaul']=="1"){
    $id_address= $_POST['id_address'];
}
$description= $_POST['description'];

$c = new cart();
$listCart=$c->getallcart($id_user);
$total=0;
if($listCart!=null){
    include_once "../entity/product.php";
    $pro  = new Product();
    foreach ($listCart as $item) {
        $dataaproduct = $pro->getaproduct($item->product_id);
        $total += $item->quantity*$dataaproduct->price;
    }
}
$sell = 0;
if(isset($_POST["voucher"])){
    include_once "../entity/vouncher.php";
    $v1=new vouncher(); 
    $datavoucher = $v1->getaVouncher($_POST["voucher"]);
    if($datavoucher!=null){
        $sell = $datavoucher->sell;
    }
}
if($total<0) $total = 0;
$amount= $total;
$status= "Đã Đặt";
$now = getdate(); 
$date_added = $now["year"] . "-" . $now["mon"] . "-" . $now["mday"]; 
if($listCart!=null){
    if($_POST['selected_payment_method']=="offline" || $_POST['selected_payment_method']=="online"){
        include_once "../entity/order.php";
        $order = new order();
        $order->id_order =$id_order;
        $order->id_user = $id_user;
        $order->id_address = $id_address;
        $order->amount = $amount;
        $order->status = $status;
        $order->status_payment = "Chưa thanh toán";
        $order->date_added = $date_added;
        $order->add($order);
        
        include_once "../entity/orderDetail.php";
        include_once "../entity/product.php";
        $pro  = new Product();
        foreach ($listCart as $item) {
            $dataaproduct = $pro->getaproduct($item->product_id);
            $total += $item->quantity*$dataaproduct->price;
            $orderDetail = new orderDetail();
            $orderDetail->id_order_detail = $id_order;
            $orderDetail->id_product = $item->product_id;
            $orderDetail->description = "";
            $orderDetail->price = $dataaproduct->price;
            $orderDetail->quantity = $item->quantity;
            $orderDetail->total_price = $item->quantity*$dataaproduct->price;
            $orderDetail->add($orderDetail);
        }
        $c->delete($id_user);
        if($_POST['selected_payment_method']=="offline")
            header("location:../customer/home.php");
    }
    if($_POST['selected_payment_method']=="online"){
        header("location:./payment/index.php");
    }
    else header("location:../customer/home.php");
}
?>