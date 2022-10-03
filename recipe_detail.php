<?php
require __DIR__ . '/kc_parts/connect_db.php';
// pageName = '';


if (!isset($_SESSION['detail'])) {
    $_SESSION['detail'] = [];
}

if (!isset($_SESSION['recipe'])) {
    $_SESSION['recipe'] = [];
}

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

if (!empty($sid)) {

    if (!empty($_SESSION['detail'][$sid])) {
    } else {
        // 新增
        // TODO: 檢查資料表是不是有這個商品

        $row = $pdo->query("SELECT r.*, v.*, group_concat(DISTINCT i.ingredients_name) AS ingredients_name, group_concat(DISTINCT i.quantity) AS ingredients_quantity, group_concat(DISTINCT s.step_introduction) AS step_introduction, group_concat(DISTINCT s.number) AS step_number
        FROM recipe AS r  
        LEFT JOIN vegetarian AS v ON r.vegetarian_sid = v.sid 
        LEFT JOIN recipe_ingredients AS i ON r.sid = i.recipe_sid
        LEFT JOIN recipe_step AS s ON r.sid = s.recipe_sid
        WHERE r.sid=$sid
        GROUP BY r.sid")->fetch();


        if (!empty($row)) {
            $_SESSION['detail'][$sid] = $row;
        }
    }

    if (!empty($_SESSION['recipe'][$sid])) {
    } else {
        // 新增
        // TODO: 檢查資料表是不是有這個商品

        $recipe_ingredients = $pdo->query("SELECT i.* 
        FROM recipe_ingredients AS i
        WHERE recipe_sid=1
        ")
            ->fetchAll();


        if (!empty($row)) {
            $_SESSION['recipe'][$sid] = $row;
        }
    }
}

// print_r($_SESSION['detail']);

echo json_encode($_SESSION['recipe']);

exit;
// 素食食材 
$recipe_ingredients = $pdo->query("SELECT i.* 
FROM recipe_ingredients AS i
WHERE recipe_sid=1
")
    ->fetchAll();

// todo 素食食材 合併
$recipe = $pdo->query("SELECT r.* , i.* 
FROM recipe AS r
JOIN recipe_ingredients AS i
ON r.ingredients_sid = i.sid
WHERE r.sid=1
")
    ->fetchAll();
// 步驟
$step = $pdo->query("SELECT r.*, s.*
FROM recipe_step AS s
JOIN recipe AS r
ON r.sid = s.recipe_sid
WHERE s.recipe_sid=1
")
    ->fetchAll();


$sql = sprintf(
    "SELECT r.*, v.classification, group_concat(DISTINCT i.ingredients_name) AS ingredients_name, 
    group_concat(DISTINCT s.step_introduction) AS step_introduction, group_concat(DISTINCT s.number) AS step_number
FROM recipe AS r
LEFT JOIN vegetarian AS v 
ON r.vegetarian_sid = v.sid
LEFT JOIN recipe_ingredients AS i
ON r.sid = i.recipe_sid
LEFT JOIN recipe_step AS s
ON r.sid = s.recipe_sid
WHERE 1  GROUP BY r.sid"
);

$rows = $pdo->query($sql)->fetchAll();
// echo json_encode([
//     'name' => $name,
// ]);

// exit;
?>

<?php include __DIR__ . '/kc_parts/html-head.php'; ?>
<link rel="stylesheet" href="./css/recipe_detail.css" />
<?php include __DIR__ . '/kc_parts/navbar.php'; ?>

<main>
    <div class="container">
        <div class="row">

            <section id="recipe-detail-content">
                <?php foreach ($_SESSION['detail'] as $r) : ?>
                    <div class=" recipe-detail-main">
                        <div class="title">
                            <h1>
                                <?= $r['name'] ?>
                                ( <?= $r['classification'] ?> )
                            </h1>
                            <div class="bookmark">
                                <i class="fa-regular fa-bookmark"></i>
                            </div>
                        </div>
                        <div class="img-author">
                            <div class="col-md-10 main-img">
                                <img src="./images/recipe/<?= $r['img'] ?>/<?= $r['img'] ?>.jpeg" alt="" />
                            </div>
                            <div class="author">
                                <div class="author-img">
                                    <img src="./images/mug_shot_04.png" alt="" />
                                </div>
                                <h4>史萊姆</h4>
                            </div>
                        </div>
                        <div class="txt">
                            <h3>
                                <?= $r['introduction'] ?>
                            </h3>
                        </div>
                    </div>
                <?php endforeach ?>

                <div class="recipe-detail-ingredients">
                    <?php foreach ($_SESSION['detail'] as $r) : ?>
                        <div class="ingredients-box">
                            <div class="quantity-time">
                                <div class="col quantity">
                                    <h3>份量</h3>
                                    <h3><?= $r['quantity'] ?> 人份</h3>
                                </div>
                                <div class="col time">
                                    <h3>時間</h3>
                                    <h3><?= $r['time'] ?> 分鐘</h3>
                                </div>
                            </div>
                            <div class="ingredients-group">
                                <div class="col-12 title">
                                    <h3>食材</h3>
                                </div>
                                <?php $name = explode(",", $r['ingredients_name']); 
                                foreach ($name as $r) :
                                ?>
                                <div class="col-12 col-lg-6 ingredients">
                                    <h4><?= $r['ingredients_name'] ?></h4>
                                    <h4></h4>
                                </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>

                <div class="recipe-detail-step">
                    <div class="step-box">
                        <?php foreach ($_SESSION['detail'] as $r) : ?>
                            <div class="step">
                                <div class="col-md-5 step-img">
                                    <img src="./images/recipe/<?= $r['img'] ?>/recipe_01_01.jpeg" alt="" />
                                </div>
                                <?php foreach ($_SESSION['detail'] as $s) : ?>
                                <div class="step-txt">
                                    <h2><?= $s['step_number'] ?></h2>
                                    <p><?= $s['step_introduction'] ?></p>
                                </div>
                                <?php endforeach ?>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </section>

            <section id="message">
                <div class="message-box">
                    <div class="title">
                        <h2>留言</h2>
                    </div>
                    <div class="content">
                        <div class="img-text-box">
                            <div class="author-img">
                                <img src="./images/mug_shot_04.png" alt="" />
                            </div>
                            <div class="textareabox">
                                <textarea placeholder="加入討論(最多可輸入100字)" rows="3" maxlength="100" class="editdetail" id="detail2"></textarea>
                                <p>
                                    <span id="detail2-num">0</span>/<span>100</span>
                                </p>
                            </div>
                        </div>
                        <div class="button-box">
                            <a class="darkbutton">
                                <h5>發表留言</h5>
                            </a>
                        </div>
                    </div>
                    <div class="message">
                        <div class="message-author-img">
                            <img src="./images/mug_shot_04.png" alt="" />
                        </div>
                        <p>發表留言發表留言發表留言發表留言發表留言發表留言</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>

<footer>
    <section id="footer">
        <p>&copy;2022 BearSu. All rights reserved.</p>
    </section>
</footer>

<?php include __DIR__ . '/kc_parts/scripts.php'; ?>
<?php include __DIR__ . '/kc_parts/html-foot.php'; ?>