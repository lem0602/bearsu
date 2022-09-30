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
}


// echo json_encode([
//     'totalRows' => $totalRows,
//     'totalPages' => $totalPages,
//     'perPage' => $perPage,
//     'page' => $page,
//     'rows' => $rows,
// ]);
// exit;
?>

<?php include __DIR__ . '/kc_parts/html-head.php'; ?>
<link rel="stylesheet" href="./css/recipe_list.css" />
<?php include __DIR__ . '/kc_parts/navbar.php'; ?>

<main>
    <div class="container">
        <div class="row">

            <section id="recipe-title">
                <div class="recipe-title-box">
                    <img src="./images/mascot_06.png" alt="" />
                    <h1>相關文章</h1>
                </div>
            </section>

            <section id="recipe-filter">
                <div class="classification">
                    <div class="filter-recipe">
                        <a href="./recipe_list.php" class="darkbutton">
                            <h1>食譜</h1>
                        </a>
                    </div>
                    <div class="filter-article">
                        <a href="./article_list.php" class="lightbutton">
                            <h1>文章</h1>
                        </a>
                    </div>
                </div>
            </section>

            <section id="recipe-dropdown">
                <!-- dropdown -->
                <div class="veggie-category">
                    <div class="dropdown-box">
                        <div class="dropdown">
                            <button class="dropbtn">
                                <h5>素食分類</h5>
                                <i class="fa-solid fa-caret-down"></i>
                            </button>
                            <div type="button" class="dropdown-content">
                                <a type="button" href="?<?php
                                                        $tmp = $qsp; // 複製
                                                        unset($tmp['cate']);
                                                        ?>">
                                    <h5>全部</h5>
                                </a>
                                <?php foreach ($cates as $c) : ?>
                                    <a type="button" href="?<?php
                                                            $tmp['cate'] = $c['sid'];
                                                            echo http_build_query($tmp); ?>">
                                        <h5><?= $c['classification'] ?></h5>
                                    </a>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <!-- <div class="dropdown">
                            <button class="dropbtn">
                                <h5>烹飪時間</h5>
                                <i class="fa-solid fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="?">
                                    <h5>全部</h5>
                                </a>
                                <a href="?">
                                    <h5>5</h5>
                                </a>
                            </div>
                        </div> -->
                    </div>

                    <a href="./write_recipes.html" class="darkbutton">
                        <i class="fa-solid fa-pencil"></i>
                        <h5>寫食譜</h5>
                    </a>
                </div>
            </section>

            <!-- 內容資訊 -->
            <section id="recipe-main">
                <div class="recipe-list">
                    <?php foreach ($rows as $r) : ?>
                        <div class="recipe-content">
                            <div class="recipe-img ">
                                <img src="./images/recipe/<?= $r['img'] ?>/<?= $r['img'] ?>.jpeg" alt="" />
                            </div>
                            <div class="contant">
                                <div class="title">
                                    <h2>
                                        <?= $r['name'] ?> ( <?= $r['classification'] ?> )
                                    </h2>
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
                                    <a href="#0" class="darkbutton" onclick="post();"">
                                        <h4>了解更多</h4>
                                    </a>
                                    <div class="bookmark d-lg-none"><i class="fa-regular fa-bookmark"></i></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
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
<script>
    function post() {
        $.post('test.php', {
                name: $('#name').val(),
                password: $('#password').val()
            },
            function(data) {
                $('#result').html(data);
            });
    }
</script>
<?php include __DIR__ . '/kc_parts/html-foot.php'; ?>