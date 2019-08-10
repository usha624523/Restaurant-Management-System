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
{	$ord_id=$_POST['ord_id'];
	$sql4="select * from orders where ord_id='$ord_id'";

				$result = $con->query($sql4);


			if ($result->num_rows > 0) {
        echo "<table><tr><th>ord_id</th><th>cust_id</th><th>waiter_id</th><th>meal_id</th><th>quantity</th><th>ord_date</th></tr>";
		   		    while($row = $result->fetch_assoc()) {
		         echo "<tr><td>" . $row["ord_id"]. "</td><td>" . $row["cust_id"]. "</td><td>" . $row["waiter_id"]. "</td><td>" . $row["meal_id"]."</td><td>" . $row["quantity"]. "</td><td>" . $row["ord_date"]."</td></tr>";
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
