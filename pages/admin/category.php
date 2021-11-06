<?php include "../entity/category.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="au theme template" />
    <meta name="author" content="Hau Nguyen" />
    <meta name="keywords" content="au theme template" />

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
        <?php include "./component/headermobie.php"; ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php include "./component/navbar.php"; ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include "./component/headerpc.php"; ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3>Create category</h3>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive" style="overflow-x: none !important">
                                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <form autocomplete="off" action="../controller/addCategory.php" method="POST">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Parent
                                                    Category</label>
                                                <div class="col-sm-9">
                                                    <select id="inputState" name="parentCategory" class="form-control">
                                                        <option value="" selected="">Choose...</option>
                                                        <?php
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
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Category
                                                    Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="nameCategory" class="form-control" />
                                                </div>
                                            </div>
                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" name="description" rows="5"
                                                            id="comment"></textarea>
                                                    </div>
                                                </div>
                                            </fieldset>
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
                                <h3>Manage Category</h3>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_length" id="dataTable_length">
                                                    <label>Show
                                                        <select name="dataTable_length" aria-controls="dataTable"
                                                            class="custom-select custom-select-sm form-control form-control-sm">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select>
                                                        entries</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div id="dataTable_filter" class="dataTables_filter">
                                                    <label>Search:<input type="search"
                                                            class="form-control form-control-sm" placeholder=""
                                                            aria-controls="dataTable" /></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="dataTable"
                                                    class="table table-bordered table-hover display dataTable no-footer"
                                                    style="width: 100%" role="grid" aria-describedby="dataTable_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th tabindex="0" aria-controls="dataTable" rowspan="1"
                                                                colspan="1" style="width: 45px">
                                                                #
                                                            </th>
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="dataTable" rowspan="1" colspan="1"
                                                                aria-sort="ascending"
                                                                aria-label="Name: activate to sort column descending"
                                                                style="width: 285px">
                                                                Category
                                                            </th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Position: activate to sort column ascending"
                                                                style="width: 282px">
                                                                Description
                                                            </th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Office: activate to sort column ascending"
                                                                style="width: 135px">
                                                                Parent Category
                                                            </th>
                                                            <th tabindex="0" aria-controls="dataTable" rowspan="1"
                                                                colspan="1" style="width: 107px">
                                                                Action
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $cate  = new category();
                                                        $list = $cate->showallcategory();
                                                        $i = 1;
                                                        foreach ($list as $item) {
                                                        ?>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1"><?php echo htmlentities($i++); ?></td>
                                                            <td><?php echo htmlentities($item->name); ?></td>
                                                            <td><?php echo htmlentities($item->description); ?></td>
                                                            <td><?php echo htmlentities($item->id_parten_category); ?>
                                                            </td>
                                                            <td><a
                                                                    href="updatecategory.php?id=<?php echo htmlentities($item->id_category); ?>"><i
                                                                        class="fas fa-edit"></i></a> <i
                                                                    class="fas fa-remove"></i></td>
                                                        </tr>
                                                        <?php
                                                        }
                                                        ?>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="dataTable_info" role="status"
                                                    aria-live="polite">
                                                    Showing 1 to 5 of 5 entries
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="dataTable_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="dataTable_previous">
                                                            <a href="#" aria-controls="dataTable" data-dt-idx="0"
                                                                tabindex="0" class="page-link">Previous</a>
                                                        </li>
                                                        <li class="paginate_button page-item active">
                                                            <a href="#" aria-controls="dataTable" data-dt-idx="1"
                                                                tabindex="0" class="page-link">1</a>
                                                        </li>
                                                        <li class="paginate_button page-item">
                                                            <a href="#" aria-controls="dataTable" data-dt-idx="2"
                                                                tabindex="0" class="page-link">2</a>
                                                        </li>
                                                        <li class="paginate_button page-item">
                                                            <a href="#" aria-controls="dataTable" data-dt-idx="3"
                                                                tabindex="0" class="page-link">3</a>
                                                        </li>
                                                        <li class="paginate_button page-item">
                                                            <a href="#" aria-controls="dataTable" data-dt-idx="4"
                                                                tabindex="0" class="page-link">4</a>
                                                        </li>
                                                        <li class="paginate_button page-item next" id="dataTable_next">
                                                            <a href="#" aria-controls="dataTable" data-dt-idx="5"
                                                                tabindex="0" class="page-link">Next</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
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