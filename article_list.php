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
    $where .= " AND article_classification_sid=$cate ";
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
    $sql = sprintf(
        "SELECT * FROM `article` %s ORDER BY `sid` LIMIT %s, %s",
        $where,
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

            <!-- 文章分類 dropdown -->
            <section id="article-dropdown">
                <div class="dropdown">
                    <button class="dropbtn">
                        <h5>文章分類</h5>
                        <i class="fa-solid fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <?php foreach ($cates as $c) : ?>
                            <a href="?cate= <?= $c['sid'] ?>">
                                <h5><?= $c['classification'] ?></h5>
                            </a>
                        <?php endforeach ?>
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
                                    <a class="darkbutton" data-sid="<?php $r = ['sid'] ?>" onclick="seemore(event)">
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
                    <li class="page-item disabled <?= $page == 1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="?<?php $qsp['page'] = $page - 1; ?>">
                            <i class="fa-solid fa-angle-left"></i>
                        </a>
                    </li>

                    <?php for ($i = $page - 3; $i <= $page + 3; $i++) :
                        if ($i >= 1 and $i <= $totalPages) :
                            $qsp['page'] = $i;
                    ?>
                            <li class="page-item <?= $page == $i ? 'active' : '' ?>">
                                <a class="page-link" href="?<?= http_build_query($qsp); ?>"><?= $i ?></a>
                            </li>
                    <?php endif;
                    endfor; ?>

                    <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?<?php $qsp['page'] = $page + 1; ?>">
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
<script>
    function seemore(event) {
        const btn = $(event.currentTarget);
        const qty = btn.closest('.card-body').find('select').val();
        const sid = btn.attr('data-sid');

        console.log('qty', qty);

        $.get(
            'handle-cart.php', {
                sid,
                qty
            },
            function(data) {
                console.log(data);
                showCartCount(data);
            },
            'json');
    }
</script>
<?php include __DIR__ . '/kc_parts/html-foot.php'; ?>