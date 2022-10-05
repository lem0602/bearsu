<?php
require __DIR__ . '/parts/connect_db.php';
// $sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
// $sql = "SELECT * FROM course WHERE sid=$sid";

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$sql = "SELECT s.*, v.classification FROM course s
JOIN vegetarian v ON s.vegetarian_sid=v.sid
WHERE s.sid=$sid";

$r = $pdo->query($sql)->fetch();

// $veges = $pdo->query("SELECT * FROM `vegetarian`")->fetchAll();
// $veges_ar = [];
// foreach($veges as $v){
//     $veges_ar[$v['sid']] = $v['classification'];
// }

$veges = $pdo->query("SELECT * FROM `vegetarian`")->fetchAll();
?>

<?php include __DIR__ . '/parts/course_detail_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>

<div class="container">
    <div class="row course_innerwrap">
        <div class="col-12 col-md-9 col-lg-9 course_cards order-1 order-md-0 order-lg-0">
            <img src="images/course/<?= $r['img'] ?>.jpg" alt="" class="course_recipe_pic">
            <h3><?= $r['introduction'] ?>
            </h3>
            <div class="classroom d-md-flex d-lg-flex justify-content-between">
                <img src="images/course/course_00_0<?php echo rand("1","4");?>.jpg" alt="">
                <img src="images/course/course_00_0<?php echo rand("5","8");?>.jpg" alt="">
            </div>
            <p>注意事項: <br>
                1.因教室空間有限，並有爐火、刀具等需謹慎操作之用品，為安全起見，僅開放給報名學員進場。<br>
                2.參與本活動時，視同同意公開展示本人之肖像，得使用於本活動之相關網路社群貼文使用。”熊齋”有權保存該照片、資料或影片作為系統資料存檔，僅作為內部結案與簡報使用。<br>
                3.參與本活動時，視為同意接受本活動所有內容及細則之規範；倘有違反本活動相關注意規範，並對於任何破壞本活動之行為保留法律追訴權。<br>
                4.本活動主辦單位保留擴大、修改、取消、終止本活動以及更改活動內容的權利，無法做出個別通知或解釋，僅於合理時間內盡速公布相關訊息於本活動網站，活動參加者需接受上列之規定，方可參加此活動，其他未盡事宜悉依主辦單位相關規定或解釋，並得隨時補充公告於活動網站。<br>

                開課日前八天取消 ► 可全額退費或保留費用六十天內使用（自完成訂單日起計）。<br>
                開課日前七天至前四天內取消 ►
                退還當次課程報名費用之80%，且就”熊齋”原先為準備課程所需食材之購買費用，因取消而產生食材浪費，故尚需另外收取課程原價30%食材購買費用，並於退費時一併扣除。<br>
                開課日前三天至課程當日取消 ► 恕不接受退費或保留費用。<br>

                例： 8/8（週六）的課程，最晚於7/31（週五）可全額退費或保留費用。<br>
                8/8（週六）的課程，8/1（週六）的18:00前來電告知取消，退還當次課程報名費用之80%，並另收取課程原價30%食材購買費用。<br>
                8/8（週六）的課程，若於8/5（週三）的18:00來電或來信告知欲取消，恕不接受退費或保留費用。<br>

                * 若因學員個人因素取消課程，退費部分之跨行手續費需由學員自行負擔。<br>
                * 若”熊齋”因不可抗力之因素取消課程，將全額退費或保留費用（自完成訂單日起計六十天內使用），跨行手續費將由”熊齋”負擔。</p>
        </div>

        <div class="col-12 col-md-3 col-lg-3 course_menu_wrap order-0 order-md-1 order-lg-1 mb-4 mb-md-0 mb-lg-0 px-0 pl-md-3 pl-lg-3">
            <div class="course_menu">
                <div class="course_menu_tittle d-flex justify-content-between">
                    <h2><?= $r['name'] ?> (<?= $r['classification'] ?>)</h2>
                    <i class="fa-regular fa-bookmark"></i>
                </div>

                <div class="solarterms_card d-flex justify-content-center">
                    <img src="images/solarterms_card_<?= $r['solarterm_sid'] - 5 ?>.png" alt="" class="m-auto">
                </div>

                <!-- <select class="date_filter">
                        <option>選擇課程日期</option>
                        <option><?= $r['date_1'] ?></option>
                        <option><?= $r['date_2'] ?></option>
                    </select> -->

                <div class="course_menu_date">
                    <p class="date">課程日期</p>
                    <p class="number"><?= $r['date_1'] ?></p>
                </div>

                <div class="course_menu_people d-flex justify-content-between">
                    <p>剩餘人數</p>
                    <p class="number"><?= $r['qty'] ?>人</p>
                </div>

                <div class="course_menu_price d-flex justify-content-between">
                    <p>課程價格</p>
                    <p class="number">$<?= number_format($r['price']) ?></p>
                </div>

                <div class="d-flex justify-content-center">
                    <button class="btn" data-sid="<?= $r['sid'] ?>" onclick="addToCart(event)">
                        加入購物車
                    </button>
                </div>

                <div class="course_menu_pic d-flex justify-content-center">
                    <img src="images/mascot_02.gif" alt="">
                </div>

            </div>
        </div>

        <!-- Button trigger modal -->
        <button data-toggle="modal" data-target="#exampleModalCenter" id="modalBtn" hidden></button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="sucess_card">
                        <div class="modal-body">
                            <h1>已加入購物車</h1>
                            <div class="img_wrap d-flex justify-content-center">
                                <img src="images/mascot_11.gif" alt="">
                            </div>
                            <div class="btn_wrap  d-flex justify-content-center">
                                <a href="#" class="btn" data-dismiss="modal">關閉</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<footer>
    <p>Copyright © 2022 BearSu. All rights reserved.</p>
</footer>

<?php include __DIR__ . '/parts/course_detail_scripts.php'; ?>
<script>
    function addToCart(event) {
        const btn = $(event.currentTarget);
        const qty = 1;
        const sid = btn.attr('data-sid');

        console.log({
            sid,
            qty
        });

        $.get(
            'handle_cart.php', {
                sid,
                qty
            },
            function(data) {
                console.log(data);
                // alert('已加入購物車');
                document.querySelector('#modalBtn').click();
            },
            'json');

        // $.get(
        //     'handle_cart.php',
        //     {sid}, 
        //     function(data){
        //         console.log(data);
        //         showCartCount(data);
        //     },
        //     'json');
    }
</script>
<?php include __DIR__ . '/parts/foot.php'; ?>