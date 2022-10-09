<?php
require __DIR__ . '/kc_parts/connect_db.php';
// if (isset($_POST['submit'])) {
//     $file = $_FILES['file'];
//     // print_r($file);

//     $fileName = $_FILES['file']['name'];
//     $fileTmpName = $_FILES['file']['tmp_name'];
//     $fileSize = $_FILES['file']['size'];
//     $fileError = $_FILES['file']['error'];
//     $fileType = $_FILES['file']['type'];

//     $fileExt = explode('.', $fileName);
//     $fileActualExt = strtolower(end($fileExt));

//     $allowed = array('jpg');

//     if (in_array($fileActualExt, $allowed)) {
//         if ($fileError === 0) {
//             if ($fileSize < 1000000) {
//                 $fileNameNew = uniqid('', true) . "." . $fileActualExt;
//                 $fileDestination = 'uploads/' . $fileNameNew;
//                 move_uploaded_file($fileTmpName, $fileDestination);
//                 header("Location: write_recipes.php?uploadsuccess");
//             } else {
//                 echo " 上傳檔案太大 ";
//             }
//         } else {
//             echo " 上傳失敗請重新上傳 ";
//         }
//     } else {
//         echo " 無法上傳此照片 ";
//     }
// }

// 上傳檔將存入此路徑裡的 uploads 資料夾
$upload_dir = "uploads/";
// 上傳檔總數
$total_uploads = 10;
// 上傳檔大小限制，此處限制為400KB
$size_bytes = 400 * 1024;
// 副檔名限制
$limitedext = array(".jpg", ".jpeg");
echo "<h3>上傳結果</h3>";
// 用迴圈讀取上傳欄位資料
for ($i = 0; $i < $total_uploads; $i++) {
    $new_file = $_FILES['file' . $i];
    // 讀取上傳檔名
    $file_name = $new_file['name'];
    // 把檔名中的空格替換成 "_"
    $file_name = str_replace(' ', '_', $file_name);
    // 存入暫存區的檔名
    $file_tmp = $new_file['tmp_name'];
    // 檔案大小
    $file_size = $new_file['size'];
    // 判斷欄位是否指定上傳檔案…
    if (!is_uploaded_file($file_tmp)) {
        // 沒有上傳檔，顯示訊息。
        echo "欄位 $i: 沒有選取上傳檔案。<br />";
    } else {
        // 若有上傳檔，則取出該檔案的副檔名
        $ext = strrchr($file_name, '.');
        // 判斷副檔名是否符合預期
        if (!in_array(strtolower($ext), $limitedext)) {
            // 不符合預期，顯示錯誤訊息。
            echo "欄位 $i: ($file_name) 的檔案副檔名有誤
			（只允許GIF和JPEG檔） <br />";
        } else {
            // 檢查檔案是否太大
            if ($file_size > $size_bytes) {
                echo "欄位 $i: ($file_name) 無法上傳，請檢查檔案是否小於 " . $size_bytes / 1024 .
                    " KB。<br />";
            } else {
                if (move_uploaded_file(
                    $file_tmp,
                    $upload_dir . $file_name
                )) {
                    echo "欄位 $i: ($file_name) 上傳成功！<br />";
                } else {
                    echo "欄位 $i: 無法上傳。<br />";
                }
            }
        }
    }
}


$_POST[] = array(
    'title-detail' => 'value',
    'vegetarianDp' => 'value',
);


// echo json_encode([
//     'recipes' => $_POST['recipes']
// ]);

// exit;
// 
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
                            <img src="" alt="" />
                        </div>
                        <div class="author">
                            <div class="author-img">
                                <img src="./images/mug_shot_04.png" alt="" />
                            </div>
                            <h4>史萊姆</h4>
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

                            <?php for ($i = 1; $i <= 3; $i++) : ?>
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
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2></h2>
                                <p> <?= $_POST['recipes']['step'] ?> </p>
                            </div>
                        </div>
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