<?php
require __DIR__ . '/kc_parts/connect_db.php';
$pageName = '熊齋'; // 頁面名稱

$perPage = 10;  // 每頁最多有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
$lowp = isset($_GET['lowp']) ? intval($_GET['lowp']) : 0;
$highp = isset($_GET['highp']) ? intval($_GET['highp']) : 0;

$qsp = []; // query string parameters

?>
<?php include __DIR__ . '/kc_parts/html-head.php'; ?>
<link rel="stylesheet" href="./css/article_collect.css" />
<?php include __DIR__ . '/kc_parts/navbar.php'; ?>

<main>
    <div class="container">
        <div class="row">
            <section id="avatar-menu" class="avatar col-md-2">
                <div class="avatar-menu-box">
                    <div class="avatar-box">
                        <div class="avatar">
                            <img src="./images/mug_shot_04.png" alt="">
                        </div>
                        <h3>已分享食譜 0</h3>
                    </div>
                    <ul class="membermenulist">
                        <li class="col membermenu">
                            <a href="#0">
                                <h3>會員資料</h3>
                            </a>
                        </li>
                        <li class="col membermenu">
                            <a href="#0">
                                <h3>訂單記錄</h3>
                            </a>
                        </li>
                        <li class="col membermenu">
                            <a href="#0">
                                <h3>我的食譜</h3>
                            </a>
                        </li>
                        <li class="col membermenu">
                            <a href="#0">
                                <h3>收藏</h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>

            <div class="main-container col-md-9 offset-md-1">
                <section id="menu">
                    <div class="collection-nav">
                        <a href="#0" class="lightbutton">
                            <h4>廚藝教室</h4>
                        </a>
                        <a href="#0" class="lightbutton">
                            <h4>節氣食譜</h4>
                        </a>
                        <a href="./recipe_collect.html" class="lightbutton">
                            <h4>食譜</h4>
                        </a>
                        <a href="#0" class="lightbutton">
                            <h4>地圖</h4>
                        </a>
                        <a href="./article_collect.html" class="darkbutton">
                            <h4>文章</h4>
                        </a>
                    </div>
                </section>

                <section id="collection-main">
                    <div class="collection-list">
                        <div class="article-content">
                            <div class="article-img col-md">
                                <img src="./images/article_05_01.jpeg" alt="" />
                            </div>

                            <div class="contant col-md">
                                <div class="title">
                                    <h2>
                                        植物肉有益健康 可望取代動物製
                                    </h2>
                                    <div class="bookmark d-none d-lg-block">
                                        <i class="fa-regular fa-bookmark"></i>
                                    </div>
                                    <p class="d-lg-none">by 史萊姆</p>
                                </div>
                                <p class="d-none d-lg-block">by 史萊姆</p>
                                <h4 class="introduction">
                                    發表在科學雜誌《未來食品》( Future Foods
                                    )上的一項新研究指出，植物肉具有良好的營養成分，且其味道、質地和口感，是參考動物肉複製而成，因此植物肉有機會取代動物製品，提供消費者環境永續的選擇。若未來加工和成分更加創新，增進植物肉營養價值指日可待。
                                    植物肉對健康的益處康」，植物肉僅占 14%，且植物肉和奶製品有助於減重和增肌，並可用於幫助患有特定健康狀況的人，每天食用植物肉可使髖部骨折風險降低49%。
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

                        <div class="article-content">
                            <div class="article-img col-md">
                                <img src="./images/article_05_01.jpeg" alt="" />
                            </div>

                            <div class="contant col-md">
                                <div class="title">
                                    <h2>
                                        植物肉有益健康 可望取代動物製
                                    </h2>
                                    <div class="bookmark d-none d-lg-block">
                                        <i class="fa-regular fa-bookmark"></i>
                                    </div>
                                    <p class="d-lg-none">by 史萊姆</p>
                                </div>
                                <p class="d-none d-lg-block">by 史萊姆</p>
                                <h4 class="introduction">
                                    發表在科學雜誌《未來食品》( Future Foods
                                    )上的一項新研究指出，植物肉具有良好的營養成分，且其味道、質地和口感，是參考動物肉複製而成，因此植物肉有機會取代動物製品，提供消費者環境永續的選擇。若未來加工和成分更加創新，增進植物肉營養價值指日可待。
                                    植物肉對健康的益處康」，植物肉僅占 14%，且植物肉和奶製品有助於減重和增肌，並可用於幫助患有特定健康狀況的人，每天食用植物肉可使髖部骨折風險降低49%。
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

                        <div class="article-content">
                            <div class="article-img col-md">
                                <img src="./images/article_05_01.jpeg" alt="" />
                            </div>

                            <div class="contant col-md">
                                <div class="title">
                                    <h2>
                                        植物肉有益健康 可望取代動物製
                                    </h2>
                                    <div class="bookmark d-none d-lg-block">
                                        <i class="fa-regular fa-bookmark"></i>
                                    </div>
                                    <p class="d-lg-none">by 史萊姆</p>
                                </div>
                                <p class="d-none d-lg-block">by 史萊姆</p>
                                <h4 class="introduction">
                                    發表在科學雜誌《未來食品》( Future Foods
                                    )上的一項新研究指出，植物肉具有良好的營養成分，且其味道、質地和口感，是參考動物肉複製而成，因此植物肉有機會取代動物製品，提供消費者環境永續的選擇。若未來加工和成分更加創新，增進植物肉營養價值指日可待。
                                    植物肉對健康的益處康」，植物肉僅占 14%，且植物肉和奶製品有助於減重和增肌，並可用於幫助患有特定健康狀況的人，每天食用植物肉可使髖部骨折風險降低49%。
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

                        <div class="article-content">
                            <div class="article-img col-md">
                                <img src="./images/article_05_01.jpeg" alt="" />
                            </div>

                            <div class="contant col-md">
                                <div class="title">
                                    <h2>
                                        植物肉有益健康 可望取代動物製
                                    </h2>
                                    <div class="bookmark d-none d-lg-block">
                                        <i class="fa-regular fa-bookmark"></i>
                                    </div>
                                    <p class="d-lg-none">by 史萊姆</p>
                                </div>
                                <p class="d-none d-lg-block">by 史萊姆</p>
                                <h4 class="introduction">
                                    發表在科學雜誌《未來食品》( Future Foods
                                    )上的一項新研究指出，植物肉具有良好的營養成分，且其味道、質地和口感，是參考動物肉複製而成，因此植物肉有機會取代動物製品，提供消費者環境永續的選擇。若未來加工和成分更加創新，增進植物肉營養價值指日可待。
                                    植物肉對健康的益處康」，植物肉僅占 14%，且植物肉和奶製品有助於減重和增肌，並可用於幫助患有特定健康狀況的人，每天食用植物肉可使髖部骨折風險降低49%。
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

                        <div class="article-content">
                            <div class="article-img col-md">
                                <img src="./images/article_05_01.jpeg" alt="" />
                            </div>

                            <div class="contant col-md">
                                <div class="detall">
                                    <div class="title">
                                        <h2>
                                            植物肉有益健康 可望取代動物製
                                        </h2>
                                        <div class="bookmark d-none d-lg-block">
                                            <i class="fa-regular fa-bookmark"></i>
                                        </div>
                                        <p class="d-lg-none">by 史萊姆</p>
                                    </div>
                                    <p class="d-none d-lg-block">by 史萊姆</p>
                                    <h4 class="introduction">
                                        發表在科學雜誌《未來食品》( Future Foods
                                        )上的一項新研究指出，植物肉具有良好的營養成分，且其味道、質地和口感，是參考動物肉複製而成，因此植物肉有機會取代動物製品，提供消費者環境永續的選擇。若未來加工和成分更加創新，增進植物肉營養價值指日可待。
                                        植物肉對健康的益處康」，植物肉僅占 14%，且植物肉和奶製品有助於減重和增肌，並可用於幫助患有特定健康狀況的人，每天食用植物肉可使髖部骨折風險降低49%。
                                    </h4>
                                </div>
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
                    </div>
                </section>
            </div>
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