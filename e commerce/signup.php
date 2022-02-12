<?php
if(isset($_POST['sub']))
{
	$name=$_POST['name'];
	$number=$_POST['number'];
	$pw=$_POST['pw'];

	$conn=mysqli_connect("localhost","root","","e commerce");
	$q="INSERT INTO `e commerce`.`user` (`name`, `number`,`password`) VALUES ('$name', '$number','$pw')";
	mysqli_query($conn,$q);
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
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
	<title>Sign Up</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box; 
		}
		body{
		     background-color: black;
		     width: 100%;
		     height: 110vh;
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
	</style>
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
<div class="container">
      <div class="wrapper">
        <div class="title"><span>Sign Up Form</span></div>
        <form action="#">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Write your name" required>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email or Phone" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" required>
          </div>
          <div class="row button">
            <a href="index.php"><input type="submit" formaction="sigin.php" value="Sign Up"></a>
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