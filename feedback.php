<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$con = new mysqli('localhost','root','','website feedback');
if($con-> connect_error)
{
    die('connection failed : '.$con->connect_error);
}else{
    $stmt = $con->prepare("insert into feedback(name,email,message)
     values(?,?,?)");
     $stmt->bind_param("sss",$name,$email,$message);
     $stmt->execute();
     echo " Thank you for your Feedback...";
     $stmt->close();
     $con->close();
}
   
?>