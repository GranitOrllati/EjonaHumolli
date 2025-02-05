<?php 

    include_once ('config.php');

  // if (empty($_SESSION['name'])) {
  //       header('Location: login.php');
  // }

 ?>

<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>Sign up</title>

        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pushster&family=Varela+Round&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
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
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href=""><img src="img/cart.png" style="margin-top: 10px;"></a>
                            <a class="nav-link" href="#">My Cart</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Books</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="popular_books.html">Popular Books</a></li>
                            <li><a class="dropdown-item" href="fiction_books.html">Fiction Books</a></li>
                            <li><a class="dropdown-item" href="nonfiction_books.html">Non-fiction Books</a></li>
                            <li><a class="dropdown-item" href="children_books.html">Children's & Young Adult</a></li>
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

        	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-md-7 intro-section">
          <div class="brand-wrapper">
            <h1><a href="https://stackfindover.com/">LoveBooks</a></h1>
          </div>
          <div class="intro-content-wrapper">
            <h1 class="intro-title">Welcome!</h1>
            <p class="intro-text">We’ve gathered the best books of 2022, a great mix of literary superstars, sizzling summer getaways and terrifying winter lockdowns and nuanced nonfiction, nostalgic musings and of course, some truly exemplary contemporary fiction.</p>
            <a href="index.php" class="btn btn-read-more">Explore now</a>
          </div>
          <div class="intro-section-footer">
            <na class="footer-nav">
              <a href="comingsoon/coming.php">Facebook</a>
              <a href="comingsoon/coming.html">Twitter</a>
              <a href="comingsoon/coming.html">Gmail</a>
            </na>
          </div>
        </div>
        <div class="col-sm-6 col-md-5 form-section">
          <div class="login-wrapper">
            <h2 class="login-title">Sign up</h2>
            <form action="signup_logic.php" method="POST">
              <div class="form-group">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="lastname" class="sr-only">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname">
              </div>
              <div class="form-group">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group mb-3">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
              </div>
              <div class="d-flex justify-content-between align-items-center mb-5">
                <input name="submit" id="signup" class="btn login-btn" type="submit" value="Sign Up">
                
              </div><p style="font-size: 15px;">You already have an account?<a href="login.php">Log In here!</a></p>
            </form>           
          </div>
        </div>
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
              <li class="nav-item"><a href="#"><img src="img/cart.png"></a></li>
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
