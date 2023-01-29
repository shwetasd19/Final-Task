<?php session_start();
//Put session start at the beginning of the file
?>

<!doctype html>
<html lang="en">

<head>
  <title>Outfitwale</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link
    href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Poppins:wght@400;500&family=Rowdies:wght@300&display=swap"
    rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <script>
    (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })
  </script>
  <script src="store.js" async></script>

  <script src="https://sdk.cashfree.com/js/ui/2.0.0/cashfree.sandbox.js"></script>

</head>

<body id="allbody" style="font-family:  'Poppins', sans-serif ,'Rowdies', cursive;">


  <!-- navigation bar -->
  <header class="fixed-top">
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><img src="IMG_20230116_234640.jpg" class=" img-fluid"
            style="width: 75px; margin-left:2px;"></a>

      </div>
      </div>
    </nav>
    <nav class="navbar  navbar-expand-lg" style="background-color:#ef452e;">
      <div class="container-fluid">
        <a class="navbar-brand" style="color:white;" href="index.html">candidate final task </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
          aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px; ">
          
            <li class="nav-item">
              <a class="nav-link " style="color:white;" aria-current="page" href="Mens.html">
                <button type="button" class="btn btn-light">MEN</button></a>
            </li>
         
           
          </ul>
          <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path
                  d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
              </svg></i>
            <span class="badge rounded-pill bg-danger cart-count">0<span class="visually-hidden">items</span></span>
          </button>
          &nbsp &nbsp
        </div>
      </div>
    </nav>
  </header>

  <br>
  <div style="margin-top:100px;"></div>




  <div class="container">

    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4 shadow-lg img-fluid" src="20230116_232835_997.jpg" alt="" width="472rem"
        height="257rem">
      <h2 style="color:#ef452d;">CHECKOUT NOW</h2>
    </div>
    <div class="row g-5">
      <div class="col-md-7 col-lg-7 ">
        <div class="d-flex justify-content-between">
          <h1>YOUR CART</h1>
          <span class="badge rounded-pill bg-danger cart-count" style="font-size: 34px;">0<span
              class="visually-hidden">items</span></span>
        </div><br><br>

        <div class="cart-items">


        </div>

        <h3 STYLE="COLOR:RED; text-align: left !important;">TOTAL PRICE : <svg xmlns="http://www.w3.org/2000/svg"
            width="26" height="26" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
            <path
              d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
          </svg><SPAN class="total-price">0</SPAN> </h3>
        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-danger">Redeem</button>
          </div>
        </form>

      </div>

      <div class="col-md-5 col-lg-5 order-md-last" style="color:#ef452d;">
        <div class="card">





          <div class="card-body">

            <div class="container mt-5">
              <form action="pay2.php" method="post" >
                <div class="form-group">

                  Name: <input class="form-control" type="text" name="customername"> <br>
                  Email: <input class="form-control" type="email" name="email" id=""> <br>
                  Contact No: <input class="form-control" type="number" name="phone"><br>

                  
                  <button id="button1111" type="submit" class="btn tn-success">Pay Now</button>
                  
                  <hr class="my-4">
                  <div class="d-flex">
                    <h3 STYLE="COLOR:RED; text-align: left !important;">TOTAL CART VALUE : <svg
                        xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                        class="bi bi-currency-rupee" viewBox="0 0 16 16">
                        <path
                          d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                      </svg></h3>
                    <h4><textarea style="color:red;" class="total-price" name="price" readonly rows="1" cols="6">0</textarea></h4>
                  </div>

              </form>
            </div>
          </div>


          <div class="card-body">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" validate name="shoping" id="shoping" action="pay2.php" method="post">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label style="color:#ef452d;" for="firstName" class="form-label">First
                    name</label>
                  <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Your Name"
                    value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label style="color:#ef452d;" for="lastName" class="form-label">Last
                    name</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Your Last Name"
                    value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>

                <div class="col-12">
                  <label style="color:#ef452d;" for="Number" class="form-label">Mobile
                    Number</label>
                  <div class="input-group has-validation">

                    <input type="number" class="form-control" id="Number" name="phone" placeholder="Your MobileNumber"
                      required>
                    <div class="invalid-feedback">
                      Your Number is required.
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <label style="color:#ef452d;" for="emailll" class="form-label">Email </label>
                  <input type="email" class="form-control" id="emailll" name="email" placeholder="you@example.com">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>

                <div class="col-12">
                  <label style="color:#ef452d;" for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St"
                    required>
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>

                <div class="col-12">
                  <label style="color:#ef452d;" for="address2" class="form-label">Address 2 (Near
                    By)<span class="text-muted"></span></label>
                  <input type="text" class="form-control" id="address2" name="" placeholder="Apartment or suite">
                </div>

                <div class="col-md-5">
                  <label style="color:#ef452d;" for="country" class="form-label">Country</label>
                  <select class="form-select" id="country" name="country" required>
                    <option value="">Choose...</option>
                    <option>India</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>

                <div class="col-md-4">

                  <label style="color:#ef452d;" for="State" class="form-label">State</label>
                  <input type="text" class="form-control" id="State" name="State" placeholder="Your State" value=""
                    required>

                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>

                <div class="col-md-3">
                  <label style="color:#ef452d;" for="zip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code" required>
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div>


                <div class="col-sm-6">
                  <label style="color:#ef452d;" for="yoursize" class="form-label">Your Size</label>
                  <select class="form-select" id="yoursize" name="yoursize" required>
                    <option value="">Choose...</option>
                    <option>Small (28)</option>
                    <option>Medium (29)</option>
                    <option>Large (30)</option>
                    <option>X-Large (31)</option>
                    <option>XX-Large (32)</option>
                  </select>
                </div>


                <div class="col-sm-6">
                  <label style="color:#ef452d;" for="yourcolor" class="form-label">Color</label>
                  <select class="form-select" id="yourcolor" name="yourcolor" required>
                    <option value="">Choose...</option>
                    <option style="background-color: black; color: rgb(229, 232, 35);">Black
                    </option>
                    <option style="background-color: white; color: red;">White</option>
                    <option style="background-color: yellow; color: rgb(41, 36, 36);">Yellow
                    </option>
                    <option style="background-color: pink; color: rgb(92, 113, 198);">Pink</option>
                    <option style="background-color: lightgreen; color: rgb(99, 59, 93);">
                      Light-Green</option>
                  </select>

                </div>
              </div>
              <hr class="my-4">

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address" name="same-address">
                <label style="color:#ef452d;" class="form-check-label" for="same-address">Shipping
                  address
                  is the same as my
                  billing address</label>
              </div>



              <hr class="my-4">
              <h3 STYLE="COLOR:RED; text-align: left !important;">TOTAL CART VALUE : <svg
                  xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                  class="bi bi-currency-rupee" viewBox="0 0 16 16">
                  <path
                    d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                </svg>

              </h3>
              <button type="submit" class="btn tn-success">Pay Now</button>

            </form>

          </div>
        </div>
        <!-- <div style="margin-top:20px; display:none;"> -->
        <span class="order-token">Payment Session Id :</span> <input type="text" placeholder="order_token"
          id="paymentSessionId" value="<?php echo $_SESSION['session']; ?>" class="inputText">
        <!-- </div> -->
        <button id="demo" class="w-100 btn btn-danger btn-lg" style="margin-top:40px;">ORDER AND
          PAY</button>


      </div>
    </div>
  </div>
 

  <!-- jquey -->
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


  <script>
    document.getElementById("demo").addEventListener("click", render);



    function render() {
      let paymentSessionId = document.getElementById("paymentSessionId").value;
      if (paymentSessionId == "") {
        alert("No session_id specified");
        return
      };
      const cf = new Cashfree(paymentSessionId);
      cf.redirect();
    };

  </script>
</body>




</html>