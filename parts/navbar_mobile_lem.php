<?php
if (!isset($page_name)) {
    $page_name = '';
}
?>

<section id="mobile-nav" class="d-block d-md-none d-lg-none">
    <div class="page">
        <header tabindex="0">
        <a href="index.php"><div class="logo-img">
                <img src="images/logo_horizontal.png" alt="">
            </div></a>
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