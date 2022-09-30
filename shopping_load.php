<?php session_start(); ?>
<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = 'cart'; // 頁面名稱
?>

<?php include __DIR__ . '/parts/shopping_load_head.php'; ?>

<div class="container shopping_load_wrap d-flex justify-content-center align-items-center">
    <div class="row shopping_load">
        <div class="col-12 text-center">
            <img src="images/mascot_04.gif" alt="">
        </div>

    </div>
</div>

<footer>
    <p>Copyright © 2022 BearSu. All rights reserved.</p>
</footer>

<?php include __DIR__ . '/parts/shopping_load_scripts.php'; ?>
<script>
    setTimeout(function(){location.href="/bearsu/shopping_finish.php"} , 5000);
</script>
<?php include __DIR__ . '/parts/foot.php'; ?>