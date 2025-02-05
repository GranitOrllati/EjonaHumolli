<?php 

    include_once('config.php');
    $query = "SELECT * FROM genre";

        $stmt = $con->prepare($query);
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
                    <a class="nav-link dropdown-toggle " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Books</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a class="dropdown-item" href="fiction_books.php">Fiction Books</a></li>
                    <li><a class="dropdown-item" href="nonfiction_books.php">Non-fiction Books</a></li>
                    <li><a class="dropdown-item" href="children_books.php">Children's & Young Adult</a></li>
                    <li><a class="dropdown-item" href="books_genres.php">Other</a></li>
                   
                  </ul>
                </li>
              </ul>
              <form class="d-flex" action="search.php" method="GET">
                <input class="form-control me-2" type="search" placeholder="Search books" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>

                
    
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  <?php foreach ($genres as $genre) {?>
<div class="col">
          <div class="card shadow-sm">
           <img src="img/<?php echo  $genre["name"]; ?>_books.jpg" width="360" height="200">
            <div class="card-body">
              <a class="card-text" href="http://localhost/php/PersonalProjectPHP/<?php echo  $genre["name"]; ?>_books.php"><?php echo $genre["name"] ;?></a>
              
            </div>
          </div>
        </div><?php 
            } ?></div>

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

    
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> 
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>


 ?>


