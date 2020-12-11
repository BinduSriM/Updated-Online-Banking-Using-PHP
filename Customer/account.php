<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
$un=$_GET['username'];
$p=$_GET['pass'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    $sql="select * from createacc where username='".$un."'and pass='".$p."'";
	$result = mysqli_query($conn,$sql);
 
 $test = mysqli_fetch_array($result);
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Account</title>
<link rel="stylesheet" type="text/css" href="assets/form.css">
</head>

 
<body onload='document.form1.text.focus()'>
<center>
	<form method="POST">
<table cellpadding="3" width="30%" bgcolor="99FFFF" align="center"
cellspacing="5" id="id1">

<tr>
<td colspan=2>
<h2>Your account details</h2>
</td>
</tr>

<tr>
<td>Full Name</td>
<td><input type="text" name="text" id="textname" size="30" value="<?php echo $test['fullname']; ?>" disabled></td>
</tr>

<tr>
<td>ID(AADHAR number)</td>
<td><input type="number" name="adnum" id="adhnum" size="30" value=<?php echo($test['aadhar']); ?> disabled></td>
</tr>

<tr>
<td>Account Number</td>
<td><input type="number" name="acnum" id="accnum" size="30" value=<?php echo($test['accountnum']); ?> disabled></td>
</tr>

<tr>
<td>Account Type</td>
<td><input type="text" name="actype" id="acctype" size="30" value="<?php echo($test['accounttype']); ?>" disabled></td>
</tr>

<tr>
<td>Balance</td>
<td><input type="number" name="bal" id="ball" size="30" value=<?php echo($test['balance']); ?> disabled></td>
</tr>

<tr>
<td>User Name</td>
<td><input type="text" name="text1" id="textname" size="30" value="<?php echo($test['username']); ?>" disabled></td>
</tr>

<tr>
<td>Email-Id</td>
<td><input type="text" name="mail" id="emailid" size="30" value=<?php echo($test['mail']); ?> disabled></td>
</tr>
<br>
<tr>
<!--<td><input type="submit" name="back" value="Back"/></td>-->
<td><INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);"></INPUT></td>
</tr>
<br>
</table>
</form>
</center>
</body>
</html>