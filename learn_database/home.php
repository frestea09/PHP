<!DOCTYPE html>
<html>
    <head>
        <title>
            Learn Database | Home
        </title>
    </head>
    <body>
        <h1>Welcome to Learn Database in PHP</h1>
        <h2>Table Orange</h2>
        <ol>This table show data orange.
            <li>Stucture : id_orang,name_orang,qty_orange</li>
        </ol>
        <form name="formDelete" action="operator_delete.php" method="post">
            <table border="1">
                <thead>
                <th>ID</th>
                <th>Name Orange</th>
                <th>Qty Orange</th>
                <th>Delete</th>
                </thead>
                <tbody>
                <?php
                include ('Orange.php');
                $objOrange = new Orange();
                $result = $objOrange->getAll();
                while ($row = $result->fetch(PDO::FETCH_NUM)):
                    ?>
                    <tr>
                        <?php
                        $name = $row[0];
                        $qty = $row[1];
                        $id = $row[2];
                        ?>
                        <td><?php echo $id;?></td>
                        <td>
                            <a href="form_update.php?id=<?php echo $id;?>">
                                <?php echo $name;?>
                            </a>
                        </td>
                        <td><?php echo $qty;?></td>
                        <td>
                            <input name="insertDelete[]" type="checkbox" value="<?php echo $id;?>"/>
                        </td>
                    </tr>
                    <?php
                endwhile;
                ?>
                </tbody>
            </table>
            <table>
                <tr>
                    <td>
                        <a href="form_insert.php">
                            <input name="buttonInsert" type="button" value="Insert"/>
                        </a>
                    </td>
                    <td>
                        <a href="operator_delete.php">
                            <input name="buttonDelete" type="submit" value="Delete"/>
                        </a>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>