<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    #whatsNew_sec1{
    border: 5px solid rgb(77, 77, 77);
    width: 30%;
    height: 70vh !important;
    margin: 27px 48px;
    background-image: linear-gradient(white, black);
}
    
  
    #imagess{
    background-color: black;
    width: 60%;
    height:40vh;
    margin: 45px 78px;
    border-radius: 10px;
}
#imagess img{
  margin: 16px 34px;
  

}
#container2{
  margin: 0px 76px; 
}
.img_desc3{
    width: 229px;
    height: 92px;
    background-color: rgb(77, 77, 77);
    margin: -26px 80px;
    border-radius: 5px;
}
.heading2{
    text-align: center;
    color: rgb(212, 212, 212);
    font-size: 13px;
    line-height: 0.8;
    margin: 18px 0px;
}
.price {
    text-align: center;
    color: rgb(163, 163, 163);
    font-size: 12px;
    line-height: 0;
    margin: 0px 0px;
}
.img_desc3 .details{
    color: rgb(163, 163, 163);
    font-size: 12px;
    margin: 0px 82px;
    line-height: 0;
}
.img_desc3 a{
    color: rgb(255, 255, 163);
    margin: 0px 67px;
    font-size: 14px;
}

  #whatsNew_sec2{
    border: 5px solid rgb(77, 77, 77);
    width: 180%;
    height: 110vh !important;
    margin: 100px -5px;
    background-color: rgb(54, 54, 54);
}
#whatsNew_sec2 h3{
    color: rgb(163, 163, 163);
    font-family: 'Tinos', serif;
    font-size: 25px;
    margin: 16px;
}


  ::selection{
  background: rgba(26,188,156,0.3);
}
.container{
  max-width: 440px;
  padding: 0 20px;
  margin: 70px auto;
}
.wrapper{
  width: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
}
.wrapper .title{
  height: 90px;
  background: #16a085;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form{
  padding: 30px 25px 25px 25px;
}
.wrapper form .row{
  height: 45px;
  margin-bottom: 15px;
  position: relative;
}
.wrapper form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 16px;
  transition: all 0.3s ease;
}
form .row input:focus{
  border-color: #16a085;
  box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
}
form .row input::placeholder{
  color: #999;
}
.wrapper form .row i{
  position: absolute;
  width: 47px;
  height: 100%;
  color: #fff;
  font-size: 18px;
  background: #16a085;
  border: 1px solid #16a085;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass{
  margin: -8px 0 20px 0;
}
.wrapper form .pass a{
  color: #16a085;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover{
  text-decoration: underline;
}
.wrapper form .button input{
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: #16a085;
  border: 1px solid #16a085;
  cursor: pointer;
}
form .button input:hover{
  background: #12876f;
}
.wrapper form .signup-link{
  text-align: center;
  margin-top: 20px;
  font-size: 17px;
}
.wrapper form .signup-link a{
  color: #16a085;
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}
#d1{
  float: right;
}
.price1 {
    text-align: center;
    color: rgb(163, 163, 163);
    font-size: 15px;
    line-height: 0;
    margin: 16px 0px;
}
#p1{
  margin: 0px 10px;
  color: white;
}
#d3{
  display: flex;
  margin: 0px 10px;
}
#d3 a{
  margin: 0px 10px;
  text-decoration: none;
  color: black;
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
        <div id="container">
        <div id="imagess">
          <img src="images/tommy.png" alt="">
        </div>
      </div>
             <div id="container2">
         <div class="img_desc">
          <h6 class="heading1">Tommy Hilfiger t-Shirt</h6>
          <p class="price1">price: 1200</p>
           <p id="p1">Payment<span style="color: #e3bdbd;"> Cash on Delivery</span></p>
        </div>
      </div>
    </div>
      

    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Shipping Address</span></div>
        <form action="#">
          <div class="row">
            <i class="fas fa-"></i>
            <input type="text" placeholder="Name" required>
          </div>
          <div class="row">
            <i class="fas fa-"></i>
            <input type="text" placeholder="Last name" required>
          </div>
           <div class="row">
            <i class="fas fa-"></i>
            <input type="number" placeholder="Number" required>
          </div>
           <div class="row">
            <i class="fas fa-"></i>
            <input type="text" placeholder="Address" required>
          </div>
           <div class="row">
            <i class="fas fa-"></i>
            <input type="text" placeholder="City" required>
          </div>
           <div class="row">
            <i class="fas fa-"></i>
            <input type="number" placeholder="Postal code" required>
          </div>
          <div class="row button">
            <a href="index.php"><input type="submit" formaction="index.php" value="Submit"></a>
          </div>
           <div id="d3">
           <p>its optional</p>
           <a href="sigin.php">Sign In</a>
           <a href="signup.php">Sign Up</a>
         </div>
         
        </form>
      </div>
    </div>
     



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