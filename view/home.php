
    <!-- Header -->
    <header id="header" class="header"></header>

    <!-- MAIN -->
    <main class="container home">
        <!-- Slideshow -->
        <div class="home__container">
            <div class="slideshow">
                <div class="slideshow__inner">
                    <div class="slideshow__item">
                        <a href="#!" class="slideshow__link">
                            <picture>
                                <source media="(max-width: 767.98px)" srcset="./assets/img/slideshow/1.png" />
                                <img src="./assets/img/slideshow/1.png" alt="" class="slideshow__img" />
                            </picture>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Browse Categories -->
        <section class="home__container">
            <div class="home__row">
                <h2 class="home__heading">Thương hiệu nổi bật</h2>
            </div>
            <div class="home__cate row row-cols-3 row-cols-md-1">
                <!-- Category item 1 -->
                <?php
                    foreach ($dataCategories as $categories) {
                        extract($categories);
                        echo '
                            <div class="col">
                                <a href="./?act=filterProduct&id='.$categoryId.'">
                                    <article class="cate-item">
                                        <img src="./assets/img/category-item/item-1.png" alt="" class="cate-item__thumb" />
                                        <div class="cate-item__info">
                                            <h3 class="cate-item__title">'.$categoryName.'</h3>
                                            <p class="cate-item__desc">'.$description.'</p>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        ';
                    }
                ?>
            </div>
        </section>

        <!-- Browse Products -->
        <section class="home__container">
            <div class="home__row">
                <h2 class="home__heading">Tổng sản phẩm: <?php echo $quantity ?></h2>
                <div class="filter-wrap">
                    <button class="filter-btn js-toggle" toggle-target="#home-filter">
                        Lọc
                        <img src="./assets/icons/filter.svg" alt="" class="filter-btn__icon icon" />
                    </button>

                    <div id="home-filter" class="filter hide">
                        <img src="./assets/icons/arrow-up.png" alt="" class="filter__arrow" />
                        <h3 class="filter__heading">Lọc</h3>
                        <form action="" class="filter__form form">
                            <div class="filter__row filter__content">
                                <!-- Filter column 1 -->
                                <div class="filter__col">
                                    <label for="" class="form__label">Giá</label>
                                    <div class="filter__form-group">
                                        <div class="filter__form-slider" style="--min-value: 10%; --max-value: 60%">
                                        </div>
                                    </div>
                                    <div class="filter__form-group filter__form-group--inline">
                                        <div>
                                            <label for="" class="form__label form__label--small"> Thấp nhất </label>
                                            <div class="filter__form-text-input filter__form-text-input--small">
                                                <input type="text" name="" id="" class="filter__form-input"
                                                    value="$30.00" />
                                            </div>
                                        </div>
                                        <div>
                                            <label for="" class="form__label form__label--small"> Cao nhất </label>
                                            <div class="filter__form-text-input filter__form-text-input--small">
                                                <input type="text" name="" id="" class="filter__form-input"
                                                    value="$100.00" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter__separate"></div>

                                <!-- Filter column 2 -->
                                <div class="filter__col">
                                    <label for="" class="form__label">Kích cỡ/Khối lượng</label>
                                    <div class="filter__form-group">
                                        <div class="form__select-wrap">
                                            <div class="form__select" style="--width: 158px">
                                                500g
                                                <img src="./assets/icons/select-arrow.svg" alt=""
                                                    class="form__select-arrow icon" />
                                            </div>
                                            <div class="form__select">
                                                Gram
                                                <img src="./assets/icons/select-arrow.svg" alt=""
                                                    class="form__select-arrow icon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter__form-group">
                                        <div class="form__tags">
                                            <button class="form__tag">Nhỏ</button>
                                            <button class="form__tag">Trung bình</button>
                                            <button class="form__tag">Lớn</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter__separate"></div>

                                <!-- Filter column 3 -->
                                <div class="filter__col">
                                    <label for="" class="form__label">Thương hiệu</label>
                                    <div class="filter__form-group">
                                        <div class="filter__form-text-input">
                                            <input type="text" name="searchName" id="searchName" placeholder="Search brand name"
                                                class="filter__form-input" />
                                            <img src="./assets/icons/search.svg" alt=""
                                                class="filter__form-input-icon icon" />
                                        </div>
                                    </div>
                                    <div class="filter__form-group">
                                        <div class="form__tags">
                                            <?php
                                                foreach ($dataCategories as $categories) {
                                                    extract($categories);
                                                    echo '
                                                        <button class="form__tag"><a href="./?act=filterProduct&id='.$categoryId.'">'.$categoryName.'</a></button>
                                                    ';
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__row filter__footer">
                                <button class="btn btn--text filter__cancel js-toggle" toggle-target="#home-filter">
                                    Trở về
                                </button>
                                <button class="btn btn--primary filter__submit js-toggle" toggle-target="#home-filter">
                                    Hiển thị tất cả
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row row-cols-5 row-cols-lg-2 row-cols-sm-1 g-3">
                <!-- Product card 1 -->
                

                <?php
                    foreach ($dataProducts as $product) {
                        extract($product);
                        $imgPath = "./uploads/".$imageURL;
                        if(is_file($imgPath)) {
                            $image = $imgPath;
                            $noImg = "";
                        } else {
                            $image = "";
                            $noImg = "No photo";
                        }
                        $avg = round(getAVGCmt($productID), 1);
                        foreach ($dataCategories as $category) {
                            extract($category);
                            if ($categoryId == $brand) {
                              $brand = $categoryName;
                            echo '
                                <div class="col">
                                    <article class="product-card">
                                        <div class="product-card__img-wrap">
                                            <a href="./?act=product-detail&id='.$productID.'">
                                                <img src="'.$image.'" alt="'.$noImg.'" class="product-card__thumb" />
                                            </a>
                                            <button class="like-btn product-card__like-btn">
                                                <img src="./assets/icons/heart.svg" alt="" class="like-btn__icon icon" />
                                                <img src="./assets/icons/heart-red.svg" alt="" class="like-btn__icon--liked" />
                                            </button>
                                        </div>
                                        <h3 class="product-card__title">
                                            <a href="./?act=product-detail&id='.$productID.'">'.$productName.'</a>
                                        </h3>
                                        <p class="product-card__brand">'.$brand.'</p>
                                        <div class="product-card__row">
                                            <span class="product-card__price"> '.$price.'d</span>
                                            <img src="./assets/icons/star.svg" alt="" class="product-card__star" />
                                            <span class="product-card__score">'.$avg.'</span>
                                        </div>
                                    </article>
                                </div>
                            ';
                            }
                        }
                    }
                ?>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="footer" class="footer"></footer>
    <script>
        load("#footer", "./templates/footer.html");
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script defer src="./assets/js/slideshow.js"></script>
</body>

</html>