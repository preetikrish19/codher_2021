<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include('db.php');
  $prodname = $con->real_escape_string($_POST['prod_name']);
  $orgname = $con->real_escape_string($_POST['org_name']);
  $noi = $_POST['noi'];
  $price = $_POST['prod_price'];
  //echo $price.'   '.$noi;
  $price = $price * $noi;
  //echo "  ";
  //echo $price;
  $cust_name = $con->real_escape_string($_POST['cust_name']);
  $cust_email= $con->real_escape_string($_POST['cust_email']);

  $prodname = stripcslashes($prodname);
  $orgname = stripcslashes($orgname);
  $noi = stripcslashes($noi);
  $price = stripcslashes($price);
  $cust_name = stripcslashes($cust_name);
  $cust_email = stripcslashes($cust_email);

  $sql = "INSERT INTO cart (cust_name, org_name, prod_name, price, quantity, cust_email) VALUES ('$cust_name', '$orgname', '$prodname', '$price', '$noi', '$cust_email')";
  if($con->query($sql))
  {
    echo "Added ".$prodname." to cart";
    //echo "<script>alert('Posted');</script>";
    //echo "<script>window.location.href='cart.php'</script>";
  }
  else{
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}

?>
