</body>
</html>
<body>
<h3><a href="usha.html">Back</a></h3>
</body>

<?php
 session_start();
	$link=mysqli_connect("localhost","root","","restaurant");
	if(mysqli_connect_error())
	{
		echo "Connection error".mysqli_connect_error();
		exit;
	}

?>

<!DOCTYPE html>
<html>
    <head>

            <link rel="stylesheet" href="historic.css">

    </head>
	<body>

	<div class="container-fluid">
		  <div class="row art_inner">
			<div class="col-md-9">
                <div class="panel panel-default">
				  <div class="panel-heading"></div>
                  <div class="panel-body">
                    <p class="about_us_info">


						 <table cellpadding="5" class="choice" align="center" cellspacing="110" cellpadding="100">
            <tr>
                <td>
				<?php
				$query="select * from menu where meal_id=1";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);



                    echo "<a href='".$imag["link"]."?mealid=1'>
                   		<img src=".$imag["url"]." height='220px' width='400px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>Price: ".$imag['price']."  </font></h3>";

							?>

                    </a>
                </td>
                <td>
				    <?php
				$query="select * from menu where meal_id=2";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);


                    echo "<a href='".$imag["link"]."?mealid=2'>
                   		<img src=".$imag["url"]." height='220px' width='400px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>Price: ".$imag['price']." </font></h3>";

							?>

                    </a>




                </td>
            </tr>
            <tr>
                    <td>

                        <?php
				$query="select * from menu where meal_id=3";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);


                    echo "<a href='".$imag["link"]."?mealid=3'>
                   		<img src=".$imag["url"]." height='220px' width='400px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>Price: ".$imag['price']." </font></h3>";

							?>

                    </a>


                    </td>
                    <td>



                        <?php
				$query="select * from menu where meal_id=4";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);


                    echo "<a href='".$imag["link"]."?mealid=4'>
                   		<img src=".$imag["url"]." height='220px' width='400px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>Price: ".$imag['price']." </font></h3>";

							?>

                    </a>


                    </td>
            </tr>
            <tr>


                    <td>
                        <?php
				$query="select * from menu where meal_id=5";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);


                    echo "<a href='".$imag["link"]."?mealid=5'>
                   		<img src=".$imag["url"]." height='220px' width='400px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>Price: ".$imag['price']."  </font></h3>";

							?>

                    </a>
                    </td>



                    <td>



                        <?php
				$query="select * from menu where meal_id=6";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);


                    echo "<a href='".$imag["link"]."?mealid=6'>
                   		<img src=".$imag["url"]." height='220px' width='400px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>Price: ".$imag['price']." </font></h3>";

							?>

                    </a>


                    </td>
            </tr>
            <tr>
                    <td>
                        <?php
				$query="select * from menu where meal_id=7";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);


                    echo "<a href='".$imag["link"]."?mealid=7'>
                   		<img src=".$imag["url"]." height='220px' width='400px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>Price: ".$imag['price']."  </font></h3>";

							?>

                    </a>
                    </td>
                    <td>
                        <?php
				$query="select * from menu where meal_id=8";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);


                    echo "<a href='".$imag["link"]."?mealid=8'>
                   		<img src=".$imag["url"]." height='220px' width='400px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>Price: ".$imag['price']." </font></h3>";

							?>

                    </a>
                    </td>
            </tr>
             <tr>
                    <td>
                        <?php
				$query="select * from menu where meal_id=9";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);


                    echo "<a href='".$imag["link"]."?mealid=9'>
                   		<img src=".$imag["url"]." height='220px' width='410px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']." <br>Price: ".$imag['price']." </font></h3>";

							?>

                    </a>
                    </td>
                    <td>
                        <?php
				$query="select * from menu where meal_id=10";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link)); //execution of query
				$imag=mysqli_fetch_assoc($result);


                    echo "<a href='".$imag["link"]."?mealid=10'>
                   		<img src=".$imag["url"]." height='220px' width='400px'>
							<h3 class='c1'><font align='center' face='Times New Roman'color='blue' size='5'> ".$imag['n']."  <br>Price: ".$imag['price']." </font></h3>";

							?>

                    </a>
                    </td>
            </tr>



        </table>




                    </p>
                  </div>
                </div>
                </div>

		  </div>


		      </body>
</html>
