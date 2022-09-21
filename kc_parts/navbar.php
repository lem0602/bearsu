<?php
if (!isset($page_name)) {
    $page_name = '';
}
?>
</head>

<body>
    <header>
        <!-- mobile-nav -->
        <section id="mobile-nav" class="d-lg-none">
            <div class="page">
                <header tabindex="0">
                    <div class="logo-img">
                        <img src="./images/logo_horizontal.png" alt="">
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
                                <a href="./recipe_list.php">
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

        <!-- pc-nav -->
        <div class="pc-nav-left d-none d-md-block">
            <div class="logoimg">
                <img src="./images/logo.png" alt="">
            </div>
        </div>
        <div class="pc-nav-right d-none d-md-block">
            <ul>
                <li class="li-top">
                    <a href="./index.html">
                        <h3>首頁</h3>
                    </a>
                </li>
                <li>
                    <a href="./course.html">
                        <h3>廚藝教室</h3>
                    </a>
                </li>
                <li>
                    <a href="./solarterms.html">
                        <h3>節氣食補</h3>
                    </a>
                </li>
                <li>
                    <a href="./map.html">
                        <h3>素食地圖</h3>
                    </a>
                </li>
                <li>
                    <a href="./article_list.html">
                        <h3>相關文章</h3>
                    </a>
                </li>
            </ul>
            <div class="nav-right-icon d-flex">
                <a href="shopping_cart.html" class="cart-icon">
                    <i class="fa-solid fa-cart-shopping pr-3 pl-5 pb-5"></i>
                </a>
                <a href="" class="member-icon">
                    <i class="fa-solid fa-user pl-3 pr-5 pb-5"></i>
                </a>
            </div>
        </div>

    </header>