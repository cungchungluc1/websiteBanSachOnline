<?php session_start(); 

include_once "./component/listProduct.php";
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0019)# -->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">

<?php include_once "component/head.php"; ?>

<body class="screen--lg">
    <div class="ty-tygh bp-tygh-container" id="tygh_container">
        <div class="ty-helper-container no-touch" id="tygh_main_container">
            <div class="tygh-header clearfix front_page">
                <?php include_once "component/header.php"; ?>
            </div>
            <div class="tygh-content clearfix">
                <div class="container">
                    <div class="row">
                        <div class="span12 home-slider">
                            <div class="homepage-banners">
                                <div id="banner_slider_788" class="banners owl-carousel owl-theme stopped"
                                    style="opacity: 1; display: block">
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper" style="width: 6230px; left: 0px; display: block">
                                            <div class="owl-item active" style="width: 890px">
                                                <div class="item ty-banner__image-item">
                                                    <a class="banner-link banner__link"
                                                        alt="sach-phuong-nam-book-vi.html">
                                                        <img class="ty-pict lazyOwl cm-image" id="det_img_1075847014"
                                                            src="../layout/image/PNB_50__890x396.jpg" alt="" title="" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 890px">
                                                <div class="item ty-banner__image-item">
                                                    <a class="banner-link banner__link"
                                                        alt="12-tua-sach-phuong-nam-book-dang-doc.html">
                                                        <img class="ty-pict lazyOwl vs_lazy_mobile cm-image"
                                                            id="det_img_1968629951" src="../layout/image/vs-empty.png"
                                                            style="
                                  padding: 0 0 44.494382022472%;
                                  width: 890px;
                                  height: 0 !important;
                                  opacity: 0.5;
                                " data-src="/promo/220/Sách_PNB_đoạt_giải_890x396_2.jpg" alt="" title="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="span4 home-slider">
                            <div class="hidden-phone">
                                <div class="center ty-banner__image-wrapper">
                                    <a alt="sach-phuong-nam-books.html">
                                        <img class="ty-pict cm-image" id="det_img_828420007"
                                            src="../layout/image/01.jpg" alt="" title="" /><noscript><img
                                                class="cm-image" src="../layout/image/01.jpg" width="290" height="198"
                                                alt="" title="" /></noscript>
                                    </a>
                                </div>
                            </div>
                            <div class="hidden-phone">
                                <div class="center ty-banner__image-wrapper already-visible">
                                    <a alt="business-and-economics-vi.html" target="_blank">
                                        <img class="ty-pict cm-image" id="det_img_911236266"
                                            src="../layout/image/02.jpg" alt="" title="" /><noscript><img
                                                class="cm-image" src="../layout/image/02.jpg" width="290" height="198"
                                                alt="" title="" /></noscript>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="span16 space-bottom">
                            <div class="row">
                                <?php 
                                    include_once "../entity/vouncher.php"; 
                                    include_once "../entity/user.php"; 
                                    $v=new vouncher();
                                    $listVc=null;
                                    if(session_id()&& isset($_SESSION["codeSession"])){
                                        $id_code=$_SESSION["codeSession"];
                                        $u = new User();
                                        $dataUser = $u->checklogin($id_code);
                                        if($dataUser!=null)
                                        $listVc=$v->getUseVouncher($dataUser->id_user);
                                        if($listVc!=null){
                                            include_once "../entity/image.php";
                                            $img = new image();
                                            echo '<div class="vs-mainbox-general clearfix">
                                            <h1 class="vs-mainbox-title clearfix">
                                                <span>Voucher</span>
                                            </h1>';
                                            foreach ($listVc as $item){
                                                $imgs=$img->getaimage($item->id_vouncher);
                                                if($imgs==null) $url_image = "";
                                                else $url_image = $imgs->url;
                                                echo '<div class="span4">
                                                <div class="ty-mainbox-container clearfix space-bottom hidden-phone hidden-tablet">
                                                    <h1 class="ty-mainbox-title clearfix"></h1>
                                                    <div class="ty-mainbox-body clearfix">
                                                        <div class="center ty-banner__image-wrapper already-visible">
                                                            <img class="ty-pict cm-image" id="det_img_1830804603"
                                                                src="'."../layout/".htmlentities($url_image).'" alt="" title="" /><noscript><img
                                                                    class="cm-image" src="../layout/'.htmlentities($url_image).'" width="350"
                                                                    height="176" alt="" title="" /></noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>';
                                            }
                                            echo '</div>';
                                        }
                                    }    
                                ?>



                            </div>
                            <div class="row">
                                <div class="span16">
                                    <div class="vs-mainbox-general clearfix">
                                        <h1 class="vs-mainbox-title clearfix">
                                            <span>Nhà Xuất Bản</span>
                                        </h1>
                                        <div class="vs-mainbox-body clearfix">
                                            <div class="ty-wysiwyg-content" data-ca-live-editor-object-id="0"
                                                data-ca-live-editor-object-type=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span16 list-cate">
                                    <div class="row">
                                        <?php
                                            include_once '../entity/publishingCompany.php';
                                            include_once "../entity/image.php";
                                            $img = new image();
                                            
                                            $pc = new publishingCompany();
                                            $listPC = $pc->getallpublishingCompany();
                                            if($listPC!=null)
                                            foreach ($listPC as $item) {
                                                $imgs=$img->getaimage($item->id_publishing_company);
                                                if($imgs==null) $url_image = "";
                                                else $url_image = $imgs->url;
                                        ?>
                                        <div class="span2">
                                            <div class="row">
                                                <div class="span2 ty-center">
                                                    <div class="ty-center">
                                                        <div class="center ty-banner__image-wrapper">
                                                            <a href="./publishingCompany.php?id=<?php echo htmlentities($item->id_publishing_company); ?>"
                                                                target="_blank">
                                                                <img class="ty-pict cm-image" id="det_img_1843956858"
                                                                    src="<?php if($imgs!=null) echo "../layout/".htmlentities($url_image); else echo "../layout/image/Icon_phan_loai_135x135px_hinh_that-01.png"; ?>"
                                                                    alt="<?php echo htmlentities($data->name);?>" alt=""
                                                                    title=""
                                                                    style="width:135px; height:135px" /><noscript><img
                                                                        class="cm-image"
                                                                        src="<?php if($imgs!=null) echo "../layout/".htmlentities($url_image); else echo "../layout/image/Icon_phan_loai_135x135px_hinh_that-01.png"; ?>"
                                                                        alt="<?php echo htmlentities($data->name);?>"
                                                                        style="width:135px; height:135px" alt=""
                                                                        title="" /></noscript>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ty-wysiwyg-content" data-ca-live-editor-object-id="0"
                                                        data-ca-live-editor-object-type="">
                                                        <?php echo htmlentities($item->name); ?>
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
                    <?php  
                    if($listparent != null)
                    foreach ($listparent as $item) {
                        getListProductHtmlwithParentCategory($item->id_category,12);
                    }
                    
                    
                    ?>
                    <!-- nn -->
                    <?php   ?>

                </div>
            </div>
            <?php include_once "component/footer.php"; ?>
            <!--tygh_main_container-->
        </div>
        <a alt="" id="scroll-up" class="hidden" style="display: none">
            <i class="et-icon-scroll-up"></i>
        </a>
        <!--tygh_container-->
    </div>

    <script type="text/javascript" id="" src="../layout/js/OneSignalSDK.js"></script>

    <script src="../layout/js/preload-base.js"></script>
    <script nomodule="" src="../layout/js/load.js"></script>
    <script type="module" src="../layout/js/load.esm/index.js"></script>

    <script src="../layout/js/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous" data-no-defer=""></script>
    <script src="../layout/js/jquery-migrate-3.0.1.min.js"
        integrity="sha256-F0O1TmEa4I8N24nY0bya59eP6svWcshqX1uzwaWC4F4=" crossorigin="anonymous" data-no-defer="">
    </script>
    <script type="text/javascript" src="../layout/js/flipclock.min.js"></script>
    <script type="text/javascript" src="../layout/js/product_image_gallery.js"></script>
    <script type="text/javascript" src="../layout/js/owl.carousel.min.js"></script>

    <script type="text/javascript" src="../layout/js/tygh/exceptions.js"></script>
    <script type="text/javascript" src="../layout/js/et-product_image_gallery.js"></script>
    <script src="../layout/js/update.min.js"></script>
    <script src="../layout/js/index.js"></script>
    
</body>

</html>