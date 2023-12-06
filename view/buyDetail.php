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
                                            <a href="#!" class="profile-menu__link">
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
                                                            <a href="./?act=buyDetail&id='.$buyId.'">
                                                                <article class="account-info">
                                                                    <div class="account-info__icon">
                                                                        <img src="'.$image.'" alt="" class="icon" width=50 style="object-fit: cover; filter: none;"/>
                                                                    </div>
                                                                    <div>
                                                                        <h3 class="account-info__title">'.$productName.' x '.$quantityProduct.'</h3>
                                                                        <p class="account-info__desc">'.$isCompleted.'</p>
                                                                    </div>
                                                                </article>
                                                            </a>
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