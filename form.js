 //Set the colors we will be using ...
var goodColor = "#66cc66";
var badColor = "#ff6666";

function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('psw');
    var pass2 = document.getElementById('psw-repeat');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
   
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  
function check_form()
{
var passw = document.getElementById('psw').value;
var passw2 = document.getElementById('psw-repeat').value;
var mob = document.getElementById('mobile_number').value;
var letter = /[a-z]/;
 var letterUp= /[A-Z]/;
var number = /[0-9]/;
if(mob.length!== 10){
    alert("please enter a valid mobile number")
    return false;
}

if(passw.length < 6 || passw != passw2 || !letter.test(passw) || !number.test(passw) ) {
      if(passw.length<6){
      alert("Please make sure password is longer than 6 characters.")
      return false;
      }
      if(!letter.test(passw) || !letterUp.test(passw)){
      alert("Please make sure Password Includes an UpperCase and LowerCase character")
      return false;
      }
      if(!number.test(passw)){
      alert("Please make sure Password Includes a Digit")
      return false;     
  }

  /*email test*/
var email = document.getElementById('email').value;
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (!filter.test(email)) {
     alert('Please provide a valid email address');
     return false;
}


return true;
}
}