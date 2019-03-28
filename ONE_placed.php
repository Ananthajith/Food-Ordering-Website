<!DOCTYPE html>
<html lang="en">
<head>
     <style type="text/css">
       
        html{
            background-image: url(home_bg.jpg);
            background-position: center;
            background-size: 100%;
            background-repeat: no-repeat;
            height: 100%;
            
        }
    </style>
    <title>DONE</title>
</head>
<body>
    
            <?php
            echo '<center><b style="color:white"><u><h2>ORDERS PLACED TILL NOW</h2></u></b></center>';
            include 'ONE_dbcon.php';
            $sql = "SELECT * FROM orders";
            $query = mysqli_query($conn, $sql);
            $result = $conn->query($sql);
            if($result->num_rows > 0)
            { 
                echo '<table style="border: 2px solid silver; width: 100%;text-align: center; background-color: rgb(13,43,63); color: white ">
                       <tr>
                        <td><u>NAME<u></td>
                        <td><u>AMOUNT<u></td>
                        <td><u>PHONE NUMBER<u></td>
                        <td><u>ADDRESS<u></td>
                        <td><u>ADDRESS TYPE<u></td>
                       </tr>
                     ';
                while($ROW = $result->fetch_assoc())
            {
               echo '<tr>
                        <td>'.$ROW["Name"].'</td>
                        <td>'.$ROW["Amount"].'</td>
                        <td>'.$ROW["Phone"].'</td>
                        <td>'.$ROW["Address"].'</td>
                        <td>'.$ROW["AddressType"].'</td>
                       </tr>';        
            }
                echo '</table>';
            }
            else
            {
                echo "khali hai";
            }
            $conn->close();
    
    ?>
</body>
</html>