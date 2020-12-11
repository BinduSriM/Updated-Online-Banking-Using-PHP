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
			<form action="blockemployee.php" method="POST">
				<h3>To add new employee details:</h3><br>
				<label>Enter Employee-ID:</label>
				<input type="text" name="id" size="20"/><br>
				<label>Enter Name:</label>
				<input type="text" name="name" size="20"/><br>
				<label>Select role:</label>
				<select name="role">
					<option value="No role">--select--</option>
					<option value="Cashier">Cashier</option>
					<option value="Clerk">Clerk</option>
					<option value="Financial Manager">Financial Manager</option>
				</select><br>
				<label>Enter address:</label>
				<input type="text" name="address" size="20"/><br>
				<label>Provide salary(per month):</label>
				<input type="number" name="salary" size="20"/><br>
				<button name="add">Add Employee</button>
			</form>
		</div>
<?php
	$conn = mysqli_connect("localhost", "root", "", "student");
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM employee";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	$i=0;
	// output data of each row
?>
	<div class="card border-0">
	<form action="blockemployee.php" method="POST">
		<h3>To delete employee permanently:</h3><br>
		<label>Enter employee-id:</label>
		<input type="text" name="id" size="20"/><br>
		<label>Enter role:</label>
		<select name="role">
			<option value="No role">--select--</option>
			<option value="Cashier">Cashier</option>
			<option value="Clerk">Clerk</option>
			<option value="Financial Manager">Financial Manager</option>
		</select><br>
		<button name="submit">Submit</button>
	</form>
</div>
</div>
	<br><hr><br>
	<h3>List of all employees, who are working in bank:</h3><br>
	<div class="card-columns">
<?php
	while($row = $result->fetch_assoc()) {
		echo "<div class='card'><div class='card-body'>";
		$i=$i+1;
		echo "<h4>".$row['empid']."</h4><div class='card-text'>1. Name: ".$row['name']."<br>2. Role: ".$row['role']."<br>3. Address: ".$row['address']."<br>4. Salary(per month): ".$row['salary']."";
			echo "</div></div></div>";
	}
	
	} //else { echo "<br><h5>No results found</h5>"; }
	$conn->close();
?>
</div>
</div>
</body>
</html>