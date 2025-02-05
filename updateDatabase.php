<?php
include_once('config.php'); // Include your database configuration

if(isset($_POST['submit'])){
    $newQuantity = $_POST['quantity'];
    $bookId = $_POST['book_id']; // Assuming you're sending book_id along with the quantity

    $sql = "UPDATE cart_items SET quantity = ? WHERE book_id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ii", $newQuantity, $bookId); // Assuming book_id is an integer

    
}
?>
