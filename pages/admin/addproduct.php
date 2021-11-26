<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="au theme template" />
    
    <meta name="keywords" content="au theme template" />

    <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="../layout/css/font-face.css" rel="stylesheet" media="all" />
    <link href="../layout/css/datatable.css" rel="stylesheet" media="all" />
    <link href="../layout/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all" />
    <link href="../layout/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all" />
    <link href="../layout/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all" />

    <!-- Bootstrap CSS-->
    <link href="../layout/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all" />

    <!-- Vendor CSS-->
    <link href="../layout/vendor/animsition/animsition.min.css" rel="stylesheet" media="all" />
    <link href="../layout/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"
        media="all" />
    <link href="../layout/vendor/wow/animate.css" rel="stylesheet" media="all" />
    <link href="../layout/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all" />
    <link href="../layout/vendor/slick/slick.css" rel="stylesheet" media="all" />
    <link href="../layout/vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link href="../layout/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all" />

    <!-- Main CSS-->
    <link href="../layout/css/theme.css" rel="stylesheet" media="all" />
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php include_once "./component/headermobie.php"; ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php include_once "./component/navbar.php"; ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include_once "./component/headerpc.php"; ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3>Insert Product</h3>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive" style="overflow-x: none !important">
                                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <form autocomplete="off" action="../controller/addproduct.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label for="inputPassword3"
                                                    class="col-sm-3 col-form-label">Category</label>
                                                <div class="col-sm-9">
                                                    <select id="inputState" name="category" class="form-control">
                                                        <option value="" selected="">Choose...</option>
                                                        <?php
                                                                    
                                                        include '../entity/publishingCompany.php';
                                                        $pc = new publishingCompany();
                                                        $listPC = $pc->getallpublishingCompany();
                                                        include_once "../entity/category.php";
                                                        $cate  = new category();
                                                        $list = $cate->getallcategory();
                                                        foreach ($list as $item) {
                                                        ?>
                                                        <option value="<?php echo htmlentities($item->id_category); ?>">
                                                            <?php echo htmlentities($item->name); ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Product
                                                    Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="productname" class="form-control"
                                                         />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Product
                                                    Publishing Company</label>
                                                <div class="col-sm-9">
                                                <select id="productpublishing" name="productpublishing" class="form-control">
                                                    <option value="">Choose...</option>
                                                        <?php                                                        
                                                        foreach ($listPC as $item) {
                                                        ?>
                                                        <option value="<?php echo htmlentities($item->id_publishing_company); ?>">
                                                            <?php echo htmlentities($item->name); ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>   
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3"
                                                    class="col-sm-3 col-form-label">Price</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="price" class="form-control"  />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Selling
                                                    Price</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="sellingprice" class="form-control"
                                                         />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Quantity</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="quantity" class="form-control"
                                                         />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Date Publishing</label>
                                                <div class="col-sm-9">
                                                 <input type="date" name="date_publishing" value="" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Product
                                                    Description</label>
                                                <div class="col-sm-9">
                                                    <textarea cols="80" class="form-control" name="productDescription" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Product
                                                    Description Detail</label>
                                                <div class="col-sm-9">
                                                    <textarea cols="80" id="editor1" name="editor1" rows="5"></textarea>
                                                    <script>
                                                    CKEDITOR.replace("editor1", {
                                                        fullPage: true,
                                                        extraPlugins: "docprops",
                                                        // Disable content filtering because if you use full page mode, you probably
                                                        // want to  freely enter any HTML content in source mode without any limitations.
                                                        allowedContent: true,
                                                        height: 220,
                                                        removeButtons: "PasteFromWord",
                                                    });
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Product Image</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="file" name="fileToUpload" id="fileToUpload"/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label"></label>
                                                <div class="col-sm-9">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        <i class="fa fa-dot-circle-o"></i> Add
                                                    </button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end table-responsive-->
                            </div>
                            <!-- end card-body-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>
    </div>

    <!-- Jquery JS-->
    <script src="../layout/vendor/jquery-3.2.1.min.js"></script>
    <script src="../layout/js/datatable.js"></script>
    <!-- Bootstrap JS-->
    <script src="../layout/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../layout/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../layout/vendor/slick/slick.min.js"></script>
    <script src="../layout/vendor/wow/wow.min.js"></script>
    <script src="../layout/vendor/animsition/animsition.min.js"></script>
    <script src="../layout/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../layout/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../layout/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="../layout/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../layout/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../layout/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../layout/vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="../layout/js/main.js"></script>
</body>

</html>