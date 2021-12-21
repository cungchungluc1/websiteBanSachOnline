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
                                            class="vs-icon-arrow-right"></i><a class="ty-breadcrumbs__a">Thay đổi mật
                                            khẩu</a>
                                    </div>
                                    <!--breadcrumbs_10-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span16">
                            <form autocomplete="off" action="../controller/changePass.php" method="POST"
                                enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-md-1"></div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Password old</label>
                                        <input type="password" name="password_old" minlength="8" maxlength="50" value=""
                                            class="form-control" id="inputEmail4" placeholder="Enter password old"
                                            required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1"></div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Password new</label>
                                        <input type="password" name="password_new" minlength="8" maxlength="50" value=""
                                            class="form-control" id="inputEmail4" placeholder="Enter password new"
                                            required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1"></div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Password confirm</label>
                                        <input type="password" name="password_confirm" minlength="8" maxlength="50"
                                            value="" class="form-control" id="inputEmail4"
                                            placeholder="Enter password confirm" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-1"></div>
                                    <button type="submit" class="btn btn-primary col-md-1">Update</button>
                                </div>
                            </form>
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
        
</body>

</html>