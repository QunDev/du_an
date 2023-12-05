<body>
        <main class="auth">
            <!-- Auth intro -->
            <div class="auth__intro">
                <a href="./" class="logo auth__intro-logo d-none d-md-flex">
                    <img src="./assets/icons/logo.svg" alt="grocerymart" class="logo__img" />
                    <h1 class="logo__title">grocerymart</h1>
                </a>
                <img src="./assets/img/auth/intro.svg" alt="" class="auth__intro-img" />
                <p class="auth__intro-text">
                sản phẩm chất lượng cao và dịch vụ sáng tạo
                </p>
                <button class="auth__intro-next d-none d-md-flex js-toggle" toggle-target="#auth-content">
                    <img src="./assets/img/auth/intro-arrow.svg" alt="" />
                </button>
            </div>

            <!-- Auth content -->
            <div id="auth-content" class="auth__content hide">
                <div class="auth__content-inner">
                    <a href="./" class="logo">
                        <img src="./assets/icons/logo.svg" alt="grocerymart" class="logo__img" />
                        <h1 class="logo__title">grocerymart</h1>
                    </a>
                    <h1 class="auth__heading">Đăng Nhập</h1>
                    <p class="auth__desc">Hãy tạo tài khoản và cùng nhau trải nghiệm mua sắm thôi.</p>
                    <form action="./?act=checkSignUp" class="form auth__form" method="post">
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    placeholder="Email"
                                    class="form__input"
                                    autofocus
                                    required
                                />
                                <img src="./assets/icons/message.svg" alt="" class="form__input-icon" />
                                <img src="./assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Email không đúng</p>
                        </div>
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    placeholder="Password"
                                    class="form__input"
                                    required
                                    minlength="6"
                                />
                                <img src="./assets/icons/lock.svg" alt="" class="form__input-icon" />
                                <img src="./assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Mật khẩu phải có ít nhất 6 ký tự</p>
                        </div>
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    placeholder="Confirm password"
                                    class="form__input"
                                    required
                                    minlength="6"
                                />
                                <img src="./assets/icons/lock.svg" alt="" class="form__input-icon" />
                                <img src="./assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Mật khẩu phải có ít nhất 6 ký tự</p>
                        </div>
                        <div class="form__group form__group--inline">
                            <label class="form__checkbox">
                                <input type="checkbox" name="checkbox" id="checkbox" class="form__checkbox-input d-none" />
                                <span class="form__checkbox-label">Nhớ mật khẩu </span>
                            </label>
                        </div>
                        <div class="form__group auth__btn-group">
                            <button class="btn btn--primary auth__btn form__submit-btn">Đăng Nhập</button>
                            <button class="btn btn--outline auth__btn btn--no-margin">
                                <img src="./assets/icons/google.svg" alt="" class="btn__icon icon" />
                                Đăng nhập với Google
                            </button>
                        </div>
                    </form>

                    <p class="auth__text">
                        Bạn có tải khoản ?
                        <a href="./?act=signIn" class="auth__link auth__text-link">Đăng kí</a>
                    </p>
                </div>
            </div>
        </main>
        <script>
            window.dispatchEvent(new Event("template-loaded"));
        </script>
    </body>
</html>