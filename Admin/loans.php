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
<br><br>
<div class="container">
	<div class="card-deck">
		<div class="card border-0">
			<form action="deleteloan.php" method="POST">
				<h3>To add new loan schemes:</h3><br>
				<label>Loan-ID (Unique):</label>
				<input type="text" name="id" size="20"/><br>
				<label>Enter Loan Name:</label>
				<input type="text" name="name" size="20"/><br>
				<label>Purpose of Loan:</label>
				<textarea name="purpose" rows="1" cols="30"></textarea><br>
				<label>Enter eligibility:</label>
				<textarea name="eligibility" rows="3" cols="30"></textarea><br>
				<label>Give full details:</label>
				<textarea name="details" rows="3" cols="30"></textarea><br>
				<button name="add">Add loan scheme</button>
			</form>
		</div>
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
	// output data of each row
?>
	<div class="card border-0">
	<form action="deleteloan.php" method="POST">
		<h3>To delete loan scheme permanently:</h3><br>
		<label>Enter loan-id:</label>
		<input type="text" name="id" size="20"/><br>
		<label>Enter loan name:</label>
		<input type="text" name="name" size="20"/><br>
		<button name="submit">Submit</button>
	</form>
</div>
</div>
	<br><hr><br>
	<h3>List of all loan schemes, you have added:</h3><br>
	<p>These will be also visible for customers in your bank:)</p>
	<div class="card-columns">
<?php
	while($row = $result->fetch_assoc()) {
		echo "<div class='card'><div class='card-body'>";
		$i=$i+1;
		echo "<h4>".$row['loanid']."</h4><div class='card-text'><b>1. Loan name: </b>".$row['name']."<br><b>2. Purpose: </b>".$row['purpose']."<br><b>3. Eligibility: </b>".$row['eligibility']."<br><b>4. Details: </b>".$row['details']."";
			echo "</div></div></div>";
	}
	
	} //else { echo "<br><h5>No results found</h5>"; }
	$conn->close();
?>
</div>
</div>
</body>
</html>