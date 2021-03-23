<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
</head>

<body>
    <h1>SHOPSHOCK</h1>
    <h2>Select Product to Cart</h2>
    <form action="">
        <table>
            <tr>
                <td>Product_ID : </td>
                <td><input type="text" name="product_id"></td>
            </tr>
            <tr>
                <td>Product_Code : </td>
                <td><input type="text" name="product_code"></td>
            </tr>
            <tr>
                <td>Product_Name : </td>
                <td><input type="text" name="product_name"></td>
            </tr>
            <tr>
                <td>Brand : </td>
                <td><input type="text" name="brand" disabled></td>
            </tr>
            <tr>
                <td>Unit : </td>
                <td><input type="text" name="unit"></td>
            </tr>
            <tr>
                <td>Cost : </td>
                <td><input type="text" name="cost"></td>
            </tr>
            <tr>
                <td>Quantity : </td>
                <td><input type="number" name="quantity"></td>
            </tr>
        </table>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>