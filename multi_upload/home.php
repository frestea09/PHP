<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Multi Upload
        </title>
    </head>
    <body>
        <h2>This How i Upload</h2>
        <form name="formUploadMulti" action="uploadMulti.php" method="post" enctype="multipart/form-data">
            <table border="0">
                <?php
                for ($indeks = 0;$indeks<=6;$indeks++):
                    ?>
                    <tr>
                        <td>
                            <input name="MAX_FILE_SIZE" type="hidden" value="100000"/>
                            <input name="fileUser<?php echo $indeks;?>" type="file" value="60">
                        </td>
                    </tr>
                    <?php
                endfor;
                ?>
                <tr>
                    <td>
                        <input name="buttonSubmit" type="submit" value="Save" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>