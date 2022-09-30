<?php
require __DIR__ . '/kc_parts/connect_db.php';

$perPage = 10;  // 每頁最多有幾筆
if(! isset($_SESSION['sid'])){
    $_SESSION['sid'] = [];
}

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;

$qsp = []; // query string parameters

// 取得資料
$tmain = $pdo->query("SELECT r.*, v.*
FROM recipe AS r
JOIN vegetarian AS v
ON r.vegetarian_sid = v.sid
WHERE r.sid=1
")
    ->fetchAll();

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
// ----------------------商品
$where = ' WHERE 1 ';  // 起頭
if ($cate) {
    $where .= " AND vegetarian_sid = $cate ";
    $qsp['cate'] = $cate;
}

// 取得資料的總筆數
$t_sql = "SELECT COUNT(1) FROM recipe $where ";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// 計算總頁數
$totalPages = ceil($totalRows / $perPage);

$rows = [];  // 預設值

// 有資料才執行
if ($totalRows > 0) {
    if ($page < 1) {
        header('Location: ?page=1');
        exit;
    }

    if ($page > $totalPages) {
        header('Location: ?page=' . $totalPages);
        exit;
    }
    // 取得該頁面的資料
    $sql = sprintf(
        "SELECT * FROM `recipe` ORDER BY `sid` LIMIT %s, %s",
        ($page - 1) * $perPage,
        $perPage
    );

    $rows = $pdo->query($sql)->fetchAll();
}

echo json_encode([
    'totalRows' => $totalRows,
    'totalPages' => $totalPages,
    'perPage' => $perPage,
    'page' => $page,
    'rows' => $step,
    'sid' => $step,
]);
exit;
?>

<?php include __DIR__ . '/kc_parts/html-head.php'; ?>
<link rel="stylesheet" href="./css/recipe_detail.css" />
<?php include __DIR__ . '/kc_parts/navbar.php'; ?>

<main>
    <div class="container">
        <div class="row">

            <section id="recipe-detail-content">
                <?php foreach ($tmain as $t) : ?>
                    <div class=" recipe-detail-main">
                        <div class="title">
                            <h1>
                                <?= $t['name'] ?>
                                ( <?= $t['classification'] ?> )
                            </h1>
                            <div class="bookmark">
                                <i class="fa-regular fa-bookmark"></i>
                            </div>
                        </div>
                        <div class="img-author">
                            <div class="col-md-10 main-img">
                                <img src="./images/recipe/<?= $t['img'] ?>/<?= $t['img'] ?>.jpeg" alt="" />
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
                                <?= $t['introduction'] ?>
                            </h3>
                        </div>
                    </div>
                <?php endforeach ?>

                <div class="recipe-detail-ingredients">
                    <?php foreach ($recipe as $r) : ?>
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
                                <?php foreach ($recipe_ingredients as $i) : ?>
                                    <div class="col-12 col-lg-6 ingredients">
                                        <h4><?= $i['ingredients_name'] ?></h4>
                                        <h4><?= $i['quantity'] ?></h4>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>

                <div class="recipe-detail-step">
                    <div class="step-box">
                        <?php foreach ($step as $s) : ?>
                            <div class="step">
                                <div class="col-md-5 step-img">
                                    <img src="./images/recipe/<?= $s['img'] ?>/recipe_01_01.jpeg" alt="" />
                                </div>
                                <div class="step-txt">
                                    <h2><?= $s['number'] ?></h2>
                                    <p><?= $s['step_introduction'] ?></p>
                                </div>
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