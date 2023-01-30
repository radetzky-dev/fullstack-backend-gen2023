<?php
//phpinfo();

set_time_limit(0);
ini_set('upload_max_filesize', '500M');
ini_set('post_max_size', '500M');
ini_set('max_input_time', 4000); // Play with the values
ini_set('max_execution_time', 4000); // Play with the values

if ($_FILES) {
    echo '<pre>';
    var_dump($_FILES);
    echo '<pre>';
    echo  sys_get_temp_dir();
    echo '<hr>';

    //remember :  sudo chmod -R 777 sulla cartella uploads
    $uploadDir = __DIR__ . '/uploads';
    echo $uploadDir;
    echo '<br>';


    foreach ($_FILES as $file) {
        if (UPLOAD_ERR_OK === $file['error']) {
            $fileName = basename($file['name']);
            echo '<br>->' . $file['tmp_name'];
            echo '<br>->' . $uploadDir . DIRECTORY_SEPARATOR . $fileName;
            $result = move_uploaded_file($file['tmp_name'], $uploadDir . DIRECTORY_SEPARATOR . $fileName);
            if ($result) {
                echo '<br>File uploaded';
            } else {
                echo '<br>ERROR';
            }
        }
    }
}
?>

<form action="fileupload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="upload" value="Carica file">
</form>