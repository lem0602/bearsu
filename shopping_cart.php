<?php session_start(); ?>
<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = 'cart'; // 頁面名稱
?>

<?php include __DIR__ . '/parts/shopping_cart_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>

<div class="container shopping_cart_wrap">
    <?php if (empty($_SESSION['cart'])) : ?>
        <div class="noitem d-flex justify-content-center align-items-center">
            <div class="noitem_wrap">
                <h1>購物車內沒有商品</h1>
                <img src="images/mascot_07.png" alt="">
            </div>
        </div>
    <?php else : ?>
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

                <?php
                $total = 0;
                foreach ($_SESSION['cart'] as $k => $v) :
                    $total += $v['price'];  // 計算總價格
                ?>
                    <div class="course_card d-flex align-items-center w-100" data-sid="<?= $k ?>">
                        <img src="images/course/<?= $v['img'] ?>.jpg" alt="">
                        <div class="d-md-flex w-100 justify-content-between align-items-center">
                        <a href="javascript:" onclick="removeItem(event)">
                            <i class="fa-solid fa-xmark d-md-none d-lg-none"></i></a>
                            <div class="tittle">
                                <h2><?= $v['name'] ?>
                                </h2>
                                <h4 class="d-none d-md-block d-lg-block">課程時間</h4>
                                <p><?= $v['date_1'] ?></p>
                            </div>
                            <div class="d-flex justify-content-between align-items-end d-md-block d-lg-block">
                                <h4 class="d-none d-md-block d-lg-block d-lg-block mb-0 mb-md-3">價格</h4>
                                <h4 class="mb-0 price" data-val="<?=$v['price']?>"></h4>
                                <i class="fa-solid fa-bookmark d-block d-md-none"></i>
                            </div>
                            <a href="javascript:" onclick="removeItem(event)">
                                <div class="btn d-none d-md-block d-lg-block">
                                    取消品項
                                </div>
                            </a>
                            <i class="fa-solid fa-bookmark d-none d-md-block d-lg-block"></i>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="col-12 total d-flex justify-content-center justify-content-md-end justify-content-lg-end align-items-center">
                <div class="line d-none d-md-block d-lg-block"></div>
                <h2 id="total-price"></h2>
            </div>
            <div class="col-12 btn_section d-flex justify-content-center">
                <a href="course.php" class="btn_left">繼續購物</a>
                <a href="shopping_pay_meyhod.php" class="btn_right">確認訂單</a>
            </div>
        </div>
    <?php endif ?>
</div>


<footer>
    <p>Copyright © 2022 BearSu. All rights reserved.</p>
</footer>

<?php include __DIR__ . '/parts/shopping_cart_scripts.php'; ?>

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