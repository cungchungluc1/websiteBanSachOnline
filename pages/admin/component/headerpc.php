<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <div class="form-header"></div>
                <div class="header-button">
                    <div class="noti-wrap">
                        <div class="noti__item js-item-menu"></div>
                        <div class="noti__item js-item-menu"></div>
                        <div class="noti__item js-item-menu"></div>
                    </div>
                    <?php
                        // include "../entity/user.php";
                        $id_code=$_SESSION["codeSession"];
                        $u = new User();
                        $data = $u->checkLogin($id_code);
                    ?>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="images/icon/avatar-01.jpg" alt="<?php echo htmlentities($data->name);?>">
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"><?php echo htmlentities($data->name);  ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="images/icon/avatar-01.jpg" alt="<?php echo htmlentities($data->name);  ?>">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"><?php echo htmlentities($data->name);  ?></a>
                                        </h5>
                                        <span class="email"><?php echo htmlentities($data->email);  ?></span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="../controller/logout.php"><i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>