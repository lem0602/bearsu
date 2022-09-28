<?php session_start(); ?>
<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = 'list'; // 頁面名稱

$perPage = 5;  // 每頁最多有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$vege = isset($_GET['vege']) ? intval($_GET['vege']) : 0;
$time = isset($_GET['time']) ? intval($_GET['time']) : 0;
$season = isset($_GET['season']) ? intval($_GET['season']) : 0;
$qsp = []; // query string parameters

// ----------------------商品

$where = ' WHERE 1 ';  // 起頭
if ($vege) {
    $where .= " AND vegetarian_sid=$vege";
    $qsp['vege'] = $vege;
}
if ($time) {
    $where .= " AND time=$time";
    $qsp['time'] = $time;
}
if ($season) {
    $where .= " AND seasons_sid=$season";
    $qsp['season'] = $season;
}

// 取得資料的總筆數
$t_sql = "SELECT COUNT(1) FROM solarterms_recipe $where ";
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

    // $names = $pdo->query("SELECT * FROM `solarterms_recipe_ingredients`")->fetchAll();
    // $names_ar = [];
    // foreach ($names as $n) {
    //     $names_ar[$n['recipe_sid']] = $n['name'];
    //     echo $n['name'];
    // }
    // 取得該頁面的資料
    $sql = sprintf(
        "SELECT *, `solarterms_recipe`.sid as solarID FROM `solarterms_recipe` JOIN `vegetarian` ON solarterms_recipe.vegetarian_sid = vegetarian.sid %s ORDER BY solarterms_recipe.sid LIMIT %s, %s",

        // "SELECT * FROM `solarterms_recipe` JOIN `vegetarian` ON solarterms_recipe.vegetarian_sid = vegetarian.sid %s ORDER BY solarterms_recipe.sid LIMIT %s, %s",
        $where,
        ($page - 1) * $perPage,
        $perPage
    );
    $rows = $pdo->query($sql)->fetchAll();
}
?>

<?php include __DIR__ . '/parts/solarterms_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>

<div class="container solarterms_wrap">
    <div class="row mx-0">
        <div class="mobile_title col-12 d-block d-md-none d-lg-none">
            <h1>節氣食補</h1>
        </div>
        <div class="col-12 solarterms_circle d-flex d-md-none d-lg-none justify-content-center">
            <img src="images/solarterms_circle.png" alt="" width="345" height="345" usemap="#Map_solarterms_mobile">
            <map name="Map_solarterms_mobile">
                <area shape="poly" coords="207,134,292,48,275,34,258,23,198,127" href="javascript:void(0);" class="solarterms_card_0 circle">
                <area shape="poly" coords="217,6,186,122,198,127,258,23,236,12" href="javascript:void(0);" class="solarterms_card_1 circle">
                <area shape="poly" coords="172,0,172,120,186,122,217,6,195,2" href="javascript:void(0);" class="solarterms_card_2 circle">
                <area shape="poly" coords="159,122,128,6,148,2,172,0,172,119" hhref="javascript:void(0);" class="solarterms_card_3 circle">
                <area shape="poly" coords="87,23,105,14,128,6,159,121,147,127" href="javascript:void(0);" class="solarterms_card_4 circle">
                <area shape="poly" coords="53,48,138,133,147,127,87,23,70,33" href="javascript:void(0);" class="solarterms_card_5 circle">
                <area shape="poly" coords="49,53,133,138,127,146,24,86,35,68" href="javascript:void(0);" class="solarterms_card_6 circle">
                <area shape="poly" coords="127,146,123,159,6,128,13,106,24,86" href="javascript:void(0);" class="solarterms_card_7 circle">
                <area shape="poly" coords="6,128,2,148,0,172,121,172,123,159" href="javascript:void(0);" class="solarterms_card_8 circle">
                <area shape="poly" coords="1,172,2,196,6,217,122,186,121,172" href="javascript:void(0);" class="solarterms_card_9 circle">
                <area shape="poly" coords="6,217,13,237,23,258,127,198,122,186" href="javascript:void(0);" class="solarterms_card_10 circle">
                <area shape="poly" coords="23,257,35,276,48,291,133,207,127,198" href="javascript:void(0);" class="solarterms_card_11 circle">
                <area shape="poly" coords="138,211,53,296,69,310,86,322,146,217" href="javascript:void(0);" class="solarterms_card_12 circle">
                <area shape="poly" coords="146,217,159,222,128,338,108,332,86,321" href="javascript:void(0);" class="solarterms_card_13 circle">
                <area shape="poly" coords="159,222,172,224,172,344,149,343,128,338" href="javascript:void(0);" class="solarterms_card_14 circle">
                <area shape="poly" coords="172,224,185,222,217,338,197,343,172,344" href="javascript:void(0);" class="solarterms_card_15 circle">
                <area shape="poly" coords="185,222,198,217,258,321,240,332,217,338" href="javascript:void(0);" class="solarterms_card_16 circle">
                <area shape="poly" coords="198,217,206,211,292,296,276,310,258,321" href="javascript:void(0);" class="solarterms_card_17 circle">
                <area shape="poly" coords="217,198,211,207,296,291,310,276,321,259" href="javascript:void(0);" class="solarterms_card_18 circle">
                <area shape="poly" coords="223,186,218,199,321,259,331,240,338,217" href="javascript:void(0);" class="solarterms_card_19 circle">
                <area shape="poly" coords="223,186,224,172,344,173,343,195,338,217" href="javascript:void(0);" class="solarterms_card_20 circle">
                <area shape="poly" coords="222,159,224,172,344,173,343,150,339,128" href="javascript:void(0);" class="solarterms_card_21 circle">
                <area shape="poly" coords="222,159,217,146,321,87,332,107,339,128" href="javascript:void(0);" class="solarterms_card_22 circle">
                <area shape="poly" coords="217,146,211,138,296,53,310,69,322,87" href="javascript:void(0);" class="solarterms_card_23 circle">
            </map>
        </div>

        <div class="col-12 col-md-3 col-lg-3 solarterms_introduce_card d-flex flex-column align-items-center justify-content-center px-0">
            <div class="top mb-3 d-none d-md-block d-lg-block">
                <h1>節氣食補</h1>
            </div>

            <div class="down d-flex d-md-block d-lg-block w-100">
                <div class="solarterms_card_wrap d-flex justify-content-center">
                    <img src="images/solarterms_card_0.png" alt="">
                </div>
                <h2 class="d-flex align-items-center">大地回暖陽氣發,飲食宜清淡,少食辛辣的食物。</h2>
            </div>

            <div class="solarterms_class_btn_wrap w-100">
                <button type="button" class="btn btn-primary solarterms_class_btn" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <h2><i class="fa-solid fa-school mr-3"></i>節氣小教室</h2>
                </button>
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content solarterms_class">
                            <h1><i class="fa-solid fa-infinity"></i>&nbsp; 節氣介紹</h1>
                            <p class="mb-0 text-justify">節氣指二十四時節和氣候，是中國古代用來指導農事之曆法曆注。 <br>
                                中國傳統夏曆（農曆）是一種「陰陽合曆」，同時根據日、月運行制定，「陰」是以朔望月為基準確定， <br>
                                「陽」是以地球自冬至繞太陽公轉一圈為基準確定歲實，每回歸年約365.2422日，二十四節氣據此而劃分，其中：
                            <ul class="mb-0 pl-4">
                                <li>春分是於黃經（太陽經度或天球經度）0°（春分點）。</li>
                                <li>夏至是於在太陽到達黃經90°時（太陽幾乎直射北回歸線，北回歸線以北白晝最長）。</li>
                                <li>秋分是於黃經180°（秋分點）。</li>
                                <li>冬至是於在太陽到達黃經270°時（太陽幾乎直射南回歸線，北半球白晝最短）。</li>
                            </ul>
                            <p class="text-justify mb-0"> 一年劃分了二十四節氣，與現代曆法將一日劃分為二十四小時，兩者數字同為24。 <br>
                                2016年，聯合國教科文組織將「二十四節氣——中國人藉由觀察太陽周年運動而形成的時間知識體系及其實踐」列入人類非物質文化遺產代表作名錄。<br>
                                該非遺項目的擴展名錄包括：九華立春祭、班春勸農、石阡說春、三門祭冬、壯族霜降節、苗族趕秋、安仁趕分社。
                            </p> <br>
                            <h1><i class="fa-solid fa-infinity"></i>&nbsp; 二十四節氣</h1>
                            <p>現代人根據太陽在黃道上的位置，準確地確定了二十四節氣的具體時間：</p><br>
                            <div class="loop-run w-100 d-flex justify-content-center">
                                <img src="images/sun-bg.png" alt="" class="sun-bg">
                                <img src="images/sun-body.png" alt="" class="sun-body">
                                <img src="images/earth-circle.png" alt="" class="earth-circle">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal">關閉</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-9 solarterms_circle d-md-flex d-lg-flex justify-content-center d-none">
            <img src="images/solarterms_circle.png" alt="" width="720" height="720" usemap="#Map_solarterms" class="d-none d-md-block d-lg-block">
            <map name="Map_solarterms">
                <area shape="poly" coords="432,280,608,101,592,84,567,65,538,49,415,265" href="javascript:void(0);" class="solarterms_card_0 circle">
                <area shape="poly" coords="491,24,455,13,388,254,414,265,538,48" href="javascript:void(0);" class="solarterms_card_1 circle">
                <area shape="poly" coords="418,6,389,3,360,0,360,252,387,254,454,13" href="javascript:void(0);" class="solarterms_card_2 circle">
                <area shape="poly" coords="267,13,333,255,359,253,359,1,310,3" href="javascript:void(0);" class="solarterms_card_3 circle">
                <area shape="poly" coords="181,48,307,266,333,253,267,13,222,29" href="javascript:void(0);" class="solarterms_card_4 circle">
                <area shape="poly" coords="181,49,142,74,111,102,287,279,306,267" href="javascript:void(0);" class="solarterms_card_5 circle">
                <area shape="poly" coords="278,288,101,112,72,144,49,180,267,306" href="javascript:void(0);" class="solarterms_card_6 circle">
                <area shape="poly" coords="48,180,23,233,14,267,255,332,265,306" href="javascript:void(0);" class="solarterms_card_7 circle">
                <area shape="poly" coords="12,266,4,310,0,359,253,360,254,333" href="javascript:void(0);" class="solarterms_card_8 circle" ;>
                <area shape="poly" coords="-1,359,4,410,13,453,256,388,252,360" href="javascript:void(0);" class="solarterms_card_9 circle">
                <area shape="poly" coords="13,453,29,498,48,539,265,413,256,387" href="javascript:void(0);" class="solarterms_card_10 circle">
                <area shape="poly" coords="49,539,73,578,103,609,278,431,265,414" href="javascript:void(0);" class="solarterms_card_11 circle">
                <area shape="poly" coords="109,618,144,646,180,671,307,452,287,441" href="javascript:void(0);" class="solarterms_card_12 circle">
                <area shape="poly" coords="181,670,222,692,267,706,332,465,307,454" href="javascript:void(0);" class="solarterms_card_13 circle">
                <area shape="poly" coords="267,708,314,717,359,719,359,468,333,465" href="javascript:void(0);" class="solarterms_card_14 circle">
                <area shape="poly" coords="358,468,387,465,453,705,405,717,359,717" href="javascript:void(0);" class="solarterms_card_15 circle">
                <area shape="poly" coords="388,465,415,454,540,671,498,692,452,706" href="javascript:void(0);" class="solarterms_card_16 circle">
                <area shape="poly" coords="415,454,430,439,609,617,575,648,541,670" href="javascript:void(0);" class="solarterms_card_17 circle">
                <area shape="poly" coords="440,432,618,608,647,577,673,540,453,415" href="javascript:void(0);" class="solarterms_card_18 circle">
                <area shape="poly" coords="455,415,463,390,708,454,693,500,672,540" href="javascript:void(0);" class="solarterms_card_19 circle">
                <area shape="poly" coords="468,362,464,389,707,454,716,409,718,361" href="javascript:void(0);" class="solarterms_card_20 circle">
                <area shape="poly" coords="465,333,467,361,717,361,716,314,707,268" href="javascript:void(0);" class="solarterms_card_21 circle">
                <area shape="poly" coords="466,333,453,307,671,181,693,226,707,266" href="javascript:void(0);" class="solarterms_card_22 circle">
                <area shape="poly" coords="441,288,617,110,647,144,670,182,453,307" href="javascript:void(0);" class="solarterms_card_23 circle">
            </map>
        </div>

        <div class="col-12 order-2 filter_section d-flex justify-content-between justify-content-md-start justify-content-lg-start">
            <select class="season_filter filter" onchange="seasonRange(value)">
                <option>季節分類</option>
                <option value='' <?php if (!(strcmp("", $season))) {
                                        echo "selected=\"selected\"";
                                    } ?>>全部</option>
                <option value='1' <?php if (!(strcmp("1", $season))) {
                                        echo "selected=\"selected\"";
                                    } ?>>春季</option>
                <option value='2' <?php if (!(strcmp("2", $season))) {
                                        echo "selected=\"selected\"";
                                    } ?>>夏季</option>
                <option value='3' <?php if (!(strcmp("3", $season))) {
                                        echo "selected=\"selected\"";
                                    } ?>>秋季</option>
                <option value='4' <?php if (!(strcmp("4", $season))) {
                                        echo "selected=\"selected\"";
                                    } ?>>冬季</option>
            </select>

            <!-- <select class="solarterms_filter filter">
                <option>節氣分類</option>
                        <option>立春</option>
                        <option>雨水</option>
                        <option>驚蟄</option>
                        <option>春分</option>
                        <option>清明</option>
                        <option>穀雨</option>
                        <option>立夏</option>
                        <option>小滿</option>
                        <option>芒種</option>
                        <option>夏至</option>
                        <option>小暑</option>
                        <option>大暑</option>
                        <option>立秋</option>
                        <option>處暑</option>
                        <option>白露</option>
                        <option>秋分</option>
                        <option>寒露</option>
                        <option>霜降</option>
                        <option>立冬</option>
                        <option>小雪</option>
                        <option>大雪</option>
                        <option>冬至</option>
                        <option>小寒</option>
                        <option>大寒</option>
            </select> -->

            <select class="su_filter filter" onchange="vegeRange(value)">
                <option>素食分類</option>
                <option value='' <?php if (!(strcmp("", $vege))) {
                                        echo "selected=\"selected\"";
                                    } ?>>全部</option>
                <option value='3' <?php if (!(strcmp("3", $vege))) {
                                        echo "selected=\"selected\"";
                                    } ?>>全素</option>
                <option value='2' <?php if (!(strcmp("2", $vege))) {
                                        echo "selected=\"selected\"";
                                    } ?>>蛋素</option>
                <option value='1' <?php if (!(strcmp("1", $vege))) {
                                        echo "selected=\"selected\"";
                                    } ?>>五辛素</option>
                <option value='4' <?php if (!(strcmp("4", $vege))) {
                                        echo "selected=\"selected\"";
                                    } ?>>奶素</option>
                <option value='5' <?php if (!(strcmp("5", $vege))) {
                                        echo "selected=\"selected\"";
                                    } ?>>蛋奶素</option>
            </select>

            <select class="time_filter filter" onchange="timeRange(value)">
                <option>烹飪時間</option>
                <option value='' <?php if (!(strcmp("", $time))) {
                                        echo "selected=\"selected\"";
                                    } ?>>全部</option>
                <option value='15' <?php if (!(strcmp("15", $time))) {
                                        echo "selected=\"selected\"";
                                    } ?>>15分鐘</option>
                <option value='30' <?php if (!(strcmp("30", $time))) {
                                        echo "selected=\"selected\"";
                                    } ?>>30分鐘</option>
                <option value='45' <?php if (!(strcmp("45", $time))) {
                                        echo "selected=\"selected\"";
                                    } ?>>45分鐘</option>
                <option value='60' <?php if (!(strcmp("60", $time))) {
                                        echo "selected=\"selected\"";
                                    } ?>>60分鐘以上</option>
            </select>
        </div>

        <?php foreach ($rows as $r) : ?>
            <div class="col-12 order-2 recipe_card d-md-flex d-lg-flex">
                <div class="recipe_pic d-flex justify-content-center align-items-center">
                    <img src="images/solarterms/<?= $r['img'] ?>.jpg" alt="">
                </div>
                <div class="recipe_content d-flex flex-column justify-content-between">
                    <div class="title d-flex justify-content-between align-items-center">
                        <div class="left d-flex align-items-center">
                            <h2><?= $r['recipe_name'] ?> (<?= $r['classification'] ?>)</h2> <br>
                        </div>
                        <div class="right d-flex align-items-center">
                            <i class="fa-solid fa-clock d-none d-md-block d-lg-block"></i>
                            <p class="mb-0 pl-2 d-none d-md-block d-lg-block"><?= $r['time'] ?></p>
                            <i class="fa-regular fa-bookmark pl-4 d-none d-md-block d-lg-block"></i>
                        </div>
                    </div>
                    <div class="author">
                        <p>by 熊齋</p>
                    </div>
                    <div class="mobile_recipe_time d-flex d-block d-md-none d-lg-none">
                        <i class="fa-solid fa-clock d-block d-md-none d-lg-none"></i>
                        <p class="mb-0 pl-2 d-block d-md-none d-lg-none"><?= $r['time'] ?></p>
                    </div>
                    <div class="describe">
                        <h3><?= $r['introduction'] ?></h3>
                        <h4>食材：、</h4>
                    </div>
                    <div class="btn_wrap d-flex justify-content-md-end justify-content-lg-end p-0">
                        <div class="btn">
                            <a href="solarterms_detail.php?sid=<?= $r['solarID'] ?>">了解更多</a>
                        </div>
                        <i class="fa-regular fa-bookmark pl-4 d-flex align-items-center d-md-none d-lg-none"></i>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="col-12 order-2 d-flex justify-content-center page_wrap">
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

<?php include __DIR__ . '/parts/solarterms_scripts.php'; ?>

<script>
    const usp = new URLSearchParams(location.search);

    function vegeRange(vege = 0) {
        if (vege) {
            usp.set('vege', vege);
        } else {
            usp.delete('vege')
        }
        location.href = '?' + usp.toString();
    }

    function timeRange(time = 0) {
        if (time) {
            usp.set('time', time);
        } else {
            usp.delete('time')
        }
        location.href = '?' + usp.toString();
    }

    function seasonRange(season = 0) {
        if (season) {
            usp.set('season', season);
        } else {
            usp.delete('season')
        }
        location.href = '?' + usp.toString();
    }

    //     // 產出第一層
    //     var colleges = ['季節分類', '春季', '夏季', '秋季', '冬季'];

    // var inner = "";
    // for (var i = 0; i < colleges.length; i++) {

    //     inner += `<option value=i>${colleges[i]}</option>`;
    // }
    // $(".season_filter").html(inner);//寫入
    // var noIndex;//第二層的index
    // //選擇第一層後，產出第二層
    // var sectors = new Array();
    // sectors[0] = ['節氣分類'];
    // sectors[1] = ['立春', '雨水', ' 驚蟄 ', '春分', ' 清明 ', ' 穀雨 '];
    // sectors[2] = ['立夏', '小滿', ' 芒種 ', '夏至', ' 小暑 ', ' 大暑 '];
    // sectors[3] = ['立秋', '處暑', ' 白露 ', '秋分', ' 寒露 ', ' 霜降 '];
    // sectors[4] = ['立冬', '小雪', ' 大雪 ', '冬至', ' 小寒 ', ' 大寒 '];
    // $(".season_filter").change(function () {
    //     index = this.selectedIndex;//第一層的index
    //     noIndex = index;
    //     console.log('no1', this.selectedIndex);
    //     console.log('第二層的長度', sectors[index].length);//第二層的長度
    //     console.log('第二層選擇的陣列', sectors[index]);//第二層選擇的陣列
    //     var Sinner = "";
    //     for (var i = 0; i < sectors[index].length; i++) {
    //         // Sinner=Sinner+'<option value=i>'+sectors[index][i]+'</option>';
    //         Sinner += `<option value=i>${sectors[index][i]}</option>`;
    //     }

    //     $(".solarterms_filter").html(Sinner);

    //     $(".solarterms_filter").change(function () {
    //         index = this.selectedIndex;
    //         console.log('no2', this.selectedIndex);
    //     });
    //     $(".solarterms_filter").change();

    // });
    // $(".season_filter").change();
</script>

<?php include __DIR__ . '/parts/foot.php'; ?>