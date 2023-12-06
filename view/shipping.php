

        <!-- MAIN -->
        <main class="checkout-page">
            <div class="container">
                <!-- Search bar -->
                <div class="checkout-container">
                    <div class="search-bar d-none d-md-flex">
                        <input type="text" name="" id="" placeholder="Search for item" class="search-bar__input" />
                        <button class="search-bar__submit">
                            <img src="./assets/icons/search.svg" alt="" class="search-bar__icon icon" />
                        </button>
                    </div>
                </div>

                <!-- Breadcrumbs -->
                <div class="checkout-container">
                    <ul class="breadcrumbs checkout-page__breadcrumbs">
                        <li>
                            <a href="./" class="breadcrumbs__link">
                                Trang chủ
                                <img src="./assets/icons/arrow-right.svg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="./?act=checkout" class="breadcrumbs__link">
                                Thanh toán 
                                <img src="./assets/icons/arrow-right.svg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="./?act=shipping" class="breadcrumbs__link breadcrumbs__link--current">Giao hàng</a>
                        </li>
                    </ul>
                </div>

                <!-- Checkout content -->
                <div class="checkout-container">
                    <div class="row gy-xl-3">
                        <div class="col-8 col-xl-12">
                            <div class="cart-info">
                                <h1 class="cart-info__heading">1. Vận chuyển</h1>
                                <div class="cart-info__separate"></div>

                                <!-- Checkout address -->
                                <div class="user-address">
                                    <div class="user-address__top">
                                        <div>
                                            <h2 class="user-address__title">Địa chỉ giao hàng</h2>
                                            <p class="user-address__desc">Chúng tôi nên giao hàng cho bạn ở đâu?</p>
                                        </div>
                                        <button
                                            class="user-address__btn btn btn--primary btn--rounded btn--small js-toggle"
                                            toggle-target="#add-new-address"
                                        >
                                            <img src="./assets/icons/plus.svg" alt="" />
                                            Thêm địa chỉ
                                        </button>
                                    </div>
                                    <div class="user-address__list">
                                        <!-- Empty message -->
                                        <!-- <p class="user-address__message">
                                            Not address yet.
                                            <a class="user-address__link js-toggle" href="#!" toggle-target="#add-new-address">Add a new address</a>
                                        </p> -->

                                        <?php
                                            foreach ($dataAddress as $data) {
                                                extract($data);
                                                echo '
                                                    <article class="address-card">
                                                        <div class="address-card__left">
                                                            <div class="address-card__choose">
                                                                <label class="cart-info__checkbox">
                                                                    <input
                                                                        type="radio"
                                                                        name="shipping-adress"
                                                                        checked
                                                                        class="cart-info__checkbox-input"
                                                                        id="shipping-adress"
                                                                        data-idAddress="'.$shippingAddressId.'"
                                                                    />
                                                                </label>
                                                            </div>
                                                            <div class="address-card__info">
                                                                <h3 class="address-card__title">'.$name.'</h3>
                                                                <p class="address-card__desc">
                                                                    '.$address.'
                                                                </p>
                                                                <ul class="address-card__list">
                                                                    <li class="address-card__list-item">Shipping</li>
                                                                    <li class="address-card__list-item">Delivery from store</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="address-card__right">
                                                            <div class="address-card__ctrl">
                                                                <button
                                                                    class="cart-info__edit-btn js-toggle"
                                                                    toggle-target="#add-new-address"
                                                                >
                                                                    <img class="icon" src="./assets/icons/edit.svg" alt="" />
                                                                    Sửa
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                ';
                                            }
                                        ?>
                                    </div>
                                </div>

                                <div class="cart-info__separate"></div>

                                <h2 class="cart-info__sub-heading">chi tiết sản phẩm </h2>
                                <div class="cart-info__list">
                                    <!-- Cart item 1 -->
                                    <?php
                                        $subTotal = 0;
                                        foreach ($dataOrderDetial as $data) {
                                            extract($data);
                                            $subTotal += $subtotal * $quantity; 
                                            $imgPath = "./uploads/".$imageURL;
                                            if(is_file($imgPath)) {
                                                $image = $imgPath;
                                                $noImg = "";
                                            } else {
                                                $image = "";
                                                $noImg = "No photo";
                                            }
                                            echo '
                                                <article class="cart-item">
                                                    <a href="./product-detail.html">
                                                        <img
                                                            src="'.$image.'"
                                                            alt=""
                                                            class="cart-item__thumb"
                                                        />
                                                    </a>
                                                    <div class="cart-item__content">
                                                        <div class="cart-item__content-left">
                                                            <h3 class="cart-item__title">
                                                                <a href="./product-detail.html">
                                                                    '.$productName.'
                                                                </a>
                                                            </h3>
                                                            <p class="cart-item__price-wrap">
                                                                $'.$unitPrice.' | <span class="cart-item__status">In Stock</span>
                                                            </p>
                                                            <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                                                <div class="cart-item__input">
                                                                    LavAzza
                                                                    <img
                                                                        class="icon"
                                                                        src="./assets/icons/arrow-down-2.svg"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                                <div class="cart-item__input">
                                                                    <button id="prev" class="cart-item__input-btn">
                                                                        <img class="icon" src="./assets/icons/minus.svg" alt="" />
                                                                    </button>
                                                                    <span id="important" data-quantity="'.$quantity.'" data-id="'.$productID.'">'.$quantity.'</span>
                                                                    <button id="next" class="cart-item__input-btn">
                                                                        <img class="icon" src="./assets/icons/plus.svg" alt="" />
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item__content-right">
                                                            <p class="cart-item__total-price">$'.$unitPrice * $quantity.'</p>
                                                            <div class="cart-item__ctrl">
                                                                <button class="cart-item__ctrl-btn">
                                                                    <img src="./assets/icons/heart-2.svg" alt="" />
                                                                    Save
                                                                </button>
                                                                <button
                                                                    class="cart-item__ctrl-btn js-toggle"
                                                                    toggle-target="#delete-confirm"
                                                                >
                                                                    <img src="./assets/icons/trash.svg" alt="" />
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            ';
                                        }
                                    ?>
                                </div>
                                <div class="cart-info__bottom d-md-none">
                                    <div class="row">
                                        <div class="col-8 col-xxl-7">
                                            <div class="cart-info__continue">
                                                <a href="./" class="cart-info__continue-link">
                                                    <img
                                                        class="cart-info__continue-icon icon"
                                                        src="./assets/icons/arrow-down-2.svg"
                                                        alt=""
                                                    />
                                                    Tiếp tục mua
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4 col-xxl-5">
                                            <div class="cart-info__row">
                                                <span>Tổng phụ:</span>
                                                <span>đ
                                                <?php
                                                    echo $subTotal;
                                                ?>
                                                </span>
                                            </div>
                                            <div class="cart-info__row">
                                                <span>Giao Hàng:</span>
                                                <span>69.000đ</span>
                                            </div>
                                            <div class="cart-info__separate"></div>
                                            <div class="cart-info__row cart-info__row--bold">
                                                <span>Tổng:</span>
                                                <span>
                                                <?php
                                                    echo $subTotal + 3;
                                                ?>đ
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-xl-12">
                            <div class="cart-info">
                                <div class="cart-info__row">
                                    <span>Tổng <span class="cart-info__sub-label">(Sản phẩm)</span></span>
                                    <span><?php echo $countOrders; ?></span>
                                </div>
                                <div class="cart-info__row">
                                    <span>Giá  <span class="cart-info__sub-label">(Tổng)</span></span>
                                    <span>
                                    <?php
                                            echo $subTotal + 3;
                                        ?>đ
                                    </span>
                                </div>
                                <div class="cart-info__separate"></div>
                                <div class="cart-info__row">
                                    <span>Tổng phải trả</span>
                                    <span>$<?php
                                            echo $subTotal + 3;
                                        ?></span>
                                </div>
                                <a href="./?act=payment" class="cart-info__next-btn btn btn--primary btn--rounded" id="nextURL">
                                    Tiếp tục thanh toán
                                </a>
                            </div>
                            <div class="cart-info">
                                <a href="#!">
                                    <article class="gift-item">
                                        <div class="gift-item__icon-wrap">
                                            <img src="./assets/icons/gift.svg" alt="" class="gift-item__icon" />
                                        </div>
                                        <div class="gift-item__content">
                                            <h3 class="gift-item__title">Gửi đơn đặt hàng này như một món quà.</h3>
                                            <p class="gift-item__desc">
                                            Các mặt hàng có sẵn sẽ được chuyển đến người nhận quà của bạn.
                                            </p>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer id="footer" class="footer"></footer>
        <script>
            load("#footer", "./templates/footer.html");
        </script>

        <!-- Modal: confirm remove shopping cart item -->
        <div id="delete-confirm" class="modal modal--small hide">
            <div class="modal__content">
                <p class="modal__text">?</p>
                <div class="modal__bottom">
                    <button class="btn btn--small btn--outline modal__btn js-toggle" toggle-target="#delete-confirm">
                        Cancel
                    </button>
                    <button
                        class="btn btn--small btn--danger btn--primary modal__btn btn--no-margin js-toggle"
                        toggle-target="#delete-confirm"
                    >
                        Xóa
                    </button>
                </div>
            </div>
            <div class="modal__overlay js-toggle" toggle-target="#delete-confirm"></div>
        </div>

        <!-- Modal: address new shipping address -->
        <div id="add-new-address" class="modal hide" style="--content-width: 650px">
            <div class="modal__content">
                <form action="addShippingAddress" class="form" method="post">
                    <h2 class="modal__heading">Thêm Địa chỉ giao hàng mới</h2>
                    <div class="modal__body">
                        <div class="form__row">
                            <div class="form__group">
                                <label for="name" class="form__label form__label--small">Tên </label>
                                <div class="form__text-input form__text-input--small">
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        placeholder="Name"
                                        class="form__input"
                                        required
                                        minlength="2"
                                    />
                                    <img src="./assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                                </div>
                                <p class="form__error">Tên phải có ít nhất 2 ký tự</p>
                            </div>
                            <div class="form__group">
                                <label for="phone" class="form__label form__label--small">Số điện thoại
                        
                                </label>
                                <div class="form__text-input form__text-input--small">
                                    <input
                                        type="tel"
                                        name="phone"
                                        id="phone"
                                        placeholder="Phone"
                                        class="form__input"
                                        required
                                        minlength="10"
                                    />
                                    <img src="./assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                                </div>
                                <p class="form__error"> Điện thoại phải có ít nhất 10 ký tự</p>
                            </div>
                        </div>
                        <div class="form__group">
                            <label for="address" class="form__label form__label--small">Địa chỉ</label>
                            <div class="form__text-area">
                                <textarea
                                    name="address"
                                    id="address"
                                    placeholder="Address (Area and street)"
                                    class="form__text-area-input"
                                    required
                                ></textarea>
                                <img src="./assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Địa chỉ ko tồn tại</p>
                        </div>
                        <div class="form__group form__group--inline">
                            <label class="form__checkbox">
                                <input type="checkbox" name="" id="" class="form__checkbox-input d-none" />
                                <span class="form__checkbox-label">Đặt làm địa chỉ mặc định </span>
                            </label>
                        </div>
                    </div>
                    <div class="modal__bottom">
                        <button class="btn btn--small btn--text modal__btn js-toggle" toggle-target="#add-new-address">
                            Trở về
                        </button>
                        <button
                            class="btn btn--small btn--primary modal__btn btn--no-margin js-toggle"
                            toggle-target="#add-new-address"
                            id="shippingAddress"
                            data-id="<?php echo $userId ?>"
                        >
                        Thêm
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal__overlay"></div>
        </div>
    </body>
</html>

<script src="./assets/js/shipping.js"></script>