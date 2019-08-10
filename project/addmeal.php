<html>
<body>
<?php

$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"restaurant");      // here mysql is the database name
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $meal_id=$_POST['meal_id'];
  $m_name=$_POST['m_name'];
  $price=$_POST['price'];
  $chef_id=$_POST['chef_id'];
  $quantity=$_POST['quantity'];

     $sql2="insert into meal values('$meal_id', '$m_name', '$price', '$chef_id','$quantity')";   // student is the table name
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
