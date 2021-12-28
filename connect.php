<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/registration.css">
</head>
<body>
  
<?php

$server = "localhost";
$username = "shafiq";
$password = "";
$dbname = "test";

// Database connection
$conn = mysqli_connect($server , $username , $password , $dbname) ;


 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $gender = $_POST['gender'];
 $harryhint = $_POST['harryhint'];
 

 if($conn->connect_error){
   echo "$conn->connect_error";
   die("Connection Failed : ". $conn->connect_error);
 } else {
   $stmt = $conn->prepare("insert into registration(firstname, lastname, gender, harryhint) values('$firstname', '$lastname', '$gender', '$harryhint')");
   $stmt->bind_param("sssssi", $firstname, $lastname, $gender, $harryhint);
   $execval = $stmt->execute();
   echo $execval; 
   echo '<i style="color:red;font-size:30px;font-family:calibri ;">
   Magic! You are now one of us </i> ';
  ?> 
  <form action="database.php" > 

 
    <button>
      /People-Page-Button/
    </button>

  </form>

  <?php

   
   $stmt->close();
   $conn->close();
 }
?>
</body>
</html>
