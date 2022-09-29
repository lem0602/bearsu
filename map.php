<?php
header("Content-Type:text/html; charset=utf-8");
require_once 'connectSql.php';


if(isset($_GET['area'])){
	$sql = "SELECT * FROM `map` WHERE `address` LIKE '%".$_GET['area']."%'";
}else{
	$sql = 'SELECT * FROM `map` WHERE 1 Limit 5';
}
$result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;
user-scalable=0;">
	<link rel="stylesheet" href="/css/all-setup.css">
	<link rel="stylesheet" href="/css/mobile-nav.css">

	<script src="https://kit.fontawesome.com/bfd7c1ee72.js" crossorigin="anonymous"></script>
	<title>素食地圖</title>
	<link rel="stylesheet" href="/css/map.css">
</head>

<body>
	<!-- mobile-nav -->
	<section id="mobile-nav" class="d-lg-none">
		<div class="page">
			<header tabindex="0">
				<div class="logo-img">
					<img src="/img/logo_horizontal.png" alt="">
				</div>
			</header>
			<div id="nav-container">
				<div class="bg"></div>
				<!-- nav icon  -->
				<div class="btn-box">
					<div class="button" tabindex="0">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</div>
				</div>

				<!-- nav list -->
				<div id="nav-content" tabindex="0">
					<ul>
						<li>
							<a href="#0">
								<h3>首頁</h3>
							</a>
						</li>
						<li>
							<a href="#0">
								<h3>廚藝教室</h3>
							</a>
						</li>
						<li>
							<a href="#0">
								<h3>節氣食補</h3>
							</a>
						</li>
						<li>
							<a href="#0">
								<h3>素食地圖</h3>
							</a>
						</li>
						<li>
							<a href="#0">
								<h3>相關文章</h3>
							</a>
						</li>
						<li class="small">
							<a href="#0">購物車</a>
							<a href="#0">會員中心</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Button trigger modal -->


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">map name</h5>
					<!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
				</div>
				<div class="modal-body">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.1957319357366!2d120.64357235080834!3d24.129763384327187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d47f94524dd%3A0x507861f9b78767f8!2z5Y-w5Lit5paH5b-D56eA5rOw5b2x5Z-O!5e0!3m2!1szh-TW!2stw!4v1663596533772!5m2!1szh-TW!2stw" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- 熊齋logo -->
	<div class="course_wrap d-none d-lg-flex justify-content-between  ">
		<div class="nav_left">
			<a href="index.html"><img src="/img/logo.png" alt=""></a>
		</div>


		<!-- 右側選單 -->
		<div class="nav_right d-none d-md-block d-lg-block">
			<ul class="d-flex flex-column">
				<a href="index.html">
					<li class="li_top">首頁</li>
				</a>
				<a href="course.html">
					<li>廚藝教室</li>
				</a>
				<a href="solarterms.html">
					<li>節氣食補</li>
				</a>
				<a href="map.html">
					<li>素食地圖</li>
				</a>
				<a href="article.html">
					<li>相關文章</li>
				</a>
				<div class="icon d-flex justify-content-center pt-3">
					<a href="shopping_cart.html"><i class="fa-solid fa-cart-shopping pr-3 pl-5 pb-5"></i></a>
					<a href=""><i class="fa-solid fa-user pl-3 pr-5 pb-5"></i></a>
				</div>
			</ul>
		</div>

	</div>
	<!-- 熊齋logo -->

	<div class="container">

		<div class="course_title">
			<h1>素食地圖</h1>
			<img src="/img/mascot_05.png" alt="">
		</div>


	</div>
	<!-- 選單列表 -->
	<div class="formItem">

		<label>
			<div class="step">Step1</div>
			<select class="formItem1_select city" name="county" id="county_select">
				<option class="selet11" value="">請選擇縣市</option>
				<option value="基隆市">基隆市</option>
				<option value="台北市">台北市</option>
				<option value="新北市">新北市</option>
				<option value="桃園市">桃園市</option>
				<option value="新竹縣">新竹縣</option>
				<option value="新竹市">新竹市</option>
				<option value="苗栗縣">苗栗縣</option>
				<option value="彰化縣">彰化縣</option>
				<option value="台中市">台中市</option>
				<option value="南投縣">南投縣</option>
				<option value="雲林縣">雲林縣</option>
				<option value="嘉義縣">嘉義縣</option>
				<option value="嘉義市">嘉義市</option>
				<option value="台南市">台南市</option>
				<option value="高雄市">高雄市</option>
				<option value="屏東縣">屏東縣</option>
				<option value="宜蘭縣">宜蘭縣</option>
				<option value="花蓮縣">花蓮縣</option>
				<option value="台東縣">台東縣</option>
				<option value="澎湖縣">澎湖縣</option>
				<option value="連江縣">連江縣</option>
				<option value="金門縣">金門縣</option>
			</select>
		</label>

		<label>
			<div class="step">Step2</div>
			<select class="formItem1_select area" name="district" id="district_select" onchange="area()">
				<option class="selet11" value="" <?php if(!isset($_GET['area'])){ ?> selected <?php } ?>>請選擇地區</option>
				<option value="中正區" <?php if($_GET['area'] == '中正區'){ ?> selected <?php } ?> >中正區</option>
				<option value="大同區" <?php if($_GET['area'] == '大同區'){ ?> selected <?php } ?>>大同區</option>
				<option value="中山區" <?php if($_GET['area'] == '中山區'){ ?> selected <?php } ?>>中山區</option>
				<option value="松山區" <?php if($_GET['area'] == '松山區'){ ?> selected <?php } ?>>松山區</option>
				<option value="大安區" <?php if($_GET['area'] == '大安區'){ ?> selected <?php } ?>>大安區</option>
				<option value="信義區" <?php if($_GET['area'] == '信義區'){ ?> selected <?php } ?>>信義區</option>
			</select>
		</label>
		<label>
			<div class="step">Step3</div>
			<select class="formItem1_select restType" name="restType" id="restType">
				<option value="" class="selet11" selected="">請選素食分類</option>
				<option value="0、e起復蔬">全素</option>
				<option value="1、滴水坊">蛋素</option>
				<option value="2、人氣小吃">五辛素</option>
				<option value="3、自助餐">奶素</option>
				<option value="4、麵食店">蛋奶素</option>
			</select>
		</label>
	</div>

	<!-- 地圖卡片 -->
	<!-- 顯示地圖用Bootstrap的互動式窗modal做 -->
	<?php
	while ($row = mysqli_fetch_assoc($result)) {
		
	?>
		<div class="mapcard">
			<div class="mappic">
				<img src="/img/map_41.jpeg" alt="">
			</div>
			<div class="mapcardp">
				<div class="mapcardp1">
					<h3>
						<?php echo $row['name']; ?>
					</h3>
					<i class="fa-regular fa-bookmark"></i>
				</div>
				<div class="mapcardp2">
					<h4>
						<?php echo $row['address']; ?>
					</h4>
				</div>
				<div class="mapcardp3">
					<h4>
					<?php echo $row['time']; ?>
					</h4>
				</div>
				<div class="mapcardp4">
					<h4><?php echo $row['mobile']; ?>
				</h4>
				</div>
				<div class="mapcardp5">
					<span>
						<h4>全素</h4>
						<h4>蛋素</h4>
						<h4>奶素</h4>
					</span>

					<button type="button" class="maplink" data-bs-toggle="modal" data-bs-target="#exampleModal">
						查看地圖
					</button>
					<!-- <a href="" class="maplink">查看地圖</a> -->
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
                    <h4>全素</h4>
                    <h4>蛋素</h4>
                    <h4>奶素</h4>
                </span>
                <button type="button" class="maplink" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    查看地圖
                </button>
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
                    <h4>全素</h4>
                    <h4>蛋素</h4>
                    <h4>奶素</h4>
                </span>

                
                <button type="button" class="maplink" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    查看地圖
                </button>
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
                    <h4>全素</h4>
                    <h4>蛋素</h4>
                    <h4>奶素</h4>
                </span>

                
                <button type="button" class="maplink" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    查看地圖
                </button>
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
                    <h4>全素</h4>
                    <h4>蛋素</h4>
                    <h4>奶素</h4>
                </span>

                
                <button type="button" class="maplink" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    查看地圖
                </button>
            </div>

        </div>
    </div>  -->



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

	<footer>
		<p>Copyright © 2022 BearSu. All rights reserved.</p>
	</footer>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

	<script>
		function area(){
			var district_select = document.getElementById('district_select');
			console.log('area',district_select.value);
			location='./index.php?area=' + district_select.value;
		}
	</script>
</body>

</html>