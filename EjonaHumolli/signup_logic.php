<?php
include_once('config.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $temp_password = $_POST['password'];
    $password = password_hash($temp_password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, lastname, username, email, password) VALUES (:name, :lastname, :username, :email, :password)";
    $prep = $con->prepare($sql);
    $prep->bindParam(':name', $name);
    $prep->bindParam(':lastname', $lastname);
    $prep->bindParam(':username', $username);
    $prep->bindParam(':email', $email);
    $prep->bindParam(':password', $password);
    $prep->execute();

    // Get the user ID of the newly inserted user
    $user_id = $con->lastInsertId();

    // Create a new cart entry for the user in the 'cart' table
    $cart_sql = "INSERT INTO cart (user_id) VALUES (:user_id)";
    $cart_prep = $con->prepare($cart_sql);
    $cart_prep->bindParam(':user_id', $user_id);
    $cart_prep->execute();

    header("Location: login.php");
}
?>
