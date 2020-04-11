html>
<head>
<style>
h1 {color:#FF4500; font-size:200%}
h2 {font-size:100%;}
p  {color:black; font-size:80%}
body {width:400px; border:3.0px solid Tomato;
padding:15px;
margin-top:20px;
margin-left:200px;
margin-right:100px;
}
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
margin:10px 100px;
cursor:pointer;
}
</style>
</head>
<body>
<form action="action_page.php" method="post">
    <h1>Sign Up</h1>
    <p>Please fill this form to see all the available courses.</p>
    <h2>ARE YOU NEW? REGISTER</h2>

    <divclass="container"</div>
    <label for="username"><b></b></label>
    <input type="text" placeholder="Username*" name="username" display: inline-block size="30" required><br><br>

    <label for="email"><b></b></label>
    <input type="text" placeholder="Email*" name="email" size="30" required><br><br>

        <label for="honeno"><b></b></label>
<input type="text" placeholder="Phone Number" name="phoneno" size="30"><br><br>

    <label for="password"><b></b></label>
    <input type="password" placeholder="Password*" name="password" size="30" required><br><br>

    <label for="psw-repeat"><b></b></label>
    <input type="password" placeholder="Confirm Password*" name="psw-repeat" size="30" required><br><br>
    <label color:white>
      <input type="checkbox" checked="checked" name="remember" color:white size:20>Please accept all the Terms & Conditions
    </label><br><br>
    <button size="30">Register</button>
</div>
</form> 
</body>
</html>
