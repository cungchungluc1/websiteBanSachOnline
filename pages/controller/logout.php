<?php
    $_SESSION['username'] = null;
    $_SESSION["role"] = null;
    $_SESSION["login"] = false;
    header("location:../layout/page/login.php");
    exit(0);
?>