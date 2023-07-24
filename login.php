
<?php
session_start();
//include''; // dbconnect
if(isset($_POST['post']))
{
    if(!empty($_POST['password']) &&
        !empty($_POST['user'])) 
        {
            echo" <h1>debug chek1 </h1> ";
            $password=$_POST['password'];
            $user=$_POST['user'];
            
        }
 
    echo"<h1>debug chek2 </h1>";
    
}


?>

<!DOCTYPE html>
<html lang="en">
    
<!--<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #2d94b5;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #2d94b5;
    font-size: 50px;
  }
  .service-icon{
    height: 70px;
    width: 70px;
  }
  .logo {
    color: #2d94b5;
    font-size: 200px;
    
  }
  .logo-nav{
    height: 200px;
    width: 150px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #2d94b5;
  }
  .carousel-indicators li {
    border-color: #2d94b5;
  }
  .carousel-indicators li.active {
    background-color: #2d94b5;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #2d94b5; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #2d94b5;
    background-color: #fff !important;
    color: #2d94b5;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #2d94b5 !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #2d94b5;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #2d94b5;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
    
    
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #2d94b5 !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #2d94b5;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>-->
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
  
  </nav>

  <div class="jumbotron text-center">
    <!-- Jumbotron code here -->
    <h1>login</h1>
  </div>

  <!--<form action="" method="post" name="loginform">-->
  <form action="" method="post"  class="input-group">
    <div class="input-group">
     Email   <input type="email" class="form-control" size="100%" name="user" placeholder="Email Address" required>

      <br><br>
      
      Password   <input type="password" class="form-control" size="50" name="password" placeholder="password" requird>
      <br><br>
      
    </div>
    <div class="input-group-btn">
     <input  type="submit" value="login" name="post" size="50" class="btn btn-danger">
      </div>
  </form>

<!--<form action="" method="post"  class="input-group">

 

<label>User Name</label>  <input type="password" class="form-control" size="50" name="password" placeholder="password" requird>
	// <input type="text" class="form-control" name="user" required> 
	<br><br>
	<label>Password</label>  <input type="password" class="form-control" size="50" name="password" placeholder="password" requird>
	 //input type="Password" class="form-control" name="password" required> 
	<br><br>
	
	<input type="submit" name="post" value="login">
    

</form>-->

  <footer class="container-fluid text-center">
    
  
  <p> &copy; Copyright   2023 </p>
  <p> &reg; Sutuaa</p>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
