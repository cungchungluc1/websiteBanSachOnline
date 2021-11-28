<?php include_once "../entity/category.php"; ?>
<div class="container et-header et-full-grid">
    <div class="row">
        <div class="span16 et-fw-wrap et-top-header">
            <div class="row">
                <div class="span4 top-logo-grid">
                    <div class="top-logo">
                        <div class="ty-logo-container">
                            <a href="./home.php" title="">
                                <img class="ty-pict ty-logo-container__image cm-image" id="det_img_1653948118"
                                    src="../layout/image/logoBook.png"  data-src="" width="290" height="56"
                                    alt="" title="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="span7 search-block-grid top-block-grid">
                    <div class="top-search">
                        <div class="ty-search-block">
                            <form action="./search.php" name="search_form" method="get" class="cm-processed-form">
                                <input type="text" name="search" value="" id="search_input"
                                    title="Thử tìm &quot;Nếu Biết Trăm Năm Là Hữu Hạn&quot;..."
                                    class="ty-search-block__input cm-hint"><button title="Tìm kiếm"
                                    class="ty-search-magnifier" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="span2 top-block-grid et-cart-account">      
                    <div class="top-cart-content et-cart ty-float-right">
                        <div class="ty-dropdown-box" id="cart_status_773">
                            <a href="./cart.php" id="sw_dropdown_773"
                                class="ty-dropdown-box__title cm-combination clearfix">
                                <i class="fa fa-shopping-cart"></i>
                                <div class="ty-float-right et-cart-right">
                                    <div class="minicart-title empty-cart hand">
                                        Giỏ hàng
                                    </div>
                                    <?php
                                        include_once "../entity/cart.php";
                                        include_once "../entity/user.php";
                                        $listCart=null;
                                        if(!!session_id() && isset($_SESSION["codeSession"])){
                                            $id_code=$_SESSION["codeSession"];
                                            $u = new User();
                                            $data = $u->checkLogin($id_code);
                                            $c = new cart();
                                            $now = getdate();
                                            $listCart=$c->getallcart($data->id_user);
                                        }
                                        
                                        $total=0;
                                        if($listCart!=null){
                                            foreach ($listCart as $item) {
                                                $total += $item->quantity;
                                            }
                                        }
                                    ?>
                                    <div class="et-items"><?php echo htmlentities($total); ?>&nbsp;sản phẩm</div>
                                </div>
                                <div class="et-cart-content hidden-desktop">
                                    <span><?php echo htmlentities($total); ?></span>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="span3 top-block-grid et-cart-account">      

                    <div class="top-cart-content et-cart ty-float-right">
                        <div class="ty-dropdown-box" id="cart_status_773">
                        <?php
                        include_once "../entity/user.php";
                        if(!session_id()||!isset($_SESSION["codeSession"])){
                        ?>
                            <a href="../layout/page/login.php" id="sw_dropdown_773"
                                class="ty-dropdown-box__title cm-combination clearfix">
                                <i class="fa fa-user"></i>
                                <div class="ty-float-right et-cart-right">
                                    <div class="minicart-title empty-cart hand">
                                        Login
                                    </div>
                                </div>
                            </a>
                    <?php }  else { 
                        $id_code=$_SESSION["codeSession"];
                        $u = new User();
                        $data = $u->checkLogin($id_code); 
                        include_once "../entity/image.php";
                        $img = new image();
                        $imgs=$img->getaimage($data->id_user);
                        if(!isset($data)){
                            ?>
    
                                <a href="../layout/page/login.php" id="sw_dropdown_773"
                                    class="ty-dropdown-box__title cm-combination clearfix">
                                    <i class="fa fa-user"></i>
                                    <div class="ty-float-right et-cart-right">
                                        <div class="minicart-title empty-cart hand">
                                            Login
                                        </div>
                                    </div>
                                </a>
                        <?php } else { ?> 
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src=" <?php if($imgs!=null) echo "../layout/".htmlentities($imgs->url); else echo "../layout/image/cha15843577768538.png"; ?>" alt="<?php echo htmlentities($data->name);?>">
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" alt=""><?php echo htmlentities($data->name);  ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown" style="z-index: 1000;">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="./profileUser.php">
                                            <img src= "<?php if($imgs!=null) echo "../layout/".htmlentities($imgs->url); else echo "../layout/image/cha15843577768538.png"; ?>" alt="<?php echo htmlentities($data->name);  ?>">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="./profileUser.php"><?php echo htmlentities($data->name);  ?></a>
                                        </h5>
                                        <span class="email"><?php echo htmlentities($data->email);  ?></span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="./profileUser.php">
                                            <i class="zmdi zmdi-account"></i>Thông tin cá nhân
                                        </a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="./changePass.php">
                                            <i class="zmdi zmdi-account"></i>Thay đổi mật khẩu
                                        </a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="./likeProduct.php">
                                            <i class="zmdi zmdi-account"></i>Danh Sách Yêu Thích
                                        </a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="./myOrder.php">
                                            <i class="zmdi zmdi-account"></i>Đơn hàng của tôi
                                        </a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="../controller/logout.php"><i class="zmdi zmdi-power"></i>Đăng xuất</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } }?>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    <div class="row" style="min-height: 46px">
        <div class="span16 top-menu-grid et-sticky-menu et-full-width">
            <div class="row">
                <div class="span16 et-fw-wrap">
                    <div class="">
                        <ul class="ty-menu__items cm-responsive-menu">
                            <li class="ty-menu__item ty-menu__menu-btn visible-phone visible-tablet">
                                <a class="ty-menu__item-link"><i class="ty-icon-short-list"></i><span>Danh
                                        Mục</span></a>
                            </li>
                            <?php
                                $cate  = new category();
                                $listparent = $cate->getparentcategory();
                                
                                if($listparent != null)
                                foreach ($listparent as $item) {
                                    $subparent = $cate->getsubcategory($item->id_category);
                                ?>
                                <li class="ty-menu__item cm-menu-item-responsive">
                                <a class="ty-menu__item-toggle visible-phone visible-tablet cm-responsive-menu-toggle"><i
                                        class="ty-menu__icon-open ty-icon-down-open"></i><i
                                        class="ty-menu__icon-hide ty-icon-up-open"></i></a><a
                                    href="<?php  echo "./category.php?id=".htmlentities($item->id_category); ?>" class="ty-menu__item-link"><?php echo htmlentities($item->name); ?></a>
                                <?php if($subparent != null)?>
                                <div class="ty-menu__submenu no-dd-img"
                                    id="topmenu_52_c1345d85b656198ccd7166c284200808">
                                    <ul class="ty-menu__submenu-items cm-responsive-menu-submenu" >
                                <?php
                                foreach ($subparent as $itemsub){ ?>
                                        <li class="ty-top-mine__submenu-col">
                                            <div class="ty-menu__submenu-item-header">
                                                <a href="<?php echo "./category.php?id=".htmlentities($itemsub->id_category); ?>" class="ty-menu__submenu-link"><?php echo htmlentities($itemsub->name); ?></a>
                                            </div>
                                            <?php 
                                                $subparent1 = $cate->getsubcategory($itemsub->id_category);
                                                if($subparent1 != null){                                                    
                                            ?>
                                            <div class="ty-menu__submenu">
                                                <ul class="ty-menu__submenu-list cm-responsive-menu-submenu">
                                                <?php foreach ($subparent1 as $itemsub1){ ?>
                                                    <li class="ty-menu__submenu-item">
                                                        <a href="<?php echo "./category.php?id=".htmlentities($itemsub1->id_category); ?>" class="ty-menu__submenu-link"><?php echo htmlentities($itemsub1->name); ?></a>
                                                    </li>
                                                <?php }?>
                                                </ul>
                                            </div>
                                            <?php }?>
                                        </li>
                                   
                                <?php } ?>
                                </ul>
                                </div>
                            </li>
                                <?php
                                    }
                            ?>
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../layout/vendor/jquery-3.2.1.min.js"></script>
    <script src="../layout/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../layout/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../layout/vendor/animsition/animsition.min.js"></script>
    <script src="../layout/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

    <!-- Main JS-->
    <script src="../layout/js/main.js"></script>