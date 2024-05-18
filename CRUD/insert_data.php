<?php 
include('../connection.php');

if(isset($_POST['shoes_btn'])){
    $shoes_item = $_POST['shoes_item'];
    $price = $_POST['price'];
    $size = $_POST['size'];  
    $quantity = $_POST['quantity'];  
    
    if($size == '' || empty($size)){
        header('location:index.php?message_insert=' . urlencode('You need to fill in the Size Name!'));
        exit(); 
    } elseif($quantity == '' || empty($quantity)){
        header('location:index.php?message_insert=' . urlencode('You need to fill in the Quantity Name!'));
        exit(); 
    }else{
        $stmt = $connect->prepare("INSERT INTO customer_cart (Item, Size, Quantity, Price) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $shoes_item, $size, $quantity, $price);
        $result = $connect->query($query);
        if ($stmt->execute()) {
            header('location:shopping_cart.php?insert_msg=' . urldecode("Succesful Added!"));
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }

}
?>
