<?php
session_start();
$conn=mysqli_connect("localhost","root","nani1234","project");
mysqli_select_db($conn,"userregistration");
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from signup where username='$username' && password='$password'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count == 1)
{
$_SESSION['username']=$username;
header("Location:demohome1.php");
}
else
{
header("Location:demologin.php");
}
?>
