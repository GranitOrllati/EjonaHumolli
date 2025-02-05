<?php
include_once('config.php');
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'admin') {



 //Fetch data from the users table
$sql = "SELECT * FROM users";
$prep = $con->prepare($sql);
$prep->execute();
$data = $prep->fetchAll(PDO::FETCH_ASSOC);


$sql = "SELECT * FROM books";
$prep = $con->prepare($sql);
$prep->execute();
$book_data = $prep->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>LoveBooks</title>

        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pushster&family=Varela+Round&display=swap" rel="stylesheet">
    <style type="text/css">
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
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
<div class="row">   
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary col-2" style="width: 280px; margin-left: 1%;">
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="admin.php"  class="nav-link link-body-emphasis">
          Users
        </a>
      </li>
      <li>
        <a href="book_admin.php" class="nav-link link-body-emphasis">
          Books
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          Orders
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          Products
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          Customers
        </a>
      </li>
    </ul>
    <hr>
  </div>

    
    <div class="col-10">   
    <table class="table" style="width: 75%; margin: -42% 0 0 35%;">
  <thead>
    <tr>
      <th scope="col">User_Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">User role</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php foreach ($data as $row): ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['user_type']; ?></td>
            <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>


<div class="col-10">   
    <table class="table" style="width: 75%; margin: 0 0 0 35%;">
  <thead>
    <tr>
      <th scope="col">Book_Id</th>
      <th scope="col">Book Name</th>
      <th scope="col">Price </th>
      <th scope="col">Book Author</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php foreach ($book_data as $row): ?>
    <tr>
      <td><?php echo $row['book_id']; ?></td>
            <td><?php echo $row['book_name']; ?></td>
            <td><?php echo $row['book_price']; ?></td>
            <td><?php echo $row['book_author']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>


    
<div class="container">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">&copy; 2022 LoveBooks, Inc</p>

            <a href="#" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
             <img src="img/logo.png">
            </a>

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

<?php
} else {
    // Redirect the user to a different page, such as a login page
    header("Location: login.php");
    exit();
}
?>
