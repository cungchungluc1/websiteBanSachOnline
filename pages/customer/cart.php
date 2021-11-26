<?php session_start(); 

include_once "./component/listProduct.php";
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0019)# -->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">

<?php include_once "component/head.php"; ?>

<body class="screen--lg" style="">
    <div class="ty-tygh bp-tygh-container" id="tygh_container">
        <div class="ty-helper-container no-touch" id="tygh_main_container">
            <div class="tygh-header clearfix front_page">
                <?php include_once "component/header.php"; ?>
            </div>
            <div class="tygh-content clearfix">
                <div class="container">
                <div class="row">
              <div class="span16">
                <div id="breadcrumbs_10">
                  <div class="ty-breadcrumbs clearfix">
                    <a
                      href="home.php"
                      class="ty-breadcrumbs__a"
                      >Trang chủ</a
                    >>><span class="ty-breadcrumbs__current"
                      ><bdi>Chi tiết giỏ hàng</bdi></span
                    >
                  </div>
                  <!--breadcrumbs_10-->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="span16 vs-cart-page et-content">
                <!-- Inline script moved to the bottom of the page -->
                <!-- Inline script moved to the bottom of the page -->
                <!-- Inline script moved to the bottom of the page -->
                <form
                  name="checkout_form"
                  class="cm-check-changes cm-ajax cm-ajax-full-render cm-processed-form"
                  action="#"
                  method="post"
                  enctype="multipart/form-data"
                  id="checkout_form"
                >
                  <input type="hidden" name="redirect_mode" value="cart" />
                  
                  <h1 class="ty-mainbox-title">
                    <span>Chi tiết giỏ hàng</span>
                  </h1>
                  <div
                    class="buttons-container ty-cart-content__top-buttons clearfix"
                  >
                    <div class="ty-float-left ty-cart-content__left-buttons">
                      <a
                        href="./home.php"
                        class="ty-btn ty-btn__secondary"
                        >Tiếp tục mua hàng</a
                      >
                      <a
                        class="ty-btn nobg vs-clear-cart ty-cart-content__clear-button text-button"
                        href="#"
                        >Xóa giỏ hàng</a
                      >
                    </div>
                    <div class="ty-float-right ty-cart-content__right-buttons">
                      <button
                        id="button_cart"
                        class="ty-btn__secondary ty-btn--recalculate-cart hidden hidden-phone hidden-tablet ty-btn"
                        type="submit"
                        name="dispatch[checkout.update]"
                      >
                        Tính lại
                      </button>
                      <a
                        class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__primary"
                        href="#"
                        data-ca-dialog-title="Đăng nhập"
                        data-ca-target-id="checkout_login_form"
                        rel="nofollow"
                      >
                        Thanh toán
                      </a>
                    </div>
                  </div>
                  </form>
                  <div>
                    <div class="ty-mainbox-cart__body">
                      <div id="cart_items">
                        <table class="ty-cart-content ty-table">
                          <thead>
                            <tr class="vs-cart-header">
                              <th class="ty-cart-content__title ty-left">
                                Sản phẩm
                              </th>
                              <th class="ty-cart-content__title ty-left">
                                &nbsp;
                              </th>
                              <th class="ty-cart-content__title ty-right">
                                Đơn giá
                              </th>
                              <th class="ty-cart-content__title quantity-cell">
                                Số lượng
                              </th>
                              <th class="ty-cart-content__title ty-right">
                                Tổng giá
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
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
                              ?>
                            <tr class="vs-cart-product">
                              <td
                                class="ty-cart-content__product-elem ty-cart-content__image-block"
                              >
                                <div
                                  class="ty-cart-content__image cm-reload-4160822667"
                                  id="product_image_update_4160822667"
                                >
                                  <a
                                    href="#"
                                  >
                                    <img
                                      class="ty-pict cm-image"
                                      id="det_img_4160822667"
                                      src="<?php echo "../layout/".htmlentities($dataaproduct->url); ?>"
                                      style="height:100px; width:auto;"
                                      data-src=""
                                      alt="<?php echo htmlentities($dataaproduct->name); ?>"
                                      title=""
                                    />
                                  </a>
                                  <!--product_image_update_4160822667-->
                                </div>
                              </td>
                              <td
                                class="ty-cart-content__product-elem ty-cart-content__description"
                                style="width: 50%"
                              >
                                <a
                                  href="./product.php?id=<?php echo htmlentities($dataaproduct->id_product); ?>"
                                  class="ty-cart-content__product-title"
                                  ><?php echo htmlentities($dataaproduct->name); ?></a
                                ><a
                                  class="ty-cart-content__product-delete ty-delete-big"
                                  href="#"
                                  data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart"
                                  title="Loại bỏ"
                                  ><i class="vs-icon-delete"></i
                                ></a>
                                <div
                                  class="ty-cart-content__sku ty-sku cm-hidden-wrapper"
                                  id="sku_4160822667"
                                >
                                  Barcode:
                                  <span
                                    class="cm-reload-4160822667"
                                    id="product_code_update_4160822667"
                                    ><?php echo htmlentities($dataaproduct->id_product); ?></span
                                  >
                                </div>
                                <div
                                  id="options_4160822667"
                                  class="ty-product-options ty-group-block"
                                >
                                  <div class="ty-group-block__arrow">
                                    <span class="ty-caret-info"
                                      ><span class="ty-caret-outer"></span
                                      ><span class="ty-caret-inner"></span
                                    ></span>
                                  </div>
                                  <bdi>
                                    <div
                                      class="cm-reload-4160822667"
                                      id="product_info_update_4160822667"
                                    >
                                      <div
                                        class="ty-control-group product-list-field"
                                      >
                                        <label class="ty-control-group__label"
                                          >Nhà Xuất Bản:</label
                                        >
                                        <?php include_once "../entity/publishingCompany.php";
                                        $pc1 = new publishingCompany();
                                        $detalPc = $pc1->getapublishingCompany($dataaproduct->id_publishing_company);  ?>
                                        <span
                                          class="ty-control-group__label"
                                          ><a ><?php if($detalPc!=null) echo htmlentities($detalPc->name); ?></a></span
                                        >
                                      </div>
                                      <!--product_info_update_4160822667-->
                                    </div>
                                  </bdi>
                                </div>
                              </td>
                              <td
                                class="ty-cart-content__product-elem ty-cart-content__price cm-reload-4160822667"
                                id="price_display_update_4160822667"
                              >
                                <bdi
                                  ><span
                                    id="sec_product_price_4160822667"
                                    class="ty-sub-price"
                                    ><?php echo htmlentities($dataaproduct->price); ?></span
                                  >&nbsp;<span class="ty-sub-price"
                                    >đ</span
                                  ></bdi
                                >
                                <!--price_display_update_4160822667-->
                              </td>
                              <td
                                class="ty-cart-content__product-elem ty-cart-content__qty"
                              >
                                <div
                                  class="quantity cm-reload-4160822667 changer et-qty"
                                  id="quantity_update_4160822667"
                                >
                                  
                                  <label for="amount_4160822667"></label>
                                  <div
                                    class="ty-center ty-value-changer cm-value-changer"
                                  >
                                  <form action="../controller/addCart.php" method="post">
                                    <input type="hidden" name="id_product" value="<?php echo htmlentities($item->product_id); ?>"/>
                                    <input type="hidden" name="product_quantity" value="1"/>
                                    <input type="submit" class="cm-increase ty-value-changer__increase text-center" name="submit" value="+"/>
                                  </form>
                                    
                                    <input
                                      type="text"
                                      size="3"
                                      id="amount_4160822667"
                                      name="cart_products[4160822667][amount]"
                                      value="<?php echo htmlentities($item->quantity); ?>"
                                      class="ty-value-changer__input cm-amount"
                                      data-ca-min-qty="1"
                                    />
                                    <form action="../controller/addCart.php" method="post">
                                      <input type="hidden" name="id_product" value="<?php echo htmlentities($item->product_id); ?>"/>
                                      <input type="hidden" name="product_quantity" value="-1"/>
                                      <button type="submit" class="cm-decrease ty-value-changer__decrease">-</button>
                                    </form>
                                    
                                  </div>
                                  <!--quantity_update_4160822667-->
                                </div>
                              </td>
                              <td
                                class="ty-cart-content__product-elem ty-cart-content__price cm-reload-4160822667"
                                id="price_subtotal_update_4160822667"
                              >
                                <bdi
                                  ><span
                                    id="sec_product_subtotal_4160822667"
                                    class="price"
                                    ><?php
                                        $total += $item->quantity*$dataaproduct->price;
                                    echo htmlentities($item->quantity*$dataaproduct->price); ?></span
                                  >&nbsp;<span class="price">đ</span></bdi
                                >
                                <!--price_subtotal_update_4160822667-->
                              </td>

                            </tr>
                            <?php }}?>
                          </tbody>
                        </table>
                        <!--cart_items-->
                      </div>
                    </div>
                  </div>
                  <!--checkout_form-->
                
                
                <div class="ty-cart-total">
                  <div
                    class="ty-cart-total__wrapper clearfix"
                    id="checkout_totals"
                  >
                    <div class="ty-coupons__container">
                      <div>
                        <form
                          class="cm-ajax cm-ajax-force cm-ajax-full-render cm-processed-form"
                          name="coupon_code_form"
                          action="#"
                          method="post"
                        >
                          <input
                            type="hidden"
                            name="result_ids"
                            value="checkout*,cart_status*,cart_items,payment-methods,litecheckout_form"
                          />
                          <input
                            type="hidden"
                            name="redirect_url"
                            value="index.php?sl=vi&amp;dispatch=checkout.cart"
                          />
                          <div
                            class="ty-gift-certificate-coupon ty-discount-coupon__control-group ty-input-append"
                          >
                            <label for="coupon_field" class="hidden cm-required"
                              >Mã giảm giá</label
                            >
                            <?php 
                                    include_once "../entity/vouncher.php"; 
                                    include_once "../entity/user.php"; 
                                    $v=new vouncher();
                                    $listVc=null;
                                    if(session_id()){
                                        $id_code=$_SESSION["codeSession"];
                                        $u = new User();
                                        $dataUser = $u->checklogin($id_code);
                                        $listVc=$v->getUseVouncher($dataUser->id_user);
                                        $listVc=$v->getUseVouncher($dataUser->id_user);
                                        if($listVc!=null){
                                            echo '<select id="inputState" name="id_vouncher" class="form-control ty-input-text cm-hint">
                                            <option value="">Thẻ quà tặng hoặc mã giảm giá</option>';
                                            foreach ($listVc as $item){
                                                echo '<option value="'.htmlentities($item->id_vouncher).'">'
                                                .htmlentities($item->name).'</option>';
                                            }
                                            if($listCart!=null)
                                            foreach ($listCart as $item){
                                              $listVc=$v->getUseVouncher($item->product_id);
                                              foreach ($listVc as $item){
                                                echo '<option value="'.htmlentities($item->id_vouncher).'">'
                                                .htmlentities($item->name).'</option>';
                                              }
                                            }
                                              
                                            echo '</select>';
                                        }
                                    }    
                            ?>
                            <button
                              title="Áp dụng"
                              class="ty-btn-go"
                              type="submit"
                            >
                              Áp dụng
                            </button>
                            <input
                              type="hidden"
                              name="dispatch"
                              value="checkout.apply_coupon"
                            />
                          </div>
                        </form>
                      </div>
                    </div>
                    <ul class="ty-cart-statistic ty-statistic-list">
                      <li
                        class="ty-cart-statistic__item ty-statistic-list-subtotal"
                      >
                        <span class="ty-cart-statistic__title">Tạm tính</span>
                        <span class="ty-cart-statistic__value"
                          ><bdi><span><?php echo htmlentities($total); ?> </span>&nbsp;đ</bdi></span
                        >
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                    <ul class="ty-cart-statistic__total-list">
                      <li
                        class="ty-cart-statistic__item ty-cart-statistic__total"
                      >
                        <span class="ty-cart-statistic__total-title"
                          >Tổng cộng</span
                        >
                        <span class="ty-cart-statistic__total-value">
                          <bdi
                            ><span id="sec_cart_total" class="ty-price"
                              ><span><?php echo htmlentities($total); ?> </span
                            >&nbsp;<span class="ty-price">đ</span></bdi
                          >
                        </span>
                      </li>
                    </ul>
                    <!--checkout_totals-->
                  </div>
                </div>
                <div
                  class="buttons-container ty-cart-content__bottom-buttons clearfix"
                >
                  <div class="ty-float-left ty-cart-content__left-buttons">
                    <a
                      href="./home.php"
                      class="ty-btn ty-btn__secondary"
                      >Tiếp tục mua hàng</a
                    >
                  </div>
                  <div class="ty-float-right ty-cart-content__right-buttons">
                    <a
                      class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__primary"
                      href="#"
                      data-ca-dialog-title="Đăng nhập"
                      data-ca-target-id="checkout_login_form"
                      rel="nofollow"
                    >
                      Thanh toán
                    </a>
                  </div>
                </div>
              </div>
            </div>
                </div>
            </div>
            <?php include_once "component/footer.php"; ?>
            <!--tygh_main_container-->
        </div>
        <a href="#" id="scroll-up" class="hidden" style="display: none">
            <i class="et-icon-scroll-up"></i>
        </a>
        <!--tygh_container-->
    </div>

    <script type="text/javascript" id="" src="../layout/js/OneSignalSDK.js"></script>

    <script src="../layout/js/preload-base.js"></script>
    <script nomodule="" src="../layout/js/load.js"></script>
    <script type="module" src="../layout/js/load.esm/index.js"></script>
    <iframe style="display: none"></iframe>
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