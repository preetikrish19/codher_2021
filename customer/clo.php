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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="interests.php">Interests <span class="sr-only">(current)</span></a>
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
<div class="new">
<div class="row">
  <div class="column col-lg-4 col-sm-12 col-md-6">
    <div class="c">
    <img src="saree.jpg" alt="image" class="image" >
     <div class="overlay"><div class="text1"><p><b>Product name : Saree</b></p>
     <p><b>Price : Rs.1000</b></p>
     <p><b>Number of items:<input type="number" min="1" max="100" name="noi" value="1"></b></p>
     <p><b><?php echo $detail['description'];?> </b></p>
     <input type="hidden" name="prod_name" value="<?php echo $detail['prod_name'];?>">
     <input type="hidden" name="prod_price" value="<?php echo $detail['price'];?>">
     <input type="hidden" name="org_name" value="<?php echo $detail['org_name'];?>">
     <input type="hidden" name="cust_name" value="<?php echo $_SESSION['cust_name']; ?>">
     <input type="hidden" name="cust_email" value="<?php echo $_SESSION['email'];?>">
     <p><b>Seller name : XYZ textiles</b></p>
     <p><b>Follow us on :  </b><a href="#"><img src="insta.jpg" height="50px" width="50px"></a></p>
     <p><b>This is a pink saree with blue border</b></p>
     
     <button class="add button1">+ ADD</button> </div>
     </div>
    </div>
  </div>
  <div class="column col-lg-4 col-sm-12 col-md-6">
    <div class="c">
    <img src="saree.jpg" alt="image" class="image">
    <div class="overlay"><div class="text1"> DETAILS here</div>
    </div>
  </div>
</div>
  <div class="column col-lg-4 col-sm-12 col-md-6">
    <div class="c">
    <img src="saree.jpg" alt="image" class="image">
   <div class="overlay"><div class="text1"> DETAILS here</div>
   </div>
  </div>
  </div>
  <div class="column col-lg-4 col-sm-12 col-md-6">
    <div class="c">
      <img src="saree.jpg" alt="image" class="image">
   <div class="overlay"><div class="text1"> DETAILS here</div>
   </div>
  </div>
</div>
  <div class="column col-lg-4 col-sm-12 col-md-6">
    <div class="c">
    <img src="saree.jpg" alt="image" class="image" >
     <div class="overlay"><div class="text1"> DETAILS here </div>
    </div>
  </div>
</div>
 <div class="column col-lg-4 col-sm-12 col-md-6">
    <div class="c">
    <img src="saree.jpg" alt="image"  class="image">
    <div class="overlay"><div class="text1"> DETAILS here</div>
    </div>
  </div>
  </div>
  <div class="column col-lg-4 col-sm-12 col-md-6">
    <div class="c">
  <img src="saree.jpg" alt="image"  class="image">
   <div class="overlay"><div class="text1"> DETAILS here</div>
   </div>
  </div>
  </div>
  <div class="column col-lg-4 col-sm-12 col-md-6">
    <div class="c">
  <img src="saree.jpg" alt="image" class="image">
   <div class="overlay">
     <div class="text1"> DETAILS here</div>
   </div>
  </div>
  </div>
  <div class="column col-lg-4 col-sm-12 col-md-6">
    <div class="c">
  <img src="saree.jpg" alt="image"  class="image">
   <div class="overlay"><div class="text1"> DETAILS here</div>
   </div>
  </div>
</div>
</div>
</div>
<?php include('footer.php') ?>
</body>
</html>
