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
        .infor{
            position: absolute;
            width: 100%;
            color: white;
            font-family: cursive;
        }
        .menu{
            top: 200px;
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
     <form action="ONE_cart.php" method="post">
     <center>
     <div class="infor">
     <br><h2>Add Information</h2><br>
      Name: <input type="text" style="color:black" name="name">
      Phone Number: <input type="text" style="color:black" name="num">
      Address: <input type="text" name="add" style="color:black">
      Home <input type="radio" name="atype" value="home">
      Work <input type="radio" name="atype" value="work"><br>
     </div>
     </center>
          <center>
     <div class="menu">
     <br><h2>MEMU</h2><br>
     <table class="table">
      <tr>
          <td><b>Serial Number</b></td>
          <td><b>Name</b></td>
          <td><b>Price</b></td>
          <td><b>How many?</b></td>
      </tr>
      <tr>
          <td>1.</td>
          <td>Pizza</td>
          <td>350/-</td>
          <td>
          <input type="number" name="one" style="color: black">
          </td>
      </tr>
      <tr>
          <td>2.</td>
          <td>Pasta</td>
          <td>180/-</td>
          <td>
          <input type="number" name="two" style="color: black">
          </td>
      </tr>
      <tr>
          <td>3.</td>
          <td>French Toast</td>
          <td>135/-</td>
          <td>
          <input type="number" name="three" style="color: black">
          </td>
      </tr>
      <tr>
          <td>4.</td>
          <td>Waffles</td>
          <td>90/-</td>
          <td>
          <input type="number" name="four" style="color: black">
          </td>
      </tr>
      <tr>
          <td>5.</td>
          <td>Pancakes</td>
          <td>90/-</td>
          <td>
          <input type="number" name="five" style="color: black">
          </td>
      </tr>
      <tr>
          <td>6.</td>
          <td>Cappuccino</td>
          <td>110/-</td>
          <td>
          <input type="number" name="six" style="color: black">
          </td>
      </tr>
     </table>
     <input class="btn btn-info" type="submit" value="ADD" style="width: 300px">
   </div>
  </center>
  </form>
</body>
</html>
         