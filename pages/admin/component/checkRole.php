<?php
session_start();
include_once "../entity/user.php";
$id_code=$_SESSION["codeSession"];
$users = new User();
if($users->checkLogin($id_code)->id_role != "admin"){
    header("location:../layout/page/login.php");
}

?>