<style>
    .btnHidden {
        display: none !important;
    }
</style>

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
                                    <h1 class="profile-user__name"><?php echo $email ?></h1>
                                    <p class="profile-user__desc">Ngày tham gia: <?php echo $createdAt ?></p>
                                </div>

                                <!-- Menu 1 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">Quản lí tài khoản </h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a href="./?act=profile" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/profile.svg" alt="" class="icon" />
                                                </span>
                                                Thông tin cá nhân
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>

                                <!-- Menu 2 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">Sản phẩm của tôi</h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a href="./?act=buy" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/download.svg" alt="" class="icon" />
                                                </span>
                                                Đơn hàng của tôi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="profile-menu__link">
                                                <span class="profile-menu__icon">
                                                    <img src="./assets/icons/heart.svg" alt="" class="icon" />
                                                </span>
                                                Danh sách yêu thích 
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
                                    

                                    <!-- Thông tin tài khoản -->
                                    <div class="col-12">
                                        <h2 class="cart-info__heading">Đơn hàng của bạn</h2>
                                        
                                        <div class="row gy-md-1 row-cols-1 row-cols-lg-1">
                                            <?php 
                                                foreach ($data as $value) {
                                                    extract($value);
                                                    $imgPath = "./uploads/".$imageURL;
                                                    if(is_file($imgPath)) {
                                                        $image = $imgPath;
                                                        $noImg = "";
                                                    } else {
                                                        $image = "";
                                                        $noImg = "No photo";
                                                    }
                                                    echo '
                                                        <div class="col">
                                                            <div >
                                                                <article class="account-info">
                                                                    <div class="account-info__icon">
                                                                        <img src="'.$image.'" alt="" class="icon" width=50 style="object-fit: cover; filter: none;"/>
                                                                    </div>
                                                                    <div >
                                                                        <h3 class="account-info__title">'.$productName.' x '.$quantityProduct.'</h3>
                                                                        <p class="account-info__desc" id="dataComplete" data-idcp="'.$cp.'">'.$isCompleted.'</p>
                                                                    </div>
                                                                    <div style="margin-left: 30px">
                                                                        <h3 class="account-info__title">Ngày đặt hàng</h3>
                                                                        <p class="account-info__desc">'.$buyDate.'</p>
                                                                    </div>
                                                                    <div style="margin-left: 30px">
                                                                        <h3 class="account-info__title">Giá</h3>
                                                                        <p class="account-info__desc">'.$totalAmount.'</p>
                                                                    </div>
                                                                    
                                                                </article>
                                                                
                                                                <article class="account-info" style="margin-top: 16px; display: flex; justify-content: space-around">
                                                                    <div >
                                                                        <h3 class="account-info__title">Địa chỉ nhận hàng: '.$address.'</h3>
                                                                        <p class="account-info__desc"></p>
                                                                    </div>

                                                                    <div >
                                                                        <button class="btn js-toggle" style="color: #000" toggle-target="#update-confirm" id="btn-update" >Sửa</button>
                                                                    </div>

                                                                    
                                                                    
                                                                </article>

                                                                <article class="account-info" style="margin-top: 16px; display: flex; justify-content: space-around">
                                                                    <div >
                                                                        <h3 class="account-info__title">Tên người nhận: '.$name.'</h3>
                                                                        <p class="account-info__desc"></p>
                                                                    </div>

                                                                    <div >
                                                                        <button class="btn js-toggle" style="color: #000" toggle-target="#update-name" id="btn-update">Sửa</button>
                                                                    </div>
                                                                    
                                                                </article>

                                                                <article class="account-info" style="margin-top: 16px; display: flex; justify-content: space-around">
                                                                    <div >
                                                                        <h3 class="account-info__title">Số điện thoại: '.$phone.'</h3>
                                                                        <p class="account-info__desc"></p>
                                                                    </div>

                                                                    <div >
                                                                        <button class="btn js-toggle" style="color: #000" toggle-target="#update-phone" id="btn-update">Sửa</button>
                                                                    </div>
                                                                    
                                                                </article>
                                                                <article class="account-info btnHidden" style="margin-top: 16px; display: flex; justify-content: space-around" >
                                                                    <div >
                                                                        <button class="btn js-toggle" style="color: #000" toggle-target="#cmt-confirm" id="btn-cmt" >Nhận xét</button>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                        </div>
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
            </div>
        </main>

        <!-- Footer -->
        <footer id="footer" class="footer"></footer>
        <script>
            load("#footer", "./templates/footer.html");
        </script>

        
        <div id="update-confirm" class="modal modal--small hide">
            <div class="modal__content">
                <form action="">
                    <label for="address">Địa chỉ mới:</label>
                    <input class="update-input" type="text" name="address" id="address" style="border: 1px solid while" placeholder="address">
                </form>
                <div class="js-toggle" toggle-target="#update-confirm" class="error"></div>
                <div class="modal__bottom">
                    <button class="btn btn--small btn--outline modal__btn js-toggle" toggle-target="#update-confirm">
                        Cancel
                    </button>
                    <button
                        class="btn btn--small btn--danger btn--primary modal__btn btn--no-margin"
                        toggle-target="#update-confirm" 
                        id="update-address"
                        data-idShip="<?php echo $shippingAddressId; ?>"
                    >
                        Thay đổi
                    </button>
                </div>
                
            </div>
        </div>

        <div id="update-name" class="modal modal--small hide">
            <div class="modal__content">
                <form action="">
                    <label for="name">Tên người nhận mới:</label>
                    <input class="update-name" type="text" name="name" id="name" style="border: 1px solid while" placeholder="Name">
                </form>
                <div class="js-toggle" toggle-target="#update-confirm" class="error"></div>
                <div class="modal__bottom">
                    <button class="btn btn--small btn--outline modal__btn js-toggle" toggle-target="#update-name">
                        Cancel
                    </button>
                    <button
                        class="btn btn--small btn--danger btn--primary modal__btn btn--no-margin"
                        toggle-target="#update-name" 
                        id="update-name"
                        data-idShip="<?php echo $shippingAddressId; ?>"
                    >
                        Thay đổi
                    </button>
                </div>
                
            </div>
        </div>

        <div id="update-phone" class="modal modal--small hide">
            <div class="modal__content">
                <form action="">
                    <label for="phone">Địa chỉ mới:</label>
                    <input class="update-phone" type="text" name="phone" id="phone" style="border: 1px solid while" placeholder="phone">
                </form>
                <div class="js-toggle" toggle-target="#update-phone" class="error"></div>
                <div class="modal__bottom">
                    <button class="btn btn--small btn--outline modal__btn js-toggle" toggle-target="#update-confirm">
                        Cancel
                    </button>
                    <button
                        class="btn btn--small btn--danger btn--primary modal__btn btn--no-margin"
                        toggle-target="#update-phone" 
                        id="update-phone"
                        data-idShip="<?php echo $shippingAddressId; ?>"
                    >
                        Thay đổi
                    </button>
                </div>
                
            </div>
        </div>

        <!-- <div id="" class="modal modal--small hide">
            <div class="modal__content">
                <form action="">
                    <label for="phone">Hãy cho chúng tôi biết cảm nghĩ của bạn về sản phẩm: </label>
                    <input class="cmt-input" type="text" name="phone" id="phone" style="border: 1px solid while" placeholder="Comment">
                </form>
                <div class="js-toggle" toggle-target="#cmt-confirm" class="error"></div>
                <div class="modal__bottom">
                    <button class="btn btn--small btn--outline modal__btn js-toggle" toggle-target="#cmt-confirm">
                        Trở về
                    </button>
                    <button
                        class="btn btn--small btn--danger btn--primary modal__btn btn--no-margin"
                        toggle-target="#cmt-confirm" 
                        id="cmt-btn"
                    >
                        Gửi
                    </button>
                </div>
                
            </div>
        </div> -->

        <div id="cmt-confirm" class="modal hide" style="--content-width: 650px">
            <div class="modal__content">
                <form action="cmt" class="form" method="post">
                    <h2 class="modal__heading">Hãy cho chúng tôi biết ý kiến của bạn</h2>
                    <div class="modal__body">
                        
                    <div class="form__group">
                                <label for="phone" class="form__label form__label--small"></label>
                                <div class="form__text-input form__text-input--small">
                                    <input
                                        type="tel"
                                        name="phone"
                                        id="phone"
                                        class="form__input cmt-input"
                                        required
                                        minlength="5"
                                        
                                        placeholder="test cmt"
                                    />
                                    <img src="./assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                                </div>
                                <p class="form__error">Nhận xét phải có ít nhất 5 ký tự</p>
                            </div>
                    </div>
                    <div class="form__group">
                                <label for="star" class="form__label form__label--small">Star <img src="./assets/icons/star.svg" alt="" class="product-card__star"></label>
                                <div class="form__text-input form__text-input--small">
                                    <input
                                        type="number"
                                        name="star"
                                        id="star"
                                        placeholder="star"
                                        class="form__input"
                                        required
                                        minlength="1"
                                    />
                                    <img src="./assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                                </div>
                                <p class="form__error">Đánh giá phải 1 số</p>
                            </div>
                            <input type="text" value="<?php echo $productID ?>" hidden id="idP">
                    <div class="modal__bottom">
                        <button class="btn btn--small btn--text modal__btn js-toggle" toggle-target="#cmt-confirm">
                            Trở về
                        </button>
                        <button
                            class="btn btn--small btn--primary modal__btn btn--no-margin js-toggle"
                            toggle-target="#cmt-confirm"
                            id="cmt-btn"
                        >
                            Gửi
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal__overlay"></div>
        </div>

    </body>
    <script src="./assets/js/buy.js"></script>
</html>