<?php include_once('config.php');

    if (isset($_SESSION['id'])) {
        $user_id = $_SESSION['id'];

        $cart_id_sql = "SELECT cart_id FROM cart WHERE user_id = :user_id";
        $cart_id_prep = $con->prepare($cart_id_sql);
        $cart_id_prep->bindParam(':user_id', $user_id);
        $cart_id_prep->execute(); 
        $cart_id_result = $cart_id_prep->fetch(PDO::FETCH_ASSOC);
        $cart_id = $cart_id_result['cart_id'];

        $fetch_data_sql = "SELECT ci.*, b.*
                  FROM cart_items ci
                  INNER JOIN books b ON ci.book_id = b.book_id
                  WHERE ci.cart_id = :cart_id
                  ORDER BY ci.item_id DESC";  
$fetch_data_prep = $con->prepare($fetch_data_sql);
$fetch_data_prep->bindParam(':cart_id', $cart_id);
$fetch_data_prep->execute();
$cart_items = $fetch_data_prep->fetchAll(PDO::FETCH_ASSOC);?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>My Cart</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pushster&family=Varela+Round&display=swap" rel="stylesheet">


    <style type="text/css">
      body{
        text-align: center;
        align-items: center;
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

    <h1 style="margin-top: 7%;">My Cart</h1>


 <div class="row d-flex justify-content-center align-items-center h-100">
  <?php if (empty($cart_items)) {
        echo "Your cart is empty.";
    }else?>
    <div class="col-12">

        <?php   { foreach ($cart_items as $cart_item): ?>
            <div class="card rounded-3 mb-4">
                <div class="card-body p-4">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-4" style="margin: -5%;">
                            <img src="img/<?php echo $cart_item['book_photo']; ?>" width='170' >
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                            <p><b><?php echo $cart_item['book_name']; ?></b><br>
                                <?php echo $cart_item['book_author']; ?>
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <p> Quantity <br><?php echo $cart_item['quantity']; ?></p>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-1 offset-lg-1">
                            <h5 class="mb-0">$<?php echo $cart_item['book_price'] ?></h5>
                            <a href="checkout.php?book_name=<?php echo urlencode($cart_item['book_name']); ?>&book_price=<?php echo urlencode($cart_item['book_price']); ?>&quantity=<?php echo urlencode($cart_item['quantity']); ?>">
    <button class="btn btn-outline-success checkout-button">Checkout</button>
</a>

                            <br><br>
                            <a href="deleteBook.php?book_id=<?php echo $cart_item['book_id']; ?>" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div><?php endforeach; }?>

        <a href="checkout.php?<?php
foreach ($cart_items as $cart_item) {
    echo "name[]=" . urlencode($cart_item['book_name']) . "&price[]=" . urlencode($cart_item['book_price']) . "&quantity[]=" . urlencode($cart_item['quantity']) . "&";
}
?>">    <button class="btn btn-outline-success checkout-all-button">Checkout All</button>
</a>

    </div>
    
</div>


            
    

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
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body></html>
<?php } ?>