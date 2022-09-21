<?php session_start(); ?>
<?php include __DIR__ . '/parts/course_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>

<div class="container">
        <div class="row">
            <div class="col-12 course_title d-md-flex d-lg-flex justify-content-center align-items-center d-none">
                <h1>廚藝教室</h1>
                <img src="images/mascot_01.gif" alt="">
            </div>
            <!-- ------------------mobile start----------- -->
            <div
                class="col-12 mobile_course_title  justify-content-center align-items-center d-block d-md-none d-lg-none text-center">
                <img src="images/mascot_01.gif" alt="">
                <h1>廚藝教室</h1>
            </div>

            <div class="col-12 d-flex justify-content-end mobile_course_filter_wrap d-block d-md-none d-lg-none">
                <button type="button" class="btn btn-primary mobile_course_filter  d-block d-md-none d-lg-none"
                    data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa-solid fa-filter"></i></button>

                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
                    aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="course_menu d-flex justify-content-center align-items-center">
                                <div class="course_menu_wrap">
                                    <h2>篩選條件</h2>
                                    <select class="course_filter filter">
                                        <option>推薦排序</option>
                                        <option>開課日期</option>
                                        <option>價格由低至高</option>
                                        <option>價格由高至低</option>
                                    </select>
                                    <select class="date_filter filter">
                                        <option>選擇課程日期</option>
                                        <option>10月21日(五) 19:00-21:00</option>
                                        <option>11月18日(五) 19:00-21:00</option>
                                        <option>10月22日(六) 10:30-12:30</option>
                                        <option>11月19日(六) 10:30-12:30</option>
                                    </select>
                                    <p>素食分類</p>
                                    <input type="radio" name="su" class="radio" id="allsu_m">
                                    <label for="allsu_m">全素</label><br>
                                    <input type="radio" name="su" class="radio" id="eggsu_m">
                                    <label for="eggsu_m">蛋素</label><br>
                                    <input type="radio" name="su" class="radio" id="fivesu_m">
                                    <label for="fivesu_m">五辛素</label><br>
                                    <input type="radio" name="su" class="radio" id="milksu_m">
                                    <label for="milksu_m">奶素</label><br>
                                    <input type="radio" name="su" class="radio" id="emsu_m">
                                    <label for="emsu_m">蛋奶素</label>
                                    <p>價格</p>
                                    <input type="radio" name="price" class="radio" id="price8_m">
                                    <label for="price8_m">$800 以下</label><br>
                                    <input type="radio" name="price" class="radio" id="price815_m">
                                    <label for="price815_m">$800 ~ $1500</label><br>
                                    <input type="radio" name="price" class="radio" id="price15_m">
                                    <label for="price15_m" class="mb-0">$1500 以上</label>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mobile_close_btn"
                                            data-dismiss="modal">關閉</button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- ------------------mobile end----------- -->

            <div class="col-12 col-md-9 col-lg-9 course_cards">
                <div class="course_card d-md-flex d-lg-flex">
                    <div class="course_pic d-flex justify-content-center align-items-center">
                        <img src="images/course_01.jpg" alt="">
                    </div>
                    <div class="course_content d-flex flex-column justify-content-between">
                        <div class="title d-flex justify-content-between align-items-center">
                            <div class="left d-flex align-items-center">
                                <h2>地瓜餅 (奶素)</h2> <br>
                            </div>
                            <div class="right d-md-flex d-lg-flex align-items-center d-none d-md-block d-lg-block">
                                <i class="fa-regular fa-bookmark"></i>
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
                            <i class="fa-regular fa-bookmark d-md-none d-lg-none"></i>
                        </div>
                    </div>
                </div>

                <div class="course_card d-md-flex d-lg-flex">
                    <div class="course_pic d-flex justify-content-center align-items-center">
                        <img src="images/course_01.jpg" alt="">
                    </div>
                    <div class="course_content d-flex flex-column justify-content-between">
                        <div class="title d-flex justify-content-between align-items-center">
                            <div class="left d-flex align-items-center">
                                <h2>地瓜餅 (奶素)</h2> <br>
                            </div>
                            <div class="right d-md-flex d-lg-flex align-items-center d-none d-md-block d-lg-block">
                                <i class="fa-regular fa-bookmark"></i>
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
                            <i class="fa-regular fa-bookmark d-md-none d-lg-none"></i>
                        </div>
                    </div>
                </div>

                <div class="course_card d-md-flex d-lg-flex">
                    <div class="course_pic d-flex justify-content-center align-items-center">
                        <img src="images/course_01.jpg" alt="">
                    </div>
                    <div class="course_content d-flex flex-column justify-content-between">
                        <div class="title d-flex justify-content-between align-items-center">
                            <div class="left d-flex align-items-center">
                                <h2>地瓜餅 (奶素)</h2> <br>
                            </div>
                            <div class="right d-md-flex d-lg-flex align-items-center d-none d-md-block d-lg-block">
                                <i class="fa-regular fa-bookmark"></i>
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
                            <i class="fa-regular fa-bookmark d-md-none d-lg-none"></i>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-3 col-lg-3 course_menu d-none d-md-block d-lg-block">
                <div class="course_menu_wrap">
                    <h2>篩選條件</h2>
                    <select class="course_filter filter">
                        <option>推薦排序</option>
                        <option>開課日期</option>
                        <option>價格由低至高</option>
                        <option>價格由高至低</option>
                    </select>
                    <select class="date_filter filter">
                        <option>選擇課程日期</option>
                        <option>10月21日(五) 19:00-21:00</option>
                        <option>11月18日(五) 19:00-21:00</option>
                        <option>10月22日(六) 10:30-12:30</option>
                        <option>11月19日(六) 10:30-12:30</option>
                    </select>
                    <p>素食分類</p>
                                <input type="radio" name="su" class="radio" id="allsu">
                                <label for="allsu">全素</label><br>
                                <input type="radio" name="su" class="radio" id="eggsu">
                                <label for="eggsu">蛋素</label><br>
                                <input type="radio" name="su" class="radio" id="fivesu">
                                <label for="fivesu">五辛素</label><br>
                                <input type="radio" name="su" class="radio" id="milksu">
                                <label for="milksu">奶素</label><br>
                                <input type="radio" name="su" class="radio" id="emsu">
                                <label for="emsu">蛋奶素</label>
                                <p>價格</p>
                                <input type="radio" name="price" class="radio" id="price8">
                                <label for="price8">$800 以下</label><br>
                                <input type="radio" name="price" class="radio" id="price815">
                                <label for="price815">$800 ~ $1500</label><br>
                                <input type="radio" name="price" class="radio" id="price15">
                                <label for="price15" class="mb-0">$1500 以上</label>
                </div>
            </div>

            <div class="col-12 col-md-9 ol-lg-9 d-flex justify-content-center page">
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="fa-solid fa-angle-left"
                                        aria-hidden="true"></i></span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item d-none d-md-block d-lg-block"><a class="page-link" href="#">2</a></li>
                        <li class="page-item d-none d-md-block d-lg-block"><a class="page-link" href="#">3</a></li>
                        <li class="page-item d-none d-md-block d-lg-block"><a class="page-link" href="#">4</a></li>
                        <li class="page-item d-none d-md-block d-lg-block"><a class="page-link" href="#">5</a></li>
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

<footer>
        <p>Copyright © 2022 BearSu. All rights reserved.</p>
</footer>

<?php include __DIR__ . '/parts/course_scripts.php'; ?>

<?php include __DIR__ . '/parts/foot.php'; ?>