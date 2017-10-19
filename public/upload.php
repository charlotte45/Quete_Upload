<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 19/10/17
 * Time: 08:15
 */

//var_dump($_FILES);

$uploadDir = 'uploadedFiles/';
$sizeLimit = '1000000';

if (!empty($_GET['delete'])) {
    if (file_exists($uploadDir.$_GET['delete'])) {
        unlink ($uploadDir.$_GET['delete']);
    }
}

if (!empty($_FILES)) {
    for ($i = 0; $i < count($_FILES['upload']['name']); $i++) {
        $fileName = 'image' . uniqid();

        $extension = strtolower(pathinfo($_FILES['upload']['name'][$i], PATHINFO_EXTENSION));
        $error = false;

        if ($_FILES['upload']['size'][$i] > $sizeLimit) {
            echo 'Your file is too large';
            $error = true;
        }

        $allowedMimes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array(mime_content_type($_FILES['upload']['tmp_name'][$i]), $allowedMimes)) {
            echo 'The type of your file, ' . $_FILES['upload']['name'][$i] . mime_content_type($_FILES['upload']['tmp_name'][$i]) . ', is not allowed';
            $error = true;
        }

        if ($error === false) {
            move_uploaded_file($_FILES['upload']['tmp_name'][$i], $uploadDir . $fileName . '.' . $extension);;
        }
    }

}

$myFiles = [];
$it = new \FilesystemIterator(__DIR__ . '/uploadedFiles');
foreach ($it as $fileInfo) {
    $myFiles[] =  $fileInfo->getFilename();
}
