<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    $sql="select sum(balance) as balance from createacc";
	$result = mysqli_query($conn,$sql);
 
 $test = mysqli_fetch_array($result);
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="assets/form.css">
</head>

 
<body>
<center>
	<form method="POST">
<table cellpadding="3" width="30%" bgcolor="99FFFF" align="center"
cellspacing="5" id="id1">

<tr>
<td colspan=2>
<h2>Bank Details</h2>
</td>
</tr>

<tr>
<td>IFSC Code of the bank</td>
<td><input type="text" size="30" value="ONB12345678" disabled></td>
</tr>

<tr>
<td>Name</td>
<td><input type="text" size="30" value="OBS Digital" disabled></td>
</tr>

<tr>
<td>Email-Id</td>
<td><input type="text" name="mail" id="emailid" size="30" value="bindusolutionsorg@gmail.com" disabled></td>
</tr>

<tr>
<td>MobileNo</td>
<td><input type="text" name="mobileno" id="mobileno" size="30" value="9876543210" disabled></td>
</tr>

<tr>
<td>Total available balance in bank</td>
<td><input type="text" size="30" value=<?php echo($test['balance']); ?> disabled></td>
</tr>

<tr>
<td>Established Year</td>
<td><input type="number" size="30" value="2018" disabled></td>
</tr>

<tr>
<td>Address</td>
<td><input type="text" name="personaladdress"
id="personaladdress" size="30" value="Guntur, Andhra Pradesh" disabled></td>
</tr>

<tr>
<td>PinCode</td>
<td><input type="text" name="pincode" id="pincode" size="30" value="522016" disabled></td>
</tr>

<tr>
<td>Country</td>
<td><input type="text" name="nan" id="nat" size="30" value="India" disabled></td>
</tr>

<br>
<tr>
<!--<td><input type="submit" name="back" value="Back"/></td>-->
<td><INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);"></INPUT></td>
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
    echo "<script>alert('Record updated successfully')</script>";
	} else {
    	echo "Error updating record: " . mysqli_error($conn);
	}
}


 ?>