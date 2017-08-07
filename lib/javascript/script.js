
/*create a function thatll check for empty form values*/
//creat the function
function validateform() {
  var errormessage= "" ;
  //check if missing first and last name values
   if (document.getElementById('fname').value =="") {
   errormessage += "Enter your First Name \n";
   // red bored to indicate missing data
     document.getElementById("fname").style.borderColor = "red";
}
if (document.getElementById('lname').value =="") {
errormessage += "Enter your Last Name \n";
  document.getElementById("lname").style.borderColor = "red";
}
if (document.getElementById('email').value =="") {
errormessage += "Enter your email \n";
  document.getElementById("email").style.borderColor = "red";
/// if not both empty return the message.
}
if (errormessage != "") {
 alert(errormessage);
 //return false stop the form.
  return false;
}

}

function validate(inputnum) {
  var num = /^[0-9] + $/;
  if (document.getElementById('inputnum').value.match(num)) {
   alert ("Thank you, I got your number")
 } else {
   alert ("Doh, please enter the correct number.");
 }
}
