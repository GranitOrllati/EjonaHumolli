<?php
include_once('final.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_id = $_SESSION['id']; 

    //$total_amount = 100.50; 
    $address = $_POST['address'];
    $country = $_POST['country'];
    $zip_code = $_POST['zip_code'];
    $payment_method = $_POST['payment_method'];
    $name_on_card = $_POST['name_on_card'];
    $credit_card_number = $_POST['credit_card_number'];
    $card_expiration = $_POST['card_expiration'];
    $card_cvv = $_POST['card_cvv'];

    // Assuming you have the cart items stored in an array called $cart_items
    // You can loop through $cart_items to insert order items into the 'order_items' table

    include_once('config.php');

    $order_insert_sql = "INSERT INTO orders (user_id, order_date, address, country, zip_code, payment_method, name_on_card, credit_card_number, card_expiration, card_cvv) VALUES (:user_id, NOW(), :address, :country, :zip_code, :payment_method, :name_on_card, :credit_card_number, :card_expiration, :card_cvv)";
    $order_insert_prep = $con->prepare($order_insert_sql);

    $order_insert_prep->bindParam(':user_id', $user_id);
    $order_insert_prep->bindParam(':address', $address);
    $order_insert_prep->bindParam(':country', $country);
    $order_insert_prep->bindParam(':zip_code', $zip_code);
    $order_insert_prep->bindParam(':payment_method', $payment_method);
    $order_insert_prep->bindParam(':name_on_card', $name_on_card);
    $order_insert_prep->bindParam(':credit_card_number', $credit_card_number);
    $order_insert_prep->bindParam(':card_expiration', $card_expiration);
    $order_insert_prep->bindParam(':card_cvv', $card_cvv);

    if ($order_insert_prep->execute()) {

        $order_id = $con->lastInsertId();

        foreach ($cart_item as $cart_items) {
            $book_id = $cart_items['book_id'];
            // $quantity = $cart_item['quantity'];

            $order_items_insert_sql = "INSERT INTO order_items (order_id, book_id) VALUES (:order_id, :book_id)";
            $order_items_insert_prep = $con->prepare($order_items_insert_sql);
            $order_items_insert_prep->bindParam(':order_id', $order_id);
            $order_items_insert_prep->bindParam(':book_id', $book_id);
            // $order_items_insert_prep->bindParam(':quantity', $quantity);
            $order_items_insert_prep->execute();
        }

        header('Location: successful_order.php');
    } else {
        echo "Error: Unable to place the order.";
    }
} else {
    echo "Invalid request.";
}
?>
