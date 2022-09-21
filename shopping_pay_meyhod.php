<?php session_start(); ?>
<?php include __DIR__ . '/parts/shopping_pay_meyhod_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>

<div class="container shopping_pay_meyhod_wrap">
    <div class="row shopping_cart">
        <div class="col-12 step_wrap">
            <div class="step d-md-flex d-lg-flex justify-content-between align-items-center d-none">
                <h1 class="">STEP 1.確認訂單資訊</h1>
                <div class="line"></div>
                <h1 class="active">STEP 2.選擇付款方式</h1>
                <div class="line"></div>
                <h1 class="">STEP 3.確認結帳</h1>
            </div>
            <div class="mobile_step d-block d-md-none d-lg-none d-flex justify-content-between">
                <div class="step1 d-flex flex-column align-items-center">
                    <h1 class="">1</h1>
                    <p>訂單資訊</p>
                </div>
                <div class="step2 d-flex flex-column align-items-center">
                    <h1 class="active">2</h1>
                    <p>選擇付款方式</p>
                </div>
                <div class="step3 d-flex flex-column align-items-center">
                    <h1>3</h1>
                    <p>確認結帳</p>
                </div>
            </div>
            <div class="course_card d-flex align-items-center w-100">
                <img src="images/course_01.jpg" alt="">
                <div class="info d-md-flex d-lg-flex justify-content-between w-100 align-items-center">
                    <div class="tittle">
                        <h2>地瓜餅 (奶素)</h2>
                        <h4 class="d-none d-md-block d-lg-block">課程時間</h4>
                        <p>10月21日(五) 19:00-21:00</p>
                    </div>
                    <div class="price">
                        <h4 class="d-none d-md-block d-lg-block d-lg-block mb-0 mb-md-3">價格</h4>
                        <h4 class="mb-0">$1,200</h4>
                    </div>
                </div>
            </div>

            <div class="course_card d-flex align-items-center w-100">
                <img src="images/course_01.jpg" alt="">
                <div class="info d-md-flex d-lg-flex justify-content-between w-100 align-items-center">
                    <div class="tittle">
                        <h2>地瓜餅 (奶素)</h2>
                        <h4 class="d-none d-md-block d-lg-block">課程時間</h4>
                        <p>10月21日(五) 19:00-21:00</p>
                    </div>
                    <div class="price">
                        <h4 class="d-none d-md-block d-lg-block d-lg-block mb-0 mb-md-3">價格</h4>
                        <h4 class="mb-0">$1,200</h4>
                    </div>
                </div>
            </div>

            <div class="course_card d-flex align-items-center w-100">
                <img src="images/course_01.jpg" alt="">
                <div class="info d-md-flex d-lg-flex justify-content-between w-100 align-items-center">
                    <div class="tittle">
                        <h2>地瓜餅 (奶素)</h2>
                        <h4 class="d-none d-md-block d-lg-block">課程時間</h4>
                        <p>10月21日(五) 19:00-21:00</p>
                    </div>
                    <div class="price">
                        <h4 class="d-none d-md-block d-lg-block d-lg-block mb-0 mb-md-3">價格</h4>
                        <h4 class="mb-0">$1,200</h4>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 total d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center">
            <div class="line d-none d-md-block d-lg-block"></div>
            <h2>訂單總計 $3,600</h2>
        </div>
        <div class="col-12 d-md-flex d-lg-flex order_man_card  align-items-center p-0">
            <div class="left d-flex justify-content-center align-items-center">
                <h2>訂購人</h2>
            </div>
            <div class="right d-flex justify-content-center align-items-center">
                <div class="list_tittle text-right">
                    <h4>姓名</h4>
                    <h4>聯絡電話</h4>
                    <h4 class="mb-0">Email</h4>
                </div>
                <div class="list_info">
                    <h4>自動填入會員姓名</h4>
                    <h4>自動填入會員電話號碼</h4>
                    <h4 class="mb-0">自動填入會員Email</h4>
                </div>
            </div>
        </div>
        <div class="col-12 d-md-flex d-lg-flex pay_method_card align-items-center p-0">
            <div class="left d-flex justify-content-center align-items-center">
                <h2>付款方式</h2>
            </div>
            <div class="right d-flex justify-content-center align-items-center">
                <div class="right_wrap">
                    <input type="radio" name="pay" class="radio" id="card">
                    <label for="card">信用卡一次付清</label><br>
                    <input type="radio" name="pay" class="radio" id="atm">
                    <label for="atm">ATM轉帳</label><br>
                    <input type="radio" name="pay" class="radio" id="market">
                    <label for="market" class="mb-0">超商代碼繳費</label>
                </div>
            </div>
        </div>
        <div class="col-12 btn_section d-flex justify-content-center">
            <a href="shopping_cart.php" class="btn_left">回到上一步</a>
            <a href="shopping_credit_card.php" class="btn_right">確認付款</a>
        </div>
    </div>
</div>

<footer>
    <p>Copyright © 2022 BearSu. All rights reserved.</p>
</footer>

<?php include __DIR__ . '/parts/shopping_pay_meyhod_scripts.php'; ?>

<?php include __DIR__ . '/parts/foot.php'; ?>