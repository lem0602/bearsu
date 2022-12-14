<?php
require __DIR__ . '/kc_parts/connect_db.php';

$perPage = 10;  // 每頁最多有幾筆

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;

$qsp = []; // query string parameters

// 取得分類資料
$cates = $pdo->query("SELECT * FROM vegetarian WHERE sid")
    ->fetchAll();

// ----------------------商品
$where = ' WHERE 1 ';  // 起頭
if ($cate) {
    $where .= " AND vegetarian_sid=$cate ";
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
        "SELECT r.*, v.classification, group_concat(i.ingredients_name, '') AS ingredients 
        FROM recipe AS r
        JOIN vegetarian AS v 
        ON r.vegetarian_sid = v.sid
        JOIN recipe_ingredients AS i
        ON r.sid = i.recipe_sid
        %s GROUP BY r.sid ORDER BY SID LIMIT %s, %s",
        $where,
        ($page - 1) * $perPage,
        $perPage
    );

    $rows = $pdo->query($sql)->fetchAll();

    $sq = sprintf(
        "SELECT r.*, v.classification, group_concat(i.ingredients_name, '') AS ingredients 
        FROM recipe AS r
        JOIN vegetarian AS v 
        ON r.vegetarian_sid = v.sid
        JOIN recipe_ingredients AS i
        ON r.sid = i.recipe_sid
        %s GROUP BY r.sid ORDER BY SID LIMIT %s, %s",
        $where,
        ($page - 1) * $perPage,
        $perPage
    );

    $row = $pdo->query($sq)->fetchAll();
}


// echo json_encode([
//     'totalRows' => $totalRows,
//     'totalPages' => $totalPages,
//     'perPage' => $perPage,
//     'page' => $page,
//     'row' => $row,
// ]);
// exit;
?>

<?php include __DIR__ . '/kc_parts/html-head.php'; ?>
<link rel="stylesheet" href="./css/recipe_collect.css" />
<?php include __DIR__ . '/kc_parts/navbar.php'; ?>

<main>
    <div class="container">
        <div class="row">

            <section id="avatar-menu" class="col-md-2">
                <div class="avatar-box">
                    <div class="avatar">
                        <img src="./images/mascot_12.png" alt="">
                    </div>
                    <h3>已分享食譜 0</h3>
                </div>
                <ul class="membermenulist">
                    <li class="col membermenu">
                        <a href="./member.php">
                            <h3>會員資料</h3>
                        </a>
                    </li>
                    <li class="col membermenu">
                        <a href="./Order-record.php">
                            <h3>訂單記錄</h3>
                        </a>
                    </li>
                    <li class="col membermenu">
                        <a href="./recipe_collect.php">
                            <h3>我的食譜</h3>
                        </a>
                    </li>
                    <li class="col membermenu">
                        <a href="./recipe_collect.php">
                            <h3>收藏</h3>
                        </a>
                    </li>
                </ul>
            </section>

            <div class="main-container col-md-9 offset-md-1">
                <section id="collection-menu">
                    <div class="collection-nav">
                        <a href="./course_collect.php" class="lightbutton">
                            <h4>廚藝教室</h4>
                        </a>
                        <a href="./solarterms_collect.php" class="lightbutton">
                            <h4>節氣食譜</h4>
                        </a>
                        <a href="./recipe_collect.php" class="darkbutton">
                            <h4>食譜</h4>
                        </a>
                        <a href="./map_collect.php" class="lightbutton">
                            <h4>地圖</h4>
                        </a>
                        <a href="./article_collect.php" class="lightbutton">
                            <h4>文章</h4>
                        </a>
                    </div>
                </section>

                <section id="collection-main">
                    <div class="collection-list">
                        <?php foreach ($rows as $r) : ?>
                            <div class="collection-content">
                                <div class="collection-img col-md">
                                    <img src="./images/recipe/<?= $r['img'] ?>/<?= $r['img'] ?>.jpeg" alt="" />
                                </div>
                                <div class="contant col-md">
                                    <div class="title">
                                        <h2><?= $r['name'] ?> (<?= $r['classification'] ?>)</h2>
                                        <p class="d-lg-none">by 史萊姆</p>
                                        <div class="time-bookmark">
                                            <div class="time">
                                                <i class="fa-solid fa-clock"></i>
                                                <h4><?= $r['time'] ?>分</h4>
                                            </div>
                                            <div class="bookmark d-none d-lg-block">
                                                <i class="fa-regular fa-bookmark"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="d-none d-lg-block">by 史萊姆</p>
                                    <h4 class="introduction"> <?= $r['introduction'] ?> </h4>

                                    <h4 class="ingredients">
                                        食材：<?= $r['ingredients'] ?>
                                    </h4>

                                    <div class="recipe-btn">
                                        <a class="darkbutton" href="#0">
                                            <h4>了解更多</h4>
                                        </a>
                                        <div class="bookmark d-lg-none">
                                            <i class="fa-regular fa-bookmark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </section>
            </div>
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