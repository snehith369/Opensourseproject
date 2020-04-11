<?php
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$conn=new mysqli("localhost","root","nani1234","project");
if($conn->connect_error)
{
die("connection failed :".$conn->connect_error);
}
else
{
$stmt=$conn->prepare("insert into signup(username,email,password) values (?,?,?)");
$stmt->bind_param("sss",$username,$email,$password);
$stmt->execute();
header("Location:demologin.php")
$stmt->close();
$conn->close();
}
?>
