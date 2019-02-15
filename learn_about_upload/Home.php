<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Learn UPLOAD
        </title>
    </head>
    <body>
        <h1>Learn How to Upload</h1>
        <form name="formUpload" action="viewUpload.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        <input name="MAX_FILE_SIZE" type="hidden" value="5000000"><br/>
                        <input name="fileUser" type="file" size="60">
                    </td>
                </tr>
            </table>
            <tr>
                <td>
                    <input name="buttonSubmit" type="submit" value="Save"/>
                </td>
            </tr>
        </form>
    </body>
</html>