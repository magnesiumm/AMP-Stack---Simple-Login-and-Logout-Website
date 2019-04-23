<?php
  require "header.php";
?>

  <main>
    <h1>Signup<h1>

      <?php
        if(isset($_GET["error"])) {
          if($_GET["error"] == "emptyfields") {
            echo '<p>Fill in all fieldds!</p>';
          }
          else if($_GET["error"] == "invaliduidmail") {
            echo '<p>Invalid username and email!</p>';
          }
          else if($_GET["error"] == "invaliduid") {
            echo '<p>Invalid username!</p>';
          }
          else if($_GET["error"] == "invalidmail") {
            echo '<p>Invalid email!</p>';
          }
          else if($_GET["error"] == "passwordcheck") {
            echo '<p>Your passwords do not match!</p>';
          }
          else if($_GET["error"] == "usertaken") {
            echo '<p>Username is already taken!</p>';
          }
        }
        else if($_GET["signup"] == "success") {
          echo '<p>Signup Success!</p>';
        }
      ?>


      <form class="form-horizontal" action="includes/signup.inc.php" method="post">
        <input class="form-control" style="width:25%" type="text" name="uid" placeholder="Username">
        <input class="form-control" style="width:25%" type="text" name="mail" placeholder="E-mail">
        <input class="form-control" style="width:25%" type="password" name="pwd" placeholder="Password">
        <input class="form-control" style="width:25%" type="password" name="pwd-repeat" placeholder="Repeat Password">
        <button class="form-control" style="width:25%" type="submit" name="signup-submit">Signup</button>
      </form>
  </main>


<?php
    require "footer.php";
?>
