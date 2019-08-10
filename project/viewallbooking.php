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
	$sql6="select * from table_booking";

				$result = $con->query($sql6);
    	if ($result->num_rows > 0) {
        echo "<table><tr><th>booking_id</th><th>cust_id</th><th>table_no</th><th>date</th></tr>";
		   		    while($row = $result->fetch_assoc()) {
		         echo "<tr><td>" . $row["booking_id"]. "</td><td>" . $row["cust_id"]. "</td><td>" . $row["table_no"]. "</td><td>" . $row["date"]."</td></tr>";
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
