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
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="assets/form.css">
</head>

 
<body onload='document.form1.text.focus()'>
<center>
	<form method="POST">
<table cellpadding="3" width="30%" bgcolor="99FFFF" align="center"
cellspacing="5" id="id1">

<tr>
<td colspan=2>
<h2>Your personal details</h2>
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
<td>User Name</td>
<td><input type="text" name="text1" id="textname" size="30" value="<?php echo($test['username']); ?>" disabled></td>
</tr>

<tr>
<td>Email-Id</td>
<td><input type="text" name="mail" id="emailid" size="30" value=<?php echo($test['mail']); ?> disabled></td>
</tr>

<tr>
<td>MobileNo</td>
<td><input type="text" name="mobileno" id="mobileno" size="30" value=<?php echo($test['mobile']); ?>></td>
</tr>

<tr>
<td>Nationality</td>
<td><input type="text" name="nan" id="nat" size="30" value=<?php echo($test['nationality']); ?>></td>
</tr>

<tr>
<td>Age</td>
<td><input type="number" name="age" id="dob" size="30" value=<?php echo($test['age']); ?>></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="text" name="sex" id="sex" size="30" value=<?php echo($test['gender']); ?>></td>
</tr>

<tr>
<td>Blood Group</td>
<td><input type="text" name="blood" id="bg" size="30" value=<?php echo($test['blood']); ?>></td>
</tr>

<tr>
<td>Address</td>
<td><input type="text" name="personaladdress"
id="personaladdress" size="30" value="<?php echo($test['address']); ?>"></td>
</tr>

<tr>
<td>PinCode</td>
<td><input type="text" name="pincode" id="pincode" size="30" value=<?php echo($test['pincode']); ?>></td>
</tr>

<br>
<tr>
<!--<td><input type="submit" name="back" value="Back"/></td>-->
<td><INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);"></INPUT></td>
<td colspan="2" id="sub"><input type="submit" name="save" value="Edit and Save"/></td>
</tr>

</table>
</form>
</center>
</body>
</html>

<?php
/*if(isset($_POST['back'])){
	header("Location: login-php.php");
}*/
if(isset($_POST['save'])){
	$sql="update createacc set mobile='".$_POST['mobileno']."', nationality='".$_POST['nan']."', age=".$_POST['age'].", gender='".$_POST['sex']."', blood='".$_POST['blood']."', address='".$_POST['personaladdress']."', pincode='".$_POST['pincode']."' where username='".$un."'and pass='".$p."'";
	if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record updated successfully'); history.go(-1);</script>";
	} else {
    	//echo "Error updating record: " . mysqli_error($conn);
    	echo "<script>alert('Could not update record! Check details and try again'); history.go(-1);</script>";
	}
}


 ?>