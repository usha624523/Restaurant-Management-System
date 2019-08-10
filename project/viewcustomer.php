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
{	$cust_id=$_POST['cust_id'];
	$sql3="select * from customer where cust_id='$cust_id'";

				$result = $con->query($sql3);


			if ($result->num_rows > 0) {
        echo "<table><tr><th>cust_id</th><th>c_nmae</th><th>phone</th><th>address</th></tr>";
		   		    while($row = $result->fetch_assoc()) {
		         echo "<tr><td>" . $row["cust_id"]. "</td><td>" . $row["c_name"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["address"]. "</td></tr>";
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
  background-image: url("back6.jpg");
   background-size: 100% ;

   background-repeat: no-repeat;
}
</style>
</head>
</html>
<body>
<h3><a href="viewcustomer.html">Back</a></h3>
</body>
