<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form Input</title>
    </head>
    <body>
        <h1>Form Input</h1>
        <form name="formInput" action="Home.php" method="post">
            <table>
                <tr>
                    <td>Name:</td>
                    <td>
                        <input name="insertName" type="text" maxlength="20" size="30"/>
                    </td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td>
                        <input name="insertAddress" type="text"  size="50" maxlength="100"/>
                    </td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input name="insertGender" type="radio" size="50" maxlength="100" value="Male"/>Male
                        <input name="insertGender" type="radio" size="50" maxlength="100" value="Female"/>Female
                    </td>
                </tr>
                <tr>
                    <td>Country:</td>
                    <td>
                        <select name="insertCountry" size="1">
                            <option value="Indonesia">Indonesia</option>
                            <option value="USA">USA</option>
                            <option value="German">German</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hobbi:</td>
                    <td>
                        <input name="insertStatus[]" type="checkbox" value="Reading"/>Reading<br/>
                        <input name="insertStatus[]" type="checkbox" value="Programming"/>Programming<br/>
                        <input name="insertStatus[]" type="checkbox" value="Jogging"/>Jogging<br/>
                        <input name="insertStatus[]" type="checkbox" value="Traveling"/>Traveling<br/>
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input name="insertPassword" type="password" size="30" maxlength="50"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Comment:
                    </td>
                    <td>
                        <textarea name="insertCommentar" rows="5" cols="40"></textarea>
                    </td>
                </tr>
            </table>

            <table>
                <tr>
                    <td>
                        <input name="submitButton" type="submit" value="Save"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>