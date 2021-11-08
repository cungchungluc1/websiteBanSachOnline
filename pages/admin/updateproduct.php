<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="au theme template" />
    
    <meta name="keywords" content="au theme template" />

    <!-- Title Page-->
    <title>Dashboard</title>

    <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
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
        <?php include "./component/headermobie.php"; ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php include "./component/navbar.php"; ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER MOBILE-->
            <?php include "./component/headerpc.php"; ?>
            <!-- HEADER MOBILE-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3>Update Product</h3>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive" style="overflow-x: none !important">
                                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <form autocomplete="off" action="../controller/updateproduct.php" method="POST">
                                        <?php
                                            include "../entity/product.php";
                                            $cate  = new Product();
                                            include '../entity/category.php';
                                            $c  = new category();
                                            $list = $c->getallcategory();
                                            $data = $cate->getaproduct($_GET['id']);?>
                                            <input type="hidden" name="id_product" value="<?php echo htmlentities($data->id_product); ?>"/>
                                            <div class="form-group row">
                                                <label for="inputPassword3"
                                                    class="col-sm-3 col-form-label">Category</label>
                                                <div class="col-sm-9">
                                                    <select id="inputState" name="category" class="form-control">
                                                    <option value=""
                                                            <?php if ($data->id_category == '' || $data->id_category == null) echo htmlentities('selected=""'); ?>>
                                                            Choose...</option>
                                                        <?php
                                                        
                                                        foreach ($list as $item) {
                                                        ?>
                                                        <option value="<?php echo htmlentities($item->id_category); ?>" <?php if ($data->id_category == $item->id_category) echo htmlentities('selected=""');?> >
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
                                                    <input type="text" name="productname" value="<?php echo htmlentities($data->name); ?>" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Product
                                                    Publishing Company</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="productpublishing" value=<?php echo htmlentities($data->id_publishing_company); ?> class="form-control"
                                                        name="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3"
                                                    class="col-sm-3 col-form-label">Price</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="price" value=<?php echo htmlentities($data->price); ?> class="form-control" name="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Selling
                                                    Price</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="sellingprice" value=<?php echo htmlentities($data->sell); ?> class="form-control"
                                                        name="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Date Publishing</label>
                                                <div class="col-sm-9">
                                                    <input type="date" name="date_publishing" value=<?php echo htmlentities($data->date_publishing); ?> class="form-control"
                                                        />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Product
                                                    Description</label>
                                                <div class="col-sm-9">
                                                    <textarea cols="80" class="form-control" name="productDescription" rows="5"><?php echo htmlentities($data->description); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Product
                                                    Description Detail</label>
                                                <div class="col-sm-9">
                                                    <textarea cols="80" id="editor1" name="editor1" rows="5"><?php echo htmlentities($data->description_detail); ?></textarea>
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
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Product
                                                    Image</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="file" id="formFileMultiple"
                                                        multiple />
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
<!-- end document-->