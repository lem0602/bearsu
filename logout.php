<?php

session_start();

session_destroy(); // 清除所有的 SESSION 資料

unset($_SESSION['user']); // 清除某個 session 變數
$comeFrom = './index.php';
// if(! empty($_SERVER['HTTP_REFERER'])){
//     $comeFrom = $_SERVER['HTTP_REFERER'];

header('Location: '. $comeFrom);   // 頁面轉向 redirect

exit;  // 結束程式, 底下的程式都不會執行
// die('oops!');  // 同 exit
