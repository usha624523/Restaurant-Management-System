<?php
  session_start();
  $meal_id=$_GET['mealid'];
  $_SESSION['meal_id']=$meal_id;


 ?>
<!doctype html>
<html>
	<head>
		<title>Forms</title>
		<style>
			body {
				font-family: "Arial";
			}
      body{
      	background-image: url("order.jpg");
         background-size: 100% ;

         background-repeat: no-repeat;
      }
			#outercontainer {
       	color: blue;
				width: 800px;
				margin-left: auto;
				margin-right: auto;
				/*opacity: 0.5;*/

			}
			.form-row {
				margin-bottom: 10px;
			}
			.main-label {
				font-weight: bold;
				width: 200px;
				/* label tags don't take in widths unless we use display: block*/
				display: block;
				float: left;
				text-align: right;
				margin-right: 10px;
			}
			textarea {
				width: 500px;
				height: 500px;
				font-size: 50px;
			}
		</style>
	</head>
	<body>

		<div id="outercontainer">
			<h1>Order Details</h1>
			<!-- action tells the page where to go when the page is submitted -->
			<form action="addorder.php" method="POST">
				<div class="form-row">
					<label for="ord_id" class="main-label">Ord_Id:</label>
					<input id="ord_id" type="text" name="ord_id"  />
				</div>
				<div class="form-row" class="main-label">

					<label class="main-label" for="cust_id">Cust_Id:</label>
					<input id="cust_id" type="text" name="cust_id"/>
				</div>

        <div class="form-row" class="main-label">
					<label class="main-label" for="meal_id">Meal_Id:</label>
					<input id="meal_id" type="text" name="meal_id" value="<?php echo $meal_id ?>" readonly/>
				</div>
        <div class="form-row" class="main-label">
          <label class="main-label" for="quantity">Quantity:</label>
          <input id="quantity" type="number" name="quantity" />
        </div>

        <div class="form-row" class="main-label">
          <label class="main-label" for="ord_date">Ord_date:</label>
            <input id="ord_date" type="date" name="ord_date" />
       </div>
				<div class="form-row">
					<!-- Two ways to create a button-->
					<!-- <input type="submit" value="Order Now"/> -->
					<button type="submit">Submit </button>
				</div>
			</form>
      <li>
       <a href="menu.php">Back</a>
     </li>
		</div>
	</body>
</html>



</body>

</html>
