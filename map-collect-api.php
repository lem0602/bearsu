<?php

require __DIR__ . '/parts/connect_db.php';

$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
    'mapId' => $_POST['mapId'],
    'test' => null,
    'name' => null,
    'collectAction' => $_POST['collectAction'],
];
$mapId = $_POST['mapId'];
$member = $_SESSION['user']['id'];
if ($_POST['collectAction'] == 'insert') {
    $sql = "SELECT * FROM map where sid = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['mapId']]);
    $row = $stmt->fetch();

    $name = $row['name'];
    $img = $row['img'];
    $address = $row['address'];
    $time = $row['time'];
    $phone = $row['mobile'];
    $sort = $row['sort'];
  
    $map_id =  $row['sid'];
    $insertSql = "INSERT INTO `map_collect`( `name`, `img`, `address`, `business_hours`, `phone`, `sort`, `member_id`, `map_id`) VALUES ('$name','$img','$address','$time','$phone','$sort','$member','$map_id')";
    $stmt = $pdo->query($insertSql);
} else if ($_POST['collectAction'] == 'delect') {
    $delSql = "DELETE FROM `map_collect` WHERE `member_id` =  $member AND  `map_id`= $mapId";
    // $output['test'] =  $delSql ;
    $stmt = $pdo->query($delSql);
}


// $sql = "SELECT * FROM member WHERE email=?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$_POST['email']]);
// $row = $stmt->fetch();



// // 3. 驗證密碼
// if (password_verify($_POST['password'], password_hash($row['password'], PASSWORD_DEFAULT))) {
//     // 密碼是正確的
//     $output['success'] = true;
//     $_SESSION['user'] = [
//         'id' => $row['sid'],
//         'email' => $row['email'],
//         'nickname' => $row['nickname'],
//     ];
// } else {
//     // 密碼是錯誤的
//     $output['error'] = '帳號或密碼錯誤';
//     $output['code'] = 420;
// }

echo json_encode($output, JSON_UNESCAPED_UNICODE);
