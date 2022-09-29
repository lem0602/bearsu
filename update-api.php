<?php

require __DIR__ . '/parts/connect_db.php';
// 要回傳的資料
$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
    'address' => $_POST['address'],
    'email' => $_POST['email'],
    'mobile' => $_POST['mobile'],
    'acc' => $_SESSION['user']['email'],
    'sql' => null,
    'address' => $_POST['address'],
    'password' => $_POST['password'],
    'newpassword' => $_POST['newpassword'],
    'ttt' => null,
];
// 判斷密碼欄位有無內容
if (!empty($_POST['password'])) {
    // 密碼欄位有內容及去跟資料庫確認密碼是否正確
    $sql = "SELECT * FROM member WHERE email=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['email']]);
    $row = $stmt->fetch();
    if (password_verify($_POST['password'], password_hash($row['password'], PASSWORD_DEFAULT))) {
        // 如果正確，修改密碼指令就會執行
        $sql = "UPDATE member SET password='".$_POST['newpassword']."' ,email='" . $_POST['email'] . "', address='" . $_POST['address'] . "' where email='" . $_SESSION['user']['email'] . "'";
    }else{
        $output['error'] = '密碼錯誤';
        echo json_encode($output, JSON_UNESCAPED_UNICODE);
        exit;
    }
} else {
    $sql = "UPDATE member SET email='" . $_POST['email'] . "', address='" . $_POST['address'] . "' where email='" . $_SESSION['user']['email'] . "'";
}

// UPDATE `member` SET `sid`='',`name`='',`email`='',`password`='',`gender`='',`birthday`='',`mobile`='',`nickname`='',`address`='[value-10]' WHERE 1
// 讓使用者可以更改成功自己的會員資料的指令
// $sql = "UPDATE member SET email='" . $_POST['email'] . "', address='" . $_POST['address'] . "' where email='" . $_SESSION['user']['email'] . "'";
$output['sql'] = $sql;
$stmt = $pdo->query($sql);

// 這行指的是暫存 
$_SESSION['user'] = [
    'email' => $_POST['email'],
];
$output['success'] = true;
// 1. 先欄位資料是否足夠
// if(empty($_POST['email']) or empty($_POST['password'])){
//     $output['error'] = '參數不足';
//     echo json_encode($output, JSON_UNESCAPED_UNICODE);
//     exit;
// }

// $sql = "SELECT * FROM member WHERE email=?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([ $_POST['email'] ]);
// $row = $stmt->fetch();

// 2. 以 email 去查詢資料
// if(empty($row)){
//     $output['error'] = '帳號或密碼錯誤';
//     $output['code'] = 400;
//     echo json_encode($output, JSON_UNESCAPED_UNICODE);
//     exit;
// }

// // 3. 驗證密碼
// if( password_verify($_POST['password'],password_hash($row['password'], PASSWORD_DEFAULT)) ){
//     // 密碼是正確的
//     $output['success'] = true;
//     $_SESSION['user'] = [
//         'id' => $row['id'],
//         'email' => $row['email'],
//         'nickname' => $row['nickname'],
//     ];

// } else {
//     // 密碼是錯誤的
//     $output['error'] = '帳號或密碼錯誤';
//     $output['code'] = 420;

// }

echo json_encode($output, JSON_UNESCAPED_UNICODE);
