<?php
session_start();
if(isset($_SESSION['login'])){
if($_SESSION['login'] == 0){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HELP A HAND | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href = "styleindex.css">
</head>
<body class = "bg-dark">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src= "imgs/logo.jpeg" alt="logo"style="width:80px;height:50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="#about">About <span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="customer/customer.php">Customer login<span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="organisation/organisation.php">Organisation login<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<body>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/home.png" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>Buy what you don’t have yet or what you really want,</h3>
        <h3>which can be mixed with what you already own. Buy only because </h3>
        <h3> something excites you, not just for the simple act of shopping</h3>
      </div>
      <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/homeimg2.png" alt="Los Angeles">
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div id="about" class = "grid-container">
    <div class = "grid-child">
        <img src = "imgs/about.png" style = "height:400px;width:600px">
</div>
<div class = "grid-child">
    <h1 id="heading">About</h1>
    <p>
    
 </p>
     </div>
</div>

<div id="footer">

<?php
  include('customer/footer.php')
?>
</div>

</body>
</html>
<?php }
  elseif ($_SESSION['login']==1) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Connection | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href = "styleindex.css">
</head>
<body class = "bg-dark">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src= "../imgs/logo.jpeg" alt="logo"style="width:80px;height:50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="#about">About <span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="customer/customer.php">Customer login<span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="organisation/organisation.php">Organisation login<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<body>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/home.png" alt="Los Angeles">
      <div class="carousel-caption">
      <h3>Buy what you don’t have yet or what you really want,</h3>
        <h3>which can be mixed with what you already own. Buy only because </h3>
        <h3> something excites you, not just for the simple act of shopping</h3>
      </div>
    </div>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/homeimg2.png" alt="Los Angeles">
      <div class="carousel-caption">
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div id="about" class = "grid-container">
    <div class = "grid-child">
        <img src = "imgs/about1.png" style = "height:400px;width:600px">
</div>
<div class = "grid-child">
    <h1 id="heading">About</h1>
    <p>
    
 </p>
     </div>
</div>
<div id="footer">

<?php
  include('customer/footer.php')
?>
</div>

</body>
</html>
<?php }}
 else {
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>Connection | Home</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel = "stylesheet" href = "styleindex.css">
 </head>
 <body">
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src= "..imgs/logo.jpeg" alt="logo"style="width:80px;height:50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="#about">About <span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="customer/customer.php">Customer login<span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="organisation/organisation.php">Organisation login<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

 <body>

 <div id="demo" class="carousel slide" data-ride="carousel">
   <ul class="carousel-indicators">
     <li data-target="#demo" data-slide-to="0" class="active"></li>
     <li data-target="#demo" data-slide-to="1"></li>
     <li data-target="#demo" data-slide-to="2"></li>
   </ul>
   <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/home.png" alt="Los Angeles">
      <div class="carousel-caption">
      <h3>Buy what you don’t have yet or what you really want,</h3>
        <h3>which can be mixed with what you already own. Buy only because </h3>
        <h3> something excites you, not just for the simple act of shopping</h3>
    </div>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/homeimg2.png" alt="Los Angeles">
  
    </div>
  </div>
   <a class="carousel-control-prev" href="#demo" data-slide="prev">
     <span class="carousel-control-prev-icon"></span>
   </a>
   <a class="carousel-control-next" href="#demo" data-slide="next">
     <span class="carousel-control-next-icon"></span>
   </a>
 </div>
 <div id="about" class = "grid-container">
    <div class = "grid-child">
        <img src = "imgs/about.png" style = "height:400px;width:600px">
</div>
<div class = "grid-child">
    <h1 id="heading">About</h1>
    <p>
    
 </p>
     </div>
</div>
 <div id="footer">

 <?php
   include('customer/footer.php')
 ?>
 </div>

 </body>
 </html>
<?php } ?>
