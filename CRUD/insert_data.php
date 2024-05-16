<?php 
include('../connection.php');

?>

<?php
    if(isset($_POST['shoes_btn'])){
        $shoes_item = $_POST['shoes_item'];
        $price = $_POST['price'];
        $Size = $_POST['size'];
        $Quantity = $_POST['quantity'];
        
        $query = "INSERT INTO 'customer_cart'(Item , Size , Quantity , Price) VALUE($shoes_item , $price , $Size , $Quantity)";
        $connect->query($query);
    }
?>
    
?>
