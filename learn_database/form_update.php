<!DOCTYPE html>
<html>
<head>
    <title>
        Learn Database | Update
    </title>
</head>
<body>
<form name="formUpdateOrange" action="operator_update.php" method="post">
    <table border="0">
        <?php
            include ('Orange.php');
            $conditionID = $_GET['id'];
            $objOrange = new Orange();
            $objOrange->setId($conditionID);
            $result =  $objOrange->getByID();
            if($result):
                $row = $result->fetch(PDO::FETCH_NUM);
            endif;
            $id = $row[2];
            $qty = $row[1];
            $name = $row[0];
        ?>
            <tr>
                <td>
                    ID:
                </td>
                <td>
                    <input name="insertID" type="text" size="20" maxlength="40" value="<?php echo $id;?>" readonly/>
                </td>
            </tr>
            <tr>
                <td>
                    Name:
                </td>
                <td>
                    <input name="insertName" type="text" size="30" maxlength="50" value="<?php echo $name;?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Qty:
                </td>
                <td>
                    <input name="insertQty" type="text" size="30" maxlength="40" value="<?php echo $qty;?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    <input name="submitUpdate" type="submit" value="Insert"/>
                </td>
            </tr>
    </table>
</form>
</body>
</html>