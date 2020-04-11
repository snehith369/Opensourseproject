<html>
<head>
<style>
body {
width:400px; border:3.0px solid #FF4500;
padding:15px;
margin-top:20px;
margin-left:200px;
margin-right:100px;
}
h1 {color:#FF4500; font-size:180%}
input[type=text], input[type=password] {
  width: 90%;
  padding: 8px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
button
{
background-color:#FF4500;
color:white;
padding:8px 36px;
text-align:center;
display:inline_block;
font-size:16px;
margin:10px 30px;
cursor:pointer;
}
</style>
</head>
<body>
<form action="action.php" method="post">
<h1>ALREADY A STUDENT? LOGIN</h1>
  <div class="container">
    <label for="uname"><b></b></label>
    <input type="text" placeholder="Username" name="username" size="30" required><br><br>

    <label for="psw"><b></b></label>
    <input type="password" placeholder="Password" name="password" size="30" required><br><br>
    <label color:white>
      <input type="checkbox" checked="checked" name="remember" color:white> Remember me
    </label>

    <button type="submit">Login</button><br><br>
</body>
</style>
  </div>
</form>
