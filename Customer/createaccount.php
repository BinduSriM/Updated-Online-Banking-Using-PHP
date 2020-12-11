<!DOCTYPE html>
<html>
<head>
<title>Account Creation Form</title>
<link rel="stylesheet" type="text/css" href="assets/form.css">
<script src="assets/form.js"></script>
</head>

 
<body onload='document.form1.text.focus()'>
<table align="right">
<td><h3 id="id2">Already a user? <a href="login--css.html" target="_blank">Login Here</a></h3></td>
</table>
<table align="center">
<tr>
<td><h1>Online Banking</h1></td>
</tr>
<center>
<form name="form1" action="project2.php" method="post" onSubmit="return formValidate();">
<table cellpadding="3" width="30%" bgcolor="#99FFFF" align="center"
cellspacing="5" id="id1">

<tr>
<td colspan=2>
<h2>Create Account</h2>
</td>
</tr>

<tr>
<td>Full Name</td>
<td><input type="text" name="text" id="textname" size="30" placeholder="Enter your name" required></td>
</tr>

<tr>
<td>ID(AADHAR number)</td>
<td><input type="number" name="adnum" id="adhnum" size="30" placeholder="Aadhar No" required></td>
</tr>

<tr>
<td>Account Number</td>
<td><input type="number" name="acnum" id="accnum" size="30" placeholder="Account No" required></td>
</tr>

<tr>
<td>Account Type</td>
<td><input type="text" name="actype" id="acctype" size="30"></td>
</tr>

<tr>
<td>PIN Number</td>
<td><input type="password" name="pinum" id="pinnum" size="30" required></td>
</tr>

<tr>
<td>Balance</td>
<td><input type="number" name="bal" id="ball" size="30" required></td>
</tr>

<tr>
<td>User Name</td>
<td><input type="text" name="text1" id="textname" size="30" required></td>
</tr>

<tr>
<td>Password</td>
<td><input type="text" name="pass" id="textname" size="30"></td>
</tr>

<tr>
<td>Confirm Password</td>
<td><input type="text" name="con" id="textname" size="30"></td>
</tr>

<tr>
<td>Email-Id</td>
<td><input type="text" name="mail" id="emailid" size="30" required></td>
</tr>

<tr>
<td>MobileNo</td>
<td><input type="text" name="mobileno" id="mobileno" size="30" required></td>
</tr>

<tr>
<td>Nationality</td>
<td><input type="text" name="nan" id="nat" size="30"></td>
</tr>

<tr>
<td>Date Of Birth</td>
<td><input type="date" name="dob" id="dob" size="30"></td>
</tr>

<tr>
<td>Age</td>
<td><input type="number" name="age" id="dob" size="30"></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="radio" name="sex" value="male" size="10">Male
<input type="radio" name="sex" value="Female" size="10">Female</td>
</tr>

<tr>
<td>Blood Group</td>
<td><select name="blood" required>
<option value="-1" selected>select..</option>
<option value="opos">O+</option>
<option value="oneg">O-</option>
<option value="apos">A+</option>
<option value="aneg">A-</option>
<option value="bpos">B+</option>
<option value="bneg">B-</option>
<option value="abpos">AB+</option>
<option value="abneg">AB-</option>
</select>
</td>
</tr>

<tr>
<td>Address</td>
<td><input type="text" name="personaladdress"
id="personaladdress" size="30"></td>
</tr>

<tr>
<td>PinCode</td>
<td><input type="text" name="pincode" id="pincode" size="30"></td>
</tr>

<br>
<tr>
<td><input type="reset"></td>
<td colspan="2" id="sub"><input type="submit" value="Submit" /></td>
</tr>

</table>
</form>
</center>
</body>
</html>
