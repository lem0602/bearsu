<?php
$countryName = ["臺北市" => ["中正區", "大同區", "中山區", "松山區", "大安區", "萬華區", "信義區", "士林區", "北投區", "內湖區", "南港區", "文山區"], "新北市" => [],];
require __DIR__ . '/parts/connect_db.php';
$pageName = 'home'; // 頁面名稱

$acc = $_SESSION['user']['id'];
// SELECT * FROM `order_record` WHERE `member_id` = 1
$sql = "SELECT * FROM `map_collect` WHERE member_id=$acc";
$stmt = $pdo->query($sql);
// $data = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<!-- 怕推上去會被吃掉就再建一個php檔例如mystyle -->
<?php include __DIR__ . '/parts/myStyle.php'; ?>

<link rel="stylesheet" href="/css/map_collect.css">

<div class="member_wrap collect">
    <div class="container1">
        <div class="row">
            <div class="member_main col-md-2 p-0  text-center">
                <div class="head">
                    <img src="" alt="大頭貼">
                </div>

                <div class="share">
                    <h3>已分享食譜0</h3>
                </div>
                <!-- 會員資料bar -->
                <?php include __DIR__ . '/parts/navmember.php'; ?>
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
                                <img src="/img/map_41.jpeg" alt="">
                            </div>
                            <div class="mapcardp">
                                <div class="mapcardp1">
                                    <h3>
                                        <?php echo $data['name']; ?>
                                    </h3>
                                    <i class="fa-regular fa-bookmark"></i>
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

                                    <a href="" class="maplink">查看地圖</a>
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