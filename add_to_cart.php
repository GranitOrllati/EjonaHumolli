<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['book_id'])) {
    $book_id = $_POST['book_id'];

    // Get the quantity from the form
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1; // Default to 1 if quantity is not set or invalid

    if (isset($_SESSION['id'])) {
        $user_id = $_SESSION['id'];

        include_once('config.php');

        $book_check_sql = "SELECT * FROM books WHERE book_id = :book_id";
        $book_check_prep = $con->prepare($book_check_sql);
        $book_check_prep->bindParam(':book_id', $book_id);
        $book_check_prep->execute();

        if ($book_check_prep->rowCount() > 0) {
            $cart_id_sql = "SELECT cart_id FROM cart WHERE user_id = :user_id";
            $cart_id_prep = $con->prepare($cart_id_sql);
            $cart_id_prep->bindParam(':user_id', $user_id);
            $cart_id_prep->execute();

            if ($cart_id_prep->rowCount() > 0) {
                $cart_id = $cart_id_prep->fetchColumn();

                $insert_sql = "INSERT INTO cart_items (cart_id, book_id, quantity) VALUES (:cart_id, :book_id, :quantity)";
                $insert_prep = $con->prepare($insert_sql);
                $insert_prep->bindParam(':cart_id', $cart_id);
                $insert_prep->bindParam(':book_id', $book_id);
                $insert_prep->bindParam(':quantity', $quantity);
                $insert_prep->execute();

                header("Location: MyCart.php");
                exit();
            } else {
                header("Location: cart_not_found.php");
                exit();
            }
        } else {
            echo "Book not found.";
        }
    } else {
        header("Location: not_logged.php");
        exit();
    }
}
 ?>