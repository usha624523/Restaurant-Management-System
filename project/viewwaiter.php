<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<?php
$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"restaurant");
if ($con->connect_error) {
		    die("Connection failed: " . $con->connect_error);
		}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{	$waiter_id=$_POST['waiter_id'];
	$sql1="select * from waiter where waiter_id='$waiter_id'";

				$result = $con->query($sql1);


			if ($result->num_rows > 0) {
        echo "<table><tr><th>waiter_id</th><th>wname</th><th>salary</th><th>hiredate</th></tr>";
		   		    while($row = $result->fetch_assoc()) {
		         echo "<tr><td>" . $row["waiter_id"]. "</td><td>" . $row["wname"]. "</td><td>" . $row["salary"]. "</td><td>" . $row["hiredate"]. "</td></tr>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}
		}

		$con->close();
?>
</body>
</html>
<html>
<head>
<style>
body {
  font-family: "Arial";
}
body{
  background-image: url("cust.jpg");
   background-size: 100% ;

   background-repeat: no-repeat;
}
</style>
</head>
</html>
<body>
<h3><a href="viewwaiter.html">Back</a></h3>
</body>
