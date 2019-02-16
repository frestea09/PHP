<!DOCTYPE html>
<html>
    <head>
        <title>
            Learn Database | Create
        </title>
    </head>
    <body>
        <form name="formInputOrange" action="operator_insert.php" method="post">
            <table border="0">
                <tr>
                    <td>
                        ID:
                    </td>
                    <td>
                        <input name="insertID" type="text" size="20" maxlength="40"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <input name="insertName" type="text" size="30" maxlength="50"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Qty:
                    </td>
                    <td>
                        <input name="insertQty" type="text" size="30" maxlength="40"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input name="submitInsert" type="submit" value="Insert"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>