<?php
    session_start();
    $_SESSION['codeSession'] = null;
    session_destroy();
    header("location:../layout/page/login.php");
    exit(0);
?> 