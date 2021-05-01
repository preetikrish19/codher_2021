<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="old.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
<style>
body {
  background-image: url('customer/imgs/backgroundimg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-size: 100% 100%;
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src= "customer/imgs/logo(1).png" alt="logo"style="width:80px;height:50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="customer.php">Customer login<span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="organisation.php">Organisation login<span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item bg-dark" href="access.php" style="color: white">ACCESSORIES</a>
          <div class="dropdown-divider bg-light"></div>
          <a class="dropdown-item bg-dark" href="han.php" style="color: white">HANDICRAFTS</a>
          <div class="dropdown-divider bg-light"></div>
          <a class="dropdown-item bg-dark" href="clo.php" style="color: white">CLOTHING</a>
          <div class="dropdown-divider bg-light"></div>
          <a class="dropdown-item bg-dark" href="sec.php" style="color: white">SECOND HAND BOOKS</a>
        </div>
      </li>
      <li>
        <a class="nav-link" href="cart.php">Cart<i class="fas fa-shopping-cart"></i><span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="#">Log out <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>