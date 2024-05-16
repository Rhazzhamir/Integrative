<?php
    include('../connection.php');


    if(isset($_POST['Id'])){
        $Id = $_POST['Id'];
        $Size = $_POST['size'];
        $Quantity = $_POST['Quantity'];
    
        $query = "UPDATE customer_cart SET Size = '$Size', Quantity = '$Quantity' WHERE Id = '$Id'";
        $connect->query($query);
    }
    header('location: Shopping_cart.php?Update_msg=' .urldecode('Update Success'));    