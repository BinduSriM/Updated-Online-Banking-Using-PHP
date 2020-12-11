<!DOCTYPE html>
<html>
<head>
	<style>
		html{
			background-color:#e0ebeb; 
			background-size: cover;
			height: 100%;
		}
	</style>
</head>
<body>
<form action="storeloan.php" method="POST"> 
<table align="center" bgcolor="white" style="padding:50px;">
<tr>
<td><h1>Loan Application Form</h1></td>
</tr>

<tr>
<td><h3>Loan scheme, you want to apply for:</h3></td>
<td>
<?php
	$conn = mysqli_connect("localhost", "root", "", "student");
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM loans";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	$i=0;
	echo "<select name='loanid'>";
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<option value='".$row['loanid']."'>".$row['loanid']."</option>";
	}
	echo "</select>";
	}
	else{echo "<p>No loan schemes found";}
?>
</td>
</tr>

<tr>
<td><br><h2>Required Information</h2></td>
</tr>
<tr>
<td>Full Name</td>
<td><input type="text" name="name" size="30"></td>
</tr>

<tr>
<td>ID(AADHAR number)</td>
<td><input type="number" name="adnum" size="30"></td>
</tr>

<tr>
<td>Account Number</td>
<td><input type="number" name="accnum" size="30"></td>
</tr>

<tr>
<td><br><h2>Employment Information</h2></td>
</tr>
<tr>
<td>Present Employer</td>
<td><input type="text" name="present" size="30"></td>
</tr>

<tr>
<td>Occupation</td>
<td><input type="text" name="occupation" size="30"></td>
</tr>

<tr>
<td>Years of experience</td>
<td><input type="number" name="years" size="30"></td>
</tr>

<tr>
<td>Gross monthly income</td>
<td><input type="number" name="income" size="30"></td>
</tr>

<tr>
<td><br><br><button name="submit">Submit/Apply</button></td>
</tr>

</table>
</form>
</body>
</html>