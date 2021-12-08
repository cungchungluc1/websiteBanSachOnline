<?php session_start(); 

include_once "./component/listProduct.php";

include_once "../entity/user.php";
if(!isset($_SESSION["codeSession"]))
    header("location:../layout/page/login.php");
$id_code=$_SESSION["codeSession"];
$use = new User();
$data = $use->checkLogin($id_code);
if($data == null)
    header("location:../layout/page/login.php");


?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0019)# -->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">

<?php include_once "component/head.php"; ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<body class="screen--lg">
    <div class="ty-tygh bp-tygh-container" id="tygh_container">
        <div class="ty-helper-container no-touch" id="tygh_main_container">
            <div class="tygh-header clearfix front_page">
                <?php include_once "component/header.php"; ?>
            </div>
            <div class="tygh-content clearfix">
                <div class="container">
                    <div class="row">
                        <div class="span16">
                            <div class="hidden-phone">
                                <div id="breadcrumbs_10">
                                    <div class="ty-breadcrumbs clearfix">
                                        <a href="home.php" class="ty-breadcrumbs__a">Trang chủ</a><i
                                            class="vs-icon-arrow-right"></i><a class="ty-breadcrumbs__a">My Order</a>
                                    </div>
                                    <!--breadcrumbs_10-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span16">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="dataTable"
                                        class="table table-bordered table-hover display dataTable no-footer" role="grid"
                                        aria-describedby="dataTable_info">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Publishing Company</th>
                                                <th>Category</th>
                                                <th>Quantity</th>
                                                <th>price</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                        include_once "../entity/orderDetail.php";
                                                        $cate  = new orderDetail();
                                                        $i = 1;
                                                        $list = $cate->getallorderwithorderDetail($_GET["id"]);
                                                        include '../entity/publishingCompany.php';
                                                        $pc = new publishingCompany();
                                                        $ca  = new category();
                                                        
                                                        if($list!=null)
                                                        foreach ($list as $item) {
                                                            $aPC = $pc->getapublishingCompany($item->id_publishing_company);
                                                            $acate = $ca->getacategory($item->id_category);
                                                            $namepc="";
                                                            $nameCate="";
                                                            if($aPC!=null){
                                                                $namepc=$aPC->name;
                                                            }
                                                            if($acate!=null){
                                                                $nameCate=$acate->name;
                                                            }
                                                            
                                                        ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo htmlentities($i++); ?></td>
                                                <td><?php echo '<img class="ty-pict cm-image"
                                                        id="det_img_1746761672"
                                                        src="../layout/'.htmlentities($item->url).'"
                                                        alt="" title="" style="height: 50px; width: auto;" />'; ?>
                                                </td>
                                                <td><?php echo htmlentities($item->name); ?></td>
                                                <td><?php echo htmlentities($namepc); ?></td>
                                                <td><?php echo htmlentities($nameCate); ?></td>
                                                <td><?php echo htmlentities($item->quantity); ?></td>
                                                <td><?php echo htmlentities($item->price); ?></td>
                                                <td><?php echo htmlentities($item->total_price); ?></td>
                                            </tr>
                                            <?php
                                                        }
                                                        ?>

                                        </tbody>
                                    </table>
                                    <!-- end table-responsive-->
                                </div>
                            </div>
                        </div>
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
        <script data-no-defer=""></script>

        <script type="text/javascript"></script>

        <script type="text/javascript" src="../layout/js/flipclock.min.js"></script>
        <script type="text/javascript" src="../layout/js/product_image_gallery.js"></script>
        <script></script>
        <script></script>
        <script type="text/javascript" src="../layout/js/owl.carousel.min.js"></script>

        <script type="text/javascript" src="../layout/js/tygh/exceptions.js"></script>
        <script type="text/javascript" src="../layout/js/et-product_image_gallery.js"></script>
        <script src="../layout/js/update.min.js"></script>
        <script src="../layout/js/index.js"></script>
        <div class="hidden" title="undefined" id="undefined"></div>
        <script src="https://cdn-asset.optimonk.com/vendor/swiper.min.js"></script>
</body>

</html>