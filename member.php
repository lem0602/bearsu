<?php
require __DIR__ . '/mengParts/connect_db.php';
$pageName = 'member'; // 頁面名稱
// session_start();
?>
<?php include __DIR__ . '/mengParts/html-head.php'; ?>
<?php include __DIR__ . '/mengParts/navbar.php'; ?>
<?php include __DIR__ . '/mengParts/myStyle.php'; ?>
<link rel="stylesheet" href="./mengParts/css/member.css">
<?php
// $acc = 'retaerg@gmail.com';
// $acc = 'vzdvg@gmail.com';
$acc = $_SESSION['user']['email'];
$sql = "SELECT * FROM `member` WHERE `email`='$acc';";
$stmt = $pdo->query($sql);
$data = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<div class="member_wrap member">
    <div class="container">
        <div class="row">
            <div class="member_main col-md-2 p-0  text-center">
                <div class="head">
                    <img src="" alt="大頭貼">
                </div>
                <span class="headnew">更新頭像</span>
                <div class="share">
                    <h3>已分享食譜0</h3>
                </div>
                <!-- 會員資料bar -->
                <?php include __DIR__ . '/mengParts/navmember.php'; ?>
            </div>
            <!-- 會員資料卡 -->
            <div class="member_info col-md-10">
                <div class="member_title">
                    <h1>會員資料</h1>
                    <div id="editBtn" class="chang_member ">
                        <i class="fa-solid fa-pen"></i>
                        <p>修改會員資料</p>
                    </div>
                </div>

                <div class="member_box">
                    <table class="member_box12">
                        <tr class="member_box1">
                            <td>
                                <h2>姓名</h2>
                            </td>
                            <td>
                                <h3 class="bottom_bd">
                                    <?php echo $data['name']; ?>
                                </h3>
                            </td>

                        </tr>
                        <tr class="member_box1">
                            <td>
                                <h2>性別</h2>
                            </td>
                            <td>
                                <h3><?php echo $data['gender']; ?>
                                </h3>
                            <td>
                        </tr>
                        <tr class="member_box1">
                            <td>
                                <h2>生日</h2>
                            </td>
                            <td>
                                <h3 class="member_box123">
                                    <?php
                                    echo mb_split("-", $data['birthday'])[1] . "月" . mb_split("-", $data['birthday'])[2] . "日";
                                    ?>
                                </h3>
                            </td>
                        </tr>
                        <tr class="member_box1">
                            <td>
                                <h2>手機</h2>
                            </td>
                            <td>
                                <h3 class="bottom_bd"><?php echo $data['mobile']; ?></h3>
                            </td>
                        </tr>
                        <tr class="member_box1">
                            <td>
                                <h2>地址</h2>
                            </td>
                            <td>
                                <h3 class="bottom_bd"><?php echo $data['address']; ?></h3>
                            </td>
                        </tr>
                        <tr class="member_box1">
                            <td>
                                <h2>Email</h2>
                            </td>
                            <td>
                                <h3 class="bottom_bd"><?php echo $data['email']; ?></h3>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
            <!-- mobile-changbar -->
            <div class="chang_member1 ">
                <i class="fa-solid fa-pen"></i>
                <p>修改會員資料</p>
            </div>

        </div>
    </div>
</div>
<script>
    // 修改會員資料換頁按鈕事件
    var editBtn = document.querySelector("#editBtn");

    function editBtnHandler() {
        console.log('editBtnHandler');
        location.href = 'member_data.php';
    }
    editBtn.addEventListener('click', editBtnHandler);
</script>
<?php include __DIR__ . '/mengParts/scripts.php'; ?>

<?php include __DIR__ . '/mengParts/html-foot.php'; ?>