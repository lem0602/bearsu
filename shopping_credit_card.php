<?php session_start(); ?>
<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = 'cart'; // 頁面名稱
?>

<?php include __DIR__ . '/parts/shopping_credit_card_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>

<div class="container shopping_credit_card_wrap">
    <div class="row shopping_cart">
        <div class="col-12 step_wrap">
            <div class="step d-md-flex d-lg-flex justify-content-between align-items-center d-none">
                <h1 class="">STEP 1.確認訂單資訊</h1>
                <div class="line"></div>
                <h1 class="">STEP 2.選擇付款方式</h1>
                <div class="line"></div>
                <h1 class="active">STEP 3.確認結帳</h1>
            </div>
            <div class="mobile_step d-block d-md-none d-lg-none d-flex justify-content-between">
                <div class="step1 d-flex flex-column align-items-center">
                    <h1 class="">1</h1>
                    <p>訂單資訊</p>
                </div>
                <div class="step2 d-flex flex-column align-items-center">
                    <h1 class="">2</h1>
                    <p>選擇付款方式</p>
                </div>
                <div class="step3 d-flex flex-column align-items-center">
                    <h1 class="active">3</h1>
                    <p>確認結帳</p>
                </div>
            </div>

            <?php
            $total = 0;
            foreach ($_SESSION['cart'] as $k => $v) :
                $total += $v['price'];  // 計算總價格
            ?>
                <div class="course_card d-flex align-items-center w-100">
                    <img src="images/course/<?= $v['img'] ?>.jpg" alt="">
                    <div class="info d-md-flex d-lg-flex justify-content-between w-100 align-items-center">
                        <div class="tittle">
                            <h2><?= $v['name'] ?></h2>
                            <h4 class="d-none d-md-block d-lg-block">課程時間</h4>
                            <p><?= $v['date_1'] ?></p>
                        </div>
                        <div>
                            <h4 class="d-none d-md-block d-lg-block d-lg-block mb-0 mb-md-3">價格</h4>
                            <h4 class="mb-0 price" data-val="<?= $v['price'] ?>"></h4>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        <div class="col-12 total d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center">
            <div class="line d-none d-md-block d-lg-block"></div>
            <h2 id="total-price"></h2>
        </div>
        <div class="col-12 order_man_card">
            <div class="order_man_card_wrap d-md-flex d-lg-flex align-items-center">
                <div class="left d-flex justify-content-center align-items-center">
                    <h2>訂購人</h2>
                </div>
                <div class="right d-flex justify-content-center align-items-center">
                    <div class="list_tittle text-right">
                        <h4>姓名</h4>
                        <h4>聯絡電話</h4>
                        <h4 class="mb-0">Email</h4>
                    </div>
                    <?php 
                    $sql= sprintf("SELECT * FROM `members` WHERE `sid`='%s'", $_SESSION['user']['id']);
                    $r = $pdo->query($sql)->fetch();
                    ?>
                    <div class="list_info">
                        <h4><?= $r['name'] ?></h4>
                        <h4><?= $r['mobile'] ?></h4>
                        <h4 class="mb-0"><?= $r['email'] ?></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="creadit_card_tittle d-flex justify-content-center w-100">
            <h1>信用卡一次付清</h1>
        </div>

        <div class="col-12 creadit_card_info">
            <div class="creadit_card_info_wrap">
                <div class="card_input_wrap d-flex flex-column align-items-center">
                    <div class="card_input">
                        <div class="card_number">
                            <label for="card_number" class="mb-0">
                                <h3>信用卡卡號</h3>
                            </label><br>
                            <div class="input_wrap d-flex align-items-center w-100">
                                <input type="text" maxlength="4" name="card_number_1" id="card_number_1" class="autotab">
                                <i class="fa-solid fa-minus"></i>
                                <input type="text" maxlength="4" name="card_number_2" id="card_number_2" class="autotab">
                                <i class="fa-solid fa-minus"></i>
                                <input type="text" maxlength="4" name="card_number_3" id="card_number_3" class="autotab">
                                <i class="fa-solid fa-minus"></i>
                                <input type="text" maxlength="4" name="card_number_4" id="card_number_4" class="autotab">
                            </div>
                        </div>
                        <div class="effective_date">
                            <h3>有效月/年</h3>
                            <div class="filter_section d-flex align-items-center">
                                <select name="month" id="month">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                <h3 class="mb-0 mr-3">月</h3>
                                <select name="year" id="year">
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                    <option value="2032">2032</option>
                                    <option value="2033">2033</option>
                                    <option value="2034">2034</option>
                                    <option value="2035">2035</option>
                                    <option value="2036">2036</option>
                                </select>
                                <h3 class="mb-0">年</h3>
                            </div>
                        </div>
                        <div class="last_number">
                            <h3>背面末三碼</h3>
                            <input type="text" id="last_number" size="4" maxlength="3" name="last_number">
                        </div>
                    </div>
                </div>
                <div class="camera_wrap d-flex justify-content-center">
                    <div class="camera">
                        <div class="card_wrap">
                            <div class="card_front card">
                                <img src="images/mascot_03.png" alt="">
                                <div class="auto_card_numbe_wrap">
                                    <input id="auto_card_number_1" maxlength="3" type="text" />
                                    <input id="auto_card_number_2" maxlength="3" type="text" />
                                    <input id="auto_card_number_3" maxlength="3" type="text" />
                                    <input id="auto_card_number_4" maxlength="3" type="text" />
                                </div>
                                <div class="auto_effective_date_wrap">
                                    <input id="auto_month" type="text" />
                                    <input id="auto_year" type="text" />
                                </div>
                            </div>
                            <div class="card_back card">
                                <img src="images/mascot_08.png" alt="" class="">
                                <div class="auto_last_number_wrap">
                                    <input id="auto_last_number" type="text" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 btn_section d-flex justify-content-center">
            <a href="shopping_pay_meyhod.php" class="btn_left">回到上一步</a>
            <a href="shopping_load.php" class="btn_right">確認結帳</a>
        </div>
    </div>
</div>

<footer>
    <p>Copyright © 2022 BearSu. All rights reserved.</p>
</footer>

<?php include __DIR__ . '/parts/shopping_credit_card_scripts.php'; ?>
<script>
    const dollarCommas = function(n) {
        return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

    function removeItem(event) {
        const tr = $(event.currentTarget).parents('.course_card');
        const sid = tr.attr('data-sid');

        $.get(
            'handle_cart.php', {
                sid
            },
            function(data) {
                console.log(data);
                // showCartCount(data); // 總數量
                tr.remove();

                // TODO: 總計, 
                updatePrices();
            },
            'json');
    }

    function updateItem(event) {
        const sid = $(event.currentTarget).closest('tr').attr('data-sid');
        const qty = $(event.currentTarget).val();

        $.get(
            'handle_cart.php', {
                sid,
                qty
            },
            function(data) {
                console.log(data);
                // showCartCount(data); // 總數量
                // TODO: 更新小計, 總計
                updatePrices();
            },
            'json');
    }

    function updatePrices() {
        let total = 0; // 總價

        $('.course_card').each(function() {
            const tr = $(this);
            const td_price = tr.find('.price');

            const price = +td_price.attr('data-val');
            const qty = 1;

            td_price.html('$ ' + dollarCommas(price));
            // td_sub.html('$ ' + dollarCommas(price * qty));
            total += price * qty;

        });
        $('#total-price').html('訂單總計 $' + dollarCommas(total));


    }
    updatePrices(); // 一進頁面就要執行一次
</script>

<?php include __DIR__ . '/parts/foot.php'; ?>