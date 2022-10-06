<?php

require __DIR__ . '/connect_db.php';

$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
    'showPass' => password_hash('a1234', PASSWORD_DEFAULT),
];

// 1. 先欄位資料是否足夠
if (empty($_POST['email']) or empty($_POST['password'])) {
    $output['error'] = '參數不足';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$sql = "SELECT * FROM member WHERE email=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_POST['email']]);
$row = $stmt->fetch();

// 2. 以 email 去查詢資料
if (empty($row)) {
    $output['error'] = '帳號或密碼錯誤';
    $output['code'] = 400;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

// 3. 驗證密碼
if (password_verify($_POST['password'], password_hash($row['password'], PASSWORD_DEFAULT))) {
    // 密碼是正確的
    $output['success'] = true;
    $_SESSION['user'] = [
        'id' => $row['sid'],
        'email' => $row['email'],
        'nickname' => $row['nickname'],
    ];
} else {
    // 密碼是錯誤的
    $output['error'] = '帳號或密碼錯誤';
    $output['code'] = 420;
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
