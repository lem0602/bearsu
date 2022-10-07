<?php
$countryName = ["臺北市" => ["中正區", "大同區", "中山區", "松山區", "大安區", "萬華區", "信義區", "士林區", "北投區", "內湖區", "南港區", "文山區"], "新北市" => [],];
require __DIR__ . '/mengParts/connect_db.php';
$pageName = 'map_collect'; // 頁面名稱


$acc = $_SESSION['user']['id'];
// echo 'adf' . $_SESSION['user']['email'];
// SELECT * FROM `order_record` WHERE `member_id` = 1
$sql = "SELECT * FROM `map_collect` WHERE member_id=$acc";
$stmt = $pdo->query($sql);
// $data = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<?php include __DIR__ . '/mengParts/html-head.php'; ?>
<link rel="stylesheet" href="./mengParts/css/map_collect.css">

<link rel="stylesheet" href="/css/map_collect.css">
<?php include __DIR__ . '/mengParts/navbar.php'; ?>
<!-- 怕推上去會被吃掉就再建一個php檔例如mystyle -->
<?php include __DIR__ . '/mengParts/myStyle.php'; ?>


<div class="member_wrap collect">
    <div class="container">
        <div class="row">
            <div class="member_main col-md-2 p-0  text-center">
                <div class="head">
                    <img class="w-100" src="./images/mascot_12.png" alt="大頭貼">
                </div>

                <div class="share">
                    <h3>已分享食譜0</h3>
                </div>
                <!-- 會員資料bar -->
                <?php include __DIR__ . '/mengParts/navmember.php'; ?>
            </div>

            <!-- 會員資料卡 -->
            <div class="member_info col-md-10">

                <div class="map_collect1 justify-content-center">

                    <div class="map_collect_title ">
                        <h1>廚藝教室</h1>
                    </div>
                    <div class="map_collect_title">
                        <h1>節氣食譜</h1>
                    </div>
                    <div class="map_collect_title">
                        <h1>食譜</h1>
                    </div>
                    <div class="map_collect_title c1">
                        <h1>地圖</h1>
                    </div>
                    <div class="map_collect_title">
                        <h1>文章</h1>
                    </div>

                </div>


                <div class="">
                    <?php
                    while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <div class="mapcard">
                            <div class="mappic">
                                <img src="./img/map_41.jpeg" alt="">
                            </div>
                            <div class="mapcardp">
                                <div class="mapcardp1">
                                    <h3>
                                        <?php echo $data['name']; ?>
                                    </h3>
                                    <i id="collect_<?php echo $data['map_id'] ?>" onclick="collectHandler(<?php echo $data['map_id'] ?>)" class="icon_bookmark 
                                    <?php
                                    $map_id = $data['map_id'];

                                    if (empty($_SESSION['user']['id'])) {
                                        echo '';
                                    } else {
                                        $member_id = $_SESSION['user']['id'];
                                        $t_sql = "SELECT COUNT(1) FROM `map_collect` WHERE `member_id` = $member_id  AND `map_id` = $map_id";
                                        $total_rows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
                                        if ($total_rows == 1) {
                                            echo 'on';
                                        }
                                    }
                                    ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="bookmark_off">
                                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path d="M336 0h-288C21.49 0 0 21.49 0 48v431.9c0 24.7 26.79 40.08 48.12 27.64L192 423.6l143.9 83.93C357.2 519.1 384 504.6 384 479.9V48C384 21.49 362.5 0 336 0zM336 452L192 368l-144 84V54C48 50.63 50.63 48 53.1 48h276C333.4 48 336 50.63 336 54V452z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="bookmark_on">
                                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z" />
                                        </svg>
                                    </i>
                                </div>
                                <div class="mapcardp2">
                                    <h4><?php echo $data['address']; ?>
                                    </h4>
                                </div>
                                <div class="mapcardp3">
                                    <h4><?php echo $data['business_hours']; ?></h4>
                                </div>
                                <div class="mapcardp4">
                                    <h4><?php echo $data['phone']; ?></h4>
                                </div>
                                <div class="mapcardp5">
                                    <span>
                                        <?php
                                        $sortArr = mb_split("/", $data['sort']);
                                        for ($i = 0; $i < count($sortArr); $i++) {
                                            echo "<h4>$sortArr[$i]</h4>";
                                        }
                                        ?>

                                    </span>
                                    <a href="   <?php
                                                $map_id = $data["map_id"];
                                                if (empty($_SESSION["user"]["id"])) {
                                                    echo "";
                                                } else {
                                                    $member_id = $_SESSION['user']['id'];
                                                    $showUrlSql = "SELECT `url` FROM `map_collect` WHERE `member_id` = $member_id  AND `map_id` = $map_id";
                                                    $stmtUrl = $pdo->query($showUrlSql);
                                                    $rowUrl = $stmtUrl->fetch(PDO::FETCH_ASSOC);
                                                    echo $rowUrl["url"];
                                                }
                                                ?>" class="maplink" target="_blank">查看地圖</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }

                    ?>

                    <!-- <div class="mapcard">
                            <div class="mappic">
                                <img src="/img/map_41.jpeg" alt="">
                            </div>
                            <div class="mapcardp">
                                <div class="mapcardp1">
                                    <h3>賢爸蔬食</h3>
                                    <i class="fa-regular fa-bookmark"></i>
                                </div>
                                <div class="mapcardp2">
                                    <h4>地址：台北市北投區中央南一路一段25巷5號</h4>
                                </div>
                                <div class="mapcardp3">
                                    <h4>營業時間：平日
                                        08:30–14:00
                                        17:00–20:00 週三休息</h4>
                                </div>
                                <div class="mapcardp4">
                                    <h4>02-228988281</h4>
                                </div>
                                <div class="mapcardp5">
                                    <span>
                                        <p>全素</p>
                                        <p>蛋素</p>
                                        <p>奶素</p>
                                    </span>

                                    <a href="" class="maplink">查看地圖</a>
                                </div>

                            </div>
                        </div>
                        <div class="mapcard">
                            <div class="mappic">
                                <img src="/img/map_41.jpeg" alt="">
                            </div>
                            <div class="mapcardp">
                                <div class="mapcardp1">
                                    <h3>賢爸蔬食</h3>
                                    <i class="fa-regular fa-bookmark"></i>
                                </div>
                                <div class="mapcardp2">
                                    <h4>地址：台北市北投區中央南一路一段25巷5號</h4>
                                </div>
                                <div class="mapcardp3">
                                    <h4>營業時間：平日
                                        08:30–14:00
                                        17:00–20:00 週三休息</h4>
                                </div>
                                <div class="mapcardp4">
                                    <h4>02-228988281</h4>
                                </div>
                                <div class="mapcardp5">
                                    <span>
                                        <p>全素</p>
                                        <p>蛋素</p>
                                        <p>奶素</p>
                                    </span>

                                    <a href="" class="maplink">查看地圖</a>
                                </div>

                            </div>
                        </div>
                        <div class="mapcard">
                            <div class="mappic">
                                <img src="/img/map_41.jpeg" alt="">
                            </div>
                            <div class="mapcardp">
                                <div class="mapcardp1">
                                    <h3>賢爸蔬食</h3>
                                    <i class="fa-regular fa-bookmark"></i>
                                </div>
                                <div class="mapcardp2">
                                    <h4>地址：台北市北投區中央南一路一段25巷5號</h4>
                                </div>
                                <div class="mapcardp3">
                                    <h4>營業時間：平日
                                        08:30–14:00
                                        17:00–20:00 週三休息</h4>
                                </div>
                                <div class="mapcardp4">
                                    <h4>02-228988281</h4>
                                </div>
                                <div class="mapcardp5">
                                    <span>
                                        <p>全素</p>
                                        <p>蛋素</p>
                                        <p>奶素</p>
                                    </span>

                                    <a href="" class="maplink">查看地圖</a>
                                </div>

                            </div>
                        </div>
                        <div class="mapcard">
                            <div class="mappic">
                                <img src="/img/map_41.jpeg" alt="">
                            </div>
                            <div class="mapcardp">
                                <div class="mapcardp1">
                                    <h3>賢爸蔬食</h3>
                                    <i class="fa-regular fa-bookmark"></i>
                                </div>
                                <div class="mapcardp2">
                                    <h4>地址：台北市北投區中央南一路一段25巷5號</h4>
                                </div>
                                <div class="mapcardp3">
                                    <h4>營業時間：平日
                                        08:30–14:00
                                        17:00–20:00 週三休息</h4>
                                </div>
                                <div class="mapcardp4">
                                    <h4>02-228988281</h4>
                                </div>
                                <div class="mapcardp5">
                                    <span>
                                        <p>全素</p>
                                        <p>蛋素</p>
                                        <p>奶素</p>
                                    </span>

                                    <a href="" class="maplink">查看地圖</a>
                                </div>

                            </div>
                        </div>
                        <div class="mapcard">
                            <div class="mappic">
                                <img src="/img/map_41.jpeg" alt="">
                            </div>
                            <div class="mapcardp">
                                <div class="mapcardp1">
                                    <h3>賢爸蔬食</h3>
                                    <i class="fa-regular fa-bookmark"></i>
                                </div>
                                <div class="mapcardp2">
                                    <h4>地址：台北市北投區中央南一路一段25巷5號</h4>
                                </div>
                                <div class="mapcardp3">
                                    <h4>營業時間：平日
                                        08:30–14:00
                                        17:00–20:00 週三休息</h4>
                                </div>
                                <div class="mapcardp4">
                                    <h4>02-228988281</h4>
                                </div>
                                <div class="mapcardp5">
                                    <span>
                                        <p>全素</p>
                                        <p>蛋素</p>
                                        <p>奶素</p>
                                    </span>

                                    <a href="" class="maplink">查看地圖</a>
                                </div>

                            </div>
                        </div> -->

                </div>
                <!-- 頁面選單 -->
                <nav class="bigpageitem" aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="fa-solid fa-angle-left" aria-hidden="true"></i></span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js' integrity='sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==' crossorigin='anonymous'></script>
<script>
    function collectHandler(id) {
        console.log('collectHandler', id);

        var collect = document.querySelector('#collect_' + id);
        var collectAction = '';

        var loginUser = <?php
                        if (empty($_SESSION['user']['id'])) {
                            echo 0;
                        } else {
                            echo 1;
                        }
                        ?>;
        console.log('loginUser', loginUser);
        if (loginUser == 0) {
            alert('請先登入才可以收藏唷!!!');
            return;
        }

        if (collect.classList.contains('on')) {
            // have class
            collect.classList.remove('on');
            collectAction = 'delect';
        } else {
            // no class
            collect.classList.add('on');
            collectAction = 'insert';
        }
        var mapId = {
            mapId: id,
            collectAction: collectAction,
        }
        // ajax json post get
        // 把使用者輸入的帳號密碼丟到api
        $.post(
            "./mengParts/map-collect-api.php",
            mapId,
            // $(document.form1).serialize(),
            // 接收回傳回來的資料還有動作
            function(data) {
                console.log(data);
                if (data.success) {
                    location.reload();
                } else {
                    alert(data.error);
                }
            },
            'json'
        );
    }
</script>

<?php include __DIR__ . '/mengParts/scripts.php'; ?>

<?php include __DIR__ . '/mengParts/html-foot.php'; ?>