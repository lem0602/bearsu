<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = 'Order-record'; // 頁面名稱
session_start();

$sql = 'SELECT * FROM `map` WHERE 1';

?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<?php include __DIR__ . '/parts/myStyle.php'; ?>
<?php
$acc = $_SESSION['user']['id'];
// SELECT * FROM `order_record` WHERE `member_id` = 1
$sql = "SELECT * FROM `order_record` WHERE member_id=$acc";
$stmt = $pdo->query($sql);
// $data = $stmt->fetch(PDO::FETCH_ASSOC);
?>


<div class="member_wrap _order">
    <div class="container1">
        <div class="row">
            <div class="member_main col-md-2 p-0  text-center">
                <div class="head">
                    <img src="" alt="大頭貼">
                </div>

                <div class="share">
                    <h3>已分享食譜0</h3>
                </div>
                <!-- 會員資料bar -->
                <?php include __DIR__ . '/parts/navmember.php'; ?>
            </div>
            <!-- 會員資料卡 -->
            <div class="member_info col-md-10">
                <div class="member_title">
                    <h1>訂單記錄</h1>
                    <!-- <div class="chang_member ">
                            <p>修改會員資料</p>
                        </div> -->
                </div>

                <div class="member_box">
                    <table class="order_box1 text-center">
                        <thead>
                            <th>
                                <h3>訂購日期</h3>
                            </th>
                            <th>
                                <h3>訂單編號</h3>
                            </th>
                            <th>
                                <h3>訂單金額</h3>
                            </th>
                            <th>
                                <h3>訂單狀態</h3>
                            </th>
                        </thead>
                        <tbody>
                            <?php
                            while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {

                            ?>
                                <tr>
                                    <td>
                                        <h3>
                                            <?php echo $data['order_date']; ?>
                                        </h3>
                                    </td>
                                    <td>
                                        <h3> <?php echo $data['order_number']; ?></h3>
                                    </td>
                                    <td>
                                        <h3> <?php echo $data['order_price']; ?></h3>
                                    </td>
                                    <td>
                                        <h3> <?php echo $data['order_state']; ?></h3>
                                    </td>
                                </tr>
                            <?php
                            }

                            ?>

                        </tbody>
                    </table>

                </div>
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



        </div>
    </div>
</div>
<?php include __DIR__ . '/parts/scripts.php'; ?>

<?php include __DIR__ . '/parts/html-foot.php'; ?>