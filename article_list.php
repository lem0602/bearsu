<?php
require __DIR__ . '/kc_parts/connect_db.php';
// pageName = '';

$perPage = 10;  // 每頁最多有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;

$qsp = []; // query string parameters

// 取得分類資料
$cates = $pdo->query("SELECT * FROM `article_classification` WHERE `sid`")
    ->fetchAll();

// ----------------------商品

$where = ' WHERE 1 ';  // 起頭
if ($cate) {
    $where .= " AND article_sid=$cate ";
    $qsp['cate'] = $cate;
}


// 取得資料的總筆數
$t_sql = "SELECT COUNT(1) FROM article $where ";
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
    $sql = sprintf("SELECT * FROM `article` ORDER BY `sid` LIMIT %s, %s", ($page - 1) * $perPage, $perPage);
    $rows = $pdo->query($sql)->fetchAll();
}

// echo json_encode([
//     'totalRows' => $totalRows,
//     'totalPages' => $totalPages,
//     'perPage' => $perPage,
//     'page' => $page,
//     'rows' => $rows,
// ]);

?>
<?php include __DIR__ . '/kc_parts/html-head.php'; ?>
<link rel="stylesheet" href="./css/article_list.css" />
<?php include __DIR__ . '/kc_parts/navbar.php'; ?>

<main>
    <div class="container">
        <div class="row">

            <section id="article-title">
                <div class="article-title-box">
                    <img src="./images/mascot_06.png" alt="" />
                    <h1>相關文章</h1>
                </div>
            </section>

            <section id="article-filter">
                <div class="classification">
                    <div class="filter-article">
                        <a href="./recipe_list.php" class="lightbutton">
                            <h1>食譜</h1>
                        </a>
                    </div>
                    <div class="filter-article">
                        <a href="./article_list.php" class="darkbutton">
                            <h1>文章</h1>
                        </a>
                    </div>
                </div>
            </section>

            <section id="article-dropdown">
                <!-- 文章分類 dropdown -->
                <div class="veggie-Category">
                    <div class="custom-select">
                        <select>

                            <option value="0">
                                <h5>文章分類</h5>
                            </option>

                            <option value="1">
                                <a 
                                    type="button" 
                                    href="?<?php $tmp = $qsp; unset($tmp['cate']); ?>">
                                    <h5>全部</h5>
                                </a>
                            </option>

                            <?php foreach($cates as $c): ?>
                            <option value="2">
                                <h5><?= $c['classification'] ?></h5>
                            </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <!-- dropdown end -->
            </section>

            <!-- 內容資訊 -->
            <section id="article-main">
                <div class="article-list">
                    <?php foreach ($rows as $r) : ?>
                        <div class="article-content">
                            <div class="col-lg-5 article-img">
                                <img src="./images/article/<?= $r['img'] ?>.jpeg" alt="" />
                            </div>
                            <div class="col-lg contant">
                                <div class="title">
                                    <h2>
                                        <?= $r['title'] ?>
                                    </h2>
                                    <div class="bookmark d-none d-lg-block">
                                        <i class="fa-regular fa-bookmark"></i>
                                    </div>
                                    <p class="d-lg-none">by 史萊姆</p>
                                </div>
                                <p class="d-none d-lg-block">by 史萊姆</p>
                                <h4 class="introduction">
                                    <?= $r['introduction'] ?>
                                </h4>
                                <div class="article-btn">
                                    <a class="darkbutton" href="#0">
                                        <h4>了解更多</h4>
                                    </a>
                                    <div class="bookmark d-lg-none">
                                        <i class="fa-regular fa-bookmark"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section id="pagination">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link">
                            <i class="fa-solid fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
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