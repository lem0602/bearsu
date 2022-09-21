<?php session_start(); ?>
<?php include __DIR__ . '/parts/solarterms_notfound_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>

<div class="container solarterms_wrap">
    <div class="row h-100">
        <div class="col-12 filter_section d-flex justify-content-center justify-content-md-start justify-content-lg-start">
            <select class="season_filter filter">
                <option>季節分類</option>
                <option>春季</option>
                <option>夏季</option>
                <option>秋季</option>
                <option>冬季</option>
            </select>

            <select class="solarterms_filter filter">
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
            </select>

            <select class="su_filter filter">
                <option>素食分類</option>
                <option>全素</option>
                <option>蛋素</option>
                <option>五辛素</option>
                <option>奶素</option>
                <option>蛋奶素</option>
            </select>

            <select class="time_filter filter">
                <option>烹飪時間</option>
                <option>15分鐘</option>
                <option>30分鐘</option>
                <option>45分鐘</option>
                <option>60分鐘以上</option>
            </select>
        </div>

        <div class="col-12 solarterms_notfound_wrap d-flex justify-content-center align-items-center">
            <div class="notfound">
                <h1>Oh Oh ! 無此相關課程</h1>
                <img src="images/mascot_07.png" alt="">
            </div>
        </div>
    </div>
</div>

<footer>
    <p>Copyright © 2022 BearSu. All rights reserved.</p>
</footer>

<?php include __DIR__ . '/parts/solarterms_scripts.php'; ?>

<?php include __DIR__ . '/parts/foot.php'; ?>