<html>
<body>
<?php

$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"restaurant");      // here mysql is the database name
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $waiter_id=$_POST['waiter_id'];
  $w_name=$_POST['w_name'];
  $salary=$_POST['salary'];

  $hiredate=$_POST['hiredate'];

     $sql1="insert into waiter values('$waiter_id', '$w_name', '$salary', '$hiredate')";   // student is the table name
     if ($con->query($sql1) == TRUE) {
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
<h3><a href="addwaiter.html">Back</a></h3>
</body>
