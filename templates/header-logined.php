<?php
    $subTotal = 0;
    foreach ($dataOrderDetial as $data) {
        extract($data);
        $subTotal += $subtotal;
    }
?>

<div class="container">
    <div class="top-bar">
        <!-- More -->
        <button class="top-bar__more d-none d-lg-block js-toggle" toggle-target="#navbar">
            <img src="./assets/icons/more.svg" alt="" class="icon top-bar__more-icon" />
        </button>

        <!-- Logo -->
        <a href="./" class="logo top-bar__logo">
            <img src="./assets/icons/logo.svg" alt="grocerymart" class="logo__img top-bar__logo-img" />
            <h1 class="logo__title top-bar__logo-title">grocerymart</h1>
        </a>

        <!-- Navbar -->
        <nav id="navbar" class="navbar hide">
            <button class="navbar__close-btn js-toggle" toggle-target="#navbar">
                <img class="icon" src="./assets/icons/arrow-left.svg" alt="" />
            </button>

            <a href="./checkout.html" class="nav-btn d-none d-md-flex">
                <img src="./assets/icons/buy.svg" alt="" class="nav-btn__icon icon" />
                <span class="nav-btn__title">Giỏ hàng </span>
                <span class="nav-btn__qnt">3</span>
            </a>

            <a href="#!" class="nav-btn d-none d-md-flex">
                <img src="./assets/icons/heart.svg" alt="" class="nav-btn__icon icon" />
                <span class="nav-btn__title">Yêu thích </span>
                <span class="nav-btn__qnt">3</span>
            </a>


        </nav>
        <div class="navbar__overlay js-toggle" toggle-target="#navbar"></div>

        <!-- Actions -->
        <div class="top-act">
            <div class="top-act__group d-md-none top-act__group--single">
                <button class="top-act__btn">
                    <img src="./assets/icons/search.svg" alt="" class="icon top-act__icon" />
                </button>
            </div>

            <div class="top-act__group d-md-none">
                <div class="top-act__btn-wrap">
                    <button class="top-act__btn">
                        <img src="./assets/icons/heart.svg" alt="" class="icon top-act__icon" />
                        <span class="top-act__title">03</span>
                    </button>

                    <!-- Dropdown -->
                    <div class="act-dropdown">
                        <div class="act-dropdown__inner">
                            <img src="./assets/icons/arrow-up.png" alt="" class="act-dropdown__arrow" />
                            <div class="act-dropdown__top">
                                <h2 class="act-dropdown__title">Bạn có 3 sản phẩm </h2>
                                <a href="./favourite.html" class="act-dropdown__view-all">Xem tất cả</a>
                            </div>
                            <div class="row row-cols-3 gx-2 act-dropdown__list">
                                <!-- Cart preview item 1 -->
                                <div class="col">
                                    <article class="cart-preview-item">
                                        <div class="cart-preview-item__img-wrap">
                                            <img src="./assets/img/product/item-1.png" alt=""
                                                class="cart-preview-item__thumb" />
                                        </div>
                                        <h3 class="cart-preview-item__title">Lavazza Coffee Blends</h3>
                                        <p class="cart-preview-item__price">$329.00</p>
                                    </article>
                                </div>

                                <!-- Cart preview item 2 -->
                                <div class="col">
                                    <article class="cart-preview-item">
                                        <div class="cart-preview-item__img-wrap">
                                            <img src="./assets/img/product/item-2.png" alt=""
                                                class="cart-preview-item__thumb" />
                                        </div>
                                        <h3 class="cart-preview-item__title">Coffee Beans Espresso</h3>
                                        <p class="cart-preview-item__price">$39.99</p>
                                    </article>
                                </div>

                                <!-- Cart preview item 3 -->
                                <div class="col">
                                    <article class="cart-preview-item">
                                        <div class="cart-preview-item__img-wrap">
                                            <img src="./assets/img/product/item-3.png" alt=""
                                                class="cart-preview-item__thumb" />
                                        </div>
                                        <h3 class="cart-preview-item__title">Qualità Oro Mountain</h3>
                                        <p class="cart-preview-item__price">$47.00</p>
                                    </article>
                                </div>
                            </div>
                            <div class="act-dropdown__separate"></div>
                            <div class="act-dropdown__checkout">
                                <a href="./?act=checkout"
                                    class="btn btn--primary btn--rounded act-dropdown__checkout-btn">
                                   Kiểm tra tất cả
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="top-act__separate"></div>

                <div class="top-act__btn-wrap">
                    <button class="top-act__btn">
                        <img src="./assets/icons/buy.svg" alt="" class="icon top-act__icon" />
                        <span class="top-act__title">$<?php echo $subTotal ?></span>
                    </button>

                    <!-- Dropdown -->
                    <div class="act-dropdown">
                        <div class="act-dropdown__inner">
                            <img src="./assets/icons/arrow-up.png" alt="" class="act-dropdown__arrow" />
                            <div class="act-dropdown__top">
                                <h2 class="act-dropdown__title">Bạn có 3 sản phẩm </h2>
                                <a href="./?act=checkout" class="act-dropdown__view-all">Xem tất cả</a>
                            </div>
                            <div class="row row-cols-3 gx-2 act-dropdown__list">
                                <!-- Cart preview item 1 -->
                                <div class="col">
                                    <article class="cart-preview-item">
                                        <div class="cart-preview-item__img-wrap">
                                            <img src="./assets/img/product/item-1.png" alt=""
                                                class="cart-preview-item__thumb" />
                                        </div>
                                        <h3 class="cart-preview-item__title">Lavazza Coffee Blends</h3>
                                        <p class="cart-preview-item__price">$329.00</p>
                                    </article>
                                </div>

                                <!-- Cart preview item 2 -->
                                <div class="col">
                                    <article class="cart-preview-item">
                                        <div class="cart-preview-item__img-wrap">
                                            <img src="./assets/img/product/item-2.png" alt=""
                                                class="cart-preview-item__thumb" />
                                        </div>
                                        <h3 class="cart-preview-item__title">Coffee Beans Espresso</h3>
                                        <p class="cart-preview-item__price">$39.99</p>
                                    </article>
                                </div>

                                <!-- Cart preview item 3 -->
                                <div class="col">
                                    <article class="cart-preview-item">
                                        <div class="cart-preview-item__img-wrap">
                                            <img src="./assets/img/product/item-3.png" alt=""
                                                class="cart-preview-item__thumb" />
                                        </div>
                                        <h3 class="cart-preview-item__title">Qualità Oro Mountain</h3>
                                        <p class="cart-preview-item__price">$47.00</p>
                                    </article>
                                </div>
                            </div>
                            <div class="act-dropdown__bottom">
                                <div class="act-dropdown__row">
                                    <span class="act-dropdown__label">Tổng Thu </span>
                                    <span class="act-dropdown__value">$415.99</span>
                                </div>
                                <div class="act-dropdown__row">
                                    <span class="act-dropdown__label">Thuế </span>
                                    <span class="act-dropdown__value">Miên phí </span>
                                </div>
                                <div class="act-dropdown__row">
                                    <span class="act-dropdown__label">Phí vận chuyển </span>
                                    <span class="act-dropdown__value">$10.00</span>
                                </div>
                                <div class="act-dropdown__row act-dropdown__row--bold">
                                    <span class="act-dropdown__label">Tổng tiền </span>
                                    <span class="act-dropdown__value">$425.99</span>
                                </div>
                            </div>
                            <div class="act-dropdown__checkout">
                                <a href="./?act=checkout"
                                    class="btn btn--primary btn--rounded act-dropdown__checkout-btn">
                                   Kiểm tra tât cả 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="top-act__user">
                <img src="./assets/img/avatar.jpg" alt="" class="top-act__avatar" />

                <!-- Dropdown -->
                <div class="act-dropdown top-act__dropdown">
                    <div class="act-dropdown__inner user-menu">
                        <img src="./assets/icons/arrow-up.png" alt=""
                            class="act-dropdown__arrow top-act__dropdown-arrow" />

                        <div class="user-menu__top">
                            <img src="./assets/img/avatar.jpg" alt="" class="user-menu__avatar" />
                            <div>
                                <p class="user-menu__name">John Smith</p>
                                <p>@johnsmith</p>
                            </div>
                        </div>

                        <ul class="user-menu__list">
                            <li>
                                <a href="./profile.html" class="user-menu__link">Thông tin các nhân </a>
                            </li>
                            <li>
                                <a href="./favourite.html" class="user-menu__link">Danh sách yêu thích </a>
                            </li>
                            <li class="user-menu__separate">
                                <a href="#!" class="user-menu__link" id="switch-theme-btn">
                                    <span>Chế độ tối </span>
                                    <img src="./assets/icons/sun.svg" alt="" class="icon user-menu__icon" />
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="user-menu__link">Cài đặt </a>
                            </li>
                            <li class="user-menu__separate">
                                <a href="./?act=logOut" class="user-menu__link">Đăng xuất </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<body>