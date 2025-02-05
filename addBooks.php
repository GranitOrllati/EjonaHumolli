<?php 

	include_once ('config.php');



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Add form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		table{
			border: 1px solid black;
			border-collapse:collapse;
		}
		th,td{
			padding: 5px 10px;
			border:1px solid black;
		}
	</style>
  

</head>
<body>

	<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Welcome</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    

      <h2>Add a new movie</h2>

      <form action="shto.php" method="POST">

      <div class="form-floating input-container">
        <input type="text" class="form-control" id="floatingInput" placeholder="Movie name" name="book_name">
        <label for="floatingInput">BOOK name</label>
      </div>
      <div class="form-floating input-container">
        <input type="text" class="form-control" id="floatingInput" placeholder="Movie Description" name="book_description">
        <label for="floatingInput">BOOK Description</label>
      </div>
      <div class="form-floating input-container">
        <input type="number" class="form-control" id="floatingInput" placeholder="Movie Quality" name="book_price" step="0.01" min="0.00">
        <label for="floatingInput">BOOK PRICE</label>
      </div>
      <div class="form-floating input-container">
        <input type="text" class="form-control" id="floatingInput" placeholder="Movie Rating" name="book_author">
        <label for="floatingInput">BOOK AUTHOR</label>
      </div>
      <div class="form-floating input-container">
        <input type="file" class="form-control" id="floatingInput" placeholder="Movie image" name="book_photo">
        <label for="floatingInput">BOOK PHOTO</label>
      </div>
      <div class="form-floating input-container">
        <input type="text" class="form-control" id="floatingInput" placeholder="Movie Quality" name="book_genre">
        <label for="floatingInput">BOOK GENRE</label>
      </div>
      <div class="form-floating input-container">
        <input type="text" class="form-control" id="floatingInput" placeholder="Movie Quality" name="book_genre2">
        <label for="floatingInput"> GENRE 2</label>
      </div>
      <div class="form-floating input-container">
        <input type="text" class="form-control" id="floatingInput" placeholder="Movie Quality" name="book_genre3">
        <label for="floatingInput">GENRE 3</label>
      </div>
      <div class="form-floating input-container">
        <input type="text" class="form-control" id="floatingInput" placeholder="Movie Quality" name="book_genre4">
        <label for="floatingInput">GENRE 4</label>
      </div>
      <div class="form-floating input-container">
        <input type="text" class="form-control" id="floatingInput" placeholder="Movie Quality" name="book_original_title">
        <label for="floatingInput">ORIGINAL title</label>
      </div>

      <div class="form-floating input-container">
        <input type="text" class="form-control" id="floatingInput" placeholder="Movie Quality" name="book_publish">
        <label for="floatingInput">PUBLSIH</label>
      </div>

      <div class="form-floating input-container">
        <input type="text" class="form-control" id="floatingInput" placeholder="Movie Quality" name="book_pages">
        <label for="floatingInput">PAGES</label>
      </div>

      <div class="form-floating input-container">
        <input type="text" class="form-control" id="floatingInput" placeholder="Movie Quality" name="book_ISBN">
        <label for="floatingInput">ISBN</label>
      </div>

       <div class="form-floating input-container">
        <input type="text" class="form-control" id="floatingInput" placeholder="Movie Quality" name="book_ISBN13">
        <label for="floatingInput">ISBN 13</label>
      </div>

      <button class="btn btn-lg btn-primary " type="submit" name="submit" style="width: 40%; margin: 20px;">Add book</button>
    </form>
   
      
      
    </main>
  </div>
</div>


	


</body>
</html>