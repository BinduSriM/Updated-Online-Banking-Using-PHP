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
$sql = "INSERT INTO createacc (aadhar, accountnum, accounttype, address, age, balance, blood, confirm, fullname, gender, mail, mobile, nationality, pass, pin, pincode, username) VALUES(".$_POST['adnum'].", ".$_POST['acnum'].", '".$_POST['actype']."', '".$_POST['personaladdress']."', ".$_POST['age'].", ".$_POST['bal'].", '".$_POST['blood']."', '".$_POST['con']."', '".$_POST['text']."', '".$_POST['sex']."', '".$_POST['mail']."', ".$_POST['mobileno'].", '".$_POST['nan']."', '".$_POST['pass']."', ".$_POST['pinum'].", ".$_POST['pincode'].", '".$_POST['text1']."')";

if (mysqli_query($conn, $sql)) {
    echo "You have successfully created your account!!!";
    echo "<p><a href='login--css.html'>Login Here</a></p>";
} else {
    #echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Invalid details/ Username already exists. Check once and try again!!!";
}

mysqli_close($conn);
?> 
