<?php include 'database.php'; ?>

<?php

// create a variable
$first_name=$_POST['name'];
$email=$_POST['email'];
$birthday_month=$_POST['birthday_month'];
$birthday_day=$_POST['birthday_day'];
$birthday_year=$_POST['birthday_year'];
$gender=$_POST['radiobutton'];
$password=$_POST['psw'];
$mobile=$_POST['mobile_number'];

//Execute the query


mysqli_query($connect,"INSERT INTO user (name,email,birthday_month,birthday_day,birthday_year,gender,password,mobile_number)
		        VALUES ('$name','$email','$birthday_month','$birthday_day','$birthday_year','$gender','$password','$mobile')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Employee Added</p>";
	echo "<a href="form.php">Go Back</a>";
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($connect);
}
?>