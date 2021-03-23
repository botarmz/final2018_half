<?php
require "sumphp/conn.php";
$sql = "SELECT *FROM product";
$query = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productlist</title>
</head>

<body>
    <h1>ยินดีต้อนรับเข้าสู่เมนูลูกค้า</h1>
    <a href="#">สั่งซื้อสินค้า</a>&nbsp;<a href="#">ชำระเงิน</a>&nbsp;<a href="#">ออกจากระบบ</a>
    <h1>SHOPSHOCK</h1>
    <h2>Select Product to Cart</h2>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Product_code</th>
            <th>Product_Name</th>
            <th>Brand</th>
            <th>Unit</th>
            <th>Cost</th>
            <th>SHOPS</th>
        </thead>
        <?php while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $brandsql = "SELECT Brand_name FROM brand INNER JOIN product ON brand.Brand_id = {$result["Brand_ID"]}";
            $brandquery = mysqli_query($conn, $brandsql);
            $brand_result = mysqli_fetch_array($brandquery, MYSQLI_ASSOC);

            $unitsql = "SELECT Unit_name FROM unit INNER JOIN product ON unit.Unit_id = {$result["Unit_ID"]}";
            $unitquery = mysqli_query($conn, $unitsql);
            $unit_result = mysqli_fetch_array($unitquery, MYSQLI_ASSOC);
        ?>
            <tr>
                <td><?php echo $result["Product_id"] ?></td>
                <td><?php echo $result["Product_code"] ?></td>
                <td><?php echo $result["Product_Name"] ?></td>
                <td><?php echo $brand_result["Brand_name"] ?></td>
                <td><?php echo $unit_result["Unit_name"] ?></td>
                <td><?php echo $result["Cost"] ?></td>
                <td><a href="#">
                        < ShobShock>
                    </a></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>