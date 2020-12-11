<?php
$conn = mysqli_connect("localhost", "root", "", "student");
if(isset($_POST['submit'])){
	$sql="delete from createacc where aadhar=".$_POST['aadhar']." and accountnum=".$_POST['account'].";";
	$sql1="select * from createacc where aadhar=".$_POST['aadhar']." and accountnum=".$_POST['account'].";";
	$result=$conn->query($sql1);
	if ($result->num_rows > 0&&$conn->query($sql)) {
    echo "User blocked/deleted successfully";
	} else {
    	//echo "Error updating record: " . mysqli_error($conn);
    	echo "No such user exists. Enter valid details!!!";
	}
}
?>