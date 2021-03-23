<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h2>ShopShock Member Register</h2>
    <form action="sumphp/addmember.php" name="formcheck" onsubmit="check()" method="post">
        <table>
            <tr>
                <td><strong>Name :</strong></td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td><strong>Username :</strong></td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td><strong>Password :</strong></td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td><strong>Confirm Password :</strong></td>
                <td><input type="password" name="conpassword" required></td>
            </tr>
        </table>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

<script>
    function check() {
        if (document.formcheck.password.value != document.formcheck.conpassword.value) {
            alert("กรุณากรอกรหัสผ่านให้ตรงกัน");
            return false;
        }
    }
</script>
</html>