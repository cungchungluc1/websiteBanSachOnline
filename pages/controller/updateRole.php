<?php
include '../entity/user.php';
if(!session_id())
    session_start();
$id_user = "";
$id_role = "";
$id_user = ($_POST['id_user']);
$id_role = ($_POST['id_role']);

$use = new User();

$codeSession = $_SESSION["codeSession"];
$use->id_user = $id_user;
$use->id_role = $id_role;

$use->updateRole($codeSession,$use);
header('location:../admin/manageuser.php', true, 301);
?>