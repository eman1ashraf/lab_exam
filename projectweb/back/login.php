<?php
$servername = "127.0.0.1";
$username = "root";
$password = "12345678";
$dbname = "person";
$conn = mysqli_connect($servername, $username, $password, $dbname);


    
    if(!$conn) {
        die('Connection failed: '.mysqli_connect_error());
    }

  
   
    $password = $_POST['pass'];
    $email = $_POST['email'];


    $sql = "SELECT * FROM persons WHERE email='$email' AND pass='$password'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      header('Location:submitting.php');
    } else {
      echo "try again";
    }
    
    mysqli_close($conn);
    
    
  
   ?>