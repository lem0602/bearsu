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
    <form id="writeRecipes" name="writeRecipes" action="upload_recipes.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <!-- 寫食譜 -->
                <section id="write-recipes" class="col-md-10">
                    <div class="write-recipes">
                        <div class="text-title-box">
                            <textarea placeholder="請填寫食譜標題" rows="3" maxlength="20" class="text-title-textarea" name="recipes[title]" id="title-detail"></textarea>
                            <p><span class="titleNum">0/20</span></p>
                        </div>
                        <!-- 素食分類 dropdown -->
                        <div class="veggie-category-dropdown">
                            <h2>素食分類</h2>
                            <select name="recipes[vegetarian]" id="vegetarianDp">
                                <?php foreach ($cates as $c) : ?>
                                    <option value="<?= $c['classification'] ?>">
                                        <h5><?= $c['classification'] ?></h5>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <!-- 上傳圖片 -->
                        <div class="upload">
                            <label class="text-center image-preview-wrapper" for="titleImgFile">
                                <div class="detall">
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <h2>點擊新增圖片</h2>
                                    <h3>比例建議 4:3 ，大小 1200x900 以上<br>
                                        內容以食譜為主<br>
                                        (請勿上傳人像或動物圖片)
                                    </h3>
                                    <img id="titleImg" class="w-100" src="" alt="">
                                </div>
                            </label>
                            <input type="file" name="imgFile[]" id="titleImgFile" accept="image/jpeg,image/jpg" multiple>
                        </div>

                        <!-- 簡介 -->
                        <div class="introduction">
                            <div class="introduction-box">
                                <lable for="subject">
                                    <h2>簡介</h2>
                                </lable>
                                <div class="textarea-box">
                                    <textarea placeholder="輸入食譜描述(最多200字)" rows="5" maxlength="200" class="text-introduction" name="recipes[introduction]" id="introduction-detail"></textarea>
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
                                    <select name="recipes[ingredientsSize]" id="ingredientsSize">
                                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                                            <option value="<?= $i ?>">
                                                <h5><?= $i ?></h5>
                                            </option>
                                        <?php endfor ?>
                                    </select>
                                    <!-- dropdown end -->
                                </div>

                                <div class="time">
                                    <h3>烹調時間</h3>
                                    <h4>(分鐘)</h4>
                                    <!-- dropdown -->
                                    <select name="recipes[ingredientsTime]" id="ingredientsTime">
                                        <?php for ($i = 15; $i <= 120; $i += 15) : ?>
                                            <option value="<?= $i ?>">
                                                <h5><?= $i ?></h5>
                                            </option>
                                        <?php endfor ?>
                                    </select>
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
                                        <div class="row allDetail-box">
                                            <!-- list holder -->
                                            <div class="listHolder">
                                                <ul class="list" id="listHolder">

                                                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                                                        <li class="row listHolderLi">
                                                            <div class="detail-box col-6 col-md-7 p-0">
                                                                <textarea placeholder="食材" rows="5" maxlength="200" name="recipes[Ingredients][<?= $i ?>]" class="text-addIngredients" id="ingredients"></textarea>
                                                            </div>
                                                            <div class="detail-box col-3 col-md p-0">
                                                                <textarea placeholder="份量" rows="5" maxlength="200" name="recipes[servingSize][<?= $i ?>]" class="text-addIngredients" id="servingSize"></textarea>
                                                            </div>
                                                            <button class="delIngredients" type="button" aria-label="刪除步驟說明" onclick="event.currentTarget.closest('.listHolderLi').remove()">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </button>
                                                        </li>
                                                    <?php endfor ?>
                                                </ul>
                                            </div>
                                            <!-- form holder -->
                                            <div class="formHolder">
                                                <a type="button" id="addIngredientsBtn" class="darkbutton">
                                                    <h3 class="addIng">新增食材</h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 步驟 -->
                        <div class="step">
                            <h2 class="title">步驟</h2>

                            <div class="step-box">
                                <ul class="step-list">
                                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                                        <li class="li_list">
                                            <div class="addimg col-12 col-md-4">
                                                <div class="upload">
                                                    <label class="text-center image-preview-wrapper" for="stepImgFile">
                                                        <div class="detall">
                                                            <i class="fa-solid fa-cloud-arrow-up"></i>
                                                            <h2>點擊新增圖片</h2>
                                                            <h3>比例建議 4:3</h3>
                                                            <img id="stepImg" class="w-100" src="" alt="">
                                                        </div>
                                                    </label>
                                                    <input type="file" name="imgFile[]" id="stepImgFile" accept="image/jpeg,image/jpg" multiple>
                                                </div>
                                            </div>
                                            <div class="textarea col-12 col-md">
                                                <div class="header">
                                                    <button class="del-step-instructions" type="button" aria-label="刪除步驟說明" onclick="event.currentTarget.closest('.li_list').remove()">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </div>
                                                <div class="textarea-box">
                                                    <textarea placeholder="步驟說明(最多150字)" rows="5" maxlength="150" class="step-textarea" name="recipes[step][]" id="introduction-detail"></textarea>
                                                    <p><span class="textNum1">0/150</span></p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endfor ?>
                                </ul>
                            </div>
                            <!-- 新增步驟btn -->
                            <div class="addbtn">
                                <a type="button" class="darkbutton" id="addintroductionBtn">
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
                        <a for="submit" class="darkbutton" name="submit">
                            <h2><input type="submit" value="發布"></h2>
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </form>
</main>

<section id="footer">
    <footer>
        <p>&copy;2022 BearSu. All rights reserved.</p>
    </footer>
</section>

<?php include __DIR__ . '/kc_parts/scripts.php'; ?>
<!-- 自數偵測字數-->
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
    for (i = 1; i < 10; i++) {
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
            $(".textNum" + i).html(len + '/150');
        });
    }
</script>

<script>
    function onFormData() {
        var formData = readFormData();

    }

    function readFormData() {
        const formData = {};
        formData['title-detail'] = document.getElementById("title-detail").value;

        return formData;
    }
</script>


<script>
    var hasUploadedOne = false; // 已上傳過1張圖片
    var hasUploadedTwo = false; // 已上傳過2張圖片

    //獲取到預覽框
    var imgObjPreview1 = document.getElementById("titleImg");
    var imgObjPreview2 = document.getElementById("stepImg");

    document.getElementById('file').onchange = function() {
        // 若還沒完成2張圖片的上傳
        if (!hasUploadedTwo) {
            //獲取到file的檔案
            var docObj = this;

            //獲取到檔名和型別（非IE，可一次上傳1張或多張）
            if (docObj.files && docObj.files[0]) {
                // 一次上傳了>=2張圖片（只有前兩張會真的上傳上去）
                if (docObj.files.length >= 2) {
                    imgObjPreview1.src = window.URL.createObjectURL(docObj.files[0]);
                    imgObjPreview2.src = window.URL.createObjectURL(docObj.files[1]);
                    hasUploadedTwo = true;
                }
                //一次只上傳了1張照片
                else {
                    // 這是上傳的第一張照片
                    if (!hasUploadedOne) {
                        imgObjPreview1.src = window.URL.createObjectURL(docObj.files[0]);
                        hasUploadedOne = true;
                    }
                    // 這是上傳的第二張照片
                    else {
                        imgObjPreview2.src = window.URL.createObjectURL(docObj.files[0]);
                        hasUploadedTwo = true;
                    }
                }

            }
            //IE（只能一次上傳1張）
            else {
                //使用濾鏡
                docObj.select();
                var imgSrc = document.selection.createRange().text;
                // 這是上傳的第一張照片
                if (!hasUploadedOne) {
                    imgObjPreview1.src = imgSrc;
                    hasUploadedOne = true;
                }
                // 這是上傳的第二張照片
                else {
                    imgObjPreview2.src = imgSrc;
                    hasUploadedTwo = true;
                }
                document.selection.empty();
            }
            return true;
        }
    }
</script>

<!-- add the new list -->
<script>
    $("#addIngredientsBtn").click(function() {
        var htm = "";
        htm += "    <li class='row listHolderLi'>";
        htm += "    <div class='detail-box col-6 col-md-7 p-0'>";
        htm += "    <textarea placeholder='食材' rows='5' maxlength='200' name='recipes[Ingredients][]' class='text-addIngredients' id='ingredients'></textarea>";
        htm += "    </div>";
        htm += "    <div class='detail-box col-3 col-md p-0'>";
        htm += "    <textarea placeholder='份量' rows='5' maxlength='200' name='recipes[servingSize][]' class='text-addIngredients' id='servingSize'></textarea>";
        htm += "    </div>";
        htm += `    <button class='delIngredients' type='button' aria-label='刪除步驟說明' onclick="event.currentTarget.closest('.listHolderLi').remove()">`;
        htm += "    <i class='col col-md-1 fa-solid fa-trash-can'></i>";
        htm += "    </button>";
        htm += "    </li>";

        $('#listHolder').append(htm);
    });

    $("#addintroductionBtn").click(function() {
        var htm = "";
        htm += `    <li class="li_list">`;
        htm += `    <div class="addimg col-12 col-md-4">`;
        htm += `    <div class="upload">`;
        htm += `    <label class="text-center image-preview-wrapper" for="stepImgFile">>`;
        htm += `    <div class="detall">`;
        htm += `    <i class="fa-solid fa-cloud-arrow-up"></i>`;
        htm += `    <h2>點擊新增圖片</h2>`;
        htm += `    <h3>比例建議 4:3</h3>`;
        htm += `    <img id="stepImg" class="w-100" src="" alt="">`;
        htm += `    </div>`;
        htm += `    </label>`;
        htm += `    <input type="file" name="imgFile[]" id="stepImgFile" accept="image/jpeg,image/jpg" multiple>`;
        htm += `    </div>`;
        htm += `    </div>`;
        htm += `    <div class="textarea col-12 col-md">`;
        htm += `    <div class="header">`;
        htm += `    <button class="del-step-instructions" type="button" aria-label="刪除步驟說明" onclick="event.currentTarget.closest('.li_list').remove()">`;
        htm += `    <i class="fa-solid fa-trash-can"></i>`;
        htm += `    </button>`;
        htm += `    </div>`;
        htm += `    <div class="textarea-box">`;
        htm += `    <textarea placeholder="步驟說明(最多150字)" rows="5" maxlength="150" class="step-textarea" name="recipes[step][]" id="introduction-detail"></textarea>`;
        htm += `    <p><span class="textNum1">0/150</span></p>`;
        htm += `    </div>`;
        htm += `    </div>`;
        htm += `    </li>`;


        $('.step-list').append(htm);
    });
</script>
<?php include __DIR__ . '/kc_parts/html-foot.php'; ?>
