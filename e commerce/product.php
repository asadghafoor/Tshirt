<!DOCTYPE html>
<html>
<head>
	<title>Product details</title>
	<style type="text/css">
		#whatsNew_sec1{
    border: 5px solid rgb(77, 77, 77);
    width: 1180px;
    height: 850px !important;
    margin: 27px 70px;
    background-color: rgb(54, 54, 54);
}
#whatsNew_sec1 h3{
    color: rgb(163, 163, 163);
    font-family: 'Tinos', serif;
    font-size: 25px;
    margin: 16px;
}
#container img{
    width: 206px;
    height: 248px;
}
#container{
    display: flex;
}
.imagess{
    background-color: black;
    margin: 45px 13px;
    border-radius: 10px;
}
#container2{
    display: flex;
}
.price1 {
    text-align: center;
    color: rgb(163, 163, 163);
    font-size: 15px;
    line-height: 0;
    margin: 9px 0px;
}
	</style>
	<script src="https://kit.fontawesome.com/5dd0938756.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <div id="head">
      <img id="logo" src="images/site_logo-removebg-preview.png" alt="Site Logo">
      <label for="curr" id="label">Currencies:</label>
      <select id="curr">
        <option value="rupee">PAK Rupee</option>
        <option value="dollar">US Dollar</option>
        <option value="takk0">Takko</option>
      </select>
      <button id="btn">Change</button>
      <span id="vertical_line"></span>
      <div id="box">
        <div id="right_box">
          <img src="images/unnamed-removebg-preview.png" alt="Shoping Cart">
        </div>
        <div id="left_box">
          <h6>Shoping Cart</h6>
          <p>Show Cart 0 Product</p>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark menu">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product.php">Product </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sigin.php">Sign In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Sign Up</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div id="whatsNew_sec1">
       <h3>Different <span style="color:red;">T-Shirt</span></h3>
      <hr style="color: rgb(163, 163, 163); height: 3px; width: 666px; margin: -11px 16px;">
      <div id="container">
        <div class="imagess">
          <img src="images/reebok.png" alt="">
        </div>
        <div class="imagess">
          <img src="images/gucci.png" alt="">
        </div>
        <div class="imagess">
          <img src="images/tommy.png" alt="">
        </div>
        <div class="imagess">
          <img src="images/bron.png" alt="">
        </div>
         <div class="imagess">
          <img src="images/blue.png" alt="">
        </div>
      </div>
      <div id="container2">
        <div class="img_desc">
          <h6 class="heading1">Reebok t-Shirt</h6>
          <p class="price1">price: 1000</p>
          <a href="shipping3.php">Buy Now</a>
        </div>
        <div class="img_desc">
          <h6 class="heading1">Gucci t-Shirt</h6>
          <p class="price1">price: 1100</p>
          <a href="shipping4.php">Buy Now</a>
        </div>
        <div class="img_desc">
          <h6 class="heading1">Tommy Hilfiger t-Shirt</h6>
          <p class="price1">price: 1200</p>
          <a href="shipping5.php">Buy Now</a>
        </div>
        <div class="img_desc">
          <h6 class="heading1">Born Again t-Shirt</h6>
          <p class="price1">price: 1000</p>
          <a href="shipping6.php">Buy Now</a>
        </div>
         <div class="img_desc">
          <h6 class="heading1">Blue Camo Spandex t-Shirt</h6>
          <p class="price1">price: 1100</p>
          <a href="shipping7.php">Buy Now</a>
        </div>
      </div>
      <div id="container">
        <div class="imagess">
          <img src="images/av.png" alt="">
        </div>
        <div class="imagess">
          <img src="images/nike.png" alt="">
        </div>
        <div class="imagess">
          <img src="images/money.png" alt="">
        </div>
        <div class="imagess">
          <img src="images/adiddas.png" alt="">
        </div>
         <div class="imagess">
          <img src="images/puma.png" alt="">
        </div>
      </div>
      <div id="container2">
        <div class="img_desc">
          <h6 class="heading1">Avengers t-Shirt</h6>
          <p class="price1">price: 1400</p>
          <a href="shipping8.php">Buy Now</a>
        </div>
         <div class="img_desc">
          <h6 class="heading1">Nike t-Shirt</h6>
          <p class="price1">price: 1500</p>
          <a href="shipping9.php">Buy Now</a>
        </div>
         <div class="img_desc">
          <h6 class="heading1">Bella Ciao t-Shirt</h6>
          <p class="price1">price: 1600</p>
          <a href="shipping10.php">Buy Now</a>
        </div>
         <div class="img_desc">
          <h6 class="heading1">Adiddas t-Shirt</h6>
          <p class="price1">price: 1700</p>
          <a href="shipping11.php">Buy Now</a>
        </div>
          <div class="img_desc">
          <h6 class="heading1">Puma t-Shirt</h6>
          <p class="price1">price: 2000</p>
          <a href="shipping12.php">Buy Now</a>
        </div>
      </div>
    </div>
  </section>
    <footer>
    <div id="footer_imgs">
      <div id="acc_pics">
        <img src="images/download.png" alt="paypal">
        <img src="images/visa-removebg-preview.png" alt="visa">
        <img src="images/mastercard.png" alt="mastercard">
        <a href="index.php" id="footer_menu" class="footer_menu1">HOME</a>
        <a href="product.php" class="footer_menu1">Product</a>
        <a href="sigin.php" class="footer_menu1">Sign In</a>
        <a href="signup.php" class="footer_menu1">Sign Up</a>
        <p id="copyright">Copyright &copy; 2021 T-Shirt Store | All Rights Reserved</p>
      </div>
    </div>
  </footer>

</body>
</html>