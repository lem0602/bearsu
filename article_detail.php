 <?php
require __DIR__ . '/kc_parts/connect_db.php';
// pageName = '';
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

$sql = sprintf(
    "SELECT r.*
FROM article AS r
WHERE r.sid=$sid  "
);

$rows = $pdo->query("SELECT r.* FROM article AS r WHERE r.sid=$sid  ")->fetchAll();

// echo json_encode([
//     'rows' => $rows,
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
                <?php foreach ($rows as $c) :?>
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
                        <div class="img">
                            <img class="w-100" src="./images/article/<?= $c['img']?>.jpeg">
                        </div>
                        <h4>
                        <?= $c['introduction']?>
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
                                <p><span class="textNum">0/100</span></p>
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
    $(".editDetail").on('input propertychange', function() {

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
