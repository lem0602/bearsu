<?php
if (!isset($page_name)) {
    $page_name = '';
}
?>

<section id="mobile-nav" class="d-block d-md-none d-lg-none">
    <div class="page">
        <header tabindex="0">
            <div class="logo-img">
                <img src="images/logo_horizontal.png" alt="">
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
                        <a href="index.php">
                            <h3>首頁</h3>
                        </a>
                    </li>
                    <li>
                        <a href="course.php">
                            <h3>廚藝教室</h3>
                        </a>
                    </li>
                    <li>
                        <a href="solarterms.php">
                            <h3>節氣食補</h3>
                        </a>
                    </li>
                    <li>
                        <a href="map.php">
                            <h3>素食地圖</h3>
                        </a>
                    </li>
                    <li>
                        <a href="recipe_list.php">
                            <h3>相關文章</h3>
                        </a>
                    </li>
                    <li class="small">
                        <a href="shopping_cart.php">購物車</a>
                        <a href="member_login.php">會員中心</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<header class="pc_header d-none d-md-block d-lg-block">
    <div class="container-fluid d-flex pc_header_wrap">
        <div class="col-2 nav_left d-none d-md-flex d-lg-flex justify-content-start">
            <a href="index.php"><img src="images/logo.png" alt=""></a>
        </div>

        <div class="col-2 offset-8 nav_right_wrap d-none d-md-flex d-lg-flex justify-content-end">
            <div class="nav_right">
                <ul class="d-flex flex-column">
                    <a href="index.php">
                        <li class="li_top">首頁</li>
                    </a>
                    <a href="course.php">
                        <li>廚藝教室</li>
                    </a>
                    <a href="solarterms.php">
                        <li>節氣食補</li>
                    </a>
                    <a href="map.php">
                        <li>素食地圖</li>
                    </a>
                    <a href="recipe_list.php">
                        <li>相關文章</li>
                    </a>
                    <div class="icon d-flex justify-content-center pt-3">
                        <a href="shopping_cart.php"><i class="fa-solid fa-cart-shopping pr-3 pl-5 pb-5"></i></a>
                        <a href="member_login.php"><i class="fa-solid fa-user pl-3 pr-5 pb-5"></i></a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</header>