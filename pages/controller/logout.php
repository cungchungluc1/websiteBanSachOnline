<?php
    session_start();
    $_SESSION['codeSession'] = null;
    header("location:../layout/page/login.php");
    exit(0);
?>