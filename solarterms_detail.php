<?php session_start(); ?>
<?php
require __DIR__ . '/parts/connect_db.php';
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$sql = "SELECT s.*, v.classification FROM solarterms_recipe s
JOIN vegetarian v ON s.vegetarian_sid=v.sid
WHERE s.sid=$sid";

$r = $pdo->query($sql)->fetch();

/*
$veges = $pdo->query("SELECT * FROM `vegetarian`")->fetchAll();
$veges_ar = [];
foreach($veges as $v){
    $veges_ar[$v['sid']] = $v['classification'];
}
*/
?>

<?php include __DIR__ . '/parts/solarterms_detail_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>


    <div class="container">
        <div class="row mx-0">
            <div class="col-12 recipe_title">
                <div class="top d-md-flex d-lg-flex justify-content-between">
                    <div class="left">
                        <h1><?= $r['recipe_name'] ?> (<?= $r['classification'] ?>)</h1>
                        <img src="images/solarterms/<?= $r['img'] ?>.jpg" alt="">
                    </div>
                    <div class="right text-center">
                        <i class="fa-regular fa-bookmark d-none d-md-block d-lg-block"></i><br>
                        <img src="images/solarterms_card_<?= $r['solarterm_sid'] - 5 ?>.png" alt="">
                    </div>
                </div>
                <div class="down">
                    <h2><?= $r['introduction'] ?></h2>
                </div>
            </div>
            <div class="col-12 recipe_info">
                <div class="top d-flex">
                    <div class="col-6 left text-center">
                        <h3>份量</h3>
                        <h3><?= $r['quantity'] ?> 人份</h3>
                    </div>
                    <div class="col-6 right text-center ">
                        <h3>時間</h3>
                        <h3><?= $r['time'] ?> 分鐘</h3>
                    </div>
                </div>
                <div class="middle">
                    <h3>食材</h3>
                </div>
                <div class="down w-100 d-md-flex d-lg-flex">
                    <div class="d-flex justify-content-between col-12 col-md-6 col-lg-6 ingredients">
                        <h4>青花椰菜</h4>
                        <h4>1顆</h4>
                    </div>
                    <div class="d-flex justify-content-between col-12 col-md-6 col-lg-6 ingredients">
                        <h4>白花椰菜</h4>
                        <h4>半顆</h4>
                    </div>
                    <div class="d-flex justify-content-between col-12 col-md-6 col-lg-6 ingredients">
                        <h4>白花椰菜</h4>
                        <h4>半顆</h4>
                    </div>
                    <div class="d-flex justify-content-between col-12 col-md-6 col-lg-6 ingredients">
                        <h4>白花椰菜</h4>
                        <h4>半顆</h4>
                    </div>
                    <div class="d-flex justify-content-between col-12 col-md-6 col-lg-6 ingredients">
                        <h4>白花椰菜</h4>
                        <h4>半顆</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 recipe_list">
                <div class="recipe_list_wrap d-md-flex d-lg-flex">
                    <div class="left">
                        <img src="images/solarterms/solarterms_01_01.jpg" alt="">
                    </div>
                    <div class="right">
                        <h1>1</h1>
                        <h3>雙花菜洗淨，切成適當大小備用。</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 message_card">
                <h2>留言</h2>
                <div class="message_card_innrwrap d-md-flex d-lg-flex align-items-center">
                    <div class="mug_shot d-flex flex-column align-items-center">
                        <img src="images/mug_shot_01.png" alt="">
                    </div>
                    <div class="input_section w-100">
                        <textarea name="" id="" class="w-100" placeholder="加入討論 (最多可輸入 100 字)"></textarea>
                    </div>
                </div>
                <div class="btn_section d-flex justify-content-center justify-content-md-end justify-content-lg-end">
                    <button type="submit">發表留言</button>
                </div>
            </div>
        </div>
    </div>


<footer>
    <p>Copyright © 2022 BearSu. All rights reserved.</p>
</footer>

<?php include __DIR__ . '/parts/solarterms_detail_scripts.php'; ?>

<?php include __DIR__ . '/parts/foot.php'; ?>