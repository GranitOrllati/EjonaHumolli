<?php
// include_once("config.php");

// $bookNames = isset($_GET['name']) ? $_GET['name'] : array();
// $bookPrices = isset($_GET['price']) ? $_GET['price'] : array();

// if (isset($_GET['book_name']) && isset($_GET['book_price']) && isset($_GET['quantity'])) {
//     $bookName = urldecode($_GET['book_name']);
//     $bookPrice = urldecode($_GET['book_price']);
//     $quantity = intval($_GET['quantity']);
//     $total = floatval($bookPrice); // Total for a single book
// } else {
//     // Checkout for all cart items
//     $total = 0;

//     foreach ($bookPrices as $price) {
//         $total += floatval($price);
//     }
// }

include_once("config.php");

if (isset($_GET['book_name']) && isset($_GET['book_price']) && isset($_GET['quantity'])) {
    // Checkout for a single item
    $bookName = urldecode($_GET['book_name']);
    $bookPrice = floatval(urldecode($_GET['book_price']));
    $quantity = intval($_GET['quantity']);
    $total = $bookPrice * $quantity; // Calculate total for a single item
} elseif (isset($_GET['name']) && isset($_GET['price'])) {
    // Checkout for all cart items
    $bookNames = $_GET['name'];
    $bookPrices = $_GET['price'];
    $quantities = $_GET['quantity'];

    $total = 0;

    // Calculate total for all items
    for ($i = 0; $i < count($bookPrices); $i++) {
        $bookPrice = floatval($bookPrices[$i]);
        $quantity = intval($quantities[$i]);
        $total += $bookPrice * $quantity;
    }
} else {
    $total = 0;
}

?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Checkout</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pushster&family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="form-validation.css" rel="stylesheet">
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

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed" action="final.php" method="POST">
              <ol>
              <?php if (isset($bookName) && isset($bookPrice)): ?>
    <h5 class="my-0"><?php echo $bookName; ?></h5>
    <span class="text-muted">$<?php echo $bookPrice; ?></span>
<?php else: ?>
    <!-- Display book names and prices for all cart items checkout -->
    <ol style="margin-left:-10% ;">
        <?php for ($i = 0; $i < count($bookNames); $i++): ?>
            <li> 
    <h5 class="my-0"><?php echo $bookNames[$i]; ?>
<span class="text-muted"><?php echo " - $" . $bookPrices[$i]; ?></span></h5>
</li>
        <?php endfor; ?>
    </ol>
<?php endif; ?>
  </ol>
</li>


            
            
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$<?php echo number_format($total, 2); ?></strong>
            </li>
          </ul>

          
          




        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate action="final.php" method="POST"> 
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="<?php echo $_SESSION['name']; ?>" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>


            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" name="address2">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" name="country" required>
                  <option value="">Choose...</option>
                  <option value="United States">United States</option>
    <option value="Canada">Canada</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="Australia">Australia</option>
    <option value="Germany">Germany</option>
    <option value="France">France</option>
    <option value="Japan">Japan</option>
    <option value="China">China</option>
    <option value="India">India</option>
    <option value="Brazil">Brazil</option>
    <option value="Mexico">Mexico</option>
    <option value="Italy">Italy</option>
    <option value="South Korea">South Korea</option>
    <option value="Spain">Spain</option>
    <option value="Netherlands">Netherlands</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Singapore">Singapore</option>
    <option value="Russia">Russia</option>
    <option value="Turkey">Turkey</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="South Africa">South Africa</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Argentina">Argentina</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
          
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" name="zip_code" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <!-- <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div> -->
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="payment_method" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="payment_method" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="payment_method" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="pay_door" name="payment_method" type="radio" class="custom-control-input" required onchange="toggleCreditCardFields()">
                <label class="custom-control-label" for="pay_at_the_door">Pay At the Door</label>
              </div>
            </div>
          <div id="creditCardFields">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" name="name_on_card" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="numberInput" placeholder="" name="credit_card_number" maxlength="16" oninput="validateInput()" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" name="card_expiration" pattern="\d{2}/\d{2}" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="numberCvv" placeholder="" name="card_cvv" maxlength="3" oninput="validateInputCvv()" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4"></div>
            <button class="btn btn-primary btn-lg btn-block" type="submit" >Complete Purchase</button>
          </form>
            
            
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
      (function() {
  'use strict';

  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }

        // Check if "Pay at the Door" is selected, and if so, skip card details validation
        var payAtTheDoorRadio = document.getElementById("pay_door");
        if (payAtTheDoorRadio.checked) {
          // No need to validate card details, so reset the validation message
          var creditCardInput = document.getElementById("numberInput");
          var cvvInput = document.getElementById("numberCvv");
          creditCardInput.setCustomValidity("");
          cvvInput.setCustomValidity("");
        }

        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

function validateInput() {
  var input = document.getElementById("numberInput");
  var numbersOnly = input.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
  input.value = numbersOnly.substring(0, 16); // Limit to 16 digits

  // Optionally, you can show a message if the input is not exactly 16 digits long
  if (numbersOnly.length !== 16) {
    input.setCustomValidity("Please enter exactly 16 numbers.");
  } else {
    input.setCustomValidity(""); // Reset the custom validation message
  }
}

function validateInputCvv() {
  var input = document.getElementById("numberCvv");
  var numbersOnly = input.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
  input.value = numbersOnly.substring(0, 3); // Limit to 3 digits

  // Optionally, you can show a message if the input is not exactly 3 digits long
  if (numbersOnly.length !== 3) {
    input.setCustomValidity("Please enter exactly 3 numbers.");
  } else {
    input.setCustomValidity(""); // Reset the custom validation message
  }
}

function toggleCreditCardFields() {
  var creditCardFields = document.getElementById("creditCardFields");
  var payAtTheDoorRadio = document.getElementById("pay_door");
  var paymentMethodRadios = document.querySelectorAll('[name="payment_method"]');

  // Check if "Pay at the Door" is selected
  if (payAtTheDoorRadio.checked) {
    creditCardFields.style.display = "none"; // Hide the fields

    // No need to validate card details, so reset the validation message
    var creditCardInput = document.getElementById("numberInput");
    var cvvInput = document.getElementById("numberCvv");
    creditCardInput.setCustomValidity("");
    cvvInput.setCustomValidity("");
  } else {
    // Check if any other payment method is selected
    var otherPaymentSelected = false;
    for (var i = 0; i < paymentMethodRadios.length; i++) {
      if (paymentMethodRadios[i].checked && paymentMethodRadios[i] !== payAtTheDoorRadio) {
        otherPaymentSelected = true;
        break;
      }
    }

    if (otherPaymentSelected) {
      creditCardFields.style.display = "block"; // Show the fields
    } else {
      creditCardFields.style.display = "none"; // Hide the fields
    }
  }
}

// Add a change event listener to the payment method radios
var paymentMethodRadios = document.querySelectorAll('[name="payment_method"]');
for (var i = 0; i < paymentMethodRadios.length; i++) {
  paymentMethodRadios[i].addEventListener('change', toggleCreditCardFields);
}

// Initial call to the function
toggleCreditCardFields();

    </script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> 
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>