<html>

<head>

</head>

<body>
    <form action="data.php" method="post">
        <table border="1" align="center">
            <tr>
                <td>name:</td>
                <td><input type="text" name="name" placeholder="enter name"></td>
            </tr>
            <tr>
                <td>password:</td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td>address:</td>
                <td><textarea rows='3' cols="25" name="add">enter address</textarea></td>
            </tr>
            <tr>
                <td>gender:</td>
                <td><input type="radio" name="gender" value="male">MALE
                    <input type="radio" name="gender" value="female">FEMALE
                </td>
            </tr>
            <td>languages</td>
            <td><input type="checkbox" name="language[]" value="c++">C++
                <input type="checkbox" name="language[]" value="java">JAVA
                <input type="checkbox" name="language[]" value="php">PHP
            </td>
            </tr>
            <tr>
                <td>course:</td>
                <td>
                    <select name="course">
                        <option disabled selected>select</option>
                        <option value="bba">BBA</option>
                        <option value="bca">BCA</option>
                        <option value="bcom">BCOM</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>stream:</td>
                <td><select name="stream">
                        <option selected disabled>select</option>
                        <optgroup label="science">
                            <option value="engineering">engineering</option>
                            <option value="medical">medical</option>
                        </optgroup>
                        <optgroup label="commerce">
                            <option value="ca">ca</option>
                            <option value="cs">cs</option>
                        </optgroup>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>