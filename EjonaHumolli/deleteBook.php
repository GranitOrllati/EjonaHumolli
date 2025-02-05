<?php 
include_once('config.php');

if (isset($_GET['book_id'])) {
    $book_id = $_GET['book_id'];

    // Delete the book from cart_items table
    $delete_sql = "DELETE FROM cart_items WHERE book_id = :book_id";
    $delete_prep = $con->prepare($delete_sql);
    $delete_prep->bindParam(':book_id', $book_id);
    $delete_prep->execute();

    // Redirect back to the shopping cart page
    header("Location: MyCart.php");
    exit;
} ?>