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
<link rel="stylesheet" href="./css/write_recipes.css">
<?php include __DIR__ . '/kc_parts/navbar.php'; ?>

<main>
    <div class="container">
        <div class="row">
            <!-- 寫食譜 -->
            <section id="write-recipes" class="col-md-10">
                <div class="write-recipes">
                    <div class="text-title-box">
                        <textarea placeholder="請填寫食譜標題" rows="3" maxlength="20" class="text-title-textarea" id="title-detail"></textarea>
                        <p><span class="titleNum">0/20</span></p>
                    </div>
                    <!-- 素食分類 dropdown -->
                    <div class="veggie-category-dropdown">
                        <div class="dropdown">
                            <button class="dropbtn">
                                <h5>素食分類</h5>
                                <i class="fa-solid fa-caret-down"></i>
                            </button>

                            <div type="button" class="dropdown-content">
                                <?php foreach ($cates as $c) : ?>
                                    <a type="button" href="#0">
                                        <h5><?= $c['classification'] ?></h5>
                                    </a>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <!-- 上傳圖片 -->
                    <div class="upload">
                        <label class="text-center image-preview-wrapper" for="file-uploader">
                            <div class="detall">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                <h2>點擊新增圖片</h2>
                                <h3>比例建議 4:3 ，大小 1200x900 以上<br>
                                    內容以食譜為主<br>
                                    (請勿上傳人像或動物圖片)
                                </h3>
                            </div>
                        </label>
                        <form id="file-uploader" action=" upload.php" method="POST" enctype="multipart/form-data">
                            <input type="file" name="file">
                            <button type="submit" name="submit" value="上傳圖檔">上傳檔案</button>
                        </form>
                    </div>

                    <!-- 簡介 -->
                    <div class="introduction">
                        <div class="introduction-box">
                            <lable for="subject">
                                <h2>簡介</h2>
                            </lable>
                            <div class="textarea-box">
                                <textarea placeholder="輸入食譜描述(最多200字)" rows="5" maxlength="200" class="text-introduction" id="introduction-detail"></textarea>
                                <p><span class="wordsNum">0/200</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- 時間與份量的下拉式選單和新增食材-->
                    <div class="ingredients">
                        <div class="ingredients-box">
                            <div class="serving-size">
                                <h3>份量</h3>
                                <h4>(人份)</h4>
                                <!-- dropdown -->
                                <div class="dropdown">
                                    <button class="dropbtn">
                                        <h5>份量</h5>
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>

                                    <div type="button" class="dropdown-content">
                                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                                            <a type="button" href="#0">
                                                <h5><?= $i ?></h5>
                                            </a>
                                        <?php endfor ?>
                                    </div>
                                </div>
                                <!-- dropdown end -->
                            </div>

                            <div class="time">
                                <h3>烹調時間</h3>
                                <h4>(分鐘)</h4>
                                <!-- dropdown -->
                                <div class="dropdown">
                                    <button class="dropbtn">
                                        <h5>烹調時間</h5>
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>

                                    <div type="button" class="dropdown-content">
                                        <?php for ($i = 15; $i <= 120; $i += 15) : ?>
                                            <a type="button" href="#0">
                                                <h5><?= $i ?></h5>
                                            </a>
                                        <?php endfor ?>
                                    </div>
                                </div>
                                <!-- dropdown end -->
                            </div>
                        </div>
                        <!-- 新增食材 -->
                        <div class="addIngredients">
                            <div class="introduction-box">
                                <lable for="subject">
                                    <h2>食材</h2>
                                </lable>
                                <div class="container">
                                    <!-- 新增食材列表 -->
                                    <div class="row allDetail-box">
                                        <div class="detail-box col p-0">
                                            <textarea placeholder="食材" rows="5" maxlength="200" class="text-addIngredients" id="addIngredients-detail"></textarea>
                                        </div>
                                        <div class="detail-box col-3 p-0">
                                            <textarea placeholder="份量" rows="5" maxlength="200" class="text-addIngredients" id="addIngredients-detail"></textarea>
                                        </div>
                                        <div class="col-1 p-0">
                                            <button class="del-introduction" type="button" aria-label="刪除食材">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="row allDetail-box">
                                        <div class="detail-box col p-0">
                                            <textarea placeholder="食材" rows="5" maxlength="200" class="text-addIngredients" id="addIngredients-detail"></textarea>
                                        </div>
                                        <div class="detail-box col-3 p-0">
                                            <textarea placeholder="份量" rows="5" maxlength="200" class="text-addIngredients" id="addIngredients-detail"></textarea>
                                        </div>
                                        <div class="col-1 p-0">
                                            <button class="del-introduction" type="button" aria-label="刪除食材">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="row allDetail-box">
                                        <div class="detail-box col p-0">
                                            <textarea placeholder="食材" rows="5" maxlength="200" class="text-addIngredients" id="addIngredients-detail"></textarea>
                                        </div>
                                        <div class="detail-box col-3 p-0">
                                            <textarea placeholder="份量" rows="5" maxlength="200" class="text-addIngredients" id="addIngredients-detail"></textarea>
                                        </div>
                                        <div class="col-1 p-0">
                                            <button class="del-introduction" type="button" aria-label="刪除食材">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- 新增食材btn -->
                                    <div class="row addbtn">
                                        <a class=darkbutton>
                                            <h3>新增食材</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 步驟 -->
                    <div class="step">
                        <h2 class="title">步驟</h2>
                        <div class="step-box">
                            <div class="addimg">
                                <!-- to do 點擊新增圖片 -->
                            </div>
                            <div class="textarea">
                                <div class="header">
                                    <h2>1</h2>
                                    <button class="del-step-instructions" type="button" aria-label="刪除步驟說明">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                                <div class="textarea-box">
                                    <textarea placeholder="步驟說明(最多150字)" rows="5" maxlength="150" class="step-textarea" id="introduction-detail"></textarea>
                                    <p><span class="textNum1">0/150</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="step-box">
                            <div class="addimg">
                                <!-- to do 點擊新增圖片 -->
                            </div>
                            <div class="textarea">
                                <div class="header">
                                    <h2>2</h2>
                                    <button class="del-step-instructions" type="button" aria-label="刪除步驟說明">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                                <div class="textarea-box">
                                    <textarea placeholder="步驟說明(最多150字)" rows="5" maxlength="150" class="step-textarea" id="introduction-detail"></textarea>
                                    <p><span class="textNum2">0/150</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="step-box">
                            <div class="addimg">
                                <!-- to do 點擊新增圖片 -->
                            </div>
                            <div class="textarea">
                                <div class="header">
                                    <h2>3</h2>
                                    <button class="del-step-instructions" type="button" aria-label="刪除步驟說明">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                                <div class="textarea-box">
                                    <textarea placeholder="步驟說明(最多150字)" rows="5" maxlength="150" class="step-textarea" id="introduction-detail"></textarea>
                                    <p><span class="textNum3">0/150</span></p>
                                </div>
                            </div>
                        </div>
                        <!-- 新增步驟btn -->
                        <div class="addbtn">
                            <a class="darkbutton">
                                <h3>新增步驟</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 發布雨取消按鈕 -->
            <section id="postcancel" class="col-md-2">
                <div class="postcancel-box">
                    <a class="lightbutton" href="./recipe_list.php">
                        <h2>取消</h2>
                    </a>
                    <a class="darkbutton" href="./recipe_list.php">
                        <h2>發布</h2>
                    </a>
                </div>
            </section>
        </div>
    </div>
</main>

<section id="footer">
    <footer>
        <p>&copy;2022 BearSu. All rights reserved.</p>
    </footer>
</section>

<?php include __DIR__ . '/kc_parts/scripts.php'; ?>
<script>
    //封裝一個限制字數方法
    var checkStrLengths = function(str, maxLength) {
        var maxLength = maxLength;
        var result = 0;
        if (str && str.length > maxLength) {
            result = maxLength;
        } else {
            result = str.length;
        }
        return result;
    }

    //監聽輸入
    $(".text-introduction").on('input propertychange', function() {

        //獲取輸入內容
        var userDesc = $(this).val();

        //判斷字數
        var len;
        if (userDesc) {
            len = checkStrLengths(userDesc, 200);
        } else {
            len = 0
        }

        //顯示字數
        $(".wordsNum").html(len + '/200');
    });

    $(".text-title-textarea").on('input propertychange', function() {

        //獲取輸入內容
        var userDesc = $(this).val();

        //判斷字數
        var len;
        if (userDesc) {
            len = checkStrLengths(userDesc, 20);
        } else {
            len = 0
        }

        //顯示字數
        $(".titleNum").html(len + '/20');
    });
    for (i = 1 ; i < 10; i++) {
        $(".step-textarea").on('input propertychange', function() {

            //獲取輸入內容
            var userDesc = $(this).val();

            //判斷字數
            var len;
            if (userDesc) {
                len = checkStrLengths(userDesc, 150);
            } else {
                len = 0
            }

            //顯示字數
            $(".textNum1").html(len + '/150');            
        });
    }
</script>
<?php include __DIR__ . '/kc_parts/html-foot.php'; ?>