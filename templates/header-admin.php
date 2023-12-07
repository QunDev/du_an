<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grocery Mart</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png" />
    <link rel="manifest" href="./assets/favicon/site.webmanifest" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Fonts -->
    <link rel="stylesheet" href="./assets/fonts/stylesheet.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="./assets/css/categories.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="./assets/js/scripts.js"></script>

</head>

<body>
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

        <ul class="navbar__list js-dropdown-list">
                <li class="navbar__item">
                    <a href="./?act=listCategories" class="navbar__link">
                        Danh mục
                        <img src="./assets/icons/arrow-down.svg" alt="" class="icon navbar__arrow" />
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="./?act=listProducts" class="navbar__link">
                        Sản phẩm
                        <img src="./assets/icons/arrow-down.svg" alt="" class="icon navbar__arrow" />
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="./?act=listUser" class="navbar__link">
                        User
                        <img src="./assets/icons/arrow-down.svg" alt="" class="icon navbar__arrow" />
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="./?act=order" class="navbar__link">
                        Quản lí đơn hàng
                        <img src="./assets/icons/arrow-down.svg" alt="" class="icon navbar__arrow" />
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="./?act=statistics" class="navbar__link">
                        Thống kê
                        <img src="./assets/icons/arrow-down.svg" alt="" class="icon navbar__arrow" />
                    </a>
                </li>
            </ul>
    </div>
</div>