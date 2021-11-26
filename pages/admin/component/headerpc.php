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
                        // include_once "../entity/user.php";
                        $id_code=$_SESSION["codeSession"];
                        $u = new User();
                        $data = $u->checkLogin($id_code);
                        include_once "../entity/image.php";
                        $img = new image();
                        $imgs=$img->getaimage($data->id_user);
                    ?>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src=" <?php if($imgs!=null) echo "../layout/".htmlentities($imgs->url); else echo "../layout/image/cha15843577768538.png"; ?>" alt="<?php echo htmlentities($data->name);?>" alt="<?php echo htmlentities($data->name);?>">
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"><?php echo htmlentities($data->name);  ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src=" <?php if($imgs!=null) echo "../layout/".htmlentities($imgs->url); else echo "../layout/image/cha15843577768538.png"; ?>" alt="<?php echo htmlentities($data->name);?>" alt="<?php echo htmlentities($data->name);  ?>">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"><?php echo htmlentities($data->name);  ?></a>
                                        </h5>
                                        <span class="email"><?php echo htmlentities($data->email);  ?></span>
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

<script>
    $(document).ready(function() {
    $('#dataTable').DataTable();
    } );
</script>