<?php
require __DIR__ . '/kc_parts/connect_db.php';
/**
 * 表單接收頁面
 */

// 網頁編碼宣告（防止產生亂碼）
header('content-type:text/html;charset=utf-8');
// 封裝好的單一及多檔案上傳 function
include_once 'upload.func.php';
// 重新建構上傳檔案 array 格式
$files = getFiles();

// 依上傳檔案數執行
foreach ($files as $fileInfo) {
    // 呼叫封裝好的 function
    $res = uploadFile($fileInfo);

    // 顯示檔案上傳訊息
    // echo $res['mes'] . '<br>';

    // 上傳成功，將實際儲存檔名存入 array（以便存入資料庫）
    if (!empty($res['dest'])) {
        $uploadFiles[] = $res['dest'];
    }
}


$ingredientscount = count($_POST['recipes']['Ingredients']);
$stepcount = count($_POST['recipes']['step']);

// print_r($ingredientscount);


// $_POST[] = array(
//     'title-detail' => 'value',
//     'vegetarianDp' => 'value',
// );


// echo json_encode([
//     'uploadFiles' => $_POST['recipes']
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

                <div class=" recipe-detail-main">
                    <div class="title">
                        <h1>
                            <?= $_POST['recipes']['title'] ?> ( <?= $_POST['recipes']['vegetarian'] ?> )
                        </h1>
                        <div class="bookmark">
                            <i class="fa-regular fa-bookmark"></i>
                        </div>
                    </div>
                    <div class="img-author">
                        <div class="col-md-10 main-img">
                            <img src="<?= $uploadFiles[0] ?>" alt="" />
                        </div>
                        <div class="author">
                            <div class="author-img">
                                <img src="./images/mascot_12.png" alt="" />
                            </div>
                            <h4>熊齋</h4>
                        </div>
                    </div>
                    <div class="txt">
                        <h3><?= $_POST['recipes']['introduction'] ?></h3>
                    </div>
                </div>


                <div class="recipe-detail-ingredients">
                    <div class="ingredients-box">
                        <div class="quantity-time">
                            <div class="col quantity">
                                <h3>份量</h3>
                                <h3><?= $_POST['recipes']['ingredientsSize'] ?> 人份</h3>
                            </div>
                            <div class="col time">
                                <h3>時間</h3>
                                <h3><?= $_POST['recipes']['ingredientsTime'] ?>分鐘</h3>
                            </div>
                        </div>
                        <div class="ingredients-group">
                            <div class="col-12 title">
                                <h3>食材</h3>
                            </div>

                            <?php for ($i = 1 ; $i <= $ingredientscount ; $i++) : ?>
                                <div class="col-12 col-lg-6 ingredients">
                                    <h4><?= $_POST['recipes']['Ingredients'][$i] ?></h4>
                                    <h4><?= $_POST['recipes']['servingSize'][$i] ?></h4> 
                                </div>
                            <?php endfor ?>
                        </div>
                    </div>
                </div>

                <div class="recipe-detail-step">
                    <div class="step-box">
                        <?php for ($i=1 ; $i <= $stepcount ; $i++) :?>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="<?= $uploadFiles[$i]?>" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2></h2>
                                <p> <?= $_POST['recipes']['step'][$i-1] ?> </p>
                            </div>
                        </div>
                        <?php endfor ?>
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
                                <img src="./images/mascot_12.png" alt="" />
                            </div>
                            <div class="textareabox">
                                <textarea placeholder="加入討論(最多可輸入100字)" rows="3" maxlength="100" class="editdetail" id="detail2"></textarea>
                                <p><span class="textNum">0/100</span></p>
                            </div>
                        </div>
                        <div class="button-box">
                            <a class="darkbutton">
                                <h5>發表留言</h5>
                            </a>
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
    $(".editdetail").on('input propertychange', function() {

        //獲取輸入內容
        var userDesc = $(this).val();

        //判斷字數
        var len;
        if (userDesc) {
            len = checkStrLengths(userDesc, 100);
        } else {
            len = 0
        }

        //顯示字數
        $(".textNum").html(len + '/100');
    });
</script>
<?php include __DIR__ . '/kc_parts/html-foot.php'; ?>