<?php 
	include_once('config.php');


	if(isset($_POST['submit'])){
		$review_text = $_POST['review_text'];
		$date = date('Y-m-d H:i:s');
		$bookId = $_POST["book_id"];

		$sql = "INSERT INTO reviews(review_text, date, book_id) VALUES (:review_text, :date, :book_id)";

		$insertReview = $con->prepare($sql);

		$insertReview->bindParam(':review_text', $review_text);
		$insertReview->bindParam(':date', $date);
		$insertReview->bindParam(':book_id', $bookId); // Use $bookId instead of $book_id

		$insertReview->execute();

        

// Use concatenation instead of PHP tags
	}header("Location: book.php?id=" . $bookId);
exit();
?>
