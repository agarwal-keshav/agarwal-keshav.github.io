<html>
        <head>
                <title>userlogin</title>
            
                
                <link rel="stylesheet" type="text/css" href="register.css">
              </head>
            <body>
                    
                    </head>
<body>

    <div id = "keshavkad" class="navigation-bar">
  
  
      <div id="navigation-container">
  
        <img src="logobook.jpg.jpeg">
  
        <ul>
          <li><a href="pagewithnav.html">Home</a></li>
          
          <li><a href="services.html">Services</a></li>
          <li id = "help"><a href="contactus.html">Contact Us</a></li>
          
          <li><a href = "help.html">Help</a></li>
          <li><a href="userlogin.php">Login</a></li>
          <li><a href="register.html">Signup</a></li>

        </ul>

    </div>
</div>  
                    <div style="border-radius: 5px;display: block;margin-left: auto;margin-top:100px;margin-right: auto;width: 30%;padding: 20px;";align="cenetr">
        <form onsubmit="return validate(this)" method="POST" action="useregister.php">
                 
                 <input type="text"  name="fname" placeholder="Your Name.." >
                <input type="email"  name="email" placeholder="Your Email.." >
                 <input type="password" name="pwd"  placeholder="Enter password.." >
                 <input type="password" name="repwd"  placeholder="Re-enter password.." >
                 <input type="submit" name="submit">
                </form>
        </div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intern";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
$email = (isset($_POST['email']) ? $_POST['email'] : '');
$sq = "SELECT * FROM registertable WHERE EMAIL='$email' ";
$upd = $conn->query($sq);
if ($upd->num_rows > 0) {
    echo'<center><span style="color: white;text-align:center;"><h3>Account already exists. <a style="color:white" href="userlogin.php" > Sign in</a> <h3></span></center>';
    //
  }
else
   { 
   // echo '<center><span style="color: white;text-align:center;"><h2>Sorry, your credentials are not valid, Please try again.<h2></span></center>';
    echo '<center><span style="color: white;text-align:center;"><h3>Successfully logged in<h3></span></center>';
    header("Location:usd_inr.html");//avl.php
   }
   }
?>
<!--br><br><br><br><br>
        <div class="footer">
    <div class="navigation-bar">
      <div id="navigation-container">
  <ul>
  <li>
  <img src="logobook.jpg.jpeg">
  </li>
  <li>
    Address:
    VIT Vellore,
    Katpadi Road,
    Vellore,
    Tamil Nadu 632014
  </li>
  <li>
    Contact Us:
    Email:vitbarnbooks@gmail.com
    Mobile No: +918178197468
  </li>
  </ul>
    </div>
</div> 
</div>


-->