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
{
	$sql5="select * from billing";

				$result = $con->query($sql5);
    	if ($result->num_rows > 0) {
        echo "<table><tr><th>bill_id</th><th>meal_id</th><th>cust_id</th><th>price</th><th>quantity</th></tr>";
		   		    while($row = $result->fetch_assoc()) {
		         echo "<tr><td>" . $row["bill_id"]. "</td><td>" . $row["meal_id"]. "</td><td>" . $row["cust_id"]. "</td><td>" . $row["price"]."</td><td>" . $row["quantity"]. "</td></tr>";
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
