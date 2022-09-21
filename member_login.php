<?php session_start(); ?>
<?php include __DIR__ . '/parts/member_login_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-1 col-lg-1 d-none d-md-block d-lg-block">
        </div>

        <div class="col-md-3 col-lg-3 d-none d-md-block d-lg-block mascot h-100">
            <div class="mascot_wrap d-flex align-items-center justify-content-center h-100">
                <img src="images/mascot_left.gif" alt="">
            </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4 d-flex align-items-center">
            <div class="login_box w-100">
                <h1>登入</h1>
                <div class="input_box">
                    <div class="email_box d-flex">
                        <h4>Email</h4>
                        <input type="text">
                    </div>
                    <div class="password_box d-flex">
                        <h4>密碼</h4>
                        <input type="password">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="login_btn">登入</button>
                </div>
                <div class="register_wrap d-flex justify-content-center">
                    <p>還不是會員嗎？</p> <a href="member_register.php">立即註冊</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-lg-3 d-none d-md-block d-lg-block mascot h-100">
            <div class="mascot_wrap d-flex align-items-center justify-content-center h-100">
                <img src="images/mascot_right.gif" alt="">
            </div>
        </div>

        <div class="col-md-1 col-lg-1 d-none d-md-block d-lg-block">
        </div>
    </div>
</div>

<footer>
    <p>Copyright © 2022 BearSu. All rights reserved.</p>
</footer>

<?php include __DIR__ . '/parts/member_login_scripts.php'; ?>

<?php include __DIR__ . '/parts/foot.php'; ?>