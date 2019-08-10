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
{	$meal_id=$_POST['meal_id'];
	$sql2="select * from meal where meal_id='$meal_id'";

				$result = $con->query($sql2);

			if ($result->num_rows > 0) {
        echo "<table><tr><th>meal_id</th><th>m_name</th><th>price</th><th>chef_id</th><th>quantity</th></tr>";
		   		    while($row = $result->fetch_assoc()) {
		         echo "<tr><td>" . $row["meal_id"]. "</td><td>" . $row["m_name"]. "</td><td>" . $row["price"]. "</td><td>" . $row["chef_id"]."</td><td>" . $row["quantity"]. "</td></tr>";
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
