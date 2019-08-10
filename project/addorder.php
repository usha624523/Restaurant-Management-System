<html>
<style>
  body {
    font-family: "Arial";
  }
  #outercontainer {

    color: black;
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
<body>
<?php
session_start();
$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"restaurant");      // here mysql is the database name
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $ord_id=$_POST['ord_id'];
  $cust_id=$_POST['cust_id'];
  $meal_id=$_POST['meal_id'];
  $quantity=$_POST['quantity'];
  $ord_date=$_POST['ord_date'];
  $_SESSION['ord_id']=$ord_id;
  $_SESSION['meal_id']=$meal_id;
  $_SESSION['quantity']=$quantity;
   $_SESSION['cust_id']=$cust_id;

     
     $sql4="insert into orders values('$ord_id', '$cust_id', '$meal_id', '$quantity', '$ord_date')";   // student is the table name
     if ($con->query($sql4) == TRUE) {
         echo "added successfully";
     } else {
         echo "Error: " . $sql . "<br>" . $con->error;
     }


$con->close();
}
?>

<div id="outercontainer">
  <h1>Billing</h1>
  <!-- action tells the page where to go when the page is submitted -->
  <form action="calbill.php" method="POST">
    <div class="form-row">
      <label for="bill_id" class="main-label">Bill_Id:</label>
      <input id="bill_id" type="text" name="bill_id" />
    </div>

    <div class="form-row" class="main-label">
      <label class="main-label" for="meal_id">Meal_id:</label>
      <input id="meal_id" type="meal_id" name="meal_id" value="<?php echo $meal_id; ?>" />
    </div>
    <div class="form-row" class="main-label">
      <label class="main-label" for="cust_id">Cust_id:</label>
      <input id="cust_id" type="cust_id" name="cust_id" value="<?php echo $cust_id; ?>"/>
    </div>
    <div class="form-row" class="main-label">
      <label class="main-label" for="price">Ord_id:</label>
      <input id="ord_id" type="text" name="ord_id"  value="<?php echo $ord_id; ?>"/>
    </div>
    <div class="form-row" class="main-label">
      <label class="main-label" for="quantity">Quantity:</label>
      <input id="quatity" type="quantity" name="quantity" value="<?php echo $quantity; ?>"/>
    </div>
    <div class="form-row">
      <!-- Two ways to create a button-->
      <!-- <input type="submit" value="Order Now"/> -->
      <button type="submit">Submit</button>
    </div>
  </form>
</div>
<html>
<head>
<style>
body {
  font-family: "Arial";
}
body{
  background-image: url("bills.jpg");
   background-size: 100% ;

   background-repeat: no-repeat;
}
</style>
</head>
</html>

</body>
</html>
