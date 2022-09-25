<?php
require __DIR__ . '/kc_parts/connect_db.php';
// pageName = '';

$perPage = 10;  // 每頁最多有幾筆

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;

$qsp = []; // query string parameters

// 取得分類資料
$cates = $pdo->query("SELECT * FROM `article` WHERE `sid` = 1")
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
    $sql = sprintf("SELECT * FROM `article` %s ORDER BY `sid` LIMIT %s, %s",
    $where,
    ($page - 1) * $perPage,
    $perPage);
    
    $rows = $pdo->query($sql)->fetchAll();
}

// echo json_encode([
//     'totalRows' => $totalRows,
//     'totalPages' => $totalPages,
//     'perPage' => $perPage,
//     'page' => $page,
//     'rows' => $rows,
//     'cates' => $cates
// ]);
// exit;
?>
<?php include __DIR__ . '/kc_parts/html-head.php'; ?>
<link rel="stylesheet" href="./css/article_detail.css" />
<?php include __DIR__ . '/kc_parts/navbar.php'; ?>

<main>
    <div class="container">
        <div class="row">
            <section id="article-detail-main">
                <?php foreach ($cates as $c) :?>
                <div class="article-detail-box">
                    <div class="title">
                        <h1><?= $c['title'];?></h1>
                        <div class="date d-lg-none">
                            <p><?= $c['date']?></p>
                        </div>
                        <div class="bookmark">
                            <i class="fa-regular fa-bookmark"></i>
                        </div>
                    </div>
                    <div class="d-none d-md-block date">
                        <p><?= $c['date']?></p>
                    </div>
                    <div class="txt">
                        <h4>
                            
                        </h4>
                        <div class="img">
                            <img class="w-100" src="./images/article_05_01.jpeg" alt="">
                        </div>
                        <h4>
                        <?= $c['introduction']?>
                        </h4>
                        <div class="img">
                            <img class="w-100" src="./images/article_05_02.jpeg" alt="">
                        </div>
                        <h4>
                            製造商若在植物性食品中添加食用真菌、微藻或螺旋藻等成分，可增強氨基酸、維生素B和E，以及抗氧化劑等特性。未來加工和成分創新，將可增進其營養價值。
                            若要實現這些目標，勢必需要額外的研究資金，確保製造商能夠生產出味道更好、更健康的產品，並為消費者提供環境友善的選擇。
                        </h4>
                        <div class="img">
                            <img class="w-100" src="./images/article_05_03.jpeg" alt="">
                        </div>
                        <h4>
                            植物肉較永續環境研究提及，植物性產品產生的溫室氣體較動物性產品低。用豌豆蛋白代替5%的德國牛肉消費量，每年可減少800
                            萬噸二氧化碳排放；與牛肉漢堡相比，植物性漢堡的溫室氣體排放量少了98%。
                            植物性產品較動物性產品，所需的農業用地和用水少，造成的環境汙染也少，所需能源亦不多於動物性產品。
                            由於植物肉的味道、質地和口感，是參考動物肉複製而成，因此與其他全植物性食品，植物肉更有機會取代動物製品，可減少對環境產生的汙染。
                        </h4>
                    </div>
                </div>
                <?php endforeach; ?>
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
                                <textarea placeholder="加入討論(最多可輸入100字)" rows="3" maxlength="100" class="editDetail" id="detail2"></textarea>
                                <p>
                                    <span id="detail2-num">0</span>/<span>100</span>
                                </p>
                            </div>
                        </div>
                        <div class="button-box">
                            <a href="#0" class="darkbutton">
                                <h5>發表留言</h5>
                            </a>
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