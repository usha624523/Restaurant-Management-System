<html>
<body>
<?php

$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"restaurant");      // here mysql is the database name
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $bill_id=$_POST['bill_id'];
  $meal_id=$_POST['meal_id'];
  $cust_id=$_POST['cust_id'];
  $ord_id=$_POST['ord_id'];
  $price=$_POST['price'];
  $quantity=$_POST['quantity'];

     $sql2="insert into meal values('$bill_id','$meal_id', '$cust_id','$ord_id' ,'$price', '$quantity')";   // student is the table name
     if ($con->query($sql2) == TRUE) {
         echo "added successfully";
     } else {
         echo "Error: " . $sql . "<br>" . $con->error;
     }


$con->close();
}
?>
</body>
</html>
