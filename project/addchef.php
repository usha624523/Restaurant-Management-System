<html>
<body>
<?php

$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"restaurant");      // here mysql is the database name
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $chef_id=$_POST['chef_id'];
  $name=$_POST['name'];
  $salary=$_POST['salary'];

  $hiredate=$_POST['hiredate'];

     $sql="insert into chef values('$chef_id', '$name', '$salary', '$hiredate')";   // student is the table name
     if ($con->query($sql) == TRUE) {
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
<h3><a href="addchef.html">Back</a></h3>
</body>
