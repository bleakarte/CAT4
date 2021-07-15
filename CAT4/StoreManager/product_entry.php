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
            <form class="form" method="post" action="entry_handler.php">
                <h1 class="text-center">Thrift Store</h1>
    <!--            product name-->
                <div class="form-group">
                    <input name="items" type="text" placeholder="ITEM" class="form-control">
                </div>
    <!--            quantity-->
                <div class="form-group">
                    <input name="quantity" type="text" placeholder="QUANTITY" class="form-control">
                </div>
    <!--            price-->
                <div class="form-group">
                    <input name="price" type="text" placeholder="PRICE" class="form-control">
                </div>
    <!--            discount-->
                <div class="form-group">
                    <input name="discount" type="text" placeholder="DISCOUNT" class="form-control">
                </div>
    <!--            buttons-->
                <div class="form-group">
                    <input name="btn_submit" class="btn-success form-control" type="submit" value="SUBMIT">
                </div>
                <div class="form-group">
                    <button class="btn-outline-primary form-control"><a href="inventory.php" name="btn_inventory">INVENTORY</a></button>
                </div>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</body>
</html>
