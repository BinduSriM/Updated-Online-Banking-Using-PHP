<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<script type="text/javascript">
    function preventBack() { 
            window.history.forward();  

        } 
          
        setTimeout("preventBack()", 0); 
          
        window.onunload = function () { alert("You have logged in.");};
</script>
<style>
html{
background:url("assets/login.jpeg"); 
background-size: cover;
height: 100%;
overflow: hidden;
}
div{
text-align:center;
margin:200px 0px 0px 450px;
padding:35px;
width:350px;
background:url("assets/login2.jpg"); 
background-size: cover;
height: 100%;
overflow: hidden;
}
input:focus{
transform:scale(1,1.2);
}
</style>
</head>
<body>
<div>
<form name="f1" action="login-php.php" method="POST">
<table>
<tr>
<td><h2 style="color:#003366">Login Form</h2></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="user" placeholder="Enter Username"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pas" placeholder="Enter Password"></td>
</tr>
<tr></tr>
<tr>
<td><button>Submit</button></td>
</tr>
<tr>
<td style="padding-top:10px;">Go back to HomePage</td>	
<td style="padding-top:10px;"><a href="../MainPage.html">Home</a></td>
</tr>
</table>
<table>
</table>
</form>
</div>
</body>
</html>