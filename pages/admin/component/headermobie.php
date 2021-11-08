<?php include "checkRole.php"; ?>
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <h4>Dashboard Admin</h4>
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="index.html">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Order Management</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="displaystodayorder.html">displays today’s order</a>
                        </li>
                        <li>
                            <a href="pendingorder.html">pending order</a>
                        </li>
                        <li>
                            <a href="deliveredorder.html">delivered order</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="manageuser.html">
                        <i class="fas fa-chart-bar"></i>Manage user</a>
                </li>
                <li>
                    <a href="category.php">
                        <i class="fas fa-table"></i>Create category</a>
                </li>

                <li>
                    <a href="addproduct.php">
                        <i class="fas fa-calendar-alt"></i>Insert product</a>
                </li>
                <li>
                    <a href="manageproduct.html">
                        <i class="fas fa-map-marker-alt"></i>Manage product</a>
                </li>
            </ul>
        </div>
    </nav>
</header>