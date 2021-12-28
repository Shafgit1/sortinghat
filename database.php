<?php

$server = "localhost";
$username = "shafiq";
$password = "";
$dbname = "test";

// Database connection
$conn = mysqli_connect($server , $username , $password , $dbname) ;
$sql = "SELECT * FROM `registration`";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Database</title>
  <link rel="stylesheet" href="assets/database.css">
  </head>
  <body>
    
    
  <table class="styled-table">
      

        <tr class="active-row">
            <td>
                Firstname
            </td>

            <td>
                Lastname
            </td>

            <td> 
                House Hint
            </td>
           
            
        </tr>
        <?php
        while($row = mysqli_fetch_array($result)){ ?>
            <tr>
                <td>
                    <?php echo $row['firstname']; ?> 
                </td>

                <td>
                    <?php echo $row['lastname']; ?> 
                </td>

                <td>
                    <?php echo $row['harryhint']; ?> 
                </td>
            </tr>
        <?php }
        ?>
    </table>
    <form action="rating.html" > 

 
<button>
  Add one of them in a House by reading the house hint
</button>

</form>

   
  
  </body>
</html>