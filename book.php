<?php 

    include_once('config.php');


    $book_id = $_GET['id'];

// Fetch book data
$sql = "SELECT b.*, g.name
        FROM books AS b
        JOIN book_genre AS bg ON b.book_id = bg.book_id
        JOIN genre AS g ON bg.genre_id = g.id
        WHERE b.book_id = :book_id";



        
$selectedBook = $con->prepare($sql);
$selectedBook->bindParam(":book_id", $book_id);
$selectedBook->execute();
$book_data = $selectedBook->fetch();

$book_name = $book_data['book_name'];
$book_author = $book_data['book_author'];
//genre name
$name = $book_data['name'];
//other
$book_description = $book_data['book_description'];
$book_photo = $book_data['book_photo'];
$book_original_title = $book_data['book_original_title'];
$book_publish = $book_data['book_publish'];
$book_pages = $book_data['book_pages'];
$book_ISBN = $book_data['book_ISBN'];
$book_ISBN13 = $book_data['book_ISBN13'];




$sqlReviews = "SELECT r.review_text,date
               FROM reviews AS r
               WHERE r.book_id = :book_id";

$selectedReviews = $con->prepare($sqlReviews);
$selectedReviews->bindParam(":book_id", $book_id);
$selectedReviews->execute();
$reviews_data = $selectedReviews->fetchAll();



$query = "SELECT g.name FROM genre g
                  INNER JOIN book_genre bg ON g.id = bg.genre_id
                  WHERE bg.book_id = :book_id";

        $stmt = $con->prepare($query);
        $stmt->bindParam(':book_id', $book_id);
        $stmt->execute();

        $genres = $stmt->fetchAll(PDO::FETCH_ASSOC);

        


?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title><?php echo $book_data['book_name'];   ?></title>

			<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

		    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

			<link rel="stylesheet" href="css/jquery-ui.css">
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css2?family=Pushster&family=Varela+Round&display=swap" rel="stylesheet">

			<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">  
		    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"> </script>  
		    <script src = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"> </script>  
		    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
		    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
		    <style type="text/css">
		    	
.hidden {
            display: none;
        }
        #bookDetails{
           padding-left: 3%;
        
        }
#bookDetails h3 {
    margin-bottom: 2%;
}

#bookDetails h4 {
    margin-top: 3%;
    margin-bottom: 2%;
}

#bookDetails h1 {
    margin-bottom: 3%;
}

#bookDetails .d-flex {
    width: 25%;
    margin-bottom: 3%;
}

#bookDetails p {
    margin-bottom: 1%;
}

#add_to_cart{
    width: 100%;
}

		    </style> 
        

	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <div class="container-fluid" >
          <img src="img/logo.png">
          <a class="navbar-brand" href="index.php">LoveBooks</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll" >
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px; ">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a href="myCart.php"><img src="img/cart.png" style="margin-top: 10px;"></a>
                    <a class="nav-link" href="myCart.php">My Cart</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="btn btn-outline-primary nav-link" href="#" role="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" id="offcanvas">Books</a>
                </li>
              </ul>
              <form class="d-flex" action="search.php" method="GET">
                <input class="form-control me-2" type="search" placeholder="Search books" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style="margin-top: 6.5%;">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="list-group">
        <a href="biography_books.php" class="list-group-item list-group-item-action">Biography</a>
        <a href="children_books.php" class="list-group-item list-group-item-action">Children's</a>
        <a href="classics_books.php" class="list-group-item list-group-item-action">Classics</a>
        <a href="fiction_books.php" class="list-group-item list-group-item-action">Fiction</a>
        <a href="history_books.php" class="list-group-item list-group-item-action">Historical</a>
        <a href="mystery_books.php" class="list-group-item list-group-item-action">Mystery</a>
        <a href="novel_books.php" class="list-group-item list-group-item-action">Novel</a>
        <a href="nonfiction_books.php" class="list-group-item list-group-item-action">Non-Fiction</a>
        <a href="politics_books.php" class="list-group-item list-group-item-action">Politics</a>
        <a href="romance_books.php" class="list-group-item list-group-item-action">Romance</a>
        <a href="science_books.php" class="list-group-item list-group-item-action">Science</a>
        <a href="thriller_books.php" class="list-group-item list-group-item-action">Thriller</a>
        <a href="young_books.php" class="list-group-item list-group-item-action">YA</a>
</div>
    </div>
</div>

		<section id="book-container">

			<div class="row">

				<div class="col-4"><img src="img/<?php echo $book_data['book_photo'];   ?>" width='350'>
				</div>

				<div class="col-5" id="bookDetails">
    <h3 ><?php echo $book_name = $book_data['book_name']; ?></h3>
    <h4>by <?php echo $book_author = $book_data['book_author']; ?></h4>
    <h1><?php echo $book_data['book_price']; ?> $</h1>
    <form method="post" action="add_to_cart.php" id="cartForm">
        <div class="d-flex" style=" width:  25%;">
            <div type="button" class="btn btn-link px-2" onclick="adjustQuantity(this, -1)">
                <i class="fas fa-minus" style="color: #049c84;"></i>
            </div>
            <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" />
            <div type="button" class="btn btn-link px-2" onclick="adjustQuantity(this, 1)">
                <i class="fas fa-plus" style="color: #049c84;"></i>
            </div>
        </div>

        <input type="hidden" name="book_id" value="<?php echo $book_id; ?>">
        <button type="button" class="btn btn-outline-success" onclick="addToCart()" id="add_to_cart">Add to Cart</button>
    </form>
    <hr>
    <p><b><?php echo $book_data['book_pages']; ?></b><br><?php echo $book_data['book_publish']; ?></p>
    <p><b>Original Title:</b><?php echo $book_data['book_original_title']; ?></p>
    <p><b>ISBN:</b><?php echo $book_data['book_ISBN']; ?> , (<b>ISBN13:</b> <?php echo $book_data['book_ISBN13']; ?>)</p>
    <button onclick="toggleText()" class="btn" style="width: 100%;">More</button>
    <?php 
    $showText = false; // Change this variable to control visibility

    if ($showText) {
        echo '<p>' . $book_data['book_description'] . '</p>';
    } else {
    ?><div id="more" class="hidden"><h2>Description</h2>
        <?php echo '<p>' . $book_data['book_description'] . '</p>';}?></div>
        
</div>




				<div class="col-3"> 
					<h3>Genre</h3><?php 
					if (count($genres) > 0) {
      
            echo "<ul>";
            foreach ($genres as $genre) {
                ?><a href="http://localhost/php/PersonalProjectPHP/<?php echo  $genre["name"]; ?>_books.php"><?php   echo "<li>" . $genre["name"] . "</li>";?></a><?php 
            }
            echo "</ul>";
        } else {
            echo "<p>No genres found for Book ID $book_id.</p>";
        } ?>
			
       		<div id="reviews">
       			<h3>Reviews</h3>
       			<!-- Shfaq reviews te fundit, max 4 -->
       			<?php
usort($reviews_data, function($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});
$reviewsDisplayed = 0; 

foreach ($reviews_data as $review) {
    if ($reviewsDisplayed < 4) { 
        ?>
        <ul id="per">
            <li>
                <?php
                $review_text = $review['review_text'];
                $date = $review['date'];
                echo "<p>$review_text</p>";
                echo "<p>$date</p>";
                ?>
            </li>
        </ul>
        <?php
        $reviewsDisplayed++;
    } else {
        break; 
    }
}
?>
       			<ul><form class="d-flex" method="POST" action="shtoReview.php">
    <textarea class="form-control me-2 " id="input-review" placeholder="Write a review" name="review_text">Write a review...</textarea>
    <input type="hidden" name="book_id" value="<?php echo $book_id; ?>">
    <button class="btn btn-outline-success" type="submit" name="submit">Go</button>
</form>


</ul>

       			

					</div>
    		</div> 
			</div>
				
			
		</section>


		<div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">&copy; 2022 LoveBooks, Inc</p>

        <a href="index.php" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <img src="img/logo.png"></a>

        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="index.php" class="nav-link px-2 ">Home</a></li>
          <li class="nav-item"><a href="myCart.php"><img src="img/cart.png"></a></li>
          <li class="nav-item"><a href="books.html" class="nav-link px-2 ">Books</a></li>
        </ul>
      </footer>
    </div>


        <script>
        function toggleText() {
            var textElement = document.querySelector('.hidden');
            textElement.style.display = (textElement.style.display === 'none') ? 'block' : 'none';
        }

    function adjustQuantity(button, change) {
        // Get the input element
        var input = button.parentElement.querySelector('input[type="number"]');
        
        // Get the current quantity value
        var currentQuantity = parseInt(input.value);
        
        // Calculate the new quantity
        var newQuantity = currentQuantity + change;
        
        // Ensure the new quantity is not less than 1
        newQuantity = Math.max(newQuantity, 1);
        
        // Update the input field with the new quantity
        input.value = newQuantity;
    }

    function addToCart() {
        // Get the form element
        var form = document.getElementById("cartForm");

        // Submit the form programmatically
        form.submit();
    }


</script>
	</body>
</html>


 ?>


