<?php
$set_voucher = "";
if(isset($_POST["voucher"]))
$set_voucher = $_POST["voucher"];
header("location:../customer/payment.php?voucher=".$set_voucher);
?>