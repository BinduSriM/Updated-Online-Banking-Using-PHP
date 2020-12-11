<!DOCTYPE html>
<html>
<head>
<title>View transactions</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: sans-serif;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>

<h1>Transactions related to transfer:</h1>
<?php
	$conn = mysqli_connect("localhost", "root", "", "student");
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM transfer";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	$i=0;
	// output data of each row
?>
<table>
<tr>
<th>Id</th>
<th>FullName</th>
<th>AccountNo</th>
<th>TransferAccountNo</th>
<th>Amount</th>
<th>Date and time</th>
</tr>
<?php
	while($row = $result->fetch_assoc()) {
		$i=$i+1;
		echo "<tr><td>" .$i. "</td><td>" . $row["fullname"] . "</td><td>" . $row["accountnum"]. "</td><td>" . $row["transacc"]."</td><td>" . $row["amount"]. "</td><td>" . $row["date"]. "</td></tr>";
	}
	echo "</table>";
	} else { echo "<h3>No results found</h3>"; }
	$conn->close();
?>
</table>
<br>

<h1>Transactions related to deposit:</h1>
</tr>
<?php
	$conn = mysqli_connect("localhost", "root", "", "student");
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM deposit";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	$i=0;
	// output data of each row
?>
<table>
<tr>
<th>Id</th>
<th>FullName</th>
<th>AccountNo</th>
<th>Amount</th>
<th>Date and time</th>
<?php
	while($row = $result->fetch_assoc()) {
		$i=$i+1;
		echo "<tr><td>" .$i. "</td><td>" . $row["fullname"] . "</td><td>" . $row["accountnum"]. "</td><td>" . $row["amount"]. "</td><td>" . $row["date"]. "</td></tr>";
	}
	echo "</table>";
	} else { echo "<h3>No results found</h3>"; }
	$conn->close();
?>
</table>
<br>

<h1>Transactions related to withdraw:</h1>
<?php
	$conn = mysqli_connect("localhost", "root", "", "student");
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM withdraw";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	$i=0;
	// output data of each row
?>
<table>
<tr>
<th>Id</th>
<th>FullName</th>
<th>AccountNo</th>
<th>Amount</th>
<th>Date and time</th>
</tr>

<?php
	while($row = $result->fetch_assoc()) {
		$i=$i+1;
		echo "<tr><td>" .$i. "</td><td>" . $row["fullname"] . "</td><td>" . $row["accountnum"]. "</td><td>" . $row["amount"]. "</td><td>" . $row["date"]. "</td></tr>";
	}
	echo "</table>";
	} else { echo "<h3>No results found</h3>"; }
	$conn->close();
?>
</table>
</body>
</html>