<?php
include_once('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve user data based on the provided ID
    $sql = "SELECT * FROM users WHERE id = :id";
    $prep = $con->prepare($sql);
    $prep->bindParam(':id', $id);
    $prep->execute();
    $user = $prep->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // The user with the provided ID exists
        // Display a form to edit the user data
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
            form{
                width: 75%;
                margin-top: 5%;
                margin-left: 1%;

            }
            .input-group{
                width: 50%;
            }
            #basic-addon1{
                width: 20%;
            }
            .btn{
                margin-left: 20%;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <div class="container-fluid" >
                <img src="img/logo.png" class="hvr-rotate">
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
                            <a href=""><img src="img/cart.png" style="margin-top: 10px;"></a>
                            <a class="nav-link" href="myCart.php">My Cart</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Books</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="fiction_books.php">Fiction Books</a></li>
                    <li><a class="dropdown-item" href="nonfiction_books.php">Non-fiction Books</a></li>
                    <li><a class="dropdown-item" href="children_books.php">Children's & Young Adult</a></li>
                    <li><a class="dropdown-item" href="fantasy_books.php">Fantasy</a></li>
                    <li><a class="dropdown-item" href="romance_books.php">Romance</a></li>
                          </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-link dropdown-toggle pushRight" href="#" id="navbarScrollingDropdown profileDropdown profile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="img/profile.png">
                            </div>
                            <ul class="dropdown-menu pushRight2" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="user.php" data-toggle="modal">User</a></li>
                            <li><a class="dropdown-item" href="login.php">LogIn</a></li>
                            <li><a class="dropdown-item" href="logout.php">Log-Out</a></li>
                          </ul>
                        </li>
                    </ul>
                    
                  
                </div>
            </div>
        </nav>
    
    <h2>Edit User</h2>
            <form action="update.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                    <input type="text" class="form-control" value="<?php echo $user['name']; ?>" aria-label="Name" aria-describedby="basic-addon1" name="name" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Lastname</span>
                    <input type="text" class="form-control" value="<?php echo $user['lastname']; ?>" aria-label="Name" aria-describedby="basic-addon1" name="lastname" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                    <input type="text" class="form-control" value="<?php echo $user['email']; ?>" aria-label="Name" aria-describedby="basic-addon1" name="email" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Userame</span>
                    <input type="text" class="form-control" value="<?php echo $user['username']; ?>" aria-label="Name" aria-describedby="basic-addon1" name="username" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">User Role</span>
                    <input type="text" class="form-control" value="<?php echo $user['user_type']; ?>" aria-label="Name" aria-describedby="basic-addon1" pattern="(user|admin)" title="Please enter either 'user' or 'admin' in lowercase." name="user_type" required>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <button type="submit" name="submit" class="btn btn-light">Update</button>
            </form>
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
        echo "User not found.";
    }
}
?>



        