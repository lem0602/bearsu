<?php
require __DIR__ . '/kc_parts/connect_db.php';
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
                <div class="veggie-Category">
                    <!-- 素食分類 dropdown -->
                    <div class="custom-select">
                        <select>
                            <option value="0">
                                <h5>素食分類</h5>
                            </option>
                            <option value="1">
                                <h5>五辛素</h5>
                            </option>
                            <option value="2">
                                <H5>蛋素</H5>
                            </option>
                            <option value="3">
                                <H5>全素</H5>
                            </option>
                            <option value="4">
                                <H5>奶素</H5>
                            </option>
                            <option value="5">
                                <H5>蛋奶素</H5>
                            </option>
                        </select>
                    </div>
                    <!-- dropdown end -->

                    <!-- 烹飪時間 dropdown -->
                    <div class="custom-select">
                        <select>
                            <option value="0">
                                <h5>烹飪時間</h5>
                            </option>
                            <option value="1">
                                <h5>15</h5>
                            </option>
                            <option value="2">
                                <H5>30</H5>
                            </option>
                            <option value="3">
                                <H5>45</H5>
                            </option>
                            <option value="4">
                                <H5>60</H5>
                            </option>
                            <option value="5">
                                <H5>120</H5>
                            </option>
                        </select>
                    </div>
                    <!-- dropdown end -->

                    <a href="./write_recipes.html" class="darkbutton">
                        <i class="fa-solid fa-pencil"></i>
                        <h5>寫食譜</h5>
                    </a>
                </div>
            </section>

            <!-- 內容資訊 -->
            <section id="recipe-main">
                <div class="recipe-list">

                    <div class="recipe-content">
                        <div class="recipe-img">
                            <img src="./images/recipe-01.png" alt="" />
                        </div>
                        <div class="contant">
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
                                適合全家大小食用,唯痛風患者要避食黑木耳。清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。
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

                    <div class="recipe-content">
                        <div class="recipe-img">
                            <img src="./images/recipe-01.png" alt="" />
                        </div>
                        <div class="contant">
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
                                適合全家大小食用,唯痛風患者要避食黑木耳。清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。
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

                    <div class="recipe-content">
                        <div class="recipe-img">
                            <img src="./images/recipe-01.png" alt="" />
                        </div>
                        <div class="contant">
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
                                適合全家大小食用,唯痛風患者要避食黑木耳。清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。
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

                    <div class="recipe-content">
                        <div class="recipe-img">
                            <img src="./images/recipe-01.png" alt="" />
                        </div>
                        <div class="contant">
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
                                適合全家大小食用,唯痛風患者要避食黑木耳。清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。
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

                    <div class="recipe-content">
                        <div class="recipe-img">
                            <img src="./images/recipe-01.png" alt="" />
                        </div>
                        <div class="contant">
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
                                適合全家大小食用,唯痛風患者要避食黑木耳。清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。清甜的什錦蔬菜，吃得到滿滿營養！一道菜包含多樣蔬菜和口感，豐富的色彩讓便當看起來更美味可口讓人食慾大開。適合全家大小食用,唯痛風患者要避食黑木耳。
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
<?php include __DIR__ . '/kc_parts/html-foot.php'; ?>