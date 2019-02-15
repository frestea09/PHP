<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <h1>Welcome to Home</h1>
        <h2>
            Input Form Table
        </h2>
        <table name="fromForm">
            <?php
                if (isset($_POST['submitButton'])):
                    $name = $_POST['insertName'];
                    $address = $_POST['insertAddress'];
                    $gender = $_POST['insertGender'];
                    $country = $_POST['insertCountry'];
                    $hobbi = $_POST['insertStatus'];
                    $password = $_POST['insertPassword'];
                    $comment = $_POST['insertCommentar'];
                    echo $name;
                    echo "<br/>";
                    echo $address;
                    echo "<br/>";
                    echo $gender;
                    echo "<br/>";
                    echo $country;
                    echo "<br/>";
                    foreach ($hobbi as $element):
                        echo $element;
                        echo "<br/>";
                    endforeach;
                    echo "<br/>";
                    echo $password;
                    echo "<br/>";
                    echo $comment;
                endif;

            ?>
        </table>
        <table border="0">
            <tr>
                <td>
                    <a href="FormCreate.php">
                        <input name="formInput" type="button" value="Create">
                    </a>
                </td>
            </tr>
        </table>
    </body>
</html>