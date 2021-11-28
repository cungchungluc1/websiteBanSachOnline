<?php
include '../entity/user.php';
include '../common/common.php';
session_start();
$codeSession = "";

$password_old = md5($_POST['password_old']);
$password_new = md5($_POST['password_new']);
$password_confirm = md5($_POST['password_confirm']);
$codeSession = $_SESSION["codeSession"];

$use = new User();

$u= $use->checklogin($codeSession);
if($password_new == $password_confirm){
    if($password_new != $password_old){
        if($u!=null){
            if($u->password == $password_old){
                $use->id_user = $u->id_user;
                $use->password = $password_new;
                $use->updatePass($use);
                echo '<script> alert("Success!!! cập nhật thành công");
                window.location.replace("../customer/profileUser.php");
                </script>';
            } else {
                echo '<script> alert("Error!!! Nhập sai password");
                window.location.replace("../customer/changePass.php");
                </script>';
            }
        } else {
            echo '<script> alert("Error!!! Phiên Bản session đã được làm mới");
            window.location.replace("../layout/page/logout.php");
            </script>';
        }
    } else {
        echo '<script> alert("Bạn đã nhập trùng password cũ");
        window.location.replace("../customer/changePass.php");
        </script>';
    }
} else {
    echo '<script> alert("Bạn đã nhập sai password confirm");
    window.location.replace("../customer/changePass.php");
    </script>';
}

// echo $u->password." == ".$password_old." =!= ".$password_new." == ".$password_confirm;

?>
