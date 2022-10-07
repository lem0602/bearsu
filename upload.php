<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    // print_r($file);

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: write_recipes.php?uploadsuccess");
            } else {
                echo " 上傳檔案太大 ";
            }
        } else {
            echo " 上傳失敗請重新上傳 ";
        }
    } else {
        echo " 無法上傳此照片 ";
    }
}


