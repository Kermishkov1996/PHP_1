<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/hw5/engine/db.php';

// Загрузка любого файла
function uploadFiles($directory, $attributeName = 'file') {
    if (isset($_FILES[$attributeName])) {

        if (!$_FILES[$attributeName]['error']) {

            is_dir($directory) ?: mkdir($directory);
            $name = $_FILES[$attributeName]['name'];
            $tmp = $_FILES[$attributeName]['tmp_name'];
            $size = $_FILES[$attributeName]['size'];
            $dest = "$directory/$name";

            move_uploaded_file($tmp, $dest);

            $fileInfo = [
                'name' => $name,
                'destination' => $dest,
                'size' => $size
            ];
        }
    }
    // Возвращает информацию о файле
    return $fileInfo;
}

// Загрузка картинок
function uploadImages($maxsize = null) {
    if ($file = uploadFiles($_SERVER['DOCUMENT_ROOT'] . '/hw5/public/img/original', 'image')) {

        $destination = $_SERVER['DOCUMENT_ROOT'] . '/hw5/public/img/small/' . $file['name'];

        is_dir($_SERVER['DOCUMENT_ROOT'] . '/hw5/public/img/small') ?: mkdir($_SERVER['DOCUMENT_ROOT'] . '/hw5/public/img/small');

        include_once $_SERVER['DOCUMENT_ROOT'] . '/hw5/vendor/funcImgResize.php';
        img_resize($file['destination'], $destination, 300, 169);

        $file['url'] = '../public/img/original/' . $file['name'];
        $file['urlMini'] = '../public/img/small/' . $file['name'];
        $file['sizeMini'] = filesize($destination);

        query($file);
    }
}