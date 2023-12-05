<?php

    extract($dataProduct);   
    $desc = $description;
    $imgPath = "./uploads/".$imageURL;
    if(is_file($imgPath)) {
        $image = $imgPath;
        $noImg = "";
    } else {
        $image = "";
        $noImg = "No photo";
    }
    foreach ($dataCategories as $category) {
        extract($category);
        if ($categoryId == $brand) {
          $brand = $categoryName;
        }
    }
    extract($dataUser);
?>
    <body>
        <!-- Header -->
        <header id="header" class="header"></header>

        <!-- MAIN -->
        <main class="product-page">
            <div class="container">
                <!-- Search bar -->
                <div class="product-container">
                    <div class="search-bar d-none d-md-flex">
                        <input type="text" name="" id="" placeholder="Search for item" class="search-bar__input" />
                        <button class="search-bar__submit">
                            <img src="./assets/icons/search.svg" alt="" class="search-bar__icon icon" />
                        </button>
                    </div>
                </div>

                <!-- Breadcrumbs -->
                <div class="product-container">
                    <ul class="breadcrumbs">
                        <?php
                            echo '
                                <li>
                                <a href="./" class="breadcrumbs__link">
                                    Home
                                    <img src="./assets/icons/arrow-right.svg" alt="" />
                                </a>
                                </li>
                                <li>
                                    <a href="#!" class="breadcrumbs__link">
                                        '.$brand.'
                                        <img src="./assets/icons/arrow-right.svg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="breadcrumbs__link">
                                        '.$productName.'
                                    </a>
                                </li>
                            ';
                        ?>
                    </ul>
                </div>

                <!-- Product info -->
                <div class="product-container prod-info-content">
                    <div class="row">
                        <div class="col-5 col-xl-6 col-lg-12">
                            <div class="prod-preview">
                                <div class="prod-preview__list">
                                    <div class="prod-preview__item">
                                        <img src="<?php echo $image; ?>" alt="" class="prod-preview__img" />
                                    </div>
                                    <div class="prod-preview__item">
                                        <img src="./assets/img/product/item-2.png" alt="" class="prod-preview__img" />
                                    </div>
                                    <div class="prod-preview__item">
                                        <img src="./assets/img/product/item-3.png" alt="" class="prod-preview__img" />
                                    </div>
                                    <div class="prod-preview__item">
                                        <img src="./assets/img/product/item-4.png" alt="" class="prod-preview__img" />
                                    </div>
                                </div>
                                <div class="prod-preview__thumbs">
                                    <img
                                        src="<?php echo $image; ?>"
                                        alt=""
                                        class="prod-preview__thumb-img prod-preview__thumb-img--current"
                                    />
                                    <img src="./assets/img/product/item-2.png" alt="" class="prod-preview__thumb-img" />
                                    <img src="./assets/img/product/item-3.png" alt="" class="prod-preview__thumb-img" />
                                    <img src="./assets/img/product/item-4.png" alt="" class="prod-preview__thumb-img" />
                                </div>
                            </div>
                        </div>
                        <div class="col-7 col-xl-6 col-lg-12">
                            <form action="./?act=addProduct&id=<?php echo $productID ?>&userId=<?php echo $userID ?>&price=<?php echo $price/100*10 + $price ?>" class="form" method="post">
                                <section class="prod-info">
                                    <h1 class="prod-info__heading">
                                        <?php echo $productName; ?>
                                    </h1>
                                    <div class="row">
                                        <div class="col-5 col-xxl-6 col-xl-12">
                                            <div class="prod-prop">
                                                <img src="./assets/icons/star.svg" alt="" class="prod-prop__icon" />
                                                <h4 class="prod-prop__title">(3.5) 1100 Lượt xem</h4>
                                            </div>
                                            <label for="" class="form__label prod-info__label">Kích thước/Trọng lượng</label>
                                            <div class="filter__form-group">
                                                <div class="form__select-wrap">
                                                    <div class="form__select" style="--width: 146px">
                                                        500g
                                                        <img
                                                            src="./assets/icons/select-arrow.svg"
                                                            alt=""
                                                            class="form__select-arrow icon"
                                                        />
                                                    </div>
                                                    <div class="form__select">
                                                        Gram
                                                        <img
                                                            src="./assets/icons/select-arrow.svg"
                                                            alt=""
                                                            class="form__select-arrow icon"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="filter__form-group">
                                                <div class="form__tags">
                                                    <button class="form__tag prod-info__tag">nhỏ</button>
                                                    <button class="form__tag prod-info__tag">Trung bình</button>
                                                    <button class="form__tag prod-info__tag">Lớn</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7 col-xxl-6 col-xl-12">
                                            <div class="prod-props">
                                                <div class="prod-prop">
                                                    <img
                                                        src="./assets/icons/document.svg"
                                                        alt=""
                                                        class="prod-prop__icon icon"
                                                    />
                                                    <h4 class="prod-prop__title">So sánh</h4>
                                                </div>
                                                <div class="prod-prop">
                                                    <img
                                                        src="./assets/icons/buy.svg"
                                                        alt=""
                                                        class="prod-prop__icon icon"
                                                    />
                                                    <div>
                                                        <h4 class="prod-prop__title">Vận chuyển</h4>
                                                        <p class="prod-prop__desc">Từ 128.000đ </p>
                                                    </div>
                                                </div>
                                                <div class="prod-prop">
                                                    <img
                                                        src="./assets/icons/bag.svg"
                                                        alt=""
                                                        class="prod-prop__icon icon"
                                                    />
                                                    <div>
                                                        <h4 class="prod-prop__title">Pickup</h4>
                                                        <p class="prod-prop__desc">trong 2 của hàng, hôm nay</p>
                                                    </div>
                                                </div>
                                                <div class="prod-info__card">
                                                    <div class="prod-info__row">
                                                        <span class="prod-info__price"><?php echo $price ?>đ</span>
                                                        <span class="prod-info__tax">10%</span>
                                                    </div>
                                                    <p class="prod-info__total-price"><?php echo $price/100*10 + $price ?>đ</p>
                                                    <div class="prod-info__row">
                                                        <button class="btn btn--primary prod-info__add-to-cart" type="submit">
                                                            THêm vào giỏ hàng 
                                                        </button>
                                                        <button class="like-btn prod-info__like-btn">
                                                            <img
                                                                src="./assets/icons/heart.svg"
                                                                alt=""
                                                                class="like-btn__icon icon"
                                                            />
                                                            <img
                                                                src="./assets/icons/heart-red.svg"
                                                                alt=""
                                                                class="like-btn__icon--liked"
                                                            />
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Product content -->
                <div class="product-container">
                    <div class="prod-tab js-tabs">
                        <ul class="prod-tab__list">
                            <li class="prod-tab__item prod-tab__item--current">Mô tả</li>
                            <li class="prod-tab__item">Lượt xem (1100)</li>
                            <li class="prod-tab__item">Tương tự</li>
                        </ul>
                        <div class="prod-tab__contents">
                            <div class="prod-tab__content prod-tab__content--current">
                                <div class="row">
                                    <div class="col-8 col-xl-10 col-lg-12">
                                        <div class="text-content prod-tab__text-content">
                                            <h2>Lorem ipsum dolor sit amet.</h2>
                                            <p>
                                                <?php echo $desc; ?>
                                            </p>
                                            <h3>Lorem ipsum dolor sit amet.</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
                                                cupiditate. Modi, quidem, ullam sint dolorum recusandae voluptates
                                                dignissimos similique animi assumenda praesentium et! Illum dolorem est
                                                rem voluptas nam! Voluptatem.
                                            </p>
                                            <p>
                                                <img src="<?php echo $image; ?>" alt="" />
                                                <em>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</em>
                                            </p>
                                            <blockquote>
                                                <p>
                                                    Lorem ipsum dolor sit amet <em>consectetur</em>
                                                    <u>adipisicing</u> elit. Aliquid, cupiditate. Modi, quidem, ullam
                                                    sint dolorum recusandae voluptates dignissimos similique animi
                                                    assumenda praesentium et! Illum dolorem est rem voluptas nam!
                                                    Voluptatem.
                                                </p>
                                            </blockquote>
                                            <h3>Lorem ipsum dolor sit amet.</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
                                                cupiditate. Modi, quidem, ullam sint dolorum recusandae voluptates
                                                dignissimos similique animi assumenda praesentium et! Illum dolorem est
                                                rem voluptas nam! Voluptatem.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
                                                cupiditate. Modi, quidem, ullam sint dolorum recusandae voluptates
                                                dignissimos similique animi assumenda praesentium et! Illum dolorem est
                                                rem voluptas nam! Voluptatem.
                                            </p>

                                            <hr />

                                            <h2>Lorem ipsum dolor sit amet.</h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
                                                cupiditate. Modi, quidem, ullam sint dolorum recusandae voluptates
                                                dignissimos similique animi assumenda praesentium et! Illum dolorem est
                                                rem voluptas nam! Voluptatem.
                                            </p>
                                            <p>
                                                <img src="<?php echo $image; ?>" alt="" />
                                                <em>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</em>
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
                                                cupiditate. Modi, quidem, ullam sint dolorum recusandae voluptates
                                                dignissimos similique animi assumenda praesentium et! Illum dolorem est
                                                rem voluptas nam! Voluptatem.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
                                                cupiditate. Modi, quidem, ullam sint dolorum recusandae voluptates
                                                dignissimos similique animi assumenda praesentium et! Illum dolorem est
                                                rem voluptas nam! Voluptatem.
                                            </p>

                                            <hr />

                                            <h2>Lorem ipsum dolor sit amet.</h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
                                                cupiditate. Modi, quidem, ullam sint dolorum recusandae voluptates
                                                dignissimos similique animi assumenda praesentium et! Illum dolorem est
                                                rem voluptas nam! Voluptatem.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
                                                cupiditate. Modi, quidem, ullam sint dolorum recusandae voluptates
                                                dignissimos similique animi assumenda praesentium et! Illum dolorem est
                                                rem voluptas nam! Voluptatem.
                                            </p>
                                            <p>
                                                <img src="<?php echo $image; ?>" alt="" />
                                                <em>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</em>
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
                                                cupiditate. Modi, quidem, ullam sint dolorum recusandae voluptates
                                                dignissimos similique animi assumenda praesentium et! Illum dolorem est
                                                rem voluptas nam! Voluptatem.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="prod-tab__content">
                                <div class="prod-content">
                                    <h2 class="prod-content__heading">Bình Luận</h2>
                                    <div class="row row-cols-3 gx-lg-2 row-cols-md-1 gy-md-3">
                                        <!-- Lượt xem card 1 -->
                                        <div class="col">
                                            <div class="review-card">
                                                <div class="review-card__content">
                                                    <img
                                                        src="./assets/img/avatar/avatar-1.png"
                                                        alt=""
                                                        class="review-card__avatar"
                                                    />
                                                    <div class="review-card__info">
                                                        <h4 class="review-card__title">Jakir Hussen</h4>
                                                        <p class="review-card__desc">
                                                            Great product, I love this Coffee Beans
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-card__rating">
                                                    <div class="review-card__star-list">
                                                        <img
                                                            src="./assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star"
                                                        />
                                                        <img
                                                            src="./assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star"
                                                        />
                                                        <img
                                                            src="./assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star"
                                                        />
                                                        <img
                                                            src="./assets/icons/star-half.svg"
                                                            alt=""
                                                            class="review-card__star"
                                                        />
                                                        <img
                                                            src="./assets/icons/star-blank.svg"
                                                            alt=""
                                                            class="review-card__star"
                                                        />
                                                    </div>
                                                    <span class="review-card__rating-title">(3.5) Lượt xem</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Lượt xem card 2 -->
                                        <div class="col">
                                            <div class="review-card">
                                                <div class="review-card__content">
                                                    <img
                                                        src="./assets/img/avatar/avatar-2.png"
                                                        alt=""
                                                        class="review-card__avatar"
                                                    />
                                                    <div class="review-card__info">
                                                        <h4 class="review-card__title">Jubed Ahmed</h4>
                                                        <p class="review-card__desc">
                                                            Awesome Coffee, I love this Coffee Beans
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-card__rating">
                                                    <div class="review-card__star-list">
                                                        <img
                                                            src="./assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star"
                                                        />
                                                        <img
                                                            src="./assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star"
                                                        />
                                                        <img
                                                            src="./assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star"
                                                        />
                                                        <img
                                                            src="./assets/icons/star-half.svg"
                                                            alt=""
                                                            class="review-card__star"
                                                        />
                                                        <img
                                                            src="./assets/icons/star-blank.svg"
                                                            alt=""
                                                            class="review-card__star"
                                                        />
                                                    </div>
                                                    <span class="review-card__rating-title">(3.5) Lượt xem</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Lượt xem card 3 -->
                                        <div class="col">
                                            <div class="review-card">
                                                <div class="review-card__content">
                                                    <img
                                                        src="./assets/img/avatar/avatar-3.png"
                                                        alt=""
                                                        class="review-card__avatar"
                                                    />
                                                    <div class="review-card__info">
                                                        <h4 class="review-card__title">Delwar Hussain</h4>
                                                        <p class="review-card__desc">
                                                            Sản phẩm tuyệt vời, tôi thích Coffee Beans
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-card__rating">
                                                    <div class="review-card__star-list">
                                                        <img
                                                            src="./assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star"
                                                        />
                                                        <img
                                                            src="./assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star"
                                                        />
                                                        <img
                                                            src="./assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star"
                                                        />
                                                        <img
                                                            src="./assets/icons/star-half.svg"
                                                            alt=""
                                                            class="review-card__star"
                                                        />
                                                        <img
                                                            src="./assets/icons/star-blank.svg"
                                                            alt=""
                                                            class="review-card__star"
                                                        />
                                                    </div>
                                                    <span class="review-card__rating-title">(3.5) Lượt xem</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="prod-tab__content">
                                <div class="prod-content">
                                    <h2 class="prod-content__heading">Các mặt hàng tương tự bạn có thể thích</h2>
                                    <div
                                        class="row row-cols-6 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 g-2"
                                    >
                                        <!-- Product card 1 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div class="product-card__img-wrap">
                                                    <a href="./product-detail.html">
                                                        <img
                                                            src="<?php echo $image; ?>"
                                                            alt=""
                                                            class="product-card__thumb"
                                                        />
                                                    </a>
                                                    <button class="like-btn product-card__like-btn">
                                                        <img
                                                            src="./assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon"
                                                        />
                                                        <img
                                                            src="./assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked"
                                                        />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a href="./product-detail.html"
                                                        >Coffee Beans - Espresso Arabica and Robusta Beans</a
                                                    >
                                                </h3>
                                                <p class="product-card__brand">Lavazza</p>
                                                <div class="product-card__row">
                                                    <span class="product-card__price">47.000</span>
                                                    <img
                                                        src="./assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star"
                                                    />
                                                    <span class="product-card__score">4.3</span>
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Product card 2 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div class="product-card__img-wrap">
                                                    <a href="./product-detail.html">
                                                        <img
                                                            src="./assets/img/product/item-2.png"
                                                            alt=""
                                                            class="product-card__thumb"
                                                        />
                                                    </a>
                                                    <button class="like-btn product-card__like-btn">
                                                        <img
                                                            src="./assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon"
                                                        />
                                                        <img
                                                            src="./assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked"
                                                        />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a href="./product-detail.html"
                                                        >Lavazza Coffee Blends - Try the Italian Espresso</a
                                                    >
                                                </h3>
                                                <p class="product-card__brand">Lavazza</p>
                                                <div class="product-card__row">
                                                    <span class="product-card__price">53.000</span>
                                                    <img
                                                        src="./assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star"
                                                    />
                                                    <span class="product-card__score">3.4</span>
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Product card 3 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div class="product-card__img-wrap">
                                                    <a href="./product-detail.html">
                                                        <img
                                                            src="./assets/img/product/item-3.png"
                                                            alt=""
                                                            class="product-card__thumb"
                                                        />
                                                    </a>
                                                    <button class="like-btn like-btn--liked product-card__like-btn">
                                                        <img
                                                            src="./assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon"
                                                        />
                                                        <img
                                                            src="./assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked"
                                                        />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a href="./product-detail.html"
                                                        >Lavazza - Caffè Espresso Black Tin - Ground coffee</a
                                                    >
                                                </h3>
                                                <p class="product-card__brand">Welikecoffee</p>
                                                <div class="product-card__row">
                                                    <span class="product-card__price">99.990</span>
                                                    <img
                                                        src="./assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star"
                                                    />
                                                    <span class="product-card__score">5.0</span>
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Product card 4 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div class="product-card__img-wrap">
                                                    <a href="./product-detail.html">
                                                        <img
                                                            src="./assets/img/product/item-4.png"
                                                            alt=""
                                                            class="product-card__thumb"
                                                        />
                                                    </a>
                                                    <button class="like-btn product-card__like-btn">
                                                        <img
                                                            src="./assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon"
                                                        />
                                                        <img
                                                            src="./assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked"
                                                        />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a href="./product-detail.html"
                                                        >Qualità Oro Mountain Grown - Espresso Coffee Beans</a
                                                    >
                                                </h3>
                                                <p class="product-card__brand">Lavazza</p>
                                                <div class="product-card__row">
                                                    <span class="product-card__price">38.650</span>
                                                    <img
                                                        src="./assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star"
                                                    />
                                                    <span class="product-card__score">4.4</span>
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Product card 5 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div class="product-card__img-wrap">
                                                    <a href="./product-detail.html">
                                                        <img
                                                            src="<?php echo $image; ?>"
                                                            alt=""
                                                            class="product-card__thumb"
                                                        />
                                                    </a>
                                                    <button class="like-btn product-card__like-btn">
                                                        <img
                                                            src="./assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon"
                                                        />
                                                        <img
                                                            src="./assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked"
                                                        />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a href="./product-detail.html"
                                                        >Coffee Beans - Espresso Arabica and Robusta Beans</a
                                                    >
                                                </h3>
                                                <p class="product-card__brand">Lavazza</p>
                                                <div class="product-card__row">
                                                    <span class="product-card__price">47.000</span>
                                                    <img
                                                        src="./assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star"
                                                    />
                                                    <span class="product-card__score">4.3</span>
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Product card 6 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div class="product-card__img-wrap">
                                                    <a href="./product-detail.html">
                                                        <img
                                                            src="./assets/img/product/item-2.png"
                                                            alt=""
                                                            class="product-card__thumb"
                                                        />
                                                    </a>
                                                    <button class="like-btn product-card__like-btn">
                                                        <img
                                                            src="./assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon"
                                                        />
                                                        <img
                                                            src="./assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked"
                                                        />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a href="./product-detail.html"
                                                        >Lavazza Coffee Blends - Try the Italian Espresso</a
                                                    >
                                                </h3>
                                                <p class="product-card__brand">Lavazza</p>
                                                <div class="product-card__row">
                                                    <span class="product-card__price">53.000</span>
                                                    <img
                                                        src="./assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star"
                                                    />
                                                    <span class="product-card__score">3.4</span>
                                                </div>
                                            </article>
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
    </body>
</html>
