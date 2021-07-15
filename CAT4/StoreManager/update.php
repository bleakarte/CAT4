<?php
//update values
if (isset($_GET["my_id"])){

    $received_id = $_GET["my_id"];
    $received_items =$_GET["my_items"];
    $received_quantity =$_GET["my_quantity"];
    $received_price =$_GET["my_price"];
    $received_discount =$_GET["my_discount"];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--  connections-->
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Product Entry</title>
</head>
<body>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <form class="form" method="post" action="update_handler.php">
            <h1 class="text-center">Thrift Store</h1>
            <!--            product name-->
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $received_id;?>">
                <label>
                    <input name="items" value="<?php echo $received_items;?>" type="text" placeholder="ITEM">
                </label>
            </div>
            <!--            quantity-->
            <div class="form-group">
                <label>
                    <input name="quantity" value="<?php echo $received_quantity;?>" type="text" placeholder="QUANTITY">
                </label>
            </div>
            <!--            price-->
            <div class="form-group">
                <label>
                    <input name="price" value="<?php echo $received_price;?>" type="text" placeholder="PRICE">
                </label>
            </div>
            <!--            discount-->
            <div class="form-group">
                <label>
                    <input name="discount" value="<?php echo $received_discount;?>" type="text" placeholder="DISCOUNT">
                </label>
            </div>
            <!--            buttons-->
            <div class="form-group">
                <label>
                    <input name="btn_update" type="submit" value="UPDATE">
                </label>
            </div>
            <div class="form-group">
                <label>
                    <a href="inventory.php" class="btn-outline-danger">CANCEL</a>
                </label>
            </div>
        </form>
    </div>
    <div class="col-4"></div>
</div>
</body>
</html>




