<?php 
include_once("config.php");
if (empty($_SESSION['name'] )) {
        header('Location: login.php');
  }

 ?>

<!DOCTYPE html>
<html>
    <head>
    	<style type="text/css">
    		body {
    background-color: #f9f9fa;
    align-content: center;
    align-items: center;
}

.padding {
    padding: 3rem !important;
    margin-top: 5%;
}

.user-card-full {
    overflow: hidden;
    width: 900px;
    align-content: center;
    align-items: center;
}


.bg-c-lite-green {
/*        background: -webkit-gradient(linear, left top, right top, from (#04b49c) , to (#f99711));*/
background-image: linear-gradient(1deg, #D4E2D4, #FFCACC, #FDCEDF);
}

.user-profile {
    padding: 20px 0;
}

.m-b-25 {
    margin-bottom: 55px;
}

.m-b-25 {
	margin-top: 55px;
}


.card-block {
    padding: 1.25rem;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.m-b-20 {
    margin-bottom: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.card .card-block p {
    line-height: 25px;
}

.text-muted {
    color: #919aa3 !important;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.f-w-600 {
    font-weight: 600;
}

.m-b-20 {
    margin-bottom: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.m-b-10 {
    margin-bottom: 10px;
}

.user-card-full .social-link li {
    display: inline-block;
}

.user-card-full .social-link li a {
    font-size: 24px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.center{
	margin-left: -28%;
}

#media{
	margin-left: 65px;
    margin-top: 15%;
}



    	</style>

        <meta charset="utf-8">
        <title>LoveBooks</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pushster&family=Varela+Round&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/login_style.css">
    </head>
    <body>

        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img src="img/logo.png" class="hvr-rotate">
        <a class="navbar-brand" href="index.php">LoveBooks</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a href="myCart.php"><img src="img/cart.png" style="margin-top: 10px;"></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="btn btn-outline-primary nav-link" href="#" role="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" id="offcanvas">Books</a>
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

	    	<div class="padding">
    <div class="container d-flex justify-content-center">
        <div class="col-xl-6 col-md-12 center">
            <div class="card user-card-full">
                <div class="row m-l-0 m-r-0">
                    <div class="col-sm-4 bg-c-lite-green user-profile">
                        <div class="card-block text-center text-white">
                            <div class="m-b-25">
                                <img src="img/profile.png">
                            </div>
                            <h6 class="f-w-600" style="font-size: 25px">Welcome <?php echo $_SESSION['name']; ?></h6>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card-block intro-section-footer" id="media">
                            <na class="footer-nav">
                                <a href="comingsoon/coming.php">Facebook</a>
                                <a href="comingsoon/coming.html">Twitter</a>
                                <a href="comingsoon/coming.html">Gmail</a>
                            </na>
                        </div>
                    </div>
                </div>
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