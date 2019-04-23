<?php
  session_start();
?>
<DOCTYPE html>
  <html>
    <head>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <meta charset="utf-8">
      <meta name="description" content="Heres a description.">
      <meta name=viewport content="width=device-width, initial-scale=1">
      <title></title>

    </head>
    <body>

      <header>
          <nav class="navbar navbar-inverse">

            <div class="container-fluid">


            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">Portfolio</a></li>
              <li><a href="#">About Me</a></li>
              <li><a href="#">Contact</a></li>
            </ul>

            <div>
              <?php
                if(isset($_SESSION["userId"])) {
                  echo '
                  <form class="navbar-form navbar-right" action="includes/logout.inc.php" method="post">
                    <button class="form-control" type="submit" name="logout-submit">Logout</button>
                  </form>
                  ';
                }
                else {
                  echo '
                  <form class="navbar-form navbar-right" action="includes/login.inc.php" method="post">
                    <input class="form-control" type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input class="form-control" type="password" name="pwd" placeholder="Password...">
                    <button class="form-control" type="submit" name="login-submit">Login</button>
                  </form>
                  <form class="navbar-form navbar-right" action="signup.php" method="get">
                    <button class="form-control" type="submit" name="signup-submit">Signup</button>
                  </form>
                  ';
                }

              ?>

            </div>
          </nav>
      </header>
