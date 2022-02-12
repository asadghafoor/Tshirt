<!doctype html>
<html lang="en">

<head>
  <style type="text/css">
    #whatsNew_sec1{
    border: 5px solid rgb(77, 77, 77);
    width: 850px;
    height: 450px !important;
    margin: 27px 40px;
    background-color: rgb(54, 54, 54);
}
#whatsNew_sec1 h3{
    color: rgb(163, 163, 163);
    font-family: 'Tinos', serif;
    font-size: 25px;
    margin: 16px;
}
    #right_sec22{
      border: solid black 1px;
    background-color: rgb(224, 224, 224);
    float: right;
    width: 26%;
    height: 161.5vh;
    display: inline;
   margin: -80.9% 38px;
    padding: 1px 1px;
    position: absolute;
    right: 0px;
    border-radius: 10px;
    }
    #right_sec22 h5{
   text-transform: uppercase;
   border: solid 1px gray;
   background-color: white;
   border-radius: 5px;
   padding: 7px 21px;
    font-size: 16px;
    font-weight: bold;
    margin: 10px;
}
#right_sec22 ul{

    margin: 0px 9px;
    padding: 1px 1px;
}
    #right_sec22 #cat_list li{
    border-radius: 3px;
    list-style: none;
    border-bottom: dotted gray 1px;
    background-color: white;
    margin: 1px 1px;
    padding: 1px 1px;
    color: red;
    font-size: 14px;
}
#right_sec22 #seller_list li{
    border-radius: 3px;
    list-style: none;
    border-bottom: dotted gray 1px;
    margin: 1px 1px;
    padding: 4px 1px;
    color: red;
    font-size: 14px;
}
#gaurent_img{
    height: 121px;
    width: 270px;
    margin: 60px 45px;
}
.price1 {
    text-align: center;
    color: rgb(163, 163, 163);
    font-size: 15px;
    line-height: 0;
    margin: 9px 0px;
}

  </style>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome CDN -->
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

  <title>t-Shirt Store</title>
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
  <section>
    <div id="slide">
      <div id="box1">
        <div id="right_box">
          <img src="images/foldedtshirts-removebg-preview.png" alt="t-shirts">
        </div>
        <div id="right_box1">
          <h2>Style</h2>
          <h4>Your own Create</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente error quam consequuntur perspiciatis,
            consequatur!</p>
        </div>
      </div>
    </div>
    <div id="diff_tshirt">
      <div id="box2">
        <div id="desc">
          <h3>Different <span style="color:red;">T-Shirt</span></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.,
            consequatur!</p>
          <br>
          <a href="product.php">Click Here</a>
        </div>
        <div id="img_div">
          <img src="images/tshirtss.png" alt="t-shirts">
        </div>
      </div>
    </div>
    <div id="whatsNew_sec1">
      <h3>What's New Here</h3>
      <hr style="color: rgb(163, 163, 163); height: 3px; width: 666px; margin: -11px 16px;">
      <div id="container">
        <div class="imagess">
          <img src="images/polo.png" alt="">
        </div>
        <div class="imagess">
          <img src="images/marvel.png" alt="">
        </div>
        <div class="imagess">
          <img src="images/super.png" alt="">
        </div>
      </div>
      <div id="container2">
         <div class="img_desc">
          <h6 class="heading1">Polo t-Shirt</h6>
          <p class="price1">price: 1800</p>
          <a href="shipping.php">Buy Now</a>
        </div>
         <div class="img_desc">
          <h6 class="heading1">Marvel t-Shirt</h6>
          <p class="price1">price: 2100</p>
          <a href="shipping1.php">Buy Now</a>
        </div>
         <div class="img_desc">
          <h6 class="heading1">Super Man t-Shirt</h6>
          <p class="price1">price: 1800</p>
          <a href="shipping2.php">Buy Now</a>
        </div>
    </div>
  </section>

  <aside>
    <div id="right_sec22">
      <h5>Categories</h5>
      <ul id="cat_list">
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Animals</li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;ArtSymbols</li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Cartoons</li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;FoodDrink</li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Funny</li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Holidays</li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Lifestyle</li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Movies/TV</li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Music</li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Nature</li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;People</li>
      </ul>
      <h5>BESTSELLERS</h5>
      <ul id="seller_list">
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u>FAMOUS S-S Buster Tee
            1</u></li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u>Fake Holister
            T-Shirt</u></li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u>CE MENS T-Shirt</u>
        </li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u>ALPNESTAR MENS
            T-Shirt</u></li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u>Fake Holister
            T-Shirt</u></li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u>MAU GUNS T-Shirt</u>
        </li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u>LOST GUYS T-Shirt</u>
        </li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u>FAMOUS S-S Chest
            Buster Tee 1</u></li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u>CHEMICAL T-Shirt</u>
        </li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u>MJ CHE WHO T-Shirt</u>
        </li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u>BE RICH JUNGLE
            T-Shirt</u></li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u>BE RICH JUNGLE
            T-Shirt</u></li>
        <li>&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u>BE RICH JUNGLE
            T-Shirt</u></li>
      </ul>
      <img id="gaurent_img" src="person.png" alt="gaurented pic">
    </div>
  </aside>

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


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>

</body>

</html>