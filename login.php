<?php

$email = $_POST['email'];
    $password = $_POST['password'];
  
    $con = new mysqli("localhost","root","","delicious dessert");
    if($con -> connect_error){
        die("Failed to connect : ". $con->connect_error);
    }else{
        $stmt =$con->prepare("select * from users1 where email =? ");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result =$stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password){
                echo "<h2>Login Successfully</h2>";
               echo "<a href='Home_page.html' >ok</a>";
            } else{
                echo"<h2>Invalid Email or Password </h2>";
            }
        }else {
            echo"<h2>Invalid Email or Password </h2>";
        }
    }
    
?>
