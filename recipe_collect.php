<?php
require __DIR__ . '/kc_parts/connect_db.php';
?>

<?php include __DIR__ . '/kc_parts/html-head.php'; ?>
<link rel="stylesheet" href="./css/recipe_collect.css" />
<?php include __DIR__ . '/kc_parts/navbar.php'; ?>

<main>
    <div class="container">
        <div class="row">
            
            <section id="avatar-menu" class="col-md-2">
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
            </section>

            <div class="main-container col-md-9 offset-md-1">
                <section id="collection-menu">
                    <div class="collection-nav">
                        <a href="#0" class="lightbutton">
                            <h4>廚藝教室</h4>
                        </a>
                        <a href="#0" class="lightbutton">
                            <h4>節氣食譜</h4>
                        </a>
                        <a href="./recipe_collect.html" class="darkbutton">
                            <h4>食譜</h4>
                        </a>
                        <a href="#0" class="lightbutton">
                            <h4>地圖</h4>
                        </a>
                        <a href="./article_collect.html" class="lightbutton">
                            <h4>文章</h4>
                        </a>
                    </div>
                </section>

                <section id="collection-main">
                    <div class="collection-list">
                        <div class="collection-content">
                            <div class="collection-img col-md">
                                <img src="./images/recipe-01.png" alt="" />
                            </div>
                            <div class="contant col-md">
                                <div class="title">
                                    <h2>木耳炒甜豆 (五辛素)</h2>
                                    <p class="d-lg-none">by 史萊姆</p>
                                    <div class="time-bookmark">
                                        <div class="time">
                                            <i class="fa-solid fa-clock"></i>
                                            <h4>10分</h4>
                                        </div>
                                        <div class="bookmark d-none d-lg-block">
                                            <i class="fa-regular fa-bookmark"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="d-none d-lg-block">by 史萊姆</p>
                                <h4 class="introduction">
                                    清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。
                                </h4>

                                <h4 class="ingredients">
                                    食材：青花椰菜、白花椰菜、品牌香蒜粒、雙色焗烤乳酪絲、海鹽、橄欖油、品牌蘿勒葉
                                </h4>

                                <div class="recipe-btn">
                                    <a class="darkbutton" href="#0">
                                        <h4>了解更多</h4>
                                    </a>
                                    <div class="bookmark d-lg-none">
                                        <i class="fa-regular fa-bookmark"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="collection-content">
                            <div class="collection-img col-md">
                                <img src="./images/recipe-01.png" alt="" />
                            </div>
                            <div class="contant col-md">
                                <div class="title">
                                    <h2>木耳炒甜豆 (五辛素)</h2>
                                    <p class="d-lg-none">by 史萊姆</p>
                                    <div class="time-bookmark">
                                        <div class="time">
                                            <i class="fa-solid fa-clock"></i>
                                            <h4>10分</h4>
                                        </div>
                                        <div class="bookmark d-none d-lg-block">
                                            <i class="fa-regular fa-bookmark"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="d-none d-lg-block">by 史萊姆</p>
                                <h4 class="introduction">
                                    清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。
                                </h4>

                                <h4 class="ingredients">
                                    食材：青花椰菜、白花椰菜、品牌香蒜粒、雙色焗烤乳酪絲、海鹽、橄欖油、品牌蘿勒葉
                                </h4>

                                <div class="recipe-btn">
                                    <a class="darkbutton" href="#0">
                                        <h4>了解更多</h4>
                                    </a>
                                    <div class="bookmark d-lg-none">
                                        <i class="fa-regular fa-bookmark"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="collection-content">
                            <div class="collection-img col-md">
                                <img src="./images/recipe-01.png" alt="" />
                            </div>
                            <div class="contant col-md">
                                <div class="title">
                                    <h2>木耳炒甜豆 (五辛素)</h2>
                                    <p class="d-lg-none">by 史萊姆</p>
                                    <div class="time-bookmark">
                                        <div class="time">
                                            <i class="fa-solid fa-clock"></i>
                                            <h4>10分</h4>
                                        </div>
                                        <div class="bookmark d-none d-lg-block">
                                            <i class="fa-regular fa-bookmark"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="d-none d-lg-block">by 史萊姆</p>
                                <h4 class="introduction">
                                    清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。
                                </h4>

                                <h4 class="ingredients">
                                    食材：青花椰菜、白花椰菜、品牌香蒜粒、雙色焗烤乳酪絲、海鹽、橄欖油、品牌蘿勒葉
                                </h4>

                                <div class="recipe-btn">
                                    <a class="darkbutton" href="#0">
                                        <h4>了解更多</h4>
                                    </a>
                                    <div class="bookmark d-lg-none">
                                        <i class="fa-regular fa-bookmark"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="collection-content">
                            <div class="collection-img col-md">
                                <img src="./images/recipe-01.png" alt="" />
                            </div>
                            <div class="contant col-md">
                                <div class="title">
                                    <h2>木耳炒甜豆 (五辛素)</h2>
                                    <p class="d-lg-none">by 史萊姆</p>
                                    <div class="time-bookmark">
                                        <div class="time">
                                            <i class="fa-solid fa-clock"></i>
                                            <h4>10分</h4>
                                        </div>
                                        <div class="bookmark d-none d-lg-block">
                                            <i class="fa-regular fa-bookmark"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="d-none d-lg-block">by 史萊姆</p>
                                <h4 class="introduction">
                                    清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。
                                </h4>

                                <h4 class="ingredients">
                                    食材：青花椰菜、白花椰菜、品牌香蒜粒、雙色焗烤乳酪絲、海鹽、橄欖油、品牌蘿勒葉
                                </h4>

                                <div class="recipe-btn">
                                    <a class="darkbutton" href="#0">
                                        <h4>了解更多</h4>
                                    </a>
                                    <div class="bookmark d-lg-none">
                                        <i class="fa-regular fa-bookmark"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="collection-content">
                            <div class="collection-img col-md">
                                <img src="./images/recipe-01.png" alt="" />
                            </div>
                            <div class="contant col-md">
                                <div class="title">
                                    <h2>木耳炒甜豆 (五辛素)</h2>
                                    <p class="d-lg-none">by 史萊姆</p>
                                    <div class="time-bookmark">
                                        <div class="time">
                                            <i class="fa-solid fa-clock"></i>
                                            <h4>10分</h4>
                                        </div>
                                        <div class="bookmark d-none d-lg-block">
                                            <i class="fa-regular fa-bookmark"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="d-none d-lg-block">by 史萊姆</p>
                                <h4 class="introduction">
                                    清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。
                                </h4>

                                <h4 class="ingredients">
                                    食材：青花椰菜、白花椰菜、品牌香蒜粒、雙色焗烤乳酪絲、海鹽、橄欖油、品牌蘿勒葉
                                </h4>

                                <div class="recipe-btn">
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