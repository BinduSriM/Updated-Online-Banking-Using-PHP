function formValidate(){
var uname=document.form1.text1.value;
if(allLetter(uname)){

if(passCheck(document.form1.pass.value)){

if(passw(document.form1.pass.value,document.form1.con.value)){

if(ValidateEmail(document.form1.mail.value)){

if(allNumber(document.form1.age.value)){
  Validate();
}
}
}
}
}
return false;
}
function allLetter(uname)
  {
   var letters = /^[A-Za-z]+$/;
   if(uname.match(letters))
     {
      return true;
     }
   else
     {
     alert("Username must have only alphabets...!");
     return false;
     }
}
function passCheck(pass)
  {
   var passwo = "^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$";
   if(pass.match(passwo))
     {
      return true;
     }
   else
     {
     alert("Password must have an uppercase letter, a special character and a number with minimum of 6 characters");
     return false;
     }
}
function passw(pas,conn)
  {
   if(pas==conn)
     {
      return true;
     }
   else
     {
     alert("Password and Confirm Password must be same");
     return false;
     }
}
function allNumber(num)
  {
   var nums = /^[0-9]+$/;
	console.log(num);
   if(num.match(nums)&&num>=18)
     {
      return true;
     }
   else
     {
     alert("Age should be a number");
     return false;
     }
}
function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
return false;
}
}
function Validate(){
var isvalid=formValidate();
if(isvalid==true){
alert("yayyyy!");
}
else{
alert("fasak!");
}
}