<?php
$conn = mysqli_connect("localhost", "root", "", "student");
if(isset($_POST['submit'])){
	$sql="delete from loans where loanid='".$_POST['id']."' and name='".$_POST['name']."';";
	$sql1="select * from loans where loanid='".$_POST['id']."' and name='".$_POST['name']."';";
	$result=$conn->query($sql1);
	if ($result->num_rows > 0&&$conn->query($sql)) {
    echo "Loan scheme deleted successfully";
	} else {
    	//echo "Error updating record: " . mysqli_error($conn);
    	echo "No such loan scheme exists. Enter valid details!!!";
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
$sql = "INSERT INTO loans (loanid,name,purpose,eligibility,details) VALUES('".$_POST['id']."', '".$_POST['name']."', '".$_POST['purpose']."', '".$_POST['eligibility']."', '".$_POST['details']."')";

if (mysqli_query($conn, $sql)) {
    echo "You have successfully added new loan scheme details!!!";
} else {
    #echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Couldn't add details/LoanID already exists. Check details and Please try again!!!";
}
}

mysqli_close($conn);
?>