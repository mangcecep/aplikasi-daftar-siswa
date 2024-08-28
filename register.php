<?php include('templates/header.php') ?>

<div class="main-content login-panel">
    <div class="login-body">
        <div class="top d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="assets/images/logo-black.png" alt="Logo">
            </div>
            <a href="/"><i class="fa-duotone fa-house-chimney"></i></a>
        </div>
        <div class="bottom">
            <h3 class="panel-title">Registration</h3>
            <form>
                <div class="input-group mb-25">
                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Full Name">
                </div>
                <div class="input-group mb-25">
                    <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="input-group mb-20">
                    <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    <input type="password" class="form-control rounded-end" placeholder="Password">
                    <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>
                </div>
                <div class="d-flex justify-content-between mb-25">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="loginCheckbox">
                        <label class="form-check-label text-white" for="loginCheckbox">
                            I agree <a href="#" class="text-white text-decoration-underline">Terms & Policy</a>
                        </label>
                    </div>
                </div>
                <button class="btn btn-primary w-100 login-btn">Sign up</button>
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