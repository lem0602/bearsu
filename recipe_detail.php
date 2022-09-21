<?php
require __DIR__ . '/kc_parts/connect_db.php';
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
                        <h1>木耳炒甜豆 (五辛素)</h1>
                        <div class="bookmark">
                            <i class="fa-regular fa-bookmark"></i>
                        </div>
                    </div>
                    <div class="img-author">
                        <div class="col-md-10 main-img">
                            <img src="./images/recipe_01/recipe_01.jpg" alt="" />
                        </div>
                        <div class="author">
                            <div class="author-img">
                                <img src="./images/mug_shot_04.png" alt="" />
                            </div>
                            <h4>史萊姆</h4>
                        </div>
                    </div>
                    <div class="txt">
                        <h3>
                            清甜的什錦蔬菜，吃得到滿滿營養！
                            一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。
                            適合全家大小食用,唯痛風患者要避食黑木耳。
                        </h3>
                    </div>
                </div>

                <div class="recipe-detail-ingredients">
                    <div class="ingredients-box">
                        <div class="quantity-time">
                            <div class="col quantity">
                                <h3>份量</h3>
                                <h3>3 人份</h3>
                            </div>
                            <div class="col time">
                                <h3>時間</h3>
                                <h3>10分鐘</h3>
                            </div>
                        </div>
                        <div class="ingredients-group">
                            <div class="col-12 title">
                                <h3>食材</h3>
                            </div>
                            <div class="col-12 col-lg-6 ingredients">
                                <h4>甜豌豆/荷蘭豆</h4>
                                <h4>一包</h4>
                            </div>
                            <div class="col-12 col-lg-6 ingredients">
                                <h4>胡蘿蔔</h4>
                                <h4>5片</h4>
                            </div>
                            <div class="col-12 col-lg-6 ingredients">
                                <h4>蒜頭</h4>
                                <h4>4瓣</h4>
                            </div>
                            <div class="col-12 col-lg-6 ingredients">
                                <h4>鹽</h4>
                                <h4>適量</h4>
                            </div>
                            <div class="col-12 col-lg-6 ingredients">
                                <h4>香菇素蠔油</h4>
                                <h4>1/2茶匙</h4>
                            </div>
                            <div class="col-12 col-lg-6 ingredients">
                                <h4>白胡椒粉</h4>
                                <h4>少許</h4>
                            </div>
                            <div class="col-12 col-lg-6 ingredients">
                                <h4>太白粉</h4>
                                <h4>3/4茶匙</h4>
                            </div>
                            <div class="col-12 col-lg-6 ingredients">
                                <h4>乾木耳/鮮木耳</h4>
                                <h4>3片</h4>
                            </div>
                            <div class="col-12 col-lg-6 ingredients">
                                <h4>杏鮑菇</h4>
                                <h4>半根</h4>
                            </div>
                            <div class="col-12 col-lg-6 ingredients">
                                <h4>辣椒</h4>
                                <h4>4片</h4>
                            </div>
                            <div class="col-12 col-lg-6 ingredients">
                                <h4>熱水</h4>
                                <h4>1/2米杯</h4>
                            </div>
                            <div class="col-12 col-lg-6 ingredients">
                                <h4>香菇粉</h4>
                                <h4>少許</h4>
                            </div>
                            <div class="col-12 col-lg-6 ingredients">
                                <h4>香油</h4>
                                <h4>少許</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="recipe-detail-step">
                    <div class="step-box">
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_01.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>1</h2>
                                <p>甜豆剝去纖維</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_02.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>2</h2>
                                <p>木耳泡發後切小塊</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_03.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>3</h2>
                                <p>胡蘿蔔、杏鮑菇切薄片，太白粉水調勻</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_04.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>4</h2>
                                <p>熱鍋，蒜頭、胡蘿蔔、杏鮑菇依序爆香</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_05.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>5</h2>
                                <p>木耳下鍋拌炒</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_06.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>6</h2>
                                <p>甜豆下鍋拌炒</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_07.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>7</h2>
                                <p>嗆入熱水、素蠔油，小火燜煮3~5分鐘</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_08.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>8</h2>
                                <p>
                                    下辣椒、鹽、胡椒粉、香菇粉調味，加適量熱水燒開
                                </p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="col-md-5 step-img">
                                <img src="./images/recipe_01/recipe_01_09.jpg" alt="" />
                            </div>
                            <div class="step-txt">
                                <h2>9</h2>
                                <p>勾薄芡，撒上香油</p>
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
                                <img src="./images/mug_shot_04.png" alt="" />
                            </div>
                            <div class="textareabox">
                                <textarea placeholder="加入討論(最多可輸入100字)" rows="3" maxlength="100" class="editdetail" id="detail2"></textarea>
                                <p>
                                    <span id="detail2-num">0</span>/<span>100</span>
                                </p>
                            </div>
                        </div>
                        <div class="button-box">
                            <a class="darkbutton">
                                <h5>發表留言</h5>
                            </a>
                        </div>
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