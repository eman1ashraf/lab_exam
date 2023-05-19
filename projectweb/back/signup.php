<?php
require_once __DIR__ . '../google-api-php-client/autoload.php';

	$servername = "127.0.0.1";
	$username = "root";
	$password = "12345678";
	$dbname = "person";
	$conn = mysqli_connect($servername, $username, $password, $dbname);

        if(!$conn) {
            die('Connection failed: '.mysqli_connect_error());
        }

        $fname = $_POST['fname'];
        $lname=$_POST['lname'];
        $username=$fname." ".$lname;
        $password = $_POST['pass'];
        $email = $_POST['email'];
        $mysqli="SELECT email FROM persons WHERE email = '$email'";
        $result =mysqli_query($conn,$mysqli);
        if($result->num_rows != 0) {
        echo "sorry.... email already token";
       }
         else{
        $sql = "INSERT INTO persons (username, pass, email) VALUES ('$username', '$password', '$email')";
        if(mysqli_query($conn, $sql)) {
            echo '<p>Registration successful.</p>';
           
 
        } else {
            echo '<p>Registration failed.</p>';
        }
    }
        
        mysqli_close($conn);
        
?>
