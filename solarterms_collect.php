<?php session_start(); ?>
<?php include __DIR__ . '/parts/solarterms_collect_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>

<div class="container member_course_wrap">
    <div class="row member_recipe_innerwrap">

        <div class="member_menu_wrap col-12 col-md-2 col-lg-2 px-0">
            <div class="member_menu_innrwrap">
                <div class="mug_shot d-flex justify-content-center">
                    <img src="images/mug_shot_01.png" alt="">
                </div>
                <h3>已分享食譜0</h3>
                <div class="member_menu d-flex align-items-center d-md-block d-lg-block">
                    <a href="#">
                        <h3 class="d-none d-md-block d-lg-block">會員資料</h3>
                    </a>
                    <a href="#">
                        <h3 class="d-none d-md-block d-lg-block">訂單記錄</h3>
                    </a>
                    <a href="#">
                        <h3 class="d-none d-md-block d-lg-block">我的食譜</h3>
                    </a>
                    <a href="#">
                        <h3 class="d-none d-md-block d-lg-block collection">收藏</h3>
                    </a>
                    <a href="#" class="w-100">
                        <h3 class="d-block d-md-none d-lg-none">會員<br>資料</h3>
                    </a>
                    <a href="#" class="w-100">
                        <h3 class="d-block d-md-none d-lg-none">訂單<br>記錄</h3>
                    </a>
                    <a href="#" class="w-100">
                        <h3 class="d-block d-md-none d-lg-none">我的<br>食譜</h3>
                    </a>
                    <a href="#" class="w-100">
                        <h3 class="d-block d-md-none d-lg-none collection">收藏</h3>
                    </a>
                </div>
            </div>
        </div>

        <div class="d-none d-md-block col-md-1 d-lg-block col-lg-1"></div>

        <div class="col-12 col-md-9 col-lg-9 member_recipe_cards px-0">
            <div class="collection_list d-flex justify-content-between">
                <a href="course_collect.php">
                    <h1 class="l_course">廚藝教室</h1>
                </a>
                <a href="solarterms_collect.php">
                    <h1 class="l_solarterms">節氣食補</h1>
                </a>
                <a href="member_recipe.php">
                    <h1 class="l_recipe">食譜</h1>
                </a>
                <a href="">
                    <h1 class="l_map">地圖</h1>
                </a>
                <a href="">
                    <h1 class="l_article">文章</h1>
                </a>
            </div>
            <div class="member_recipe_card d-md-flex d-lg-flex">
                <div class="recipe_pic d-flex justify-content-center align-items-center">
                    <img src="images/solarterms_01.jpg" alt="">
                </div>
                <div class="recipe_content d-flex flex-column justify-content-between">
                    <div class="title d-flex justify-content-between align-items-center">
                        <div class="left d-flex align-items-center">
                            <h2>焗烤雙花 (全素)</h2> <br>
                        </div>
                        <div class="right d-flex align-items-center">
                            <i class="fa-solid fa-clock d-none d-md-block d-lg-block"></i>
                            <p class="mb-0 pl-2 d-none d-md-block d-lg-block">10分</p>
                            <i class="fa-solid fa-bookmark pl-4 d-none d-md-block d-lg-block"></i>
                        </div>
                    </div>
                    <div class="author">
                        <p>by 熊齋</p>
                    </div>
                    <div class="mobile_recipe_time d-flex d-block d-md-none d-lg-none">
                        <i class="fa-solid fa-clock d-block d-md-none d-lg-none"></i>
                        <p class="mb-0 pl-2 d-block d-md-none d-lg-none">10分</p>
                    </div>
                    <div class="describe">
                        <h3>花椰菜豐富的膳食纖維有助於促進腸胃蠕動，促進排便順暢、代謝體內的老廢物質。尤其綠花椰菜是十字花科的蔬菜，有強大的抗氧化成分，含有維生素A、B群、C、E，以及鉀、硒、槲皮素、類胡蘿蔔素、硫代配醣體、蘿蔔硫素等，可以強化視力、預防高血壓、提升免疫力、抗氧化，同時減少胃炎及罹患癌症的機率。
                            家人或小孩不太敢吃花椰菜嗎？ 可試試這道焗烤雙花～若本來就喜歡吃花椰菜，那就更要試試這道菜....</h3>
                        <h4>食材：青花椰菜、白花椰菜、品牌香蒜粒、雙色焗烤乳酪絲、海鹽、橄欖油、品牌蘿勒葉</h4>
                    </div>
                    <div class="btn_wrap d-flex justify-content-md-end justify-content-lg-end p-0">
                        <div class="btn">
                            <a href="solarterms_detail.php">了解更多</a>
                        </div>
                        <i class="fa-solid fa-bookmark pl-4 d-flex align-items-center d-md-none d-lg-none"></i>
                    </div>
                </div>
            </div>

            <div class="member_recipe_card d-md-flex d-lg-flex">
                <div class="recipe_pic d-flex justify-content-center align-items-center">
                    <img src="images/solarterms_01.jpg" alt="">
                </div>
                <div class="recipe_content d-flex flex-column justify-content-between">
                    <div class="title d-flex justify-content-between align-items-center">
                        <div class="left d-flex align-items-center">
                            <h2>焗烤雙花 (全素)</h2> <br>
                        </div>
                        <div class="right d-flex align-items-center">
                            <i class="fa-solid fa-clock d-none d-md-block d-lg-block"></i>
                            <p class="mb-0 pl-2 d-none d-md-block d-lg-block">10分</p>
                            <i class="fa-solid fa-bookmark pl-4 d-none d-md-block d-lg-block"></i>
                        </div>
                    </div>
                    <div class="author">
                        <p>by 熊齋</p>
                    </div>
                    <div class="mobile_recipe_time d-flex d-block d-md-none d-lg-none">
                        <i class="fa-solid fa-clock d-block d-md-none d-lg-none"></i>
                        <p class="mb-0 pl-2 d-block d-md-none d-lg-none">10分</p>
                    </div>
                    <div class="describe">
                        <h3>花椰菜豐富的膳食纖維有助於促進腸胃蠕動，促進排便順暢、代謝體內的老廢物質。尤其綠花椰菜是十字花科的蔬菜，有強大的抗氧化成分，含有維生素A、B群、C、E，以及鉀、硒、槲皮素、類胡蘿蔔素、硫代配醣體、蘿蔔硫素等，可以強化視力、預防高血壓、提升免疫力、抗氧化，同時減少胃炎及罹患癌症的機率。
                            家人或小孩不太敢吃花椰菜嗎？ 可試試這道焗烤雙花～若本來就喜歡吃花椰菜，那就更要試試這道菜....</h3>
                        <h4>食材：青花椰菜、白花椰菜、品牌香蒜粒、雙色焗烤乳酪絲、海鹽、橄欖油、品牌蘿勒葉</h4>
                    </div>
                    <div class="btn_wrap d-flex justify-content-md-end justify-content-lg-end p-0">
                        <div class="btn">
                            <a href="solarterms_detail.php">了解更多</a>
                        </div>
                        <i class="fa-solid fa-bookmark pl-4 d-flex align-items-center d-md-none d-lg-none"></i>
                    </div>
                </div>
            </div>

            <div class="member_recipe_card d-md-flex d-lg-flex">
                <div class="recipe_pic d-flex justify-content-center align-items-center">
                    <img src="images/solarterms_01.jpg" alt="">
                </div>
                <div class="recipe_content d-flex flex-column justify-content-between">
                    <div class="title d-flex justify-content-between align-items-center">
                        <div class="left d-flex align-items-center">
                            <h2>焗烤雙花 (全素)</h2> <br>
                        </div>
                        <div class="right d-flex align-items-center">
                            <i class="fa-solid fa-clock d-none d-md-block d-lg-block"></i>
                            <p class="mb-0 pl-2 d-none d-md-block d-lg-block">10分</p>
                            <i class="fa-solid fa-bookmark pl-4 d-none d-md-block d-lg-block"></i>
                        </div>
                    </div>
                    <div class="author">
                        <p>by 熊齋</p>
                    </div>
                    <div class="mobile_recipe_time d-flex d-block d-md-none d-lg-none">
                        <i class="fa-solid fa-clock d-block d-md-none d-lg-none"></i>
                        <p class="mb-0 pl-2 d-block d-md-none d-lg-none">10分</p>
                    </div>
                    <div class="describe">
                        <h3>花椰菜豐富的膳食纖維有助於促進腸胃蠕動，促進排便順暢、代謝體內的老廢物質。尤其綠花椰菜是十字花科的蔬菜，有強大的抗氧化成分，含有維生素A、B群、C、E，以及鉀、硒、槲皮素、類胡蘿蔔素、硫代配醣體、蘿蔔硫素等，可以強化視力、預防高血壓、提升免疫力、抗氧化，同時減少胃炎及罹患癌症的機率。
                            家人或小孩不太敢吃花椰菜嗎？ 可試試這道焗烤雙花～若本來就喜歡吃花椰菜，那就更要試試這道菜....</h3>
                        <h4>食材：青花椰菜、白花椰菜、品牌香蒜粒、雙色焗烤乳酪絲、海鹽、橄欖油、品牌蘿勒葉</h4>
                    </div>
                    <div class="btn_wrap d-flex justify-content-md-end justify-content-lg-end p-0">
                        <div class="btn">
                            <a href="solarterms_detail.php">了解更多</a>
                        </div>
                        <i class="fa-solid fa-bookmark pl-4 d-flex align-items-center d-md-none d-lg-none"></i>
                    </div>
                </div>
            </div>

            <div class="page d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="fa-solid fa-angle-left" aria-hidden="true"></i></span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item d-none d-md-block d-lg-block"><a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item d-none d-md-block d-lg-block"><a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item d-none d-md-block d-lg-block"><a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item d-none d-md-block d-lg-block"><a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="fa-solid fa-angle-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>



    </div>
</div>

<footer>
    <p>Copyright © 2022 BearSu. All rights reserved.</p>
</footer>

<?php include __DIR__ . '/parts/solarterms_collect_scripts.php'; ?>

<?php include __DIR__ . '/parts/foot.php'; ?>