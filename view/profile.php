<main class="profile">
            <div class="container">
                <!-- Search bar -->
                <div class="profile-container">
                    <div class="search-bar d-none d-md-flex">
                        <input type="text" name="" id="" placeholder="Search for item" class="search-bar__input" />
                        <button class="search-bar__submit">
                            <img src="./assets/icons/search.svg" alt="" class="search-bar__icon icon" />
                        </button>
                    </div>
                </div>

                <!-- Profile content -->
                <div class="profile-container">

                    <div class="row gy-md-3">
                        <div class="col-3 col-xl-4 col-lg-5 col-md-12">
                            <aside class="profile__sidebar">
                                <!-- User -->
                                <div class="profile-user">
                                    <img src="./assets/img/avatar/avatar-3.png" alt="" class="profile-user__avatar" />
                                    <h1 class="profile-user__name">Imran Khan</h1>
                                    <p class="profile-user__desc">đăng kí: 17/05/2005</p>
                                </div>

                                <!-- Menu 1 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">Quản lí tài khoản </h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a href="./edit-personal-info.html" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/profile.svg" alt="" class="icon" />
                                                </span>
                                                Thông tin cá nhân
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/location.svg" alt="" class="icon" />
                                                </span>
                                                Địa chỉ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/message-2.svg" alt="" class="icon" />
                                                </span>
                                                Quyền riêng tư
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Menu 2 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">Sản phẩm của tôi</h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/download.svg" alt="" class="icon" />
                                                </span>
                                                Sắp xếp lại
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/heart.svg" alt="" class="icon" />
                                                </span>
                                                Danh sách
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/gift-2.svg" alt="" class="icon" />
                                                </span>
                                                Đăng kí
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Menu 3 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">Đăng kí và kế hoạch</h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/shield.svg" alt="" class="icon" />
                                                </span>
                                                Kế hoạch bảo vệ
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Menu 4 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">Dịch vụ khách hàng</h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/info.svg" alt="" class="icon" />
                                                </span>
                                                Hỗ trợ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/danger.svg" alt="" class="icon" />
                                                </span>
                                                Điều khoản sử dụng
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-9 col-xl-8 col-lg-7 col-md-12">
                            <div class="cart-info">
                                <div class="row gy-3">
                                    <!-- Ví của tôi -->
                                    <div class="col-12">
                                        <h2 class="cart-info__heading">Ví của tôi</h2>
                                        <p class="cart-info__desc profile__desc">Phương thức thanh toán</p>

                                        <div class="row gy-md-2 row-cols-3 row-cols-xl-2 row-cols-lg-1">
                                            <!-- Payment card 1 -->
                                            <div class="col">
                                                <article class="payment-card" style="--bg-color: #1e2e69">
                                                    <img
                                                        src="./assets/img/card/plane-bg.svg"
                                                        alt=""
                                                        class="payment-card__img"
                                                    />
                                                    <div class="payment-card__top">
                                                        <img src="./assets/img/card/plane.svg" alt="" />
                                                        <span class="payment-card__type">Teckcombank</span>
                                                    </div>
                                                    <div class="payment-card__number">1234 4567 8901 2221</div>
                                                    <div class="payment-card__bottom">
                                                        <div>
                                                            <p class="payment-card__label">Tên chủ thẻ</p>
                                                            <p class="payment-card__value">Imran Khan</p>
                                                        </div>
                                                        <div class="payment-card__expired">
                                                            <p class="payment-card__label">Hết hạn</p>
                                                            <p class="payment-card__value">10/22</p>
                                                        </div>
                                                        <div class="payment-card__circle"></div>
                                                    </div>
                                                </article>
                                            </div>

                                            

                                            <!-- Add new payment card -->
                                            <div class="col">
                                                <a class="new-card" href="./add-new-card.html">
                                                    <img
                                                        src="./assets/icons/plus.svg"
                                                        alt=""
                                                        class="new-card__icon icon"
                                                    />
                                                    <p class="new-card__text">THêm thẻ mới</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thông tin tài khoản -->
                                    <div class="col-12">
                                        <h2 class="cart-info__heading">Thông tin tài khoản</h2>
                                        <p class="cart-info__desc profile__desc">
                                        Địa chỉ, thông tin liên lạc và mật khẩu
                                        </p>
                                        <div class="row gy-md-2 row-cols-2 row-cols-lg-1">
                                            <!-- Thông tin tài khoản 1 -->
                                            <div class="col">
                                                <a href="./edit-personal-info.html">
                                                    <article class="account-info">
                                                        <div class="account-info__icon">
                                                            <img src="./assets/icons/message.svg" alt="" class="icon" />
                                                        </div>
                                                        <div>
                                                            <h3 class="account-info__title">Địa chỉ email</h3>
                                                            <p class="account-info__desc">tarek97.ta@gmail.com</p>
                                                        </div>
                                                    </article>
                                                </a>
                                            </div>

                                            <!-- Thông tin tài khoản 2 -->
                                            <div class="col">
                                                <a href="./edit-personal-info.html">
                                                    <article class="account-info">
                                                        <div class="account-info__icon">
                                                            <img src="./assets/icons/calling.svg" alt="" class="icon" />
                                                        </div>
                                                        <div>
                                                            <h3 class="account-info__title">Số điện thoại</h3>
                                                            <p class="account-info__desc">+000 11122 2345 657</p>
                                                        </div>
                                                    </article>
                                                </a>
                                            </div>

                                            <!-- Thông tin tài khoản 3 -->
                                            <div class="col">
                                                <a href="./edit-personal-info.html">
                                                    <article class="account-info">
                                                        <div class="account-info__icon">
                                                            <img
                                                                src="./assets/icons/location.svg"
                                                                alt=""
                                                                class="icon"
                                                            />
                                                        </div>
                                                        <div>
                                                            <h3 class="account-info__title">Thêm địa chỉ</h3>
                                                            <p class="account-info__desc">
                                                                Bangladesh Embassy, Washington, DC 20008
                                                            </p>
                                                        </div>
                                                    </article>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <h2 class="cart-info__heading">Danh sách</h2>
                                        <p class="cart-info__desc profile__desc">2 items - Primary</p>

                                        <!-- Favourite item 1 -->
                                        <?php
                                            foreach ($dataProduct as $value) {
                                                extract($value);
                                                $subTotal += 3;
                                                $imgPath = "./uploads/".$imageURL;
                                                if(is_file($imgPath)) {
                                                    $image = $imgPath;
                                                    $noImg = "";
                                                } else {
                                                    $image = "";
                                                    $noImg = "No photo";
                                                }
                                                echo '
                                                    <article class="favourite-item">
                                                        <img
                                                            src="'.$image.'"
                                                            alt=""
                                                            class="favourite-item__thumb"
                                                        />
                                                        <div>
                                                            <h3 class="favourite-item__title">
                                                            '.$productName.'
                                                            </h3>
                                                            <div class="favourite-item__content">
                                                                <span class="favourite-item__price">'.$subTotal.' </span>
                                                            </div>
                                                            <div class="favourite-item__content">
                                                                <span class="favourite-item__price">Status: pending</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                ';
                                            }
                                        ?>
                                    </div>
                                </div>
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
                <p class="modal__text">Bạn có muốn xóa mặt hàng này khỏi giỏ hàng không?</p>
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
    </body>
</html>