<?php
include_once('config.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $user_type = $_POST['user_type'];

    // Update the user data in the database
    $sql = "UPDATE users SET name = :name, lastname = :lastname, username = :username, email = :email, user_type = :user_type WHERE id = :id";
    $prep = $con->prepare($sql);
    $prep->bindParam(':name', $name);
    $prep->bindParam(':lastname', $lastname);
    $prep->bindParam(':username', $username);
    $prep->bindParam(':email', $email);
    $prep->bindParam(':user_type', $user_type);
    $prep->bindParam(':id', $id);
    $prep->execute();

    // Redirect back to the user table
    header("Location: admin.php");
}
?>
