<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Multi Upload
    </title>
</head>
<body>
<h2>This How i Upload</h2>
        <?php
        for ($indeks = 0;$indeks<=6;$indeks++):
            $str = "fileUser".$indeks;
            $fileUser = $_FILES[$str]['tmp_name'];
            $nameFile = $_FILES[$str]['name'];
            $tujuan = 'c:\\data\\'.$nameFile;
            if($fileUser!='none'):
                copy($fileUser,$tujuan);
                echo "upload file $indeks berhasil";
            endif;
        endfor;
        ?>
</body>
</html>