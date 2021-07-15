<?php
if (isset($_POST["btn_submit"])){
    //Get values variables
    $items = $_POST["items"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];

    //connection to db
    require_once "db_connection.php";

    //add values to db query
    $insert_query = "INSERT INTO `items`(`id`, `items`, `quantity`, `price`, `discount`) VALUES (null,'$items','$quantity','$price','$discount')";

    //save to db
    $save = mysqli_query($connection, $insert_query);

    //check for save
    if (isset($save)){
        header("location:product_entry.php");
        echo "Item Successfully Added";
    }else{
        echo "Item Entry Failed";
    }
}