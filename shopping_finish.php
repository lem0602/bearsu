<?php session_start(); ?>
<?php include __DIR__ . '/parts/shopping_finish_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>

<div class="container shopping_finish_wrap d-flex justify-content-center align-items-center">
    <div class="row shopping_finish">
        <div class="col-12 text-center">
            <h1>結帳完成<br>
                請收Email</h1>
            <img src="images/mascot_04.gif" alt="">
        </div>

        <div class="col-12 btn_section d-flex justify-content-center">
            <a href="index.php" class="btn">返回首頁</a>
        </div>
    </div>
</div>

<footer>
    <p>Copyright © 2022 BearSu. All rights reserved.</p>
</footer>

<?php include __DIR__ . '/parts/shopping_finish_scripts.php'; ?>

<?php include __DIR__ . '/parts/foot.php'; ?>