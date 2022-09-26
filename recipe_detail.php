<?php
require __DIR__ . '/kc_parts/connect_db.php';

$perPage = 10;  // 每頁最多有幾筆

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;

$qsp = []; // query string parameters

// 取得分類資料
$cates = $pdo->query("SELECT * FROM `recipe_ingredients` WHERE `recipe_sid`=1")
    ->fetchAll();

$recipe = $pdo->query("SELECT * FROM `recipe` WHERE `sid`=1")
    ->fetchAll();

$vegetarian = $pdo->query("SELECT * FROM vegetarian WHERE sid=1")
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

// echo json_encode([
//     'totalRows' => $totalRows,
//     'totalPages' => $totalPages,
//     'perPage' => $perPage,
//     'page' => $page,
//     'recipe' => $recipe,

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
                <?php foreach ($recipe as $r) : ?>
                    <div class=" recipe-detail-main">
                        <div class="title">
                            <h1>
                                <?= $r['name'] ?>
                                <?php foreach ($vegetarian as $v) : ?>
                                ( <?= $v['classification'] ?> )
                                <?php endforeach ?>
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
                                <?php foreach ($cates as $c) : ?>
                                    <div class="col-12 col-lg-6 ingredients">
                                        <h4><?= $c['ingredients_name'] ?></h4>
                                        <h4><?= $c['quantity'] ?></h4>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>

                <div class="recipe-detail-step">
                    <div class="step-box">
                    <?php foreach ($recipe as $r) : ?>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>1</h2>
                                <p><?= $r[''] ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                        <!-- <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_02.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>2</h2>
                                <p>木耳泡發後切小塊</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_03.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>3</h2>
                                <p>胡蘿蔔、杏鮑菇切薄片，太白粉水調勻</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_04.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>4</h2>
                                <p>熱鍋，蒜頭、胡蘿蔔、杏鮑菇依序爆香</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_05.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>5</h2>
                                <p>木耳下鍋拌炒</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_06.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>6</h2>
                                <p>甜豆下鍋拌炒</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_07.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>7</h2>
                                <p>嗆入熱水、素蠔油，小火燜煮3~5分鐘</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_08.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>8</h2>
                                <p>
                                    下辣椒、鹽、胡椒粉、香菇粉調味，加適量熱水燒開
                                </p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_09.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>9</h2>
                                <p>勾薄芡，撒上香油</p>
                            </div>
                        </div> -->
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