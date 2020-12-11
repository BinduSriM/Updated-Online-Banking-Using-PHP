<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
$un=$_GET['username'];
$p=$_GET['pass'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    $sql="select * from createacc where username='".$un."'and pass='".$p."'";
	$result = mysqli_query($conn,$sql);
 
 $test = mysqli_fetch_array($result);
 $bal=$test['balance'];
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Transaction</title>
</head>

 
<body style="background-image:url('assets/transfer.jpg');background-repeat: no-repeat;background-size:1500px 650px;"
<center>
<form method="POST">
<table cellpadding="3" width="30%" bgcolor="99FFFF" align="center"
cellspacing="5" id="id1">

<tr>
<td colspan=2>
<h2>Deposit/Withdraw amount</h2>
</td>
</tr>

<tr>
<td>Full Name</td>
<td><input type="text" name="text" id="textname" size="30" value="<?php echo($test['fullname']); ?>" disabled></td>
</tr>

<tr>
<td>Account Number</td>
<td><input type="number" name="acnum" id="accnum" size="30" value=<?php echo($test['accountnum']); ?> disabled></td>
</tr>

<tr>
<td>Account Type</td>
<td><input type="text" name="actype" id="acctype" size="30" value=<?php echo($test['accounttype']); ?> disabled></td>
</tr>

<tr>
<td>Available Balance</td>
<td><input type="number" name="bal" id="ball" size="30" value=<?php echo($test['balance']); ?> disabled></td>
</tr>

<tr>
<td>Amount to be deposited/withdrawn:</td>
<td><input type="number" name="amount" id="amo" size="30"></td>
</tr>

<tr>
<td>Enter Your Pin</td>
<td><input type="password" name="pin" id="pin" size="30"></td>
</tr>

<br>
<tr>
<!--<td><input type="submit" name="back" value="Back"/></td>-->
<td><INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);"></INPUT></td>
<td colspan="2" id="sub"><input type="submit" name="save" value="Deposit"/></td>
<td colspan="2" id="sub"><input type="submit" name="save1" value="Withdraw"/></td>
</tr>

</table>
</form>
</center>
</body>
</html>

<?php
/*if(isset($_POST['back'])){
	header("Location: login-php.php");
}*/
if(isset($_POST['save'])){
	$bal2=$bal+$_POST['amount'];
	$sql2="update createacc set balance=".$bal2." where accountnum=".$test['accountnum']." and pin=".$_POST['pin']."";
	$currentDateTime = date('Y-m-d H:i:s');
	$sql3="insert into deposit (username,pass,fullname,accountnum,amount,date) values('".$un."','".$p."','".$test['fullname']."',".$test['accountnum'].",".$_POST['amount'].",'".$currentDateTime."');";

	if (mysqli_query($conn, $sql2)&&$test['pin']==$_POST['pin']&&mysqli_query($conn, $sql3)) {
    echo "<script>alert('Deposited successfully'); history.go(-1);</script>";
	} else {
    	//echo "Error updating record: " . mysqli_error($conn);
    	echo "<script>alert('You have entered wrong details(pin)'); history.go(-1);</script>";
	}
	}
if(isset($_POST['save1'])){

	if($bal<$_POST['amount']){
		echo "<script>alert('Could not withdraw amount as you do not have enough money!!!')</script>";;
	}
	elseif($bal>=$_POST['amount']){
	$bal2=$bal-$_POST['amount'];
	$sql2="update createacc set balance=".$bal2." where accountnum=".$test['accountnum']." and pin=".$_POST['pin']."";
	$currentDateTime = date('Y-m-d H:i:s');
	$sql3="insert into withdraw (username,pass,fullname,accountnum,amount,date) values('".$un."','".$p."','".$test['fullname']."',".$test['accountnum'].",".$_POST['amount'].",'".$currentDateTime."');";

	if (mysqli_query($conn, $sql2)&&$test['pin']==$_POST['pin']&&mysqli_query($conn, $sql3)) {
    echo "<script>alert('Withdrawn successfully'); history.go(-1);</script>";
	} else {
		//echo "Error updating record: " . mysqli_error($conn);
    	echo "<script>alert('You have entered wrong details(pin)'); history.go(-1);</script>";
	}
	}
	
}
mysqli_close($conn);
 ?>