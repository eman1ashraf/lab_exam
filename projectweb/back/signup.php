<?php


	$servername = "127.0.0.1";
	$username = "root";
	$password = "12345678";
	$dbname = "login";
	$conn = mysqli_connect($servername, $username, $password, $dbname);

        if(!$conn) {
            die('Connection failed: '.mysqli_connect_error());
        }

        $fname = $_POST['fname'];
        $lname=$_POST['lname'];
        $username=$fname." ".$lname;
        $password = $_POST['pass'];
        $email = $_POST['email'];
        $mysqli="SELECT email FROM login_info WHERE email = '$email'";
        $result =mysqli_query($conn,$mysqli);
        if($result->num_rows != 0) {
        echo "sorry.... email already token";
       }
         else{
        $sql = "INSERT INTO login_info (username, email, pass) VALUES ('$username', '$email','$password')";
        if(mysqli_query($conn, $sql)) {
            echo '<h1><p>Registration successful.</p><h1>';
           
 
        } else {
            echo '<h1><p>Registration failed.</p><h1>';
        }
    }
        
        mysqli_close($conn);
        
?>
