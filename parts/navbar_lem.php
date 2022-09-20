<?php
if (!isset($page_name)) {
    $page_name = '';
}
?>

<style>
    .pc_header_wrap {
        height: 0px;
    }

    .pc_header {
        z-index: 9999;
        position: sticky;
        top: 32px;
        height: 0px;
    }

    .nav_left img {
        width: 120px;
        transition: 1s;
    }

    .nav_right {
        width: 150px;
        height: 400px;
        border-radius: 100px;
        border: 2px solid #FFF6E9;
        background-color: #005F5F;
        overflow: hidden;
    }

    .nav_right ul {
        padding: 0px;
        margin: 0px;
        height: 400px;
    }

    .nav_right li {
        list-style-type: none;
        color: #FFF6E9;
        text-align: center;
        padding: 15px 0px;
        transition: .5s;
        border-bottom: 2px dashed #FFF6E9;
        font-size: 1.25rem;
        font-weight: 500;
    }

    .nav_right .li_top {
        padding-top: 35px;
    }

    .nav_right li:hover {
        color: #005F5F;
        background-color: #FFF6E9;
    }

    .nav_right a:hover {
        text-decoration: none;
    }

    .nav_right .icon a {
        color: #FFF6E9;
        transition: .5s;
    }

    .nav_right .icon a:hover {
        transform: scale(1.2);
    }
</style>

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
                        <a href="index.html">
                            <h3>首頁</h3>
                        </a>
                    </li>
                    <li>
                        <a href="course.html">
                            <h3>廚藝教室</h3>
                        </a>
                    </li>
                    <li>
                        <a href="solarterms.html">
                            <h3>節氣食補</h3>
                        </a>
                    </li>
                    <li>
                        <a href="map.html">
                            <h3>素食地圖</h3>
                        </a>
                    </li>
                    <li>
                        <a href="recipe_list.html">
                            <h3>相關文章</h3>
                        </a>
                    </li>
                    <li class="small">
                        <a href="shopping_cart.html">購物車</a>
                        <a href="member_login.html">會員中心</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<header class="pc_header d-none d-md-block d-lg-block">
    <div class="container-fluid d-flex pc_header_wrap">
        <div class="col-2 nav_left d-none d-md-flex d-lg-flex justify-content-start">
            <a href="index.html"><img src="images/logo.png" alt=""></a>
        </div>

        <div class="col-2 offset-8 nav_right_wrap d-none d-md-flex d-lg-flex justify-content-end">
            <div class="nav_right">
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
                    <a href="recipe_list.html">
                        <li>相關文章</li>
                    </a>
                    <div class="icon d-flex justify-content-center pt-3">
                        <a href="shopping_cart.html"><i class="fa-solid fa-cart-shopping pr-3 pl-5 pb-5"></i></a>
                        <a href="member_login.html"><i class="fa-solid fa-user pl-3 pr-5 pb-5"></i></a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</header>