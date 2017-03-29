<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="form.css">
	<script type="text/javascript" src="form.js"></script>
</head>
<body>
<form name="signupform" action="process.php" method="post">
  <div class="container">
  	<label for="name"><b>Name</b></label>
  	<input type="text" placeholder="Enter Name" name="name" id="name"  required onclick="validateform(); return false;" >
  	<span id="confirm" class="confirm"></span>

    <label for ="mobile"><b>Mobile number</b></label>
    <input type="text" placeholder="Enter mobile number" name="mobile_number" id="mobile_number" required onclick="formvalidation(); return false;">
    <span id="con" class="con"></span>

    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required >

    <div>
        <h4 class="birthday_title"><b>Birthday</b></h3>
      </div>
     <div>
        <select name="birthday_month" >
          <option value="" selected >Month</option>
          <option value="1">Jan</option>
          <option value="2">Feb</option>
          <option value="3">Mar</option>
          <option value="4">Apr</option>
          <option value="5">May</option>
        </select>
        &nbsp;&nbsp;
        <select name="birthday_day" >
          <option value="" selected>Day</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
        &nbsp;&nbsp;
        <select name="birthday_year">
          <option value="" selected>Year</option>
          <option value="2013">2013</option>
          <option value="2012">2012</option>
          <option value="2011">2011</option>
          <option value="2010">2010</option>
          <option value="2009">2009</option>
        </select>
        &nbsp;&nbsp;
      </div>
      <!--birthday details ends-->
      <div id="radio_button">
        <input type="radio" name="radiobutton" value="Female">
        <label >Female</label>
        <input type="radio" name="radiobutton" value="Male">
        <label >Male</label>
      </div>
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="enter password" id="psw" name="psw" value="test" required onclick="formvalidation(); return false;">
    <span id="confirmation" class="confirmation"></span> 


    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required onkeyup="checkPass(); return false;" >
    <span id="confirmMessage" class="confirmMessage"></span>

    <br><input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button"  class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" id="password-input-2" onclick="check_form()">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>


