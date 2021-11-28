<?php session_start(); 

include_once "./component/listProduct.php";
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0019)# -->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">

<?php include_once "component/head.php"; ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body class="screen--lg" >
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
                          <a
                            href="home.php"
                            class="ty-breadcrumbs__a"
                            >Trang chủ</a
                          ><i class="vs-icon-arrow-right"></i
                          ><a class="ty-breadcrumbs__a" >profile</a>
                        </div>
                        <!--breadcrumbs_10-->
                      </div>
                    </div>
                  </div>
                </div>
                    <div class="row">
                        <div class="span16">
                            <form  autocomplete="off" action="../controller/updateuser.php" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4"> 
                                            
                                            <img class="ty-pict cm-image"
                                                        id="det_img_1746761672"
                                                        src=" <?php if($imgs!=null) echo "../layout/".htmlentities($imgs->url); else echo "../layout/image/cha15843577768538.png"; ?>"
                                                        alt="" title="" style="height: 213px; width: auto;" /></label>
                                        <input class="form-control" type="file" name="fileToUpload" id="fileToUpload"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputEmail4">Full Name</label>
                                    <input type="text" name="name" value="<?php echo htmlentities($data->name); ?>" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-3">
                                    <label for="inputEmail4">Birthday</label>
                                    <input type="date" name="birthday" value="<?php echo htmlentities($data->birthday); ?>" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    
                                    <div class="form-group col-md-3">
                                        <label for="inputAddress">Sex</label>
                                        <div class="form-control" style="border:none;">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="nam" <?php if ($data->sex == "nam") echo htmlentities('checked="checked"');?>>
                                                <label class="form-check-label" for="inlineRadio1">nam</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="nu" <?php if ($data->sex == "nu") echo htmlentities('checked="checked"');?>>
                                                <label class="form-check-label" for="inlineRadio2">nu</label>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                    <label for="inputEmail4">Phone</label>
                                    <input type="text" name="phone" value="<?php echo htmlentities($data->phone); ?>" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" name="email" value="<?php echo htmlentities($data->email); ?>" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Update</button>
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
    <script src="https://cdn-asset.optimonk.com/vendor/swiper.min.js"></script>
</body>

</html>