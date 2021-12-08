<?php include_once "../entity/publishingCompany.php"; ?>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet"
        media="all" />
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet" media="all" />

    <!-- Fontfaces CSS-->
    <link href="../layout/css/font-face.css" rel="stylesheet" media="all" />
    <link href="../layout/css/datatable.css" rel="stylesheet" media="all" />
    <link href="../layout/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all" />
    <link href="../layout/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all" />
    <link href="../layout/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all" />
    <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
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
                                <h3>Create Publishing Company</h3>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive" style="overflow-x: none !important">
                                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <form autocomplete="off" action="../controller/addPublishingCompany.php"
                                            method="POST" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Publishing
                                                    Company
                                                    Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="name" class="form-control" />
                                                </div>
                                            </div>
                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-9">
                                                        <textarea cols="80" id="editor1" name="description"
                                                            rows="5"></textarea>
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
                                            </fieldset>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="phone" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="address" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" name="email" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="file" name="fileToUpload"
                                                        id="fileToUpload" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-9">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        <i class="fa fa-dot-circle-o"></i> Create
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
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3>Manage Publishing Company</h3>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="dataTable"
                                        class="table table-bordered table-hover display dataTable no-footer" role="grid"
                                        aria-describedby="dataTable_info">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                        $pc  = new publishingCompany();
                                                        $list = $pc->getallpublishingCompany();
                                                        $i = 1;
                                                        if($list!=null)
                                                        foreach ($list as $item) {
                                                        ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo htmlentities($i++); ?></td>
                                                <td><?php echo '<img class="ty-pict cm-image"
                                                                    id="det_img_1746761672"
                                                                    src="../layout/'.htmlentities($item->url).'"
                                                                    alt="" title="" style="height: 50px; width: auto;" />'; ?>
                                                </td>
                                                <td><?php echo htmlentities($item->name); ?></td>
                                                <td><?php echo ($item->description); ?></td>
                                                <td><?php echo htmlentities($item->phone); ?>
                                                <td><?php echo htmlentities($item->address); ?>
                                                <td><?php echo htmlentities($item->email); ?>
                                                </td>
                                                <td><a
                                                        href="updatePublishingCompany.php?id=<?php echo htmlentities($item->id_publishing_company); ?>"><i
                                                            class="fas fa-edit"></i></a> <i class="fas fa-remove"></i>
                                                </td>
                                            </tr>
                                            <?php
                                                        }
                                                        ?>


                                        </tbody>
                                    </table>

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