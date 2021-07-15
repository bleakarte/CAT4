<?php
if (isset($_POST["btn_update"])){
    //Get values variables
    $id = $_POST["id"];
    $new_items = $_POST["items"];
    $new_quantity = $_POST["quantity"];
    $new_price = $_POST["price"];
    $new_discount = $_POST["discount"];

    //connection to db
    require_once "db_connection.php";

    //add values to db query
    $update_query = "UPDATE `items` SET `id`='$id',`items`='$new_items',`quantity`='$new_quantity',`price`='$new_price',`discount`='$new_discount' WHERE id='$id'";

    //save to db
    $update = mysqli_query($connection, $update_query);

    //check for save
    if (isset($update)){
        header("location:inventory.php");
    }else{
        echo "Item Update Failed";
    }
}