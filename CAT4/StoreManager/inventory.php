<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--  connections-->
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

        <title>Inventory</title>
</head>
<body>
    <h1 class="text-info, text-center">Thrift Store Inventory
    <button class="btn btn-outline-info"><a href="product_entry.php">Add Item</a></button>
    </h1>

    <table class="table table-striped table-hover">
        <tr>
            <th>ITEM</th>
            <th>QUANTITY</th>
            <th>PRICE</th>
            <th>DISCOUNT</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>

        <?php
        //db connection
        require_once "db_connection.php";

        //display query
        $select_query = "SELECT `id`, `items`, `quantity`, `price`, `discount` FROM `items` WHERE 1";

        //inventory mysqli query
        $inventory = mysqli_query($connection,$select_query);

        //data display variable
        while ($row = mysqli_fetch_assoc($inventory)){
        extract($row);
        echo "
            <tr>
            <td>$items</td>
            <td>$quantity</td>
            <td>$price</td>
            <td>$discount</td>
            <td><a href='update.php?my_id=$id&my_items=$items&my_quantity=$quantity&my_price=$price&my_discount=$discount' class='btn btn-info'>UPDATE</a></td>
            <td><a href='delete.php?my_id=$id' class='btn btn-danger'>DELETE</a></td>
        </tr>
        ";
        }

        ?>
    </table>


</body>
</html>

