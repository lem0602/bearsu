<?php

require __DIR__ . '/connect_db.php';

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
    $url =  $row['url'];
    $insertSql = "INSERT INTO `map_collect`( `name`, `img`, `address`, `business_hours`, `phone`, `sort`, `member_id`, `map_id`,`url`) VALUES ('$name','$img','$address','$time','$phone','$sort','$member','$map_id','$url')";
    $stmt = $pdo->query($insertSql);
} else if ($_POST['collectAction'] == 'delect') {
    $delSql = "DELETE FROM `map_collect` WHERE `member_id` =  $member AND  `map_id`= $mapId";
    $output['test'] =  $delSql ;
    $stmt = $pdo->query($delSql);
}

$output['success'] = true;

echo json_encode($output, JSON_UNESCAPED_UNICODE);
