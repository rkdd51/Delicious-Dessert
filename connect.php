<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','delicious dessert');
if($conn-> connect_error)
{
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into users1(firstname,lastname,email,password)
     values(?,?,?,?)");
     $stmt->bind_param("ssss",$firstname,$lastname,$email,$password);
     $stmt->execute();
     echo"Registration Successfully...";
     $stmt->close();
     $conn->close();
     echo "<a href='Home_page.html' >ok</a>";
}

?>