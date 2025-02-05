<?php
include_once('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete user based on the provided ID
    $sql = "DELETE FROM users WHERE id = :id";
    $prep = $con->prepare($sql);
    $prep->bindParam(':id', $id);
    $prep->execute();

    // Redirect back to the user table
    header("Location: index.php");
}
?>
