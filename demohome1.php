<?php
session_start();
echo "Hello" .$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<title>TLP-The learning platform</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
footer {
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:#FF4500;
  color: white;
  text-align: center;
}
</style>
<body>

<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Courses</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Stream</a>
    <a href="demoabout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Us</a>
    <a href="demohome.php" class="w3-bar-item w3-button w3-right  w3-mobile">Logout</a>
    <a href="demoform.php" class="w3-right w3-bar-item"><?php echo($_SESSION['username']) ?></a>
    </div>


  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">TLP</h1>
  <p class="w3-xlarge">The Learning Platform</p>
</header>

<div class="w3-row-padding w3-padding-10 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Machine Learning</h1>
        <p class="w3-text-grey">Machine learning is a method of data analysis that automates analytical model building. It is a branch of artificial intelligence based on the idea that systems can learn from data, identify patterns and make decisions with minimal human intervention.</p>
    </div>
</div>
</div>
<div class="w3-row-padding w3-padding-10 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
     <h1>Data Science</h1>
       <p class="w3-text-grey">Data science is an inter-disciplinary field that uses scientific methods, processes, algorithms and systems to extract knowledge and insights from many structural and unstructured data. Data science is related to data mining and big data.</p>
      </div>
</div>
</div>
<div class="w3-row-padding w3-padding-10 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
    <h1>Web Development</h1>
     <p class="w3-text-grey">Web development is the work involved in developing a website for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex web-based internet applications, electronic businesses, and social network services.</p> 
     </div>
</div>
</div>
<div class="w3-row-padding w3-padding-10 w3-container">
  <div class="w3-content">
   <div class="w3-twothird">
    <h1>Big Data</h1>
    <p class="w3-text-grey">Big data is a field that treats ways to analyze, systematically extract information from, or otherwise deal with data sets that are too large or complex to be dealt with by traditional data-processing application software.</p>
    </div>
</div>
</div>
<!-- First Grid -->
<div class="w3-row-padding w3-padding-10 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Contact Us</h1>
      <p class="w3-text-grey">Email: snehithbejawada6@gmail.com</p>
      <p class="w3-text-grey">Phone Number: 8309588501</p>
      <p class="w3-text-grey">Alternate ph.no: 8341298138</p>
</div>
    <div class="w3-third w3-center w3-padding-64">
      <i class="fa fa-phone fa-5x fa-pull-center" style="font-size:100px" aria-hidden="true"></i>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
