<?php
if (!isset($page_name)) {
    $page_name = '';
}
?>

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