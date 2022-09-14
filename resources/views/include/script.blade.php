<script>
    /* Login Form */
    $('.back-to-login').on('click', function (e) {
        $(".user-form-login").toggleClass("login-active");
        $(".user-form-forgot").removeClass("forgot-active");
        $(".user-form-signup,.login-inner").removeClass("signup-active");
        $(".user-registered").removeClass("registered-active");
        $(".use-logined").removeClass("logined-active");
        $(".use-forgoted").removeClass("forgoted-active");
        e.preventDefault();
    });
    $(".forgotpass-link").on('click', function (e) {
        $(".user-form-forgot").toggleClass("forgot-active");
        $(".user-form-login").removeClass("login-active");
        $(".user-form-signup,.login-inner").removeClass("signup-active");
        $(".user-registered").removeClass("registered-active");
        $(".use-logined").removeClass("logined-active");
        $(".use-forgoted").removeClass("forgoted-active");
        e.preventDefault();
    });
    $(".signup-link").on('click', function (e) {
        $(".user-form-signup,.login-inner").toggleClass("signup-active");
        $(".user-form-login").removeClass("login-active");
        $(".user-form-forgot").removeClass("forgot-active");
        $(".user-registered").removeClass("registered-active");
        $(".use-logined").removeClass("logined-active");
        $(".use-forgoted").removeClass("forgoted-active");
        e.preventDefault();
    });
    $(".register-link").on('click', function (e) {
        $(".user-registered").toggleClass("registered-active");
        $(".check").toggleClass("checked");
        $(".use-forgoted .check").removeClass("checked");
        $(".user-form-login").removeClass("login-active");
        $(".user-form-forgot").removeClass("forgot-active");
        $(".user-form-signup,.login-inner").removeClass("signup-active");
        $(".use-logined").removeClass("logined-active");
        $(".use-forgoted").removeClass("forgoted-active");
        e.preventDefault();
    });
    $(".signin-link").on('click', function (e) {
        $(".use-logined").toggleClass("logined-active");
        $(".user-form-login").removeClass("login-active");
        $(".user-form-forgot").removeClass("forgot-active");
        $(".user-registered").removeClass("registered-active");
        $(".use-forgoted").removeClass("forgoted-active");
        e.preventDefault();
    });
    $(".forgoted-link").on('click', function (e) {
        $(".use-forgoted").toggleClass("forgoted-active");
        $(".check").toggleClass("checked");
        $(".user-registered .check").removeClass("checked");
        $(".user-form-login").removeClass("login-active");
        $(".user-form-forgot").removeClass("forgot-active");
        $(".user-registered").removeClass("registered-active");
        e.preventDefault();
    });
</script>