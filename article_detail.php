<?php
require __DIR__ . '/kc_parts/connect_db.php';
// pageName = '';


if(! isset($_SESSION['detail'])){
    $_SESSION['detail'] = [];
}

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

if(! empty($sid)) {

    if(! empty($_SESSION['cart'][$sid])){

    } else {
        // 新增
        // TODO: 檢查資料表是不是有這個商品

        $row = $pdo->query("SELECT * FROM article WHERE sid=$sid")->fetch();

        if(! empty($row)){
            $_SESSION['detail'][$sid] = $row;
        }
    }
}

// echo json_encode($_SESSION['detail']);

// echo json_encode([
//     'row' => $row,
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
                <?php foreach ($_SESSION['detail'] as $c) :?>
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
