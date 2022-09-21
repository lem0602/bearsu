<?php session_start(); ?>
<?php include __DIR__ . '/parts/course_notfound_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>

<div class="container">
    <div class="row h-100">
        <div class="col-12 d-flex justify-content-end mobile_course_filter_wrap d-block d-md-none d-lg-none">
            <button type="button" class="btn btn-primary mobile_course_filter d-block d-md-none d-lg-none" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa-solid fa-filter"></i></button>

            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary mobile_close_btn"
                                    data-dismiss="modal">關閉</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-9 col-lg-9 course_notfound d-flex flex-column align-items-center justify-content-center">
            <div class="notfound">
                <h1>Oh Oh ! 無此相關課程</h1>
                <img src="images/mascot_07.png" alt="">
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
    </div>
</div>

<footer>
    <p>Copyright © 2022 BearSu. All rights reserved.</p>
</footer>

<?php include __DIR__ . '/parts/course_notfound_scripts.php'; ?>

<?php include __DIR__ . '/parts/foot.php'; ?>