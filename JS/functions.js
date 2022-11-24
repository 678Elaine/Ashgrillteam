function ValidateEmail(inputText)
{
var mailformat =  /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@(ashesi.edu.gh)$/; 
if(inputText.value.match(mailformat))
{
alert("Valid email address!");
document.form1.text1.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.text1.focus();
return false;
}
}



//Javascript function to check if the value of the phone number entered is a number
function checkExpression(stringToCheck)
{
var expression=/^[0-9]+$/;
if (stringToCheck.value.match(expression))
{
   alert('Input successful');
  document.form1.number.focus();
  return true;

}else{
  alert('Please enter a number for the Phone number');
  document.form1.number.focus()
}
}