<?php
session_start();

if ($_SESSION['is_auth'] = true) {
    header('location: http://localhost:8000');
}

$title = 'LOGIN | APLIKASI DAFTAR SISWA';
include('templates/header.php');

?>

<div class="main-content login-panel">
    <div class="login-body">
        <div class="top d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="assets/images/logo-black.png" alt="Logo">
            </div>
            <a href="/"><i class="fa-duotone fa-house-chimney"></i></a>
        </div>
        <div class="bottom">
            <h3 class="panel-title">Login</h3>
            <?php if (isset($_SESSION['message'])) : ?>
                <div class="alert alert-success text-center">
                    <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    ?>
                </div>
            <?php endif ?>
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger text-center">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php endif ?>
            <form action="/db/auth.php" method="POST">
                <div class="input-group mb-25">
                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="email address"
                        name="email"
                        value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : "" ?>">

                </div>
                <div class="input-group mb-20">
                    <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    <input
                        type="password"
                        class="form-control rounded-end"
                        placeholder="Password"
                        name="password"
                        value="<?= isset($_SESSION['password']) ? $_SESSION['password'] : "" ?>">

                    <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>
                </div>
                <div class="d-flex justify-content-between mb-25">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="loginCheckbox">
                        <label class="form-check-label text-white" for="loginCheckbox">
                            Remember Me
                        </label>
                    </div>
                </div>
                <button class="btn btn-primary w-100 login-btn" type="submit">Sign in</button>
                <div class="mt-2">Don't have an account? <a href="/register.php" class="text-white fs-14">Click Here!</a></div>
            </form>
        </div>
    </div>

    <!-- footer start -->
    <div class="footer">
        <p>Copyright© <script>
                document.write(new Date().getFullYear())
            </script> All Rights Reserved By <span class="text-primary">Digiboard</span></p>
    </div>
    <!-- footer end -->
</div>

<?php include('templates/footer.php') ?>