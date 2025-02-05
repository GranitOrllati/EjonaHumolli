<?php 
	
	include_once('config.php');

	if(isset($_POST['submit'])){

		$book_name = $_POST['book_name'];
		$book_description = $_POST['book_description'];
		$book_price = $_POST['book_price'];
		$book_author = $_POST['book_author'];
		$book_photo = $_POST['book_photo'];
		$book_genre = $_POST['book_genre'];
		$book_genre2 = $_POST['book_genre2'];
		$book_genre3 = $_POST['book_genre3'];
		$book_genre4 = $_POST['book_genre4'];
		$book_publish = $_POST['book_publish'];
		$book_pages = $_POST['book_pages'];
		$book_ISBN = $_POST['book_ISBN'];
		$book_ISBN13 = $_POST['book_ISBN13'];
		$book_original_title = $_POST['book_original_title'];


		$sql = "INSERT INTO books(book_name, book_description, book_price, book_author, book_photo, book_genre, book_genre2, book_genre3, book_genre4, book_publish, book_pages, book_ISBN, book_ISBN13, book_original_title) VALUES (:book_name, :book_description, :book_price, :book_author, :book_photo, :book_genre, :book_genre2, :book_genre3, :book_genre4, :book_publish, :book_pages, :book_ISBN, :book_ISBN13, :book_original_title)";

		$insertMovie = $con->prepare($sql);

		$insertMovie->bindParam(':book_name', $book_name);
		$insertMovie->bindParam(':book_description', $book_description);
		$insertMovie->bindParam(':book_price', $book_price);
		$insertMovie->bindParam(':book_author', $book_author);
		$insertMovie->bindParam(':book_photo', $book_photo);
		$insertMovie->bindParam(':book_genre', $book_genre);
		$insertMovie->bindParam(':book_genre2', $book_genre2);
		$insertMovie->bindParam(':book_genre3', $book_genre3);
		$insertMovie->bindParam(':book_genre4', $book_genre4);
		$insertMovie->bindParam(':book_publish', $book_publish);
		$insertMovie->bindParam(':book_pages', $book_pages);
		$insertMovie->bindParam(':book_ISBN', $book_ISBN);
		$insertMovie->bindParam(':book_ISBN13', $book_ISBN13);
		$insertMovie->bindParam(':book_original_title', $book_original_title);

		$insertMovie->execute();

		echo("Book Added successfully");


	}




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 <button><a href="addBooks.php">Add Books</a></button>
 </body>
 </html>