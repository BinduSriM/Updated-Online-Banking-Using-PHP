<?php
$un=$_POST['user'];
$p=$_POST['pas'];

if ($un=="Admin"&&$p=="OBSadmin1234567890") {
    
?> 

<!DOCTYPE html>
<html>
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
  <li><a href="profile.php">Profile</a></li>
  <li><a href="customer.php">Customers</a></li>
  <li><a href="viewtrans.php">View Transactions</a></li>
  <li><a href="employee.php">Employees</a></li>
  <li><a href="loans.php">Loan Schemes</a></li>
  <li><a href="loanapplication.php">Loan Applications</a></li>
  <li><a href="sendmail.php">Send an Email</a></li>
</ul>
</nav>
</div>
</body>
</html>

<?php
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Incorrect username or password.  ";
    echo "<a href='login.php'>Try Again</a>";
}
?>