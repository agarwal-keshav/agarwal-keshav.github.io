<!DOCTYPE html>
<html>
<head><title>userlogin</title>
        <link rel="stylesheet" type="text/css" href="userlogin.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

    <body>

    <div class="navigation-bar">
  
  
      <div id="navigation-container">
  
        <img src="logobook.jpg.jpeg">
  
        <ul>
          <li><a href="pagewithnav.html">Home</a></li>
          <!--li><a href="about.html">About</a></li>
          <li><a href="loginadmin.html">Admin</a></li-->
          <li><a href="services.html">Services</a></li>
          <li id = "help"><a href="contactus.html">Contact Us</a></li>
          <li><a href = "help.html">Help</a></li>
          <li><a href="userlogin.php">Login</a></li>
          <li><a href="useregister.php">Signup</a></li>
          
       </ul>
    </div>
</div>
</div>
        <div style="border-radius: 5px;display: block;margin-left: auto;margin-top:100px;margin-right: auto;width: 30%;padding: 20px;";align="cenetr">
                 <form name="loginuser"action="" method="POST">
                 <input type="email"  name="email" placeholder="Your Email..">
                 <input type="password" name="pwd" placeholder="Your password..">
                 <input type="submit" value="Submit" name="submit">
                 <p style="color:white;">New User?  Please <a  href="useregister.php">SignUp</a></p>
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
$pwd = (isset($_POST['pwd']) ? $_POST['pwd'] : '');

//ek tarah se aisa likhna hai jaise ki 
$sq = "SELECT * FROM registertable WHERE EMAIL='$email' and PASS='$pwd'";
$upd = $conn->query($sq);
if ($upd->num_rows > 0) {
    echo'<center><span style="color: #e95959;text-align:center;"><h2>login successful welcome.$row["FNAME"].<h2></span></center>';
    header("Location:usd_inr.html");
  }
else
   { echo'<center><span style="color: white;font-family: "Times New Roman", Times, serif; text-align:center;"><h5>Sorry, your credentials are not valid, Please try again<h5></span></center>';
    
     //echo'<center><span style="color: white;font-family: "Times New Roman", Times, serif;text-align:center;"><h5>New User?<h5></span></center>';
   }
   }
?>

</div>
  </body>
</html>
              
