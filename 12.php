<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];

$conn=new mysqli('localhost','root','','dhusyanth');
if($conn->connect_error){
    die('connection failed: '.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into registration(name,email,phone,password)values(?,?,?,?)");
    $stmt->bind_param("ssis",$name,$email,$phone,$password);
    $stmt->execute();
    echo "regestrations successfully done";
    $stmt->close();
    $conn->close();
}
?>