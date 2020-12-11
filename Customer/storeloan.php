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
if(isset($_POST['submit'])){
$sql = "INSERT INTO loanapplication (loanid,fullname,aadhar,accountnum,present,occupation,years,income) VALUES('".$_POST['loanid']."', '".$_POST['name']."', '".$_POST['adnum']."', '".$_POST['accnum']."', '".$_POST['present']."', '".$_POST['occupation']."', ".$_POST['years'].",".$_POST['income'].")";

if (mysqli_query($conn, $sql)) {
    echo "You have submitted your loan application!!! If you are eligible, manager will contact you regarding further process through email/phone";
    echo "<br><INPUT TYPE='button' VALUE='Back' onClick='history.go(-1);'></INPUT></br>";
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Couldn't submit loan application. Check details and Please try again!!!";
}
}

mysqli_close($conn);
?>