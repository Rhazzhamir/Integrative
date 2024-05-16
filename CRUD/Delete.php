<?php include('../connection.php') ?>

<?php
    
    if(isset($_GET['Id'])){
        try {
            $id = $_GET['Id'];
    
            $query = "DELETE FROM customer_cart WHERE Id = $id";
            $result = $connect->query($query);
            header('Location:Shopping_cart.php?delete_msg=' . urlencode('Deleted Success!'));

        }catch(Exception $error) {
            die("Query Failed" . $error); 
            }
    }

?>
