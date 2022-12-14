<?php session_start(); ?>
<?php
require __DIR__ . '/parts/connect_db.php';
// $sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
// $sql = "SELECT s.*, v.classification FROM solarterms_recipe s
// JOIN vegetarian v ON s.vegetarian_sid=v.sid
// WHERE s.sid=$sid";

// $r = $pdo->query($sql)->fetch();

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$sql = sprintf(
//     "SELECT s.*, v.classification, group_concat(DISTINCT i.ingredients_name ORDER BY i.sid) AS ingredients_name, 
// group_concat(DISTINCT step.step_introduction ORDER BY step.step_number) AS step_introduction, group_concat(DISTINCT step.step_number) AS step_number ,group_concat(DISTINCT i.quantity ORDER BY i.sid) AS ingredients_quantity
// FROM solarterms_recipe s
// LEFT JOIN vegetarian v 
// ON s.vegetarian_sid=v.sid
// LEFT JOIN solarterms_recipe_ingredients AS i
// ON s.sid = i.recipe_sid
// LEFT JOIN solarterms_recipe_step AS step
// ON s.sid = step.recipe_sid
// WHERE s.sid=$sid GROUP BY s.sid"
// );

"SELECT s.*, v.classification,  
group_concat(DISTINCT step.step_introduction ORDER BY step.step_number) AS step_introduction, 
group_concat(DISTINCT step.step_number) AS step_number 
FROM solarterms_recipe s
LEFT JOIN vegetarian v 
ON s.vegetarian_sid=v.sid
LEFT JOIN solarterms_recipe_step AS step
ON s.sid = step.recipe_sid
WHERE s.sid=$sid GROUP BY s.sid"
);

$rows = $pdo->query($sql)->fetchAll();

$ingredients = sprintf(
    "SELECT r.sid, i.ingredients_name, i.quantity
    FROM solarterms_recipe AS r
    LEFT JOIN solarterms_recipe_ingredients AS i
    ON r.sid = i.recipe_sid
    WHERE r.sid=$sid  GROUP BY i.sid"
);

$irows = $pdo->query($ingredients)->fetchAll();

// $rr = $pdo->query($sql)->fetch();
// echo json_encode([
//     'name' => $rows,
// ]);

// exit;

// 每一個步驟
// $step = $pdo->query("SELECT `recipe`.*, `recipe_step`.`number`, `recipe_step`.`step_introduction` 
// FROM `recipe`
// JOIN `recipe_step` 
// ON recipe.step_sid = recipe_step.sid ")
//     ->fetchAll();    

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
        <?php foreach ($rows as $r) : ?>
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
        <?php endforeach ?>
        <?php foreach ($rows as $r) : ?>
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
                <?php foreach ($irows as $r) : ?>
                        <div class="d-flex justify-content-between col-12 col-md-6 col-lg-6 ingredients">
                            <h4><?= $r['ingredients_name'] ?></h4>
                            <h4><?= $r['quantity'] ?></h4>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        <?php endforeach ?>


        <div class="col-12 recipe_list">
            <?php foreach ($rows as $r) : $sn = explode(",", $r['step_number']);
                $si = explode(",", $r['step_introduction']);
                $sg = explode(",", $r['step_img']);

                for ($i = 0; $i < sizeof($sn); $i++) : ?>
                    <div class="recipe_list_wrap d-md-flex d-lg-flex">
                        <div class="left">
                            <img src="images/solarterms/<?= $sg[$i] ?>.jpg" alt="">
                        </div>
                        <div class="right">
                            <h1><?= $sn[$i] ?></h1>
                            <h3><?= $si[$i] ?></h3>
                        </div>
                    </div>
                <?php endfor ?>
            <?php endforeach ?>
        </div>

        <div class="col-12 message_card">
            <h2>留言</h2>
            <div class="message_card_innrwrap d-md-flex d-lg-flex align-items-center">
                <div class="mug_shot d-flex flex-column align-items-center">
                    <img src="images/mascot_12.png" alt="">
                </div>
                <div class="input_section w-100">
                    <textarea name="" id="" class="w-100" placeholder="加入討論 (最多可輸入 100 字)"></textarea>
                </div>
            </div>
            <div class="btn_section d-flex justify-content-center justify-content-md-end justify-content-lg-end">
                <button type="submit">發表留言</button>
            </div>
            <div class="message_card_innrwrap message_card_innrwrap_down d-flex">
                <div class="mug_shot d-flex flex-column align-items-center">
                    <img src="images/mascot_12.png" alt="">
                </div>
                <div class="input_section w-100">
                    <h3>LEM</h3>
                    <h4>謝謝分享，改天來試試看。</h4>
                    <p><?php $datetime = date ("Y-m-d H:i:s" , mktime(date('H')+6, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;echo $datetime ; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>


<footer>
    <p>Copyright © 2022 BearSu. All rights reserved.</p>
</footer>

<?php include __DIR__ . '/parts/solarterms_detail_scripts.php'; ?>

<?php include __DIR__ . '/parts/foot.php'; ?>