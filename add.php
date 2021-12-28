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


 $fullname = $_POST['fullname'];
 $housename = $_POST['housename'];


 

 if($conn->connect_error){
   echo "$conn->connect_error";
   die("Connection Failed : ". $conn->connect_error);
 } else {
   $stmt = $conn->prepare("insert into poeple(fullname, housename) values('$fullname', '$housename')");
   $stmt->bind_param("sssssi", $fullname, $housename);
   $execval = $stmt->execute();
   echo $execval; 
   echo '<i style="color:red;font-size:30px;font-family:calibri ;">
   Awesome! Your buddy is in the house </i> ';
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