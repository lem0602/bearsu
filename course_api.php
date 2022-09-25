<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = 'list'; // 頁面名稱

$perPage = 5;  // 每頁最多有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$vege = isset($_GET['vege']) ? intval($_GET['vege']) : 0;
$lowp = isset($_GET['lowp']) ? intval($_GET['lowp']) : 0; // 低價
$highp = isset($_GET['highp']) ? intval($_GET['highp']) : 0; // 高價

$qsp = []; // query string parameters

// ----------------------商品

$where = ' WHERE 1 ';  // 起頭
if ($vege) {
    $where .= " AND vegetarian_sid=$vege";
    $qsp['vege'] = $vege;
}
if ($lowp) {
    $where .= " AND price>=$lowp ";
    $qsp['lowp'] = $lowp;
}
if ($highp) {
    $where .= " AND price<=$highp ";
    $qsp['highp'] = $highp;
}

// 取得資料的總筆數
$t_sql = "SELECT COUNT(1) FROM address_book";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// 計算總頁數
$totalPages = ceil($totalRows / $perPage);

$rows = [];  // 預設值
// 有資料才執行
if ($totalRows > 0) {
    if ($page < 1) {
        header('Location: ?page=1');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: ?page=' . $totalPages);
        exit;
    }
    // 取得該頁面的資料
    $sql = sprintf(
        "SELECT * FROM `course` JOIN `vegetarian` ON course.vegetarian_sid = vegetarian.sid %s ORDER BY course.sid LIMIT %s, %s",
        $where,
        ($page - 1) * $perPage,
        $perPage
    );
    $rows = $pdo->query($sql)->fetchAll();
}

echo json_encode([
    'totalRows' => $totalRows,
    'totalPages' => $totalPages,
    'perPage' => $perPage,
    'page' => $page,
    'rows' => $rows,
]);