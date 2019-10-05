<?php
require('db.php');
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



// sql to create table
$sql = "CREATE TABLE fahad (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    email VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    repassword VARCHAR(50),
    reg_date TIMESTAMP
    )";
    
    if (mysqli_query($conn, $sql)) {
        echo "Table fahad created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
    

    if (isset($_POST["submit_btn"])) {
       $email = $_POST["email"];
       $password = $_POST["password"];
       $repassword =$_POST["repassword"];
    
   $s = "select * form usertable where name = '$email && password = 'pass'";

   if($num ==1){
       $_SESSION['email'] = $email; 
       header('location:home.php');
   }else{
    header('location:login.php');
   }
} 

mysqli_close($conn);
?>
