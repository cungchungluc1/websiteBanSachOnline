<?php include "../entity/category.php"; ?>

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
                            <form action="#" name="search_form" method="get" class="cm-processed-form">
                                <input type="hidden" name="match" value="all">
                                <input type="hidden" name="subcats" value="Y">
                                <input type="hidden" name="pcode_from_q" value="Y">
                                <input type="hidden" name="pshort" value="N">
                                <input type="hidden" name="pfull" value="N">
                                <input type="hidden" name="pname" value="Y">
                                <input type="hidden" name="pkeywords" value="Y">
                                <input type="hidden" name="search_performed" value="Y">
                                <input type="text" name="hint_q" value="" id="search_input"
                                    title="Thử tìm &quot;Nếu Biết Trăm Năm Là Hữu Hạn&quot;..."
                                    class="ty-search-block__input cm-hint"><button title="Tìm kiếm"
                                    class="ty-search-magnifier" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="hidden" name="dispatch" value="products.search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="span2 top-block-grid et-cart-account">      
                    <div class="top-cart-content et-cart ty-float-right">
                        <div class="ty-dropdown-box" id="cart_status_773">
                            <a href="#checkout-cart/" id="sw_dropdown_773"
                                class="ty-dropdown-box__title cm-combination clearfix">
                                <i class="fa fa-shopping-cart"></i>
                                <div class="ty-float-right et-cart-right">
                                    <div class="minicart-title empty-cart hand">
                                        Giỏ hàng
                                    </div>
                                    <div class="et-items">0&nbsp;sản phẩm</div>
                                </div>
                                <div class="et-cart-content hidden-desktop">
                                    <span>0</span>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="span3 top-block-grid et-cart-account">      

                    <div class="top-cart-content et-cart ty-float-right">
                        <div class="ty-dropdown-box" id="cart_status_773">
                        <?php
                        include "../entity/user.php";
                        $id_code=$_SESSION["codeSession"];
                        $u = new User();
                        $data = $u->checkLogin($id_code);
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
                        <?php
                                            include "../entity/image.php";
                                            $img = new image();
                                            $imgs=$img->getaimage($data->id_user);
                                            ?>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src=" <?php if($imgs!=null) echo "../layout/".htmlentities($imgs->url); else echo "../layout/image/cha15843577768538.png"; ?>" alt="<?php echo htmlentities($data->name);?>">
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"><?php echo htmlentities($data->name);  ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src= "<?php if($imgs!=null) echo "../layout/".htmlentities($imgs->url); else echo "../layout/image/cha15843577768538.png"; ?>" alt="<?php echo htmlentities($data->name);  ?>">
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
                                        <a href="./profileUser.php">
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
                    <?php } ?>
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