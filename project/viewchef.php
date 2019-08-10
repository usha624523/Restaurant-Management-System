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
{	$chef_id=$_POST['chef_id'];
	$sql="select * from chef where chef_id='$chef_id'";

				$result = $con->query($sql);


			if ($result->num_rows > 0) {
        echo "<table><tr><th>chef_id</th><th>name</th><th>salary</th><th>hiredate</th></tr>";
		   		    while($row = $result->fetch_assoc()) {
		         echo "<tr><td>" . $row["chef_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["salary"]. "</td><td>" . $row["hiredate"]. "</td></tr>";
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
  background-image: url("back4.jpg");
   background-size: 100% ;

   background-repeat: no-repeat;
}
</style>
</head>
</html>
</body>
</html>
<body>
<h3><a href="viewchef.html">Back</a></h3>
</body>
