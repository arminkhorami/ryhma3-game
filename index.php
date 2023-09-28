<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User login system</title>
  <link rel="shortcut icon" href="stadin.png" type="image/x-icon">
<style>
  h4 {
    font-size: larger;
    color: #fff;
  }
  a {
    font-size: larger;
    color: #fff;
  }
  div {
    font-size: x-large;
    color: #fff;
  }
</style>
</head>

<body>
  <div class="container">
    <div class="alert alert-success my-5">
    Tervetuloa! Olet nyt kirjautunut tilillesi.
    </div>
    <!-- User profile -->
    <div class="row justify-content-center">
      <div class="col-lg-5 text-center">
        <h4 class="my-4">Terve, <?= htmlspecialchars($_SESSION["username"]); ?></h4>

        <a href="./logout.php" class="btn btn-primary">Log Out</a>
      </div>
    </div>
  </div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.3/paper-full.min.js'></script>
<script  src="./game.js"></script>
</body>

</html>