<?php session_start(); ?>
<?php include __DIR__ . '/parts/shopping_cart_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>

<div class="container shopping_cart_wrap">
    <div class="row shopping_cart">
        <div class="col-12 step_wrap">
            <div class="step d-md-flex d-lg-flex justify-content-between align-items-center d-none">
                <h1 class="active">STEP 1.確認訂單資訊</h1>
                <div class="line"></div>
                <h1 class="">STEP 2.選擇付款方式</h1>
                <div class="line"></div>
                <h1 class="">STEP 3.確認結帳</h1>
            </div>
            <div class="mobile_step d-block d-md-none d-lg-none d-flex justify-content-between">
                <div class="step1 d-flex flex-column align-items-center">
                    <h1 class="active">1</h1>
                    <p>訂單資訊</p>
                </div>
                <div class="step2 d-flex flex-column align-items-center">
                    <h1>2</h1>
                    <p>選擇付款方式</p>
                </div>
                <div class="step3 d-flex flex-column align-items-center">
                    <h1>3</h1>
                    <p>確認結帳</p>
                </div>
            </div>
            <div class="course_card d-flex align-items-center w-100">
                <img src="images/course_01.jpg" alt="">
                <div class="d-md-flex w-100 justify-content-between align-items-center">
                    <i class="fa-solid fa-xmark d-md-none d-lg-none"></i>
                    <div class="tittle">
                        <h2>地瓜餅 (奶素)</h2>
                        <h4 class="d-none d-md-block d-lg-block">課程時間</h4>
                        <p>10月21日(五) 19:00-21:00</p>
                    </div>
                    <div class="price d-flex justify-content-between align-items-end d-md-block d-lg-block">
                        <h4 class="d-none d-md-block d-lg-block d-lg-block mb-0 mb-md-3">價格</h4>
                        <h4 class="mb-0">$1,200</h4>
                        <i class="fa-solid fa-bookmark d-block d-md-none"></i>
                    </div>
                    <div class="btn d-none d-md-block d-lg-block">
                        取消品項
                    </div>
                    <i class="fa-solid fa-bookmark d-none d-md-block d-lg-block"></i>
                </div>
            </div>

            <div class="course_card d-flex align-items-center w-100">
                <img src="images/course_01.jpg" alt="">
                <div class="d-md-flex w-100 justify-content-between align-items-center">
                    <i class="fa-solid fa-xmark d-md-none d-lg-none"></i>
                    <div class="tittle">
                        <h2>地瓜餅 (奶素)</h2>
                        <h4 class="d-none d-md-block d-lg-block">課程時間</h4>
                        <p>10月21日(五) 19:00-21:00</p>
                    </div>
                    <div class="price d-flex justify-content-between align-items-end d-md-block d-lg-block">
                        <h4 class="d-none d-md-block d-lg-block d-lg-block mb-0 mb-md-3">價格</h4>
                        <h4 class="mb-0">$1,200</h4>
                        <i class="fa-solid fa-bookmark d-block d-md-none"></i>
                    </div>
                    <div class="btn d-none d-md-block d-lg-block">
                        取消品項
                    </div>
                    <i class="fa-solid fa-bookmark d-none d-md-block d-lg-block"></i>
                </div>
            </div>

            <div class="course_card d-flex align-items-center w-100">
                <img src="images/course_01.jpg" alt="">
                <div class="d-md-flex w-100 justify-content-between align-items-center">
                    <i class="fa-solid fa-xmark d-md-none d-lg-none"></i>
                    <div class="tittle">
                        <h2>地瓜餅 (奶素)</h2>
                        <h4 class="d-none d-md-block d-lg-block">課程時間</h4>
                        <p>10月21日(五) 19:00-21:00</p>
                    </div>
                    <div class="price d-flex justify-content-between align-items-end d-md-block d-lg-block">
                        <h4 class="d-none d-md-block d-lg-block d-lg-block mb-0 mb-md-3">價格</h4>
                        <h4 class="mb-0">$1,200</h4>
                        <i class="fa-solid fa-bookmark d-block d-md-none"></i>
                    </div>
                    <div class="btn d-none d-md-block d-lg-block">
                        取消品項
                    </div>
                    <i class="fa-solid fa-bookmark d-none d-md-block d-lg-block"></i>
                </div>
            </div>

        </div>
        <div class="col-12 total d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center">
            <div class="line d-none d-md-block d-lg-block"></div>
            <h2>訂單總計 $3,600</h2>
        </div>
        <div class="col-12 btn_section d-flex justify-content-center">
            <a href="course.php" class="btn_left">繼續購物</a>
            <a href="shopping_pay_meyhod.php" class="btn_right">確認訂單</a>
        </div>
    </div>
</div>

<footer>
    <p>Copyright © 2022 BearSu. All rights reserved.</p>
</footer>

<?php include __DIR__ . '/parts/shopping_cart_scripts.php'; ?>

<?php include __DIR__ . '/parts/foot.php'; ?>