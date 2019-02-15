<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Learn UPLOAD
    </title>
</head>
<body>
<h1>Learn How to Upload</h1>
<?php
    $fileUser = $_FILES['fileUser']['tmp_name'];
    $nameFile = $_FILES['fileUser']['name'];
    $tujuan = 'c:\\data\\'.$nameFile;
    if($fileUser!='none'):
        copy($fileUser,$tujuan);
        echo "upload telah dilakukan";
    endif;
?>
</body>
</html>