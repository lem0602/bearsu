<?php session_start(); ?>
<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = 'cart'; // 頁面名稱

// if(empty($_SESSION['user']) or empty($_SESSION['cart'])){
//     header('Location: course.php');
//     exit;
// }

// 應該由資料表的資料計算總價
$total = 0;
foreach ($_SESSION['cart'] as $k => $v) {
    $total += $v['price'];
}


$o_sql = sprintf("INSERT INTO `orders`(
    `member_sid`, `totalcost`, `order_date`
    ) VALUES (%s, %s, NOW())", $_SESSION['user']['id'], $total);

$stmt = $pdo->query($o_sql);

$order_sid = $pdo->lastInsertId(); // 訂單編號

// 訂單明細
$od_sql = "INSERT INTO `order_details`(`course_sid`, `order_sid`, `price`) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($od_sql);

foreach ($_SESSION['cart'] as $k => $v) {
    $stmt->execute([
        $v['sid'],
        $order_sid,
        $v['price'],
    ]);
}


// 扣掉課程人數
foreach ($_SESSION['cart'] as $k => $v) {
$qty_sql = sprintf("SELECT * FROM `course`; UPDATE `course` SET `qty`=`qty`-1 WHERE `sid`='%s'", $v['sid']);
$stmt = $pdo->query($qty_sql)->fetchAll();
}

unset($_SESSION['cart']); // 清除購物車內容

?>

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