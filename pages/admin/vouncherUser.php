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
                        <?php include_once "../entity/vouncher.php"; 
                            $v=new vouncher();
                            $listV=$v->getallvouncher();
                        ?>
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3>Add Voucher To User</h3>
                            </div>

                            <div class="card-body">
                                <form autocomplete="off" action="../controller/addVoucherUser.php" method="POST">
                                    <?php
                                                include_once '../entity/user.php';
                                                if(!session_id())
                                                    session_start();
                                                $list = null;
                                                $data = null;
                                                if(!!session_id()){
                                                    $id_code=$_SESSION["codeSession"];
                                                    $u = new User();
                                                    $data = $u->getUser($id_code,$_GET['id']);
                                                }
                                            ?>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">
                                            Name</label>
                                        <div class="col-sm-9">
                                            <?php echo htmlentities($data->name); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">
                                            Sex</label>
                                        <div class="col-sm-9">
                                            <?php echo htmlentities($data->sex); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">
                                            Email</label>
                                        <div class="col-sm-9">
                                            <?php echo htmlentities($data->email); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">
                                            Phone</label>
                                        <div class="col-sm-9">
                                            <?php echo htmlentities($data->phone); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Voucher</label>
                                        <div class="col-sm-3">
                                            <input type="hidden" name="id_user"
                                                value="<?php echo htmlentities($data->id_user); ?>" />
                                            <select id="inputState" name="id_vouncher" class="form-control">
                                                <option value="">Choose...</option>
                                                <?php
                                                        if($listV!=null)
                                                        foreach ($listV as $item) {
                                                        ?>
                                                <option value="<?php echo htmlentities($item->id_vouncher); ?>">
                                                    <?php echo htmlentities($item->name); ?></option>
                                                <?php
                                                        }
                                                        ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-success btn-sm">
                                                <i class="fa fa-dot-circle-o"></i>Add
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- end table-responsive-->
                            </div>
                            <!-- end card-body-->
                        </div>
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3>Manage Add Voucher</h3>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="dataTable"
                                        class="table table-bordered table-hover display dataTable no-footer"
                                        style="width: 100%" role="grid" aria-describedby="dataTable_info">
                                        <thead>
                                            <tr role="row">
                                                <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                                    style="width: 45px">
                                                    #
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="dataTable"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 285px">
                                                    Name Voucher
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                                    style="width: 282px">
                                                    Status
                                                </th>
                                                <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                                    style="width: 107px">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                        $listVs = $v->getUseVouncher($data->id_user);
                                                        $i = 1;
                                                        if($listVs!=null)
                                                        foreach ($listVs as $item) {
                                                        ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo htmlentities($i++); ?></td>
                                                <td><?php echo htmlentities($item->name); ?></td>
                                                <td><?php echo htmlentities($item->status); ?></td>
                                                </td>
                                                <td><a
                                                        href="../controller/delVouncherUser.php?id=<?php echo htmlentities($item->id); ?>&id_pro=<?php echo htmlentities($_GET['id'])?>"><i
                                                            class="fas fa-remove"></i></a></td>
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