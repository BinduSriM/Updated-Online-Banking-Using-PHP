<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$un=$_POST['user'];
$p=$_POST['pas'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "select * from createacc where username='".$un."'and pass='".$p."'";
$result=mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
//header("Location: project2.html");
if ($count==1) {
    //echo "<script>alert('yayy');</script>";
    //header("Location: homepage.html");
    //exit();
?> 

<!DOCTYPE html>
<html>
<head>
  
<style>
img.round{
border-radius:50%;
border-style:dashed;
border-color:#ffff00;
}
ul {
    list-style-type:none;
    margin:0px;
    padding:10px;
    font-size:20px;
    text-indent:20px;
    overflow:hidden;    
    <!--background-color:#333333;
    background-size:20px 10px;-->
}

li {
    float:left;
}

li a {
     display:block;
     color:black;
     margin:10px;
     font-family:verdana;
     text-align:left;
     padding:16px;
     text-decoration:none;  <!-- we can keep underline,overline,line-through -->
}

li a:hover {
     background-color:#ffffff;
}

li a:active {
     background-color:#e1e1e1;
}

li a:visited {
     background-color:"deeppink";
}
</style>
<meta name="viewport"
content="width=device-width,initial-scale=1.0">
</head>
<body style="background-image:url('assets/bgimg2.jpg');background-repeat: no-repeat;background-size:1500px 650px;">
<h1 style="text-align:right"><a href="logout.php">Logout</a></h1>
<h1 style="color:purple; padding:10px; margin:50px; text-align:center; font-family:algerian; font-size:50px; text-indent:0px;">Hi <?php echo $un?>, Welcome to OBS Digital Portal</h1>
<!--<p style="text-align:left;padding:10px">
<img src="Capture.PNG" class="round" width=200px height=200px></p>-->
<div>
<nav>
<ul>
  <li><p style="text-align:left; margin:0px;">
  <img src="assets/th.jpg" class="round" width=200px height=200px></p></li>
  <!--<p style="text-align:left; color:white; text-indent:0px;">well....want to know more about me..??? click down</p></li>-->
  <li><a href="profile.php?username=<?php echo($un); ?>&pass=<?php echo($p); ?>">Profile</a></li>
  <li><a href="account.php?username=<?php echo($un); ?>&pass=<?php echo($p); ?>">My account</a></li>
  <li><a href="transfer.php?username=<?php echo($un); ?>&pass=<?php echo($p); ?>">Transfer</a></li>
  <li><a href="dep-with.php?username=<?php echo($un); ?>&pass=<?php echo($p); ?>">Deposit/Withdraw</a></li>
  <li><a href="viewtrans.php?username=<?php echo($un); ?>&pass=<?php echo($p); ?>">View Transactions</a></li>
  <li><a href="loans.php?username=<?php echo($un); ?>&pass=<?php echo($p); ?>">Loans</a></li>
  <li><a href="settings.php?username=<?php echo($un); ?>&pass=<?php echo($p); ?>">Settings</a></li>
  <li><a href="sendmail.php">Contact</a></li>
  
</ul>
</nav>
</div>
</body>
</html>

<?php
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Incorrect username or password.  ";
    echo "<a href='login--css.html'>Try Again</a>";
}
mysqli_close($conn);
?>