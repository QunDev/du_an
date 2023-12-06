<body>
        <!-- Header -->
        <header id="header" class="header"></header>

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
                                Home
                                <img src="./assets/icons/arrow-right.svg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="breadcrumbs__link breadcrumbs__link--current">Checkout</a>
                        </li>
                    </ul>
                </div>

                <!-- Checkout content -->
                <div class="checkout-container">
                    <div class="row gy-xl-3">
                        <div class="col-8 col-xl-12">
                            <div class="cart-info">
                                <div class="cart-info__list">
                                    <!-- Cart item 1 -->
                                    <?php
                                        $subTotal = 0;
                                        foreach ($dataOrderDetial as $data) {
                                            extract($data);
                                            $totalM = $unitPrice * $quantity;
                                            $subTotal += $totalM; 
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
                                                                    <button id="prev" class="cart-item__input-btn" toggle-target="#prevMin-confirm">
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
                                                    Continue Shopping
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4 col-xxl-5">
                                            <div class="cart-info__row">
                                                <span>Subtotal:</span>
                                                <span><?php
                                                    echo $subTotal;
                                                ?>d</span>
                                            </div>
                                            <div class="cart-info__row">
                                                <span>Shipping:</span>
                                                <span>$3</span>
                                            </div>
                                            <div class="cart-info__separate"></div>
                                            <div class="cart-info__row cart-info__row--bold">
                                                <span>Total:</span>
                                                <span>$<?php
                                                    echo $subTotal + 3;
                                                ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-xl-12">
                            <div class="cart-info">
                                <div class="cart-info__row">
                                    <span>Subtotal <span class="cart-info__sub-label">(items)</span></span>
                                    <span><?php echo $countOrders; ?></span>
                                </div>
                                <div class="cart-info__row">
                                    <span>Price <span class="cart-info__sub-label">(Total)</span></span>
                                    <span>$
                                        <?php
                                            echo $subTotal + 3;
                                        ?>
                                    </span>
                                </div>
                                <div class="cart-info__separate"></div>
                                <div class="cart-info__row">
                                    <span>Estimated Total</span>
                                    <span>$
                                        <?php
                                            echo $subTotal + 3;
                                        ?>
                                    </span>
                                </div>
                                <a href="./?act=shipping" class="cart-info__next-btn btn btn--primary btn--rounded" id="nextURL" data-count="<?php echo $countOrders; ?>">
                                    Continue to checkout
                                </a>
                            </div>
                            <div class="cart-info">
                                <a href="#!">
                                    <article class="gift-item">
                                        <div class="gift-item__icon-wrap">
                                            <img src="./assets/icons/gift.svg" alt="" class="gift-item__icon" />
                                        </div>
                                        <div class="gift-item__content">
                                            <h3 class="gift-item__title">Send this order as a gift.</h3>
                                            <p class="gift-item__desc">
                                                Available items will be shipped to your gift recipient.
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
                        id="delete"
                        type="button"
                    >
                        Delete
                    </button>
                </div>
            </div>
            <div class="modal__overlay js-toggle" toggle-target="#delete-confirm"></div>
        </div>

        <!-- Modal: confirm min shopping cart item -->
        <div id="prevMin-confirm" class="modal modal--small hide">
            <div class="modal__content">
                <p class="modal__text">Min: 1</p>
                <div class="modal__bottom">
                    <button class="btn btn--small btn--outline modal__btn js-toggle" toggle-target="#prevMin-confirm">
                        Ok
                    </button>
                </div>
            </div>
            <div class="modal__overlay js-toggle" toggle-target="#prevMin-confirm"></div>
        </div>
    </body>
</html>

<script src="./assets/js/order.js"></script>