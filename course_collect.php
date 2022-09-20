<?php session_start(); ?>
<?php include __DIR__ . '/parts/course_collect_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>

<div class="container member_course_wrap">
    <div class="row member_course_innerwrap">

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

        <div class="col-12 col-md-9 col-lg-9 member_course_cards px-0">
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
            <div class="member_course_card d-md-flex d-lg-flex">
                <div class="member_course_pic d-flex justify-content-center align-items-center">
                    <img src="images/course_01.jpg" alt="">
                </div>
                <div class="member_course_content d-flex flex-column justify-content-between">
                    <div class="title d-flex justify-content-between align-items-center">
                        <div class="left d-flex align-items-center">
                            <h2>地瓜餅 (奶素)</h2> <br>
                        </div>
                        <div class="right d-md-flex d-lg-flex align-items-center d-none d-md-block d-lg-block">
                            <i class="fa-solid fa-bookmark"></i>
                        </div>
                    </div>
                    <div class="describe">
                        <h4>超級食物「地瓜」含有豐富的膳食纖維、β-胡蘿蔔素、鎂、鉀等營養素。是世界衛生組織評選出來「十大最佳蔬菜」的冠軍，地瓜含有脫氫表雄酮，可以預防乳腺癌和結腸癌，地瓜屬於抗性澱粉，不易在小腸吸收利用，高纖、低GI，因此非常適合減重朋友食用，製作成地瓜餅當早餐或點心都很適合，老少咸宜喔!
                        </h4>
                    </div>
                    <div class="price d-flex align-items-center">
                        <h5>課程價格</h5>
                        <h2>$1,200</h2>
                    </div>
                    <div class="time">
                        <h5>開課時間</h5>
                        <h4>10月21日(五) 19:00-21:00<br>
                            11月18日(五) 19:00-21:00</h4>
                    </div>
                    <div class="d-flex justify-content-md-end justify-content-lg-end align-items-center">
                        <a href="course_detail.php" class="btn_wrap mr-md-0 mr-lg-0">
                            <div class="btn p-0">
                                了解更多
                            </div>
                        </a>
                        <i class="fa-solid fa-bookmark d-md-none d-lg-none"></i>
                    </div>
                </div>
            </div>

            <div class="member_course_card d-md-flex d-lg-flex">
                <div class="member_course_pic d-flex justify-content-center align-items-center">
                    <img src="images/course_01.jpg" alt="">
                </div>
                <div class="member_course_content d-flex flex-column justify-content-between">
                    <div class="title d-flex justify-content-between align-items-center">
                        <div class="left d-flex align-items-center">
                            <h2>地瓜餅 (奶素)</h2> <br>
                        </div>
                        <div class="right d-md-flex d-lg-flex align-items-center d-none d-md-block d-lg-block">
                            <i class="fa-solid fa-bookmark"></i>
                        </div>
                    </div>
                    <div class="describe">
                        <h4>超級食物「地瓜」含有豐富的膳食纖維、β-胡蘿蔔素、鎂、鉀等營養素。是世界衛生組織評選出來「十大最佳蔬菜」的冠軍，地瓜含有脫氫表雄酮，可以預防乳腺癌和結腸癌，地瓜屬於抗性澱粉，不易在小腸吸收利用，高纖、低GI，因此非常適合減重朋友食用，製作成地瓜餅當早餐或點心都很適合，老少咸宜喔!
                        </h4>
                    </div>
                    <div class="price d-flex align-items-center">
                        <h5>課程價格</h5>
                        <h2>$1,200</h2>
                    </div>
                    <div class="time">
                        <h5>開課時間</h5>
                        <h4>10月21日(五) 19:00-21:00<br>
                            11月18日(五) 19:00-21:00</h4>
                    </div>
                    <div class="d-flex justify-content-md-end justify-content-lg-end align-items-center">
                        <a href="course_detail.php" class="btn_wrap mr-md-0 mr-lg-0">
                            <div class="btn p-0">
                                了解更多
                            </div>
                        </a>
                        <i class="fa-solid fa-bookmark d-md-none d-lg-none"></i>
                    </div>
                </div>
            </div>

            <div class="member_course_card d-md-flex d-lg-flex">
                <div class="member_course_pic d-flex justify-content-center align-items-center">
                    <img src="images/course_01.jpg" alt="">
                </div>
                <div class="member_course_content d-flex flex-column justify-content-between">
                    <div class="title d-flex justify-content-between align-items-center">
                        <div class="left d-flex align-items-center">
                            <h2>地瓜餅 (奶素)</h2> <br>
                        </div>
                        <div class="right d-md-flex d-lg-flex align-items-center d-none d-md-block d-lg-block">
                            <i class="fa-solid fa-bookmark"></i>
                        </div>
                    </div>
                    <div class="describe">
                        <h4>超級食物「地瓜」含有豐富的膳食纖維、β-胡蘿蔔素、鎂、鉀等營養素。是世界衛生組織評選出來「十大最佳蔬菜」的冠軍，地瓜含有脫氫表雄酮，可以預防乳腺癌和結腸癌，地瓜屬於抗性澱粉，不易在小腸吸收利用，高纖、低GI，因此非常適合減重朋友食用，製作成地瓜餅當早餐或點心都很適合，老少咸宜喔!
                        </h4>
                    </div>
                    <div class="price d-flex align-items-center">
                        <h5>課程價格</h5>
                        <h2>$1,200</h2>
                    </div>
                    <div class="time">
                        <h5>開課時間</h5>
                        <h4>10月21日(五) 19:00-21:00<br>
                            11月18日(五) 19:00-21:00</h4>
                    </div>
                    <div class="d-flex justify-content-md-end justify-content-lg-end align-items-center">
                        <a href="course_detail.php" class="btn_wrap mr-md-0 mr-lg-0">
                            <div class="btn p-0">
                                了解更多
                            </div>
                        </a>
                        <i class="fa-solid fa-bookmark d-md-none d-lg-none"></i>
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

<?php include __DIR__ . '/parts/course_collect_scripts.php'; ?>

<?php include __DIR__ . '/parts/foot.php'; ?>