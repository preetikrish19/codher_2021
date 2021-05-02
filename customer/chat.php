<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include('db.php');
  $msg =  $con->real_escape_string($_POST['msg']);
  $orgname = $con->real_escape_string($_POST['org_name']);
  $custname = $con->real_escape_string($_SESSION['cust_name']);
  //$prod_name = $_POST['prod_name'];
  $msg = stripcslashes($msg);
  $orgname = stripcslashes($orgname);
  $custname = stripcslashes($custname);
  $prod_id = stripcslashes($prod_id);
  if ($_SESSION['login']==0){
  $sql = "INSERT INTO chat (cust_name, org_name, comment,sender,receiver) VALUES('$custname', '$orgname', '$msg', '$custname', '$orgname')";
 }
   else{
   $sql = "INSERT INTO chat (cust_name, org_name, comment,sender,receiver) VALUES('$custname', '$orgname', '$msg', '$orgname', '$custname')";
  }
  if(mysqli_query($con, $sql))
  {
    echo "<script>window.location.href='sec.php'</script>";
    echo "hekko";
  }
  else{
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}
?>
