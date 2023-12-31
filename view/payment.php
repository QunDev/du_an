<?php
    $subTotal = 0;
    foreach ($dataOrderDetial as $data) {
        extract($data);
        $totalM = $unitPrice * $quantity;
        $subTotal += $totalM; 
    }
?>

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
                                Giỏ hàng
                                <img src="./assets/icons/arrow-right.svg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="./?act=shipping" class="breadcrumbs__link">
                                Địa chỉ
                                <img src="./assets/icons/arrow-right.svg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="./?act=payment" class="breadcrumbs__link breadcrumbs__link--current">Phương thức thanh toán </a>
                        </li>
                    </ul>
                </div>

                <!-- Checkout content -->
                <div class="checkout-container">
                    <div class="row gy-xl-3">
                        <div class="col-8 col-xl-8 col-lg-12">
                            <div class="cart-info">
                                <div class="cart-info__top">
                                    <h2 class="cart-info__heading cart-info__heading--lv2">
                                        1. Vận chuyển
                                    </h2>
                                </div>

                                <!-- Payment item 1 -->
                                <?php
                                    extract($dataAddressById);
                                    echo '
                                        <article class="payment-item">
                                            <div class="payment-item__info">
                                                <h3 class="payment-item__title">'.$name.'</h3>
                                                <p class="payment-item__desc">'.$address.'</p>
                                            </div>
                                        </article>
                                    ';
                                ?>
                                

                                
                            </div>

                            
                            <!--  -->

                            <div class="cart-info">
                                <h2 class="cart-info__heading cart-info__heading--lv2">2. Phương thức thanh toán</h2>
                                <div class="cart-info__separate"></div>
                                <h3 class="cart-info__sub-heading">Phương thức thanh toán</h3>

                                <!-- Payment item 3 -->
                                <label>
                                    <article class="payment-item payment-item--pointer">
                                        <img
                                            src="./assets/img/payment/momo.jpg"
                                            alt=""
                                            class="payment-item__thumb"
                                        />
                                        <div class="payment-item__content">
                                            <div class="payment-item__info">
                                                <h3 class="payment-item__title">MoMo</h3>
                                            </div>

                                            <span class="cart-info__checkbox payment-item__checkbox">
                                                <input
                                                    type="radio"
                                                    name="payment-method"
                                                    class="cart-info__checkbox-input payment-item__checkbox-input"
                                                    data-paymentMethod="momo"
                                                />
                                            </span>
                                        </div>
                                    </article>
                                </label>

                                <!-- Payment item 4 -->
                                <label>
                                    <article class="payment-item payment-item--pointer">
                                        <img
                                            src="./assets/img/payment/cash.png"
                                            alt=""
                                            class="payment-item__thumb"
                                        />
                                        <div class="payment-item__content">
                                            <div class="payment-item__info">
                                                <h3 class="payment-item__title">Thanh toán khi nhận hàng</h3>
                                            </div>

                                            <span class="cart-info__checkbox payment-item__checkbox">
                                                <input
                                                    type="radio"
                                                    name="payment-method"
                                                    class="cart-info__checkbox-input payment-item__checkbox-input"
                                                    data-paymentMethod="cash" 
                                                />
                                            </span>
                                        </div>
                                    </article>
                                </label>
                            </div>
                        </div>
                        <div class="col-4 col-xl-4 col-lg-12">
                            <div class="cart-info">
                                <h2 class="cart-info__heading cart-info__heading--lv2">Chi tiết thanh toán</h2>
                                <p class="cart-info__desc">
                                    Hoàn thành đơn hàng của bạn
                                </p>
                                
                                <form id="form-submit" class="cart-info" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="" data-user="<?php echo $_SESSION["email"] ?>">
                                    <div class="cart-info__row">
                                        <span>Tổng <label class="cart-info__sub-label">(mặt hàng)</label></span>
                                        <span><?php echo $countOrders; ?></span>
                                        
                                    </div>
                                    <div class="cart-info__row">
                                        <span>Ship <label class="cart-info__sub-label"></label></span>
                                        <span>30.000d</span>
                                        
                                    </div>

                                    <div class="cart-info__row">
                                        <span>Tổng <span class="cart-info__sub-label">(Giá)</span></span>
                                        <span>
                                        <?php
                                                echo $subTotal + 30000;
                                            ?>d
                                        </span>
                                    </div>
                                    <div class="cart-info__separate"></div>
                                    <div class="cart-info__row">
                                        <span>Tổng thanh toán</span>
                                        <span><?php
                                                echo $subTotal + 30000;
                                            ?>d</span>
                                    </div>
                                    <input type="text" name="price" value="<?php echo $subTotal + 30000; ?>" hidden>
                                    <input type="text" name="userId" value="<?php echo $userId; ?>" hidden>
                                    <input type="text" name="status" value="1" hidden>
                                    <input type="text" name="address" value="<?php  echo $shippingAddressId; ?>" hidden>
                                        <input type="submit" class="cart-info__next-btn btn btn--primary btn--rounded" value="Thanh toán <?php
                                                echo $subTotal + 30000;
                                            ?>d" name="payment" id="btn-payment">
                                </form>
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
                <p class="modal__text">Do you want to remove this item from shopping cart?</p>
                <div class="modal__bottom">
                    <button class="btn btn--small btn--outline modal__btn js-toggle" toggle-target="#delete-confirm">
                        Cancel
                    </button>
                    <button
                        class="btn btn--small btn--danger btn--primary modal__btn btn--no-margin js-toggle"
                        toggle-target="#delete-confirm"
                    >
                        Delete
                    </button>
                </div>
            </div>
            <div class="modal__overlay js-toggle" toggle-target="#delete-confirm"></div>
        </div>

        <!-- Modal: address new shipping address -->
        <div id="add-new-address" class="modal hide" style="--content-width: 650px">
            <div class="modal__content">
                <form action="" class="form">
                    <h2 class="modal__heading">Add new shipping address</h2>
                    <div class="modal__body">
                        <div class="form__row">
                            <div class="form__group">
                                <label for="name" class="form__label form__label--small">Name</label>
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
                                <p class="form__error">Name must be at least 2 characters</p>
                            </div>
                            <div class="form__group">
                                <label for="phone" class="form__label form__label--small">Phone</label>
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
                                <p class="form__error">Phone must be at least 10 characters</p>
                            </div>
                        </div>
                        <div class="form__group">
                            <label for="address" class="form__label form__label--small">Address</label>
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
                            <p class="form__error">Address not empty</p>
                        </div>
                        <div class="form__group">
                            <label for="city" class="form__label form__label--small">City/District/Town</label>
                            <div class="form__text-input form__text-input--small">
                                <input
                                    type="text"
                                    name=""
                                    placeholder="City/District/Town"
                                    id="city"
                                    class="form__input js-toggle"
                                    toggle-target="#city-dialog"
                                />
                                <img src="./assets/icons/form-error.svg" alt="" class="form__input-icon-error" />

                                <!-- Select dialog -->
                                <div id="city-dialog" class="form__select-dialog hide">
                                    <h2 class="form__dialog-heading d-none d-sm-block">City/District/Town</h2>
                                    <button
                                        class="form__close-dialog d-none d-sm-block js-toggle"
                                        toggle-target="#city-dialog"
                                    >
                                        &times
                                    </button>
                                    <div class="form__search">
                                        <input type="text" placeholder="Search" class="form__search-input" />
                                        <img src="./assets/icons/search.svg" alt="" class="form__search-icon icon" />
                                    </div>
                                    <ul class="form__options-list">
                                        <li class="form__option">Ha Noi</li>
                                        <li class="form__option form__option--current">Ho Chi Minh</li>
                                        <li class="form__option">Da Nang</li>
                                        <li class="form__option">Ha Noi</li>
                                        <li class="form__option">Ho Chi Minh</li>
                                        <li class="form__option">Da Nang</li>
                                        <li class="form__option">Ha Noi</li>
                                        <li class="form__option">Ho Chi Minh</li>
                                        <li class="form__option">Da Nang</li>
                                        <li class="form__option">Ha Noi</li>
                                        <li class="form__option">Ho Chi Minh</li>
                                        <li class="form__option">Da Nang</li>
                                        <li class="form__option">Ha Noi</li>
                                        <li class="form__option">Ho Chi Minh</li>
                                        <li class="form__option">Da Nang</li>
                                        <li class="form__option">Ha Noi</li>
                                        <li class="form__option">Ho Chi Minh</li>
                                        <li class="form__option">Da Nang</li>
                                        <li class="form__option">Ha Noi</li>
                                        <li class="form__option">Ho Chi Minh</li>
                                        <li class="form__option">Da Nang</li>
                                        <li class="form__option">Ha Noi</li>
                                        <li class="form__option">Ho Chi Minh</li>
                                        <li class="form__option">Da Nang</li>
                                        <li class="form__option">Ha Noi</li>
                                        <li class="form__option">Ho Chi Minh</li>
                                        <li class="form__option">Da Nang</li>
                                        <li class="form__option">Ha Noi</li>
                                        <li class="form__option">Ho Chi Minh</li>
                                        <li class="form__option">Da Nang</li>
                                        <li class="form__option">Ha Noi</li>
                                        <li class="form__option">Ho Chi Minh</li>
                                        <li class="form__option">Da Nang</li>
                                        <li class="form__option">Ha Noi</li>
                                        <li class="form__option">Ho Chi Minh</li>
                                        <li class="form__option">Da Nang</li>
                                    </ul>
                                </div>
                            </div>
                            <p class="form__error">Phone must be at least 11 characters</p>
                        </div>
                        <div class="form__group form__group--inline">
                            <label class="form__checkbox">
                                <input type="checkbox" name="" id="" class="form__checkbox-input d-none" />
                                <span class="form__checkbox-label">Set as default address</span>
                            </label>
                        </div>
                    </div>
                    <div class="modal__bottom">
                        <button class="btn btn--small btn--text modal__btn js-toggle" toggle-target="#add-new-address">
                            Cancel
                        </button>
                        <button class="btn btn--small btn--primary modal__btn btn--no-margin">Create</button>
                    </div>
                </form>
            </div>
            <div class="modal__overlay"></div>
        </div>
        </body>
        <script defer src="./assets/js/payment.js"></script>
</html>

