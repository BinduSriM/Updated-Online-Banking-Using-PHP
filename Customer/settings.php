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
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
</style>
</head>
<body>


<h3>Settings</h3>
<h4>If you want to change pin number. Please visit home branch:)</h4>
<form method="POST">
<table>
  <tr>
    <td><h2>Change Password</h2></th>
  </tr>
  <tr>
    <td>Old Password</td>
    <td><input type="text" name="pa"></td>
  </tr>
  <tr>
    <td>New Password</td>
    <td><input type="password" name="npa"></td>
  </tr>
  <tr>
    <td>Confirm new Password</td>
    <td><input type="password" name="cpa"></td>
  </tr>
  <tr>
    <td><input type="submit" name="change" value="Change"></td>
  </tr>
</table>

<table>
  <tr></tr>
  <tr>
    <td><h2>Want to delete your account permanently?</h2></td>
  </tr>
  <tr>
    <td><input type="submit" name="del" value="Click here:("></td>
  </tr>
</form>
</body>
</html>


<?php
if(isset($_POST['change'])){
  $sql="update createacc set pass='".$_POST['npa']."', confirm='".$_POST['npa']."' where username='".$un."'";
  $sql1="update deposit set pass='".$_POST['npa']."' where username='".$un."'";
  $sql2="update transfer set pass='".$_POST['npa']."' where username='".$un."'";
  $sql3="update withdraw set pass='".$_POST['npa']."' where username='".$un."'";
  if(mysqli_query($conn, $sql)&&$_POST['npa']==$_POST['cpa']&&$_POST['pa']==$test['pass']&&mysqli_query($conn, $sql1)&&mysqli_query($conn, $sql2)&&mysqli_query($conn, $sql3)){
      echo "<script>alert('Password Changed successfully. To keep the changes logout and login again with new password'); history.go(-1);</script>";
  }
  else{
      echo "<script>alert('Enter valid details!!!'); history.go(-1);</script>";
  }
}
if(isset($_POST['del'])){
  $sql="delete from createacc where username='".$un."' and pass='".$p."'";
  //echo(mysqli_query($conn, $sql));
  if(mysqli_query($conn, $sql)){
    //echo(mysqli_query($conn, $sql));
    header("Location: del.html");
  }
  else{
      #echo "Error deleting record: " . mysqli_error($conn);
    echo "<scrpt>alert('Account does not exist.');(history.go(-1);</script>";
  }
}
mysqli_close($conn);
?>