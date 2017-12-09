<?php

require_once (__DIR__.'/vendor/autoload.php');

use ChatApp\Session;
use Dotenv\Dotenv;
$dotenv = new Dotenv(__DIR__);
$dotenv->load();

// die("Hello");
if (Session::get('start') != null) {
    header("Location:".getenv('APP_URL')."/views/account.php");
}
?>
  <!Doctype html>
  <html>

  <head>
  <div class="text-center">
    <h1 class="text -center "> OPEN CHAT </h1>
    <img src="https://github.com/ankitjain28may/openchat/blob/master/public/assests/img/icon.png?raw=true" width="80" height="80">
    </div>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="public/assests/js/jquery-3.0.0.min.js"></script>
    <link rel="stylesheet" href="public/assests/css/bootstrap.min.css">
  

    <!-- Latest compiled JavaScript -->
    <script src="public/assests/js/bootstrap.min.js"></script>
    <style type="text/css">
body
{background-image:url('https://mfiles.alphacoders.com/620/620054.jpg');

  background-size:100%;

}
      .navbar {
                border-radius: 0;
              }
              .heading {
                padding: 10px;
              }
            input {
              border-radius: 0px;
            }

       h1
       {
        font-family:Comic Sans MS;
  color:orange;
  font-style:bold;
  font-size:50px;
  padding-up:20px;
  color:white;
       }    
       .container
       {
        width:500px;
        height:450px;
        margin-top:30px;
        margin-left:50px;
        background:rgba(255,255,255,0.3);
        border-radius:15px;
        margin-right:auto;
        margin-left:auto;

       } 
       #wrapper {
zoom: 1;
filter: alpha(opacity=90);
opacity: 0.9;
}

#content {
background-color: transparent;
}
#content {
background-color: transparent!important;
}
h2
{
  color:white;
  font-style:bold;
}

    </style>
  </head>

  <body>
   
    <!-- Navbar -->
    <nav class="navbar navbar-inverse">
      <div class=-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
          <a class="navbar-brand" href="">OpenChat</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
        <!--     <li><a href="#Register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#Login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Body --
    <div class="><br><br>
      <div class="row">

      <!-- Login -->
        <div class="col-sm-4 col-sm-offset-1">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="heading" >LOGIN</h2>
            </div>
            <hr>
          </div>
          <form>
          <div class="container">
            <div class="form-group">
              <label for="login" id="loginLabel" class="large">Email or Username</label>
              <input type="text" name="login" id="login" class="form-control login login-submit" placeholder="Email or Username">
            </div>
            <div class="form-group">
              <label for="passLogin" id="passLabelLogin">Password</label>
              <input type="password" name="passLogin" id="passLogin" class="form-control" placeholder="Password">
              </br>
              <a href="#">Forgot Password</a>
            </div>
            <button type="button" class="btn btn-success" onclick="loginCheck()" value="Login">Submit</button>
          </form>
        </div>
        </div>

        <!-- Register -->
        <div class="col-sm-4 col-sm-offset-2">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 color="white">REGISTER</h2>
            </div>
            <hr>
          </div>
          <div class="container">
          <form>
            <div class="form-group">
              <label for="name" id="nameLabel">Your Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="email" id="emailLabel">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email id">
            </div>
            <div class="form-group">
              <label id="userLabel">Username</label>
              <input type="text" name="username" id="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
              <label id="mobLabel">Mobile No.</label>
              <input type="text" name="mob" id="mob" class="form-control" placeholder="99******00">
            </div>
            <div class="form-group">
              <label for="passRegister" id="passLabelRegister">Password</label>
              <input type="password" name="passRegister" id="passRegister" class="form-control" class="form-control" placeholder="Password">
            </div>
            <button type="button" class="btn btn-success" onclick="registerCheck()" value="Register">Register</button>
          </form>
        </div>
      </div>
      <br><br><br>
    </div>
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="public/assests/js/login_validate.js"></script>
    <script type="text/javascript" src="public/assests/js/register_validate.js"></script>
  </body>


  </html>
