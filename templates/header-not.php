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
                <span class="nav-btn__title">Cart</span>
                <span class="nav-btn__qnt">3</span>
            </a>

            <a href="#!" class="nav-btn d-none d-md-flex">
                <img src="./assets/icons/heart.svg" alt="" class="nav-btn__icon icon" />
                <span class="nav-btn__title">Favorite</span>
                <span class="nav-btn__qnt">3</span>
            </a>


        </nav>
        <div class="navbar__overlay js-toggle" toggle-target="#navbar"></div>

        <!-- Actions -->
        <div class="top-act">
            <a href="./?act=signIn" class="btn btn--text d-md-none">Sign In</a>
            <a href="./?act=signUp" class="top-act__sign-up btn btn--primary">Sign Up</a>
        </div>
    </div>
</div>