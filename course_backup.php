<?php session_start(); ?>
<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = 'list'; // 頁面名稱

$perPage = 5;  // 每頁最多有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$vege = isset($_GET['vege']) ? intval($_GET['vege']) : 0;
$lowp = isset($_GET['lowp']) ? intval($_GET['lowp']) : 0; // 低價
$highp = isset($_GET['highp']) ? intval($_GET['highp']) : 0; // 高價

$qsp = []; // query string parameters

// 取得分類資料
// $vege = $pdo->query("SELECT * FROM course WHERE vegetarian_sid=0")
//     ->fetchAll();

// ----------------------商品

$where = ' WHERE 1 ';  // 起頭
if ($vege) {
    $where .= " AND vegetarian_sid=$vege";
    $qsp['vege'] = $vege;
}
if ($lowp) {
    $where .= " AND price>=$lowp ";
    $qsp['lowp'] = $lowp;
}
if ($highp) {
    $where .= " AND price<=$highp ";
    $qsp['highp'] = $highp;
}

// 取得資料的總筆數
$t_sql = "SELECT COUNT(1) FROM course $where ";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// 計算總頁數
$totalPages = ceil($totalRows / $perPage);

$rows = [];  // 預設值
// 有資料才執行
if ($totalRows > 0) {
    if ($page < 1) {
        header('Location: ?page=1');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: ?page=' . $totalPages);
        exit;
    }
    // 取得該頁面的資料
    $sql = sprintf(
        "SELECT * FROM `course` JOIN `vegetarian` ON course.vegetarian_sid = vegetarian.sid %s ORDER BY course.sid LIMIT %s, %s",
        $where,
        ($page - 1) * $perPage,
        $perPage
    );
    $rows = $pdo->query($sql)->fetchAll();
}

// $veges = $pdo->query("SELECT * FROM `vegetarian`")->fetchAll();
// $veges_ar = [];
// foreach($veges as $v){
//     $veges_ar[$v['sid']] = $v['classification'];
//     echo $veges_ar[$v['sid']];
    
// }

// foreach($rows as $row){
//     print_r($row);
// }
?>

<?php include __DIR__ . '/parts/course_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12 course_title d-md-flex d-lg-flex justify-content-center align-items-center d-none">
            <h1>廚藝教室</h1>
            <img src="images/mascot_01.gif" alt="">
        </div>
        <!-- ------------------mobile start----------- -->
        <div class="col-12 mobile_course_title  justify-content-center align-items-center d-block d-md-none d-lg-none text-center">
            <img src="images/mascot_01.gif" alt="">
            <h1>廚藝教室</h1>
        </div>

        <div class="col-12 d-flex justify-content-end mobile_course_filter_wrap d-block d-md-none d-lg-none">
            <button type="button" class="btn btn-primary mobile_course_filter  d-block d-md-none d-lg-none" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa-solid fa-filter"></i></button>

            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="course_menu d-flex justify-content-center align-items-center">
                            <div class="course_menu_wrap">
                                <h2>篩選條件</h2>
                                <select class="course_filter filter">
                                    <option>價格排序</option>
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
                <input type="radio" name="su" class="radio"
                <?= empty($_GET['vege']) ? 'checked' : '' ?>
                id="totalsu" onclick="vegeRange(0)">
                <label for="totalsu">全部</label><br>

                <input type="radio" name="su" class="radio"
                <?= $_GET['vege']==3 ? 'checked' : '' ?>
                id="allsu" onclick="vegeRange(3)">
                <label for="allsu">全素</label><br>

                <input type="radio" name="su" class="radio"
                <?= $_GET['vege']==2 ? 'checked' : '' ?>
                id="eggsu" onclick="vegeRange(2)">
                <label for="eggsu">蛋素</label><br>

                <input type="radio" name="su" class="radio"
                <?= $_GET['vege']==1 ? 'checked' : '' ?>
                id="fivesu" onclick="vegeRange(1)">
                <label for="fivesu">五辛素</label><br>

                <input type="radio" name="su" class="radio"
                <?= $_GET['vege']==4 ? 'checked' : '' ?>
                id="milksu" onclick="vegeRange(4)">
                <label for="milksu">奶素</label><br>

                <input type="radio" name="su" class="radio"
                <?= $_GET['vege']==5 ? 'checked' : '' ?> 
                id="emsu" onclick="vegeRange(5)">
                <label for="emsu">蛋奶素</label>

                <p>價格</p>
                <input type="radio" name="price" class="radio"
                <?= empty($_GET['lowp']) && empty($_GET['highp']) ? 'checked' : '' ?> 
                id="allprice" onclick="priceRange(0)">
                <label for="allprice">全部</label><br>

                <input type="radio" name="price" class="radio"
                <?= $_GET['lowp']==0 && $_GET['highp']==800 ? 'checked' : '' ?> 
                id="price8" onclick="priceRange(0,800)">
                <label for="price8">$800 以下</label><br>

                <input type="radio" name="price" class="radio" 
                <?= $_GET['lowp']==800 && $_GET['highp']==1500 ? 'checked' : '' ?>
                id="price815" onclick="priceRange(800,1500)">
                <label for="price815">$800 ~ $1,500</label><br>

                <input type="radio" name="price" class="radio" 
                <?= $_GET['lowp']==1500 && empty($_GET['highp']) ? 'checked' : '' ?>
                id="price15" onclick="priceRange(1500, 0)">
                <label for="price15" class="mb-0">$1,500 以上</label>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary mobile_close_btn" data-dismiss="modal">關閉</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ------------------mobile end----------- -->

        <div class="col-12 col-md-9 col-lg-9 course_cards">
            <?php foreach ($rows as $r) : ?>
                <div class="course_card d-md-flex d-lg-flex">
                    <div class="course_pic d-flex justify-content-center align-items-center">
                        <img src="images/course/<?= $r['img'] ?>.jpg" alt="">
                    </div>
                    <div class="course_content d-flex flex-column justify-content-between">
                        <div class="title d-flex justify-content-between align-items-center">
                            <div class="left d-flex align-items-center">
                                <h2><?= $r['name'] ?> (<?= $r['classification'] ?>)</h2> <br>
                            </div>
                            <div class="right d-md-flex d-lg-flex align-items-center d-none d-md-block d-lg-block">
                                <i class="fa-regular fa-bookmark"></i>
                            </div>
                        </div>
                        <div class="describe">
                            <h4><?= $r['introduction'] ?>
                            </h4>
                        </div>
                        <div class="price d-flex align-items-center">
                            <h5>課程價格</h5>
                            <h2>$<?= number_format($r['price']) ?></h2>
                        </div>
                        <div class="time">
                            <h5>開課時間</h5>
                            <h4><?= $r['date_1'] ?><br><?= $r['date_2'] ?></h4>
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
            <?php endforeach; ?>
        </div>

        <div class="col-md-3 col-lg-3 course_menu d-none d-md-block d-lg-block">
            <div class="course_menu_wrap">
                <h2>篩選條件</h2>
                <select class="course_filter filter">
                    <option>價格排序</option>
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
                <input type="radio" name="su" class="radio"
                <?= empty($_GET['vege']) ? 'checked' : '' ?>
                id="totalsu" onclick="vegeRange(0)">
                <label for="totalsu">全部</label><br>

                <input type="radio" name="su" class="radio"
                <?= $_GET['vege']==3 ? 'checked' : '' ?>
                id="allsu" onclick="vegeRange(3)">
                <label for="allsu">全素</label><br>

                <input type="radio" name="su" class="radio"
                <?= $_GET['vege']==2 ? 'checked' : '' ?>
                id="eggsu" onclick="vegeRange(2)">
                <label for="eggsu">蛋素</label><br>

                <input type="radio" name="su" class="radio"
                <?= $_GET['vege']==1 ? 'checked' : '' ?>
                id="fivesu" onclick="vegeRange(1)">
                <label for="fivesu">五辛素</label><br>

                <input type="radio" name="su" class="radio"
                <?= $_GET['vege']==4 ? 'checked' : '' ?>
                id="milksu" onclick="vegeRange(4)">
                <label for="milksu">奶素</label><br>

                <input type="radio" name="su" class="radio"
                <?= $_GET['vege']==5 ? 'checked' : '' ?> 
                id="emsu" onclick="vegeRange(5)">
                <label for="emsu">蛋奶素</label>

                <p>價格</p>
                <input type="radio" name="price" class="radio"
                <?= empty($_GET['lowp']) && empty($_GET['highp']) ? 'checked' : '' ?> 
                id="allprice" onclick="priceRange(0)">
                <label for="allprice">全部</label><br>

                <input type="radio" name="price" class="radio"
                <?= $_GET['lowp']==0 && $_GET['highp']==800 ? 'checked' : '' ?> 
                id="price8" onclick="priceRange(0,800)">
                <label for="price8">$800 以下</label><br>

                <input type="radio" name="price" class="radio" 
                <?= $_GET['lowp']==800 && $_GET['highp']==1500 ? 'checked' : '' ?>
                id="price815" onclick="priceRange(800,1500)">
                <label for="price815">$800 ~ $1,500</label><br>

                <input type="radio" name="price" class="radio" 
                <?= $_GET['lowp']==1500 && empty($_GET['highp']) ? 'checked' : '' ?>
                id="price15" onclick="priceRange(1500, 0)">
                <label for="price15" class="mb-0">$1,500 以上</label>

            </div>
        </div>

        <div class="col-12 col-md-9 ol-lg-9 d-flex justify-content-center page">
            <nav aria-label="Page navigation example">
                <ul class="pagination mb-0">
                    <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="?<?php $qsp['page'] = $page - 1;
                                                    echo http_build_query($qsp); ?>" aria-label="Previous">
                            <span aria-hidden="true"><i class="fa-solid fa-angle-left" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <?php for ($i = $page - 2; $i <= $page + 2; $i++) :
                        if ($i >= 1 and $i <= $totalPages) :
                            $qsp['page'] = $i;
                    ?>
                            <li class="page-item <?= $page == $i ? 'active' : '' ?>">
                                <a class="page-link" href="?<?= http_build_query($qsp); ?>"><?= $i ?></a>
                            </li>
                    <?php endif;
                    endfor; ?>
                    <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?<?php $qsp['page'] = $page + 1;
                                                    echo http_build_query($qsp); ?>" aria-label="Next">
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
<script>
    const usp = new URLSearchParams(location.search);

    function priceRange(lowp=0, highp=0){
        if(lowp){
            usp.set('lowp', lowp);
        } else {
            usp.delete('lowp')
        }
        if(highp){
            usp.set('highp', highp);
        } else {
            usp.delete('highp')
        }
        location.href = '?' + usp.toString();
    }

    function vegeRange(vege=0){
        if(vege){
            usp.set('vege', vege);
        } else {
            usp.delete('vege')
        }
        location.href = '?' + usp.toString();
    }

</script>
<?php include __DIR__ . '/parts/foot.php'; ?>