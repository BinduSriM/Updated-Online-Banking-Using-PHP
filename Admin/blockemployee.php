<?php
$conn = mysqli_connect("localhost", "root", "", "student");
if(isset($_POST['submit'])){
	$sql="delete from employee where empid='".$_POST['id']."' and role='".$_POST['role']."';";
	$sql1="select * from employee where empid='".$_POST['id']."' and role='".$_POST['role']."';";
	$result=$conn->query($sql1);
	if ($result->num_rows > 0&&$conn->query($sql)) {
    echo "Employee deleted successfully";
	} else {
    	//echo "Error updating record: " . mysqli_error($conn);
    	echo "No such employee exists. Enter valid details!!!";
	}
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['add'])){
$sql = "INSERT INTO employee (empid,name,role,address,salary) VALUES('".$_POST['id']."', '".$_POST['name']."', '".$_POST['role']."', '".$_POST['address']."', ".$_POST['salary'].")";

if (mysqli_query($conn, $sql)) {
    echo "You have successfully added new employee details!!!";
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Couldn't add details/EmployeeID already exists. Check details and Please try again!!!";
}
}

mysqli_close($conn);
?>