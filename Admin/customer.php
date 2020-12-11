<!DOCTYPE html>
<html>
<head>
<title>Customers</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php
	$conn = mysqli_connect("localhost", "root", "", "student");
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM createacc";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	$i=0;
	// output data of each row
?>
<div class="container">
	<br>
	<form action="blockcustomer.php" method="POST">
		<h3>To Block/delete User permanently:</h3><br>
		<label>Enter Aadhar No:</label>
		<input type="text" name="aadhar" size="20"/><br>
		<label>Enter Account No:</label>
		<input type="text" name="account" size="20"/><br>
		<button name="submit">Submit</button>
	</form>
	<br><hr><br>
	<h3>List of all users in bank:</h3><br>
	<div class="card-columns">
<?php
	while($row = $result->fetch_assoc()) {
		echo "<div class='card'><div class='card-body'>";
		$i=$i+1;
		echo "<h4>".$row['fullname']."</h4><div class='card-text'>1. Aadhar No: ".$row['aadhar']."<br>2. Account No: ".$row['accountnum']."<br>3. Account type: ".$row['accounttype']."<br>4. Email: ".$row['mail']."<br>5. Mobile: ".$row['mobile']."<br>6. Balance: ".$row['balance']."<br>7. Username: ".$row['username']."<br>8. Age: ".$row['age']."<br>9. Address: ".$row['address']."<br>10. Nationality: ".$row['nationality']."";
			echo "</div></div></div>";
	}
	
	} else { echo "<h3>No results found</h3>"; }
	$conn->close();
?>
</div>
</div>
</body>
</html>