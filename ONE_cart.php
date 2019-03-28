<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

	<title>ONE MENU!!</title>

	

	<style type="text/css">
       
        html{
            background-image: url(menu_bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            width: 100%;
        }
        .menu{
            position: absolute;
            width: 100%;
            color: white;
        }
        .btn:hover{
           opacity: 0.8;
        }
        
	</style>

</head>

<body>
 <div class="navi">
     <ul class="nav nav-pills navbar-inverse" style="height: 63px">
      <li role="presentation" style="width:120px; height: 50px;color: white;font-size: 30px;padding-left: 15px"><a href="ONE.html">Home </a></li>
      <li role="presentation" style="width:115px; height: 50px;color: white;font-size: 30px;padding-left: 10px"><a href="ONE_details.php">Menu </a></li>
      <li role="presentation" style="width:175px; height: 50px;color: white;font-size: 30px;padding-left: 10px"><a href="ONE_abt.html">About-us </a></li>
      <li class="pull-right" role="presentation" style="width:105px; height: 50px;color: white;font-size: 30px;padding-right: 10px;"><a href="ONE_cart.php">Cart</a></li>
     </ul></div>
     <center>
     <div class="menu">
     <br><h2>CART</h2><br>
     <form action="ONE_placed.php" method="post">
     <table class="table">
      <tr>
          <td><b>Serial Number</b></td>
          <td><b>Name</b></td>
          <td><b>Amount</b></td>
      </tr>
      <tr>
          <td>1.</td>
          <td>Pizza</td>
          <td>
          <?php
            echo $_POST["one"]*350,"/-";   
           ?>
          </td>
      </tr>
      <tr>
          <td>2.</td>
          <td>Pasta</td>
          <td>
          <?php
            echo $_POST["two"]*180,"/-";   
           ?>
          </td>
      </tr>
      <tr>
          <td>3.</td>
          <td>French Toast</td>
          <td>
          <?php
            echo $_POST["three"]*135,"/-";   
           ?>
          </td>
      </tr>
      <tr>
          <td>4.</td>
          <td>Waffles</td>
          <td>
          <?php
            echo $_POST["four"]*90,"/-";   
           ?>
          </td>
      </tr>
      <tr>
          <td>5.</td>
          <td>Pancakes</td>
          <td>
          <?php
            echo $_POST["five"]*90,"/-";   
           ?>
          </td>
      </tr>
      <tr>
          <td>6.</td>
          <td>Cappuccino</td>
          <td>
          <?php
            echo $_POST["six"]*110,"/-";   
           ?>
          </td>
      </tr><br>
      <tr>
          <td></td>
          <td><b>TOTAL</b></td>
          <td><b>
          <?php
            $sum = ($_POST["one"]*350)+ ($_POST["two"]*180)+ ($_POST["three"]*135)+ ($_POST["four"]*90)+ ($_POST["five"]*90)+ ($_POST["six"]*110);
            echo $sum,"/- <br>";  
            include 'ONE_dbcon.php';  
            $a = $_POST['name'];
            $b = $_POST['num'];
            $c = $_POST['add'];
            $d = $_POST['atype'];
            $sql = "INSERT INTO orders (Name, Amount, Phone, Address, AddressType) VALUES ('$a', '$sum', '$b', '$c', '$d')"; 
            $query = mysqli_query($conn, $sql);              
            $conn->close();
            ?>
              </b>
          </td>
      </tr>
     </table>
     <center><input class="btn btn-info" type="Submit" value="ORDER"></center>
     </form> 
     </div>
     </center>
     
</body>

</html>
