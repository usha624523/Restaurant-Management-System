<html>
<body>
<?php

$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"restaurant");      // here mysql is the database name
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $cust_id=$_POST['cust_id'];
  $c_name=$_POST['c_name'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];

     $sql3="insert into customer values('$cust_id', '$c_name', '$phone', '$address')";   // student is the table name
     if ($con->query($sql3) == TRUE) {
         echo "added successfully";
     } else {
         echo "Error: " . $sql . "<br>" . $con->error;
     }


$con->close();
}
?>
</body>
</html>
<body>
<h3><a href="addcustomer.html">Back</a></h3>
</body>
