<?php session_start(); ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0019)# -->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">

<?php require_once("component/head.php"); ?>

<body class="screen--lg">
    <div class="ty-tygh bp-tygh-container" id="tygh_container">
        <div class="ty-helper-container no-touch" id="tygh_main_container">
            <div class="tygh-header clearfix front_page">
                <?php require_once("component/header.php"); ?>
            </div>
            <div class="tygh-content clearfix">
                <div class="container">
                    <div class="row">
                        <div class="litecheckout litecheckout__form" id="litecheckout_form">
                            <h1 class="litecheckout__page-title">Thanh toán</h1>
                            <div data-ca-lite-checkout-element="form">
                                <form name="litecheckout_payments_form" id="litecheckout_payments_form"
                                    action="../controller/addorder.php" method="post"
                                    data-ca-lite-checkout-element="checkout-form"
                                    data-ca-lite-checkout-ready-for-checkout="false"
                                    class="litecheckout__payment-methods cm-processed-form">
                                    <div class="litecheckout__group">
                                        <div class="litecheckout__group">
                                            <div class="litecheckout__item litecheckout__item--fill">
                                                <h2 class="litecheckout__step-title">1. Địa chỉ giao hàng</h2>
                                            </div>
                                            <div class="litecheckout__item litecheckout__item--center">
                                                <a class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close litecheckout__link"
                                                    href="../controller/changeAddress.php?voucher=<?php echo htmlentities($_GET["voucher"]); ?>"
                                                    data-ca-target-id="create_user_profile"
                                                    data-ca-dialog-title="Tạo địa chỉ mới">Tạo địa chỉ mới</a>
                                            </div>
                                        </div>
                                        <?php
                $defaul_address=null;
                if(session_id()){
                    include_once "../entity/user.php";
                    $id_code=$_SESSION["codeSession"];
                    $u = new User();
                    $dataUser = $u->checklogin($id_code);
                    include_once "../entity/address.php";
                    $address = new address();
                    $defaul_address=$address->getdefauladdress($dataUser->id_user);
                }
                if($defaul_address!=null){
             ?>
                                        <input type="hidden" value="1" name="is_defaul" />
                                        <input type="hidden"
                                            value="<?php echo htmlentities($defaul_address->id_address); ?>"
                                            name="id_address" />
                                        <div id="litecheckout_step_customer_info" class="litecheckout__group">
                                            <div class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                                data-ca-error-message-target-method="append" id="sb_6">
                                                <input class="litecheckout__input" placeholder=" "
                                                    id="litecheckout_firstname" type="text"
                                                    value="<?php echo htmlentities($defaul_address->name); ?>"
                                                    data-ca-lite-checkout-field="user_data.firstname"
                                                    data-ca-lite-checkout-auto-save="true" autocomplete=""
                                                    aria-label="Họ và Tên" title="Họ và Tên" readonly />
                                                <label class="litecheckout__label cm-required"
                                                    for="litecheckout_firstname">Họ và Tên</label>
                                            </div>
                                            <div class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                                data-ca-error-message-target-method="append" id="sb_9">
                                                <input class="litecheckout__input cm-mask-phone" placeholder=" "
                                                    id="litecheckout_phone" type="tel"
                                                    value="<?php echo htmlentities($defaul_address->phone); ?>"
                                                    data-ca-lite-checkout-field="user_data.phone"
                                                    data-ca-lite-checkout-auto-save="true" autocomplete=""
                                                    aria-label="Số điện thoại" title="Số điện thoại" readonly />
                                                <label class="litecheckout__label cm-mask-phone-label cm-required"
                                                    for="litecheckout_phone">Số điện thoại</label>
                                            </div>
                                            <div class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                                data-ca-error-message-target-method="append" id="sb_32">
                                                <input class="litecheckout__input litecheckout__field--full"
                                                    placeholder=" " id="litecheckout_email" type="text"
                                                    value="<?php echo htmlentities($dataUser->email); ?>"
                                                    data-ca-lite-checkout-field="user_data.email"
                                                    data-ca-lite-checkout-auto-save="true" autocomplete=""
                                                    aria-label="Email" title="Email" />
                                                <label class="litecheckout__label cm-email cm-required"
                                                    for="litecheckout_email">Email</label>
                                            </div>
                                        </div>
                                        <div class="litecheckout__group" data-ca-lite-checkout-element="user-profiles"
                                            data-ca-address-position="shipping_first">
                                            <!-- Inline script moved to the bottom of the page -->
                                            <label for="user_profiles_list"
                                                class="cm-required cm-multiple-radios hidden"
                                                data-ca-validator-error-message="Please select a profile before you place the order."></label>
                                            <div id="user_profiles_list" class="litecheckout__group"
                                                data-ca-error-message-target-node="#user_profiles_list_error_message_target">
                                                <div class="ty-tiles litecheckout__field litecheckout__field--xsmall">

                                                    <label id="user_profiles_103203" class="ty-tiles__wrapper"
                                                        for="user_profile_103203">
                                                        <p class="ty-tiles__title">
                                                            <?php echo htmlentities($defaul_address->diachi); ?></p>
                                                        <p class="ty-tiles__text">
                                                            <?php echo htmlentities($defaul_address->phuong); ?>,
                                                            <?php echo htmlentities($defaul_address->quan); ?>,
                                                            <?php echo htmlentities($defaul_address->tinh); ?>
                                                        </p>
                                                        <p class="ty-tiles__text">Viet Nam</p>
                                                        <div class="ty-tiles__actions">
                                                            <a class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close ty-tiles__link"
                                                                href="../controller/updateaddress.php?id=<?php echo htmlentities($defaul_address->id_address); ?>"
                                                                data-ca-target-id="edit_user_profile_103203"
                                                                data-ca-dialog-title="Editing profile: Chính">Chỉnh
                                                                sửa</a>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="litecheckout__group">
                                                <div id="user_profiles_list_error_message_target"
                                                    class="litecheckout__item"></div>
                                            </div>
                                        </div>
                                        <!-- Inline script moved to the bottom of the page -->
                                        <?php }else{?>
                                        <input type="hidden" value="0" name="is_defaul" />
                                        <div id="billing_address" class="litecheckout__container hidden"
                                            style="display: block">
                                            <div class="litecheckout__group">

                                                <div class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                                    data-ca-error-message-target-method="append" id="sb_14">
                                                    <input class="litecheckout__input" placeholder=" "
                                                        id="litecheckout_b_firstname" type="text" name="name" value=""
                                                        data-ca-lite-checkout-field="user_data.b_firstname"
                                                        data-ca-lite-checkout-auto-save="true" autocomplete=""
                                                        aria-label="Họ và Tên" title="Họ và Tên" />
                                                    <label class="litecheckout__label cm-required"
                                                        for="litecheckout_b_firstname">Họ và Tên</label>
                                                </div>
                                                <div class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                                    data-ca-error-message-target-method="append" id="sb_30">
                                                    <input class="litecheckout__input billing-phone cm-mask-phone"
                                                        placeholder=" " id="litecheckout_b_phone" type="tel"
                                                        name="phone" value=""
                                                        data-ca-lite-checkout-field="user_data.b_phone"
                                                        data-ca-lite-checkout-auto-save="true" autocomplete=""
                                                        aria-label="Điện thoại" title="Điện thoại" />
                                                    <label class="litecheckout__label cm-mask-phone-label cm-required"
                                                        for="litecheckout_b_phone">Điện thoại</label>
                                                </div>
                                                <div class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                                    data-ca-error-message-target-method="append" id="sb_18">
                                                    <input class="litecheckout__input" placeholder=" "
                                                        id="litecheckout_b_address" type="text" name="diachi" value=""
                                                        data-ca-lite-checkout-field="user_data.b_address"
                                                        data-ca-lite-checkout-auto-save="true" autocomplete=""
                                                        aria-label="Địa chỉ" title="Địa chỉ" />
                                                    <label class="litecheckout__label cm-required"
                                                        for="litecheckout_b_address">Địa chỉ</label>
                                                </div>

                                                <div class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                                    data-ca-error-message-target-method="append" id="sb_14">
                                                    <input class="litecheckout__input" placeholder=" "
                                                        id="litecheckout_b_firstname" type="text" name="tinh" value=""
                                                        data-ca-lite-checkout-field="user_data.b_firstname"
                                                        data-ca-lite-checkout-auto-save="true" autocomplete=""
                                                        aria-label="Tỉnh/ Thành" title="Tỉnh/ Thành" />
                                                    <label class="litecheckout__label cm-required"
                                                        for="litecheckout_b_firstname">Tỉnh/ Thành</label>
                                                </div>
                                                <div class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                                    data-ca-error-message-target-method="append" id="sb_30">
                                                    <input class="litecheckout__input billing-phone cm-mask-phone"
                                                        placeholder=" " id="litecheckout_b_phone" type="tel" name="quan"
                                                        value="" data-ca-lite-checkout-field="user_data.b_phone"
                                                        data-ca-lite-checkout-auto-save="true" autocomplete=""
                                                        aria-label="Quận huyện" title="Quận huyện" />
                                                    <label class="litecheckout__label cm-mask-phone-label cm-required"
                                                        for="litecheckout_b_phone">Quận huyện</label>
                                                </div>
                                                <div class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                                    data-ca-error-message-target-method="append" id="sb_18">
                                                    <input class="litecheckout__input" placeholder=" "
                                                        id="litecheckout_b_address" type="text" name="phuong" value=""
                                                        data-ca-lite-checkout-field="user_data.b_address"
                                                        data-ca-lite-checkout-auto-save="true" autocomplete=""
                                                        aria-label="Phường xã" title="Phường xã" />
                                                    <label class="litecheckout__label cm-required"
                                                        for="litecheckout_b_address">Phường xã</label>
                                                </div>

                                            </div>
                                        </div>
                                        <?php }?>
                                        <div class="litecheckout__container">
                                            <div class="litecheckout__group">
                                                <div class="litecheckout__item">
                                                    <h2 class="litecheckout__step-title">
                                                        2. Chọn phương thức thanh toán
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="litecheckout__step litecheckout__container"
                                                id="litecheckout_step_payment">
                                                <div class="litecheckout__section">
                                                    <div class="litecheckout__group">
                                                        <div
                                                            class="litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">
                                                            <input type="radio" name="selected_payment_method"
                                                                id="radio_6"
                                                                data-ca-target-form="litecheckout_payments_form"
                                                                data-ca-url="checkout.checkout"
                                                                data-ca-result-ids="litecheckout_final_section,litecheckout_step_payment,shipping_rates_list,checkout*"
                                                                class="litecheckout__shipping-method__radio cm-select-payment hidden"
                                                                value="offline" checked="" />
                                                            <label id="payments_6"
                                                                class="litecheckout__shipping-method__wrapper js-litecheckout-toggle"
                                                                for="radio_6" data-ca-toggling="payments_form_wrapper_6"
                                                                data-ca-hide-all-in=".litecheckout__payment-methods">
                                                                <div class="litecheckout__shipping-method__logo">
                                                                    <img class="ty-pict litecheckout__shipping-method__logo-image cm-image"
                                                                        id="det_img_6"
                                                                        src="https://nhasachphuongnam.com/images/payment/196/cod-1803633-1530847.png"
                                                                        data-src="" alt="" title="" />
                                                                </div>
                                                                <p class="litecheckout__shipping-method__title">
                                                                    Thanh toán tiền mặt
                                                                </p>
                                                                <p class="litecheckout__shipping-method__delivery-time">
                                                                    Thanh toán bằng tiền mặt khi nhận hàng
                                                                </p>
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">
                                                            <input type="radio" name="selected_payment_method"
                                                                id="radio_17"
                                                                data-ca-target-form="litecheckout_payments_form"
                                                                data-ca-url="checkout.checkout"
                                                                data-ca-result-ids="litecheckout_final_section,litecheckout_step_payment,shipping_rates_list,checkout*"
                                                                class="litecheckout__shipping-method__radio cm-select-payment hidden"
                                                                value="online" />
                                                            <label id="payments_17"
                                                                class="litecheckout__shipping-method__wrapper js-litecheckout-toggle"
                                                                for="radio_17"
                                                                data-ca-toggling="payments_form_wrapper_17"
                                                                data-ca-hide-all-in=".litecheckout__payment-methods">
                                                                <div class="litecheckout__shipping-method__logo">
                                                                    <img class="ty-pict litecheckout__shipping-method__logo-image cm-image"
                                                                        id="det_img_17"
                                                                        src="https://nhasachphuongnam.com/images/payment/196/ms-icon-310x310.png"
                                                                        data-src="" alt="" title="" />
                                                                </div>
                                                                <p class="litecheckout__shipping-method__title">Momo</p>
                                                                <p class="litecheckout__shipping-method__delivery-time">
                                                                    Thanh toán bằng ví điện tử Momo
                                                                </p>
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">

                                                        </div>
                                                    </div>
                                                    <div class="litecheckout__group litecheckout__payment-methods">
                                                        <div class="litecheckout__group litecheckout__payment-method"
                                                            data-ca-toggling-by="payments_form_wrapper_6"
                                                            data-ca-hideble="true">


                                                            <div
                                                                class="litecheckout__item litecheckout__payment-instructions">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--litecheckout_step_payment-->
                                            </div>
                                        </div>
                                        <div class="litecheckout__container">
                                            <div class="cm-processing-personal-data"
                                                data-ca-processing-personal-data-without-click="true">
                                                <div class="litecheckout__group">
                                                    <div class="litecheckout__field">
                                                        <textarea data-ca-lite-checkout-field="customer_notes"
                                                            class="litecheckout__input litecheckout__input--textarea"
                                                            id="litecheckout_comment_to_shipping"
                                                            autocomplete="disabled" placeholder=" "
                                                            data-ca-lite-checkout-element="customer_notes"
                                                            data-ca-lite-checkout-auto-save="true"
                                                            aria-label="Customer's notes" title="Customer's notes"
                                                            name="description"></textarea>
                                                        <label class="litecheckout__label"
                                                            for="litecheckout_comment_to_shipping">Ghi chú đơn hàng
                                                            &amp; xuất hóa đơn (Tên công ty, địa chỉ,
                                                            MST)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="litecheckout__group litecheckout__submit-order"
                                        id="litecheckout_final_section">
                                        <div class="clearfix"></div>

                                        <div
                                            class="litecheckout__item litecheckout__item--full litecheckout__submit-order">
                                            <?php
            $sell = 0;
            if(isset($_GET["voucher"])){
                include_once "../entity/vouncher.php";
                $v1=new vouncher(); 
                $datavoucher = $v1->getaVouncher($_GET["voucher"]);
                if($datavoucher!=null){
                    $sell = $datavoucher->sell;
                    echo '<input type="hidden" name="voucher" value="'.htmlentities($_GET["voucher"]).'" />';
                }
            }
            include_once "../entity/cart.php";
            include_once "../entity/user.php";
            $listCart=null;
            if(!!session_id()){
            $id_code=$_SESSION["codeSession"];
            $u = new User();
            $data = $u->checkLogin($id_code);
            $c = new cart();
            $now = getdate();
            $listCart=$c->getallcart($data->id_user);
            }                              
            $total=0;
            if($listCart!=null){                                    
                include_once "../entity/product.php";
                $pro  = new Product();
                foreach ($listCart as $item) {
                    $dataaproduct = $pro->getaproduct($item->product_id);
                    $total += $item->quantity*$dataaproduct->price;
                } 
            }
            $total-=$sell;
            if($total<0) $total = 0;
        ?>
                                            <button class="litecheckout__submit-btn" type="submit"
                                                name="dispatch[checkout.place_order]" id="litecheckout_place_order">
                                                ĐẶT MUA (
                                                <bdi><span><?php echo htmlentities($total); ?></span>&nbsp;đ</bdi>
                                                )
                                                <!--litecheckout_place_order-->
                                            </button>
                                        </div>
                                        <!--litecheckout_final_section-->
                                    </div>
                                    <!--litecheckout_payments_form-->
                                </form>
                            </div>
                            <!--litecheckout_form-->
                        </div>

                    </div>


                </div>
            </div>
            <?php require_once("component/footer.php"); ?>
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